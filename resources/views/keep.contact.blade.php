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
<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$contact_name = $email = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["contact_name"])) {
    $nameErr = "Name is required";
  } else {
    $contact_name = test_input($_POST["contact_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$contact_name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = test_input($_POST["comments"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error" style="color:#FF0000;">* required fields</span></p>
<form method="POST" action="/contact">  
  {{ csrf_field() }}
  Name: <input type="text" name="contact_name">
  <span class="error" style="color:#FF0000;">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error" style="color:#FF0000;">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comments" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</div>
@endsection

