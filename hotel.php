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

// creo delle variabili per filtrare il voto e il parcheggio

$vote = isset($_GET["vote"]) && trim($_GET["vote"] ) !== "" ? $_GET["vote"] : null;
$parking = isset($_GET["parking"]) && trim($_GET["parking"]) !== "" ? $_GET["parking"] : null;

$filteredHotels = [];

if ($parking === null && $vote === null) {
    $filteredHotels = $hotels;
} else {
    foreach ($hotels as $hotel) {
        $mustAdd = true;

        if (isset($vote) && isset($parking)) {
            $mustAdd = ($hotel["vote"] >= $vote && $hotel["parking"] == $parking); 
        } else if (isset($vote)) {
            $mustAdd = ($hotel["vote"] >= $vote);
        } else if (isset($parking)) {
            $mustAdd = ($hotel["parking"] == $parking);
        }

        if ($mustAdd) {
            $hotels[] = $hotel;
        }
    }
}

//

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

    <div class="container p-4">
        <h1 class="text-center">Hotels</h1>
        <form action="hotel.php" method="GET">
            <div class="row d-flex justify-content-center p-4">
                <div class="first-input col-3 text-center d-flex">
                    <label for="parking" class="mb-2 w-100">
                        <h2>Parking</h2>
                    </label>

                    <select name="parking" class="form-select" id="parking">
                        <option value="null" hidden></option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div class="second-input col-3 text-center d-flex">
                    <label for="vote" class="mb-2 w-100">
                        <h2>Vote</h2>
                    </label>

                    <select name="vote" id="vote" class="w-100 form-select">
                        <option value="null" hidden></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>


            <div class="container-button text-center">
                <button type="submit" name="submit" class="btn btn-primary mt-2 mb-2">Filtra</button>
            </div>
        </form>

        <?php
        // Inizio la tabella Bootstrap
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
    </div>

</body>

</html>