<?php $page_number = page_number($page_config["post_by_page"],$connection);
?>
<section>

    <ul class="pagination">
        <?php if(actual_page() === 1):?>
            <li class="disabled-btn">&laquo;</li>
        <?php else: ?>
            <li><a href="<?php echo RUTA_pag?>index.php?p=<?php echo actual_page()-1?>">&laquo;</a></li>
        <?php endif; ?>
        
        <?php for($i = 1;$i<=$page_number;$i++): ?>
            <?php if(actual_page() === $i):?>
                <li class="active-btn"><?php echo $i?></li>
            <?php else:?>
                <li><a href="<?php echo RUTA_pag?>index.php?p=<?php echo $i?>"><?php echo $i?></a></li>
            <?php endif;?>

        <?php endfor;?>

        <?php if(actual_page() == $page_number): ?>
            <li class="disabled-btn">&raquo;</li>
        <?php else: ?>
            <li><a href="<?php echo RUTA_pag?>index.php?p=<?php echo actual_page()+1?>">&raquo;</a></li>
        <?php endif; ?>

    </ul>

</section>