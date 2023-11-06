<?php

require_once 'Song.php';
require_once 'SongCatalog.php';

//Instantiate/Create song objects to fill the array
$song1 = new Song('All of me', 'John Legend', 'pop', 3);
$song2 = new Song('Hello', 'Adelle', 'pop', 4);
$song3 = new Song('All Stars', 'Smash Mouth', 'rock', 6);
$song4 = new Song('Dirty deeds done dirty cheap', 'ACDC', 'rock', 4);
$song5 = new Song('Love tear us apart', 'Joy Division', 'electronic', 7);
$song6 = new Song('Stay', 'Rihanna', 'pop', 2);
$song7 = new Song('Highway to Hell', 'ACDC', 'rock', 8);
$song8 = new Song('Blue Monday', 'New Order', 'electronic', 8);
$song9 = new Song('Starman', 'David Bowie', 'pop', 5);


//Create an empty container array to store the songs
$allSongs = array();
//Add the songs to $allSongs array
array_push($allSongs, $song1, $song2, $song3, $song4, $song5, $song6, $song7, $song8, $song9);

//Instantiate the SongCatalog object and add the $allSong array into it
$songCatalog1 = new SongCatalog($allSongs);

//Show all the songs in the container by genre
echo PHP_EOL;
echo $songCatalog1->getSongsByGenre('pop');

//Show all songs in the container with duration greater than 5min
print_r($songCatalog1->getSongsByDuration(5));
echo PHP_EOL;
//echo $songCatalog1->getSongsByDuration(5);
echo PHP_EOL;

?>