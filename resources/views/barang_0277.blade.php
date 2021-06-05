<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
</style>
</head>
<body>

<h2>Styling Tables</h2>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Nama</th> 
    <th>Alamat</th>
    <th>Nama Barang</th> 
    <th>Harga</th>
    
  </tr>
  @foreach ($pelanggans as $pelanggan)
  
      <tr>
          <td>{{$pelanggan->idPelanggan}}</td>
          <td>{{$pelanggan->namaPelanggan}}</td>
          <td>{{$pelanggan->almPelanggan}}</td>
          <td>{{$pelanggan->namaBarang}}</td>
          <td>{{$pelanggan->hrgBrg}}</td>
      </tr>
  @endforeach
</table>

</body>
</html>
