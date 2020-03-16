@extends('layouts.app')

@section('content')
    <div class="card" >
        <div class="card-header">All members</div>
        @foreach ($members as $user)
            <div class="card-body">
                <div class="card">
                    <a href="/members/{{$user->id}}/show">{{$user->id}}</a>
                    <div class="card-body">
                        <a href="/members/{{$user->id}}/show">
                        <p class="text-center">{{$user->name}}</p>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection