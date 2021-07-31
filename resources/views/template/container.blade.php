<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin/home</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('body/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('body/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

  <!-- Page Wrapper -->
<div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin/Bimbim</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <hr class="sidebar-divider">

			<li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Home</span></a>
            </li>

			<li class="nav-item">
                <a class="nav-link" href="/view">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Product</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/category">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Category</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pembelian</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="belum-bayar">Pembelian Belum Bayar</a>
                        <a class="collapse-item" href="sudah-bayar">Pembelian Sudah Bayar</a>
                        <a class="collapse-item" href="pembelian-batal">Pembelian Batal</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="laporan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Pembelian</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                     <span>{{ __('Logout') }}</span>
                    </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                   </form>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
      
		<div class="container mt-5" style="width: 60%;">
			@yield('content')
		</div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('body/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('body/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('body/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('body/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('body/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('body/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('body/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>