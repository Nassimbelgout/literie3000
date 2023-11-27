@extends('app')





@section('content')
    <h2>Modifier le Matelas</h2>

    <form action="{{ route('matelas.update', $matelas->id) }}" method="post">
        @csrf
        @method('put')

        <label for="taille">Taille :</label>
        <input type="text" name="taille" value="{{ $matelas->taille }}" required>
        <br>

        <label for="modele">Modèle :</label>
        <input type="text" name="modele" value="{{ $matelas->modele }}" required>
        <br>

        <label for="prix">Prix :</label>
        <input type="text" name="prix" value="{{ $matelas->prix }}" required>
        <br>

        <label for="marque">Marque :</label>
        <input type="text" name="marque" value="{{ $matelas->marque }}" required>
        <br>

        <button type="submit">Mettre à jour Matelas</button>
    </form>
@endsection
