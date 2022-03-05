@extends('layouts.front')


@section('content')

    <h1 class="text-3xl text-center">Swapi Films List</h1>

    <table-component films="{{ json_encode($films) }}"></table-component>

@endsection