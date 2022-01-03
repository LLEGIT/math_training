
////////////////////////////
//MATH_TRAINING PHP SCRIPT//
//  MADE BY THEO GILLET   //
//     FRENCH VERSION     //
//       29/12/2021       //
////////////////////////////

<?php
//Welcoming message//
echo "\nWelcome to MathTraining ! It's a php script to train in arithmetic operations. There are 8 levels to pass with 3 lives in total.
Every time a wrong result is given, you lose one life. Beware, the difficulty will 'slightly' increase at each level passed.
Using a calculator is considered as cheating ! (and it's not really fun)";
usleep(50000);
echo "\nWrite your name to start\n\n=> ";
$name = readline();

//Number of lives var (starting at 3//
$nbrOfLives = 3;

//Loop to check if a name is given, repeating itself as long as $name is empty//
while (empty($name)) {
    echo "No name given/null... Write a name if you want to start\n\n=> ";
    $name = readline();
}
usleep(50000);
echo "\nVery well $name, let's begin !\n\n";
usleep(500000);
echo "Level 1\n\n";
usleep(50000);
//Initiates level1()//
level1();

function level1()
{
    global $nbrOfLives;
    //Two random numbers between 2 & 10//
    $randNb1 = rand(2, 10);
    $randNb2 = rand(2, 10);
    usleep(50000);
    //Display the operation which must me resolved by the player//
    echo "$randNb1 + $randNb2\n\n= ";
    //Prompt the user to allow him writing the result//
    $user_result = readline();
    //Correct result//
    $result = $randNb1 + $randNb2;
    //Comparing user result and the correct result//
    //If both matches, next level is enabled//
    if ($user_result == $result) {
        //Success sentence//
        echo "\nUnbelievable ! You're through to next level.\n\nLevel 2\n\n";
        usleep(50000);
        level2();
    } else {
        //Fail sentence//
        echo "\nIncorrect... result was $result! Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        //Making the function recursive as long as player has lives remaining//
        if ($nbrOfLives == -1) {
            usleep(50000);
            //Game over sentence//
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART******\n\n";
            exit;
        }
        else {
            //Reminding how many lives remain//
            echo "Lives = $nbrOfLives\n\n";
            level1();
        } 
    }
}

//Next functions architecture is basically the same, only random numbers generated and operators differ//

function level2()
{
    global $nbrOfLives;
    $randNb1 = rand(11, 99);
    $randNb2 = rand(11, 99);
    usleep(50000);
    echo "$randNb1 + $randNb2\n\n= ";
    $user_result = readline();
    $result = $randNb1 + $randNb2;
    if ($user_result == $result) {
        echo "\nWell done MadMaths!\n\nLevel 3\n\n";
        usleep(50000);
        level3();
    } else {
        echo "\nFailed... it was $result! Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART******\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level2();
        }
    }
}

function level3()
{
    global $nbrOfLives;
    $randNb1 = rand(11, 99);
    $randNb2 = rand(101, 999);
    usleep(50000);
    echo "$randNb1 + $randNb2\n\n= ";
    $user_result = readline();
    $result = $randNb1 + $randNb2;
    if ($user_result == $result) {
        echo "\nGood job Einstein!\n\nLevel 4\n\n";
        usleep(50000);
        level4();
    } else {
        echo "\nYou failed ! Correct result was $result... Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART***\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level3();
        }
    }
}

function level4()
{
    global $nbrOfLives;
    $randNb1 = rand(101, 299);
    $randNb2 = rand(21, 99);
    $randNb3 = rand(31, 99);
    usleep(50000);
    echo "$randNb1 - $randNb2 - $randNb3\n\n= ";
    $user_result = readline();
    $result = $randNb1 - $randNb2 - $randNb3;
    if ($user_result == $result) {
        echo "\nOMG 500 IQ!\n\nLevel 5\n\n";
        usleep(50000);
        level5();
    } else {
        echo "\nYou failed ! Correct result was $result... Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART***\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level4();
        }
    }
}

