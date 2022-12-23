<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    @include('tes')
</head>
<style>
.uploadform {
    display: table;
    margin: auto;
} 

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page loader link -->
<link rel="stylesheet" href="/css/pageloader.css" type="text/css"> <!---  css file  --->
<script type="text/javascript" src="/js/pageloader.js"></script>

    <title>import form</title>
</head>
<body class="content">
    <!-- preloader div -->
 <div id="loader" class="center"></div>

 <h1><center>Lead Upload Page</center></h1><br><br>
<div class= "uploadform">
    <form method="POST" action="{{route('import.file')}}" enctype="multipart/form-data">
        @csrf
        <b>choose file<b><br>
            <input type="file" name="file">
            <input type="submit" value="submit" name="submit">
    </form>
    @if ($message = Session::get('success'))  
<div class="alert alert-success alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif </div>
</body>
</html>