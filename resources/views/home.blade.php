@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Welcome') }} {{Auth::user()->name}} {{ __('You are logged in!') }}
                </div>
            </div>
        </div>


        <div class="container mt-5 ">
        <div class="row justify-content-around">
            
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header  bg-success">Employees</div>
                <div class="card-body">
                    <h5 class="card-title">{{$info['employees']}}</h5>
                </div>
            </div>

            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header bg-warning">Checklists</div>
                <div class="card-body">
                <h5 class="card-title">{{$info['checklists']}}</h5>
                </div>
            </div>
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header bg-info">Certifications</div>
                <div class="card-body">
                <h5 class="card-title">{{$info['certifications']}}</h5>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


@endsection