@extends('page.layaut')
@section('main-content')

<div class="container">
    <div class="row">
        <h1>BLOGLIST</h1>
        <a href="/articles/create">
            <button class="btn btn-primary pull-right">
                記事作成
            </button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>記事名</th>
                    <th>作成者</th>
                    <th>更新日</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>
                            <a href='/articles/{{$report->id}}'/>
                            {{$report->title}}
                        </td>
                        <td>{{$report->title}}</td>
                        <td>{{$report->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$reports->links()}}
</div>
@stop
