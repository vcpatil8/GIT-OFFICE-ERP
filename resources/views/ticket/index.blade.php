<x-app-layout>
    <div class="h-25 flex flex-col sm:justify-center items-center mt-4 pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="flex justify-between w-full sm:max-w-xl">
            <h1 class="text-dark text-lg font-bold">Support Tickets</h1>
            <div>
                <a href="{{ route('ticket.create') }}" class="bg-white rounded-lg p-2">Create New</a>
            </div>
        </div>
        <div class="w-full sm:max-w-2xl mt-4 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            @forelse ($tickets as $ticket)
            <div class="text-dark flex justify-between py-2">

                <tr>
                    <td>
                        {{ $ticket->title }}
                    </td>
                    <td>
                        <p>{{ $ticket->created_at->diffForHumans() }}</p>
                    </td>
                    <td><a href="{{ route('ticket.show', $ticket->id) }}">
                            <x-primary-button>View</x-primary-button> </a>
                    </td>
                    <td>
                        <a href="{{ route('ticket.edit',$ticket->id) }}">
                            <x-primary-button>Edit</x-primary-button>
                        </a>

                    </td>
                    <td>

                        <form action="{{ route('ticket.destroy',$ticket->id) }}" method="post">
                            @method('delete')
                            @csrf

                            <x-primary-button onclick="return confirm('Are you Sure')">
                                Delete </x-primary-button>

                        </form>
                    </td>
                </tr>

            </div>
            @empty
            <p class="text-dark">You don't have any support ticket yet.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>