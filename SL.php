<!DOCTYPE html>
<html>

<head>
    <title>Metode Straight Line</title>
</head>

<body>
    <?php
    $perolehan = null;
    $residu = null;
    $umur = null;
    if (isset($_GET['perolehan'])) {
        $perolehan = $_GET['perolehan'];
        $residu = $_GET['residu'];
        $umur = $_GET['umur'];
        $hasil = 0;
        $hasil = ($perolehan - $residu) / $umur;
    }
    ?>
    <form class="topBefore" action="SL.php" method="get">
        <h2><b>
                <center> Nilai Depresiasi</center>
            </b></h2>
        <h2><b>
                <center> Metode Straight Line </center>
            </b></h2>
        <table align="center" border="0">
            <tr>
                <td>Harga Perolehan</td>
                <td>:</td>
                <td><input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required></td>
            </tr>
            <tr>
                <td>Nilai Residu</td>
                <td>:</td>
                <td><input type="text" name="residu" value="<?php echo $residu; ?>" required></td>
            </tr>
            <tr>
                <td>Umur Ekonomis (Tahun)</td>
                <td>:</td>
                <td><input type="text" name="umur" value="<?php echo $umur; ?>" required></td>
            </tr>
            <tr>
                <td><button type="submit">Hitung</button> <button type="button" onclick="location.href='index.php'">Back</button></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    if (isset($_GET['perolehan'])) {
        $hasil = "Hasil depresiasi pertahunnya selama " . $umur . " tahun menggunakan metode Straight Line adalah " . number_format($hasil, 0, ',', '.');
        echo "<h1>$hasil</h1>";
    }
    ?>

</body>

</html>