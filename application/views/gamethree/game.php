	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
				<div class="align-self-center">
					<div id="">
						<?php
						foreach($i->result() as $row){
							
							?>
							<div class="col-md-6 shuffleMe">
								<?php echo form_open('gamethree/play/'.$this->uri->segment(0));?>
								<input class="btn btn-outline-primary" style="width:100%; padding:1rem; margin: 2rem 0rem;" type="Submit" name="game_button" value="<?php echo $row->topic;?>">
								<?php echo form_close();?>
							</div>
						<?php
							} ?>
					</div>				
				</div>
			</div>
			<div class="col-md-4">
				<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
				<div class="align-self-center">
					<?php
					?>
					<div id="mydiv" class="row">
						<?php
						foreach($a->result() as $row){
							
							?>
							<div class="col-md-6 shuffleMe">
								<?php echo form_open('gamethree/play/'.$this->uri->segment(0));?>
								<input type="hidden" name="game_id" value="<?php echo $row->game_id?>">
								<input class="btn btn-outline-primary" style="width:100%; padding:1rem; margin: 2rem 0rem;" type="Submit" name="game_button" value="<?php echo $row->topic;?>">
								<?php echo form_close();?>
							</div>
						<?php
							} ?>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
				<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success">Shuffle</button>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary disabled" href="#"> Show</a>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning disabled" href="#"> Start</a>
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="#">Completed</a>
			</div>
			<div class="col-md-2"></div>
		</div>
		
	</div>