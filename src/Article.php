<?php

class Article {
    public $title;
    public $content;
    public $category;
    public $author;
    public $date;
    public $likes;
    public $image;
    public $alt;

    public function __construct(array $data) {
        $this->title = $data['title'];
        $this->content = $data['content'];
        $this->category = $data['category'];
        $this->author = $data['author'];
        $this->date = $data['date'];
        $this->likes = $data['likes'];
        $this->image = $data['image'];
        $this->alt = $data['alt'];
    }

    public function summary() {
        return substr($this->content, 0, 100) . " ...";
    }
}