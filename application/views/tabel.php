
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
          <div class="col-md-12">
               <div class="box">
                  <div class="container">
                   <h3 class="box-title">Tambah Event</h3>
               <a class="btn btn-info" href="<?= base_url(). "crud/form"; ?>">Add Data</a><br><br>
               </div>
                
              </div>
          </div>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
              <table class="table table-bordered table-striped " id="datatables">
                  <thead>
                     <th>ID</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Time</th>
                      <th>Image</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      <?php foreach($data as $boo){?>
                        <tr>
                            <td><?= $boo["id"] ?></td>
                            <td><?= $boo["name"] ?></td>
                            <td><?= $boo["location"] ?></td>
                            <td><?= $boo["time"] ?></td>
                            <td><img style="width:100px" src="<?= $boo["img"]; ?>" /></td>
                            <td>
                                <a class="btn btn-danger" href="<?= base_url(). "crud/edit/".$boo["id"]; ?>">Edit</a>
                                <a class="btn btn-info" href="<?= base_url(). "crud/delete/".$boo["id"]; ?>">Hapus</a>
                            </td>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
              
              </div>
            </div>
          </div>
      </div>
      <!-- /.row -->
    </section>
    
      
      
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
