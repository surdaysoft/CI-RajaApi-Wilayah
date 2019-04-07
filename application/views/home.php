<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Wilayah</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Provinsi</label>
                <select id="prov" class="form-control" onchange="getKab();">
                  <option value="" disabled selected>Pilih Provinsi</option>
                  <!-- <option>option 1</option> -->
                  <?php $this->load->view('getProvinsi'); ?>

                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kabupaten</label>
                <select id="kab" class="form-control" onchange="getKec();">
                  <option value="" disabled selected>Pilih Kabupaten</option>


                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kecamatan</label>
                <select id="kec" class="form-control" onchange="getKel();">
                  <option value="" disabled selected>Pilih Kecamatan</option>

                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kelurahan</label>
                <select id="kel" class="form-control">
                  <option value="" disabled selected>Pilih Kelurahan</option>


                </select>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button id="saveWilayah" onclick="submitWil();" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.Left col -->

    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
