<?php
include("component/header.php");
?>
<style>  input {
    padding: 10px;
    border: 2px solid #3498db;
    border-radius: 5px;
    outline: none;
    transition: box-shadow 0.3s ease;
  }
  
  input:focus {
    box-shadow: 0 0 22px rgba(219, 105, 52, 0.952);
    border-color: #a6b929;
  }
  </style>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
        login
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
				<form method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							login
						</h4>

                        
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="uemail" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="upassword" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>
                       

						

				    	<button type="submit" name="login" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

			
			</div>
		</div>
	</section>
<?php
include("component/footer.php")
?>