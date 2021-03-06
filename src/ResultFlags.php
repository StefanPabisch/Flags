<?php
namespace Pabisch\Flaggenpabisch;

use Pabisch\Flaggenpabisch;

$flag1 = new CircleFlag(
    "Japen",
    "Weiß",
    5
);

$flag2 = new RectangleFlag(
    "Italien",
    "Grün, Rot, Weiß",
    4,
    2
);

$flag3 = new RectangleFlag(
    "China",
    "Rot",
    4,
    2
);

$flag4 = new TriangleFlag(
    "Tschechien",
    "Rot, Blau, Weiß",
    4,
    2
);

$flag5 = new TriangleFlag(
    "Südafrika",
    "Grün",
    4,
    2
);

echo $flag1;
echo $flag2;
echo $flag3;
echo $flag4;
echo $flag5;