@extends('adminLayout.app')
@section('title')
Edit Post
@stop

@section('content')

    <h1>Edit Post</h1>
    <hr/>

    {!! Form::model($post, [
        'method' => 'PATCH',
        'url' => [App::getLocale(). '/admin/posts', $post->id],
        'class' => 'form-horizontal','files'=>'true'
    ]) !!}

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
        {!! Form::label('category', 'Category: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('category_id',  $categories, null, ['class'=>'form-control'])!!}
            {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('photos[]') ? 'has-error' : ''}}">
        {!! Form::label('photos[]', 'Photos: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('photos[]', null, ['class'=>'form-control'])!!}
            {!! $errors->first('photos[]', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('photos[]') ? 'has-error' : ''}}">
        {!! Form::label('photos[]', 'Photos: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('photos[]', null, ['class'=>'form-control'])!!}
            {!! $errors->first('photos[]', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        {!! Form::label('content', 'Content: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script class="">

        tinymce.init({ selector:'textarea' });

    </script>
@endsection