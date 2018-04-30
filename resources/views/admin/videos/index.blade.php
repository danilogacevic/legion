@extends('adminLayout.app')
@section('title')
Video
@stop

@section('content')

    <h1>Videos <a href="{{ route('videos.create') }}" class="btn btn-primary pull-right btn-sm">Add New Video</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/videos">
            <thead>
                <tr>
                    <th>Title</th><th>Link</th><th>Photo</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($videos as $item)
                <tr>

                    <td><a href="{{ url('admin/videos', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->link }}</td><td>
                        <img src="{{ $item->photo->file }}" alt="" width="50px"></td>
                    <td>
                        <a href="{{ url('admin/videos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => [App::getLocale(). '/admin/videos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbladmin/videos').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection