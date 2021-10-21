<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <div id="formFooter">
      
    </div>
    <!-- Icon -->
 <!--    <div class="fadeIn first">
      <img src="#" id="icon" alt="User Icon" />
    </div> -->

    <!-- Login Form -->
    <span class="text-success"> <?php echo $this->session->flashdata("message");?></span>
    <span class="text-danger"><?php echo $this->session->flashdata("error");?></span>
    <form method="post" action="<?php echo base_url();?>admin/login_validation">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>