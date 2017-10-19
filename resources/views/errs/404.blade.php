@extends('layouts.base')

    @section('content')
    <h1>Ошибка 404 - начните с главной</h1>
    Попробуйте <a href="/">начать с главной</a>
    @endsection
    
        @section('head_scripts')
        @parent
        <script src="scripts.js"></script>
        @endsection