<div class="container">
	<div class="row">
		<div class="col-md-4 myborder">
			<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
			
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4 myborder">
			<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
			<div id="myTest">
				<?php 
        			foreach ($game->result() as $row){ 
        				if ($row->type == 'image') { ?>
        					<img style="margin-top: 2rem; max-width: 400px; height: auto;" id="id1" src="<?php echo base_url()?>assets/upload/gameone/<?php echo $row->blur_image;?>" alt="Image Not Found !">
        				<?php }elseif($row->type == 'audio'){ ?>
        					<audio controls>
	  							<source src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->blur_image;?>" type="audio/ogg">
							</audio>
        				<?php }elseif($row->type == 'video'){ ?>
        					<video width="400" controls>
								<source src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->blur_image;?>">
							</video>
        				<?php } else {
        					echo "Unsupported Media Type";
        				}	
				}?>
			</div>			
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-2 myborder">
			<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
			<button onclick="shuffle()" id="btn-2" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" disabled/>Shuffle</button>
			<?php
				echo form_open('gameone/result/'.$this->uri->segment(0));
					foreach($game->result() as $row){ ?>
						<input type="hidden" name="game_id" value="<?php echo $row->game_id;?>">
						<input style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" type="Submit" name="game_button" value="Show">
						<?php } 
				echo form_close();
			?>
			<a id="btn-3" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Continue</a>
			<a id="btn-4" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" href="<?php echo base_url();?>gameone/reset">Reset Game</a>
		</div>
		
	</div>
</div>
