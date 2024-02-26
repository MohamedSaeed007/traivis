<?php

namespace App\Http\Livewire;

use App\Models\IssueReport;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class IssueReportComponent extends Component
{
    use WireToast;
    /**
     * @var bool
     */
    public $opened = false;
    /**
     * @var string
     */
    public $description;
    /**
     * @var
     */
    public $route_info;
    /**
     * @var string[]
     */
    public $rules = ['description' => 'required'];
    /**
     * @var
     */
    public $payload;
    /**
     * @var string[]
     */
    protected $listeners = ['openIssueReport'];

    /**
     * @return void
     */
    public function mount(): void
    {
        $this->route_info = $this->getRouteInfo();
    }

    /**
     * @return array
     */
    public function getRouteInfo(): array
    {
        return [
            'elementName' => \Str::of(\Route::currentRouteName())
                ->snake()
                ->camel()
                ->ucfirst(),
            'routeName' => \Route::currentRouteName(),
            'routeParameters' => \Route::current()->parameters(),
            'routeUrl' => \Request::fullUrl(),
            'routeQuery' => \Request::query(),
        ];
    }

    /**
     * @param $payload
     * @return void
     */
    public function openIssueReport($payload): void
    {
        $this->opened = true;
        $this->payload = $payload;
    }

    /**
     * @param $value
     * @return void
     */
    public function updatedOpened($value): void
    {
        //        if ($value) {
        //            $this->sent = false;
        //        }
    }

    /**
     * @return void
     */
    public function sendIssueReport(): void
    {
        $this->validate();

        $this->route_info['payload'] = $this->payload;

        IssueReport::create([
            'user_id' => auth()->id(),
            'title' => $this->route_info['elementName'],
            'has_payload' => !empty($this->route_info['payload']),
            'description' => nl2br($this->description),
            'debug_info' => json_encode($this->route_info, JSON_PRETTY_PRINT),
        ]);

        $this->reset('opened', 'description');
        toast()
            ->success('Successfully sent.')
            ->push();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.issue-report-component');
    }
}
