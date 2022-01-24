<div class="col-md-12">
  <div class="panel">
    <div class="panel-default">
      <div class="panel-body">
        <h3>Profil Saya</h3>
        <hr>
        <table class="table table-striped">
          <tr>
            <th width="25%">Nama Lengkap</th>
            <th width="5%">:</th>
            <th><?= $detail['nama_pelanggan'] ?></th>
          </tr>
          <tr>
            <th>Email</th>
            <th>:</th>
            <th><?= $detail['email_pelanggan'] ?></th>
          </tr>
          <tr>
            <th>Telepon</th>
            <th>:</th>
            <th><?= $detail['telepon_pelanggan'] ?></th>
          </tr>
          <tr>
            <th>Alamat</th>
            <th>:</th>
            <th><?= $detail['alamat_pelanggan'] ?></th>
          </tr>
          <tr>
            <th>KTP</th>
            <th>:</th>
            <th>
              <?php if (empty($detail['foto_ktp'])): ?>
                <div class="alert alert-danger">
                  <i class="fa fa-info-circle"> Silahkan upload foto KTP anda agar bisa booking paket wisata!</i>
                </div>
                <?php else: ?>
                  <img class="img-thumbnail" width="250" src="img-ktp/<?= $detail['foto_ktp'] ?>?" alt="">
              <?php endif ?>
            </th>
          </tr>
        </table>
        <center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Ubah Profil</button></center>
      </div>
    </div>
  </div>
</div>