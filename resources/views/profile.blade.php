<!DOCTYPE html>
<html lang="en">
<head>
@include('tes')  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<style>
     .content{
            display: table;
            margin:auto;
        }
</style>
<body>
<div class="content">
    <center><h1><b>UPDATE YOUR PROFILE DETAILS</b></h1><center>
    <div  >   
<form>
@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
    <br><br><br>Name<br>
    <input type="text" name="name" value="{{ Auth::user()->name }}" >
    <br><label for="email">Email: *</label><br>
    <input type="text" id="email" value="{{ Auth::user()->email }}" >
   
    <br><label for="np">New Password: *</label><br>
    <input type="password" id="confirm" required name="np" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
    <br><label for="confirm">Confirm Password: *</label><br>
    <input type="password" id="confirm"  required name="confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
    <button>update</button></form></div>
</body>
</html>