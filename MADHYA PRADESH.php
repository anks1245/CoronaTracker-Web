<?php

$data2=file_get_contents('https://api.covid19india.org/state_district_wise.json');
$coronadata2=json_decode($data2,true);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid19india(Madhya Pradesh)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
        <center>CORONA LIVE UPDATE, INDIA</center>
        <div class="checkbox1">
            <label for="check" class="checkbtn"><i class="fa fa-align-justify" style="font-size:36px"></i></label>
        </div>
        
    </header>
    
    <nav>
        <input type="checkbox" id="check">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="statewise.php">Statewise</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="#">About</a></li>
            <li><a href="message.html">Contact</a></li>
        </ul>
    </nav>
    <div class="autocomplete"> 
        <form action="#" id="searchform" method="GET" autocomplete="off">
            <input class="search2" id="myInput" type="search" name="search" maxlength="255" placeholder="Search a state">
            <button class="searchbtn" id="btn"><i class="fa fa-search" style="font-size:24px"></i></button>
        </form>
    </div>
    <script src="search.js"></script>
    <h1>Madhya Pradesh</h1>
    <?php foreach($coronadata2["Madhya Pradesh"]["districtData"] as $district => $data){ ?>
        <div class="districtbox">
            <h2><?php echo "{$district}"; ?></h2>
            <div class="databox1">
                <?php foreach ($data as $key => $value) { ?>
                    <div class="mbox">
                        <div class="lbox"><?php echo "{$key} :"; ?></div>
                        <div class="rbox"><?php echo "{$value}"; ?></div>
                    </div>
                <?php error_reporting(0);
                } 
                ?>
            </div>
        </div>
    <?php 
    }   ?>
    <footer>

    </footer>
</body>
</html> 