@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Drinks') }}</div>
        <div class="card-body">
            @foreach ($drinks as $drink)
                <div class="card">
                    <div class="card-header">
                        {{ $drink->name }}
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
