@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Drinks') }}</div>
        <div class="card-body">
            @foreach ($drinks as $drink)
                <div class="alert alert-success" role="alert">
                    {{ $drink->name }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
