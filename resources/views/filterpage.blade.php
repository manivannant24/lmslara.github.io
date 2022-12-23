<html>
    <head>
    @include('tes') 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <!-- page loader link -->
<link rel="stylesheet" href="/css/pageloader.css" type="text/css"> <!---  css file  --->
<script type="text/javascript" src="/js/pageloader.js"></script>
</head>


<body>
  <!-- preloader div -->
 <div id="loader" class="center"></div>

<center><h1>Filter and download Page</h1>

<p>The select element is used to create a drop-down list.</p><center><br><br>
<div class="container">
<form action="{{url('filteranddownload')}}">

 &nbsp;  &nbsp;
  <label for="country">Choose Country:</label>
  <select name="country">
  @foreach ($cy as $user)
    <option value="{{ $user->country}}">{{ $user->country}}</option>

  @endforeach
  </select>    
   
  &nbsp; &nbsp;
  <label for="Empsize">Choose Empsize:</label>
  <select name="Empsize" id="Empsize">
  @foreach ($ez as $user)
    <option value="{{ $user->empsize}}">{{$user->empsize}}</option>

  @endforeach
  </select> &nbsp; &nbsp;
  <label for="state">Choose State:</label>
  <select name="state">
  @foreach ($st as $user)
    <option value="{{ $user->state}}">{{ $user->state}}</option>

  @endforeach
  </select>   &nbsp; &nbsp;
  
  <label for="birthday">Date From:</label>  <input type="date" default="mm/dd/year" id="fromdate" name="fromdate" min="12/12/1999" max="12/12/2022"> 
  &nbsp;
  <label for="birthdays">Date To:</label>  <input type="date" default="mm/dd/year" id="todate" name="todate" min="12/12/1999" max="12/12/2022"> 
  <br><br>
  <input type="submit" value="Submit">
</form><br>

 <table id="tbl_exporttable_to_xls">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">country</th>
      <th scope="col">state</th>
      <th scope="col">empsize</th>
    </tr>
  </thead>
  <tbody>
@foreach($data as $d)    
<td>{{$d->id}}</td>  
<td>{{$d->country}}</td>   
<td>{{$d->state}}</td>
<td>{{$d->empsize}}</td> </tbody>
@endforeach

  
</table>

</div>  
<BR>
<!-- <button class="btn btn-success  pull-left"><a href="{{url('exportintoexcel')}}">Export into Excel</a></button> -->
<button id="btnExport btn-success" onclick="ExportToExcel('xlsx')" class="btnExport btn-success">Export table to excel</button>
    <script>
        function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('tbl_exporttable_to_xls');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
    }
    </script>
    
</body>
</html>
