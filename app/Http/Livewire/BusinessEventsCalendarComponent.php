<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Business;
use App\Models\BusinessCalenderEvent;
use Carbon\Carbon;
use Livewire\Component;

class BusinessEventsCalendarComponent extends Component
{
    const show_business = false;
    public array $eventsList;
    public $openEvent = false;
    public $readonlyEvent = true;
    public $initialDate = null;
    public $timezone = null;
    public $dateFrom = null;
    public $dateTo = null;
    public $selectedEvent = [];
    public Business $business;
    public $currentView = 'dayGridMonth';
    public $eventTextColor = '#1f2937';
    public $eventTypes = [
        'course' => ['name' => 'Course', 'color' => 'blue', 'color-hex' => '#bfdbfe'],
        'ad' => ['name' => 'AD', 'color' => 'red', 'color-hex' => '#fecaca'],
        'meeting' => ['name' => 'Meeting', 'color' => 'indigo', 'color-hex' => '#c7d2fe'],
        'campaign' => ['name' => 'Campaign', 'color' => 'yellow', 'color-hex' => '#fef08a'],
        'blog' => ['name' => 'Blog', 'color' => 'pink', 'color-hex' => '#fbcfe8'],
        'other' => ['name' => 'Other', 'color' => 'green', 'color-hex' => '#bbf7d0'],
    ];
    public $upcomingEvents = [];
    //    protected $rules = [
    //        'timezone' => 'required',
    //        'selectedEvent.name' => 'required',
    //        'selectedEvent.type' => 'required',
    //        'selectedEvent.date' => 'required|date_format:Y-m-d|after:yesterday',
    //        'selectedEvent.startTime' => 'required|date_format:H:i',
    //        'selectedEvent.endTime' => 'nullable|date_format:H:i|after:selectedEvent.startTime',
    //        'selectedEvent.description' => 'nullable',
    //    ];
    protected $validationAttributes = [
        'selectedEvent.name' => 'event name',
        'selectedEvent.date' => 'event date',
        'selectedEvent.startTime' => '"from" time',
        'selectedEvent.endTime' => '"to" time',
        'selectedEvent.description' => 'event description',
    ];
    protected $queryString = [
        'dateFrom' => [
            'as' => 'from',
            'except' => '',
        ],
        'dateTo' => [
            'as' => 'to',
            'except' => '',
        ],
    ];

    public function mount()
    {
        //        dd(auth()->user()->timezone ?? config('app.timezone'));
        //        $this->timezone = 'local';
        $this->timezone = auth()->user()->timezone ?? config('app.timezone');
        //        date_default_timezone_set($this->timezone);
        if (!$this->dateFrom) {
            $dateFrom = today()
                //                ->utc()
                ->startOfMonth();
            $this->dateFrom = $dateFrom->format('Y-m-d');
        } else {
            $dateFrom = Carbon::parse($this->dateFrom, $this->timezone);
        }
        if (!$this->dateTo) {
            $dateTo = today()
                //->utc()
                ->endOfMonth();
            $this->dateTo = $dateTo->format('Y-m-d');
        } else {
            $dateTo = Carbon::parse($this->dateTo, $this->timezone);
        }

        $midpoint = $dateFrom->copy()->addDays($dateTo->diffInDays($dateFrom) / 2);
        //        dd($dateFrom->toIso8601String(), $dateTo->toIso8601String(), $midpoint->toIso8601String());
        $this->initialDate = $midpoint
            //->utc()
            ->toIso8601String();
        $this->detectView();

        $this->business = auth()
            ->user()
            ->actingAsBusiness();
        $this->updateEventsList();
    }

    private function detectView(): void
    {
        $daysDiff = Carbon::parse($this->dateTo, $this->timezone)->diffInDays(
            Carbon::parse($this->dateFrom, $this->timezone),
        );
        if ($daysDiff > 7) {
            $this->currentView = 'dayGridMonth';
        } elseif ($daysDiff < 7) {
            $this->currentView = 'timeGridDay';
        } else {
            $this->currentView = 'timeGridWeek';
        }
    }

