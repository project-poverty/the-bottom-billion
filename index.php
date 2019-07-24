<?php
require("common.php");

// Redirects the user to choice page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: choice.php');
}

?>

<!DOCTYPE html>

<html>
    
<head>
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     
<!--jQuery library--> 
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  
<!--Latest compiled and minified JavaScript--> 
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
       
<title>The Bottom Billion</title>
<style>
.footer{
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    text-align:center;
    bottom: 0;
    width: 100%;
}
h2{
    text-align: right;
}
.reason{
    color: white;
    background-color: #67E6Dc;
}
</style> 
</head>
<body>
<?php
include 'header.php';
?>
<div class="container-fluid">

    <div class="thumbnail">      
        <img src="1.jpg" alt="Poverty">
   
        <div class="caption">
         
            <h1><strong>FIGHT WITH POVERTY</strong></h1>
 
            <p>Join THE BOTTOM BILLION in our effort to end the poverty from our life.</p>

        </div>
        <div class="button">
            <button type="button" name="join" class="btn btn-warning"><a href="login.php">JOIN US</a></button>
     
        </div>

    </div>                     
      
       



</div> 
<div class="container-fluid">
    <div class="caption">
        <h1><strong>COUNTRIES IN CRISIS</strong></h1>
        <img src="6.jpg" alt=""><br><br><br>
    </div>
    <div class="button">
        <button type="button" name="map" class="btn btn-warning"><a href="https://howmuch.net/articles/people-living-in-extreme-poverty-2018" target="_blank">VIEW FULL MAP</a></button>   
    </div>
</div> 
<div class="row">
    <div class="container">
        <h1><strong>"POVERTY IS THE WORST FORM OF VIOLENCE"</strong></h1>
        <h2><strong>-MAHATMA GANDHI</strong></h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h1><strong>WHY POVERTY?</strong></h1>
            <p>Poverty is not having enough material possessions or income for a person's needs. Poverty is a multifaceted concept, which may include social, economic, and political elements.<br><br>
Absolute poverty is the complete lack of the means necessary to meet basic personal needs, such as food, clothing and shelter.The threshold at which absolute poverty is defined is always about the same, independent of the person's permanent location or era.<br><br>
Governments and non-governmental organizations try to reduce poverty. Providing basic needs to people who are unable to earn a sufficient income can be hampered by constraints on government's ability to deliver services, such as corruption, tax avoidance, debt and loan conditionalities and by the brain drain of health care and educational professionals. Strategies of increasing income to make basic needs more affordable typically include welfare, economic freedoms and providing financial services...<a href="https://en.wikipedia.org/wiki/Poverty" target="_blank">Read More</a>
</p>
        </div>
        <div class="col-md-6 col-sm-12 reason">
            <h1><strong>REASONS TO CARE</strong></h1>
            <ul>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Hunger" target="_blank">World Hunger</a></h3></li>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Education" target="_blank">Education</a></h3></li>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Impact_on_health_and_mortality" target="_blank">Impact on health and mortality</a></h3></li>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Shelter" target="_blank">Shelter</a></h3></li>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Utilities" target="_blank">Utilities</a></h3></li>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Violence" target="_blank">Violence</a></h3></li>
                <li><h3><a href="https://en.wikipedia.org/wiki/Poverty#Discrimination" target="_blank">Discrimination</a></h3></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <h1><strong>NEWSROOM</strong></h1>
    <ul>
        <li><h3><a href="https://www.livemint.com/news/india/mutlidimensional-poverty-halved-in-10-years-in-india-un-report-1562915068412.html" target="_blank">Multidimensional <strong>poverty</strong> halved in 10 years in India: UN Report</a></h3>
            <p>Incidence of multidimensional poverty almost halved between 2005-06 and 2015-16, climbing down to 27.5%, indicating that the number of ...</p>
        <li><h3><a href="https://www.bbc.com/news/uk-politics-49011406" target="_blank">Labour pledges to end in-work <strong>poverty</strong> in first five years</a></h3>
            <p>Labour is pledging to end in-work poverty within its first five years in office if it wins the next election. In a speech in London, John McDonnell ...</p>
        <li><h3><a href=<li><h3><a href="https://www.bbc.com/news/uk-politics-49011406" target="_blank">Labour pledges to end in-work <strong>poverty</strong> in first five years</a></h3>
            <h5>The Centre told Lok Sabha on Wednesday it was not in favour of continuing with the MGNREGA scheme forever as it was for the poor ...</h5>
    </ul>
    <button type="button" name="news" class="btn btn-warning"><a href="newsroom.php">VIEW ALL</a></button>

</div>
<div class="container">
    <div class="content">
        <h1><strong>WANTED: YOUR VOICE</strong></h1>
        <p>Join THE BOTTOM BILLION Network to find out how you can get involved in your own community while making a difference in the lives of people around the world.</p>
        <img src="10.jpg" alt=""><br><br>
    </div>
    <div class="button1">
        <button type="button" name="join" class="btn btn-warning"><a href="login.php">GET INVOLVED</a></button><br><br>

    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h1><strong><a href="about.php">ABOUT US</a></strong></h1>
            <ul>
                <li><h3><a href="vision.php">Mission & Vision</a></h3></li>
                <li><h3><a href="leadership.php">Leadership</a></h3></li>
                <li><h3><a href="partners.php">Partners</a></h3></li>
                <li><h3><a href="newsroom.php">News,Blogs & Stories</a></h3></li>
                <li><h3><a href="faq.php">FAQ</a></h3></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <h1><strong><a href="donate.php">HOW YOU CAN HELP</a></strong></h1>
            <ul>
                <li><h3><a href="donate.php">Donate Now</a></h3></li>
                <li><h3><a href="donate.php">Give Monthly</a></h3></li>
                <li><h3><a href="products.php">Gift Catalog</a></h3></li>
                <li><h3><a href="login.php">Get Involved</a></h3></li>
                <li><h3><a href="signup.php">Become a Corporate Partner</a></h3></li><br><br>
            </ul>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>