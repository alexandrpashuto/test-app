@extends('layouts.test')
@section('content')
    <div class="container">
        <h3 class="text-center">История запросов</h3>
        <div class="row align-items-center" style="margin-top: 10px;">
            @if( !count($results) )
                <p class="text-center">Нет выполненных запросов</p>
            @else
                <table class="table table-bordered border-primary">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Пользователь</th>
                        <th>Запрос</th>
                        <th>Результат</th>
                        <th>Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{{$result->id}}</td>
                            <td>{{$result->user->name}}</td>
                            <td>{{$result->request}}</td>
                            <td>{{$result->result}}</td>
                            <td>{{$result->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="cont-flex">
            <div class="center-block pagin-block">
                {{$results->links()}}
            </div>
        </div>
    </div>
@endsection
