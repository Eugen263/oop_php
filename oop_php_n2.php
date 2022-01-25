<?php
/*
Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
 */
class Worker {
    private $name;
    private $age;
    private $salary;

    public function setName ($set_name) {
        return $this->name = $set_name;
    }

    public function getName () {
        return $this->name;
    }

    public function setAge ($set_age) {
        $this->checkAge($set_age);
    }

    public function getAge () {
        return $this->age;
    }

    public function setSalary ($set_salary) {
        return $this->salary = $set_salary;
    }

    public function getSalary () {
        return $this->salary;
    }

    private function checkAge ($age) {
        if ($age > 1 && $age < 100) {
            $this->age = $age;
        }
    }
}

$one_worker = new Worker();
$one_worker->setName('Иван');
$one_worker->setAge(25);
$one_worker->setSalary(1000);

$two_worker = new Worker();
$two_worker->setName('Вася');
$two_worker->setAge(26);
$two_worker->setSalary(2000);

printf("%s\n", $one_worker->getAge()+$two_worker->getAge());
printf("%s\n", $one_worker->getSalary()+$two_worker->getSalary());
?>
