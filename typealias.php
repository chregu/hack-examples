<?hh

//type alias
type Point = (int, int);
//opaque type alias
newtype Secret2ID = int;
//shape
type Point2D = shape('x' => int, 'y' => int);

function create_point(int $x, int $y): Point {
  return tuple($x, $y);
}

function dotProduct(Point2D $a, Point2D $b): int {
  return $a['x'] * $b['x'] + $a['y'] * $b['y'];
}


