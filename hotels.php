<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-info bg-gradient">
<div class="container">
    <h1 class="my-4">Lista Hotel</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th >Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal centro</th>
        </tr>
        </thead>
        <tbody>
        <?php
       
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

       
        foreach ($hotels as $hotel) {
            echo "<tr>";
            echo "<td>" . $hotel['name'] . "</td>";
            echo "<td>" . $hotel['description'] . "</td>";
            echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
            echo "<td>" . $hotel['vote'] . "</td>";
            echo "<td>" . $hotel['distance_to_center'] . " km</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
