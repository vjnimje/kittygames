	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
				<div class="align-self-center">
					<div class="row" id="">
						<?php
						foreach($i->result() as $row){
							?><div class="col-md-6">
								<div class="<?php echo $row->shape;?>"><?php echo $row->game_id;?></div>
							</div>
						<?php } ?>
					</div>				
				</div>
			</div>
			<div class="col-md-4">
				<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
				<div class="align-self-center" style="margin:2rem">
					<?php
					echo form_open('gametwo/play/'.$this->uri->segment(0));?>
					<div id="mydiv" class="row">
						<?php
						foreach($a->result() as $row){
							?>
							<div class="col-md-6 shuffleMe">
								<div class="<?php echo $row->shape;?>"><input class="shapebtn" type="Submit" name="game_button" value="<?php echo $row->game_id;?>"></div>
								<!-- <input class="<?php echo $row->shape;?>" type="Submit" name="game_button" value="<?php echo $row->game_id;?>"> -->
							</div>
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
				<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="#">Completed</a>
			</div>
			
		</div>
		
	</div>