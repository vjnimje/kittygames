<div class="container">
  <h1> Welcome <?php foreach ($user as $row) { echo $row['name']; } ?></h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Sr. No</th>
        <th scope="col">Game Id</th>
        <th scope="col">Game Name</th>
        <th scope="col">Game Link</th>
        <th scope="col">Game Image</th>
        <th scope="col">Game Answer</th>
        <th scope="col"> CRUD</th>
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
        <td><img class="game_image" style="height: 100px; width: auto;" src="<?php echo base_url();?>assets/upload/game/<?php echo $row->game_image;?>" alt="Game Image Not Found"></td>
        <td><?php echo $row->game_answer;?></td>
        <td><a class="btn btn-outline-success btn-sm" href="#">Update</a> <a class="btn btn-outline-danger btn-sm" href="#">Delete</a></td>
      </tr>
      <?php }  
         ?>  
    </tbody>
  </table>
</div>