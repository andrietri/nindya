<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Nama</th>
    <th>Jumlah</th>
    <th>Merk</th>
  </tr>
  <?php foreach($data as $data){ ?>
  <tr>
    <td><?php echo $data['nm_brg']; ?></td>
    <td><?php echo $data['jml']; ?></td>
    <td><?php echo $data['merk']; ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>