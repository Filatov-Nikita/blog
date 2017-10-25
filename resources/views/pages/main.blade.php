@extends('layouts.base')
@if(session()->has('register')) 
<script>alert('Регистрация была успешно выполнена') </script>  
@endif