<?php
// Array di hotel
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

// Inizia la tabella Bootstrap
echo '<table class="table table-striped table-bordered p-4 m-3">';
echo '<thead>';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Description</th>';
echo '<th>Parking</th>';
echo '<th>Vote</th>';
echo '<th>Distance to Center (km)</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Funzione per stampare una riga di hotel
function stampaRigaHotel($hotel)
{
    echo '<tr class="">';
    echo '<td>' . $hotel['name'] . '</td>';
    echo '<td>' . $hotel['description'] . '</td>';
    echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
    echo '<td>' . $hotel['vote'] . '</td>';
    echo '<td>' . $hotel['distance_to_center'] . '</td>';
    echo '</tr>';
}

// Stampare tutte le righe degli hotel
foreach ($hotels as $hotel) {
    stampaRigaHotel($hotel);
}

// Chiudi la tabella Bootstrap
echo '</tbody>';
echo '</table>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <!-- Libraries -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">

    <title>Php-hotel</title>

</head>

<body>
    
</body>

</html>