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

          <font face="Times New Roman" size=4>
            <div>
              <p><b><u>SURAT KETERANGAN KELULUSAN</u></b>
                <br><strong>TAHUN PELAJARAN <?= $pengaturan['thn_pembelajaran']; ?></strong>
                <br>Nomor : <?= $kelulusan['nomor_surat']; ?>
              </p>
            </div>
          </font>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="">
        <div align="justify">

          <font face="Times New Roman" size=4>
            <p>Yang bertanda tangan di bawah ini, Kepala Sekolah <?= $pengaturan['nama_sekolah']; ?> menerangkan bahwa :</p>
          </font>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="4" align="center">
        <div align="center">
          <table width="576" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>
                <font face="Times New Roman" size=4>
                  <b>Nama</b>
                </font>
              </td>
              <td>
                <font face="Times New Roman" size=4>
                  <b> : <?= ucwords(strtolower($kelulusan['nama'])); ?> </b>
                </font>
              </td>
            </tr>

            <tr>
              <td>
                <font face="Times New Roman" size=4>
                  <b>NIS / NISN</b>
                </font>
              </td>
              <td>
                <font face="Times New Roman" size=4>
                  <b> : <?= $kelulusan['nis'] . ' / ' . $kelulusan['nisn']; ?></b>
                </font>
              </td>
            </tr>

            <tr>
              <td>
                <font face="Times New Roman" size=4>
                  <b>Tempat, Tanggal Lahir</b>
                </font>
              </td>
              <td>
                <font face="Times New Roman" size=4>
                  <b> : <?= $kelulusan['tempat_lahir'] . ', ' . date('d F Y', strtotime($kelulusan['tgl_lahir'])); ?> </b>
                </font>
              </td>
            </tr>

            <tr>
              <td>
                <font face="Times New Roman" size=4>
                  <b>Nama Orang Tua / Wali</b>
                </font>
              </td>
              <td>
                <font face="Times New Roman" size=4>
                  <b> : <?= $kelulusan['nama_orangtua']; ?></b>
                </font>
              </td>
            </tr>

            <tr>
              <td>
                <font face="Times New Roman" size=4>
                  <b>Asal Sekolah</b>
                </font>
              </td>
              <td>
                <font face="Times New Roman" size=4>
                  <b> : <?= $kelulusan['asal_sekolah']; ?></b>
                </font>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="">
        <div align="justify">
          <br>
          <font face="Times New Roman" size=4>
            <p>Berdasarkan Hasil Rapat Dewan Guru tentang Penentuan Kelulusan dan mengacu kepada Permendikbud Nomor 43 Tahun 2019 tentang Penyelenggara Ujian yang Diselenggarakan Satuan Pendidikan dan Ujian Nasional, serta Surat Edaran Mendikbud Nomor 4 Tahun 2020 tentang Pelaksanaan Kebijakan Pendidikan dalam Masa Darurat Peyebaran Corona Virus Disease (COVID-19), dengan ini siswa yang bersangkutan dinyatakan :</p>
            <h2 style="text-align: center; text-transform: uppercase;"><?= $kelulusan['keterangan_lulus']; ?></h2>
          </font>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="4">
        <div align="justify">
          <font face="Times New Roman" size=4>
            <p>Dari <?= $pengaturan['nama_sekolah']; ?> , dengan rata-rata Ujian Sekolah = <strong><?= $kelulusan['rata_rata']; ?></strong>
            </p>
            <p>Surat Keterangan Lulus ini berlaku sementara sampai dengan diterbitkannya
              Ijazah Tahun Pelajaran <?= $pengaturan['thn_pembelajaran']; ?></p>
          </font>
        </div>
      </td>
    </tr>
  </table>

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