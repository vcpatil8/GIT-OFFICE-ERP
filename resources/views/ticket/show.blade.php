<x-app-layout>
    <div class="min-h-screen flex flex-col sm:jutstify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        @csrf
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-dark text-lg text-center font-bold">
                {{ $ticket->title }}
            </h1>
            <div class="text-dark  py-4">
                <h1 class="md:font-bold">Description:</h1>
                <p>{{ $ticket->description }}</p>
            </div>
            <div class="text-dark py-4">
                <h4>Created:</h4>
                <p>{{ $ticket->created_at->diffForHumans() }}</p>
            </div>
            <hr />
            @if($ticket->attachment)
            <center> <img class="justify-center" src="{{ '/storage/'.$ticket->attachment }}" /></center>
            @endif
            @if(auth()->user()->isAdmin and $ticket->status=='open')
            <div class="flex justify-between mt-4 px-6">
                <form action="{{route('ticket.update',$ticket->id)}}" method="post">
                    @method('patch')
                    @csrf
                    <input type="hidden" name="status" value="resolved" />
                    <x-primary-button>Approve</x-primary-button>
                </form>
                <form action="{{route('ticket.update',$ticket->id)}}" method="post">
                    @method('patch')
                    @csrf
                    <input type="hidden" name="status" value="rejected" />
                    <x-primary-button class="ml-2">Reject</x-primary-button>
                </form>
            </div>

            @else
            <div class=" flow-root">
                <p class="float-right text-dark mt-2">Status: {{ $ticket->status }}</p>
            </div>
            @endif
        </div>

    </div>
</x-app-layout>