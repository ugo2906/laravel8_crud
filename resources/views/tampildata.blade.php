<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TESTAPP LARAVEL</title>
  </head>
  <body>
    <h2 class="text-center mt-4 mb-4">EDIT DATA PEGAWAI</h2>

    <div class="container">
      <div class="row justify-content-center">
            <div class="col-6">
              <div class="card">
              <div class="card-body">
              <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-0">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $data->nama }}">
              </div>
                <label for="exampleInputEmail1" class="form-label mt-3">Jenis Kelamin</label>
                <select class="form-select" name="jeniskelamin" aria-label="Jenis Kelamin">
                  <option selected>{{ $data->jeniskelamin }}</option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                </select>
          
                <label for="exampleInputEmail1" class="form-label mt-3">Nomor Handphone</label>
                <input type="number" name="notelpon" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $data->notelpon }}">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Unggah Foto</label>
                  <input type="file" name="foto" class="form-control">



                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
  </body>
</html>