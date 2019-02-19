@extends('layouts.app')

@section('title')
   Contact Asylum
@endsection

@section('sidebar')
    @parent

@endsection

@section('content')
<div>
    <h1 style="font-size:40px">Contact Asylum</h1>

<p><span class="error" style="color:#FF0000;">* required fields</span></p>
<form method="POST" action="/contact">  
  {{ csrf_field() }}
  Name: <input type="text" name="contact_name">
  <span class="error" style="color:#FF0000;">*</span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error" style="color:#FF0000;">*</span>
  <br><br>
  Comment: <textarea name="comments" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</div>
@endsection

