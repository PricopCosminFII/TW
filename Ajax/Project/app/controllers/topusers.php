<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Topusers
{

  public function __construct()
  {
  }
  public function top()
  {
    $user = new Aboutuser();
    $result = $user->topHTML();
    $i = 0;
    echo '<h3>Top HTML</h3>';
    echo '<ol>';
    foreach ($result as $person) {
      if ($i == 10)
        break;
      echo '<li>';
      echo ' <div class="name">' . $person->username . '</div>';
      echo '<div class="score">' . $person->HTMLprogres . '</div>';
      echo '</li>';
      $i++;
    }
    echo '</ol>';
    $i = 0;
    $result = $user->topCSS();
    echo '<h3>Top CSS</h3>';
    echo '<ol>';
    foreach ($result as $person) {
      if ($i == 10)
        break;
      echo '<li>';
      echo ' <div class="name">' . $person->username . '</div>';
      echo '<div class="score">' . $person->CSSprogres . '</div>';
      echo '</li>';
      $i++;
    }
    echo '</ol>';
  }
}
