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
    <th>Jenis Kelamin</th>
    <th>Telp</th>
  </tr>
  @foreach ($barangs as $brg)
  <tr>
      <td>{{$barangs->id}}</td>
      <td>{{$brg->nama}}</td>
      <td>{{$brg->harga}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
