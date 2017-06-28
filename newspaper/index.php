<?php session_start(); ?>
<div class="logo_area">
<img src="ds_s_black.jpg" width="100px" height="95px">
<img src="logo.png" width="250px" height="95px">
</div>
<div class="menu<-area">
	<ul>
		 <li><a href="">Home</li>
		  <li><a href="">Abroad news</li> 
		   <li><a href="">Bangladesh news</li>
		    <li><a href="">Fun</li>
		     <li><a href="">Sports</li>
		      <li><a href="">Contact us</li>

		      <?php
		      		if ($_session['username']) {
		      			echo "<li><a href= 'dashboard.php'>post something</a></li>";
		      			echo "<li><a href= 'logout.php'>logout</a></li>";
		      		}
		      ?>
	</ul>

</div>