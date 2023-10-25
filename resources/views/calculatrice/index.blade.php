

<form method="POST" action="{{ route('calculatrice.calculer') }}">
    @csrf
    <input type="text" name="nombre1" placeholder="Nombre 1">

    <select name="operation">
        <option value="addition">+</option>
        <option value="soustraction">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select>
    <input type="text" name="nombre2" placeholder="Nombre 2">
    <button type="submit">Calculer</button>
</form>
@if(isset($result))
    <p>Résultat : {{ $result }}</p>
@endif
