@extends('layout.parent')
@section('contenu')
<div class="card mt-5">
    <div class="card-header">
        Ajout d'utilisateur
    </div>
    <div class="card-body">
      @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
                  {{-- <li>{{ $error }}</li> --}}
              @endforeach
            </ul>
      @endif
        <form action="{{ route('etudiant.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Prenom</label>
                <input type="text" class="form-control  @error('prenom') is-invalid @enderror"  name="prenom" placeholder="prenom" value="{{ old("prenom") }}">
                @error('prenom')
                <div class="alert alert-danger">
                  <li>{{ $error }}</li>
                </div>
                @enderror
              </div>

              
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"  placeholder="nom" value="{{ old("nom") }}">
                @error('nom')
                <div class="alert alert-danger">
                  <li>{{ $error }}</li>
                </div>
                @enderror
              </div>

              {{-- submit --}}
              <button type="submit" class="btn btn-success btn-block mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>  
                Ajouter
              </button>
        </form>
    </div>
</div>
    
@endsection