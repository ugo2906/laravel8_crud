<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>TESTAPP LARAVEL</title>
  </head>
  <body>
    <h2 class="text-center mt-4 mb-4">DATA PEGAWAI</h2>

    <div class="container">
      
      <div class="container row g-2 align-items-right">

        <div class="col-auto">
          <a href="/tambahpegawai" class="btn btn-success">Tambah Data</a>
        </div>
        
        <div class="col-auto">
          <a href="/exportpdf" class="btn btn-info">Cetak PDF</a>
        </div>
      
        <div class="col-auto">
          <div class="col-auto">
            <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Impor Data
             </button>
         </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Excel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
          <form action="/importexcel" method="POST" enctype="multipart/form-data">
            @csrf 
          <div class="modal-body">
            <div class="form-group">
              <input type="file" name="file" required>
            </div>            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
          </form>
  </div>
</div>

        <div class="row g-1 align-items-center col-auto">

          <form action="/pegawai" method="GET">
          <input type="search" id="cari" name="search" class="form-control " aria-describedby="passwordHelpBlock" placeholder="Cari ...">
        </form>
        </div>
      </div>

      <div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <hr>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No. Handphone</th>
              <th scope="col">Foto</th>
              <th scope="col">Dibuat</th>
              <th scope="col">Diupdate</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
             $no = 1;
            @endphp
            @foreach($data as $index => $row)
            <tr>
              <th scope="row">{{ $index + $data->firstItem() }}</th>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->jeniskelamin }}</td>
              <td>0{{ $row->notelpon }}</td>
              <td>
                <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 50px;">
              </td>
              <td>{{ $row->created_at->format('d, M Y H:i') }}</td>
              <td>{{ $row->updated_at->diffforhumans() }}</td>
              <td>
                <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                 <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" >Delete</a>
              </td>
            </tr>
            @endforeach
            </tr>
          </tbody>

        </table>
      </div>
        
        {{ $data->links() }}
      </div>
      
  
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->

  </body>
  <script>
    $('.delete').click(function(){
      var pegawaiid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
      swal({
              title: "Menghapus Data Selamanya?",
              text: "Kamu yakin menghapus Data dengan Nama "+nama+" ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = "/delete/"+pegawaiid+""
                swal("Data telah Dihapus", {
                  icon: "success",
                });
              } else {
                swal("Data batal Dihapus!");
              }
            });
    });
  </script>

  <script>
      @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
      @endif
  </script>
</html>