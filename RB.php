<!DOCTYPE html>
<html>

<head>
    <title>Metode Reducing Balance</title>
</head>

<body>
    <?php
    $perolehan = null;
    $residu = null;
    $umur = null;
    ?>
    <form class="topBefore" action="RB.php" method="get">
        <h2><b>
                <center> Nilai Depresiasi</center>
            </b></h2>
        <h2><b>
                <center> Metode Reducing Balance </center>
            </b></h2>
        <table align="center" border="0">
            <tr>
                <td>Harga Perolehan</td>
                <td>:</td>
                <td> <input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required></td>
            </tr>
            <tr>
                <td>Umur Ekonomis (Tahun)</td>
                <td>:</td>
                <td> <input type="text" name="umur" value="<?php echo $umur; ?>" required></td>
            </tr>
            <tr>
                <td><button type="submit">Hitung</button> <button type="button" onclick="location.href='index.php'">Back</button></td>
            </tr>
        </table>
    </form>
    <br>

    <?php
    if (isset($_GET['perolehan'])) {
        $perolehan = $_GET['perolehan'];
        $umur = $_GET['umur'];
        $hasil = ($perolehan / $umur) * 2;
        $hasila = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun ke- adalah " . number_format($hasil, 0, ',', '.');
        echo "<h1>$hasila</h1>";
        for ($i = 2; $i <= $umur; $i++) {
            $hasill = (($perolehan - $hasil) / $umur) * 2;
            $hasilla = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun ke- " . $i . " adalah " . number_format($hasill, 0, ',', '.');
            echo "<h1>$hasilla</h1>";
            $perolehan = $perolehan - $hasill;
            $hasill = ($perolehan / $umur) * 2;
        }
    }
    ?>

</body>

</html>