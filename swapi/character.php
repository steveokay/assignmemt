<?php

    $url = "https://swapi.dev/api/people/".$_GET['id']."/";
        
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    $result = json_decode($response);

    //print_r($result);
    $file_lines = file('favourites.txt');
    $get_favourites = $file_lines[0];

    $fav = explode(",",$get_favourites);

    $heart = 0;
    
    if(in_array($_GET['id'],$fav)){
        $heart = 1;
    }

?>

<html>
<head>
    <title>SWAP API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div style="padding:40px 20px 20px 60px; width:700px;">

    <h3>More Details</h3>
    <img src="images/avatar.jpg" width="240" height="240" style="border:1px solid black;" />
    <br/><br/>
     
    <?php
        if($heart == 1){
    ?>
            <input type="submit" value="Remove from Favourite" class="fav-btn" style="border: 1px solid black;background-color:orange;" /> &nbsp;&nbsp;
            <img src="images/heart.jpg" width="40" height="40" style="border:1px solid black;" />
    <?php
        } else{
            echo "<input type=\"submit\" value=\"ADD TO FAVOURITE\" class=\"fav-btn\" style=\"border: 1px solid black;background-color:orange;\" /> &nbsp;&nbsp;";
        }
    ?>
    <br/><br/>
    <table class="table table-striped" style="border:2px solid black;">
    <tr> <td><b>Name</b></td> <td> <?php echo $result->name ?> </td> </tr>
    <tr> <td> <b>Height</b> </td> <td> <?php echo $result->height ?> </td> </tr>
    <tr> <td> <b>Mass</b> </td> <td> <?php echo $result->mass ?> </td> </tr>
    <tr> <td> <b>Hair color</b> </td> <td> <?php echo $result->hair_color ?> </td> </tr>
    <tr> <td> <b>Eye color</b> </td> <td> <?php echo $result->eye_color ?> </td> </tr>
    <tr> <td> <b>Year Of birth</b> </td> <td> <?php echo $result->birth_year ?> </td> </tr>
    <tr> <td> <b>gender</b> </td> <td> <?php echo $result->gender ?> </td> </tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</div>
</body>
</html>