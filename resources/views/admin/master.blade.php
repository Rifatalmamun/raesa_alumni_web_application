<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Alumni">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Alumni">
    <meta property="og:title" content="Alumni">
    <meta property="og:url" content="Alumni">
    <meta property="og:image" content="Alumni">
    <meta property="og:description" content="Alumni">
    <title>Alumni - Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

     <!-- Sweet alert CDN link -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


  <style>

    
[type='color'] {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            padding: 0;
            width: 30px;
            height: 15px;
            border: 1px solid #000;
            }

            [type='color']::-webkit-color-swatch-wrapper {
            padding: 0;
            }

            [type='color']::-webkit-color-swatch {
            border: none;
            }

            .color-picker {
          
              margin-left: 100px;
            padding: 10px 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            background-color: #f8f9f9;
            }




  </style>

</head>
<body class="app sidebar-mini">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="{{route('admin.dashboard')}}">Alumni</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        
        <li class="app-search ">
          <a class="dropdown-item bg-light" href="{{route('admin.logout')}}"><i class="fa fa-sign-out fa-lg text-dark"></i> <span class="text-dark font-weight-bold">Admin Logout</span> </a>
        </li>
    </ul>
</header>

<!--start of side menu-->


<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div>
      <p class="app-sidebar__user-name">Admin Features</p>
      
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="{{route('admin.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    



<!--user details-->
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Ex-Students</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">

        <li><a class="treeview-item" href="{{route('admin.create.ex.student')}}"><i class="icon fa fa-circle-o"></i>Add Ex-Student</a></li>

        <li><a class="treeview-item" href="{{route('admin.index.ex.student')}}"><i class="icon fa fa-circle-o"></i>All Ex-Student</a></li>

        {{-- <li><a class="treeview-item" href="{{route('admin.show.block.user')}}" rel="noopener"><i class="icon fa fa-circle-o"></i>Block User</a></li>
        <li><a class="treeview-item" href="{{route('admin.show.verified.user')}}"  rel="noopener"><i class="icon fa fa-circle-o"></i>Varified User</a></li>
        <li><a class="treeview-item" href="{{route('admin.show.all.verify.request')}}"  rel="noopener"><i class="icon fa fa-circle-o"></i>Varify Request</a></li>
        <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/"  rel="noopener"><i class="icon fa fa-circle-o"></i>Top Rated User</a></li>
        <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" rel="noopener"><i class="icon fa fa-circle-o"></i>Suspended User</a></li> --}}
      </ul>
    </li>


    {{-- <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> --}}
    

<!--geek details-->

    {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Geek Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.show.all.geekcategory')}}"><i class="icon fa fa-circle-o"></i>All Geeks Category</a></li>
        <li><a class="treeview-item" href="{{route('admin.show.all.geek')}}"><i class="icon fa fa-circle-o"></i>All Geeks</a></li>
        <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i>Top Selling Geeks</a></li>
        <li><a class="treeview-item" href="{{route('admin.show.suspended.geek')}}"><i class="icon fa fa-circle-o"></i>Suspended Geeks</a></li>
      </ul>
    </li>

 
<!--order details-->
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Order Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.show.all.order')}}"><i class="icon fa fa-circle-o"></i> All Order</a></li>
        <li><a class="treeview-item" href="{{route('admin.show.cancle.order')}}"><i class="icon fa fa-circle-o"></i> Cancle Order Request</a></li>
      </ul>
    </li>


<!--offer details-->
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Offer Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i>All Offers</a></li>
        <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i>Add New Offer</a></li>
      </ul>
    </li>

<!--payment details-->
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Payments Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i>All Transection</a></li>
        <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i>Today's Transection</a></li>
        <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i>Deposit List</a></li>
        <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i>Withdraw List</a></li>
        <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i>Withdraw Request</a></li>
        <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i>Transaction Complete</a></li>
      </ul>
    </li>

<!--Support Tickets-->

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Support Tickets</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i>Add New Tickets</a></li>
        <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i>Support Request</a></li>
      </ul>
    </li>
 --}}

<!--Notice Sector-->

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Notice Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.create.notice')}}"><i class="icon fa fa-circle-o"></i>Add New Notice</a></li>
        <li><a class="treeview-item" href="{{route('admin.index.notice')}}"><i class="icon fa fa-circle-o"></i>All Notice</a></li>
      </ul>
    </li> 

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Event Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.create.event')}}"><i class="icon fa fa-circle-o"></i>Add New Evemt</a></li>
        <li><a class="treeview-item" href="{{route('admin.index.event')}}"><i class="icon fa fa-circle-o"></i>All Evemt</a></li>
      </ul>
    </li> 



<!--Setting-->

    {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.general.setting')}}"><i class="icon fa fa-circle-o"></i>General Setting</a></li>
        <li><a class="treeview-item" href="{{route('admin.geek.setting')}}"><i class="icon fa fa-circle-o"></i>Geeks Setting</a></li>
        <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> User Setting</a></li>
        <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i>Notice Setting</a></li>
        <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i>Payment Setting</a></li>
        <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i>Support Setting</a></li>

      </ul>
    </li>
    <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Others</span></a></li>

     --}}

    <li><a class="app-menu__item" href="{{route('admin.show.all.city')}}"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">District</span></a></li>
                                                                                                        
  </ul>
