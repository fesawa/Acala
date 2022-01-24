
<?php
include 'config/class.php';

$sql = $transaksi->jadwal();


$data=array();

foreach($sql as $row)

{

  $data[]=array(

    'title'=> $row['nm_paket'],

    'start'=>$row['tgl1'],

    'end'=>$row['tgl2'],
    'color'=>'red',
    'textColor'=>'black'

  );

}

echo json_encode($data);


?>