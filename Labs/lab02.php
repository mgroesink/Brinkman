<h3>PhP Lab 02</h3>
<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 19-1-2018
 * Time: 14:14
 */

define("NAAM" , "Marcel Roesink");
define("LEEFTIJD" , 60);
class Task{
    public $Description;
    public $age;
    public static $counter = 0;

    public function __construct($description){
        $this->Description = $description;
        $this->age = LEEFTIJD;
        self::$counter++;
    }


}

$task = new Task(NAAM);
$task1 = new Task(NAAM);
$task2 = new Task(NAAM);
echo $task->Description . " is " . $task->age . " jaar oud.";
echo $task1->Description . " is " . $task1->age . " jaar oud.";
echo $task2->Description . " is " . $task2->age . " jaar oud.";
echo Task::$counter;
