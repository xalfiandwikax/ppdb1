<!DOCTYPE html>
<html><head>
    <title></title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mycss.css'); ?>" rel="stylesheet">

    <style>

        .header-container {

           margin:0;
           padding: 0;
        }

        .header-img {

            width: 200px;
            margin: auto;
        }

        .surat{

            text-align: center;
            margin-top: -5px;
        }

        .garis{

            width: 100%;
            border: 1.5px solid #000000;
            margin-top: 2px;
            
        }


        table{

            width: 100%;
            border-collapse: collapse;
        }

        tr{

            vertical-align: top;
        }

        .tabel1{

            text-align: center;
            font-weight: bold;
            width: 5%;
        }
        .tabel2{

            padding: 10px;
            width: 100%;
        }

        .ttd{

            margin-left: 70%;
        }

     
         

    </style>
</head><body>
<section>
<div class="container">
        <h2 class="surat">Surat Pernyataan Siswa</h2>
        <div class="garis"></div>

        <div class="row">
            <div class="col-12">
            <p>Yang bertanda tangan di bawah ini, saya:</p>
            <br>
            <br>
            
            </div>
        </div>
        
        <table>
            <tr>
                <td>Nama</td>
                <td>: <?=$setdata['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: <?=$setdata['nik']; ?></td>
            </tr>
            <tr>
                <td>NO.KK</td>
                <td>: <?=$setdata['no_kk']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?=$setdata['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <?= date('d F Y',strtotime($setdata['ttl']));?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?=$setdata['alamat']; ?></td>
            </tr>
            <tr>
                <td>Kejar Paket</td>
                <td>: <?=$setdata['pendidikan']; ?></td>
            </tr>
        </table>

        
               <div> 
                 <p>Dengan ini menyatakan bahwa :</p>
               </div>
</div>   
         


<div class="container">
        
        
            <table>      
               
                <tr>
                  <td class ="tabel1">1.</td>
                    <td class="tabel2">Data yang saya lampirkan dalam rangka pendaftaran siswa baru Sekolah Paket PKBM LANGGENG IKHLLAS 
                        sesuai dengan kondisi yang sebenarnya dan dapat dijamin keasliannya.</td>
                        
                </tr>
                <tr>
                  <td class ="tabel1">2.</td>
                    <td class="tabel2">Sanggup untuk mengikuti Kegiatan Belajar Mengajar pada hari Jumat, Sabtu dan Minggu, bagi yang sedang bekerja di wajibkan Hari Minggu untuk mengikuti Kegiatan Belajar Mengajar.</td>
                        
                </tr>
                <tr>
                  <td class ="tabel1">3.</td>
                    <td class="tabel2">Sanggup menta'ati Peraturan hal-hal yang telah ditentukan oleh Sekolah.</td>
                        
                </tr>
                <tr>
                  <td class ="tabel1">4.</td>
                    <td class="tabel2">Menjaga nama baik Sekolah dan kepribadian seorang siswa baik di dalam maupun di luar Sekolah.</td>
                        
                </tr>
            </table>

            <div class="">

            <p>Demikian Surat Pernyataan ini kami buat dengan sadar tanpa adanya paksaan dari pihak manapun.</p>

            </div>
       
            <div class="ttd">

            <p>Depok, ..............................,20.....</p>
            <p>Yang membuat pernyataan</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>(..............................................)</p>
            </div>

            <div class="keterangan">
            
            <table>
               <tr>
                <td><p>Keterangan :</p></td>
               </tr> 
               <tr>
                <td> <sup>Cetak/Download Dokumen untuk menjadi bukti telah mendaftar online.</sup></td>
                </tr>
                <tr> 
                <td><sup>datang ke Sekolah PKBM Langgeng ikhlas untuk melakukan tes wawancara</sup></td>
                </tr>
                <tr> 
                <td><sup>bila ada pertanyaan selanjutnya Hub no : 08973964918/089622499337</sup></td>
                </tr>
            </table>
           
            </div>
               
            
        

</div>
</section>        

        



    
</body></html>