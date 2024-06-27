<?php
    $nama = "Saya";
    echo "Namanya adalah ";
    echo $nama;
    echo "\n Variabel apakah ada ?";
    echo isset($nama);
    // akan menghasilkan error karena variabel dihapus/tidak lagi didefinisikan
    unset($nama);
    echo "\n Namanya adalah ";
    echo $nama;
    echo "\n Variabel apakah ada? ";
    echo var_dump(isset($nama));