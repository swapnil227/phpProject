

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ScoreBoard</title>

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/index.css"/>

  </head>
  <body>
    <!--Whole Container -->
    <div class="rca-container rca-margin">
      
      <!--Live ScoreBoard -->
      <div class="rca-row">
        <?php
        $matchURL="https://cricapi.com/api/matches?apikey=fRrjaW2UWzc7Yq69rWLUvcAz7Sz2";
		  	$resultMatch=file_get_contents($matchURL);
		  	$resultMatch=json_decode($resultMatch); 
        ?>
        <div class="rca-column-6">
          <?php
		  foreach($resultMatch->matches as $matchess){
		 // print_r("printing another match");
		  //var_dump($matchess);
		  ?>
		  <div class="rca-mini-widget rca-history-info">
			<div class="rca-row">
               <div style="padding:20px;font-size:20px;"> <?php echo $matchess->{'team-1'}?> vs <?php echo $matchess->{'team-2'}?></div>
			   <?php
			   if($matchess->{'matchStarted'}==1){
				 ?><br/>
				 <div style="padding:17px;"><a href="detail.php?uid=<?php echo $matchess->{'unique_id'}?>" style="color:red;"><?php echo "View Details"?></a></div>
				 <?php  
			   }
			   ?>
            </div>
          </div>
		  <?php } ?>
		</div>

	  </div>
    </div>
 
    
  </body>
</html>