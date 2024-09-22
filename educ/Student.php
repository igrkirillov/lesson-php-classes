<?php

namespace educ;

class Student
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Возвращает имя студента
     *
     * @return name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Возвращает возраст студента
     *
     * @return age
     */
    public function getAge()
    {
        return $this->age;
    }
}