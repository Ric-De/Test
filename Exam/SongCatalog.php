<?php

require_once 'Song.php';

class SongCatalog {
    //Attributes
    public array $allSongs;

    //Contructor
    public function __construct(array $allSongs) {
        $this->allSongs = $allSongs;
    }

    //Getters
    public function getAllSongsContainer(){
        return $this->allSongs;
    }

    //Method to get all the songs
    public function getAllSongs(){
        foreach($this->allSongs as $song){
            $output = "Name: " . $song->getName(). "\n";
            $output .= "Author: " . $song->getAuthor(). "\n";
            $output .= "Genre: " . $song->getGenre(). "\n";
            $output .= "Duration: " . $song->getDuration(). "\n";
            $output .=  "\n";

            echo $output;
        }
    }

    //Method to get songs by genre
    public function getSongsByGenre($genre){
        $songsFilteredByGenre = array();

        foreach($this->allSongs as $song){
            if($song->getGenre() == $genre){
                $songsFilteredByGenre[] = $song;
            }
        }

        foreach($songsFilteredByGenre as $song){
            $output = "Songs selected by " . $song->getGenre() . " genre.". "\n";
            $output .= "Name: " . $song->getName(). "\n";
            $output .= "Author: " . $song->getAuthor(). "\n";
            $output .= "Genre: " . $song->getGenre(). "\n";
            $output .= "Duration: " . $song->getDuration(). "\n";
            $output .= "\n";

            echo $output;
        }
    }

    public function getSongsByDuration($duration){
        $songsFilteredByDuration = array();

        foreach($this->allSongs as $song){
            if($song->getDuration() > $duration){
                $songsFilteredByDuration[] = $song;
            }
        }

        foreach($songsFilteredByDuration as $song){
            $output = "Songs longer than " . $duration. " minutes.". "\n";
            $output .= "Name: " . $song->getName(). "\n";
            $output .= "Author: " . $song->getAuthor(). "\n";
            $output .= "Genre: " . $song->getGenre(). "\n";
            $output .= "Duration: " . $song->getDuration(). "\n";
            $output .= "\n";

            echo $output;
        }
    }

}

?>