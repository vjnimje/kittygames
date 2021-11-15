	<div class="container">
		<div class="row">
			<div class="col-md-4 myborder">
				<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
				<div class="align-self-center">
					<div class="row" id="">
						<?php
						foreach($i->result() as $row){
							?><div class="col-md-6">
								<div class="<?php echo $row->shape;?> maincircle"><?php echo $row->game_id;?></div>
							</div>
						<?php } ?>
					</div>				
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 myborder">
				<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
				<div class="align-self-center" style="margin:2rem">
					<?php
					echo form_open('gametwo/play/'.$this->uri->segment(0));?>
					<div id="mydiv" class="row all">
						<?php
						foreach($a->result() as $row){
							?>
							<div class="col-md-6 shuffleMe single">
								<div class="<?php echo $row->shape;?> maincircle"><input class="shapebtn" type="Submit" name="game_button" value="<?php echo $row->game_id;?>"></div>
								<!-- <input class="<?php echo $row->shape;?>" type="Submit" name="game_button" value="<?php echo $row->game_id;?>"> -->
							</div>
						<?php } ?>
					</div>
					<?php	echo form_close();
					?>

				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2 myborder">
				<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
				<!-- <button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success">Shuffle</button> -->
				<button id="btn-2" onclick="myShuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button">Shuffle All</button>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Show</a>
				<a id="btn-3" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button disabled" href="#"> Continue</a>
				<a id="btn-4" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="popup-button" href="<?php echo base_url();?>gametwo/reset">Reset Game</a>
			</div>
			
		</div>
		
	</div>