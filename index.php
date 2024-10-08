<?php

$parking_filter = $_GET["parking"];

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <h1>Hotel</h1>
        <form class="form-control p-3 mb-3" action="index.php">
            <h3 class="fw-semibold">Filtra:</h3>
            <div class="mb-3">
                <label for="parking">Parcheggio:</label>
                <select class="form-select w-25" name="parking" id="parking">
                    <option selected value="all">Tutti</option>
                    <option value="true">Disponibile</option>
                    <option value="false">Non Disponibile</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary px-4 me-2">Filtra</button>
            <button type="reset" class="btn btn-warning px-4">Reset</button>
        </form>

        <table class="table table-striped table-hover border">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($hotels as $key => $hotel) : ?>
                <tr>
                    <th scope="row"><?= $key; ?></th>
                    <td><?= $hotel['name']; ?></td>
                    <td><?= $hotel['description']; ?></td>
                    <?php
                        $parking = $hotel['parking'] ? "Disponibile" : "Non Disponibile";
                        $class_parking = $hotel['parking'] ? "text-success" : "text-danger";
                        ?>
                    <td class="<?= $class_parking ?>"><?= $parking ?></td>
                    <td><?= $hotel['vote']; ?></td>
                    <td><?= $hotel['distance_to_center']; ?> km</td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>
</body>

</html>