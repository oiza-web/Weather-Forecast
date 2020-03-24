<?php
if($_GET['city']){
  $forecastPage= file_get_contents('http://completewebdevelopercourse.com/locations/London');

  $PageArray= explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);


  $SecondPageArray= explode('</span></span></span></p>' , $PageArray[1]);

  $weather= $SecondPageArray[0];
}

else($_GET['city'])
{
 $forecastPage= file_get_contents('https://www.bbc.com/weather')
}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Weather Scraper</title>
    <style type="text/css">
    html { 
              background: url(background.jpg) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
          }


    body{
        background: none;
      }

      .container{
        text-align: center;
        margin-top: 100px;
        width: 450px;
      }

      input{
        margin: 20px 0px;
      }

      #weather {
        margin-top:15px;
      }
</style>

  </head>
  <body>
    <div class="container">
    <h1>What's The Weather?</h1>
    <p></p>

    <form>
    
  <div class="form-group">
    <label for="city">Enter the name of a city</label>
    <input type="text" class="form-control" id="city" placeholder="Eg. London, Tokyo" name= "city">
    
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <div id='weather'>
  <?php
  if($weather){
    echo '<div class="alert alert-success" role="alert">
    '.$weather.'</div>';
  }
  
  ?>
  
  </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
