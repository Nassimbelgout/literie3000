@extends('app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Matelas</title>
</head>

<body>




    @section('content')
        <h1 class="text-4xl pb-10 text-blue-800">Détails du Matelas</h1>
        <p class="text-2xl pb-3">Modèle : {{ $matelas->modele }}</p>
        <p class="text-2xl pb-3">Marque : {{ $matelas->marque }}</p>
        <p class="text-2xl pb-3">Taille : {{ $matelas->taille }}</p>
        <p class="text-2xl pb-3">Prix : {{ $matelas->prix }}€</p>

        <img
            src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQ3Iyns5crKUtEhgKq_xL6iLVOvP6yCKW7R1BvrMIUCfjayq4CfXypx66UD7uPNlDVMc6BbbgjCdhP0R72IoX7oWN65szMc9vAyDusfdqw&usqp=CAc">

        <form action="{{ route('matelas.destroy', $matelas->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="bg-red-500 rounded px-1 text-white text-xl" type="submit"
                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce matelas?')">Supprimer ce matelas</button>
        </form>
        <div>
            <a class="bg-blue-500 rounded px-3 text-white text-xl" href="{{ route('matelas.edit', $matelas->id) }}">Modifier
                ce matelas</a>
        </div>
        <div class="pt-8">
            <a class="pt-10 text-2xl" href="{{ route('matelas.index') }}">Retour à la liste des matelas</a>
        </div>
    @endsection







</body>

</html>
