<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Mobil BMW</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Simulasi Aksi Mobil BMW</h1>

        <?php
        class mobilLengkap
        {
            public $merk;

            public function __construct($merk)
            {
                $this->merk = $merk;
            }

            public function hidupkanMobil()
            {
                echo $this->merk . ": Mobil dihidupkan.<br>";
            }

            public function matikanMobil()
            {
                echo $this->merk . ": Mobil dimatikan.<br>";
            }

            public function ubahGigi($gigi)
            {
                echo $this->merk . ": Mengubah gigi ke " . $gigi . ".<br>";
            }

            public function nontonTV()
            {
                echo $this->merk . ": TV dihidupkan.<br>";
                echo $this->merk . ": TV Mencari Chanel.<br>";
                echo $this->merk . ": TV Menampilkan gambar.<br>";
            }
        }

        class MobilBMW extends mobilLengkap
        {

            public function __construct()
            {
                parent::__construct("BMW");
            }

            public function nontonTV()
            {
                parent::nontonTV();
                echo $this->merk . ": TV menampilkan kualitas gambar HD.<br>";
            }
        }

        class MobilBMWberaksi
        {
            private $mobil;

            public function __construct()
            {
                $this->mobil = new MobilBMW();
            }

            public function nontonTV()
            {
                $this->mobil->nontonTV();
            }

            public function hidupkanMobil()
            {
                $this->mobil->hidupkanMobil();
            }

            public function matikanMobil()
            {
                $this->mobil->matikanMobil();
            }

            public function ubahGigi($gigi)
            {
                $this->mobil->ubahGigi($gigi);
            }
        }

        $aksiMobil = new MobilBMWberaksi();

        $aksiMobil->hidupkanMobil();
        $aksiMobil->ubahGigi(2);
        $aksiMobil->nontonTV();
        $aksiMobil->matikanMobil();
        ?>
    </div>
</body>

</html>