    public function updateEventsList($dateFrom = null, $dateTo = null): void
    {
        $dateFrom = $dateFrom ?? $this->dateFrom;
        $dateTo = $dateTo ?? $this->dateTo;

        $this->eventsList = $this->business
            ->calendarEvents()
            ->whereBetween('start_date', [$dateFrom, $dateTo])
            ->get()
            ->map(function (BusinessCalenderEvent $event) {
                //                $color = $this->eventTypes[$event->event_type]['color'];
                $is_editable = !$event->course_id && !$event->teaser_original_draft_id;
                //                $classNames = 'cursor-pointer	';
                return [
                    'allDay' => false,
                    'id' => $event->id,
                    'title' => $event->name . (!$is_editable ? ' 🔒' : null),
                    'editable' => $is_editable,
                    'start' => $event->start_date
                        //                        ->utc()
                        ->toIso8601String(),
                    //                    'classNames' => ["bg-$color-200", 'text-gray-800', 'border-1', "border-$color-200"],
                    'classNames' => ['cursor-pointer'],
                    'end' => $event->end_date
                        ? $event->end_date
                            //                        ->utc()
                            ->toIso8601String()
                        : null,
                    //                    'backgroundColor' => 'rgb(254, 202, 202)',
                    //                    'borderColor' => 'rgb(254, 202, 202)',
                    //                     'textColor' => 'rgb(31, 41, 55)',
                    'backgroundColor' => $this->eventTypes[$event->event_type]['color-hex'],
                    'borderColor' => $this->eventTypes[$event->event_type]['color-hex'],
                    'textColor' => $this->eventTextColor,
                    'extendedProps' => [
                        'type' => $event->event_type,
                    ],
                ];
            })
            ->toArray();
    }

    public function events($info): array
    {
        $this->updateEventsList(
            Carbon::parse($info['startStr'], $this->timezone)->format('Y-m-d'),
            Carbon::parse($info['endStr'] . $this->timezone)->format('Y-m-d'),
        );
        return $this->eventsList;
    }

    public function eventReceive($event): void
    {
        if (!in_array($event['extendedProps']['type'], array_keys($this->eventTypes))) {
            return;
        }

        $eventModel = new BusinessCalenderEvent();
        //        $eventModel->name = $event['title'];
        $eventModel->event_type = $event['extendedProps']['type'];
        //$this->timezone
        $start_Date = Carbon::parse($event['start'], $this->timezone);
        $now = now($this->timezone);
        if ($start_Date->isSameDay($now)) {
            $start_Date->setTime($now->addHour()->hour, 0);
        }
        $eventModel->start_date = $start_Date->toIso8601String();
        $eventModel->end_date = isset($event['end'])
            ? Carbon::parse($event['end'])->toIso8601String()
            : $start_Date
                ->clone()
                ->addHour()
                ->toIso8601String();

        //        dd($eventModel->toArray());
        $this->eventEdit($eventModel);

        return;
        //    "allDay" => false
        //    "title" => "AD"
        //    "start" => "2023-09-13T03:30:00+03:00"
        //    "backgroundColor" => "rgb(254, 202, 202)"
        //    "borderColor" => "rgb(254, 202, 202)"
        //    "textColor" => "rgb(31, 41, 55)"
        //    "extendedProps" => array:1 [▼
        //      "type" => "ad"
        //    ]
    }

    public function eventEdit(BusinessCalenderEvent $event, $readonly = false): void
    {
        $this->reset('selectedEvent');
        $this->resetValidation();
        $this->readonlyEvent = $readonly;
        $this->selectedEvent['id'] = $event->id;
        $this->selectedEvent['name'] = $event->name;
        $this->selectedEvent['type'] = $event->event_type;
        $this->selectedEvent['date'] = $event->start_date->format('Y-m-d');
        $this->selectedEvent['startTime'] = $event->start_date->format('H:i');
        $this->selectedEvent['endTime'] = isset($event->end_date)
            ? $event->end_date->format('H:i')
            : null;
        $this->selectedEvent['description'] = $event->description;
        $this->openEvent = true;
    }

    public function eventClick($event): void
    {
        $eventModel = $this->business->calendarEvents()->find($event['id']);
        if ($eventModel) {
            $this->eventEdit(
                $eventModel,
                $eventModel->course_id || $eventModel->teaser_original_draft_id,
            );
        }
    }

    public function eventDrop($event): void
    {
        if (
            Carbon::parse($event['start'])
                //                ->utc()
                ->lessThan(now())
        ) {
            $this->emit('refreshCalendar');
            return;
        }

        if ($eventToEdit = $this->isValidAndEditableEvent($event['id'])) {
            $eventToEdit->update([
                'start_date' => Carbon::parse($event['start']),
                'end_date' => isset($event['end']) ? Carbon::parse($event['end']) : null,
            ]);
        }
    }

