

<?php 

foreach ($categories as $category) {?>
    <a href = "category.php?id=<?=$category['category_id']?>" class="nav-item nav-link active"><?=$category['category_name'];?> </a></li>
               

<?php } ?> 
