<?php require('header.php'); ?>

    <div class="container content">
    
        <h2 class="content__titulo">150 Pokemon List</h2>
        <table>
      <thead>
        <tr>
          <th>
            Number<br>in Pokédex</th>
          <th>Name</th>
          <th>Type</th>
          <th>Region</th>
          <?php if(isset($_SESSION['user'])):?>
            <th>Action</th>
          <?php endif;?>
        </tr>
      </thead>
      <tbody>
        <?php foreach($posts as $pokemon){?>
        <tr>
          <td><?php echo $pokemon['pkdex_num']?></td>
          <td><?php echo $pokemon['name']?></td>
          <td><?php echo $pokemon['type']?></td>
          <td><?php echo $pokemon['region']?></td>
          
          <?php if(isset($_SESSION['user'])):?>
          <td class="action_column">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
              <input type="hidden" name="pokemon_id" value="<?php echo $pokemon['id']?>">
              <button class = "btn-submit "type="submit">Add to favorites  <i class="fa-solid fa-heart"></i></button>
            </form>
          </td>
          <?php endif;?>

        </tr>
        <?php }?>
    </table>

    <div class="table__bottom"></div>

    <?php include('pagination.php');?>
    </div>
   
<?php require('footer.php'); ?>