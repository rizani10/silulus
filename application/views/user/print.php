<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table width="800" align="center">
    <tbody>
      <tr>
        <td style="width: 77px;" rowspan="4"><img src="<?= base_url('assets/img/smp.png') ?>" alt="" height="86" /></td>
        <td style="text-align: center;font-size:20px;"><b>PEMERINTAH KABUPATEN HULU SUNGAI SELATAN</b></td>
        <td style="width: 77px;" rowspan="4">&nbsp;</td>
      <tr>
        <td style="text-align: center;font-size:20px;"><b>DINAS PENDIDIKAN DAN KEBUDAYAAN</b></td>
      </tr>
      <tr>
        <td style="text-align: center;font-size:20px;"><b>SMP LOREM IPSUM</b></td>
      </tr>
      <tr>
        <td style="text-align: center;">JL KANDANGAN</td>
      </tr>
    </tbody>
  </table>
  <hr width="800" style="height:2px;border-width:2;color:gray;background-color:gray">

  <table width="800" align="center">
    <tr>
      <td colspan="4">
        <div align="center">
          <p><b><u>SURAT KETERANGAN LULUS</u></b>
            <br>NOMOR : 122/89/ JUNI / 2021
          </p>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div style="font-family:Arial, Helvetica, sans-serif; text-align:justify">
          <br>
          <p>Yang bertanda tangan di bawah ini, Kepala Sekolah <?= $kelulusan['nama_sekolah']; ?> menerangkan bahwa :</p>
        </div>
      </td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td>Nama</td>
      <td colspan="2">: <?= $kelulusan['nama']; ?></td>
    </tr>
    <tr>
      <td height="26" width="70">&nbsp;</td>
      <td width="165">NISN</td>
      <td colspan="2">: <?= $kelulusan['nisn']; ?> </td>
    </tr>
    <tr>
      <td height="26" width="70">&nbsp;</td>
      <td width="165">NIS</td>
      <td colspan="2">: <?= $kelulusan['nis']; ?> </td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td>Tempat, Tanggal Lahir</td>
      <td colspan="2">: <?= $kelulusan['tempat_lahir'] . ',' . $kelulusan['tgl_lahir']; ?></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td>Nama Orang Tua</td>
      <td colspan="2">: <?= $kelulusan['nama_orangtua']; ?></td>
    </tr>
    <tr>
      <td colspan="4">
        <div align="justify">
          <p>Dinyatakan
            <b><strong> <?= $kelulusan['keterangan_lulus']; ?></strong>
            </b></b> dari satuan pendidikan berdasarkan kriteria kelulusan <?= $kelulusan['nama_sekolah']; ?> Tahun Pelajaran 2019/2020, dengan nilai rata - rata sebagai berikut :
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div align="justify">
          <table width="650" style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto;">
            <tbody>
              <tr style="text-align: center;">
                <td style="border: 1px solid black;">NO</th>
                <td style="border: 1px solid black;" align="center">MATA PELAJARAN</td>
                <td style="border: 1px solid black;" align="center">NILAI UJIAN SEKOLAH</td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">1.</td>
                <td style="border: 1px solid black;">Pendidikan Agama dan Budi Pekerti</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['pai']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">2.</td>
                <td style="border: 1px solid black;">Pendidikan Pancasila dan Kewarganegaraan</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['pkn']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">3.</td>
                <td style="border: 1px solid black;">Bahasa Indonesia</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['b_ind']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">4.</td>
                <td style="border: 1px solid black;">Bahasa Inggris</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['b_ing']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">5.</td>
                <td style="border: 1px solid black;">Matematika</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['mtk']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">6.</td>
                <td style="border: 1px solid black;">Ilmu Pengetahuan Alam</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['ipa']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">7.</td>
                <td style="border: 1px solid black;">Ilmu Pengetahuan Sosial</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['ips']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">8.</td>
                <td style="border: 1px solid black;">Seni Budaya</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['senbud']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">9.</td>
                <td style="border: 1px solid black;">Pendidikan Jasmani Olahraga dan Kesehatan</td>
                <td style="border: 1px solid black;" align="center"><?= $kelulusan['penjeskes']; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid black;">10.</td>
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
          <p>Surat Keterangan Lulus ini berlaku sementara sampai dengan diterbitkannya
            Ijazah Tahun Pelajaran 2019/2020, untuk menjadikan maklum bagi yang berkepentingan.</p>
          <p></p>
        </div>
      </td>
    </tr>
    
    <table ></table>
  </table>
  <table width="800" height="0" border="0">
    <tr>
      <td width="487">
        <p>
        <div align="center">
      </td>
      <td width="359">
        <p>
          <font face="Times New Roman" size=4>Padang Batung, 4 Juni 2020<br />
            Kepala Sekolah,
        </p>
        <p><img src="../img/kosong.jpg" width="100" height="100" /><br />
          <u>
            <font face="Times New Roman" size=4>H. ADENAN, S.Pd
          </u><br />
          NIP.19630417 199203 1 007
        </p>
      </td>
    </tr>
  </table>
</body>

</html>