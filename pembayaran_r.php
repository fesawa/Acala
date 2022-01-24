<?php  
$id_rental = $_GET['id'];
$detail = $rental->detail($id_rental);
$bank = $bank->get();
$cek = $rental->cek_pembayaran($id_rental);
$ambil = $rental->pembayaran($id_rental);
?>
<?php if ($cek==0): ?>
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-default">
        <div class="panel-body">
          <h3>Pembayaran Rental</h3>
          <hr>
          <table class="table table-bordered">
            <tr>
              <th>Mobil</th>
              <th>:</th>
              <th><?= $detail['nama_mobil'] ?> - Rp. <?= number_format($detail['harga_mobil'] )?> Hari</th>
            </tr>
            <tr>
              <th>Tanggal Rental</th>
              <th>:</th>
              <th><?= date('D-m-Y', strtotime($detail['start'])) ?> s/d <?= date('D-m-Y', strtotime($detail['end'])) ?></th>
            </tr>
            <tr>
              <th>Jumlah Mobil</th>
              <th>:</th>
              <th><?= $detail['jumlah'] ?></th>
            </tr>
            <tr>
              <th>Total Tagihan</th>
              <th>:</th>
              <th>Rp. <?= number_format($detail['total']) ?></th>
            </tr>
            <tr>
              <th>Status</th>
              <th>:</th>
              <th><?= $detail['status'] ?></th>
            </tr>
          </table>
          <hr>
          <div class="row">
            <?php foreach ($bank as $key => $value): ?>
              <div class="col-md-3">
                <img width="100" src="img-bank/<?= $value['gambar'] ?>" alt="">
                <br>
                <?= $value['norek'] ?> <br>
                a.n <?= $value['atas_nama'] ?>
              </div>
            <?php endforeach ?>
          </div>
<hr>
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Jumlah</label>
              <input type="text" name="jumlah" class="form-control" value="<?= $detail['total'] ?>" placeholder="Jumlah" readonly>
            </div>
            <div class="form-group">
              <label for="">Bukti</label>
              <input type="file" name="bukti" class="form-control" required>
            </div>
            <button name="unggah" class="btn btn-primary btn-block">Unggah Bukti</button>
          </form>
          <?php  
          if (isset($_POST['unggah'])) 
          {
            $rental->unggah($_POST['jumlah'],$_FILES['bukti'],$id_rental);
            echo "<script>alert('Bukti berhasil dikirimkan!');</script>";
            echo "<script>location='member.php?page=rental';</script>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php else: ?>
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-default">
          <div class="panel-body">
            <h3>Pembayaran Rental</h3>
            <hr>
            <table class="table table-bordered">
              <tr>
                <th>Mobil</th>
                <th>:</th>
                <th><?= $detail['nama_mobil'] ?> - Rp. <?= number_format($detail['harga_mobil'] )?> Hari</th>
              </tr>
              <tr>
                <th>Tanggal Rental</th>
                <th>:</th>
                <th><?= date('D-m-Y', strtotime($detail['start'])) ?> s/d <?= date('D-m-Y', strtotime($detail['end'])) ?></th>
              </tr>
              <tr>
                <th>Jumlah Mobil</th>
                <th>:</th>
                <th><?= $detail['jumlah'] ?></th>
              </tr>
              <tr>
                <th>Total Tagihan</th>
                <th>:</th>
                <th>Rp. <?= number_format($detail['total']) ?></th>
              </tr>
              <tr>
                <th>Status</th>
                <th>:</th>
                <th><?= $detail['status'] ?></th>
              </tr>
              <tr>
                <th>Bukti</th>
                <th>:</th>
                <th><img width="300" src="img-bukti/<?= $ambil['bukti'] ?>" alt=""></th>
              </tr>
            </table>

          </div>
        </div>
      </div>
    </div>
  <?php endif ?>
