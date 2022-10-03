<!DOCTYPE html>

<html lang="en">
    <meta charset="UTF-8">
    <title>Matrix</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <body>
        <?php
            $name_and_age = array(
                array('Name' => 'Mitchell', 'Age' => 17),
                array('Name' => 'Derron', 'Age' => 17),
                array('Name' => 'Omarion', 'Age' => 19),
                array('Name' => 'Ela', 'Age' => 17),
                array('Name' => 'Jake', 'Age' => 18),
                array('Name' => 'Alex', 'Age' => 17),
                array('Name' => 'Rana', 'Age' => 19),
                array('Name' => 'Rehman', 'Age' => 19),
                array('Name' => 'Nour', 'Age' => 19),
                array('Name' => 'Temi', 'Age' => 18),
                array('Name' => 'Noman', 'Age' => 18),
                array('Name' => 'Taylor', 'Age' => 18),
                array('Name' => 'Roddick', 'Age' => 17),
                array('Name' => 'Elizabete', 'Age' => 17),
            );
            
            echo "<p>Sorted by name:</p>";
            $key_values = array_column($name_and_age, 'Name');
            array_multisort($key_values, SORT_ASC, $name_and_age);

            foreach($name_and_age as $name_sorted) {
                echo "&bull;", "NAME: ".implode('    |    AGE: ', $name_sorted) ."<br>";
            }

            echo "<br>";

            echo "<p>Sorted by age:</p>";
            $key_values = array_column($name_and_age, 'Age');
            array_multisort($key_values, SORT_ASC, $name_and_age);

            foreach($name_and_age as $age_sorted) {
                echo "&bull;", "NAME: ".implode('   |   AGE: ', $age_sorted) ."<br>";
            }

            $culm_var = 0;
            $name_and_age_count = count($name_and_age);

            echo "<br>";

            for($i =2; $i < $name_and_age_count; $i++){
                $culm_var += $name_and_age[$i]["Age"];
            }

            $average_age = $culm_var / $name_and_age_count;

            echo "Average age is: " .round($average_age, 1);
            
        ?>

    </body>
</html>