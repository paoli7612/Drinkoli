@extends('layouts.app')

@section('content')

    <h1>{{ $drink->name }}</h1>

    <ul>

        @foreach ($drink->ingredients as $ingredient)
            <li>{{ $ingredient->name }}</li>
        @endforeach

    </ul>

    <form action="{{ $drink->route }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <div class="row mx-0">
                <select name="ingredient_id" class="form-control col-sm-6 mb-3 mr-sm-3">
                    @foreach (App\Models\Ingredient::all() as $ingredient)
                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>
                <input type="submit" class="btn btn-primary col h-100" value="new drink">
            </div>
        </div>
    </form>


@endsection
