@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Ingredients') }}</div>
        <div class="card-body">
            @foreach ($ingredients as $ingredient)
                <div class="alert alert-success" role="alert">
                    {{ $ingredient->name }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
