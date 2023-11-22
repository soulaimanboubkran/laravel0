@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Détails de l'Annonce</h1>

        <div class="bg-white rounded-lg overflow-hidden shadow-md p-6 mb-6">
            <p class="text-lg"><strong>Titre:</strong> {{ $annonce->titre }}</p>
            <p class="text-lg"><strong>Ville:</strong> {{ $annonce->ville }}</p>
            <p class="text-lg"><strong>Superficie:</strong> {{ $annonce->superficie }}</p>
            <p class="text-lg"><strong>Prix:</strong> {{ $annonce->prix }}</p>
            <!-- Add more details as needed -->

            <div class="mt-6">
                <a href="{{ route('annonces.update', $annonce->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded mr-2">Modifier</a>
                <!-- Add a delete button with confirmation dialog -->
                <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
