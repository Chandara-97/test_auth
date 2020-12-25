@extends('layouts.app')
@include('layout.style_css')
@include('layout.cnd')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Wellcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a class="btn btn-primary" href="{{url('/scholarship')}}">Go To Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
@include('layout.footer')
</div>
@endsection