    private function isValidAndEditableEvent($event_id): BusinessCalenderEvent|null
    {
        if (is_null($event_id)) {
            return null;
        }
        $eventToEdit = $this->business->calendarEvents()->find($event_id);
        if ($eventToEdit) {
            if ($eventToEdit->course_id || $eventToEdit->teaser_original_draft_id) {
                return null;
            } else {
                return $eventToEdit;
            }
        }
        return null;
    }

    public function eventResize($event): void
    {
        if ($eventToEdit = $this->isValidAndEditableEvent($event['id'])) {
            $eventToEdit->update([
                'start_date' => Carbon::parse($event['start']),
                //                    ->utc()
                'end_date' => isset($event['end'])
                    ? Carbon::parse($event['end'])
                    : //                    ->utc()
                    null,
            ]);
            //            $this->emit('refreshCalendar');
        }
    }

    public function render()
    {
        $this->upcomingEvents = $this->business
            ->calendarEvents()
            ->whereDate('start_date', '=', now())
            ->orderBy('start_date')
            ->take(10)
            ->get();
        return view('livewire.business-events-calendar-component');
    }

    public function datesSet($info): void
    {
        //        debug(
        //            Carbon::parse($info['startStr'])->format('Y-m-d'),
        //            Carbon::parse($info['endStr'])->format('Y-m-d'),
        //        );

        $this->currentView = $info['view']['type'];
        $this->dateFrom = Carbon::parse($info['startStr'])->format('Y-m-d');
        $this->dateTo = Carbon::parse($info['endStr'])->format('Y-m-d');
        //        debug('datesSet', $this->dateFrom, $this->dateTo);
        //        $this->updateEventsList();
    }

    public function eventSave(): void
    {
        if ($this->readonlyEvent) {
            return;
        }

        $this->validate();
        if (!in_array($this->selectedEvent['type'], array_keys($this->eventTypes))) {
            return;
        }

        $event = $this->isValidAndEditableEvent($this->selectedEvent['id'] ?? null);

        if (!$event) {
            $event = new BusinessCalenderEvent();
        }

        $event->name = $this->selectedEvent['name'];
        $event->event_type = $this->selectedEvent['type'];

        $event->start_date = Carbon::parse(
            $this->selectedEvent['date'] . ' ' . $this->selectedEvent['startTime'],
            $this->timezone,
        );

        if ($this->selectedEvent['endTime']) {
            $event->end_date = Carbon::parse(
                $this->selectedEvent['date'] . ' ' . $this->selectedEvent['endTime'],
                $this->timezone,
            );
        }
        //        debug(
        //            Carbon::parse(
        //                $this->selectedEvent['date'] . ' ' . $this->selectedEvent['endTime'],
        //                $this->timezone,
        //            )
        //                ->utc()
        //                ->toIso8601String(),
        //            $event->start_date->utc()->toIso8601String(),
        //            $event->end_date->utc()->toIso8601String(),
        //            $event->start_date->toIso8601String(),
        //            $event->end_date->toIso8601String(),
        //        );
        //        return;
        if ($this->selectedEvent['description']) {
            $event->description = $this->selectedEvent['description'];
        }

        if ($event->id) {
            $event->save();
        } else {
            $this->business->calendarEvents()->save($event);
        }

        $this->openEvent = false;
        $this->emit('refreshCalendar');
    }
    public function eventDelete($event_id): void
    {
        $eventModel = $this->isValidAndEditableEvent($event_id);
        $eventModel->delete();
        $this->openEvent = false;
        $this->emit('refreshCalendar');
    }
    public function updatedOpenEvent($value): void
    {
        if (!$value) {
            $this->emit('refreshCalendar');
        }
    }

    protected function rules()
    {
        return [
            'selectedEvent.name' => ['required'],
            'selectedEvent.type' => ['required'],
            'selectedEvent.date' => ['required', 'date_format:Y-m-d', 'after_or_equal:today'],
            'selectedEvent.startTime' => [
                'required',
                'date_format:H:i',
                function ($attribute, $value, $fail) {
                    $valueTime = Carbon::createFromFormat(
                        'Y-m-d H:i',
                        $this->selectedEvent['date'] . ' ' . $value,
                    );
                    //                    dd($this->selectedEvent['date']);
                    $nowTime = now()->format('H:i');
                    if ($valueTime->lessThan($nowTime)) {
                        $fail('The "From" time field must be in the future.');
                    }
                },
            ],
            'selectedEvent.endTime' => ['required', 'date_format:H:i', 'after:selectedEvent.startTime'],
            'selectedEvent.description' => ['nullable'],
        ];
    }
}
