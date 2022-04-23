@extends('layouts.main')
@section('content')


           
        


  
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
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Qualification" class="col-md-4 col-form-label text-md-end">{{ __('Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="Qualification" type="text" class="form-control @error('Qualification') is-invalid @enderror" name="Qualification" value="{{ old('Qualification') }}" required autocomplete="Qualification" autofocus>

                                @error('Qualification')
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
                            <label for="Phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="Phone" type="Phone" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" required autocomplete="Phone">

                                @error('Phone')
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="shadow-lg mw-100  vw-100 bg-white rounded">
<div class="card-body mw-100 px-0 pb-2 ">
              <div class="table-responsive p-0 mw-100">
                
<table class="table mw-100 vw-100">
<!-- head of table -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EMPLOYE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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
    </ul>
 
                        <form method="GET" action="{{ route('employees.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="search employee">
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
    <tr  >
      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">#id</th>
      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">name</th>
      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">last_name</th>
      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">email</th>
    

      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">  qualification    </th>
      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7" scope="col">manage</th>
      <th class="text-uppercase text-white text-xxxs font-weight-bolder opacity-7" scope="col">------</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach  ($employees as $employees) 
    <tr class="mw-100" >
      <th scope="row">{{$employees->id}}</th>
      <td>{{$employees->name}}</td>
      <td>{{$employees->last_name}}</td>
      <td>{{$employees->email}}</td>
    
      <td>{{$employees->Qualification}}   </td> 
      <td>  
        <a href="{{ route('employees.edit', $employees->id) }}" class="btn btn-success">Edit</a>
        
    </td>
    <td> <a href="{{ route('employees.destroy', $employees->id) }}" class="btn btn-danger">delete</a> </td>
   

     
    </tr>
  @endforeach
  </tbody>
</table>

              </div>
            </div>
</div>


@endsection                    