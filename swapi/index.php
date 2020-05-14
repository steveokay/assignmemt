<?php

$tbl = "";
for( $i = 1; $i <= 5; $i++){
    $url = "https://swapi.dev/api/people/".$i."/";
    
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    
    $result = json_decode($response); 
    
    $tbl .= "<tr>";
    $tbl .= "<td><a href = character.php?id=".$i." target=\"_blank\" >" . $result->name ."</a></td>";
    $tbl .= "<td><a href = character.php?id=".$i." target=\"_blank\" >" . $result->height ."</a></td>";
    $tbl .= "<td><a href = character.php?id=".$i." target=\"_blank\" >" . $result->mass ."</a></td>";
    $tbl .= "<td><a href = character.php?id=".$i." target=\"_blank\" >" . $result->hair_color ."</a></td>";
    $tbl .= "<td> <a href = character.php?id=".$i." target=\"_blank\" >View More information</a></td>";
    $tbl .= "</tr>";

    //print_r($result);
    //$result->order_id;
}

?>
<html>
<head>
    <title>SWAP API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div style="padding:40px 20px 20px 60px; width:700px;">

    <h3>Star Wars characters’ attributes - swapi api</h3>
    <table class="table table-striped" style="border:2px solid black;">
    <tr>
        <th scope="col">Name</th>
        <th scope="col"> Height</th>
        <th scope="col"> Mass</th>
        <th scope="col"> Hair color </th>
        <th scope="col"> More details</th>
    </tr>
        <?php echo $tbl; ?>
    </table>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>