<!DOCTYPE html>
<html lang="en">
<head>
@include('tes')  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page loader link -->
<link rel="stylesheet" href="/css/pageloader.css" type="text/css"> <!---  css file  --->
<script type="text/javascript" src="/js/pageloader.js"></script>

    <title>Add Category</title>
    <style>
      .body{  
        display: table;
    margin: auto;

      }</style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@yield('sidebarbody')
<body>
  
  <!-- preloader div -->
 <div id="loader" class="center"></div>
 
  <div class="body">
    <h1> NEW Category DETAILS</H1><br><br>
    <form method="POST">
        @csrf
    
        <b>Country *<br>
        <input type="text" name="country" required="please fill Country Code"><br>
        Country state*<br>
        <input type="text" name="state" required="please fill Country Name"><br>
       
<input type="submit" name="add" value="Add">
</form>
<br>
@if ($message = Session::get('success'))  
<div class="alert alert-success alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif 
    </div>
</body>
</html>