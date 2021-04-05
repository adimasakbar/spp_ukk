<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>id_pembayaran</th>
        <th>nisn</th>
        <th>tanggal_bayar</th>
        <th>bulan_bayar</th>
        <th>tahun_bayar</th>
        <th>Id_spp</th>
        <th>Jumlah_bayar</th>
        <th>Opsi</th>
      </tr>

      <?php
      $no= 1;
      foreach ($pembayaran as $mhs): ?>

      <tr>
        <td><?php echo $mhs->id_pembayaran ?></td>
        <td><?php echo $mhs->nisn ?></td>
        <td><?php echo $mhs->tgl_bayar ?></td>
        <td><?php echo $mhs->bulan_dibayar ?></td>
        <td><?php echo $mhs->tahun_dibayar ?></td>
        <td><?php echo $mhs->id_spp ?></td>
        <td><?php echo $mhs->jumlah_bayar ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
