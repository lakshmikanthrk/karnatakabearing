<?php include 'header.php';?>

<div class="booking">
	<div class="container">
		<h2>Book Appointment</h2>
		<div class="row bok">
			<div class="col-md-7">
				<img src="<?=base_url()?>assets/images/clinic.jpg">
			</div>
			<div class="col-md-5">
				  <form action="<?php echo base_url('Welcome/user_register')?>" method="post">
    <label>
    <p class="label-txt">Enter Your Name</p>
    <input type="text" class="input" name="name">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
    <label>
    <p class="label-txt">Enter Your Number</p>
    <input type="text" class="input" name="number">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
    <label>
    <p class="label-txt">Enter Your Age</p>
    <input type="text" class="input" name="age">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Email</p>
    <input type="email" class="input" name="email">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Password</p>
    <input type="password" class="input" name="password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" name=submit class="btn btn-success">submit</button>
</form>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>