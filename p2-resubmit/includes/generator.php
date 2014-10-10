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
  <form class="fillableform1" id="generatepassword" action="index.html" method="post">


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
              <h4><label name="upperCase">Uppercase first letters?</label>
        <input type="checkbox" name="upperCase" value="upperCase" <?php echo ($upperCase) ? "checked='checked'" : "" ; ?> /></h4>
        </p>
					
                
             </div>



<!-- Col-2 input-->
                <div class="col-sm-4 col-xs-12 form-group col-2">
                          
                <p>
              		<select class="form-control" id="numberOfchar" name="numberOfchar" >
                    	<option value="0"> How many Special Characters Required?</option>
					    <option value="1" <?php if($numberOfChar == 1){ echo "selected"; } ?> >1</option>
					    <option value="2" <?php if($numberOfChar == 2){ echo "selected"; } ?> >2</option>
					    <option value="3" <?php if($numberOfChar == 3){ echo "selected"; } ?> >3</option>
					    <option value="4" <?php if($numberOfChar == 4){ echo "selected"; } ?> >4</option>
					    <option value="5" <?php if($numberOfChar == 5){ echo "selected"; } ?> >5</option>
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
               
          
               </div>
               
               <!-- submit button in column -->

                <div class="col-sm-4 col-xs-12 form-group col-3">
                <p></p><p></p>
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
          
        <!--Jumbotron answer-->  
		<div class="row">
			
		  	<div class="col-md-12 col-xs-12">
		  		
		 		<div class="jumbotron answer text-center">
		  			<?php echo $answer; ?>
		  		</div>
		  		
		  	</div>

		</div>
 
          
          


	