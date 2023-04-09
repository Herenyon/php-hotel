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

       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <!-- head tabella con i nomi degli hotel  -->
        <thead>
            <tr>
                 <th scope="col">Name</th>
                 <!-- foreach per creare tanti th quanti sono gli elementi con la chiave 'name' in $hotels  -->
                <?php  foreach ($hotels as $hotel){ ?>
        
                    <th scope="col"><?php echo $hotel['name']?></th>
            
        
                <?php  }?>
            </tr>
        </thead> 

        <tbody>
            <!-- linea delle descrizioni degli hotel  -->
            <tr> 
                 <th scope="row">Description</th>
                    <?php  foreach ($hotels as $hotel){ ?>
                
                        <td ><?php echo $hotel['description']?></td>
                     <?php  }?>
            </tr>
            <!-- linea della presenza o meno di parcheggi  -->
            <tr> 
                 <th scope="row">Parking</th>
                <?php  foreach ($hotels as $hotel){ ?>
                <td>
                <!-- if else per trasformare il valore dei booleani true o false in stringhe  -->
                <?php if($hotel['parking'] === true){
                echo  "true";
                } else {
                    echo "false";
                }
                    ?></td>
                <?php  }?>
            </tr>
            <!-- linea dei voti  -->
            <tr> 
                 <th scope="row">Vote</th>
                 <?php  foreach ($hotels as $hotel){ ?>
                
                <td ><?php echo $hotel['vote']?></td>
                <?php  }?>
            </tr>
            <!-- linea delle distanze dal centro  -->
            <tr> 
                <th scope="row">Distance to center</th>
                
                <?php  foreach ($hotels as $hotel){ ?>        
                <td ><?php echo $hotel['distance_to_center']?></td>
                <?php  }?>
            </tr>
        
        </tbody> 

      
    </table>
</body>
</html>