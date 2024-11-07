<?php
class Discount
{
    private $hargaAwal;
    private $diskon;

    public function __construct($hargaAwal, $diskon)
    {
        $this->hargaAwal = $hargaAwal;
        $this->diskon = $diskon;
    }

    public function hitungTotalBersih()
    {
        return $this->hargaAwal * (1 - ($this->diskon / 100));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
    <style>
        input[type="number"]::-webkit-inner-spin-button {
            display: none;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <p>Harga awal</p>
        <span>Rp</span><input type="number" name="hargaAwal" placeholder="Masukkan harga awal">
        <p>Diskon</p>
        <input type="number" name="diskon" placeholder="Masukkan diskon"><span>%</span>
        <br>
        <br>
        <button type="submit" name="submit" value="Submit">Submit</button>
    </form>
    <br>
    <span>Total harga bersih:
        <?php
        if (isset($_POST['submit'])) {
            $diskon = new Discount($_POST['hargaAwal'], $_POST['diskon']);
            echo "Rp" . $diskon->hitungTotalBersih();
        }
        ?>
    </span>
</body>

</html>