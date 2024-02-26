<?php

namespace App\Http\Livewire\Social;

use App\Models\Business;
use App\Models\User;
use Livewire\Component;

class ActAsBusiness extends Component
{
    public User $user;
    public $isBusiness;
    /**
     * @var Business|null
     */
    public ?Business $business = null;

    public $homeDisplay;
    public $businesses;

    public function go($business_id = null)
    {
        if ($business_id) {
            $business = $this->user->businesses()->find($business_id);
            if ($business) {
                session(['business_id' => $business_id]);
                return match ($business->business_type) {
                    'instructor' => redirect(route('instructor-dashboard')),
                    'institute' => redirect(route('institute-dashboard')),
                    'enterprise' => redirect(route('enterprise-dashboard'))
                };
            }
        } else {
            session(['business_id' => null]);
        }

        return redirect(route('home'));
    }

    public function mount($homeDisplay = null)
    {
        $this->isBusiness = !is_null(session('business_id'));
        if ($this->isBusiness) {
            $this->business = Business::with('media')->find(session('business_id'));
        }
        $this->user = auth()->user()->load('businesses.media');
        $this->businesses = $this->user->businesses;
    }

    public function render()
    {
        return view('livewire.social.act-as-business');
    }
}
