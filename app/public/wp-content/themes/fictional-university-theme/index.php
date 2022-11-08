<!-- This is how you define a function!  -->
<?php
function firstFunc()
{
  echo "<p>I am HTML written inside of a Function!</p>";
}

firstFunc();
firstFunc();
?>

<?php
function greet($insult, $name)
{
  echo "<p> Greetings $insult! I a $name. Who goes there?! </p>";
}

greet("Plebian", "Beavis");
greet("ya big jerk!", "Butthead");
?>