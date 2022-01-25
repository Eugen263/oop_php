<?php
/*
Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
Сделайте также public методы getName, getSalary.
Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
 */
class Worker {
    private $name;
    private $salary;
    public $age;

    public function __construct($name, $salary) {
        $this->salary = $salary;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary () {
        return $this->salary;
    }
}

$one_worker = new Worker('Ivan', 1000);
$one_worker->age = 25;
echo $one_worker->age * $one_worker->getSalary();
?>
