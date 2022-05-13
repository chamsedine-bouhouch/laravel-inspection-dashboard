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
  <div class="container mt-4">



</div>
    <div class="table-responsive p-0 mw-100">
      <table class="table mw-100 vw-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="#">Checklist </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <!-- Search -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
          <!-- Button trigger modal ADD Checklist -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            ADD Checklist
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Checklist Form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{ route('checklists.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="date_inspection" class="form-label">Date d'inspection</label>
                      <input type="date" class="form-control" id="date_inspection" name="date_inspection">
                    </div>
                    <div class="mb-3">
                      <label for="owner" class="form-label">owner</label>
                      <input type="text" class="form-control" id="owner" name="owner">
                    </div> <div class="mb-3">
                      <label for="manufacturer" class="form-label">manufacturer</label>
                      <input type="text" class="form-control" id="manufacturer" name="manufacturer">
                    </div> <div class="mb-3">
                      <label for="manufacturer_number" class="form-label">manufacturer_number</label>
                      <input type="text" class="form-control" id="manufacturer_number" name="manufacturer_number">
                    </div> <div class="mb-3">
                      <label for="derricking" class="form-label">derricking</label>
                      <input type="text" class="form-control" id="derricking" name="derricking">
                    </div>



                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="file" class="form-control" id="image" name="image">

                    </div>




                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Select Form</label>
                      <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                      <select name="checklist_form" id="checklist_form" class="form-control" required>
                        <option selected="true" disabled="disabled" value=""> Select a form</option>
                        @foreach ( $forms as $form)
                        <option value="{{$form->id}}">{{$form->title}}</option>

                        @endforeach

                      </select>
                    </div>
                    <!-- <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Questions</label>
                      <select name="checklist_questions" id="checklist_questions" class="form-control">
                      <option value=""> Select a Question</option>
                      </select>
                    </div> -->
                    <button type="submit" class="btn btn-primary float-right">Go To Questions</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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
            <!-- <th scope="col">sticker_png</th> -->
            <th scope="col">manage</th>
            <th scope="col"> </th>


          </tr>
        </thead>
        <tbody>
          @foreach ($checklists as $checklist)
          <tr>
            <th scope="row">{{$checklist->id}}</th>
            <td>{{$checklist->title}}</td>
            <td>{{$checklist->date_inspection}}</td>
            <td>
              <a href="{{ route('checklist_pdf', $checklist->id) }}" class="btn btn-outline-info">pdf</a>
            </td>
            <!-- <td>{{$checklist->sticker_png}}</td> -->
            <td>
              <form action="{{ route('checklists.destroy',$checklist->id) }}" method="Post">

                <a href="{{ route('checklists.edit', $checklist->id) }}" class="btn btn-success">Edit</a>
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