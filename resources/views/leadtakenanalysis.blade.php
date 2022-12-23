<!DOCTYPE html>
<html lang="en">

<head>
@include('tes') 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LMS - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
@section('contents')
<li class="nav-item">
                <a class="nav-link" href="{{url('leadtakenanalysis')}}">
                <i class="fa fa-download" aria-hidden="true"></i>

                    <span>Lead Taken Analysis</span></a>
            </li>
            @endsection
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
                        @if($errors->any())
                        @foreach($errors->all() as $error)
                        {{$errors}}
                        @endforeach
                        @endif    
                        
                        </div>

 
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
</div>   
<div class="chartBox">
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
const data = {
  labels: [
    // 'us',
    // 'ca',
    // 'uk',
    // 'de,',
    // 'cn',
     <?php echo $chardata ?>
     
     
  ],
  datasets: [{
    label: 'My First Dataset',
    data:[10,20,30,40,50,60,70,80,90,100],
    backgroundColor: [
      // 'rgb(255, 99, 132)',
      // 'rgb(54, 162, 235)',
      // 'rgb(255, 205, 86)',
      // 'rgb(150, 200, 86)',
      // 'rgb(54, 100, 235)',
    ],
    hoverOffset: 5
  }]
};
const config = {
  type: 'line',
  data: data,
};
data = {
    datasets: [{
        data: [10, 20, 30]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue',
        'green',
        
    ]
};

</script>
 

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );786
  
</script>

                                </div>
                                                              

                                
                        </div>

                       
                    
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; LMS 2022</span>
                        <img src="{{ asset('/img/topbanner.png') }}" alt="shippingchimp logo"height="65" width="200">

                    </div>
                </div>
            </footer>

    </div>
   

</body>

</html>

