	<div class="container">
		<div class="row">
			<div class="col-md-4">
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
			<div class="col-md-4">
				<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
				<div class="align-self-center">
					<?php
					echo form_open('gameone/play/'.$this->uri->segment(0));?>
					<div id="mydiv">
						<?php
						foreach($a->result() as $row){
							?>
							<input class="btn btn-outline-success shuffleMe" style="margin:2rem; padding:1rem;" type="Submit" name="game_button" value="<?php echo $row->game_id;?>">
						<?php } ?>
					</div>
						<?php	echo form_close();
					?>
				</div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
				<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success">Shuffle</button>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary disabled" href="#"> Show</a>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning disabled" href="#"> Start</a>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="<?php echo base_url();?>gameone/reset">Reset</a>
			</div>
		</div>
		
	</div>