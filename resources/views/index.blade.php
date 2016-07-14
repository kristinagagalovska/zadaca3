@extends('layouts.app')

@section('content')

    <div class="form-group">
    <form class="form" action="{{ route('search') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <label class="control-label"> </label>
            <div class="input-group">
                 <span class="input-group-addon"></span>
                 <input type="text" class="form-control" name="name" placeholder="Име и Презиме">
                 <span class="input-group-btn">
                    <button type="submit" name="store" class="btn btn-default">Пребарај корисник</button>
                 </span>
            </div>
    </form>
    </div>

<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th>#</th>
        <th>Име и Презиме</th>
        <th>Дата на раѓање</th>
        <th>Износ</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->bday}}</td>
        <td>{{$user->amount}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    @endsection