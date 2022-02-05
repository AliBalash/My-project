@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <a href="{{route('post.get.create')}}" class="btn btn-success">New</a>
                        </div>
                        @if($posts->count() > 0)

                                <table class="table table-hover">
                                    <tr class="fw-bold">
                                        <td>id</td>
                                        <td>title</td>
                                        <td>body</td>
                                        <td>action</td>
                                    </tr>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            {{$post->id}}
                                        </td>
                                        <td>
                                            {{$post->title}}
                                        </td>
                                        <td>
                                            {{substr($post->body,0,50)}}
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{route('post.get.edit',$post)}}">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
