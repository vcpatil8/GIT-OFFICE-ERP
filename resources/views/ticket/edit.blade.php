<x-app-layout>
    <div class="min-h-screen flex flex-col sm:jutstify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-dark text-lg text-center font-bold">
                Update Support Ticket
            </h1>
            <form method="POST" action="{{route('ticket.update',$ticket->id)}}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <!--Title-->
                <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" value="{{ $ticket->title }}" type="text" name="title" autofocus />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />
                    <x-textarea id="description" class="w-full" name="description" value="{{ $ticket->description }}" />
                    <x-input-error :messages=" $errors->get('description')" class="mt-2" />
                </div>
                <div class="mt-4">
                    @if($ticket->attachment)
                    <center> <img class="justify-center" src="{{ '/storage/'.$ticket->attachment }}" /></center>
                    @else
                    <p class="text-dark">You have not uploaded any image for this support ticket yet.</p>
                    @endif
                </div>
                <div class="mt-4">
                    <x-input-label for="attachment" :value="__('Attachment')" />
                    <x-file-input id="attachment" class="w-full" name="attachment" />
                    <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        update
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>