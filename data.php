<?php
$arrMusic = [
    {
        "title" = "New Jersey",
        "singer" = "Bon Jovi",
        "year" = "1988",
    }
    {
        "title" = "Live at Wembley 86",
        "singer" = "Queen",
        "year" = "1992",
    }
    {
        "title" = "Ten's Summoner's Tales",
        "singer" = "Sting",
        "year" = "1993",
    }
    {
        "title" = "Steve Gaddd Band",
        "singer" = "Steve Gaddd Band",
        "year" = "2018",
    }
    {
        "title" = "Brave New World",
        "singer" = "iron Maiden",
        "year" = "2000",
    }
    {
        "title" = "One more car, One more rider",
        "singer" = "Eric Clapton",
        "year" = "2002",
    }
];

header('Content-Type: application/json');

echo json_encode($arrMusic);