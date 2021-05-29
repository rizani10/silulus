<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Surat Kelulusan</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/cuan.png') ?>">
</head>

<body>
  <table width="800" align="center">
    <tbody>
      <tr>
        <td style="width: 77px;" rowspan="4"><img src="<?= base_url('assets/img/') . $pengaturan['logo_instansi'] ?>" alt="" height="86" /></td>
        <td style="font-family: 'Times New Roman'; text-align: center;font-size:20px;  text-transform: uppercase;"><b><?= $pengaturan['pemerintah']; ?></b></td>
        <td style="width: 77px;" rowspan="4">&nbsp;</td>
      <tr>
        <td style="text-align: center;font-size:20px; font-family: 'Times New Roman';  text-transform: uppercase;"><b><?= $pengaturan['dinas']; ?></b></td>
      </tr>
      <tr>
        <td style="text-align: center;font-size:20px; font-family: 'Times New Roman';  text-transform: uppercase;"><b><?= $pengaturan['nama_sekolah']; ?></b></td>
      </tr>
      <tr>
        <td style="text-align: center; font-family: 'Times New Roman';"><?= $pengaturan['alamat']; ?></td>
      </tr>
      </tr>
    </tbody>
  </table>
  <hr width="800" style="height:2px;border-width:2;color:gray;background-color:gray">
  <table width="850" align="center" style="font-family: 'Times New Roman';">
    <tr>
      <td colspan="">
        <div align="center">
          <p><b><u>SURAT KETERANGAN HASIL UJIAN SEMENTARA</u></b>
            <br><strong>TAHUN PELAJARAN <?= $pengaturan['thn_pembelajaran']; ?></strong>
            <br>Nomor : <?= $kelulusan['nomor_surat']; ?>
          </p>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="">
        <div align="justify">
          <font face="Times New Roman" size=4>
            <p>Yang bertanda tangan dibawah ini, Kepala Sekolah <?= $pengaturan['nama_sekolah']; ?> menerangkan bahwa : </p>
          </font>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="4" align="center">
        <div align="center">
          <table width="576" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Times New Roman';">
            <tr>
              <td>
                <b>Nama</b>
              </td>
              <td>
                <b> : <?= ucwords(strtolower($kelulusan['nama'])); ?> </b>
              </td>
            </tr>

            <tr>
              <td>
                <b>NIS / NISN</b>
              </td>
              <td>
                <b> : <?= $kelulusan['nis'] . ' / ' . $kelulusan['nisn']; ?></b>
              </td>
            </tr>

            <tr>
              <td>
                <b>Tempat, Tanggal Lahir</b>
              </td>
              <td>
                <b> : <?= $kelulusan['tempat_lahir'] . ', ' . date('d F Y', strtotime($kelulusan['tgl_lahir'])); ?> </b>
              </td>
            </tr>

            <tr>
              <td>
                <b>Nama Orang Tua / Wali</b>
              </td>
              <td>
                <b> : <?= $kelulusan['nama_orangtua']; ?></b>
              </td>
            </tr>
            <tr>
              <td>
                <b>Asal Sekolah</b>
              </td>
              <td>
                <b> : <?= $kelulusan['asal_sekolah']; ?></b>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div align="center">
          <h1 style="text-align: center; font-family: 'Times New Roman'; text-transform: uppercase;"><?= $kelulusan['keterangan_lulus']; ?></h1>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div align="justify">
          <p>Dari sekolah <?= $pengaturan['nama_sekolah']; ?>, setelah memenuhi seluruh kriteria sesuai dengan peraturan perundang - undangan dengan hasil sebagai berikut : </p>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="4">
        <div align="justify">
          <table width="650" style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto;" cellpadding="3">
            <tbody style="font-family: 'Times New Roman';">
              <tr style="text-align: center;">
                <td style="border: 1px solid black;">NO</th>
                <td style="border: 1px solid black;" align="center">MATA PELAJARAN</td>
                <td style="border: 1px solid black;" align="center">NILAI UJIAN SEKOLAH</td>
              </tr>
              <tr>
                <td colspan="3" style="border: 1px solid black;">
                  Kelompok A
                </td>
              </tr>
              <tr>
                <td style=" border: 1px solid black; text-align:center ">1.</td>
                <td style="border: 1px solid black;">Pendidikan Agama dan Budi Pekerti</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['pai']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;  text-align:center">2.</td>
                <td style="border: 1px solid black;">Pendidikan Pancasila dan Kewarganegaraan</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['pkn']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;  text-align:center">3.</td>
                <td style="border: 1px solid black;">Bahasa Indonesia</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['b_ind']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;  text-align:center">4.</td>
                <td style="border: 1px solid black;">Bahasa Inggris</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['b_ing']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black; text-align:center">5.</td>
                <td style="border: 1px solid black;">Matematika</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['mtk']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black; text-align:center">6.</td>
                <td style="border: 1px solid black;">Ilmu Pengetahuan Alam</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['ipa']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black; text-align:center">7.</td>
                <td style="border: 1px solid black;">Ilmu Pengetahuan Sosial</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['ips']; ?></td>
              </tr>
              <tr>
                <td colspan="3" cellpadding="7">
                  Kelompok B
                </td>
              </tr>
              <tr>
                <td style="border: 1px solid black; text-align:center">1.</td>
                <td style="border: 1px solid black;">Seni Budaya</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['senbud']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black; text-align:center">2.</td>
                <td style="border: 1px solid black;">Pendidikan Jasmani Olahraga dan Kesehatan</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['penjeskes']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black; text-align:center">3.</td>
                <td style="border: 1px solid black;">Prakarya</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['prakarya']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;"></td>
                <td style="border: 1px solid black;" align="center">Rata-rata</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['rata_rata']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="4">
        <div align="justify">
          <p style="font-family: 'Times New Roman';">SKHU Sementara ini dapat digunakan untuk keperluan Penerimaan Peserta Didik Baru atau keperluan lain sesuai dengan ketentuan hanya berlaku sementara sampai dengan diterbitkannya Ijazah Tahun Pelajaran <?= $pengaturan['thn_pembelajaran']; ?></p>
          </font>
        </div>
      </td>
    </tr>

    <table width="800" height="0" border="0">
      <tr>
        <td width="487">
          <p>
          <div align="center">
        </td>
        <td width="359">
          <p>
            <font face="Times New Roman" size=4>Ditetapkan di <?= $kelulusan['dikeluarkan']; ?><br />
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