<?php

class Item
{
    public $color;
    public $legs;

    public function show()
    {
        return '. Он ' . $this->color . ' и имеет ' . $this->legs . ' ножек.';
    }
}

class Table extends Item
{
    public $material;

    public function show()
    {
        return 'Стол сделан из ' . $this->material . parent::show();
    }
}

$table = new Table;
$table->color = 'красный';
$table->legs = 6;
$table->material = 'МДФ';

echo $table->show();


