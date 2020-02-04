<!-- <?php session_start(); ?> -->

<section class="container shopping-cart">
			<div class="block-heading">
				<h2>Shopping Cart</h2>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-12">
						<div class="items">

<!-- product begins -->

<?php 

foreach ($_SESSION['basket'] as $key => $val)
{
	$stmt = $pdo->prepare('SELECT * FROM products WHERE product_id = :id');
$stmt->execute(['id' => $key]);
$prod = $stmt->fetch();
?>



							<div class="product">
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid mx-auto d-block basket-image" src="images/club1.jpg">
									</div>

									<div class="col-md-8">
										<div class="info">
											<div class="row">
												<div class="col-md-5 product-name">
													<div class="product-name">
														<a class="basket-title orange" href="#"><?=$prod['name']?></a>
														<div class="product-info">

													<?php 
														foreach($val as $a => $b)
															{?>
																
															
															

															<div style="text-transform: uppercase;"> <?=$a;?>
															<span class="value"> 
																
														
														<?= $b; ?>
															</span></div>
															<?php }?>
														</div>
													</div>
												</div>
											
												<div class="col-md-7 price">
													<span>
<?php 
$_SESSION['total'] +=$prod['price'];
echo $prod['price'];?>



													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> <!-- end of product-->
<?php }?>


						</div> <!-- enf of items-->
					</div>
				</div>


				<!-- summary -->
				<div class="row">
					<div class="col-12 col-md-6 container">
						<div class="summary">
							<h3>Summary</h3>
							<div class="summary-item"><span class="text">Subtotal</span><span class="price"><?=$_SESSION['total']?></span>
							</div>
							<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span>
							</div>
							<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span>
							</div>
							<div class="summary-item"><span class="text">Total</span><span class="price"><?=$_SESSION['total']?></span>
							</div>
							<a href="payment.php"><button type="button"
														   class="btn btn-basket btn-orange btn-lg btn-block">Checkout</button></a>
						</div>
					</div>
				</div>
			</div>
		</section>