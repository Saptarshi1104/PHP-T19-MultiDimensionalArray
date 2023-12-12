<?php
echo "Welcome to Multi-Dimensional Arrays <br>";

// Two Dimensional Array
$multiDim = array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);
// echo var_dump($multiDim);
echo $multiDim[1][2] . "<br>";
for($i=0; $i<count($multiDim); $i++){
    echo var_dump($multiDim[$i]) . "<br>";
}
for($i=0; $i<count($multiDim); $i++){
    for($j=0; $j<count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j] . " ";
    }
    echo "<br>";
}

// Three Dimensional Array
$threeDim = array(
    array(
        array(1,2,3,4),
        array(5,4,6,7),
        array(5,6,9,0)
    ),
    array(
        array(1,4,9,8),
        array(5,5,6,6),
        array(5,1,9,4)
    ),
    array(
        array(8,9,0,1),
        array(1,4,5,6),
        array(3,4,5,6)
    )
    );
echo "Iterating Array using one For Loop <br>";
for($i=0; $i<count($threeDim); $i++){
    echo var_dump($threeDim[$i]) . "<br>";
}
echo "Iterating Array using two For Loops [Nested] <br>";
for($i=0; $i<count($threeDim); $i++){
    for($j=0; $j<count($threeDim[$i]); $j++){
        echo var_dump($threeDim[$i][$j]) . "<br>";
    }
}
echo "Iterating Array using three For Loops [Double Nested] <br>";
for($i=0; $i<count($threeDim); $i++){
    for($j=0; $j<count($threeDim[$i]); $j++){
        for($k=0; $k<count($threeDim[$i][$j]); $k++){
            echo $threeDim[$i][$j][$k] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}
?>