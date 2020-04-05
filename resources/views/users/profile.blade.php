@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <img src="/image/user-image.png" class="card-img-top" alt="">
                <h5 class="card-title">{{Auth::user()->name}}</h5>
                <h5 class="card-title">{{Auth::user()->email}}</h5>
            </div>

            <div class="card">
                <a href="/" class="btn btn-primary">Edit Profile</a>
            </div>
            <div class="card">
                <a href="/" class="btn btn-primary">Change Avator</a>
            </div>
            <div class="card">
                <p class="text-center">following : <p class="text-center">11</p></p> 
                <p class="text-center">followers : <p class="text-center">22</p></p>
            </div>
            <div class="card">
                <p class="text-center">The number of the posts : <p class="text-center">33</p></p>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">ACTIVITY FEED</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p> Nothing to show</p> 
                </div>
            </div>
        </div>        
    </div>
</div> --}}

<div class="container py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="avatar">
                                <div class="default">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                            <h2>{{Auth::user()->name}}</h2>
                            <h3>{{Auth::user()->email}}</h3>
                            <hr>
                            <div class="row mt-15">
                                <div class="col-sm-6">
                                    <strong>
                                        <a href="/">1</a>
                                    </strong>
                                    <div>following</div>
                                </div>
                                <div class="col-sm-6">
                                    <strong>
                                        <a href="/">1</a>
                                    </strong>
                                    <div>followers</div>
                                </div>
                            </div>
                            <hr>
                            <h4>15</h4>
                            <small>words learned</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-1">
                <div class="activity-feed">
                    <div class="well pt-0">
                        <h2>Activities</h2>
                        <hr class="mb-3">
                        <div class="media mb-4">
                            <div class="avatar square">
                                <div class="default">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                            <div class="media-body ml-2">
                                <strong>
                                    <a class="text-muted" href="/">You</a>
                                </strong>
                                learned 2 of 2 in
                                <a class="badge badge-primary" href="/">title1</a>
                                <div>
                                    <footer class="blockquote-footer">Posted <cite> {{ $category->created_at->diffForHumans() }}</cite></footer> 
                                </div>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <div clas="avatar square">
                                <div class="default">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                            <div class="media-body ml-2">
                                <strong>
                                    <a class="text-muted" href="/">You</a>
                                </strong>
                                learned 2 of 2 in
                                <a class="badge badge-primary" href="/">title1</a>
                                <div>
                                    <footer class="blockquote-footer">Posted <cite> {{ $category->created_at->diffForHumans() }}</cite></footer> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<footer>
    <div class="container">
        <i class="glyphicon glyphicon-copyright-mark"></i>
        All rights reserved.
    </div>
</footer>
@endsection
