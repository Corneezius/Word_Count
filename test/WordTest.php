<?php

    require_once __DIR__."/../src/word.php";

    class Word extends PHPUnit_Framework_TestCase{


        function test_OneMatch(){

          //Arrange

          $test_sentence = "Ducks are delicious.";
          $test_palabra= "Ducks";
          //Act
          $result = $this->word_count($test_sentence, $test_palabra);
          //Assert
          $this->assertEquals("1", $result);
        }

        function test_MultipleMatch()
        {
            //Arrange
          $test_sentence = "Ducks are delicious and Ducks are Ducks.";
          $test_palabra= "Ducks";
            //Act
          $result = $this->word_count($test_sentence, $test_palabra);
            //Assert
          $this->assertEquals("3", $result);
        }

        function test_NoMatch()
        {
            //Arrange
          $test_sentence = "Chickens are bettern that other Ucks.";
          $test_palabra= "Ducks";
            //Act
          $result = $this->word_count($test_sentence, $test_palabra);
            //Assert
          $this->assertEquals("0", $result);
        }
    }
;
