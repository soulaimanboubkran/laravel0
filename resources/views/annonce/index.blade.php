@extends('layouts.app')

@section('content')

        
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('annonces.create') }}">Nouvelle Annonce</a>
                </li>
        
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Liste des Annonces</h1>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 border-green-600 border-t-4 rounded-b shadow-md p-3 mb-6">
                {{ session('success') }}
            </div>
        @endif
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Titre</th>
                    <th class="py-2 px-4 border-b">Ville</th>
                    <th class="py-2 px-4 border-b">Superficie</th>
                    <th class="py-2 px-4 border-b">Prix</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($Annonces as $annonce)
                    <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                        <td class="py-2 px-4 border-b">{{ $annonce->titre }}</td>
                        <td class="py-2 px-4 border-b">{{ $annonce->ville }}</td>
                        <td class="py-2 px-4 border-b">{{ $annonce->superficie }}</td>
                        <td class="py-2 px-4 border-b">{{ $annonce->prix }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('annonces.show', $annonce->id) }}" class="text-blue-600 hover:underline mr-2">Afficher</a>
                            <a href="{{ route('annonces.edit', $annonce->id) }}" class="text-yellow-600 hover:underline mr-2">Modifier</a>
                            <!-- Add delete button with confirmation dialog -->
                            <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-4 px-4 border-b" colspan="5">Aucune annonce disponible.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
