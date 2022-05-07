@extends('layouts.main')
@section('content')

 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('update Checklist') }}</div>

                <div class="card-body">
                    <form action="{{ route('checklists.update',$checklist->id) }}" method="POST">

                        @csrf
                        @method('PUT')


                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $checklist->title) }}" required autocomplete="title" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    
            
                        <div class="row mb-3">
                            <label for="date_inspection" class="col-md-4 col-form-label text-md-end">{{ __('date_inspection') }}</label>

                            <div class="col-md-6">
                                <input id="date_inspection" type="text" class="form-control @error('date_inspection') is-invalid @enderror" name="date_inspection" value="{{ old('date_inspection', $checklist->date_inspection) }}" required autocomplete="date_inspection" autofocus>

                                @error('date_inspection')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="owner" class="col-md-4 col-form-label text-md-end">{{ __('owner') }}</label>

                            <div class="col-md-6">
                                <input id="owner" type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ old('owner', $checklist->owner) }}" required autocomplete="owner" autofocus>

                                @error('owner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="manufacturer" class="col-md-4 col-form-label text-md-end">{{ __('manufacturer') }}</label>

                            <div class="col-md-6">
                                <input id="manufacturer" type="text" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" value="{{ old('manufacturer', $checklist->manufacturer) }}" required autocomplete="manufacturer" autofocus>

                                @error('manufacturer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="manufacturer_number" class="col-md-4 col-form-label text-md-end">{{ __('manufacturer_number') }}</label>

                            <div class="col-md-6">
                                <input id="manufacturer_number" type="text" class="form-control @error('manufacturer_number') is-invalid @enderror" name="manufacturer_number" value="{{ old('manufacturer_number', $checklist->manufacturer_number) }}" required autocomplete="manufacturer_number" autofocus>

                                @error('manufacturer_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="derricking" class="col-md-4 col-form-label text-md-end">{{ __('derricking') }}</label>

                            <div class="col-md-6">
                                <input id="derricking" type="text" class="form-control @error('derricking') is-invalid @enderror" name="derricking" value="{{ old('derricking', $checklist->derricking) }}" required autocomplete="derricking" autofocus>

                                @error('derricking')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>                   
            



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Checklist ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection