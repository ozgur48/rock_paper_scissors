<?php


#create a list containing the three actions of the game.
$action_list = array("rock", "paper", "scissors");

#Set the scores of players to 0
$computer_score = 0;
$player_score = 0;


#Ask the user how many rounds they want to play
$total_rounds = readline("How many rounds do you want to play? Please enter a number here: ");
$total_rounds = intval($total_rounds);
$round_counter = 0;

function print_console($str) {
    echo $str . PHP_EOL;
}


#Add a round_counter that is 0 at the beginning
while ($round_counter < $total_rounds){
    #Increase round_counter by and print it
    $round_counter += 1;

    print_console("Round counter: $round_counter");

    // array karıştırma
    shuffle($action_list);

    // action listesi içerisinden rasgele bir adet elementin indexini al.
    $random_action_index = array_rand($action_list);

    #Select a random action for computer. random alınmış index kullanılarak action listesinde karşılık gelen element alınır.
    $computer_choice = $action_list[$random_action_index];

    #Ask player to choose an action
    $player_choice = readline("Please choose your action: ");

    #Print the players choices
    print_console("Player choices: $player_choice");
    print_console("Computer choices: $computer_choice");

    #tie condition
    if($computer_choice == $player_choice){
        print_console("Tie!, Both players chose the same action");
    }
    elseif($computer_choice == "rock"){
        if($player_choice=="paper"){
            print_console("Winner is player! ");
            $user_score += 1;
        }
        else{
            print_console("Winner is computer");
            $computer_score += 1;
        }
    }
    elseif($computer_choice == "paper"){
        if($player_choice == "rock"){
            print_console("Winner is computer! ");
            $computer_score += 1;
        }
        else{
            print_console("Winner is player");
            $player_score += 1;
        }
    }
    elseif($computer_choice == "scissors"){
        if ($player_choice == "paper"){
            print_console("Winner is computer! ");
            $computer_score +=1 ;
        }
        else{
            print_console("Winner is player! ");
            $player_score += 1;
        }
    }
    #Print the outcome of the game by using conditional statements
    if($computer_score == $player_score){
        print_console("There is no winner, tie ");
        print_console(" Computer score: $computer_score --------"."Player score: $player_score");
    }
    elseif ($computer_score <= $player_score){
        print_console("There is winner Player.");
        print_console(" Computer score: $computer_score --------"."Player score: $player_score");
    }
    else{
        print_console("There is winner Computer.");
        print_console(" Computer score: $computer_score --------"."Player score: $player_score");
    }
}
?>