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





