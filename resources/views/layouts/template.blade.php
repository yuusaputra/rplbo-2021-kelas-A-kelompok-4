<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Surat Menyurat Satu Pintu</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" style="background-color: #007BDF; height: 55px">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mr-5">
        <img src="{{asset('image/akun.png')}}" class="img-circle mr-3" alt="User Image" style="height: 20px; width: 20px" >
        <span style="color: white">Hi, {{Auth::user()->nama}}</span>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="d-flex p-4" style="background-color: #0008DF">
        <div class="image mx-auto d-block">
          <img src="{{asset('image/akun.png')}}" class="img-circle" alt="User Image" style="height: 130px; width: 130px" >
        </div>
      </div>
    <div class="sidebar" style="background-color: #007BDF">
      <!-- Sidebar user (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="background-color">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                  <p style="color: white">Dashboard</p>
                </a>
            </li>
            @if (auth()->user()->unit_kerja=="Resepsionis")
            <li class="nav-item">
              <a href="{{route('tampilpengguna')}}" class="nav-link">
                <p style="color: white">Manajemen Pengguna</p>
              </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link">
                <p style="color: white">
                    Pengajuan Surat
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                  @if (auth()->user()->unit_kerja=="Resepsionis")
                  <li class="nav-item">
                    <a href="{{route('tampilpengajuansuratmasuk')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: white">Pengajuan Surat Masuk</p>
                    </a>
                  </li>
                  @endif
                  @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                  <li class="nav-item">
                    <a href="{{route('tampilpengajuansuratmasuk')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: white">Pengajuan Surat Masuk</p>
                    </a>
                </li>
                  @endif
                  @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                  <li class="nav-item">
                    <a href="{{route('tampilpengajuansuratkeluar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p  style="color: white">Pengajuan Surat Keluar</p>
                    </a>
                  </li>
                  @endif
                  @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
                  <li class="nav-item">
                    <a href="{{route('tampilpengajuansuratkeluar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: white">Pengajuan Surat Keluar</p>
                    </a>
                  </li>
                  @endif
                  @if (auth()->user()->unit_kerja=="Kepala Sekolah")
                  <li class="nav-item">
                    <a href="{{route('tampilpengajuansuratkeluar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: white">Pengajuan Surat Keluar</p>
                    </a>
                  </li>
                  @endif
                </ul>
            </li>
            @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
            <li class="nav-item">
              <a href="#" class="nav-link">
              <p style="color: white">
                  Data Surat
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white"> Data Surat Masuk</p>
                  </a>
              </li>
                @endif
                @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
                </li>
                @endif
                @if (auth()->user()->unit_kerja=="Kepala Sekolah")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
              </li>
                @endif
                @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                <li class="nav-item">
                  <a href="{{route('tampilsuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Keluar</p>
                  </a>
              </li>
                @endif
              </ul>
             </li>
            @endif

            @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
            <li class="nav-item">
              <a href="#" class="nav-link">
              <p style="color: white">
                  Data Surat
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
              </li>
                @endif
                @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
                </li>
                @endif
                @if (auth()->user()->unit_kerja=="Kepala Sekolah")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
              </li>
                @endif
                @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                <li class="nav-item">
                  <a href="{{route('tampilsuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Keluar</p>
                  </a>
              </li>
                @endif
              </ul>
             </li>
            @endif

            @if (auth()->user()->unit_kerja=="Kepala Sekolah")
            <li class="nav-item">
              <a href="#" class="nav-link">
              <p style="color: white">
                  Data Surat
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
              </li>
                @endif
                @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
                </li>
                @endif
                @if (auth()->user()->unit_kerja=="Kepala Sekolah")
                <li class="nav-item">
                  <a href="{{route('tampilsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Masuk</p>
                  </a>
              </li>
                @endif
                @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                <li class="nav-item">
                  <a href="{{route('tampilsuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Data Surat Keluar</p>
                  </a>
              </li>
                @endif
              </ul>
             </li>
            @endif
            
            @if (auth()->user()->unit_kerja=="Resepsionis")
            <li class="nav-item">
              <a href="{{route('tampillegalisirijazah')}}" class="nav-link">
                <p style="color: white">Legalisir Ijazah</p>
              </a>
            </li>
            @endif
            @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
            <li class="nav-item">
              <a href="{{route('tampillegalisirijazah')}}" class="nav-link">
                <p style="color: white">Legalisir Ijazah</p>
              </a>
            </li>
            @endif
            @if (auth()->user()->unit_kerja=="Kepala Sekolah")
            <li class="nav-item">
              <a href="{{route('tampillegalisirijazah')}}" class="nav-link">
                <p style="color: white">Legalisir Ijazah</p>
              </a>
            </li>
            @endif
            @if (auth()->user()->unit_kerja=="Resepsionis")
            <li class="nav-item">
              <a href="#" class="nav-link">
              <p style="color: white">
                  Hasil Surat
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href= "{{route('tampilhasilsuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Hasil Surat Keluar</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('tampilhasillegalisirijazah')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Hasil Legalisir Ijazah</p>
                  </a>
              </li>
              </ul>
          </li>
            @endif
            <li class="nav-item">
              <a href="#" class="nav-link">
              <p style="color: white">
                  Status Surat
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href= "{{route('statussuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Surat Masuk</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('statussuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: white">Surat Keluar</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{route('statuslegalisirijazah')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="color: white">Legalisir Ijazah</p>
                </a>
            </li>
              </ul>
          </li>
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                  <i class="fas fa-sign-out-alt mr-1" style="color: white"></i><p style="color: white">Logout</p>
                </a>
            </li>
            

          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <section class="content-wrapper">
    @yield('content')
    </section>  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="background-color:">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
</html>
