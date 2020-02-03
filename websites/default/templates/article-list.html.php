

<?php foreach ($articles as $article) {?>

    <section class="container my-4 mb-5 pb-5">
<h2> <?=$article['product_name']; ?> </h2>
<p class="category"><?= $article['category']; ?></p>
<div class="d-flex justify-content-space-around">
<img class="col-sm-6 col-md-3 px-0 product mr-4" src="<?=$article['image1'];?>">
<p class="description col-sm-6 col-md-9"><?=$article['product_description'];?></p>
</div>
<!-- <h2> <?//=$article['title']; ?> </h2>
<em><?//= $article['date']; ?></em>
<p><?//=$article['description'];?></p> -->
</section>
<?php } ?> 


