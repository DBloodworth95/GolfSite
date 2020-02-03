

<?php

foreach ($categories as $category) {?>
<a class="cat-drop-down nav-item nav-link " href = "category.php?id=<?=$category['category_id']?>"><?=$category['title'];?> </a>

<?php } ?> 



<?php 

foreach ($categories as $category) {?>

    <a href = "category.php?id=<?=$category['category_id']?>" class="px-0 nav-item nav-link active" ><?=$category['title']?> </a>
             

<?php } ?> 