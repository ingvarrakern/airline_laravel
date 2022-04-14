@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Aircraft') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="seats" class="col-md-4 col-form-label text-md-end">{{ __('Seats') }}</label>

                            <div class="col-md-6">
                                <input id="seats" type="number" class="form-control @error('seats') is-invalid @enderror" name="seats" value="{{ old('seats') }}" required autocomplete="seats" autofocus>

                                @error('seats')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">{{ __('Color') }}</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color') }}" required autocomplete="color" autofocus>

                                @error('color')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                       <div class="row mb-3">
                    <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>

                    <div class="col-md-6">
                        <input id="model" type="number" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus>

                        @error('model')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     </div>
                     <div class="row mb-3">
                    <label for="last_tech_review " class="col-md-4 col-form-label text-md-end">{{ __('Last_tech_review ') }}</label>

                    <div class="col-md-6">
                        <input id="last_tech_review " type="number" class="form-control @error('last_tech_review ') is-invalid @enderror" name="last_tech_review " value="{{ old('last_tech_review ') }}" required autocomplete="last_tech_review " autofocus>

                        @error('last_tech_review')
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
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
