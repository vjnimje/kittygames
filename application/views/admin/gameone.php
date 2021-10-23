<div class="container">
	<div class="col-md-12 mx-auto" style="margin: 50px 50px;">
		<span class="alert alert-success mx-auto">
 				<?php echo $this->session->flashdata("message");?>
 		</span>
	</div>
	<div class="row">
		<div class="col-md-5 gap-2">
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>gameone_admin/update_game_list" style="padding:0px 50px;">
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
						<label class="form-label">Select Game Type -</label>
					</div>
					<div class="col-md-8">
						<Select class="form-select form-control" name="type" required/>
							<option value="">Select game Type </option>
							<option value="image">Image</option>
							<option value="audio">Audio</option>
							<option value="video">Video</option>
						</Select>
						<!-- <span class="text-danger"><?php echo form_error("type"); ?></span> -->
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Question Image/Audio/Video -</label>
					</div>
					<div class="col-md-8">
						<input type="hidden" name="5000" value="30000" />
						<input class="form-control" type="file" name="blur_image" value="<?php echo set_value('blur_image') ;?>" required/>
						<span class="text-danger"><?php echo form_error("blur_image"); ?></span>
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Original Image /Answer Image -</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="file" name="original_image" value="<?php echo set_value('original_image') ;?>" required/>
						<span class="text-danger"><?php echo form_error("original_image"); ?></span>
					</div>
				</div>
				<div class="row" style="padding:10px 0px;">
					<div class="col-md-4">
						<label class="form-label">Answer -</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="answer" value="<?php echo set_value('answer') ;?>" placeholder="Enter Answer"  required/>
						<span class="text-danger"><?php echo form_error("answer"); ?></span>
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
						<!-- <span class="text-danger"><?php echo form_error("game_id"); ?></span> -->
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
			        <th scope="col">Game Type</th>
			        <th scope="col">Question Image/Audio/Video</th>
			        <th scope="col">Original Image</th>
			        <th scope="col">Answer</th>
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
			        <td><?php echo $row->type;?></td>
			        <?php 
			        $file_type = $row->type;
			        if ($file_type == 'image') { ?>
			        	<td><img class="game_image" style="height: 100px; width: auto;" src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->blur_image;?>" alt="Game Image Not Found"></td>
			        <?php }elseif ($file_type == 'audio') {?>
			        	<td>
			        		<audio controls>
	  							<source src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->blur_image;?>" type="audio/ogg">
							</audio>
			        	</td>
			        <?php }elseif ($file_type == 'video') { ?>
			        	<td>
			        		<video width="200" controls>
								<source src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->blur_image;?>">
							</video>
			        	</td>
			        <?php } else {
			        	echo "<td>Unsupported Media type</td>";
			        }
			        
			        ?>
			        <!-- <td><img class="game_image" style="height: 100px; width: auto;" src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->blur_image;?>" alt="Game Image Not Found"></td> -->
			        <td><img class="game_image" style="height: 100px; width: auto;" src="<?php echo base_url();?>assets/upload/gameone/<?php echo $row->original_image;?>" alt="Game Image Not Found"></td>
			        <td><?php echo $row->answer;?></td>
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