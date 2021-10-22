<?php 
foreach ($user as $row) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <head>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/shapes.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

    </head>
</head>
<body>

    <div class="navbar-light bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url();?>admin/dashboard">Kitty Game Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>admin/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url();?>gameone_admin/update_game">Game One</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url();?>gametwo_admin/update_game">Game Two</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url();?>gamethree_admin/update_game">Game Three</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url();?>admin/update_game">Update Game</a>
                    </li>
                  </ul>
                  <span class="nav-item dropdown me-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $row['name'] ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Change Password</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?php echo base_url();?>admin/logout">Logout</a></li>
                    </ul>
                  </span>
                </div>
              </div>
            </nav>
        </div>
    </div>

  <?php }?>