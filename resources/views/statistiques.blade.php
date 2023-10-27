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
