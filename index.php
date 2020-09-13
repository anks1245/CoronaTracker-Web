<?php
    $data=file_get_contents('https://api.covid19india.org/data.json');
    $coronadata= json_decode($data,true); 

    $cases=count($coronadata["cases_time_series"]);
    //echo $cases;

    $limit=$cases-2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid19india-HOME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
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
            <li><a href="homepage.php" class="active">Home</a></li>
            <li><a href="statewise.php">Statewise</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="#">About</a></li>
            <li><a href="message.html">Contact</a></li>
        </ul>
    </nav>
    <div class="autocomplete"> 
        <form action="" id="searchform" method="GET">
            <input class="search2" id="myInput" type="search" name="search" size="10" maxlength="255" placeholder="Search a state">
            <button class="searchbtn"><i class="fa fa-search" style="font-size:24px"></i></button>
        </form>
    </div>
        
    <script src="search.js"></script>
    <!--<script src="test2.js"></script>-->
    <h1>Covid-19 status in INDIA</h1>
    <div class="mcontainer">
        <div class="outcontainer">
            <center>Cases</center>
            <div class="innercontainer">
                <?php echo $coronadata["statewise"][0]["confirmed"]; ?>
            </div>
        </div>
        <div class="outcontainer">
            <center>deaths</center>
            <div class="innercontainer">
                <?php echo $coronadata["statewise"][0]["deaths"]; ?>
            </div>
        </div>
        <div class="outcontainer">
            <center>recovered</center>
            <div class="innercontainer">
                <?php echo $coronadata["statewise"][0]["recovered"]; ?>
            </div>
        </div>
    </div>
    <?php for($i=$cases-1;$i>$limit;$i--){ ?>
        <h1><?php echo $coronadata["cases_time_series"][$i]["date"]."2020 cases"; ?></h1>
        <div class="mcontainer">
            <div class="outcontainer">
                <center>Cases</center>
                <div class="innercontainer">
                    <?php echo $coronadata["cases_time_series"][$i]["dailyconfirmed"]; ?>
                </div>
            </div>
            <div class="outcontainer">
                <center>deaths</center>
                <div class="innercontainer">
                    <?php echo $coronadata["cases_time_series"][$i]["dailydeceased"]; ?>
                </div>
            </div>
            <div class="outcontainer">
                <center>recovered</center>
                <div class="innercontainer">
                    <?php echo $coronadata["cases_time_series"][$i]["dailyrecovered"]; ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="mcontainer2">
        <div class="section">
            <div class="imagecontainer1">
                <img src="rsrc/corona.jpg" class="img" alt="corona image">
            </div>
            <div class="content1">
                <center><h1>What is Coronavirus??</h1></center>
                <p><?php echo 'Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory
                     illness and recover without requiring special treatment.  Older people, and those with 
                     underlying medical problems like cardiovascular disease, diabetes, chronic respiratory 
                     disease, and cancer are more likely to develop serious illness.  
                     <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1">Readmore</a></p>' ?>
            </div>
        </div>
        <div class="section">
            <div class="imagecontainer2">
                <img src="rsrc/sd.jpg" class="img" alt="social distancing image">
            </div>
            <div class="content2">
                <h1>How it spread?</h1>
                <p><?php echo 'The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, 
                    sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.
                    You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, 
                    or by touching a contaminated surface and then your eyes, nose or mouth.</p> ' ?>
            </div>
            
        </div>
    </div>
    <div class="mcontainer3">
        <a href="statewise.php"><button class="statewisebtn">Statewise Data <div class="crcl">></div></button></a>
    </div>
    <div class="mcontainer4">
        <div class="con">
            <h1>Prevention</h1>
            <ul>
                <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
                <li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li>
                <li>Avoid touching your face.</li>
                <li>Cover your mouth and nose when coughing or sneezing.</li>
                <li>Stay home if you feel unwell.</li>
                <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>
            </ul>
        </div>
        <div class="con">
            <h1>Symptoms</h1>
            <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness
                 and recover without hospitalization.</p>
            <ul>
                <span>Common Symptoms</span>
                <ul>
                    <li>fever.</li>
                    <li>dry cough.</li>
                    <li>tiredness.</li>
                </ul>
            </ul>
            <ul>
                <span>Serious Symptoms</span>
                <ul>
                    <li>difficulty breathing or shortness of breath.</li>
                    <li>chest pain or pressure.</li>
                    <li>loss of speech or movement.</li>
                </ul>
            </ul>
            <p>On average it takes 5–6 days from when someone is infected with the virus for symptoms to show,
                 however it can take up to 14 days.</p>
        </div>
    </div>
    <div class="mcontainer5">
        <div class="leftcon">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Y9VgmhxtJFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="rightcon">
            <h1>COVID-19</h1>
            <p>Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your
             national and local public health authority. Most countries around the world have seen cases of COVID-19 and 
             many are experiencing outbreaks. Authorities in China and some other countries have succeeded in slowing their 
             outbreaks. However, the situation is unpredictable so check regularly for the latest news.<br>
            <a href="https://www.youtube.com/channel/UCsyPEi8BS07G8ZPXmpzIZrg">Click Here</a></p>
        </div>
    </div>
    <footer>
        <center><span><a href="https://nyabazar.com/#">@nyabazar-team</a></span></center>
    </footer>
</body>
</html>