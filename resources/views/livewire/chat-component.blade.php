<div>
    <div class="">
        <!--Traivis Nav bar-->
        <!--End Traivis Nav bar-->
        <!--Dash Main Grid-->
        <div class="mx-auto flex w-full">

            <!--Dash Menu-->
            <!--END Dash Menu-->
            <!-- Dash Content -->
            <div class="w-full">
                <div id="conversations" x-data="{
                    smOpen: @entangle('smOpen').defer,
                    message: @entangle('message').defer,
                    unsentMessages: @entangle('unsentMessages').defer,
                    activeConversationUuid: @entangle('activeConversationUuid'),
                    activeConversationParticipants: null,
                    yourParticipantId: @entangle('yourParticipantId'),
                    conversations: @entangle('conversations'),
                    chatMessages: @entangle('chatMessages'),
                    disableSubmit: @entangle('disableSubmit').defer,
                    setActiveConversation(e) {
                        //return;
                        //alert(e.currentTarget.dataset.id);
                        let conversationUuid = this.activeConversationUuid = e.currentTarget.dataset.uuid;
                
                        if (!(conversationUuid in this.unsentMessages)) {
                            this.unsentMessages[conversationUuid] = '';
                        }
                        this.disableSubmit = this.unsentMessages[this.activeConversationUuid].trim() === '';
                
                        //                        this.this.activeConversationParticipants =
                        //                conversation.chat_participants[0].name
                
                
                        //Echo.private(`conversation.${conversationId}`)
                        //    .listen('NewMessage', (e) => {
                        //    // handle new message event here
                        //});
                
                        //                        let targetConversationMessage = this.latestMessages.find(conversation => conversation.id === conversationId);
                
                        //                        if (!targetConversationMessage && this.message.trim() !== '') {
                        //                            targetConversationMessage = { id: conversationId, message: this.message };
                        //                            this.latestMessages.push(targetConversationMessage);
                        //                            this.message = '';
                        //                        } else if (targetConversationMessage) {
                        //                            this.message = targetConversationMessage.message
                        //                        }
                
                        chatMessagesWindowScrollDown()
                    },
                    {{--                    this.unsentMessages[this.activeConversationUuid] = '' --}}
                }" x-init="chatMessagesWindowScrollDown();"
                    class="relative mx-auto px-3">
                    <div
                        class="flex md:h-[90vh] h-[85vh] min-w-full flex-wrap overflow-x-hidden overflow-y-hidden rounded border">

                        <div class="fixed bottom-1/2 -ml-5 z-10 block transition-all"
                        :class="smOpen ? 'left-1/3' : 'left-0'">
                            <x-tooltip-arrow direction="left" class="fixed">
                                <button @click="smOpen =! smOpen"
                                    class="form-input rounded-full border border-gray-500 text-gray-500 bg-white p-2 hover:bg-traivis-500 hover:text-white">
                                    <svg class="h-8 w-8" fill="currentColor" height="512" viewBox="0 0 24 24"
                                        width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z">
                                        </path>
                                    </svg>
                                </button>
                                <span class="pt-44">
                                    <x-slot name="text">
                                        View Conversations
                                    </x-slot>
                                </span>
                            </x-tooltip-arrow>
                        </div>

                        <div x-show="smOpen" x-transition
                            class="hidden h-screen w-full overflow-y-auto border-r border-gray-300 opacity-100 duration-200 sm:block sm:w-1/3 lg:col-span-1">
                            <div class="mx-3 my-3">
                                <div class="relative text-gray-600">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            class="h-6 w-6 text-gray-300">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </span>
                                    <input type="search"
                                        class="block w-full rounded-full bg-gray-100 py-2 pl-10 outline-none"
                                        name="search" placeholder="Search" required />
                                </div>
                            </div>

                            <ul class="h-[32rem] overflow-auto">
                                <div class="flex flex-row items-center justify-between">
                                    <h2 class="my-2 mb-2 ml-2 text-lg font-bold text-gray-500">Chats</h2>
                                </div>

                                <li>
                                    <template x-for="conversation in conversations">
                                        <a @click="
                                        if (conversation.uuid === activeConversationUuid){
                                            smOpen=false
                                        }
                                        setActiveConversation($event)
                          "
                                            :data-uuid="conversation.uuid"
                                            :class="conversation.uuid === activeConversationUuid ?
                                                'bg-traivis-100' :
                                                ''"
                                            class="relative flex cursor-pointer items-center border-b border-gray-300 px-3 py-2 text-sm transition duration-150 ease-in-out hover:bg-traivis-200 focus:outline-none">
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                alt="username"
                                                :src="conversation.chat_participants[0].profile_pic" />
                                            <div class="w-full pb-2 overflow-x-hidden">
                                                <div class="flex justify-between">
                                                    <span
                                                        class="text-md ml-2 block text-base text-gray-900"
                                                        x-text="conversation.chat_participants[0].name"></span>
                                                </div>
                                                <span x-text="conversation.latestMessage.message"
                                                    class="ml-2 block w-4/5 truncate px-3 text-sm text-gray-500"></span>
                                            </div>
                                            <span
                                                class="my-auto h-7 w-8 items-center rounded-full bg-traivis-500 p-1 text-center text-white"
                                                x-show="conversation.unreadMessagesCount"
                                                x-text="conversation.unreadMessagesCount"></span>
                                        </a>
                                    </template>

                                </li>
                            </ul>
                        </div>
                        <div x-show="smOpen" x-transition
                            class="block h-screen w-full overflow-y-auto border-r border-gray-300 opacity-100 duration-200 sm:hidden sm:w-1/3 lg:col-span-1">
                            <div class="mx-3 my-3">
                                <div class="relative text-gray-600">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            class="h-6 w-6 text-gray-300">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </span>
                                    <input type="search"
                                        class="block w-full rounded-full bg-gray-100 py-2 pl-10 outline-none"
                                        name="search" placeholder="Search" required />
                                </div>
                            </div>

                            <ul class="h-[32rem] overflow-auto">
                                <div class="flex flex-row items-center justify-between">
                                    <h2 class="my-2 mb-2 ml-2 text-lg font-bold text-gray-500">Chats</h2>
                                </div>

                                <li>
                                    <template x-for="conversation in conversations">
                                        <a @click="smOpen =false"
                                            class="relative flex cursor-pointer items-center border-b border-gray-300 px-3 py-2 text-sm transition duration-150 ease-in-out hover:bg-traivis-200 focus:outline-none"
                                            :data-uuid="conversation.uuid"
                                            :class="conversation.uuid === activeConversationUuid ?
                                                'bg-traivis-100' :
                                                ''">
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg"
                                                alt="username" />
                                            <div class="w-full pb-2">
                                                <div class="flex justify-between">
                                                    <span
                                                        class="text-md ml-2 block text-base text-gray-900"
                                                        x-text="conversation.chat_participants[0].name"></span>
                                                </div>
                                                <span x-text="conversation.latestMessage.message"
                                                    class="ml-2 block text-sm text-gray-500"></span>
                                            </div>
                                            <span
                                                class="my-auto h-7 w-8 items-center rounded-full bg-traivis-500 p-1 text-center text-white"
                                                x-show="conversation.unreadMessagesCount"
                                                x-text="conversation.unreadMessagesCount"></span>
                                            <span
                                                class="absolute left-10 top-3 h-3 w-3 rounded-full bg-green-600">
                                            </span>
                                        </a>
                                    </template>

                                </li>
                            </ul>
                        </div>
                        <div :class="smOpen ? 'w-full sm:w-2/3 hidden sm:block' : 'w-full'"
                            class="relative h-screen">
                            {{--                            @dump($this->newTo) --}}
                            <div class="w-full relative  min-w-0 h-full">
                                <div class="relative flex items-center border-b border-gray-300 p-3">
                                    @if ($this->newTo)
                                        <div class="flex items-center">
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg"
                                                alt="username" />
                                            <span
                                                class="ml-2 block text-base font-bold text-gray-600">{{ $this->newTo->name }}</span>
                                            {{--                                            <span --}}
                                            {{--                                                class="absolute left-10 top-3 h-3 w-3 rounded-full bg-green-600"> --}}
                                            {{--                                            </span> --}}
                                        </div>
                                    @else
                                        @foreach ($activeConversationParticipants as $activeConversationParticipant)
                                            <div class="flex items-center">
                                                <img class="h-10 w-10 rounded-full object-cover"
                                                    src="{{ $activeConversationParticipant->chatParticipant->avatar }}"
                                                    alt="{{ $activeConversationParticipant->chatParticipant->name }}" />
                                                <span
                                                    class="ml-2 block text-base font-bold text-gray-600">{{ $activeConversationParticipant->chatParticipant->name }}</span>
                                                {{--                                            <span --}}
                                                {{--                                                class="absolute left-10 top-3 h-3 w-3 rounded-full bg-green-600"> --}}
                                                {{--                                            </span> --}}
                                            </div>
                                        @endforeach
                                    @endif

                                </div>

                                <div class="relative h-[72vh] w-full overflow-y-auto p-6 "
                                    id="chatMessagesWindow">
                                    <ul class="space-y-2">
                                        <template x-for="chatMessage in chatMessages">
                                            <li class="flex break-all"
                                                :class="chatMessage.chat_participant_id == yourParticipantId ?
                                                    'justify-start flex-row-reverse' :
                                                    'justify-start flex'">
                                                <img :class="chatMessage.chat_participant_id == yourParticipantId ?
                                                    'ml-2' : 'mr-2'"
                                                    class="h-8 w-8 rounded-full object-cover"
                                                    alt="username" 
                                                    src="https://www.gravatar.com/avatar/aaec5735d0e69ed5978223fb27b7c6e6?s=80&amp;d=mp">
                                                <div class="relative max-w-xl rounded-xl px-4 py-2 text-gray-700 shadow"
                                                    :class="chatMessage.chat_participant_id ==
                                                        yourParticipantId ? 'bg-gray-100' : ''">
                                                    <span class="block" x-text="chatMessage.message">
                                                    </span>
                                                </div>

                                            </li>
                                        </template>
                                    </ul>
                                    {{--                                    @dump($chatMessages) --}}
                                </div>

                                <div x-data="{ rows: 1 }"
                                    class="absolute bottom-[6rem] bg-white flex w-full items-center justify-between border-t border-gray-300 p-3">

                                    <button class="group relative hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 fill-traivis-500 text-white hover:fill-traivis-700"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                        </svg>
                                        <div
                                            class="pointer-events-none absolute -left-[50px] bottom-full z-10 ml-2 w-24 rounded-lg bg-black px-3 py-2 text-center text-xs text-white opacity-0 group-hover:opacity-100">
                                            Attach files
                                            <svg class="absolute left-0 top-full h-2 w-full text-black"
                                                x="0px" y="0px" viewBox="0 0 255 255"
                                                xml:space="preserve">
                                                <polygon class="fill-current"
                                                    points="0,0 127.5,127.5 255,0"></polygon>
                                            </svg>
                                        </div>
                                    </button>

                                    @if ($this->newTo)
                                        <input type="text" placeholder="Message"
                                            {{-- x-model="message" --}} x-model="message"
                                            @input="disableSubmit = message === ''"
                                            @keydown.enter="disableSubmit ? '' : $wire.sendMessage()"
                                            class="block w-full rounded-full bg-gray-100 py-2 pl-4 outline-none focus:text-gray-700"
                                            :class="!smOpen ? 'ml-[35px] ' : 'mx-3'" name="message"
                                            required autocomplete="off" />
                                        <button class="group relative" wire:click="sendMessage"
                                            :disabled="disableSubmit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                :class="{
                                                    'fill-gray-300 ': disableSubmit,
                                                    'fill-traivis-500  hover:fill-traivis-700': !disableSubmit
                                                }"
                                                class="h-5 w-5 origin-center text-gray-300"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z" />
                                            </svg>
                                            <div
                                                class="pointer-events-none absolute -left-[30px] bottom-full z-10 ml-2 w-14 rounded-lg bg-black px-3 py-2 text-center text-xs text-white opacity-0 group-hover:opacity-100">
                                                Send
                                                <svg class="absolute left-0 top-full h-2 w-full text-black"
                                                    x="0px" y="0px"
                                                    viewBox="0 0 255 255" xml:space="preserve">
                                                    <polygon class="fill-current"
                                                        points="0,0 127.5,127.5 255,0"></polygon>
                                                </svg>
                                            </div>

                                        </button>
                                    @else
                                        <textarea type="text" cols="30" rows="2" placeholder="Message" style="resize: none;"
                                            {{-- x-model="message" --}} x-model="unsentMessages[activeConversationUuid]"
                                            @input="disableSubmit = unsentMessages[activeConversationUuid].trim() === ''"
                                            @keydown.enter="disableSubmit ? '' : $wire.sendMessage()"
                                            class="mx-3 block w-full overflow-x-hidden break-all rounded-xl bg-gray-100 py-2 pl-4 outline-none focus:text-gray-700"
                                            name="message" required autocomplete="off"> </textarea>
                                        <button class="group relative" wire:click="sendMessage"
                                            :disabled="disableSubmit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                :class="{
                                                    'fill-gray-300 ': disableSubmit,
                                                    'fill-traivis-500  hover:fill-traivis-700': !disableSubmit
                                                }"
                                                class="h-5 w-5 origin-center text-gray-300"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z" />
                                            </svg>
                                            <div
                                                class="pointer-events-none absolute -left-[30px] bottom-full z-10 ml-2 w-14 rounded-lg bg-black px-3 py-2 text-center text-xs text-white opacity-0 group-hover:opacity-100">
                                                Send
                                                <svg class="absolute left-0 top-full h-2 w-full text-black"
                                                    x="0px" y="0px"
                                                    viewBox="0 0 255 255" xml:space="preserve">
                                                    <polygon class="fill-current"
                                                        points="0,0 127.5,127.5 255,0"></polygon>
                                                </svg>
                                            </div>

                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <script>
                        window.addEventListener('DOMContentLoaded', function() {
                            @foreach ($conversations as $conversation)
                                window.Echo.channel('chat-conversation.{{ $conversation['uuid'] }}')
                                    .listen('ChatMessageSent', (e) => {
                                        // console.log(e);
                                        Livewire.emit('chat-message-sent');
                                    });
                            @endforeach

                        });
                    </script>

                </div>

            </div>
            <!-- Dash Content -->
        </div>
        <script>
            function chatMessagesWindowScrollDown() {
                let chatMessagesWindow = document.querySelector('#chatMessagesWindow');
                chatMessagesWindow.scrollTop = chatMessagesWindow.scrollHeight;
            }

            window.addEventListener('scrollDown', chatMessagesWindowScrollDown);
            window.addEventListener('DOMContentLoaded', chatMessagesWindowScrollDown);

            function autoResize() {
                const textarea = this.$refs.myTextarea;
                textarea.rows = textarea.value.split('\n').length;
            }
        </script>

    </div>

</div>
