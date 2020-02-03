<!DOCTYPE html>
<html>

<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<main>
		<section class="container shopping-cart">
			<div class="block-heading">
				<h2>Shopping Cart</h2>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-12">
						<div class="items">

<!-- product begins -->

                            <form action="" method="post">
                            <?php foreach ($cartProducts as $product) {?>
                            <div class="product">

								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid mx-auto d-block basket-image" src=<?=$product["name"]?>>
									</div>

									<div class="col-md-8">
										<div class="info">
											<div class="row">
												<div class="col-md-5 product-name">
													<div class="product-name">
														<a class="basket-title orange" href="#"></a>
														<div class="product-info">
															<input>Display: <span class="value">5 inch</span></input>
															<div>RAM: <span class="value">4GB</span></div>
															<div>Memory: <span class="value">32GB</span></div>
															<div>Quantity: <span class="value">2</span></div>
														</div>
													</div>
												</div>
											
												<div class="col-md-7 price">
													<span>$120</span>
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
							<div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span>
							</div>
							<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span>
							</div>
							<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span>
							</div>
							<div class="summary-item"><span class="text">Total</span><span class="price">$360</span>
							</div>
							<a href="payment.html"><button type="button"
														   class="btn btn-basket btn-orange btn-lg btn-block">Checkout</button></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>