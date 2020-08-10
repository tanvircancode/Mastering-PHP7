<?php
header('X-XSS-Protection:0');
include_once 'function_1.php';
$fruits = ["mango", "orange", "Banana", "apple", "lemon"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Our First Form</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magnam fugiat doloribus officia. Vero
                illum debitis ipsam necessitatibus eaque sed.</p>

            <p>
               <?php
               //for selecting single element from fruits array
//    print_r($_POST);
//      if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
//       printf("You have selected: %s", filter_input(INPUT_POST, 'fruits[]', FILTER_SANITIZE_STRING));
//     }
            // for selecting multiple elements from fruits array
            // $sfruits = $_POST['fruits'];
            // if(count($sfruits) > 0 ) {
            // echo "You have selected: ".join(", ",$sfruits);
            // }
            // for selecting multiple elements from fruits array in efficient way
            $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
            if(count($sfruits) > 0)
            {
                echo "You have selected: ".join(", ",$sfruits);
            }
?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="fruits">Select Some Fruits</label>
                <select style="height:150px;", name="fruits[]" id="fruits" multiple>
                   <option value="" disabled selected>Select Some Fruits</option>
                   <?php displayOptions($fruits, $sfruits); ?>
                </select>

                <button type='submit'>Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>