@extends('page.layaut')
@section('main-content')

<div class="container">
    <div class="row">
        <h1>USERSLIST</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ユーザー名</th>
                    <th>作成日</th>
                    <th>更新日</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <a href='/users/{{$user->id}}'/>
                            {{$user->name}}
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$users->links()}}
</div>
@stop
