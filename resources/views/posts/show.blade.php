@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Go Back</a>
            <br>
            <br>
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>{{$post->title}}</h2>
                    <br>
                    <div>
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
