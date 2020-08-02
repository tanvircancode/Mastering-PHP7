<?php

//Multidimensional or nested array
$foods = [
    'vegetables' => explode(', ', 'brinjal, brocolli, carrot, capsicum'),
    'fruits' => explode(', ', 'orange, banana, apple'),
    'drinks' => explode(', ', 'water, milk'),
];

//print_r($foods['vegetables']);
print_r($foods);

echo "====\n";
array_push($foods['drinks'], 'orange juice');
print_r($foods);
echo "====\n";

echo $foods['vegetables'][3];
echo "\n";

$sample = [
    'test' => [
        'test_again' => [
            'a',
            'b',
            'c',
            'd'
        ]
        ],
];

echo $sample['test']['test_again'][2];
echo "\n";

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[5,6,7]]
];

//print_r($sample2);
echo $sample2[3][3][1];