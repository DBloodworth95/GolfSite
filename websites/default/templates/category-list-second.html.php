

<?php

foreach ($categories as $category) {?>
<a class="cat-drop-down nav-item nav-link active" href = "category.php?id=<?=$category['category_id']?>"><?=$category['title'];?> </a>

<?php } ?> 