</aside>


<!--end of side menu-->










@yield('content')


<!-- Essential javascripts for application to work-->
<script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/js/popper.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/main.js')}}"></script>

<!-- The javascript plugin to display page loading on top-->

<script src="{{asset('public/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script> 



<!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('public/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('public/js/plugins/chart.js')}}"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>




    <!--Normal sweet alert nonification-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){ 
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
   </script>  


<script>  
  $(document).on("click", "#blockUser", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to Block?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>

<script>  
  $(document).on("click", "#unblockUser", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to Unblock?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>
<script>  
  $(document).on("click", "#blockOrder", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to Block this Order?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Order unblock!"); 
           }
         });
     });
</script>
<script>  
  $(document).on("click", "#unblockOrder", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to UnBlock this Order?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Order block!");
           }
         });
     });
</script>
<script>  
  $(document).on("click", "#unverifyUser", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to unverify?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>
<script>  
  $(document).on("click", "#verifyUser", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to verify?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>

<script>  
  $(document).on("click", "#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to Delete?",
           text: "Once Delete, This will be Permanently Delete!",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>

<!--block or un block geek by admin-->
<script>  
  $(document).on("click", "#blockGeek", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to Block this GEEK?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>

<script>  
  $(document).on("click", "#unblockGeek", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to Unblock?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("Safe Data!");
           }
         });
     });
</script>


<script>  
  $(document).on("click", "#showGeek", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to show this bee in home page?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("geek hide!");
           }
         });
     });
</script>

<script>  
  $(document).on("click", "#hideGeek", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
         swal({
           title: "Are you Want to hide this bee from home page?",
           text: "OK? or Cancle",
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
                window.location.href = link;
           } else {
             swal("geek show!");
           }
         });
     });
</script>





<!-- Drop down js code-->
<script type="text/javascript" src="{{asset('public/js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/plugins/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/plugins/dropzone.js')}}"></script>

<script type="text/javascript">
  $('#sl').on('click', function(){
    $('#tl').loadingBtn();
    $('#tb').loadingBtn({ text : "Signing In"});
  });
  
  $('#el').on('click', function(){
    $('#tl').loadingBtnComplete();
    $('#tb').loadingBtnComplete({ html : "Sign In"});
  });
  
  $('#demoDate').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true,
    todayHighlight: true
  });


  $('#demoSelect').select2();



</script>

<!-- Drop down code script-->
<script type="text/javascript">
  if(document.location.hostname == 'pratikborsadiya.in') {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>



</body>
</html>
