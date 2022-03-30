@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in! '. Auth::user()->name) }}
                </div>                
            </div>
            <div class="card">
                <div class="card-header">{{ __('User info') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date of creation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ __(Auth::user()->id) }}</th>
                                <td>{{ __(Auth::user()->name) }}</td>
                                <td>{{ __(Auth::user()->email) }}</td>
                                <td>{{ __(Carbon\Carbon::parse(Auth::user()->created_at)->format('d-m-Y h:m:s'))}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
