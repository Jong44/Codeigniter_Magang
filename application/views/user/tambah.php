<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">
                <form action="<?= base_url() ?>welcome/simpanData" method="post">
                    <div class="form-group">
                        <label >NIS</label>
                        <input type="text" name="nis" class="form-control"  placeholder="Enter NIS">
                    </div>
                    <div class="form-group">
                        <label >NAMA</label>
                        <input type="text" name="nama" class="form-control"  placeholder="Enter NAMA">
                    </div>
                    <div class="form-group">
                        <label >Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Enter EMAIL">
                    </div>
                    <div class="form-group">
                        <label >No Telepon</label>
                        <input type="text" name="no_telp" class="form-control" id="exampleInputPassword" placeholder="Enter No Telepon">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control"  placeholder="Enter Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label >Agama</label>
                        <input type="text" name="agama" class="form-control" id="exampleInputPassword" placeholder="Enter Agama">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>