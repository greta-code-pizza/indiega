<?php

require('./src/Hello.php');

describe('->say()', function () {
    it("should return 'Hello Nico' for Hello instance with Nico as name", function () {
      $hello = new Hello('Nico');

      expect($hello->say())->to->equal('Hello Nico');
    });
});