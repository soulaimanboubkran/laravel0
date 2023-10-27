<!DOCTYPE html>
<html>
<head>
    <title>Statistiques</title>
    <style>
        /* Define CSS classes for different row colors */
        .green { background-color: green; }
        .orange { background-color: orange; }
        .red { background-color: red; }
    </style>
</head>
<body>
    <h1>Statistiques</h1>
    <form method="GET" action="{{ route('notes.show') }}">
        <label for="search">Rechercher un élève par nom partiel :</label>
        <input type="text" name="search" id="search" value="{{ old('search') }}">
        <button type="submit">Rechercher</button>
    </form>
    
    <table>
        <thead>
            <tr>
                <th>Nom de l'étudiant</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $nom => $note)
                @php
                    $colorClass = '';
                    if ($note > 10) {
                        $colorClass = 'green';
                    } elseif ($note >= 8 && $note <= 10) {
                        $colorClass = 'orange';
                    } else {
                        $colorClass = 'red';
                    }
                @endphp
                <tr class="{{ $colorClass }}">
                    <td>{{ $nom }}</td>
                    <td>{{ $note }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
