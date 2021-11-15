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
        			foreach ($game->result() as $row){ ?>
        				
        					<!-- <div class="btn btn-outline-primary" style="width:100%; margin:2rem 0rem; padding:1rem;"><?php echo $row->questions;?></div> -->

        					<?php echo form_open('gamethree/g_option/'.$this->uri->segment(0));?>
								<input type="hidden" name="game_id" value="<?php echo $row->game_id;?>">
								<input class="btn btn-outline-primary col-md-12" style="white-space:normal; padding:1rem; margin: 2rem 0rem;" type="Submit" name="game_button" value="<?php echo $row->questions;?>">
								<?php echo form_close();?>
        				<?php
        					}?>
			</div>			
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-2 myborder">
			<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
			<button id="btn-2" onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" disabled/>Shuffle</button>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Show</a>
			<a id="btn-3" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="<?php echo base_url();?>gamethree"> Continue</a>
			<a id="btn-4" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" href="<?php echo base_url();?>gamethree/reset">Reset Game</a>
		</div>
		
	</div>
</div>
