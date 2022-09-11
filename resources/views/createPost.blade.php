@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create">
            <h2>Adding a New Post</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                
            @csrf
            <label>Post title:</label>
            <input type="text" name="title" id="">

            <label>Post content:</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>

            <label for="avatar">Upload an Image</label>
            <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg">

            <button type="submit">Create</button>
            </form>
            </div>
    </div>
@endsection