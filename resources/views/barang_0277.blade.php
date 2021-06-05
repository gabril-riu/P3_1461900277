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
    
  </tr>
  @foreach ($pelanggans as $pelanggan)
  @foreach ( as )
      
  @endforeach
      <tr>
          <td>{{$pelanggan->id}}</td>
          <td>{{$pelanggan->nama}}</td>
          <td>{{$pelanggan->alamat}}</td>
      </tr>
  @endforeach
</table>

</body>
</html>
