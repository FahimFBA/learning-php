<?php
# LOOPS - Execute code set number of times

/*
For
While
Do...While
Foreach
*/

# For Loop
# @params - init, condition, increment

for ($i = 0; $i <= 10; $i++) {
    echo 'Number ' . $i;
    echo '<br>';
}

# While Loop
# @params - condition

$i = 0;
while ($i < 10) {
    echo $i;
    echo '<br>';
    $i++;
}


# Do...While
# @params - condition
$i = 0;
do {
    echo $i;
    echo '<br>';
    $i++;
}
while ($i < 10);


# For each = Works with arrays

$people = array('Brad', 'Jose', 'William');

foreach ($people as $person) {
    echo $person;
    echo '<br>';
}


$morePeople = array(
    'Fahim' => 'fahimbinamin@gmail.com',
    'Jose' => 'jose@gmail.com',
    'William' => 'will@gmail.com'
);

foreach ($morePeople as $singlePeople => $email) {
    echo $singlePeople . ' : ' . $email;
    echo '<br>';
}
?>