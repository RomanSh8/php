<?php

class Circle
{
    private $x1;
    private $y1;
    private $x2;
    private $y2;
    private $x3;
    private $y3;
    private $x4;
    private $y4;

    public function __construct($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
    {
        $this->x1 = $x1; //Левая точка круга
        $this->y1 = $y1; //Левая точка круга
        $this->x2 = $x2; //Верхняя точка круга
        $this->y2 = $y2; //Верхняя точка круга
        $this->x3 = $x3; //Правая точка круга
        $this->y3 = $y3; //Правая точка круга
        $this->x4 = $x4; //Нижняя точка круга
        $this->y4 = $y4; //Нижняя точка круга
    }

    public function circlearea($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4){
        return ($x3 - $x1)**2 * 3.14;
    }
    public function circumference($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4){
        return ($x3 - $x1) * 3.14;
    }
}

$circle = new Circle($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);

echo $circle->circlearea(0,3,3,6,6,3,3,0), '<br>'; // Площадь круга
echo $circle->circumference(0,3,3,6,6,3,3,0), '<br>'; // Длина окружности


class Rectangle {
    private $x1;
    private $y1;
    private $x2;
    private $y2;
    private $x3;
    private $y3;
    private $x4;
    private $y4;

    public function __construct($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
    {
        $this->x1 = $x1; //Нижняя левая точка
        $this->y1 = $y1; //Нижняя левая точка
        $this->x2 = $x2; //Верхняя левая точка
        $this->y2 = $y2; //Верхняя левая точка
        $this->x3 = $x3; //Верхняя правая точка
        $this->y3 = $y3; //Верхняя правая точка
        $this->x4 = $x4; //Нижняя правая точка
        $this->y4 = $y4; //Нижняя правая точка
    }

    public function rectangelArea($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4) {
        return ($x3 - $x1) * ($y2 - $y1);
    }

    public function rectanglePerimeter($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4) {
        return (($x3 - $x1) + ($y2 - $y1)) * 2;
    }
}

$rectangle = new Rectangle($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);
echo $rectangle->rectangelArea(0,0,0,2,3,2,3,0), '<br>'; // Площадь прямоугольника
echo $rectangle->rectanglePerimeter(0,0,0,2,3,2,3,0), '<br>'; // Периметр прямоугольника


class Triangle
{
    private $x1;
    private $y1;
    private $x2;
    private $y2;
    private $x3;
    private $y3;

    public function __construct($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $this->x1 = $x1; //Левая точка
        $this->y1 = $y1; //Левая точка
        $this->x2 = $x2; //Верхняя точка
        $this->y2 = $y2; //Верхняя точка
        $this->x3 = $x3; //Правая точка
        $this->y3 = $y3; //Правая точка
    }

    public function triangleArea($x1, $y1, $x2, $y2, $x3, $y3) {
        return (($y2 - $y1) * ($x3 - $x1)) * 0.5;
    }

    public function trianglePerimeter($x1, $y1, $x2, $y2, $x3, $y3) {
        return sqrt(($y2 - $y1)**2 + ($x3 - $x1)**2) + ($y2 - $y1) +  ($x3 - $x1);
    }

}

$triangle = new Triangle($x1, $y1, $x2, $y2, $x3, $y3);
echo $triangle->triangleArea(0,0,0,4,2,0), '<br>'; // Площадь треугольника
echo $triangle->trianglePerimeter(0,0,0,4,2,0), '<br>'; // Периметр треугольника