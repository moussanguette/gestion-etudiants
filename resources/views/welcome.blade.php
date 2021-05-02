@extends('layout.parent')
@section('contenu')
    
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Bienvenu</a>
      <form class="d-flex">
        <a href="{{ route('etudiant.index')}}" class="btn btn-outline-success" type="submit">
            connexion
        </a>
      </form>
    </div>
  </nav>

@endsection