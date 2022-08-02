@extends('layouts.app')
@section('content')
    <h2>List of pages</h2>

    @foreach ($posts as $post)
    <ul>
        <li>{{$post}}</li>
    </ul>
        
    @endforeach    
@endsection

