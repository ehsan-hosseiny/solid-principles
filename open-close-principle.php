<?php

interface ShapeInterface
{
    public function draw();
}

class Circle implements ShapeInterface
{
    public function draw()
    {
        echo "Draw Shape: Circle \n";
    }
}

class Square implements ShapeInterface
{
    public function draw()
    {
        echo "Draw Shape: Square \n";
    }
}

class Rectangle implements ShapeInterface
{
    public function draw()
    {
        echo "Draw Shape: Rectangle \n";
    }
}

class DrawShape
{

    protected $shapes;

    public function __construct($shapes)
    {
        $this->shapes = $shapes;
    }

    public function drawAllShapes()
    {
        foreach ($this->shapes as $shape) {
            $shape->draw();
        }
    }
}

$circle1 = new Circle();
$circle2 = new Circle();
$square = new Square();
$rectangle = new Rectangle();

$draw = new DrawShape([$circle1, $circle2, $square,$rectangle]);
$draw->drawAllShapes();