function level5()
{
    global $nbrOfLives;
    $randNb1 = rand(11, 49);
    $randNb2 = rand(31, 79);
    $randNb3 = rand(2, 9);
    usleep(50000);
    echo "($randNb1 + $randNb2) * $randNb3\n\n= ";
    $user_result = readline();
    $result = ($randNb1 + $randNb2) * $randNb3;
    if ($user_result == $result) {
        echo "\nMath is joke for you !\n\nLevel 6\n\nYou must round the result if possible !\n\n";
        usleep(50000);
        level6();
    } else {
        echo "\nYou failed ! Correct result was $result... Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART***\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level5();
        }
    }
}

function level6()
{
    global $nbrOfLives;
    $randNb1 = rand(61, 99);
    $randNb2 = rand(2, 9);
    echo("$randNb1 / $randNb2\n\n= ");
    $user_result = readline();
    $result = round($randNb1 / $randNb2, 0, PHP_ROUND_HALF_UP);
    if ($user_result == $result) {
        echo "\nNever gonna give up, right ?\n\nLevel 7\n\nSame rule as the level 6\n\n";
        usleep(50000);
        level7();
    } else {
        echo "\nYou failed ! Correct result was $result... Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART***\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level6();
        }
    }
}

function level7()
{
    global $nbrOfLives;
    $randNb1 = rand(5, 19);
    $randNb2 = rand(2, 9);
    $randNb3 = rand(2, 9);
    $randNb4 = rand(2, 9);
    usleep(50000);
    echo "($randNb1 * $randNb2 - $randNb3) / $randNb4\n\n= ";
    $user_result = readline();
    $result = round(($randNb1 * $randNb2 - $randNb3) / $randNb4, 0, PHP_ROUND_HALF_UP);
    if ($user_result == $result) {
        echo "\nAmazing, just one more to win the game !\n\nLevel 8\n\nSame rule as level 6 and 7\n\n";
        usleep(50000);
        level8();
    } else {
        echo "\You failed ! Correct result was $result... Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        usleep(50000);
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART***\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level7();
        }
    }
}

//Last level function//
function level8()
{
    global $nbrOfLives;
    global $name;
    $randNb1 = rand(11, 49);
    $randNb2 = rand(2, 9);
    $randNb3 = rand(2, 9);
    $randNb4 = rand(4, 9);
    usleep(50000);
    echo "($randNb1 * $randNb2 * $randNb3) / $randNb4\n\n= ";
    $user_result = readline();
    $result = round(($randNb1 * $randNb2 * $randNb3) / $randNb4, 0, PHP_ROUND_HALF_UP);
    if ($user_result == $result) {
        //If the file was already created//
        if (file_exists('winners_math_training.txt')) {
            file_put_contents('winners_math_training.txt', "$name\n", FILE_APPEND);
        }
        //Else, we write a sentence at the file header//
        else {
            file_put_contents('winners_math_training.txt', "Winners' list of the Math Training game created by Théo GILLET:\n", FILE_APPEND);
            file_put_contents('winners_math_training.txt', "$name\n", FILE_APPEND);
        }
        //Reward sentence//
        echo "\Congratulations $name!!!!! You went through the whole game !\n\nYou earned your place and name in the winners_math_training.txt file :)\n\nNow go see your family and friends and enjoy life at its worth !\n\n";
        usleep(50000);
    } else {
        echo "\nYou failed ! Correct result was $result... Try again...\n\n";
        usleep(50000);
        $nbrOfLives--;
        
        if ($nbrOfLives == -1) {
            usleep(50000);
            echo "***NO LIVES REMAINING***GAME OVER***PLEASE RESTART***\n\n";
            exit;
        }
        else {
            echo "Lives remaining = $nbrOfLives\n\n";
            level8();
        }
    }
}
