@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Your ID :    {{ Auth::user()->id }} <hr>
                    Username : {{ Auth::user()->name }} <hr>
                    Email :    {{ Auth::user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
