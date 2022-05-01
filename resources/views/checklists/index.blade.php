@extends('layouts.main')
@section('content')


<div>
  @if (session()->has('message'))
  <div class="alert alert-success">
    {{ session('message') }}
  </div>
  @endif
</div>
<div class="shadow-lg mw-100  vw-100 bg-white rounded">
  <div class="card-body mw-100 p-0 ">
    <div class="table-responsive p-0 mw-100">
      <table class="table mw-100 vw-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="#">Checklist </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
          <a class="nav-link disabled" href="{{route('checklists.create')}}">Disabled</a>
        </li>
      </ul> -->
            <form method="GET" action="{{ route('checklists.index') }}">
              <div class="form-row align-items-center">
                <div class="col">
                  <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="search">
                </div>
                <div class="col">
                  <button type="submit" class="btn  mb-1 bg-white">Search</button>
                </div>
              </div>
            </form>

          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            ADD Checklist
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <thead class="thead-dark">
          <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">date_inspection</th>
            <th scope="col">rapport_pdf</th>
            <th scope="col">sticker_png</th>
            <th scope="col"> </th>
            <th scope="col">manage</th>


          </tr>
        </thead>
        <tbody>
          @foreach ($checklist as $checklist)
          <tr>
            <th scope="row">{{$checklist->id}}</th>
            <td>{{$checklist->titel}}</td>
            <td>{{$checklist->date_inspection}}</td>
            <td>{{$checklist->rapport_pdf}}</td>
            <td>{{$checklist->sticker_png}}</td>
            <td>
              <a href="{{ route('checklists.edit', $checklist->id) }}" class="btn btn-success">Edit</a>

            </td>
            <td> <a href="{{ route('checklists.destroy', $checklist->id) }}" class="btn btn-danger">delete</a> </td>



          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection