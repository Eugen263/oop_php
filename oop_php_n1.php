<?php
/*
Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
 */
class Worker {
    public $name;
    public $age;
    public $salary;
}

$one_worker = new Worker();
$one_worker->name = 'Иван';
$one_worker->age = 25;
$one_worker->salary = 1000;

$two_worker = new Worker();
$two_worker->name = 'Вася';
$two_worker->age = 26;
$two_worker->salary = 2000;

printf("%s\n", $one_worker->salary + $two_worker->salary);
echo($one_worker->age + $two_worker->age);

?>
