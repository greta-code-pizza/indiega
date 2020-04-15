<?php

require('./src/Article.php');

describe('Article', function() {
    beforeEach(function() {
        $data = json_decode(file_get_contents('./specs/data.json'), true);
        $this->article = new Article($data);
    });

    describe('->title', function () {
        it("should return the title", function () {
            expect($this->article->title)->to->equal('Mon super titre');
        });
    });

    describe('->content', function () {
        it("should return the content", function () {
            expect($this->article->content)->to->equal('Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop. Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop.');
        });
    });

    describe('->category', function () {
        it("should return the category", function () {
            expect($this->article->category)->to->equal('game');
        });
    });

    describe('->author', function () {
        it("should return the author name", function () {
            expect($this->article->author)->to->equal('John Doe');
        });
    });

    describe('->date', function () {
        it("should return the creation date", function () {
            expect($this->article->date)->to->equal('15 March, 2020');
        });
    });

    describe('->likes', function () {
        it("should return 12 likes", function () {
            expect($this->article->likes)->to->equal(12);
        });
    });

    describe('->image', function () {
        it("should return the image name", function () {
            expect($this->article->image)->to->equal("plop.jpg");
        });
    });

    describe('->alt', function () {
        it("should return the image alternative text", function () {
            expect($this->article->alt)->to->equal("alt text");
        });
    });

    describe('->summary()', function () {
      it("should return the expected summary", function () {
          expect($this->article->summary())->to->equal("Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto sha ...");
      });
  });
});

