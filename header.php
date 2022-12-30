<?php 
require_once ("connect.php");
?>
<header>
    <div id="top-header">
		<div class="container">
				<ul class="header-links pull-left">
					<li><a href="tel:+020-120-772-0010"><i class="fa fa-phone"></i> +020-120-772-0010</a></li>
					<li><a href="mailto:email@email.com"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
					<li><a href="https://www.google.com/maps/place/30%C2%B000'47.9%22N+31%C2%B012'29.4%22E/@30.0133029,31.2126637,17z/data=!3m1!4b1!4m14!1m7!3m6!1s0x14583fa60b21beeb:0x79dfb296e8423bba!2z2KfZhNmC2KfZh9ix2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!3b1!8m2!3d30.0444196!4d31.2357116!3m5!1s0x0:0xef114a0b03528cb4!7e2!8m2!3d30.013303!4d31.208179" target="blank"><i class="fa fa-map-marker"></i> Cairo city Egypt</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> EGP</a></li>
					<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
				</ul>
		</div>
	</div>

    <div class="header">
        <div class="container">
            <div class="logo"><img src="img/logo.png" width="300px" height="100px" alt=""></div>
            <div class="srch">
			
			
			
			<form method="post" action="search_result.php">
				<select class="input-select">
					
					<option  value="0">All Categories</option>
					<?php 
					
					$catg=$con->query("SELECT * FROM cat");
                    while ($row = $catg->fetch_array(MYSQLI_ASSOC)) {
                    ?>
					<option  value="1"><?php echo $row['full']?></option>
					<?php }?>
				</select>
			<input class="input" name="search" type="search" placeholder="Search here">
				<input type="submit" name="btn_search" class="search-btn">Search</input>
			</form>
			
		</div>
        </div>
       

        </div>

    </div>
	<div class="body">
      <ul class="menu">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php">Categories</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="new_arraival.php">New Arrival</a></li>
    
    </ul>
	</div>
    
</header>


