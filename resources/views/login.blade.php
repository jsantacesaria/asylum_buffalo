@extends('layouts.app')

@section('title')
   Asylum Login
@endsection

@section('sidebar')
    @parent

@endsection

@section('content')

<div>
    <h1 >Asylum Members Only Login</h1>
    <button type = "button" onclick="location.href='login'">Login</button>
	
</div>
@endsection
