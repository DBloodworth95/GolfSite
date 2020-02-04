<div class="container py-5">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12"><img class="img-thumbnail img-fluid center-block" src="images/g1.jpeg"></div>
                </div>
                <div class="row py-3">
                    <div class="col-4 col-sm-4 col-md-4"><img class="img-thumbnail img-fluid center-block"
                            src="images/g1.jpeg"></div>
                    <div class="col-4 col-sm-4 col-md-4"><img class="img-thumbnail img-fluid center-block"
                            src="images/g2.jpeg"></div>
                    <div class="col-4 col-sm-4 col-md-4"><img class="img-thumbnail img-fluid center-block"
                            src="images/g3.jpeg"></div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row details">
                    <div class="col-12">
                        <h2 class="pl-2 orange"><?=$product['name'];?></h2>
                    </div>
                </div>
                <p class="description pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                    sollicitudin elit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Mauris malesuada rutrum magna. </p>
                <div class="row py-2">
                    <div class="col-6 col-sm-6 col-md-6">
                        <form action="#">
                            <select>
                                <option>Chose Loft</option>
                                <option>Style1</option>
                                <option>Style2</option>
                                <option>Style3</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <form action="#">
                            <select>
                                <option>Chose Shaft Type</option>
                                <option>Type</option>
                                <option>Type</option>
                                <option>Type</option>
                            </select>
                        </form>

                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6">
                        <form action="#">
                            <select>
                                <option>Chose Flex</option>
                                <option>Regular</option>
                                <option>Stiff</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <form action="#">
                            <select>
                                <option>Chose hand</option>
                                <option>Left</option>
                                <option>Right</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div class="row py-2">

                    <div class="col-6 col-sm-6 col-md-6">
                        <form action="#">
                            <label>Quantity: </label><input class="quantity" type="number" min="1" value="1"
                                name="quantity" />
                        </form>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6">
                        <form class="colors" action="#">
                            <label class="blue">
                                <input type="radio" name="color" value="blue">
                                <div class="layer"></div>
                                <div class="button"><span></span></div>
                            </label>

                            <label class="black">
                                <input type="radio" name="color" value="black">
                                <div class="layer"></div>
                                <div class="button"><span></span></div>
                            </label>

                            <label class="red">
                                <input type="radio" name="color" value="red">
                                <div class="layer"></div>
                                <div class="button"><span></span></div>
                            </label>
                        </form>
                    </div>
                </div>



                <div class="row">

                    <div class="col-6 d-flex flex-row align-items-center" >
                        <h4 class="price orange"> £1.500</h4>
                    </div>

                    <div class="col-6 d-flex flex-row align-items-center">

                        <div class="mr-3">
                            <form inline action="#">
                                <label class="wishlist product-page"></label>
                            </form inline>
                        </div>

<!--                        Fake form to send fake data as a post request -->
						<form action="/basket.php" method="post">
							<input type = "hidden" name="name" value=<?=$product['name']?>>
							<input type = "hidden" name="addToBasket">
							<input type = "hidden" name="price" value="1.500">
							<input type = "hidden" name="image" value="images/iron1.jpg">
							<input type = "hidden" name="brand" value="TP Red">
                            <div class="add"><button class="btn add-to-cart btn-md orange" type="submit" name="addToBasket"> Add to Cart</button></div>
                        </form>
                    </div>

                </div>