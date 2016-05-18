<div class="slider-sec" style="background: url(<?php echo base_url('images/slider-background.jpg')?>) no-repeat scroll center top;">
	<div id="slider" class="flexslider">
		<ul class="slides">
		  <li style="background: url(<?php echo base_url('images/slider/sl-1.jpg')?>) no-repeat scroll center top;">
				<h2>Lot's of Courses and Thousand of Exams</h2>
				<p>Biuld your career on <?php echo $core->company;?> with hudred of courses and thousand of exams. Make score and pass get a certificate of demonstration of your knowledge.</p>
				<a href="courses.php" class="button button-red ">Learn More</a>
		  </li>
		  <li style="background: url(<?php echo base_url('images/slider/sl-2.jpg')?> no-repeat scroll center top;">
				<h2>Online Certification and Skill Testing for Individuals</h2>
				<p><?php echo $core->company;?> is a leader in Online Certification and Skill Testing and offers an affordable and efficient way for people to prove their expertise in over 300 widely accepted online certifications.</p>
				<a href="exams.php" class="button button-red ">Learn More</a>
		  </li>
		  <li style="background: url(<?php echo base_url('images/slider/sl-3.jpg')?> no-repeat scroll center top;">
				<h2>Get Certified and Give your job prospects a Boost</h2>
				<p><?php echo $core->company;?> certifications have been taken by over 2 million individuals in more than 60 countries. <?php echo $core->company;?> certifications are an excellent way of demonstrating your knowledge and skills to prospective employers and greatly boost your chances of moving ahead in your career.</p>
				<a href="resources.php" class="button button-red ">Learn More</a>
		  </li>
		</ul>
	</div>
</div>

<div class="headline">
	<h1>Boost Your Career With Exam Board</h1>
</div>

<div class="features clearfix">
    <div class="col grid_8">
		<p><i class="fa fa-camera-retro feature-icon"></i></p>
		<h3>More Courses & Exam</h3>
		<p>Biuld your career on Exam Board with hudred of courses and thousand of exams. Make score and get a certificate of demonstation of your knowledge.</p>
    </div>
    <div class="col grid_8">
		<p><i class="fa fa-camera-retro feature-icon"></i></p>
		<h3>Online Certification</h3>
		<p>Biuld your career on Exam Board with hudred of courses and thousand of exams. Make score and get a certificate of demonstation of your knowledge.</p>
    </div>
    <div class="col grid_8">
		<p><i class="fa fa-camera-retro feature-icon"></i></p>
		<h3>Boost Your Career</h3>
		<p>Biuld your career on Exam Board with hudred of courses and thousand of exams. Make score and get a certificate of demonstation of your knowledge.</p>
    </div>
</div>

<div class="call-to-action clearfix">
	<h1>Get started today with a free course program!</h1>
	<ul class="list-separator">
	  <li>Get Certified <span class="separator">|</span></li>
	  <li> Explore Marks <span class="separator">|</span> </li>
	  <li> Explore Success</li>
	</ul>
	<a href="register.php" class="button button-green">Register Now!</a>
</div> 

  
  
<div  class="box" id="loginbox">
  <div id="msgholder2">test msg</div>
  <form method="post" id="login_form" name="login_form" class="xform">
    
	<header>Login to your user account</header>
	
    <section>
      <div class="row">
        <div class="col col-3">
          <label>Username');?></label>
        </div>
        <div class="col col-9">
          <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
            <input  type="text" name="username" placeholder="Username">
          </label>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col col-3">
          <label>Password</label>
        </div>
        <div class="col col-9">
          <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
            <input type="password"  name="password" placeholder="**********">
          </label>
        </div>
      </div>
    </section>
    <footer>
      <div class="row">
        <div class="col col-4">
          <button id="do-passreset" type="button" class="button button-red doleft">Reset Password</button>
        </div>
        <div class="col col-8">
          <button type="submit" name="dosubmit" class="button">Login</button>

          <a href="register.php" class="button button-secondary">Register</a>
        </div>
      </div>
    </footer>
    <input name="doLogin" type="hidden" value="1" />
  </form>
</div>
<div id="show-passreset" style="display:none">
  <p class="pagetip"><i class="icon-lightbulb icon-3x pull-left"></i> Login infor</p>
  <div  class="box">
    <form class="xform" id="admin_form" method="post">
      <header> Login</header>
      <section>
        <div class="row">
          <div class="col col-3">
            <label>Username</label>
          </div>
          <div class="col col-9">
            <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
              <input  type="text" name="uname" placeholder="Username">
            </label>
          </div>
        </div>
      </section>
      <section>
        <div class="row">
          <div class="col col-3">
            <label>Email</label>
          </div>
          <div class="col col-9">
            <label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
              <input  type="text" name="email" placeholder="Email">
            </label>
          </div>
        </div>
      </section>
      <section>
        <div class="row">
          <div class="col col-3">
            <label>Captcha</label>
          </div>
          <div class="col col-9">
            <label class="input"> <img src="lib/captcha.php" alt="" class="captcha-append" /> <i class="icon-prepend icon-eye-open"></i>
              <input type="text" name="captcha" placeholder="Captcha">
            </label>
          </div>
        </div>
      </section>
      <footer>
        <button class="button" name="dosubmit" type="submit">Submit</button>
      </footer>
    </form>
  </div>
</div>