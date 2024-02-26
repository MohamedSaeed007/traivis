<div>
    <div class="flex">
        <div class="mr-4 flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="{{ $comment->commenterable->avatar }}"
                alt="{{ $comment->commenterable->name }}">
        </div>
        <div class="flex-grow">
            <div class="flex flex-col">
                <a href="#" class="font-bold text-gray-500">{{ $comment->commenterable->name }}</a>
                <span class="text-sm font-medium text-gray-500">
                    {{ $comment->presenter()->relativeCreatedAt() }}
                </span>
            </div>
            <div class="mb-3 mt-2 w-full flex-grow">
                @if ($isEditing)
                    <form wire:submit.prevent="editComment">
                        <div>
                            <label for="comment" class="sr-only">Comment body</label>
                            <textarea id="comment" name="comment" rows="3"
                                class="@error('editState.comment') border-red-500 @enderror block w-full rounded-md border-gray-300 shadow-sm focus:border-traivis-500 focus:ring-traivis-500"
                                placeholder="Write something" wire:model.defer="editState.comment"></textarea>
                            @error('editState.comment')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-3 flex items-center justify-between">
                            <button type="submit"
                                class="inline-flex items-center justify-center rounded-full border border-transparent bg-traivis-500 px-5 py-2 font-medium text-white shadow-sm hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2">
                                Edit
                            </button>
                        </div>
                    </form>
                @else
                    <div class="whitespace-pre text-gray-700">{!! $comment->presenter()->markdownBody() !!}</div>
                @endif
            </div>
            <div class="mt-2 flex gap-x-5">
                <span class="inline-flex items-center text-sm">

                    <button type="button" wire:click.prevent="likeToParentComment({{ $comment->id }})"
                        class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/thumb-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                            width="512" height="512" fill="currentColor" aria-hidden="true"
                            class="h-5 w-5">
                            <path
                                d="M22.773,7.721A4.994,4.994,0,0,0,19,6H15.011l.336-2.041A3.037,3.037,0,0,0,9.626,2.122L7.712,6H5a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5H18.3a5.024,5.024,0,0,0,4.951-4.3l.705-5A5,5,0,0,0,22.773,7.721ZM2,16V11A3,3,0,0,1,5,8H7V19H5A3,3,0,0,1,2,16Zm19.971-4.581-.706,5A3.012,3.012,0,0,1,18.3,19H9V7.734a1,1,0,0,0,.23-.292l2.189-4.435A1.07,1.07,0,0,1,13.141,2.8a1.024,1.024,0,0,1,.233.84l-.528,3.2A1,1,0,0,0,13.833,8H19a3,3,0,0,1,2.971,3.419Z">
                            </path>
                        </svg>
                        <span
                            class="font-medium text-gray-900">{{ $likeCommentCount ?? $comment->likes->count() }}</span>
                        <span class="sr-only">likes</span>
                    </button>
                </span>

                <span class="inline-flex flex-1 items-center text-sm">
                    <button type="button"
                        wire:click.prevent="disLikeToParentComment({{ $comment->id }})"
                        class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/thumb-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                            width="512" height="512" fill="currentColor" aria-hidden="true"
                            class="h-5 w-5">
                            <path
                                d="M23.951,12.3l-.705-5A5.024,5.024,0,0,0,18.3,3H5A5.006,5.006,0,0,0,0,8v5a5.006,5.006,0,0,0,5,5H7.712l1.914,3.878a3.037,3.037,0,0,0,5.721-1.837L15.011,18H19a5,5,0,0,0,4.951-5.7ZM5,5H7V16H5a3,3,0,0,1-3-3V8A3,3,0,0,1,5,5Zm16.264,9.968A3,3,0,0,1,19,16H13.833a1,1,0,0,0-.987,1.162l.528,3.2a1.024,1.024,0,0,1-.233.84,1.07,1.07,0,0,1-1.722-.212L9.23,16.558A1,1,0,0,0,9,16.266V5h9.3a3.012,3.012,0,0,1,2.97,2.581l.706,5A3,3,0,0,1,21.264,14.968Z">
                            </path>
                        </svg><span
                            class="font-medium text-gray-900">{{ $disLikeCommentCounter ?? $comment->disLikes->count() }}</span>
                        <span class="sr-only">dislikes</span>
                    </button>
                </span>
                @auth
                    @if ($comment->hasParent())
                        <button wire:click="$toggle('isReplying')" type="button"
                            class="font-medium text-gray-900">
                            Reply
                        </button>
                    @endif

                    @can('update', $comment)
                        <button wire:click="$toggle('isEditing')" type="button"
                            class="font-medium text-gray-900">
                            Edit
                        </button>
                    @endcan

                    @can('destroy', $comment)
                        <button x-data="{
                            confirmCommentDeletion() {
                                if (window.confirm('Are you sure you want to delete this comment?')) {
                                    @this.call('deleteComment');
                                }
                            }
                        }" @click="confirmCommentDeletion" type="button"
                            class="font-medium text-gray-900">
                            Delete
                        </button>
                    @endcan
                @endauth
            </div>
        </div>
    </div>

    <div class="ml-14 mt-6">
        @if ($isReplying)
            <form wire:submit.prevent="postReply" class="my-4">
                <div>
                    <label for="comment" class="sr-only">Reply body</label>
                    <textarea id="comment" name="comment" rows="3"
                        class="@error('replyState.comment') border-red-500 @enderror block w-full rounded-md border-gray-300 shadow-sm focus:border-traivis-500 focus:ring-traivis-500"
                        placeholder="Write something" wire:model.defer="replyState.comment"></textarea>
                    @error('replyState.comment')
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
        @endif

        @foreach ($comment->children as $child)
            <livewire:commentop :comment="$child" :key="$child->id" />
        @endforeach
    </div>
</div>
