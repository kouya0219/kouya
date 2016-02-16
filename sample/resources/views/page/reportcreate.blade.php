@extends('page.layaut')
@section('main-content')


<div class="container">
<div class="row">
    {!! Form::open(['url' => '/articles', 'method' => 'POST', 'class' => 'row', 'id' => 'form']) !!}
        <div class="form-group create-blog">
            {!! Form::label('タイトル') !!}

            <input class="form-control" name="title" type="text">
            {!! Form::label('内容') !!}

            <textarea class="form-control" name="contents" cols="50" rows="10"></textarea>
            {!! Form::submit('作成', ['class' => 'btn btn-primary btn-large form-control']) !!}

    {!! Form::close() !!}
</div>
</div>


@stop
