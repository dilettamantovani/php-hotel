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

if (isset($_GET['vote'])) {
    $minRate = intval($_GET['vote']);


    $hotels = array_filter($hotels, function ($hotel) use ($minRate) {
        return $hotel['vote'] >= $minRate;
    });
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel List</title>
</head>

<body>
    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="col-12" colspan="6">Hotels</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">nome</th>
                    <td><?php echo $hotels[0]["name"] ?></td>
                    <td><?php echo $hotels[1]["name"] ?></td>
                    <td><?php echo $hotels[2]["name"] ?></td>
                    <td><?php echo $hotels[3]["name"] ?></td>
                    <td><?php echo $hotels[4]["name"] ?></td>
                </tr>
                <tr>
                    <th scope="row">voto</th>
                    <td><?php echo $hotels[0]["vote"] ?></td>
                    <td><?php echo $hotels[1]["vote"] ?></td>
                    <td><?php echo $hotels[2]["vote"] ?></td>
                    <td><?php echo $hotels[3]["vote"] ?></td>
                    <td><?php echo $hotels[4]["vote"] ?></td>
                </tr>
                <tr>
                    <th scope="row">Parcheggio</th>
                    <td><?php echo $hotels[0]["parking"] ?></td>
                    <td><?php echo $hotels[1]["parking"] ?></td>
                    <td><?php echo $hotels[2]["parking"] ?></td>
                    <td><?php echo $hotels[3]["parking"] ?></td>
                    <td><?php echo $hotels[4]["parking"] ?></td>
                </tr>
                <tr>
                    <th scope="row">distanza dal centro</th>
                    <td><?php echo $hotels[0]["distance_to_center"] . 'Km' ?></td>
                    <td><?php echo $hotels[1]["distance_to_center"] . 'Km' ?></td>
                    <td><?php echo $hotels[2]["distance_to_center"] . 'Km' ?></td>
                    <td><?php echo $hotels[3]["distance_to_center"] . 'Km' ?></td>
                    <td><?php echo $hotels[4]["distance_to_center"] . 'Km' ?></td>
                </tr>

            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>