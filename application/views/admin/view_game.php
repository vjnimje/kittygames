<div class="container">
	<div class="col-md-12 mx-auto" style="margin: 50px 50px;">
		<span class="alert alert-success mx-auto">
 				<?php echo $this->session->flashdata("message");?>
 		</span>
	</div>
	<div class="row">
		<div class="col-md-6 gap-2">
			<form method="post" action="<?php echo base_url();?>admin/update_game_list" style="padding:0px 50px;">
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Select game -</label>
					</div>
					<div class="col-md-8">
						<Select class="form-select form-control" name="game_id" required/>
							<option value="">Select game ID </option>
							<?php 
							foreach ($h->result() as $row) { ?>

							<option value="<?php echo $row->game_id;?>"><?php echo $row->game_id;?> </option>
							<?php }?>
						</Select>
						<!-- <span class="text-danger"><?php echo form_error("game_id"); ?></span> -->
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Game Name -</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="game_name" value="<?php echo set_value('game_name') ;?>" placeholder="Enter game Name">
						<span class="text-danger"><?php echo form_error("game_name"); ?></span>
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">game Link -</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="game_link" value="<?php echo set_value('game_link') ;?>" placeholder="Enter game Link"  required/>
						<span class="text-danger"><?php echo form_error("game_link"); ?></span>
					</div>
				</div>
				<div class="row" style="padding:50px 0px;">
					<div class=" d-grid d-grid  col-md-4 mx-auto">
						<input class="btn btn-outline-success" type="Submit" name="Update" value="Update">
					</div>
					<div class=" d-grid d-grid  col-md-4 mx-auto">
						<a href="#" class="btn btn-outline-danger"> Delete</a>
					</div>	
				</div>
													
			</form>
		</div>
		<div class="col-md-6">
			<table class="table">
			    <thead>
			      <tr>
			        <th scope="col">Sr. No</th>
			        <th scope="col">game Id</th>
			        <th scope="col">game Name</th>
			        <th scope="col">game Link</th>
			      </tr>
			    </thead>
			    <tbody>
					<?php  
			         foreach ($h->result() as $row)  
			         {  
			            ?>         
			      <tr>
			        <th scope="row"><?php echo $row->id;?></th>
			        <td><?php echo $row->game_id;?></td>
			        <td><?php echo $row->game_name;?></td>
			        <td><?php echo $row->game_link;?></td>
			      <?php }  
			         ?>  </tr>
			    </tbody>
		  	</table>
		</div>
	</div>
</div>