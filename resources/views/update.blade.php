<html lang="en"><head>
<head>
    @include('layouts.sidebar') 

</head>
<body>
      <!-- preloader div -->
 <div id="loader" class="center"></div>

@if ($message = Session::get('success'))  
<div class="alert alert-success alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
        <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('error'))  
<div class="alert alert-danger alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
        <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('warning'))  
<div class="alert alert-warning alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('info'))  
<div class="alert alert-info alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($errors->any())  
<div class="alert alert-danger">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    Please check the form below for errors  
</div>  
@endif
    <x-compofiletest/>
    <center><h1>hi welcome to update page</h1><br>
    <form method="POST" action="{{url('updatesave')}}">
        @csrf
     
        <input type="hidden" name="id" value="{{$varr->id}}"><br><br>
        country &nbsp; <input type="text" name="country" value="{{$varr->country}}"><br><br>
        state &nbsp; &nbsp; &nbsp; <input type="text" name="state" value="{{$varr->state}}"><br><br>


       <input type="submit" value="submit">
       </form></center>
</body>
</html>