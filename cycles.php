<?php

$user = [
    "id" => 1,
    'name' => "user"
];

//if ($user) {
//    echo "Hello, {$user['name']}";
//} else {
//    echo "No";
//}

?>

<?php //if (true): ?>
<!--<div></div>-->
<?php //else: ?>
<!--<div></div>-->
<?php //endif; ?>
<?php

//if ($user['id'] === 2) {
//    echo "Hello, {$user['name']}";
//} elseif ($user['id'] === 1) {
//    echo "Hello, admin";
//} else {
//    echo "No";
//}
//    if ($user['id'] === 1) { echo "Hello, admin"; } else { echo "else block"; }

//    $hello = ($user['id'] === 1)
//        ? "Hello, admin"
//        : "else block";


//    $hello = ($user['id'] === 2)
//        ? (($user['id'] === 1)
//            ? "Hello, admin"
//            : "else block")
//        : "else main";


//    $hello = ($user['id'] === 1) ?: "else block";
//
//    echo $hello;


//    $name = "";
//
//    if ($name == 'qwe' || $name == 'rty') {
//        //...
//    }
//    elseif ($name == '4534') {
//        //...
//    }
//     else {
//         //...
//     }
//

//$var = "name";
//
//     switch ($name) {
//         case $var: // "" == "name
//         case 'rty':
//             //...
//             break;
//         case '4534':
//             //...
//             break;
//         default:
//             echo "else";
//     }


//$food = "cake";
//
//$returnVar = match ($food) { // ===
//    'apple' => 'Apple on the table',
//    'cake' => 'Cake on the table',
//    default => ''
//};
//
//echo $returnVar;


// while/do-while

    $total = 0;
    $i = 1;

//    while ($i < 1) {
//        $total += $i;
//        $i++;
//    }
//
//    echo $total;
//
//    while ($i < 10):
//        //...
//        //...
//    endwhile;

//    do {
//        $total += $i++;
//    } while ($i < 10);
//
//    echo $total;


//    do {
//        $total += $i++;
//        if ($i == 5) {
//            break;
//        }
//    } while ($i);
//
//    echo $total;

//    do {
//
//        if ($i == 5) {
//            continue;
//        }
//
//        $total += $i++;
//    } while ($i < 10);
//
//    echo $total;


    // for, foreach


    $arr = [
        "apple", "cake", "banana"
    ];
//
//
//        for ($i=0; $i < count($arr); $i++) {
//            echo $arr[$i] . ", ";
//        }

//    foreach ($user as $key => $value) {
//        echo $key . ': ' . $value . ', ';
//    }

//        for ($i=count($arr)-1; $i >= 0; $i--) {
//            echo $arr[$i] . ", ";
//        }



//    $cat = [
//        0 => [
//            0 => 'val',
//            1 => 'val 3'
//        ],
//        1 => [
//
//        ]
//    ];


    $whoIsIndex = 0;

//for ($i; ;) {
//    for ($y; ;) {
//        if ($cat[$i][$y] === 'val 3') {
//            $whoIsIndex = $y;
//        }
//    }
//}
//
//
//foreach ($cat as $key => $item) {
//    if ($key === 'id') {
//
//    }
//}








$users = [
    0 => [
        "id" => 1,
        "name" => "user",
        "add" => [
            "date_birth" => "01.01.1980",
            "is_married" => false
        ]
    ],
    1 => [
        "id" => 2,
        "name" => "user 2",
        "add" => [
            "date_birth" => "01.01.1985",
            "is_married" => true
        ]
    ]
];

$birthdayList = [];

$countOfMarried = 0;

$addArrTemp = [];



foreach ($users as $user) {
//    var_dump($user["add"]);
    if (isset($user["add"])) {
        $addArrTemp[] = $user["add"];
    }
}

//var_dump($addArrTemp);

foreach ($addArrTemp as $value) {
//    var_dump($value);
    if (isset($value["is_married"]) && $value["is_married"]) {
        $countOfMarried++;
    }

    if (isset($value["date_birth"])) {
        $birthdayList[] = $value["date_birth"];
    }
}

foreach ($birthdayList as $birthday) {
    $birthdayList["month"] = getMonth($birthday);
}


function getMonth($date) {
    return ;
}

var_dump($countOfMarried);
var_dump($birthdayList);

//    foreach ($user as $key => $u) {
//        if ($key === 'add') {
//            $addArr = $u;
//        }
//    }
//
//
//
//    foreach ($addArr as $item) {
//        echo $item;
//    }




