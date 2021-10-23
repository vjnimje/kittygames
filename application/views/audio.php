				<!-- <?php 
        			foreach ($game->result() as $row){ ?>
					<img style="margin-top: 2rem; max-width: 400px; height: auto;" id="id1" src="<?php echo base_url()?>assets/upload/gameone/<?php echo $row->blur_image;?>" alt="Image Not Found !">
					
				<?php
				$exttest = $row->blur_image;
				echo "<br>";
				echo $exttest;	
				echo "<br>";
				$fileExt = pathinfo($exttest, PATHINFO_EXTENSION);
  				
				print_r($fileExt);
				echo "<br>";
				if ($fileExt == 'jpg') {
					echo "Its a Image !";
				} else {
					echo "Its Not a Image !";
				}
				
				}?> -->