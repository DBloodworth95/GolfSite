

    <div class="container-fluid">
        <h3 class="text-dark my-4">Profile</h3>

<!-- user settings -->
        <div class="row mb-4">
            <div class="col-12 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                    </div>
                    <div class="card-body">

                        <form>
                            <div class="form-row">
                                <!-- <div class="col">
                                    <div class="form-group"><label
                                            for="username"><strong>Username</strong></label><input class="form-control"
                                            type="text" placeholder="" name="username"></div>
                                </div> -->
                                <?php
                                $getProfile = $pdo->prepare('SELECT * FROM users WHERE user_id = :user_id');
                                $profile = [
                                    'user_id' => $_GET['user_id']
                                ];
                                
                                $getProfile->execute($profile);
                                foreach ($getProfile as $userid) {
                
                                echo'<div class="col">';
                                    echo'<div class="form-group"><label for="email"><strong>Email';
                                                echo'Address</strong></label><input class="form-control" type="email"';
                                            echo'placeholder="'.$userid['email'].'" name="email"></div>';
                                echo'</div>';
                            echo'</div>';
                                
                                
                                
                            echo'<div class="form-row">';
                               echo '<div class="col">';
                                   echo' <div class="form-group"><label for="first_name"><strong>First';
                                                echo'Name</strong></label><input class="form-control" type="text"';
                                            echo'placeholder="'.$userid['firstname'].'" name="first_name"></div>';
                                echo'</div>';
                                echo'<div class="col">';
                                    echo'<div class="form-group"><label for="last_name"><strong>Last';
                                               echo' Name</strong></label><input class="form-control" type="text"';
                                           echo' placeholder="'.$userid['surname'].'" name="last_name"></div>';
                                echo'</div>';
                            echo'</div>';
                            echo'<div class="form-group"><button class="btn btn-profile btn-sm" type="submit">Save ';
                                    echo'Settings</button></div>';
                        echo'</form>';
                    echo'</div>';
                echo'</div>';

            echo'</div> <!--end of user settings-->';
                                
      

        echo'<!-- contact settings -->';
        echo'<div class="col-12 col-lg-6">';
            echo'<div class="card shadow">';
                echo'<div class="card-header py-2">';
                   echo' <p class="text-primary m-0 font-weight-bold">Contact Settings</p>';
                echo'</div>';
                echo'<div class="card-body">';
                    echo'<form>';
                        echo'<div class="form-group"><label for="address"><strong>Address</strong></label><input';
                                echo' <div class="form-control" type="text" placeholder="'.$userid['address'].'" name="address"></div>';
                        echo'<div class="form-row">';
                            echo'<div class="col">';
                               echo' <div class="form-group"><label for="city"><strong>City</strong></label><input';
                                       echo' class="form-control" type="text" placeholder="'.$userid['city'].'" name="city"></div>';
                            echo'</div>';
                                
                                
                        echo'</div>';
                                }
                                ?>
                        <div class="form-group"><button class="btn btn-profile btn-sm"
                                type="submit">Save&nbsp;Settings</button></div>
                    </form>
                </div>
            </div>
        </div> <!-- end of contact settings-->
    </div> <!-- end of first row-->




 <!--Second row  -->
    <div class="row">
           <!-- Payment settings -->
        <div class="col-12 col-lg-6 pb-4">
            <div class="card shadow">
                <div class="card-header py-10">
                    <p class="text-primary m-0 font-weight-bold">Payment Settings</p>
                </div>

                <div class="card-body">
                    <div class="form-group col-sm-7">
                        <label for="card-holder">Card Holder</label>
                        <input id="card-holder" type="text" class="form-control" placeholder="Card Holder"
                            aria-label="Card Holder" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="">Expiration Date</label>
                        <div class="input-group expiration-date">
                            <input type="text" class="form-control" placeholder="MM" aria-label="MM"
                                aria-describedby="basic-addon1">
                            <span class="date-separator pt-2">  /  </span>
                            <input type="text" class="form-control" placeholder="YY" aria-label="YY"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="card-number">Card Number</label>
                        <input id="card-number" type="text" class="form-control" placeholder="Card Number"
                            aria-label="Card Holder" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="cvc">CVC</label>
                        <input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder"
                            aria-describedby="basic-addon1">

                    </div>
                    <div class="form-group"><button class="btn btn-profile btn-sm"
                            type="submit">Save&nbsp;Settings</button></div>
                </div>
            </div>
        </div>




        <!--   wishlist   -->
        <div class="col-12 col-lg-6 ">
                <div class="card shadow mb-4 profile-wishlist-container">
                    <div class="card-header py-3">
                        <h6 class="text-primary font-weight-bold m-0">Wishlist</h6>
                    </div>
                    <div class="card-body">
                       <a href="#"><h4 class="small font-weight-bold">Golf club 1</h4></a> 
                       <a href="#"><h4 class="small font-weight-bold">Golf club 1</h4></a> 
                       <a href="#"><h4 class="small font-weight-bold">Golf club 1</h4></a> 
                    </div>
                </div>
            </div>
        </div> <!-- end of row -->




