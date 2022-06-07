<!DOCTYPE html>
<html>
  <head>
    <title>Admin Section</title>
    <!--Framework CSS-->
    <link rel="stylesheet" href="framework/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <!--CSS custom-->
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <!--Framework Javascript-->
    <script src="framework/bootstrap-5.2.0-beta1-dist/js/bootstrap.js"></script>
  </head>

  <body>
    <!--Navbar-->
    <div class="container sticky-top">
      <nav class="row nav navbar-expand-lg">
        <div class="col text-center nav-side nav-item">
          <a class="nav-link" href="index.php" target="_self">03 Statistic Website</a>
        </div>
        <div class="col-6 nav-menu text-center" id="#navbar">
          <ul class="nav nav-fill nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#display">Tampilan Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#add">Tambah Data</a>
            </li>
          </ul>
        </div>
        <div class="col nav-side nav-item text-center">
          <a class="nav-link" href="index2.php" target="_self">Admin Section</a>
        </div>
      </nav>
    </div>
    <!--End of navbar-->

    <!--Banner-->
    <div class="container">
      <div class="container banner vh-100">
        <div class="row align-items-center text-center h-75">
          <div class="banner-text">
            <p class="display-1 fw-bold">Admin Page</p>
            <p class="display-6">If you're not admin, please go back</p>
          </div>
        </div>
      </div>
    </div>
    <!--End of banner-->

    <!--Content-->
    <div class="container">
      <div class="row article wrapper-sign">
        <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
              
          <!--Display-->
          <div class="container text-center content-head display-6" id="display">
            <p>Data Penduduk</p>
          </div>
          <div class="container">
            <table class="table table-striped">
              <th>ID Penduduk</th>
              <th>Nama Lengkap</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Pendidikan</th>
              <th>Status Kawin</th>

              <?php
                include 'data/connection.php';
                $penduduk = mysqli_query($conn,"SELECT * FROM data_penduduk");
                foreach ($penduduk as $value) {
                  echo "
                    <tr>
                      <td>".$value['ID_Penduduk']."</td>
                      <td>".$value['Nama_Lengkap']."</td>
                      <td>".$value['Tgl_Lahir']."</td>
                      <td>".$value['Jenis_Kelamin']."</td>
                      <td>".$value['Pendidikan']."</td>
                      <td>".$value['Status_Kawin']."</td>
                    </tr>
                  ";
                }
              ?>
            </table>
          </div>
          <!--End of display-->

          <!--Add-->
          <div class="container text-center content-head display-6" id="add">
            <p>Tambah Data Penduduk</p>
          </div>
          <div class="container form-content">
            <form action="data/data_processor.php" method="post">
              <!--Input_ID-Text_type-->
              <div class="input-group mb-3">
                <span class="input-group-text" id="id_penduduk">ID Penduduk</span>
                <input type="text" class="form-control" name="id_penduduk" placeholder="1xxxx" aria-label="id_penduduk" aria-describedby="id_penduduk">
              </div>
              <!--Input_nama-Text_type-->
              <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Lengkap</span>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" aria-label="nama" aria-describedby="nama">
              </div>
              <!--Input_tanggal-Text_type-->
              <div class="input-group mb-3">
                <span class="input-group-text" id="tgl_lahir">Tanggal Lahir</span>
                <input type="date" class="form-control" name="tgl_lahir" aria-label="tgl_lahir" aria-describedby="tgl_lahir">
              </div>
              <!--Input_gender-Select_type-->
              <div class="input-group mb-3">
                <label class="input-group-text" for="gender_option">Jenis Kelamin</label>
                <select class="form-select" id="gender_option" name="gender_option">
                  <option selected>Pilih</option>
                  <option value="laki-laki">laki-laki</option>
                  <option value="perempuan">perempuan</option>
                </select>
              </div>
              <!--Input_edu-Select_type-->
              <div class="input-group mb-3">
                <label class="input-group-text" for="edu_option">Pendidikan</label>
                <select class="form-select" id="edu_option" name="edu_option">
                  <option selected>Pilih</option>
                  <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                  <option value="SD/Sederajat">SD/Sederajat</option>
                  <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                  <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                  <option value="Diploma I/II">Diploma I/II</option>
                  <option value="Diploma III">Diploma III</option>
                  <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
              <!--Input_status-Select_type-->
              <div class="input-group mb-3">
                <label class="input-group-text" for="status_option">Status Perkawinan</label>
                <select class="form-select" id="status_option" name="status_option">
                  <option selected>Pilih</option>
                  <option value="Belum Kawin">Belum Kawin</option>
                  <option value="Kawin">Kawin</option>
                  <option value="Cerai Hidup">Cerai Hidup</option>
                  <option value="Cerai Mati">Cerai Mati</option>
                </select>
              </div>
              <!--Submit-Button_type-->
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-primary me-md-2" type="submit" value="Tambahkan Data"></input>
              </div>
            </form>
          </div>
          <!--End of add-->

        </div>    
      </div>
    </div>
    <!--End of content-->

    <!--Footer-->
    <footer class="container">
      <div class="row footer-content">
        <div class="col m-3 text-center" id="copyright">
          <p>&copy; 2022 Alya Zakhira Anjani</p>
        </div>
      </div>
    </footer>
    <!--End of footer-->
  </body>
</html>