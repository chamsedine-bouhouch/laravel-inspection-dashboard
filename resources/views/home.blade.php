@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('inspections') }}</div>

               

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>


@endsection