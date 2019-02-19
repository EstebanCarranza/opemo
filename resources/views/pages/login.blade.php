@extends('layouts.master')
@section('content')
<form method="post" action="/dashboard">
    <input type="email" name="email" required/>
    <input type="password" name="pass" required/>
    <input type="submit" name="login" value="iniciar sesion">
</form>
@stop