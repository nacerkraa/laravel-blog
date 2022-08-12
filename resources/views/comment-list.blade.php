@extends('layouts.app')
@section('content')
<h2>List Of Comments</h2>
@if ($comments-> count() > 0)
    @foreach ($comments as $comment)
        <ul>
            <li><a>{{$comment -> content}}</a></li>
        </ul>
    @endforeach 
@else
    <span>There is no comments</span>
@endif
@endsection