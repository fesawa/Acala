<?php  
$data = $transaksi->get_pelanggan($id_pelanggan);
?>
<div class="col-md-12">
  <div class="panel">
    <div class="panel-default">
      <div class="panel-body">
        <h3>Riwayat Wisata</h3>
        <hr>
        <table class="table table-striped">
         <thead>
           <tr>
             <th>No.</th>
             <th>Tgl. Berangkat</th>
             <th>Status</th>
             <th>Total</th>
             <th>Tindakan</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach ($data as $key => $value): ?>
            <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value['tanggal'] ?></td>
              <td><?= $value['status'] ?></td>
              <td>Rp. <?= number_format($value['total']) ?></td>
              <td>
                <a href="deadline.php?id=<?= $value['id_booking'] ?>" class="btn btn-info btn-sm">Detail</a>
                <a href="member.php?page=pembayaran&id=<?= $value['id_booking'] ?>" class="btn btn-success btn-sm">Pembayaran</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
