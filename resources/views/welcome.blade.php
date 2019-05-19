@extends('layouts.layout')

@section('extra-css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
    <h1>Aroma Liste</h1>
    <form action="{{ route('recipe.search') }}" method="POST">
    @csrf
    <div class="form-group">
        <select multiple class="form-control selectpicker @error('ingredients') is-invalid @enderror" id="exampleFormControlSelect2" name="ingredients[]" data-none-selected-text>
        @foreach ($ingredients as $ingredient)
            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
        @endforeach
        </select>
        <div class="invalid-feedback">{{ $errors->has('ingredients') ? $errors->first('ingredients') : ''}}</div>
    </div>
    <button type="submit" class="btn btn-primary">Chercher une recette</button>
    </form>
@endsection

@section('extra-js')
    <script>
    $(".selectpicker").selectpicker({
    noneSelectedText : 'Choisissez vos ingrédients'
    });
    </script>
@endsection

