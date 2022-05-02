<?php

// Print current date
echo date('Y-m-d H:i:s') . '<br>'; // prints 2022-04-19 15:51:33
// Print yesterday
                //time() de agora - 60segundos * 60 minutos * 24horas = current time of yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
    echo date('F j Y, H:i:s') . '<br>'; // prints April 20 2022, 15:51:33

// Print current timestamp
echo time() . '<br>'; // number of seconds since 1st january this year


// Parse date: https://www.php.net/manual/en/function.date-parse.php

$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString);  // prints an array with the date
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';


// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

    $dateString = 'February 4 2020 12:45:35';

    $parsedDate = date_parse_from_format('F j Y H:i:s', $dateString); // prints an array of the date from the format we gave
    echo '<pre>';
    var_dump($parsedDate);
    echo '</pre>';