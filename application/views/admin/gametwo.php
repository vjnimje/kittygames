<div class="container">
	<div class="col-md-12 mx-auto" style="margin: 50px 50px;">
		<span class="alert alert-success mx-auto">
 				<?php echo $this->session->flashdata("message");?>
 		</span>
	</div>
	<div class="row">
		<div class="col-md-5 gap-2">
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>gametwo_admin/update_game_list" style="padding:0px 50px;">
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Select game -</label>
					</div>
					<div class="col-md-8">
						<Select class="form-select form-control" name="game_id" required/>
							<option value="">Select Game ID </option>
							<?php 
							foreach ($h->result() as $row) { ?>

							<option value="<?php echo $row->game_id;?>"><?php echo $row->game_id;?> </option>
							<?php }?>
						</Select>
						<span class="text-danger"><?php echo form_error("game_id"); ?></span>
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Select Game Shape -</label>
					</div>
					<div class="col-md-8">
						<Select class="form-select form-control" name="shape" required/>
							<option value="">Select Game Shape </option>
							<option value="circle">Circle</option>
							<option value="rectangle">Rectangle</option>
							<option value="trapezoid">Trapezoid</option>
							<option value="square">Square</option>
							<option value="parallelogram">Parallelogram</option>
						</Select>
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Activity -</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="activity" value="<?php echo set_value('activity') ;?>" placeholder="Enter Activity"  required/>
						<span class="text-danger"><?php echo form_error("activity"); ?></span>
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Select Status -</label>
					</div>
					<div class="col-md-8">
						<Select class="form-select form-control" name="status" required/>
							<option value="">Select Status </option>
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</Select>
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
		<div class="col-md-7">
			<table class="table">
			    <thead>
			      <tr>
			        <th scope="col">Sr. No</th>
			        <th scope="col">Game Id</th>
			        <th scope="col">Shape</th>
			        <th scope="col">Activity</th>
			        <th scope="col">Status</th>
			      </tr>
			    </thead>
			    <tbody>
					<?php  
			         foreach ($h->result() as $row)  
			         {  
			            ?>         
			      <tr>
			        <td><?php echo $row->id;?></td>
			        <td><?php echo $row->game_id;?></td>
					<td><div class="<?php echo $row->shape;?>"><?php echo $row->game_id;?></div></td>
			        <td><?php echo $row->activity;?></td>
			        <?php if ($row->status == '1') { ?>
			        <td>Active</td>
			       <?php } else { ?>
			        	<td>Inactive</td>
			       <?php } 
			   		} ?> 
			        
				 </tr>
			    </tbody>
		  	</table>
		</div>
	</div>
</div>