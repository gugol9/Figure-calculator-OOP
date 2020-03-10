<?php

    abstract class Shape
    {
        public abstract function getArea();
        public abstract function getCircuit();
    }


    class Rectangle extends Shape
    {
        private $a;
        private $b;

    
        public  function __construct($a, $b)
        {
            $this -> a = $a;
            $this -> b = $b;
        }

        public  function  getArea()
        {
            return 'Pole wynosi: '.$this -> a * $this -> b;
        }

        public function getCircuit()
        {
            return  'Obwód  wynosi: '.((2 * $this -> a * $this -> a) + (2 * $this -> b * $this -> b));
        }
    }

    class Circle extends Shape
    {
        private  $radius;

        public  function  __construct($radius)
        {
            $this -> radius = $radius;
        }

        public function getArea()
        {
            return 'Pole wynosi: '.pow($this -> radius, 2).'π '; //2 to potega 2
        }

        public function getCircuit()
        {
            return  'Obwód  wynosi: '.($this -> radius * 2 ).'π';
        }
    }


    class Kwadrat extends Shape
    {
        private $a;

        public function __construct($a)
        {
            $this -> a = $a;
        }


        public function getArea()
        {
            return 'Pole wynosi: '.$this->a * $this -> a;
        }

        public function getCircuit()
        {
            return  'Obwód wynosi: '.($this -> a * 4 );
        }
    }

    class Triangle extends Shape
    {
        private $a;
        private $h;

        public function __construct($a, $h)
        {
            $this -> a = $a;
            $this -> h = $h;
        }

        public function getArea()
        {
            return 'Pole wynosi:'. ($this -> a * $this -> h) /2;
        }

        public function getCircuit()
        {
           
        }
    }

    class Trapez extends Shape
    {
        private $a;
        private $b;
        private $h;

        public function __construct($a, $b, $h)
        {
            $this -> a = $a;
            $this -> b = $b;
            $this -> h = $h;
        }

        public function getArea()
        {

            if ($this -> a == $this -> b && $this -> b == $this -> a)
            {
               return 'To jest trapez rownoramienny o polu: '.($this -> a + $this ->b)* $this -> h /2;
            }else
            {
                return 'Pole wynosi: '.($this -> a + $this ->b)* $this -> h /2;
            }


        }

        public function getCircuit()
        {
          
        }


    }


    class TriangleRow extends Shape
    {
        private $a;


        public function __construct($a)
        {
            $this -> a = $a;
        }



        public function getArea()
        {
            return 'Pole  wynosi: ' .($this -> a * $this -> a )/4  ;
        }

        public function getCircuit()
        {
            return  'Obwód  wynosi: '.($this -> a * 3 );
        }
    }


    abstract class SpatialFigure
    {
        public abstract function getAreaSpatialFigure();    //PC 
        public abstract function getVolume();               // liczy objętość
        public abstract function getDiagonal();             //przekątna 
        public abstract function getDiagonalBase();         //przekątna podstawy 
        public abstract function getBaseArea();
        
    }

    class Cuboid extends SpatialFigure
    {
        private $a;
        private $b;
        private $c;
        

        public function __construct($a,$b,$c)
        {
            $this -> a = $a;
            $this -> b = $b;
            $this -> c = $c;
            

        }
        public function getAreaSpatialFigure()
        {
            return 'Pole całkowite wynosi: '.($this -> a * $this -> b + $this -> c * $this -> b + $this -> a * $this -> c  )*2 ;

        }

        public function getVolume()
        {
            return 'Objętość wynosi: '.($this -> a * $this -> b * $this -> c);
        }

        public function getDiagonal()
        {
            return 'Przekątna wynosi: √'.(($this -> a * $this -> a) + ($this -> b * $this -> b) + ($this -> c * $this -> c) );
        }

        public function getDiagonalBase()
        {
            return 'Przekątna podstawy  wynosi: √'.(($this -> a * $this -> a) + ($this -> b * $this -> b));
        }

        public function getBaseArea()
        {
            return 'Pole podstawy wynosi: '.($this -> a * $this -> b);
        }
    }

    class cube extends SpatialFigure
    {
        private $a;

        public function __construct($a)
        {
            $this -> a = $a;
        }

        public function getAreaSpatialFigure()
        {
            return 'Pole całkowite wynosi: '.($this -> a * $this -> a)*6;
        }

        public function getVolume()
        {
            return 'Objętość wynosi: '.($this -> a * $this -> a * $this -> a );
        }

        public function getDiagonal()
        {
            return 'Przekątna wynosi: '.($this -> a ).'√3';
        }

        public function getDiagonalBase()
        {
            return 'Długośc przekątnej podstawy wynosi: '.($this -> a ).'√2';
        }

        public function getBaseArea()
        {
            return 'Pole podstawy wynosi: '.($this -> a * $this -> a);
        }

    }

    abstract class SpatialFigureLite
    {
        public abstract function getAreaSpatialFigureLite();    //PC
        public abstract function getVolumeSpatialFigureLite();  //objetość

    }

    class Prism extends SpatialFigureLite  // graniastosłup 
    {
        private $pp;
        private $h;
        private $pb;

        public function __construct($pp, $h, $pb)
        {
            $this -> pp = $pp;
            $this -> h = $h;
            $this -> pb = $pb;
        }

        public function getAreaSpatialFigureLite()
        {
            return 'Pole całkowite wynosi: '.((2 * $this -> pp) + $this -> pb );
        }

        public function getVolumeSpatialFigureLite()
        {
            return 'Objętość wynosi: '.($this -> pp * $this -> h);
        }

    

    }

    class Roller extends SpatialFigureLite  //walec
    {
        
        private $h;
        private $r;
    

        public function __construct( $h, $r)
        {
           
            $this -> h = $h;
            $this -> r = $r;
        

        }

        public function getAreaSpatialFigureLite()
        {
            return 'Pole całkowite wynosi: '.((2 * ($this -> r * $this -> r)) + (2 * $this -> r * $this -> h).'π ' );
        }

        public function getVolumeSpatialFigureLite()
        {
            return 'Objętość wynosi: '.($this -> r * $this -> r * $this -> h).'π ';
        }



        public function SideField()
        {
       
            return 'Pole boczne wynosi: '.(2 * $this -> r * $this -> h).'π ';
        }

        public function getBaseArea()
        {
            return 'Pole podstawy wynosi: '.($this -> r * $this -> r).'π ';
        }

    }


    class Cone extends SpatialFigureLite
    {
        private $r;
        private $l;
        private $h;


        public function __construct($r, $l, $h)
        {
            $this -> r = $r;
            $this -> l = $l;
            $this -> h = $h;
        }

        public function getAreaSpatialFigureLite()
        {
            return 'Pole całkowite wynosi: '.( $this -> r * $this -> r + ( $this -> r * $this -> l)).'π ';
        }

        public function getVolumeSpatialFigureLite()
        {
            return 'Objętość wynosi: '.floor((($this -> r * $this -> r * $this -> h)/3)).'π ';
        }
    }


    class Ball extends SpatialFigureLite
    {
        private $r;

        public function __construct($r)
        {
            $this -> r = $r;
        }

        public function getAreaSpatialFigureLite()
        {
            return 'Pole całkowite wynosi: '.(4 * pow($this -> r , 2) ).'π ';
        }

        public function getVolumeSpatialFigureLite()
        {
            return 'Objętośc wynosi: '.  (1.3333 * pow($this -> r , 3) ). 'π ';
        }
    }


    class Diamond extends Shape //DO POPARWY 
    {
        private $a;
        private $h;
        private $sinus;
        private $f;
        private $e;


        public  function __construct($a, $h, $sinus, $f, $e)
        {
            $this -> a = $a;
            $this -> h = $h;
            $this -> s = $sinus;
            $this -> e = $e;
            $this -> f = $f;
        }

        public  function  getArea()
        {
            return 'Pole wynosi: '.$this -> a * $this -> h;
        }
      

        public function getCircuit()
        {
            return  'Obwód  wynosi: '.(4 * $this -> a);
        }

        public function getAreaa()
        {
            return 'Pole wynosi: '.pow($this -> a, 2) * sin($this -> s);
        }

        public function getAreaDiagonal()
        {
            return 'Pole wynosi: '.($this -> e * $this -> f)/2;
        }

       


    }

    class Parallelogram extends Shape
    {
        private $a;
        private $b;
        private $h;


        public function __construct($a, $b, $h)
        {
            $this -> a = $a;
            $this -> b = $b;
            $this -> h = $h;
        }

        public  function  getArea()
        {
            return 'Pole wynosi: '.$this -> a * $this -> h;
        }

        public function getCircuit()
        {
            return  'Obwód  wynosi: '.(2 * $this -> a + 2 * $this -> b);
        }
    }


    class Deltoid extends Shape
    {
        private $a;
        private $b;
        private $e;
        private $f;
        private $sinus;


        public  function __construct($a, $b,$e,$f, $sinus)
        {
            $this -> a = $a;
            $this -> b = $b;
            $this -> e = $e;
            $this -> f = $f;
            $this -> s = $sinus;
        }

        public  function  getArea()
        {
            return 'Pole wynosi: '.($this -> e * $this -> f)/2;
        }

        public function getAreaa()
        {
            return 'Pole wynosi: '.$this -> a * $this -> b * sin($this -> s);
        }
      

        public function getCircuit()
        {
            return  'Obwód  wynosi: '.(2 * $this -> a + 2 * $this -> b );
        }

       

      
    }

    

//LICZENIE ŚREDNI WAŻONEJ

    error_reporting(E_ALL ^ E_NOTICE);
    
/*
    $shape1 = new Circle($radius = 2);
    echo $shape1 -> getArea().'<br/>';

  



    $trapez1 = new Trapez(6,6,6);
    echo $trapez1 -> getArea().'<br/>';

    $trapez2 = new Trapez(5,4,2);
    echo $trapez2 -> getArea().'<br/>';

    $triangleRow1 = new TriangleRow(4);
    echo $triangleRow1 -> getArea().'√3';


        $cuboidPC = new Cuboid(2,2,2);
    echo  $cuboidPC -> getAreaSpatialFigure();
    echo  $cuboidPC -> getVolume();
    echo  $cuboidPC -> getDiagonal();
    echo $cuboidPC -> getDiagonalBase();
*/
?>