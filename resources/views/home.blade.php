@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <img src="image/user-image.png" class="card-img-top" alt="">
                <h5 class="card-title">{{Auth::user()->name}}</h5>
            </div>

            <div class="card">

            </div>

            <div class="card">

            </div>

            <div class="card">

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
</div>
@endsection
