<?php

include('logic.php');

?>

<!doctype html>
<html lang="en">
  <head>
  <!--CSCIE15-Fall2014-Project2-LedouxSarah-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEDOUX-Project 2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

<!--Navigation Bar-->
    	<div class="row">
          <nav class="navbar navbar-warning navbar-inverse" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="glyphicon glyphicon-hand-down"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"></span><br>Home/Project 1<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li><a href="https://github.com/SAJL/CSCIE15.git">Git</a></li>
                          <li><a href="http://sarahledoux.com/hes/cscie15/p1">Live URL</a></li>
                       </ul>
                     </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-comment"></span><br>Project 2<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li><a href="#">Git</a></li>
                          <li><a href="http://sarahledoux.com/hes/cscie15/p2">Live URL</a></li>
                       </ul>
                    </li>
                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-center"></span><br>Project 3<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li><a href="#">Git</a></li>
                          <li><a href="#">Live URL</a></li>
                       </ul>
                     </li>
                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-compressed"></span><br>Project 4<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li><a href="#">Git</a></li>
                          <li><a href="#">Live URL</a></li>
                       </ul>
                     </li>
                </ul>
              </div>
            </nav>
        </div>
      
		<div class="row">
		  	<div class="col-xs-12 text-center">
		 	  	<h1>xkcd style password generator</h1>
		  	</div>
            <hr>
      <!--Show/hide buttons-->            
         <p>
         <a href="#" class="btn btn-warning btn-sm" id="hidebtn">Ok, Thanks.</a>
         <a href="#" class="btn btn-warning btn-sm" id="showbtn">Learn more!</a>
         </p>

		  	<div class="col-xs-12 text-center" id="explaination">
               <table>
                <thead>
                  <tr>
                    <th>This page will generate a new password for you which is easy to remeber, and hard for a machine or human to guess. This is based on the theory that memory devices for a string of random words are less forgetable by you and more secure from hackers.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>http://en.wikipedia.org/wiki/Passphrase#Compared_to_passwords</td>
                  <td>http://en.wikipedia.org/wiki/Xkcd</td>
                    <td>
                    <p>You can read more about the inspiration and theory here: <a href="http://xkcd.com/936/" target="_blank">XKCD Password Strength</a></p>
        <a href="http://xkcd.com/936/" target="_blank">
            <img class="comic" src="http://imgs.xkcd.com/comics/password_strength.png" >
        </a></td>
                  </tr>
                </tbody>
              </table>
		 	  	
    </div>
</ br>
		  	</div>
		</div>
        <!--form/table-->
<h3>Ready to generate your password?</h3>
           <hr>
            <div class="row clearfix">
              <div class="span12">
           <div class="table-responsive col-xs-12">
              <table width="100%" class="table" id="form-table">
                <thead>
                  <tr>
                    <th>Answer a few simply questions and your password will appear in the yellow box</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <br>
  <form class="fillableform1" id="generatepassword" action="index.php" method="post">


<!--dropdown-->
<div class="col-sm-4 col-xs-12 form-group col-1">

              <p>
              <!--dropdown1-->
                	<select class="form-control" id="numberOfWords" name="numberOfWords" >
                    	<option value="0"> How many words do you want?</option>
					    <option value="1" <?php if($numberOfWords == 1){ echo "selected"; } ?> >1</option>
					    <option value="2" <?php if($numberOfWords == 2){ echo "selected"; } ?> >2</option>
					    <option value="3" <?php if($numberOfWords == 3){ echo "selected"; } ?> >3</option>
					    <option value="4" <?php if($numberOfWords == 4){ echo "selected"; } ?> >4</option>
					    <option value="5" <?php if($numberOfWords == 5){ echo "selected"; } ?> >5</option>
					</select>
              </p>
              
                     <p>
              <label name="upperCase"><h4>Uppercase first letters?</h4></label>
        <input type="checkbox" name="upperCase" value="upperCase" <?php echo ($upperCase) ? "checked='checked'" : "" ; ?> />
        </p>
					
                
             </div>



<!-- Col-2 input-->
                <div class="col-sm-4 col-xs-12 form-group col-2">
                          
                <p>
              		<select class="form-control" id="numberOfchar" name="numberOfchar" >
                    	<option value="0"> How many Special Characters Required?</option>
					    <option value="10" <?php if($numberOfChar == 10){ echo "selected"; } ?> >10</option>
					    <option value="20" <?php if($numberOfChar == 20){ echo "selected"; } ?> >20</option>
					    <option value="30" <?php if($numberOfChar == 30){ echo "selected"; } ?> >30</option>
					    <option value="40" <?php if($numberOfChar == 40){ echo "selected"; } ?> >40</option>
					    <option value="50" <?php if($numberOfChar == 50){ echo "selected"; } ?> >50</option>
					</select>
                    </p>
             
              <p>
					<select class="form-control" id="numberOfNumbers" name="numberOfNumbers" >
						<option value="0">How many numbers are required?</option>
					    <option value="1" <?php if($numberOfNumbers == 1){ echo "selected"; } ?> >1</option>
					    <option value="2" <?php if($numberOfNumbers == 2){ echo "selected"; } ?> >2</option>
					    <option value="3" <?php if($numberOfNumbers == 3){ echo "selected"; } ?> >3</option>
					    <option value="4" <?php if($numberOfNumbers == 4){ echo "selected"; } ?> >4</option>
					    <option value="5" <?php if($numberOfNumbers == 5){ echo "selected"; } ?> >5</option>
					</select>
               </p>
               
               <!-- submit button in column div of name -->

               <p>
               <button class="btn btn-warning btn-lg" input type="submit" name="submitbtn" id="submitbtn">Generate</button>
               <button class="btn btn-warning btn-lg" input type="reset" name="resetbtn" id="resetbtn">Reset</button>
               </p>
               </div>


            </form>
                </td>
                  </tr>
                </tbody>
              </table>
          </div></div></div>
 
          
          


		<div class="row">
			
		  	<div class="col-md-12 col-xs-12">
		  		
		 		<div class="jumbotron answer text-center">
		  			<?php echo $answer; ?>
		  		</div>
		  		
		  	</div>

		</div>

		
    
    <!-- javascript -->
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/popover.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/button.js"></script>
    <script src="transition.js"></script>
    
      </script>
  <!--header diappear script-->
  <script>
    $(document).ready(function(){

	//Show/hide explination and controller buttons

        //Auto Hide           
        $("#explaination").hide();
		$("#hidebtn").hide();
		$("#showbtn").show();
		
		//click function
       $("#showbtn").click(function(){
             $("#showbtn").hide(1000);
             $("#explaination").show(1000);
			 $("#hidebtn").show(1500);
        });

      $("#hidebtn").click(function(){
             $("#showbtn").show(1500);
             $("#explaination").hide(1000);
			 $("#hidebtn").hide(1000);
       });//end show/hide
	  
    }); //end ready
	</script>
    

  
  </body>
</html>





