<?php

class Personn
{
    private $name;
    private $age;
    private $gender;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }
}

class Studentt extends Person
{
    private $studentID;

    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }
    public function getstudentID()
    {
        return $this->studentID;
    }
}

class Course
{
    private $title;
    private $subject;
    private $teacher;

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function getSubject()
    {
        return $this->subject;
    }

    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }
    public function getTeacher()
    {
        return $this->teacher;
    }
}

class School
{
    private $name;
    private $courses;
    private static $countCourses;

    public function __construct($name)
    {
        $this->name = $name;
        $this->courses = array();
    }
    public function addCourse($course)
    {
        array_push($this->courses, $course);
    }
    public function removeCourse($course)
    {
        foreach ($this->courses as $key => $value) {
            if ($value == $course) {
                unset($this->courses[$key]);
                break;
            }
        }
    }
    public function getCourses()
    {
        return $this->courses . ' ' . self::$countCourses . "Has been coursed!";
    }
}

class LibraryBook
{
    private $title;
    private $author;
    private $isbn;

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
    public function getIsbn()
    {
        return $this->isbn;
    }
}

class Libary
{
    private $name;
    private $books;
    private static $countBooks;

    public function __construct($name)
    {
        $this->name = $name;
        $this->books = array();
        self::$countBooks++;
    }

    public function addBook($book)
    {
        array_push($this->books, $book);
    }
    public function removeBook($book)
    {
        foreach ($this->books as $key => $value) {
            if ($value == $book) {
                unset($this->books[$key]);
                break;
            }
        }
    }
    public function getBooks()
    {
        return $this->books . ' ' . "We have" . self::$countBooks . 'Books in libary!';

    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

abstract class Shape
{
    abstract public function calculateArea();
}

class Square extends Shape
{
    public function calculateArea()
    {

    }
}
$Square = new Square;
$Square->calculateArea();

// abstract class Vehicle
// {
//     private $make;
//     private $model;
//     private $year;
// }

// class Car extends Vehicle
// {
//     private $numDoors;
//     public function setDoors($numDoors)
//     {
//         $this->numDoors = $numDoors;
//     }
//     public function getDoors()
//     {
//         return $this->numDoors;
//     }
// }
// class Truck extends Vehicle
// {
//     private $bedLength;
//     public function setBedLength($bedLength)
//     {
//         $this->bedLength = $bedLength;
//     }
//     public function getBedLength()
//     {
//         return $this->bedLength;
//     }
// }

// $car = new Car;
// $car->setDoors(5);
// echo $car->getDoors();

// $truck = new Truck;
// $truck->setBedLength(6);
// echo $truck->getBedLength();

abstract class Animal
{
    abstract public function makeSound();
}

interface Printable
{
    function print();

}

class Book implements Printable
{
    private $bookName;
    public function __construct($bookName)
    {
        $this->bookName = $bookName;
    }
    public function print() {
        return $this->bookName;
    }
}
class Newspaper implements Printable
{
    private $newsPaper;
    public function __construct($NewsPaperName)
    {
        $this->newsPaper = $NewsPaperName;
    }
    function print() {
        return $this->newsPaper;
    }
}

abstract class Vehicle
{
    protected static $maxSpeed;
    protected $speed;

    public function __construct($speed = null)
    {
        $this->setSpeed($speed);
    }

    public function setSpeed($speed)
    {
        if (is_null($speed)) {
            $speed = rand(1, 200);
        }

        if (is_numeric($speed)) {
            $this->speed = $speed;
            if ($speed > static::$maxSpeed) {
                static::$maxSpeed = $speed;
            }

            echo "Speed: $speed &emsp;&&emsp; " . $this->getMaxSpeed();

            return true;
        }
        return false;
    }

    public function getMaxSpeed()
    {
        return "Your " . get_class($this) . " Max Speed Is: " . static::$maxSpeed . '<br>';
    }
    public function getSpeed()
    {
        return $this->speed;
    }
}

interface Flyable
{
    public function fly();
}

interface Drivable
{
    public function drive();
}

class Car extends Vehicle implements Drivable
{
    protected static $maxSpeed;

    public function drive()
    {
        return 'Your car is driving with' . ' ' . $this->speed . ' ' . 'Speed!';
    }
}
class AirPlane extends Vehicle implements Flyable
{
    protected static $maxSpeed;

    public function fly()
    {
        return "Your Airplane is flying now... :/";
    }
}

// $car1 = new Car();
// $car2 = new Car();

// $car1->setSpeed(20);
// $car1->setSpeed(100);
// $car1->setSpeed(50);

// $car2->setSpeed(40);
// $car2->setSpeed(120);
// $car2->setSpeed(0);

// $air1 = new AirPlane(100);
// $air2 = new AirPlane(200);

// $air1->setSpeed(200);
// $air1->setSpeed(500);
// $air1->setSpeed(300);

// $air2->setSpeed(400);
// $air2->setSpeed(700);
// $air2->setSpeed(100);

class Person
{
    public function __construct()
    {
        self::$Counter++;
    }
    public static $Counter;
    public static function getCounter()
    {
        return self::$Counter;
    }
}
class Student extends Person
{
    public static $Counter;
}
class Teacher extends Person
{
    public static $Counter;
}

$Person = new Person;
$student = new Student;
$student1 = new Student;

$teacher = new Teacher;
$teacher1 = new Teacher;
$teacher2 = new Teacher;

echo 'Person ' . Person::getCounter() . PHP_EOL;
echo 'Student ' . Student::getCounter() . PHP_EOL;
echo 'Teacher ' . Teacher::getCounter() . PHP_EOL;

echo 'Public Student ' . Student::$Counter . PHP_EOL;
echo 'Public Teacher ' . Teacher::$Counter;
