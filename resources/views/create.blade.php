@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


                            <form action="{{route('post.post.create')}}" method="POST">

                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        Title<input type="text" class="form-control" name="title"
                                                    value="" required autocomplete="title" autofocus>
                                    </div>
                                </div>

                                <input type="hidden" name="id" >

                                <div class="row mb-3">
                                    Body
                                    <div class="col-md-6">
                                        <textarea name="body"cols="100"rows="10"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">New</button>

                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
