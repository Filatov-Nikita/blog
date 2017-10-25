@extends('layouts.base')
@if(Auth::check())
<div>Вы вошли как {{Auth::user()->name}}</div>
@endif
@if(session()->has('register')) 
<script>alert('Регистрация была успешно выполнена') </script>  
@endif