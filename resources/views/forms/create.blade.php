@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row justify-content-center">

  <div class="col-md-9 mb-4">
      <div class="card">
        <div class="card-header">Checklist Details</div>

        <div class="card-body">
       <p>Title : {{ $checklist->title  }}</p>
       <p>Inspection Date : {{ $checklist->date_inspection  }}</p>
       <p>Form : {{ $form->title  }}</p>
       <p>Added By : {{ $checklist->user->name  }}</p>
        </div>
      </div>
    </div>

    <form method="POST" action="{{ route('storeQuestionsForm',$checklist->id) }}">
            @csrf
            @forelse ($questions as $question )
    <div class="col-md-12 mb-3">
      <div class="card">
        <div class="card-header">{{$question->title}}</div>

        <div class="card-body">
          
            <div class="row ">
            <input type="text"  hidden name="form_id" value="{{$form->id}}">
              <div class="col-md-6" >
                <label for="answer_{{$question->id}}"class="form-label">answer_{{$question->id}}</label>
                <!-- <input id="answer_{{$question->id}}" type="text" class="form-control " name="answer_{{$question->id}}"> -->
               <!-- <select name="answer_{{$question->id}}" id="answer_{{$question->id}}" class="form-control" required>
                        <option selected="true" disabled="disabled" value=""> Select Answer</option>
                        <option value="U">U</option>
                        <option value="S">S</option>
                        <option value="N/A">N/A</option>
                      </select> -->
bbbbb
                      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Second default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
  <label class="form-check-label" for="exampleRadios3">
    Disabled radio
  </label>
</div>
              </div>
              <div class="col-md-6" >
                <label for="comment_{{$question->id}}" class="col-form-label text-md-end">comment_{{$question->id}}</label>
                <input id="comment_{{$question->id}}" type="text" class="form-control " name="comment_{{$question->id}}">
              </div>
              
           
            </div>



          
        </div>
      </div>
    </div>

    @empty
            This fom has no relative questions

            @endforelse
            @if (count($questions)>0)
            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Submit') }}
                </button>
              </div>
            </div>
            @endif

          </form>
  </div>
</div>




@endsection