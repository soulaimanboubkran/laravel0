@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Modifier l'Annonce</h1>

        @if(session('error'))
            <div class="bg-red-200 text-red-800 border-red-600 border-t-4 rounded-b shadow-md p-3 mb-6">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('annonces.update', $annonce->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="bg-white rounded-lg overflow-hidden shadow-md p-6 mb-6">
                <div class="mb-4">
                    <label for="titre" class="text-lg font-semibold">Titre:</label>
                    <input type="text" name="titre" id="titre" value="{{ old('titre', $annonce->titre) }}" class="form-input mt-2 block w-full" required>
                </div>

                <div class="mb-4">
                    <label for="ville" class="text-lg font-semibold">Ville:</label>
                    <input type="text" name="ville" id="ville" value="{{ old('ville', $annonce->ville) }}" class="form-input mt-2 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="text-lg font-semibold">Description:</label>
                    <textarea name="description" id="description" class="form-textarea mt-2 block w-full" rows="4" required>{{ old('description', $annonce->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="type" class="text-lg font-semibold">Type:</label>
                    <select name="type" id="type" class="form-select mt-2 block w-full" required>
                        <option value="Appartement" {{ old('type', $annonce->type) === 'Appartement' ? 'selected' : '' }}>Appartement</option>
                        <option value="Maison" {{ old('type', $annonce->type) === 'Maison' ? 'selected' : '' }}>Maison</option>
                        <!-- Add other options for type -->
                    </select>
                </div>
                <div class="mb-4">
                    <label for="superficie" class="text-lg font-semibold">Superficie:</label>
                    <input type="number" name="superficie" id="superficie" value="{{ old('superficie', $annonce->superficie) }}" class="form-input mt-2 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="neuf" class="text-lg font-semibold">Neuf:</label>
                    <input type="checkbox" name="neuf" id="neuf" {{ old('neuf', $annonce->neuf) ? 'checked' : '' }} class="form-checkbox mt-2">
                </div>
                <div class="mb-4">
                    <label for="prix" class="text-lg font-semibold">Prix:</label>
                    <input type="number" name="prix" id="prix" value="{{ old('prix', $annonce->prix) }}" class="form-input mt-2 block w-full" required>
                </div>

                <!-- Add more form fields as needed -->
               

                
                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Enregistrer</button>
                    <a href="{{ route('annonces.show', $annonce->id) }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Annuler</a>
                </div>
            </div>
        </form>
    </div>

    @if ($errors->any())
        <div class="container mx-auto mt-4">
            <div class="bg-red-200 text-red-800 border-red-600 border-t-4 rounded-b shadow-md p-3">
                <p class="font-bold">Il y a des erreurs de validation:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endsection
