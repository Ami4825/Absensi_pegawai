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
        <a class="nav-link " href="<?= base_url('Admin/pegawai') ?>">Pegawai </a>
        <a class="nav-link active" href="<?= base_url('Admin/jabatan') ?>">Jabatan <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?= base_url('Admin/laporan_absensi') ?>">Laporan absensi</a>
        </div>
    </div>
    </nav>


    <div class="container-fluid mt-5">
        <h2>Tabel Jabatan</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">Tambah data</button>
        <div class="mt-2"><?= $this->session->flashdata('message'); ?></div>
    <table id="example" class="table table-striped table-bordered mt-4" style="width:100%" >
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama jabatan</th>
            <th scope="col">jam kerja</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
            <?php foreach ($jabatan as $k) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $k['nama_jabatan']; ?></td>
                    <td><?= $k['jam_kerja']; ?> Jam</td>

                    <td>
                        <a href="<?= base_url(); ?>Admin/edit_jabatan/<?= $k['id_jabatan']; ?>" class="badge badge-warning">edit</a>
                        <a href="<?= base_url(); ?>Admin/hapus_data_jabatan/<?= $k['id_jabatan']; ?>" class="badge badge-danger alert_notif">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>




        <!-- modal -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  action="<?= base_url("Admin/jabatan") ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namajabatan">Nama Jabatan</label>
                        <input type="text" name="namajabatan" class="form-control" id="namajabatan" aria-describedby="emailHelp" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">Masukan Nomor Induk Karyawan.</small> -->
                        <?= form_error('namajabatan', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jamkerja">Jam kerja</label>
                        <input type="number" name="jamkerja" class="form-control" id="jamkerja" aria-describedby="emailHelp" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">Masukan Nomor Induk Karyawan.</small> -->
                        <?= form_error('jamkerja', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

            </div>
        </div>
    </div>



    <!-- akhir modal -->


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