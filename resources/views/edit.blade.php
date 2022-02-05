@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


                        <form action="{{route('post.post.edit')}}" method="POST">

                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    Title<input type="text" class="form-control" name="title"
                                                value="{{ $post->title }}" required autocomplete="title" autofocus>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{$post->id}}">

                            <div class="row mb-3">
                                Body
                                <div class="col-md-6">
                                    <textarea name="body" cols="100" rows="10">{{$post->body}}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Edit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
