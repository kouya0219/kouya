@extends('page.layaut')
@section('main-content')

<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
               <div class="panel-heading">Login</div>
               <div class="panel-body">
                   {!! Form::open(['url' => url()->current(), 'method' => 'POST', 'class' => 'row', 'id' => 'form']) !!}
                       <div class="form-group create-blog">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           {!! Form::label('E-Mail Address') !!}

                           <input class="form-control" name="main" type="text">
                           {!! Form::label('Password') !!}

                           <input class="form-control" name="password" type="text">
                           {!! Form::checkbox('Remember Me') !!}

                           {!! Form::submit('Login', ['class' => 'btn btn-primary btn-large form-control']) !!}

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>

@stop
