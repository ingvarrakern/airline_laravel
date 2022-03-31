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

                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{ __(Auth::user()->avatar) }}"  width="80" height="80" class="rounded-circle" alt="avatar">
                        </div>
                        <div class="col-lg-9">
                            <div class="col-md-6"> ID: {{ __(Auth::user()->id) }} </div>
                            <div class="col-md-6"> Name: {{ __(Auth::user()->name) }} </div>
                            <div class="col-md-6"> Email: {{ __(Auth::user()->email) }} </div>
                            <div class="col-md-6"> Date of creating: {{ __(Carbon\Carbon::parse(Auth::user()->created_at)->format('d-m-Y h:m:s'))}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1">
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>                     
            </div>



            <!--                <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date of creation</th>
                                            <th scope="col">Avatar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ __(Auth::user()->id) }}</th>
                                            <td>{{ __(Auth::user()->name) }}</td>
                                            <td>{{ __(Auth::user()->email) }}</td>
                                            <td>{{ __(Carbon\Carbon::parse(Auth::user()->created_at)->format('d-m-Y h:m:s'))}}</td>
                                            <td><img src="{{ __(Auth::user()->avatar) }}" width="80" height="80" class="rounded-circle" alt="avatar"> </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                -->
        </div>
    </div>
</div>
</div>
@endsection
