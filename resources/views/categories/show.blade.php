@extends('layouts.app')

@section('content')
    <h1>Category#{{$category->id}}: {{$category->title}}</h1>
    <h2>{{$category->description}}</h2>
@endsection