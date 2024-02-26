<div>
    @forelse ($user->posts as $post)
         @livewire('single-component.single-post',['post'=>$post] , key($post->id))
    @empty
    <p>No post yet</p>
    @endforelse
</div>
