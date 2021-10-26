<div class="container myborder">
	<div class="row">
		<div class="col-md-4">
			<h6 style="width:100%" class="btn btn-outline-danger" align="center">Completed Games</h6>
			
		</div>
		<div class="col-md-4">
			<h6 style="width:100%" class="btn btn-outline-success" align="center">Running Games</h6>
			<div id="myTest">
				<?php 
        			foreach ($game->result() as $row){ ?>
        					
        					<div class="blink">
								<span class="span1">Correct Answer is <?php echo $row->answer;?> !</span>
							</div>
        					<<!-- div class="btn btn-outline-primary" style="width:100%; margin:2rem 0rem; padding:1rem;"><?php echo $row->answer;?></div> -->
        					
        				<?php
        					}?>
			</div>			
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<h6 style="width:100%" class="btn btn-outline-primary" align="center">Game Options</h6>
			<button onclick="shuffle()" style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-success" disabled/>Shuffle</button>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-primary disabled" href="#"> Show</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-warning" href="<?php echo base_url();?>gamethree"> Continue</a>
			<a style="width:100%; margin:2rem 0rem; padding: 1rem;" class="btn btn-danger" href="<?php echo base_url();?>gamethree/reset">Reset Game</a>
		</div>
		
	</div>
</div>
1