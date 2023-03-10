<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  <title>Minat dan Bakat</title>
  <link rel="stylesheet" href="assets/css/reset.css" />
  <link rel="stylesheet" href="assets/css/colors.css" />
  <link rel="stylesheet" href="assets/css/card.css" />
  <link rel="stylesheet" href="assets/css/utils.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="vendor/loader.css" />
</head>

<body>
  <div id="particles-js" class="bg"></div>

  <main>
    <form id="form" action="https://docs.google.com/forms/d/e/1FAIpQLSdCIGg8ivWHMF1iGEfFLm93f9kdDab74ABqDJawNQljkBUJ9g/formResponse" id="form" class="d-flex gap-1 flex-wrap justify-content-center">
      <!-- Data Diri -->
      <input type="hidden" name="entry.794704773" id="nama" />
      <input type="hidden" name="entry.1541333536" id="nim" />
      <input type="hidden" name="entry.1077676743" id="prodi" />
      <input type="hidden" name="entry.482518216" id="semester" />
      <input type="hidden" name="entry.1699025632" id="pengalaman_organisasi" />

      <!-- Prestasi -->
      <input type="hidden" name="entry.641476423" id="prestasi_akademik" />
      <input type="hidden" name="entry.1224466415" id="uraian_prestasi_akademik" />
      <input type="hidden" name="entry.1033499497" id="prestasi_nonakademik" />
      <input type="hidden" name="entry.1391655594" id="uraian_prestasi_nonakademik" />
      <?php session_start() ?>
      <input type="hidden" name="entry.995987695" id="sertifikat" value="<?= implode(", ", $_SESSION['filenames']) ?>" />

      <section class="card">
        <div class="card-header">
          <h1>Minat</h1>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="">Bidang Akademik</label>
            <div class="checkboxes" id="checkSatu">
              <div class="form-check">
                <input type="checkbox" name="entry.1631384840" value="Karya Tulis Ilmiah" id="minat_kti" />
                <label for="minat_kti">Karya Tulis Ilmiah</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1631384840" value="Debat Ilmiah" id="minat_debat" />
                <label for="minat_debat">Debat Ilmiah</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1631384840" value="Orasi Bahasa Asing" id="minat_orasi" />
                <label for="minat_orasi">Orasi Bahasa Asing</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1631384840" value="Penelitian" id="minat_penelitian" />
                <label for="minat_penelitian">Penelitian</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1631384840" value="Pengabdian Kepada Masyarakat" id="minat_pengabdian" />
                <label for="minat_pengabdian">
                  Pengabdian Kepada Masyarakat
                </label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1631384840" value="Lainnya" id="minat_akademik_lainnya" />
                <label for="minat_akademik_lainnya">Lainnya</label>
              </div>
            </div>
            <div id="message" style="color: rgb(96, 3, 3)">
              Silakan pilih setidaknya satu checkbox Pada Minat Bidang
              Akademik
            </div>
          </div>

          <div class="form-group">
            <label for="uraian_akademik">Uraian</label>
            <p class="description">
              Beri uraian pada peminatan yang Anda pilih, misalnya "Orasi
              Bahasa Inggris" atau "Penelitian Terapan"
            </p>
            <textarea name="entry.358306769" id="uraian_akademik" cols="30" rows="5" placeholder="Uraian minat" required></textarea>
          </div>

          <div class="form-group">
            <label for="">Bidang Non Akademik</label>
            <div class="checkboxes" id="checkDua">
              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Olahraga" id="minat_olahraga" />
                <label for="minat_olahraga">Olahraga</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Kesenian" id="minat_kesenian" />
                <label for="minat_kesenian">Kesenian</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Jurnalistik" id="minat_jurnalistik" />
                <label for="minat_jurnalistik">Jurnalistik</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Keagamaan" id="minat_keagamaan" />
                <label for="minat_keagamaan">Keagamaan</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Kewirausahaan" id="minat_kewirausahaan" />
                <label for="minat_kewirausahaan">Kewirausahaan</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Keorganisasian" id="minat_keorganisasian" />
                <label for="minat_keorganisasian">Keorganisasian</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.513091603" value="Lainnya" id="minat_nonakademik_lainnya" />
                <label for="minat_nonakademik_lainnya">Lainnya</label>
              </div>
            </div>
            <div id="messageDua" style="color: rgb(96, 3, 3)">
              Silakan pilih setidaknya satu checkbox Pada Minat Bidang Non
              Akademik
            </div>
          </div>

          <div class="form-group">
            <label for="uraian-nonAkademik">Uraian</label>
            <p class="description">
              Beri uraian pada peminatan yang Anda pilih, misalnya "Orasi
              Bahasa Inggris" atau "Penelitian Terapan"
            </p>
            <textarea id="uraian-nonAkademik" name="entry.265211466" cols="30" rows="5" placeholder="Uraian minat" required></textarea>
          </div>
        </div>
      </section>

      <section class="card">
        <div class="card-header">
          <h1>Bakat</h1>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="">Bidang Akademik</label>
            <div class="checkboxes" id="checkTiga">
              <div class="form-check">
                <input type="checkbox" name="entry.1219538418" value="Karya Tulis Ilmiah" id="bakat_kti" />
                <label for="bakat_kti">Karya Tulis Ilmiah</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1219538418" value="Debat Ilmiah" id="bakat_debat" />
                <label for="bakat_debat">Debat Ilmiah</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1219538418" value="Orasi Bahasa Asing" id="bakat_orasi" />
                <label for="bakat_orasi">Orasi Bahasa Asing</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1219538418" value="Penelitian" id="bakat_penelitian" />
                <label for="bakat_penelitian">Penelitian</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1219538418" value="Pengabdian Kepada Masyarakat" id="bakat_pengabdian" />
                <label for="bakat_pengabdian">
                  Pengabdian Kepada Masyarakat
                </label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.1219538418" value="Lainnya" id="bakat_akademik_lainnya" />
                <label for="bakat_akademik_lainnya">Lainnya</label>
              </div>
            </div>
            <div id="messageTiga" style="color: rgb(96, 3, 3)">
              Silakan pilih setidaknya satu checkbox Pada Bakat Bidang
              Akademik
            </div>
          </div>

          <div class="form-group">
            <label for="uraian-akademik">Uraian</label>
            <p class="description">
              Beri uraian pada bakat yang Anda pilih, misalnya "Orasi Bahasa
              Inggris" atau "Penelitian Terapan"
            </p>
            <textarea id="uraian-akademik" name="entry.548246493" cols="30" rows="5" placeholder="Uraian bakat" required></textarea>
          </div>

          <div class="form-group">
            <label for="">Bidang Non Akademik</label>
            <div class="checkboxes" id="checkEmpat">
              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Olahraga" id="bakat_olahraga" />
                <label for="bakat_olahraga">Olahraga</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Kesenian" id="bakat_kesenian" />
                <label for="bakat_kesenian">Kesenian</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Jurnalistik" id="bakat_jurnalistik" />
                <label for="bakat_jurnalistik">Jurnalistik</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Keagamaan" id="bakat_keagamaan" />
                <label for="bakat_keagamaan">Keagamaan</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Kewirausahaan" id="bakat_kewirausahaan" />
                <label for="bakat_kewirausahaan">Kewirausahaan</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Keorganisasian" id="bakat_keorganisasian" />
                <label for="bakat_keorganisasian">Keorganisasian</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="entry.407005584" value="Lainnya" id="bakat_nonakademik_lainnya" />
                <label for="bakat_nonakademik_lainnya">Lainnya</label>
              </div>
            </div>
            <div id="messageEmpat" style="color: rgb(96, 3, 3)">
              Silakan pilih setidaknya satu checkbox Pada Bakat Bidang Non
              Akademik
            </div>
          </div>

          <div class="form-group">
            <label for="uraian-nonAkademik">Uraian</label>
            <p class="description">
              Beri uraian pada bakat yang Anda pilih, misalnya "Orasi Bahasa
              Inggris" atau "Penelitian Terapan"
            </p>
            <textarea id="uraian-nonAkademik" name="entry.1672378515" cols="30" rows="5" placeholder="Uraian bakat" required></textarea>
          </div>
          <div class="form-group"></div>
          <div class="form-group d-flex gap-1">
            <button type="submit" id="submit-btn" disabled>Kirim</button>
            <button id="loader-btn" class="d-flex justify-content-center align-items center d-none" disabled>
              <div class="loader"></div>
            </button>
          </div>
        </div>
      </section>
    </form>
  </main>

  <script src="vendor/particle-js/particles.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="vendor/storage.js"></script>
  <script src="assets/js/minatbakat.js"></script>
</body>

</html>