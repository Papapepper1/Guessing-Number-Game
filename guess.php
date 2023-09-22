<!DOCTYPE html>    <!-- guess.php -->
<html lang="en">
   <head>
      <title>Project 4 COP3813 Robbie Salisbury V</title>
      <link href="theme.css" rel="stylesheet" /> <!-- import theme -->
   

   </head>
   <body>


      <form method="post" action="guess.php">
         <h2>I'm thinking of a number between 1 and 100. You have 10 attempts to get the right number!</h2>
         <p>
            <label for="num">Insert your guess here:</label>
            <input type="number" id="num" name="num" min="1" max="100" autofocus> <!-- force the user to only put a number between 1 and 100 -->
         </p>
         <div>
            <input type="submit" value="Guess" class="btn btn-outline-success" fdprocessedid="jajc8l"> <!-- buttons with style -->
            <input type="reset" value="Clear" class="btn btn-outline-danger" fdprocessedid="r4nood">
         </div>
      </form>

      <?php
         // Logic for the number guessing game
         session_start(); //used in order to keep the random number the same when the user posts
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (!isset($_SESSION["randNum"])) {
               $_SESSION["randNum"] = rand(1, 100); //Makes sure that the random number is selected, if not, creates one
               
            }
            
            $randNum = $_SESSION["randNum"]; //initialize variable for the random number
            
            if (!isset($_SESSION["attempts"])) {
               $_SESSION["attempts"] = 10; //setting number of attempts for the user 
            }

            $attempts = $_SESSION["attempts"]; //initialize variable for attempts
            $attempts--; // reduce the number of attempts by 1 every time the user guesses
               
            $_SESSION["attempts"] = $attempts; //make sure the session's attempts are the same as the variables attempts

            
            //if user gets the right number
            if ($_POST["num"] == $randNum) {
               echo "<h1>You did it! That's the right number!!! Lets try again! You are back to 10 attempts!</h1>";
               session_destroy(); //start over with a new random number
            }

            //if user does not get the right number
            if ($_POST["num"] != $randNum) {
               //if user doesn't put a number
               if ($_POST["num"] == "") {
                  echo "<p>Invalid input</p>";
                  
               }
               //if user inputs a number lower than selected random number
               if ($_POST["num"] < $randNum) {
                  echo "<p>Incorrect, the number I was thinking of is higher.</p>";
                  
               }
               //if user inputs a number higher than selected random number
               if ($_POST["num"] > $randNum) {
                  echo "<p>Incorrect, the number I was thinking of is lower.</p>";
                  
               }
               //tell the user how many attempts are left
               echo "<p>You have $attempts attempts left.</p>";
            }
            
            //if the user runs out of attempts
            if ($attempts === 0) {
               echo "<p>You Lose! The number was $randNum! Try again with a new number! You are back to 10 attempts!</p>";
               session_destroy(); //end the game and make a new random number
            }
            
            
         }
      ?>
   </body>
</html>