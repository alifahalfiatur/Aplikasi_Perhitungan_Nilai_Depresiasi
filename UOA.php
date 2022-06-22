<!DOCTYPE html>
<html>

<head>
    <title>Metode Unit of Activity</title>
</head>

<body>
    <?php
    $perolehan = null;
    $residu = null;
    $pemakaian = null;
    $kapasitas_max = null;
    if (isset($_GET['perolehan'])) {
        $perolehan = $_GET['perolehan'];
        $residu = $_GET['residu'];
        $pemakaian = $_GET['pemakaian'];
        $kapasitas_max = $_GET['kapasitas_max'];
        $hasil = 0;
        $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
    }

    ?>
    <form class="topBefore" action="UOA.php" method="get">
        <h2><b>
                <center> Nilai Depresiasi</center>
            </b></h2>
        <h2><b>
                <center> Metode Unit of Activity </center>
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
                <td>Pemakaian</td>
                <td>:</td>
                <td> <input type="text" name="pemakaian" value="<?php echo $pemakaian; ?>" required></td>
            </tr>
            <tr>
                <td>Kapasitas Maksimal</td>
                <td>:</td>
                <td><input type="text" name="kapasitas_max" value="<?php echo $kapasitas_max; ?>" required></td>
            </tr>
            <tr>
                <td><button type="submit">Hitung</button> <button type="button" onclick="location.href='index.php'">Back</button></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    if (isset($_GET['perolehan'])) {
        $hasil = "Hasil depresiasi dengan metode Unit of Activity adalah " . number_format($hasil, 0, ',', '.');
        echo "<h1>$hasil</h1>";
    }
    ?>

</body>

</html>