@extends('template')

@section('contenu')
    <form action="{{ url('users') }}" method="post">
        @csrf
        <label for="name">Entrez votre pseudo</label>
        <input type="text" name="name" id="name">
        <button type="submit">Valider</button>
    </form>
@endsection