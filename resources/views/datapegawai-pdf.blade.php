<!DOCTYPE html>
<html>
<head>
<style>
#datapegawai {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#datapegawai td, #datapegawai th {
  border: 1px solid #ddd;
  padding: 8px;
}

#datapegawai tr:nth-child(even){background-color: #f2f2f2;}

#datapegawai tr:hover {background-color: #ddd;}

#datapegawai th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0473aa;
  color: white;
}
</style>
</head>


<h1><center>Data Pegawai</center></h1>


    <table id="datapegawai">
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>No.Handphone</th>
          <th>Tanggal Dibuat</th>
        </tr>
        @php
          $no=1;
        @endphp
      
        @foreach($data as $row)
        <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $row->nama }}</td>
                    <td>{{ $row->jeniskelamin }}</td>
                    <td>0{{ $row->notelpon }}</td>
                  
                    <td>{{ $row->created_at->format('d, M Y H:i') }}</td>
        </tr>
        @endforeach
        
      </table>


</body>
</html>


