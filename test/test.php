<?php
    require_once "src/word.php";

    class WordTest extends PHPUnit_Framework_TestCase{

        function test_word_count(){
          //Arrange
          $test_Word = new Word;
          $input = "Duck";
          //Act
          $result = $test_Word->word_count($input);
          //Assert
          $this->assertEquals("1", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            // Arrange
            $test_Word = new Wordr;
            $input = "Ducks eat fish";
            // Act
            $result = $test_Word->word_count($input);
            // Assert
            $this->assertEquals("3", $result);
        }

        function test_word_find()
        {
        // Arrange
        $test_Word = new Word;
        $input1 = "Ducks";
        $input2 = "Ducks eat fish";
        // Act
        $result = $test_Word->wordFind($input1, $input2);
        // Assert
        $this->assertEquals(true, $result);
        }

        function test_makeTitleCase_FirstWordException(){
          // Arrange
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "the lord of the rings";
          //Act
          $result = $test_TitleCaseGenerator->makeTitleCase($input);
          //Assert
          $this->assertEquals("The Lord of the Rings", $result);
        }
      }
