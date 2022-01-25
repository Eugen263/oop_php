<?php
/*
Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000.
Найдите сумму зарплата Ивана и Васи.
Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
 */
class User {
    protected $name;
    protected $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName () {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge () {
        return $this->age;
    }
}

class Worker extends User {
    private $salary;

    public function setSalary ($salary) {
        $this->salary = $salary;
    }

    public function getSalary () {
        return $this->salary;
    }
}

$one_worker = new Worker();
$one_worker->setName("Ivan");
$one_worker->setAge(25);
$one_worker->setSalary(1000);

$two_worker = new Worker();
$two_worker->setName("Vasya");
$two_worker->setAge(26);
$two_worker->setSalary(2000);

$str_one = $one_worker->getSalary() + $two_worker->getSalary();
printf("%s\n", $str_one);

class Student extends User {
    private $salary;
    private $course;

    public function setSalary ($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function getCourse() {
        return $this->course;
    }
}

class Driver extends Worker {
    private $exp;
    private $category;

    public function setExp($exp) {
        $this->exp = $exp;
    }

    public function getExp() {
        return $this->exp;
    }

    public function setCategory($cat) {
        $this->category = $cat;
    }

    public function getCategory() {
        return $this->category;
    }
}
?>
