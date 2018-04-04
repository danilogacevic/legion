@extends('adminLayout.app')
@section('title')
Post
@stop

@section('content')

    <h1>Posts <a href="{{ route('posts.create')  }}" class="btn btn-primary pull-right btn-sm">Add New Post</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblposts">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Author</th><th>Category</th><th>Approved</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $item)
                @if($item->hasTranslation())
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('posts', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->user->name }}</td><td>{{ $item->category ? $item->category->title : 'bez category' }}</td><td>{{ $item->approved }}</td>
                    <td>
                        <a href="{{ url(App::getLocale() . '/admin/posts/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => [App::getLocale() . '/admin/posts', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblposts').DataTable({
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