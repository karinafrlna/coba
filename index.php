<!DOCTYPE html>
<html>
<head>
    <title> Tampil Data </title>
</head>
<body>
<h2 align="center">DATA KARIN</h2>
<table border="3" align="center" width="100%">
    <tr bgcolor="pink">
        <th>nama</th>
        <th>prodi</th>
        <th>hobi</th>
    </tr>
    <tr>
        <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "Select * From datta");
            while ($data = mysqli_fetch_array($query)) {
        ?>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['hobi']; } ?></td>
    </tr>

</table>
</body>
</html>