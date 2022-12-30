<?php 
require_once ("connect.php");
?>
    
    <!-- NEWSLETTER -->
    <div id="order" class="section">
		<div class="container">
			<div class="row">
				<div class="order">
                <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form id="sub" method="get" action="#">
								<input name ="n1" class="em" type="email" placeholder="Enter Your Email">
								<button  onclick="myfun()" class="order-btn"><i class="fa fa-envelope"></i> Submit</button>
						<?php 
                            if (
                                isset($_GET['n1'])== true && $_GET['n1']!=""
                                ){
                                $n1 = $_GET['n1'];
                                $con = new mysqli("localhost", "root", "", "ecommerce");
                                if ($con->connect_errno)
                                die("connect error");
                                $r = $con->query("INSERT INTO emails VALUE ('$n1')");
                                if ($con->affected_rows == 0)
                                echo "faild";
                                }
                                
                            ?>
					</form>
				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->


    </div>