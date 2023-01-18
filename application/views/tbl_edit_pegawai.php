<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Jabatan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link " href="<?= base_url('Admin') ?>">Dashboard </a>
        <a class="nav-link active" href="<?= base_url('Admin/pegawai') ?>">Pegawai <span class="sr-only">(current)</span></a>
        <a class="nav-link " href="<?= base_url('Admin/jabatan') ?>">Jabatan </a>
        <a class="nav-link" href="<?= base_url('Admin/laporan_absensi') ?>">Laporan absensi</a>
        </div>
    </div>
    </nav>


    <div class="container-fluid mt-5">
        <h2>Edit Tabel Pegawai</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                <form action=" " method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik">Nomor Induk Kepegawaian</label>
                        <input type="number" class="form-control" name="nik" id="nik" placeholder="NIK" value="<?= $pegawai['nik']; ?>" required>
                        <?= form_error('nik', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="Nama" placeholder="Nama Lengkap" value="<?= $pegawai['nama_pegawai']; ?>" required>
                        <?= form_error('namajabatan', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenisk">Jenis kelamin</label>
                        <select name="jenisk" id="jenisk" class="form-control" value="<?= $pegawai['jenis_kelamin']; ?>" required>
                            <option value="">--pilih jenis kelamin--</option>
                            <option value="Laki-laki">Laki - Laki</option>
                            <option value="Perempuan"> Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">--pilih jabatan--</option>
                            <?php foreach ($jabatan as $m) : ?>
                                <?php if ($m['id_jabatan'] == $pegawai['id_jabatan']) : ?>
                                    <option value="<?= $m['id_jabatan']; ?>" selected><?= $m['nama_jabatan']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $m['id_jabatan']; ?>"><?= $m['nama_jabatan']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telepon">No telepon</label>
                        <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Nomor telepon" value="<?= $pegawai['no_telepon']; ?>" required>
                        <?= form_error('telepon', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $pegawai['alamat']; ?>" required>
                        <?= form_error('telepon', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('Admin/pegawai'); ?>" class="btn btn-dark">Back</a>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>