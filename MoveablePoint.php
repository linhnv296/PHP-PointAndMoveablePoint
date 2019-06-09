<?php


class MoveablePoint extends Point
{
    public $xSpeed = 0.0;
    public $ySpeed = 0.0;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    function setSpeed($xSpeed, $ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    function getSpeed(){
        array_push($this->arr,$this->x, $this->y,$this->xSpeed,$this->ySpeed);
        return $this->arr;
    }
    function toString()
    {
        return "Result: ". $this->arr[0]." : ".$this->arr[1]." : ". $this->arr[2]." : ".$this->arr[3];
    }

    function move() {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        $this->arr[0] = $this->x;
        $this->arr[1] = $this->y;
        return $this->arr;
    }
}