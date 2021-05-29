<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Lampiran Kelulusan</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/cuan.png') ?>">
  <!-- CSS Code -->
  <style type="text/css" scoped>
    table.GeneratedTable {
      border-collapse: collapse;
      border-width: 1px;
      border-style: solid;
      font-family: 'Times New Roman', Times, serif;
    }

    table.GeneratedTable td,
    table.GeneratedTable th {
      border-width: 1px;
      border-style: solid;
      padding: 3px;
    }
  </style>
</head>

<body>
  <table width="800" align="center">
    <font face="Times New Roman" size=4>
      <div>
        <tbody>
          <tr>
            <td style="width: 77px;" rowspan="4"><img src="<?= base_url('assets/img/') . $pengaturan['logo_instansi'] ?>" alt="" height="86" /></td>
            <td style="font-family: 'Times New Roman'; text-align: center;font-size:20px; text-transform: uppercase;"><b><?= $pengaturan['pemerintah']; ?></b></td>
            <td style="width: 77px;" rowspan="4">&nbsp;</td>
          <tr>
            <td style="text-align: center;font-size:20px; font-family: 'Times New Roman'; text-transform: uppercase;"><b><?= $pengaturan['dinas']; ?></b></td>
          </tr>
          <tr>
            <td style="text-align: center;font-size:20px; font-family: 'Times New Roman'; text-transform: uppercase;"><b><?= $pengaturan['nama_sekolah']; ?></b></td>
          </tr>
          <tr>
            <td style="text-align: center; font-family: 'Times New Roman';"><?= $pengaturan['alamat']; ?></td>
          </tr>
      </div>
    </font>
    </tbody>
  </table>
  <hr width="800" style="height:2px;border-width:2;color:gray;background-color:gray">
  <table width="850" align="center">
    <tr>
      <td colspan="">
        <div align="center">
          <p style="font-family: 'Times New Roman', Times, serif;"><b><u>LAMPIRAN KELULUSAN</b></u></p>
        </div>
      </td>
    </tr>
  </table>
  <table width="850" align="center" class="GeneratedTable">
    <thead>
      <tr>
        <th style="width: 50px;">No</th>
        <th>Nama</th>
        <th>NISN</th>
        <th>Asal Sekolah</th>
        <th>Keterangan Lulus</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($eksport as $row) : ?>
        <tr>
          <td style="text-align: center;"><?= $i++; ?></td>
          <td><?= ucwords(strtolower($row['nama'])); ?></td>
          <td style="text-align: center;"><?= $row['nisn']; ?></td>
          <td style="text-align: center;"><?= $row['asal_sekolah']; ?></td>
          <td style=" text-align: center;"><?= $row['keterangan_lulus']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <table width="800" height="0" border="0">
    <tr>
      <td width="487">
        <p>
        <div align="center">
      </td>
      <td width="359">
        <p>
          <font face="Times New Roman" size=4>Ditetapkan di <?= $row['dikeluarkan']; ?><br />
            Pada Tanggal <?= date('d F Y', strtotime($pengaturan['tgl_pengumuman'])); ?><br />
            Kepala <?= $pengaturan['nama_sekolah']; ?>
        </p>
        <p><img src="<?= base_url('assets/img/') . $pengaturan['ttd_kepsek']; ?>" width="100" height="80" /><br />
          <font face="Times New Roman" size=4><?= $pengaturan['nama_kepsek']; ?>
            <br />
            NIP. <?= $pengaturan['nip']; ?>
          </font>
        </p>
      </td>
    </tr>
  </table>
  <script>
    window.print();
  </script>
</body>

</html>