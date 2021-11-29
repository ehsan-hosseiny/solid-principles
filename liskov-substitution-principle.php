<?php

class Father
{
    public function num1(): int
    {
        return 1;
    }

    public function num2(): int
    {
        return 2;
    }
}

class Child extends Father
{
    public function num1(): int
    {
        return 3;
    }
}

$object = new Child();
$object->num1();