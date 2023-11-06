<?php


class Song{

//Attributes
private string $name;
private string $author;
private string $genre;
private int $duration;

//Conctructor
public function __construct(string $name, string $author, string $genre, int $duration){
    $this->name = $name;
    $this->author = $author;
    $this->genre = $genre;
    $this->duration = $duration;
}

//Getters
public function getName(): string{
    return $this->name;
}

public function getAuthor(): string{
    return $this->author;
}

public function getGenre(): string{
    return $this->genre;
}

public function getDuration(): int{
    return $this->duration;
}

}

?>