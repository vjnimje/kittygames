<div class="container">
	<div class="row">
		<div class="col-md-4"><h6 align="center">Completed Games</h6></div>
		<div class="col-md-4"><h6 align="center">Running Games</h6></div>
		<div class="col-md-2"><h6 align="center">Games Options</h6></div>
		<div class="col-md-2"><h6 align="center"></h6></div>
	</div>
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<div id="myTest">
				<?php 
        			foreach ($game->result() as $row){ ?>
					<img style="margin-top: 2rem" id="id1" src="<?php echo base_url()?>assets/upload/gameone/<?php echo $row->blur_image;?>" alt="Image Not Found !">
					
				<?php	}?>
			</div>			
		</div>
		<div class="col-md-2">
			<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success" disabled/>Shuffle</button>
			<!-- <a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary" href="<?php echo base_url();?>gameone/result"> Show</a> -->
			<?php
				echo form_open('gameone/result/'.$this->uri->segment(0));
					foreach($game->result() as $row){ ?>
						<input type="hidden" name="game_id" value="<?php echo $row->game_id;?>">
						<input style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary" type="Submit" name="game_button" value="Show">
						<?php } 
				echo form_close();
			?>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning disabled" href="#"> Start</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="#">Completed</a>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
