
	<form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>main/file_upload_test">
		<input type="hidden" name="5000" value="30000" />
		<input class="form-control" type="file" name="testfile" value="<?php echo set_value('testfile') ;?>" required/>
		<span class="text-danger"><?php echo form_error("testfile"); ?></span>
		<input type="submit" name="upload">
	</form>

	<audio controls>
	  <source src="<?php echo base_url();?>assets/upload/1634981141test_mp3.mp3" type="audio/ogg">
	</audio>
	<video width="400" controls>
	  <source src="<?php echo base_url();?>assets/upload/1634981336test_mp4.mp4" type="video/mp4">
	</video>
	