<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome on the Wall
                    <form method="POST" action="{{ route('postMessage') }}">
                        <input type="text" name="message">
                        @csrf
                        <input type="submit">
                        <br><b>Messages :</b><br>
                        <ul>
                            @foreach ($messages as $message)
                                <li>{{ $message->message }}
                                @if ($message->user_id == Auth::id())
                                -   <i>
                                        <a href="{{ route('deleteMessage', $message->id) }}">Delete</a> -
                                        <a href="{{ route('updateMessage', $message->id) }}">Update</a>
                                    </i>
                                @endif
                                </li>
                            @endforeach
                        </ul>
                        {{ $messages->links() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
