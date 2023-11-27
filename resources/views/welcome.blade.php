@extends('app')


   



@section('content')
    <h1 class="text-4xl mb-10 text-blue-800" >Liste des Matelas</h1>
    
    <ul class="pt-3 pb-10 text-2xl text-blue-600">
        @foreach ($matelas as $matelasItem)
            <li class="pt-3 pb-3">
                <a href="{{ route('matelas.show', $matelasItem->id) }}">
                    {{ $matelasItem->modele }} - {{ $matelasItem->marque }}
                </a>
            </li>
        @endforeach
    </ul>

    <a class="pt-10 text-3xl" href="{{ route('matelas.create') }}">Ajouter un nouveau matelas</a>
@endsection

</body>
</html>
