<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-4">
			<div id="myTest">
				<?php 
        			foreach ($game->result() as $row){ ?>
					<img style="margin-top: 2rem" id="id1" src="<?php echo base_url()?>assets/upload/gameone/<?php echo $row->original_image;?>" alt="Image Not Found !">
					
				<?php	}?>
			</div>			
		</div>
		<div class="col-md-2">
			<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success" disabled/>Shuffle</button>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary disabled" href="#"> Show</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning" href="<?php echo base_url();?>gameone"> Start</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="#">Completed</a>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>