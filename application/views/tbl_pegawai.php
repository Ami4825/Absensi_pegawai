<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    <title>Pegawai</title>
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
        <a class="nav-link" href="<?= base_url('Admin/jabatan') ?>">Jabatan</a>
        <a class="nav-link" href="<?= base_url('Admin/laporan_absensi') ?>">Laporan absensi</a>
        </div>
    </div>
    </nav>


    <div class="container-fluid mt-5">
        <h2>Tabel Pegawai</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">Tambah data</button>
        <div class="mt-2"><?= $this->session->flashdata('message'); ?></div>
    <table id="example" class="table table-striped table-bordered mt-4" style="width:100%" >
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jabatan</th>
            <th scope="col">no_telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
              <?php foreach ($pegawai as $p) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $p['nik']; ?></td>
                    <td><?= $p['nama_pegawai']; ?></td>
                    <td><?= $p['jenis_kelamin']; ?></td>
                    <td><?= $p['nama_jabatan']; ?></td>
                    <td><?= $p['no_telepon']; ?></td>
                    <td><?= $p['alamat']; ?></td>

                    <td>
                        <a href="<?= base_url(); ?>Admin/edit_pegawai/<?= $p['nik']; ?>" class="badge badge-warning">edit</a>
                        <a href="<?= base_url(); ?>Admin/hapus_data_pegawai/<?= $p['nik']; ?>" class="badge badge-danger alert_notif">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>




    <!-- modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="submenu_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submenu_modal">Add Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("Admin/pegawai") ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik">Nomor Induk Kepegawaian</label>
                        <input type="number" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                        <?= form_error('nik', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="Nama" placeholder="Nama Lengkap" required>
                        <?= form_error('namajabatan', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenisk">Jenis kelamin</label>
                        <select name="jenisk" id="jenisk" class="form-control" required>
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
                                <option value="<?= $m['id_jabatan']; ?>"><?= $m['nama_jabatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telepon">No telepon</label>
                        <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Nomor telepon" required>
                        <?= form_error('telepon', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                        <?= form_error('telepon', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    
    
    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
    <!-- <?php if(@$_SESSION['sukses']){ ?>
        <script>
            Swal.fire({            
                icon: 'success',                   
                title: 'Sukses',    
                text: 'data berhasil dihapus',                        
                timer: 3000,                                
                showConfirmButton: false
            })
        </script> -->
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <!-- <?php unset($_SESSION['sukses']); } ?> -->


    <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
        $('.alert_notif').on('click',function(){
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin hapus data?",            
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            
            }).then(result => {
                //jika klik ya maka arahkan ke proses.php
                if(result.isConfirmed){
                    window.location.href = getLink
                }
            })
            return false;
        });
    </script>
  </body>
</html>