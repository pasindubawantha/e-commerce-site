
    <div class="bs-component">
    	<h2><?php echo $item['name']; ?></h2>
      <p><?php echo $item['description']; ?></p>
      <div class="well">
        <?php
        echo "Rs "; 
        echo $item['price'];
        echo " per 1 ";
        echo $item['units'];
        ?>
      </div>
    </div>
 