<!DOCTYPE html>

<html lang="en">

<head>
  
  <title>PeminjamanRuangan</title>
  @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><center>Peminjaman Ruangan Gedung UMBCC</center></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
      <div class="card card-solid">
        <div class="row">
          <div class="col-12">
            <img src="{{asset('img/umb3.jpg')}}" class="product image" weight="585" height="585">
          </div>
        </div>
      </div>
    </div>
    @include('Template.content')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('Template.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('Template.script')

</body>
</html>
