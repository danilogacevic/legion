@extends('adminLayout.app')
@section('title')
Photo
@stop

@section('content')

    <h1>Photos <a href="{{route('photos.create') }}" class="btn btn-primary pull-right btn-sm">Add New Photo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblphotos">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($photos as $item)
                <tr >
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ $item->file }}" alt="" style="height:50px;"></td>
                    <td>

                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => [App::getLocale(). '/admin/photos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm pull-right']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

