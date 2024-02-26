<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShareButton extends Component
{
    public $url;
    public $title;

    public function mount($url, $title)
    {
        if (auth()->check()) {
            $query = parse_url($url, PHP_URL_QUERY);
            if ($query) {
                $url .= '&karma=' . auth()->user()->user_karma_key;
            } else {
                $url .= '?karma=' . auth()->user()->user_karma_key;
            }
        }
        $this->url = $url;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.share-button');
    }
}
