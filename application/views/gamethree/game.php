	<div class="container">
		<div class="row">
			<div class="col-md-4 myborder">
				<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
				<div class="align-self-center">
					<div id="">
						<?php
						foreach($i->result() as $row){
							
							?>
							<div class="col-md-12 shuffleMe">
								<input class="btn btn-outline-primary" style="white-space:normal; width:100%; padding:1rem; margin: 2rem 0rem;" type="Submit" name="game_button" value="<?php echo $row->questions;?>">
							</div>
						<?php
							} ?>
					</div>				
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 myborder">
				<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
				<div class="align-self-center">
					<?php
					?>
					<div id="mydiv" class="row all">
						<?php
						foreach($a->result() as $row){
							
							?>
							<div class="col-md-6 shuffleMe single">
								<?php echo form_open('gamethree/play/'.$this->uri->segment(0));?>
								<input type="hidden" name="topic" value="<?php echo $row->topic;?>">
								<input class="btn btn-outline-primary" style="width:100%; padding:1rem; margin: 2rem 0rem;" type="Submit" name="game_button" value="<?php echo $row->topic;?>">
								<?php echo form_close();?>
							</div>
						<?php
							} ?>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2 myborder">
				<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
				<!-- <button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success">Shuffle</button> -->
				<button id="btn-2" onclick="myShuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button">Shuffle All</button>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Show</a>
				<a id="btn-3" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Continue</a>
				<a id="btn-4" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" href="<?php echo base_url();?>gamethree/reset">Reset Game</a>
			</div>
			
		</div>
		
	</div>