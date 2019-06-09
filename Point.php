<?php


class Point
{
    public $x = 0.0;
    public $y = 0.0;
    public $arr =[];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        array_push($this->arr,$this->x,$this->y);
        return $this->arr;
    }
    public function toString()
    {
        return "Result: ". $this->arr[0]." : ".$this->arr[1];
    }
}

