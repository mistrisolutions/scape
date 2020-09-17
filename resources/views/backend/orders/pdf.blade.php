<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    
    <!-- End plugin css for this page -->
    <!-- inject:css -->

    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <title></title>
  </head>
  <body>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Today orders-{{ $orders->count() }}</h4>
            <p class="card-description"> <h2 id="demo"></h2>
            </p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Order id </th>
                  <th> Customer phone </th>
                  <th> product name </th>
                  <th> Status</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($orders as $key=>$order)
                  <tr>
                    <td> {{ $key+1 }}</td>
                    <td> {{ $order->orderid }}</td>
                    <td> {{ $order->customerphone }}</td>
                    <td> {{ $order->productname }} </td>
                    <td> {{ $order->status->title }} </td>
                  </tr>  
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
  </body>
  <script>
    var curday = function(sp){
    today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //As January is 0.
    var yyyy = today.getFullYear();

    if(dd<10) dd='0'+dd;
    if(mm<10) mm='0'+mm;
    return (dd+sp+mm+sp+yyyy);
    };
    var d = curday('/');
    document.getElementById("demo").innerHTML = d;
    </script>
</html>