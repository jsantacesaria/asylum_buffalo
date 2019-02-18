@extends('layouts.main')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div>
    <h1>Asylum</h1>
    <h4>Must Be Over 18 To Continue</h3>
    <button type="button" onclick="location.href='about'">Yes, I am Over 18</button>
    <button type = "button" onclick="location.href='http://www.google.com'" autofocus>No, I Am Not Over 18</button>
</div>
<div>
<img class="triskel-img" src="btri.jpg" alt="Triskelion">
</div>

@endsection
