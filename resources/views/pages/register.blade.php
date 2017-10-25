@extends('layouts.base')

@section('content')
<form action="" method="POST">
    {{ csrf_field() }}
    @if(isset($errors) && count($errors) > 0) 
    <div class="">
        <ul>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    имя <input type="text" name = "name" value = "{{old('name')}}"><br>
    email <input type="text" name = "email" value = "{{old('email')}}"><br>
    Пароль <input type="password" name = "password"><br>
    Повтор пароля<input type="password" name = "password_confirmation"><br>
    Пользовательское соглашение<input type="checkbox" name = "license"><br>
    <input type = "submit" value = "Отправить">
</form>
@endsection