	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-4">
				<div class="align-self-center">
					<?php
					echo form_open('game/play/'.$this->uri->segment(0));?>
					<div id="mydiv">
						<?php
						foreach($h->result() as $row){
							?>
							<input class="btn btn-outline-success shuffleMe" style="margin:2rem; padding:1rem;" type="Submit" name="game_button" value="<?php echo $row->game_id;?>">
						<?php } ?>
					</div>
						<?php	echo form_close();
					?>

				</div>
				
			</div>
			<div class="col-md-2">
				<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success">Shuffle</button>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary" href="#"> Show</a>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning" href="#"> Start</a>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="#">Completed</a>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>