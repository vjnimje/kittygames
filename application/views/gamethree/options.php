<div class="container myborder">
	<div class="row">
		<div class="col-md-4">
			<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
			
		</div>
		<div class="col-md-4">
			<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
			<div id="myTest">
				<?php 
        			foreach ($game->result() as $row){ 
        					$myString = $row->g_option;
        					$myArray = explode(',', $myString);
        					foreach($myArray as $key){
        				?>
        					
        					<!-- <div class="btn btn-outline-primary" style="width:100%; margin:2rem 0rem; padding:1rem;"><?php echo $key;?></div> -->
        					<?php echo form_open('gamethree/result/'.$this->uri->segment(0));?>
								<input type="hidden" name="game_id" value="<?php echo $row->game_id;?>">
								<input class="btn btn-outline-primary col-md-12" style="white-space:normal; padding:1rem; margin: 2rem 0rem;" type="Submit" name="game_button" value="<?php echo $key;?>">
								<?php echo form_close();?>
        				<?php }
        					}?>
			</div>			
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
			<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success" disabled/>Shuffle</button>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary disabled" href="#"> Show</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning disabled" href="<?php echo base_url();?>gamethree"> Continue</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="<?php echo base_url();?>gamethree/reset">Reset Game</a>
		</div>
		
	</div>
</div>
