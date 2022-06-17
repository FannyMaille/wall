<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Film : '.$film->titre) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b>{{ $film->titre }}</b><br><br>
                    <i>Résumé : </i> {{ $film->resum }}<br>
                    <i>Genre : </i> <a href="{{ route('ShowGenre', ['id' =>$film->genre->id_genre])}}">{{ $film->genre->nom ?? "-" }}</a><br>
                    @if($film->distributeur)
                    <i>Distributeur : <a href="{{ route('ShowDistributeur', $film->distributeur->id_distributeur) }}"></i> {{ $film->distributeur->nom ?? "-" }} {{ $film->distributeur->telephone ?? "-" }}</a><br>
                    @else
                    <i>Distributeur : </i> {{ $film->distributeur->nom ?? "-" }} {{ $film->distributeur->telephone ?? "-" }}<br>
                    @endif
                    <i>Dates : </i> {{ $film->date_debut_affiche }} / {{ $film->date_fin_affiche }}<br>
                    <i>Durée : </i> {{ $film->duree_minutes }} mins<br>
                    <i>Année de production : </i> {{ $film->annee_production }}<br><br>
                    <a href="{{ route('films')}}"> < Back to the list of all films</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
