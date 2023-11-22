@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer une Annonce</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('annonces.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titre">Titre:</label>
                <input type="text" class="form-control" name="titre" value="{{ old('titre') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type" required>
                    <option value="Appartement" {{ old('type') == 'Appartement' ? 'selected' : '' }}>Appartement</option>
                    <option value="Maison" {{ old('type') == 'Maison' ? 'selected' : '' }}>Maison</option>
                    <!-- Add other options for type -->
                </select>
            </div>

            <!-- Add other form fields for ville, superficie, neuf, prix, etc. -->
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" class="form-control" name="ville" value="{{ old('ville') }}" required>
            </div>

            <div class="form-group">
                <label for="superficie">Superficie:</label>
                <input type="number" class="form-control" name="superficie" value="{{ old('superficie') }}" required>
            </div>

            <div class="form-group">
    <label for="neuf">Neuf:</label>
    <input type="checkbox" name="neuf" {{ old('neuf') ? 'checked' : '' }}>
    <input type="hidden" name="neuf" value="0"> <!-- Hidden input to ensure false is sent if checkbox is unchecked -->
</div>

            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="number" step="0.01" class="form-control" name="prix" value="{{ old('prix') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer Annonce</button>
        </form>
    </div>
@endsection
