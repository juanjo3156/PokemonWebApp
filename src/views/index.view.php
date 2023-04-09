<?php require('header.php'); ?>

    <div class="container content">
    
        <h2 class="content__titulo">Pokemon List</h2>
        <table>
      <thead>
        <tr>
          <th>
            Number<br>in Pokédex</th>
          <th>Name</th>
          <th>Type</th>
          <th>Region</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($posts as $pokemon){?>
        <tr>
          <td><?php echo $pokemon['pkdex_num']?></td>
          <td><?php echo $pokemon['name']?></td>
          <td><?php echo $pokemon['type']?></td>
          <td><?php echo $pokemon['region']?></td>
          <td class="action_column">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
              <input type="hidden" name="pokemon_id" value="<?php echo $pokemon['id']?>">
              <button class = "btn-submit "type="submit">Add to favorites  <i class="fa-solid fa-heart"></i></button>
            </form>
          </td>
        </tr>
        <?php }?>
    </table>

    <div class="table__bottom"></div>

    <?php include('pagination.php');?>
    </div>
   
<?php require('footer.php'); ?>