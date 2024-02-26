<section>
    @if ($showAdminText)
        <div class="bg-white sm:overflow-hidden sm:rounded-lg">
            <p>You Restricted The Comments On My Hints And Notes To The Followers Only. You can Disable
                this feature from your space genera privacy settings/comments</p>
        </div>
    @endif

    <div class="bg-white sm:overflow-hidden sm:rounded-lg"
        id="{{ strtolower(class_basename($model)) }}-{{ $model->id }}-comments">
        <div class="divide-y divide-gray-200">
            {{-- <div class="px-2 py-2 sm:px-6">
                <h2 class="text-lg font-medium text-gray-900">Comments</h2>
                Comments:
                <span class="inline-flex items-center text-sm">
                    <button type="button" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/chat-alt -->
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewbox="0 0 24 24"
                            width="512" height="512" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path
                                d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                            </path>
                        </svg>
                        <span class="font-medium text-gray-900">{{ $postCommentCounter }}</span>
                        <span class="sr-only">replies</span>
                    </button>
                </span>
            </div> --}}
            <div class="px-4 py-6 sm:px-6">
                <div class="space-y-8">
                    {{--                    @foreach ($comments as $comment) --}}
                    {{--                        @dump([$comment->id, $comment->parent_id, $comment->comment, $comment->commenterable->name]) --}}
                    {{--                    @endforeach --}}

                    @if ($comments->isNotEmpty() && $allowViewComments)
                        {{--                        @foreach ($comments as $comment) --}}
                        {{--                            @dump([$comment->id, $comment->parent_id, $comment->comment, $comment->commenterable->name]) --}}
                        {{--                        @endforeach --}}

                        @foreach ($comments as $comment)
                            <livewire:commentop :comment="$comment" :key="$comment->id" />
                        @endforeach
                        {{-- {{ $comments->links() }} --}}
                    @else
                        @if ($comments->isNotEmpty() && !$allowViewComments)
                            @forelse ($comments->where('commenterable_id',$commenter->id)->where('commenterable_type',get_class($commenter)) as $comment)
                                <livewire:commentop :comment="$comment" :key="$comment->id" />
                            @empty
                                <p>You do not make any comment yet</p>
                            @endforelse
                        @else
                            <p class="text-center">No comments yet.</p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div
            class="bg-slate-50 px-4 py-6 transition-all focus-within:bg-slate-100 hover:bg-slate-100 sm:px-6">
            @auth
                <div class="flex">
                    <div class="mr-4 flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{ $commenter?->avatar }}"
                            alt="{{ $commenter?->name }}">
                    </div>
                    <div class="min-w-0 flex-1">
                        <form wire:submit.prevent="postComment">
                            <div>
                                <label for="comment" class="sr-only">Comment body</label>
                                <textarea id="comment" name="comment" rows="3"
                                    class="@error('newCommentState.comment') border-red-500 @enderror block w-full rounded-md border-gray-300 shadow-sm focus:border-traivis-500 focus:ring-traivis-500"
                                    placeholder="Write something" wire:model.defer="newCommentState.comment"></textarea>
                                @error('newCommentState.comment')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-3 flex items-center justify-between">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-full border border-transparent bg-traivis-500 px-5 py-2 font-medium text-white shadow-sm hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2">
                                    Comment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <p>Log in to comment.</p>
            @endguest
        </div>
    </div>
</section>
