<?php

namespace App\Http\Livewire\Social;

use App\Achievements\PublishedBlogs;
use App\Achievements\PublishedHints;
use App\Achievements\PublishedNotes;
use App\Models\Blog;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FloatingCreateButton extends Component
{
    use WithFileUploads;
    use WireToast;
    use AuthorizesRequests;

    public $openModal = false;
    public $edit = false;
    public $activeTab = 'note';
    public $title = null;
    public $overview = null;
    public $body = null;

    public $actAs = 'user';

    public $hint_video = null;

    public $note = null;

    public int $note_limit = 300;

    public $note_image;
    public $blog_image;

    public $location = null;
    public ?Post $post = null;
    protected $listeners = ['blogEdit'];

    public function updatedNoteImage(): void
    {
        $this->validate(array_only($this->rules(), 'note_image'));
    }

    protected function rules(): array
    {
        return match ($this->activeTab) {
            'note' => [
                //                'actAs' => 'required',
                'note' => 'required_if:activeTab,note|min:20|max:' . $this->note_limit,
                'note_image' => [
                    'nullable',
                    'image',
                    'mimes:jpeg,png,jpg',
                    'max:1024',
                    'dimensions:min_width=100,min_height=100,max_width=1500,max_height=1500',
                ],
            ],
            'hint' => [
                //                'actAs' => 'required',
                'hint_video' => [
                    'required',
                    'mimetypes:video/avi,video/mpeg,video/mp4,video/quicktime',
                    'max:102400',
                ],
            ],
            'blog' => [
                //                'actAs' => 'required',
                'title' => 'required|min:6',
                'overview' => 'required|min:20',
                'body' => 'required|min:20',
                'blog_image' => [
                    $this->post && $this->post->hasMedia() ? 'nullable' : 'required',
                    'image',
                    'mimes:jpeg,png,jpg',
                    'max:1024',
                    'dimensions:min_width=100,min_height=100,max_width=1500,max_height=1500',
                ],
            ],
        };
    }

    public function updatedHintVideo(): void
    {
        $this->authorize('update', $this->post);
        $this->validate(array_only($this->rules(), 'hint_video'));
    }

    public function updatedOpenModal(): void
    {
        if ($this->post) {
            $this->authorize('update', $this->post);
        } else {
            $this->authorize('create', Post::class);
        }

        $this->resetData();
        $this->edit = false;
    }

    public function resetData(): void
    {
        $this->resetValidation();

        $this->reset([
            //            'actAs',
            'title',
            'note',
            'note_image',
            'overview',
            'body',
            'title',
            'blog_image',
            'hint_video',
            'post',
            'edit',
        ]);
    }

    public function publish($draft = false)
    {
        $validatedData = $this->validate();

        $user = auth()->user();
        $business_id = $user->isActingAsBusiness() ? $user->actingAsBusiness()->id : null;

        if ($this->post) {
            $this->authorize('update', $this->post);
            if ($this->activeTab == 'blog') {
                $this->post->update([
                    'title' => $validatedData['title'],
                    'overview' => $validatedData['overview'],
                    'post_content' => $validatedData['body'],
                    'user_id' => $user->id,
                    'business_id' => $business_id,
                    'type' => 'blog',
                    'status' => $draft ? 'draft' : 'published',
                ]);
                if ($this->blog_image) {
                    $this->post->getFirstMedia()?->delete();
                    $this->post
                        ->addMedia($this->blog_image->getRealPath())
                        ->usingName($this->blog_image->getClientOriginalName())
                        ->preservingOriginal()
                        ->toMediaCollection();
                }
                toast()
                    ->success('Your blog added successfully')
                    ->push();
            }
        } else {
            $this->authorize('create', Post::class);
            if ($this->activeTab == 'note') {
                $post = Post::create([
                    'post_content' => $validatedData['note'],
                    'feature_image' => $validatedData['note_image'] ? 1 : 0,
                    'user_id' => $user->id,
                    'business_id' => $business_id,
                    'type' => 'note',
                    'status' => $draft ? 'draft' : 'published',
                ]);
                if ($this->note_image) {
                    $post
                        ->addMedia($this->note_image->getRealPath())
                        ->usingName($this->note_image->getClientOriginalName())
                        ->preservingOriginal()
                        ->toMediaCollection();
                }
                //Increment Achievement Progress
                if ($user->isActingAsBusiness()) {
                    $user->actingAsBusiness()->addProgress(new PublishedNotes(), 1);
                }
                toast()
                    ->success('Your note added successfully')
                    ->push();
            }
            if ($this->activeTab == 'hint') {
                $post = Post::create([
                    'user_id' => $user->id,
                    'business_id' => $business_id,
                    'type' => 'hint',
                    'status' => $draft ? 'draft' : 'published',
                ]);
                if ($this->hint_video) {
                    $post
                        ->addMedia($this->hint_video->getRealPath())
                        ->usingName($this->hint_video->getClientOriginalName())
                        ->preservingOriginal()
                        ->toMediaCollection();
                }
                //Increment Achievement Progress
                if ($user->isActingAsBusiness()) {
                    $user->actingAsBusiness()->addProgress(new PublishedHints(), 1);
                }
                toast()
                    ->success('Your hint added successfully')
                    ->push();
            }
            if ($this->activeTab == 'blog') {
                $post = Post::create([
                    'title' => $validatedData['title'],
                    'overview' => $validatedData['overview'],
                    'post_content' => $validatedData['body'],
                    'user_id' => $user->id,
                    'business_id' => $business_id,
                    'type' => 'blog',
                    'status' => $draft ? 'draft' : 'published',
                ]);
                if ($this->blog_image) {
                    $post
                        ->addMedia($this->blog_image->getRealPath())
                        ->usingName($this->blog_image->getClientOriginalName())
                        ->preservingOriginal()
                        ->toMediaCollection();
                }
                //Increment Achievement Progress
                if ($user->isActingAsBusiness()) {
                    $user->actingAsBusiness()->addProgress(new PublishedBlogs(), 1);
                }
                toast()
                    ->success('Your blog added successfully')
                    ->push();
            }
        }
        $this->resetData();
        $this->reset('openModal');
        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.social.floating-create-button');
    }

    public function deletePost()
    {
        $this->authorize('delete', $this->post);
        $this->post->delete();
        return redirect()->route('home');
        //$this->emit('refresh');
    }
    public function blogEdit(Post $post): void
    {
        $this->authorize('update', $post);

        $this->resetData();

        $this->post = $post;
        $this->activeTab = $this->post->type;
        $this->title = $this->post->title;
        $this->overview = $this->post->overview;
        $this->body = $this->post->post_content;
        $this->edit = true;
        $this->openModal = true;
    }
}
