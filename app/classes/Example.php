<?php
namespace App\classes;
class Example
{
    public $startNumber;
    public $endNumber;
    public $result;
    public $i;

    public function __construct($data)
    {
        $this->startNumber = $data['s_num'];
        $this->endNumber = $data['e_num'];
    }

    public function index()
    {

        for ($this->i = $this->startNumber ; $this->i <= $this->endNumber ; $this->i ++)
        {
            $this->result = $this->i;
            echo $this->result.' '.' ';
        }

    }

}