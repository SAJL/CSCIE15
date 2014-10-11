<?php 
require 'includes/logic.php';
?>
<!--CSCIE15-Fall2014-Project2-LedouxSarah-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEDOUX-Project 2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">

<!--Navigation Bar-->
		<?php include("includes/navigation.php"); ?>
<!--end nav bar items and dropdowns-->


<!--XKCD Password Generator explination-->      
		<?php include("includes/explination.php"); ?>
<!--End XKCD Stype Password Generator Explination-->
</div>
<!--Password Generator content-->
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


<!--dropdown-->
    <form method="POST" action="index.php">

<!--Col-1 input-->
        <div class="col-sm-6 col-xs-12 form-group col-1">
          <p>
            <h3 style="float:right">
              <input type="checkbox" name="upperCase" value="upperCase" <?php echo ($upperCase) ? "checked='checked'" : "" ; ?> />
              <label style="padding-left:10px" name="upperCase">Uppercase first letters?</label>
            </h3>
                
            <h3>How many words?</h3>
            <select class="form-control" id="numberOfWords" name="numberOfWords" >
              <option value="0">Please choose a value</option>
					    <option <?php echo ($numberOfWords) == 1 ? 'selected="selected"' : ''; ?> value='1'>1</option>
					    <option <?php echo ($numberOfWords) == 2 ? 'selected="selected"' : ''; ?> value='2'>2</option>
					    <option <?php echo ($numberOfWords) == 3 ? 'selected="selected"' : ''; ?> value='3'>3</option>
					    <option <?php echo ($numberOfWords) == 4 ? 'selected="selected"' : ''; ?> value='4'>4</option>
					    <option <?php echo ($numberOfWords) == 5 ? 'selected="selected"' : ''; ?> value='5'>5</option>
					 </select>
           </p>
                
          <p>
          <h3>How many numbers?</h3>
					<select class="form-control" id="numberOfNumbers" name="numberOfNumbers" >
						  <option value="0">Please choose a value</option>
					    <option <?php echo ($numberOfNumbers) == 1 ? 'selected="selected"' : ''; ?> value='1'>1</option>
              <option <?php echo ($numberOfNumbers) == 2 ? 'selected="selected"' : ''; ?> value='2'>2</option>
              <option <?php echo ($numberOfNumbers) == 3 ? 'selected="selected"' : ''; ?> value='3'>3</option>
              <option <?php echo ($numberOfNumbers) == 4 ? 'selected="selected"' : ''; ?> value='4'>4</option>
              <option <?php echo ($numberOfNumbers) == 5 ? 'selected="selected"' : ''; ?> value='5'>5</option>
					 </select>
          </p>
        </div>


<!-- Col-2 input-->
       <div class="col-sm-6 col-xs-12 form-group col-2">
          <p>
          <h3>How many special characters?</h3>
            <select class="form-control" id="numberOfCharacters" name="numberOfCharacters" >
              <option value="0">Please choose a value</option>
					    <option <?php echo ($numberOfCharacters) == 1 ? 'selected="selected"' : ''; ?> value='1'>1</option>
              <option <?php echo ($numberOfCharacters) == 2 ? 'selected="selected"' : ''; ?> value='2'>2</option>
              <option <?php echo ($numberOfCharacters) == 3 ? 'selected="selected"' : ''; ?> value='3'>3</option>
              <option <?php echo ($numberOfCharacters) == 4 ? 'selected="selected"' : ''; ?> value='4'>4</option>
              <option <?php echo ($numberOfCharacters) == 5 ? 'selected="selected"' : ''; ?> value='5'>5</option>
					</select>
          </p>      
          
          <br>
            
          <p style="float:right">
          <button style="padding:20px" class="btn btn-warning btn-lg" input type="submit" name="generate" id="generatebtn">Generate!</button>
          </p>
           
				</div>
               
      </td></tr></tbody></table>
    </div></div></div>
          
<!--Jumbotron answer-->  
		<div class="row">
			<div class="col-md-12 col-xs-12">
		  		<div class="jumbotron answer text-center">
		  		<?php echo $answer; ?>
		  		<br>
		  		</div>
		  	</div>
      </div>
    </form>
<!--End Password generator content-->
        
<!--Start Footer-->
		<?php include("includes/footer.php"); ?>
<!--end footer-->

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

    //Auto Hide Explination          
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





