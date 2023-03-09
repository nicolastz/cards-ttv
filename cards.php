<?php
    $numbers = array("2","3","4","5","6","7","8","9","10");
    $randNumber = array_rand($numbers);

    $pictures = array("Jack", "Queen", "King");
    $randPicture = array_rand($pictures);

    $ace = "Ace";

    $joker = "Joker";

    $suits = array("Hearts", "Diamonds", "Spades", "Clubs");
    $randSuit = array_rand($suits);

    $n = rand(0,100);

    $message = '';

    if($n < 90){
        $message = "You have picked a $numbers[$randNumber] of $suits[$randSuit]. Good luck for the next one <3";
    } elseif($n < 95){
        $message = "You have picked a $pictures[$randPicture] of $suits[$randSuit]. Your luck is going good monkaHmm";
    } elseif($n < 100){
        $message = "You have picked an $ace of $suits[$randSuit]. Your luck is awesome Pog";
    } else{
        $message = "You have picked a $joker. EZ";
    }

    echo $message;
?>