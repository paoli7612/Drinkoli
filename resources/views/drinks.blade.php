@extends('layouts.app')

@section('content')

    <form action="{{ route('drink') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="row mx-0">
                <input type="text" name="name" class="form-control col-sm-6 mb-3 mr-sm-3" placeholder="name">
                <input type="submit" class="btn btn-primary col h-100" value="new drink">
            </div>
        </div>
    </form>

    <div class="card">
        <div class="card-header">{{ __('Drinks') }}</div>
        <div class="card-body">
            @foreach ($drinks as $drink)
                <div class="card">
                    <div class="card-header">
                        <a href="{{ $drink->route }}">
                            {{ $drink->name }}
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ($drink->ingredients as $ingredient)
                                <li>{{ $ingredient->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
