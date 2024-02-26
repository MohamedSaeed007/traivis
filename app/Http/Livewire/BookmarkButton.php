<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bookmark;
use App\Models\User;

class BookmarkButton extends Component
{
    public $markStatus, $postId;

    public function mount()
    {
        $this->markStatus = $this->checkBookmark($this->postId);
    }
    public function checkBookmark($postId)
    {
        $user = auth()->user();
        return $user->bookmarks->where('post_id', $this->postId)->first() ? 1 : 0;
        // return $userBookmarks > 0 ? 1 : 0;
    }
    public function AddToBookmark()
    {
        $user = auth()->user();

        $checkMark = $this->checkBookmark($this->postId);
        if ($checkMark == 0) {
            $user->bookmarks()->create(['post_id' => $this->postId]);
        } else {
            $user->bookmarks()->where('post_id', $this->postId)->delete();
        }
        return  $this->markStatus = $this->checkBookmark($this->postId);
    }
    public function render()
    {
        $markStatus = $this->markStatus;
        return view('livewire.bookmark-button', compact('markStatus'));
    }
}
