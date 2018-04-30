@extends('backLayout.app')
@section('title')
Video
@stop

@section('content')

    <h1>Video</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Link</th><th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $video->id }}</td> <td> {{ $video->title }} </td><td> {{ $video->link }} </td><td> {{ $video->photo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection