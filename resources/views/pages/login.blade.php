@extends('layouts.base')

@section('content')
<form action="" method="POST">
    {{ csrf_field() }}
    email <input type="text" name = "email" value = "{{old('email')}}"><br>
    Пароль <input type="password" name = "password"><br>
    Запомни меня <input type="checkbox" name = "remember"><br>
    <input type = "submit" value = "Отправить">
</form>
@endsection