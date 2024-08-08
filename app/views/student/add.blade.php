@extends('layout.main')
@section('content')
@if (isset($_SESSION['errors']) && isset($_GET['msg']))
<ul>
    @foreach ($_SESSION['errorss'] as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
@if (isset($_SESSION['success']) && isset($_GET['msg']))
<span>{{$_SESSION['success']}}</span>
@endif
<form action="{{route('')}}" method="POST">
    <label for="">Ten:</label>
    <input type="text" name="name" id="name">
    <label for="">Year:</label>
    <input type="text" name="year_of_birth">
    <label for="">SDT:</label>
    <input type="text" name="phone_number">
    <input type="submit" name="btn-submit" value="gui">
</form>
@endsection