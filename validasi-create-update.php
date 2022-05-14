<?php

function validasi(array $listInput)
{
    # variabel berisi inputan baik dari metode POST mau pun GET
    $request = $_REQUEST;

    # perulangan untuk array terluar (berisi nama input)
    foreach ($listInput as $input => $listPeraturan) {
        echo "Periksa input <strong>{$input}</strong><br>";

        # perulangan untuk sub array (berisi nama peraturan)
        foreach ($listPeraturan as $peraturan) {
            echo "-> Peraturan <strong>{$peraturan}</strong>";

            # pemeriksaan tiap peraturan akan kita lakukan di sini

            echo "<br>";
        }

        echo "<br>";
    }
}