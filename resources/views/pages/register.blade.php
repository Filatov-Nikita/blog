@extends('layouts.base')
    
@section('content')
<form action="" method="POST">
    имя <input type="text" name = "name"><br>
    email <input type="text" name = "email"><br>
   Пароль <input type="text" name = "password"><br>
    Повтор пароля<input type="text" name = "password1"><br>
    Пользовательское соглашение<input type="checkbox" name = "license"><br>
    <input type = "submit" value = "Отправить">
</form>
@endsection