<?php

$nilai = 105;

if ($nilai > 100 || $nilai < 0) {
    echo "Error: Nilai tidak boleh lebih dari 100 dan tidak boleh kurang dari 0!";
} elseif ($nilai >= 65) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}

?>