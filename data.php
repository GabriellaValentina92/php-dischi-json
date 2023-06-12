<?php
// $arrMusic = [
//     [
//         'album_cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2c/Bon_Jovi_New_Jersey.jpg/220px-Bon_Jovi_New_Jersey.jpg',
//         'title' => 'New Jersey',
//         'singer' => 'Bon Jovi',
//         'year' => '1988',
//     ],
//     [
//         'album_cover' => 'https://m.media-amazon.com/images/I/51kpRIIVFlL._AC_UF894,1000_QL80_.jpg',
//         'title' => 'Live at Wembley 86',
//         'singer' => 'Queen',
//         'year' => '1992',
//     ],
//     [
//         'album_cover' => 'https://i.scdn.co/image/ab67616d0000b273653b110d9560eb1656f4c583',
//         'title' => 'Ten\'s Summoner\'s Tales',
//         'singer' => 'Sting',
//         'year' => '1993',
//     ],
//     [
//         'album_cover' => 'https://i.discogs.com/hvahpXUeOQ8gumWYOQe4QjV9fsArTx68ogoIEit7dKo/rs:fit/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExNzgw/MDQwLTE2NDI4MzY0/MTUtNTcxMC5qcGVn.jpeg',
//         'title' => 'Steve Gadd Band',
//         'singer' => 'Steve Gadd Band',
//         'year' => '2018',
//     ],
//     [
//         'album_cover' => 'https://m.media-amazon.com/images/I/81BVsdXqg6L._UF1000,1000_QL80_.jpg',
//         'title' => 'Brave New World',
//         'singer' => 'iron Maiden',
//         'year' => '2000',
//     ],
//     [
//         'album_cover' => 'https://m.media-amazon.com/images/I/713t9D4S-7L._UF1000,1000_QL80_.jpg',
//         'title' => 'One more car, One more rider',
//         'singer' => 'Eric Clapton',
//         'year' => '2002',
//     ],
// ];


$discsJson = file_get_contents('./data.json');
header('Content-Type: application/json');
echo $discsJson;
