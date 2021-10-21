<div class="container">
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<div id="myTest">
				<?php 
        foreach ($game->result() as $row){ ?>
					<img id="id1" class="blur_image" src="<?php echo base_url()?>assets/upload/game/<?php echo $row->game_image;?>" alt="Image Not Found !">
					
				<?php	}?>
			</div>
			<div>
				<?php 
        			foreach ($game->result() as $row){
        				echo form_open('gameone/result/'.$this->uri->segment(0));
        				?>
        				<input type="hidden" name="game_id" value="<?php echo $row->game_id;?>">
        				<?php
        				$myString = $row->game_option_answer;
			        	$myArray = explode(',', $myString);
			       			foreach ($myArray as $key) { ?>
				        	<input class="btn btn-outline-success" style="margin:1rem; padding:0.7rem;" type="Submit" name="game_answer" value="<?php echo $key;?>">
			        	<?php }?>
			        	<?php echo form_close();
        		}?>
			</div>
			
		</div>
	</div>
</div>
