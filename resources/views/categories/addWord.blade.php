@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                            <div class="col-sm-6">
                                <span>Admin|{{$category->title}}|Word</span>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a class="btn btn-sm" href="/admin/{{$category->id}}/add">Back</a>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="new_word" action="/" method="post">
                        {{-- <input name="utf8" type="hidden" value="✓"> --}}
                        <input type="hidden">
                        <div class="row">
                            <div class="col-sm-8 mx-auto">
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="word_content">Word</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="Choices">Choices</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="">Correct
                                                {{-- <input type="hidden" value="0"> --}}
                                                <input type="checkbox" value="1">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="">Correct
                                                {{-- <input type="hidden" value="0"> --}}
                                                <input type="checkbox" value="1">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="">Correct
                                                {{-- <input type="hidden" value="0"> --}}
                                                <input type="checkbox" value="1">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" class="btn btn-success" value="Save Word">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection