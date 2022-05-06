@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ $form->title  }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('checklists.store'   ) }}">
            @csrf
            @forelse ($questions as $question )
            <div class="row mb-3">
              <label for="{{$question->title}}" class="col-md-4 col-form-label text-md-end">{{ __($question->title) }}</label>

              <div class="col-md-6">
                <input id="{{$question->title}}" type="text" class="form-control @error($question->title) is-invalid @enderror" name="{{$question->title}}">

                @error($question->title)
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $$question->title }}</strong>
                </span>
                @enderror
              </div>
            </div>



            @empty
            This fom has no relative questions

            @endforelse
            @if (count($questions)>0)
            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>
            @endif

          </form>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection