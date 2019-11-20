 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">MAHASISWA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/peminjaman" method="post">
                <div class="card-body">
                  <div class="form-group">
                  {{ csrf_field() }}
                    <label for="exampleInputNama">NAMA</label>
                    <input type="text" class="form-control" id="exampleInputNama" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNPM">NPM</label>
                    <input type="text" class="form-control" id="exampleInputNPM" placeholder="NPM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProdi">NO HP</label>
                    <input type="text" class="form-control" id="exampleInputNohp" placeholder="Nomor Hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProdi">PRODI</label>
                    <input type="text" class="form-control" id="exampleInputProdi" placeholder="Program Studi">
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Add">Submit</button>
                    </div>  
                    </div>
                  </div>
                </div>
              </form>
                <!-- /.card-body -->

                <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">RUANGAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/peminjaman" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Kode Peminjaman</label>
                    <input type="text" class="form-control" id="exampleInputKdpeminjaman" placeholder="Enter Kode">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNPM">Kode Ruangan</label>
                    <input type="text" class="form-control" id="exampleInpuKdRuangan" placeholder="Kode Ruangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNPM">Gedung</label>
                    <input type="text" class="form-control" id="exampleInpuGedung" placeholder="Gedung">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProdi">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="exampleInputtangal" placeholder="tanggal pinjam">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProdi">Tanggal Kembali</label>
                    <input type="date" class="form-control" id="exampleInputtanggal" placeholder="tanggal kembali">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProdi">Keperluan</label>
                    <input type="text" class="form-control" id="exampleInputKeperluan" placeholder="Keperluan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProdi">Jaminan</label>
                    <input type="text" class="form-control" id="exampleInputJaminan" placeholder="Jaminan">
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                    </div>  
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>