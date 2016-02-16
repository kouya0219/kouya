@extends('page.layaut')
@section('main-content')


<div class="container">
<div class="row">
    {!! Form::open(['url' => url()->current(), 'method' => 'POST', 'class' => 'row', 'id' => 'form']) !!}
        <div class="form-group create-blog">
            {!! Form::label('名前') !!}

            <input class="form-control" name="title" type="text">
            {!! Form::label('メールアドレス') !!}

            <input class="form-control" name="title" type="text">
            {!! Form::label('ロール') !!}

            <textarea class="form-control" name="contents" rows="1"></textarea>
            {!! Form::submit('更新', ['class' => 'btn btn-primary btn-large form-control']) !!}

    {!! Form::close() !!}
</div>
</div>


@stop
