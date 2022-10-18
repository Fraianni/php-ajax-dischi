<?php
$dischi = [
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Pop",
        "year" => "1988"
    ]

];

if (isset($_GET['detail'])) {
    echo 'ciao';
    $detail = $_GET['detail'];
    $temp = [];
    foreach ($dischi as $disco) {
        if ($disco['genre'] == $detail) {
            $temp[] = $disco;
        }
    }
    $dischi = $temp;
}

header('Content-Type: application/json');

echo json_encode($dischi);
