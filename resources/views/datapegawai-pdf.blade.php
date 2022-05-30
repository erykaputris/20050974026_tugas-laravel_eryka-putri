<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #F0F8FF;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #F0F8FF;}

#customers tr:hover {background-color: #F0F8FF;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #F0F8FF;
  color: white;
}
</style>
</head>
<body>
<h1> Data Mahasiswa</h1>
<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>No telpon</th>
  </tr>
  @php
      $no=1;
  @endphp
  @foreach ($data as $row)
    <tr>
    <td>{{ $no++}}</td>
    <td>{{ $row->nama }}</td>
    <td>{{ $row->jeniskelamin }}</td>
    <td>0{{ $row->notelpon }}</td>
  </tr>  
  @endforeach
  
  
</table>

</body>
</html>
