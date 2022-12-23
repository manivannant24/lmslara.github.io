<!DOCTYPE html>
<html>
<head>
@include('tes') 
  
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body class="mt32">
    <div class="container">
    
<center><h2>Lead search</h2><center><br>
<form method="POST" action="{{ route('filter') }}">
{{ csrf_field() }}
Domain Name:*
  <input type="text" name="search">
  <input type="submit" value="search">
  <!-- <select name="pagin">    <option value="5">5</option>
    <option value="10">10</option>
    <option value="15">15</option>

  </select> -->
  </form>



<br><br>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>COUNTRY</th>
                <th>STATE</th>
                <th>EMPSIZE</th>
                <th colspan=2><center>ACTIONS<center></th>
                
            </tr>
        </thead>
        <tbody>@foreach($dta as $dt)
            <tr>    <td>{{$dt->id}}</td>
                    <td>{{$dt->country}}</td>
                    <td>{{$dt->state}}</td>
                    <td>{{$dt->empsize}}</td>
                    <td ><a href="{{url('/update',$dt->id)}}" class="btn btn-success">update</a></td>
<td ><a href="{{url('/delete',$dt->id)}}" class="btn btn-danger">delete</a></td>
                </tr>
                     @endforeach
                     {{$dta->links()}}
            </tbody>
        </table>
  



</script>
</body>
</html>
