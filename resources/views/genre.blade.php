<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genre : '.$genre->nom) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b>Tous les films de genre "{{ $genre->nom }}" :</b><br><br>
                    @foreach ($genre->films as $film)
                    <li>
                        <a href="{{ route('ShowFilm', ['id' =>$film->id_film])}}">{{ $film->titre }}</a>
                    </li>
                    @endforeach
                    <br>
                    <a href="{{ route('films')}}"> < Back to the list of all films</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
