<section class="container shopping-cart">
			<div class="block-heading">
				<h2>Shopping Cart</h2>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-12">
						<div class="items">

<!-- product begins -->

<?php foreach ($products as $product) {?>

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
														<a class="basket-title orange" href="#">Lorem Ipsum dolor</a>
														<div class="product-info">
															<div>Display: <span class="value">5 inch</span></div>
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