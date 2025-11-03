<?php
namespace PhpBook;
class Person
{
    private $name = 'taro';

    public function getName(): string
    {
        return $this->name;
    }
}