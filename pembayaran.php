<?php  
$id_booking = $_GET['id'];
$detail = $transaksi->detail($id_booking);
$bank = $bank->get();
$cek = $transaksi->cek_pembayaran($id_booking);
$ambil = $transaksi->pembayaran($id_booking);
?>
<?php if ($cek==0): ?>
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-default">
        <div class="panel-body">
          <h3>Pembayaran Paket Wisata</h3>
          <hr>
          <table class="table table-bordered">
            <tr>
              <th>Paket</th>
              <th>:</th>
              <th><?= $detail['nm_paket'] ?> - Rp. <?= $detail['harga'] ?> Org</th>
            </tr>
            <tr>
              <th>Tanggal Keberangkatan</th>
              <th>:</th>
              <th><?= $detail['tanggal'] ?></th>
            </tr>
            <tr>
              <th>Jumlah</th>
              <th>:</th>
              <th><?= $detail['jumlah'] ?> Org</th>
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
              <input type="text" name="jumlah" class="form-control" value="<?= $detail['total'] ?>" placeholder="Jumlah" required>
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
            $transaksi->unggah($_POST['jumlah'],$_FILES['bukti'],$id_booking);
            echo "<script>alert('Bukti berhasil dikirimkan!');</script>";
            echo "<script>location='member.php?page=pesanan_saya;</script>";
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
          <h3>Pembayaran Paket Wisata</h3>
          <hr>
          <table class="table table-bordered">
            <tr>
              <th>Paket</th>
              <th>:</th>
              <th><?= $detail['nm_paket'] ?> - Rp. <?= $detail['harga'] ?> Org</th>
            </tr>
            <tr>
              <th>Tanggal Keberangkatan</th>
              <th>:</th>
              <th><?= $detail['tanggal'] ?></th>
            </tr>

            <tr>
              <th>Jumlah</th>
              <th>:</th>
              <th><?= $detail['jumlah'] ?> Org</th>
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

