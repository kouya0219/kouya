@extends('page.layaut')
@section('main-content')


<div class="container">
 <div class="row">
     {!! Form::open(['url' => url()->current(), 'method' => 'POST', 'class' => 'row', 'id' => 'form']) !!}
         <div class="form-group create-blog">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             {!! Form::label('コメント内容') !!}

             <textarea class="form-control" name="contents" cols="50" rows="10"></textarea>
             {!! Form::submit('作成', ['class' => 'btn btn-primary btn-large form-control']) !!}

     {!! Form::close() !!}
 </div>
</div>

@stop
