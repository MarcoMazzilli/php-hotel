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

$filter = $_POST['filter'] ?? 'all';
$hotelsWithParking = [];

foreach ($hotels as $index => $hotel) {
    foreach ($hotel as $key => $value) {
        if ($key === 'parking') {
            if($value === true){
                array_push($hotelsWithParking, $hotel);
            }
        }
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <link rel="shortcut icon" href="./assets/icons8-hotel-32.png" type="png">
    <title>Php hotel</title>
</head>

<body>
    <div class="container text-center my-5">

        <!-- FORM -->
        <div class="row">
            <div class="col col-5">
                <form action="index.php" method="POST" class="d-flex">
                    
                    <select class="form-select" aria-label="Default select example" name="filter">
                        <option value="all" selected>Tutti gli hotel</option>
                        <option value="parkOnly">Solo hotel con il parcheggio</option>
                    </select>

                    <button type="submit" class="btn btn-success mx-3">Cerca</button>
        
                </form>
            </div>
        </div>
        <!-- /FORM -->

        <table class="table">
            <thead>
                
                <tr>
                    <?php foreach($hotel as $i => $v) :?>
                        <th class="py-4 text-uppercase"><?php echo $i ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
                
                <tbody>
                    
                    <?php foreach ($filter === 'all' ? $hotels : $hotelsWithParking as $hotel) : ?>
                <tr>
                    <?php foreach ($hotel as $key => $value) : ?>
                        <td class="py-4">
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
            
        </div>
</body>
</html>