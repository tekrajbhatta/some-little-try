@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="col-12">
                @if(session()->has('message'))
                <!-- <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div> -->
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <a href="post/create" class="btn btn-primary" style="margin-bottom: 25px;">Create Post</a> 
                <br>
                <table class="table table-bordered custom-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
            </div> 
    </div>
        </div>
    </div>
</div>
@endsection

