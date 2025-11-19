<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128
];

// mencetak isi array asosiatif
echo "<h2>".htmlentities($artikel["judul"])."</h2>";
echo "<p>oleh: ".htmlentities($artikel["penulis"])."</p>";
echo "<p>View: ".htmlentities($artikel["view"])."</p>";