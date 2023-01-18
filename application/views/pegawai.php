<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- mycss -->
    <style>
        .absen-form{
            padding: 15px;
            width: 600px;
            height: 150px;
            background-color: wheat;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .button-absen {
            position: absolute;
            top: 50%;
            left: 25%;
        }
    </style>
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
        <a class="nav-link active" href="#">Absensi <span class="sr-only">(current)</span></a>
        <a class="nav-link"> </a>
        </div>
    </div>
    </nav>

    <div class="container-fluid mt-5">
        <?= $this->session->flashdata('message'); ?>
        <div class="absen-form">
            <h1 style="font-size: 35px; text-align:center;">Silahkan klik tombol untuk absensi</h1>
            <div class="button-absen">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#absenmasuk">Absen Masuk</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#absenkeluar">Absen keluar</button>
            </div>
        </div>
    </div>


    <!-- modal -->
    <div class="modal fade" id="absenmasuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Absen Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("pegawai/absen_masuk") ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" class="form-control" id="nik" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Masukan Nomor Induk Karyawan.</small>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="absenkeluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Absen keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("Pegawai/absen_keluar") ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" class="form-control" id="nik" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Masukan Nomor Induk Karyawan.</small>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <!-- akhir modal -->
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>