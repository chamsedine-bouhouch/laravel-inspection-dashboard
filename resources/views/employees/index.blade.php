@extends('layouts.main')
@section('content')

<!-- ADD Employee Modal start-->
<div class="modal f ade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">add employe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('employees.store'   ) }}">
          @csrf

          <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- <div class="row mb-3">
            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('last_name') }}</label>

            <div class="col-md-6">
              <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

              @error('last_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div> -->
          <div class="row mb-3">
            <label for="qualification" class="col-md-4 col-form-label text-md-end">{{ __('qualification') }}</label>

            <div class="col-md-6">
              <input id="qualification" type="text" class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{ old('qualification') }}" required autocomplete="qualification" autofocus>

              @error('qualification')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone xx') }}</label>

            <div class="col-md-6">
              <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

              @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ADD Employee Modal End-->


<div class="shadow-lg mw-100  vw-100 bg-white rounded">
  <div class="card-body mw-100 p-0 ">
    <div class="table-responsive p-0 mw-100">

      <table class="table mw-100 vw-100">
        <!-- head of table -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">EMPLOYEES LIST</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('checklist.create')}}">Disabled</a>
              </li>
            </ul> -->

            <form method="GET" action="{{ route('employees.index') }}">
              <div class="form-row align-items-center">
                <div class="col">
                  <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="search employee">
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
              </div>
            </form>

          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModalLong">
            + add employee
          </button>

          <div>
            @if (session()->has('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
            @endif
          </div>

        </nav>


        <thead class="thead-dark">
          <tr>
            <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">#id</th>
            <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">name</th>
            <!-- <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">last_name</th> -->
            <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">email</th>


            <th class="text-uppercase text-white text-xxxs font-weight-bolder opacity-7" scope="col">Phone</th>
            <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col"> qualification </th>
            <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">manage</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $employee)
          <tr class="mw-100">
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->name}}</td>
            <!-- <td>{{$employee->last_name}}</td> -->
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->qualification}} </td>
            <td>
              <form action="{{ route('employees.destroy',$employee->id) }}" method="Post">

                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-success">Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">delete</button>

              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>


@endsection