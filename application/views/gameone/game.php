	<div class="container">
		<div class="row">
			<div class="col-md-4 myborder">
				<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
				<div class="align-self-center">
					<div id="">
						<?php
						foreach($i->result() as $row){
							?>
							<input class="btn btn-outline-danger shuffleMe" style="margin:2rem; padding:1rem;" type="button" name="" value="<?php echo $row->game_id;?>">
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 myborder">
				<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
				<div class="align-self-center">
					<?php
					echo form_open('gameone/play/'.$this->uri->segment(0));?>
					<div id="mydiv" class="all">
						<?php
						foreach($a->result() as $row){
							?>
							<input id="btn-5" class="popup-button shuffleMe single" style="margin:2rem; padding:1rem;" type="Submit" name="game_button" value="<?php echo $row->game_id;?>">
						<?php } ?>
					</div>
						<?php	echo form_close();
					?>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2 myborder">
				<div class="">
					<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
					<button onclick="myShuffle()" id="btn-2" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button">Shuffle All</button>
					<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Show</a>
					<a id="btn-3" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Continue</a>
					<a id="btn-4" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" href="<?php echo base_url();?>gameone/reset">Reset Game</a>
				</div>
				
			</div>
		</div>
		
	</div>