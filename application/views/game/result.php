<div class="container">
		<?php 
		if ($original_answer == $given_answer) {?>
			<div class="alert alert-success" role="alert">
				<h1 align="center"> <?php echo $this->session->flashdata("message");?></h1>
			</div>
			<?php
		} else {?>
			<div class="alert alert-danger" role="alert">
				<h1 align="center"> <?php echo $this->session->flashdata("message");?> The Correct Answer is <strong><?php echo $original_answer;?></strong>  And you given <strong><?php echo $given_answer;?></strong> </h1>
			</div>
		<?php }
		
		?>
	  
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<img class="play_image" src="<?php echo base_url()?>assets/upload/game/<?php echo $original_image;?>">
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>