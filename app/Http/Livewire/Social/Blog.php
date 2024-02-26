<?php

namespace App\Http\Livewire\Social;

use App\Models\Blog as BlogModel;
use Livewire\Component;
use App\Http\Livewire\Social\Input\Trix;
use Livewire\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;

    /**
     * @var
     */
    public $blog_title;
    //public $body = '<p>rad<img src="https://www.rochesterfirst.com/wp-content/uploads/sites/66/2019/09/cat.jpg"></p>';
    public $blog_content;
    /**
     * @var
     */
    public $featured_image_url;
    public $blog;

    /**
     * @var mixed|null
     */

    public function mount()
    {
        //        if ($this->blog) {
        //            $this->title = $this->blog->title;
        //            $this->body = $this->blog->body;
        //            $this->featured_image_url = $this->blog->featured_image_url;
        //        }
    }

    protected $rules = [
        'blog_title' => 'required|min:6',
        'featured_image_url' => 'nullable|image|max:1024',
        'blog_content' => 'required|min:20'
    ];

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED // trix_value_updated()
    ];

    public function trix_value_updated($value)
    {
        $this->blog_content = $value;
    }

    private function save()
    {
        $validatedData = $this->validate();

        //        if ($this->featured_image_url) {
        //            $validatedData['featured_image_url'] = $this->featured_image_url->store(
        //                'public/blog/' . md5(auth()->id())
        //            );
        //        }

        //        dump($this->featured_image_url->store('public/blog/' . md5(auth()->id())));
        //        dd($this->featured_image_url);

        $this->blog = auth()
            ->user()
            ->blogs()
            ->create($validatedData);

        $this->featured_image_url &&
            $this->blog->update([
                'featured_image_url' => $this->featured_image_url->store(
                    'uploads/images/blogs/' . md5(auth()->id()),
                    'public'
                )
            ]);

        //        return redirect()->route('home');
    }

    public function saveDraft()
    {
        $this->save();
        $this->blog->update(['status' => 'draft']);
        redirect()->route('home');
    }
    public function publish()
    {
        $this->save();
        $this->blog->update(['status' => 'public']);
        redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.social.blog', ['new' => true]);
    }
}
