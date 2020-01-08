<!DOCTYPE html>
<html>
<head>
<title>Title Page</title>
</head>
<body>
<?php
     require_once "classes/HumanityApi.php";
      $humanityApi = new HumanityApi(
        array(
          'key' => 'c8f4d783e6eaa1661d5b97754c0a02dfac7ce342' 
        )
      );
      $session = $humanityApi->getSession( );
      if( !$session )
{
	
	$response = $humanityApi->doLogin(
		array(
			'username' => 'dusanpavlovic',
			'password' => 'Password88',
		)
	);
	if( $response['status']['code'] == 1 )
	{
		$session = $humanityApi->getSession( );

	}
	else
	{
		echo $response['status']['text'] . "--" . $response['status']['error'];
	}
}
    
      
      $shifts = $humanityApi->setRequest(
        array(
          'module' => 'schedule.shifts',
          'start_date' => 'today',
          'start_date' => 'today',
          "mode" => "overview"
        )
      );
      $time_clock = $humanityApi->setRequest(
        array(
          "module"=>"timeclock.timeclocks",
          "start_date"=>"today",
          "end_date"=>"today",
          )
        );
          $today = date("Y/m/d");
          $today = explode("/", $today);
          $mount = $today[1];
          $day = $today[2];
          ?>
          <div class="wraper">
        <table style="width:100%">
            <tr>
              <th>Employee </th>
              <th>Position (Schedule)</th> 
              <th>Shift</th>
              <th>Timeclock</th>
            </tr>
           <?php 
               
                for ($i = 0 ; $i <= count($shifts['data']) ; $i++)
                {   
                  if($shifts['data'][$i]["start_date"]["month"] == $mount &&  $shifts['data'][$i]["start_date"]["day"] == $day)               
                  {      
                 
                    ?>   <tr>
                        <td> <?php echo $shifts['data'][$i]["employees"][0]["name"]  ?> </td>
                        <td> <?php echo $shifts['data'][$i]["schedule_name"]  ?> </td>
                        <td> <?php echo $shifts['data'][$i]["start_time"]["time"] . " - " . $shifts['data'][$i]["end_time"]["time"]  ?> </td>
                         <?php  
                                     
                                for ($y = 0 ; $y <= count($time_clock['data']) ; $y++){
                                
                                  if($time_clock['data'][$y]["start"]["month"] == $mount &&  $time_clock['data'][$y]["start"]["day"] == $day)               
                                  { 
                                      if($shifts['data'][$i]["id"] == $time_clock['data'][$y]["shift"] && $shifts['data'][$i]["start_time"]["time"] == $time_clock['data'][$y]["in_time"]["time"])
                                      {
                                        ?>  <td> <?php echo $time_clock['data'][$y]["in_time"]["time"] . ' - ' . $time_clock['data'][$y]["out_time"]["time"];     
                
                                      }

                                      
                                  }else {
                                   
                                    ?><td> <?php echo "/";  }               
                                       ?></td>
                                            <?php  
                                  }    ?>                    
                         </tr>           
          <?php     }          
                }
                ?>
          </table>
    </div>  
</body>
</html> 