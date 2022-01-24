<?php  
$data = $rental->get_pelanggan($id_pelanggan);
?>
<div class="col-md-12">
  <div class="panel">
    <div class="panel-default">
      <div class="panel-body">
        <h3>Rental Mobil</h3>
        <hr>
        <table class="table table-striped">
         <thead>
           <tr>
             <th>No.</th>
             <th>Tgl. Rental</th>
             <th>Status</th>
             <th>Total</th>
             <th>Tindakan</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach ($data as $key => $value): ?>
            <tr>
              <td><?= $key+1 ?></td>
              <td><?= date('D-m-Y', strtotime($value['start'])) ?> s/d <?= date('D-m-Y', strtotime($value['end'])) ?></td>
              <td><?= $value['status'] ?></td>
              <td>Rp. <?= number_format($value['total']) ?></td>
              <td>
                <a href="deadline_rental.php?id=<?= $value['id_rental'] ?>" class="btn btn-info btn-sm">Detail</a>
                <a href="member.php?page=pembayaran_r&id=<?= $value['id_rental'] ?>" class="btn btn-success btn-sm">Pembayaran</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
