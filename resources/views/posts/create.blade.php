@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/post" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea class="ckeditor form-control" name="body"></textarea>

                        </div>

                        <select name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ isset($post) && $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
       
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    </script>
@endsection