@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <span>Admin | {{$category->title}} - Words</span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a class="btn btn-sm btn-success" href="/admin/{{$category->id}}/addWord">Add word</a>
                            <a class="btn btn-sm" href="/admin">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h2>{{$category->title}}</h2>
                    <p>{{$category->description}}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <h1>Category#{{$category->id}}: {{$category->title}}</h1>
    <h2>{{$category->description}}</h2>
<a class="btn btn-primary" href="/admin/{{$category->id}}/addWord">Add Word</a>
    <a class="btn btn-secondary" href="/admin">Back</a> --}}
@endsection