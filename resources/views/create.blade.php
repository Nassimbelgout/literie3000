@extends('app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Matelas</title>
</head>

<body>




    @section('content')
        <h2>Ajouter un nouveau Matelas</h2>

        <form action="{{ route('matelas.store') }}" method="post">
            @csrf

            <label for="taille">Taille :</label>
            <input type="text" name="taille" required>
            <br>

            <label for="modele">Modèle :</label>
            <input type="text" name="modele" required>
            <br>

            <label for="prix">Prix :</label>
            <input type="text" name="prix" required>
            <br>

            <label for="marque">Marque :</label>
            <input type="text" name="marque" required>
            <br>

            <label for="image">Image:</label>
            <input type="file" name="image">
            <br>

            <button type="submit">Ajouter Matelas</button>
        </form>
    @endsection

</body>

</html>
