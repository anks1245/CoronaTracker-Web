<?php
    $data=file_get_contents('https://api.covid19india.org/data.json');
    $coronadata= json_decode($data,true);  
    /*echo "<pre>";
    print_r($coronadata["statewise"]);
    echo "</pre>";   */

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19(India,statewise)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header class="heading">
        <center>Corona Live Updates India</center>
        
    </header>
    <center>Press ctrl + f to search your state</center>

    <div class="autocomplete"> 
        <form action="" id="searchform" method="GET" autocomplete="off">
            <input class="search2" id="myInput" type="search" name="search" size="10" maxlength="255" placeholder="Search a state">
            <button class="searchbtn"><i class="fa fa-search" style="font-size:24px"></i></button>
        </form>
    </div>
        
    <script src="search.js"></script>

    <div class="container">
        <table>
            <tr class="top">
                <td class="d1">Last Updated</td>
                <td class="d1">State</td>
                <td class="d1">Cases</td>
                <td class="d1">Active</td>
                <td class="d1">Recovered</td>
                <td class="d1">Deaths</td>
            </tr>
        <?php
        $sates=count($coronadata["statewise"]);
        for($i=1;$i< $sates;$i++){    ?>
            <tr>
                <td class="newfont"><?php echo $coronadata["statewise"][$i]["lastupdatedtime"];  ?></td>
                <td class="newfont"><?php echo $coronadata["statewise"][$i]["state"];  ?></td>
                <td class="newfont"><?php echo $coronadata["statewise"][$i]["confirmed"];  ?></td>
                <td class="newfont"><?php echo $coronadata["statewise"][$i]["active"];  ?></td>
                <td class="newfont"><?php echo $coronadata["statewise"][$i]["recovered"];  ?></td>
                <td class="newfont"><?php echo $coronadata["statewise"][$i]["deaths"]; ?></td>
                
            </tr>
            <?php 
                   }   
                echo "<br>";
                ?>
        </table>
    </div>
    <footer></footer>
</body>
</html>
