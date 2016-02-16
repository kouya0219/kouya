@extends('page.layaut')
@section('main-content')

<div class="container">
    <div class="row">
        <h1 class="text-center">{{$report->title}}</h1>
        <p class="text-right">editor : </p>
        <div class="blog-content">
            <p>{{$report->contents}}</p>
        </div>
    </div>
    <hr />
    <div class="row">
        <h2>コメント</h2>
        <a href= /articles/201/comments/create>
            <button class="btn btn-large btn-info pull-right">コメントを書く</button>
        </a>
        <div class="col-sm-12">
        </div>
    </div>
</div>

@stop
