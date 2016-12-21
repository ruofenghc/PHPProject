 <form action="" method="post">
    <?php
        foreach ($data["pizzas_to_display"] as $category) {
           // foreach different category, ex pizza, 
           // salad.
     ?>
        <div>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
              <a href="#<?php echo $category['name']?>" id="<?php echo $category['name']?>" class="foods"><?php echo $category["name"]?></a></li>
            </ul>
       </div>
       <div class="row">
       
     <?php // print out some information
           // about all item in one same
           // category
           $i = 1;
            foreach ($category->item as $item) { 
             ?>
                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img src="public_html/image/food<?php echo $i % 2 + 1; ?>.jpg">
                      <div class="caption">
                        <h3><?= $item["name"]?></h3>
              <?php
                    foreach($item->size as $size) {
                        echo('<input type="checkbox" name="'.$size["id"].'" >');
                        echo($size["type"]);
                        echo($size);
                        echo(" ");
                    }
                ?>
               
                      </div>
                    </div>
                 </div>
        <?php
                 $i++;           
                }
                
       ?>
            
        </div><!-- row -->
    <?php } ?>
       
    <input type="submit" name="add" value="Add to shopping cart" />
</form>
