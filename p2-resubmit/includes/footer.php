<!--footer-->
        <footer class="row">
               	<p><span class="glyphicon glyphicon-copyright-mark"></span> 2014 SAJL</p>
				<?php  
    			ECHO 'The host server is morpheus.dce.harvard.edu and the path is ' . $_SERVER['REQUEST_URI']; 
				ECHO '<br>';
				ECHO 'This document was last modified ' . DATE("F d Y H:s", getlastmod());
    			?>
        </footer>
<!--end footer-->