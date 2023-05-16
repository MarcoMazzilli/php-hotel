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

// foreach ($hotels as $index => $hotel) {
//     var_dump($hotel);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Php hotel</title>
</head>

<body>
<hr>

    <table class="table">
        <thead>

            <tr>
                <?php foreach ($hotel as $key => $value) : ?>
                    <th><?php echo strtoupper($key) ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($hotels as $hotel) : ?>
                <tr>
                    <?php foreach ($hotel as $key => $value) : ?>
                        <td>
                            <?php
                            if ($key === 'parking') {
                                $value ? $value = 'Parcheggio disponibile' : $value = 'Parcheggio non disponibile';
                            }
                                echo $value;
                            ?>
                        </td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>
</html>