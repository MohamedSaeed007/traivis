<ul role="list" class="space-y-4">
    @forelse ($posts as $post)
         @livewire('single-component.single-post',['post'=>$post] , key($post->id))
    @empty
    <p>No post yet</p>
    @endforelse
</ul>
