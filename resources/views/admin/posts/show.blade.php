@extends('backLayout.app')
@section('title')
Post
@stop

@section('content')

    <h1>Post</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Author</th><th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td> <td> {{ $post->title }} </td><td> {{ $post->author }} </td><td> {{ $post->category }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection