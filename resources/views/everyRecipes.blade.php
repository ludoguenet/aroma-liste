@extends('layouts.layout')

@section('content')
    @forelse ($recipes as $recipe)
        <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title text-success"><i class="fas fa-mortar-pestle"></i> {{ $recipe->title }}</h5>
            <h6 class="card-title text-primary"><i class="fas fa-tag"></i> {{ $recipe->category->name }}</h6>
            <div class="card-subtitle mb-2 text-muted">
                <ul class="list-item-group">
                @foreach ($recipe->Ingredients as $ingredient)
                    <li class="list-item"><em><small>{{ $ingredient->name }}</small></em></li>
                @endforeach
                </ul>
            </div>
            <u>Préparation :</u>
            <p class="card-text text-info">{{ $recipe->description }}</p>
        </div>
        </div>
    @empty
    <div class="alert alert-info">
        Aucune recette n'a été trouvée
    </div>
    @endforelse
    @if (!request('id'))
        {{ $recipes->links() }}
    @endif
@endsection
