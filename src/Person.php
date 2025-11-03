<?php
namespace PhpBook\src;
class Person
{
    private $name = 'taro';

    public function getName(): string
    {
        return $this->name;
    }
}