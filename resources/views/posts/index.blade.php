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
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <!-- <td>{{ $post->body }}</td> -->
                            <td>{!! Str::limit($post->body, 100) !!}</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                            <td>
                            <a href="post/{{$post->id}}" class="btn btn-primary btn-sm">Show</a>
                            <a href="post/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <form action="post/{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-del" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
        </div>
    </div>
</div>
@endsection

