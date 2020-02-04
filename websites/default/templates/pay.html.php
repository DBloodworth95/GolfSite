




  <div class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2 class="orange">Payment Page</h2>
        </div>


        <form action= method>
          
          <div class="card-details">

            <div class="row">

              <div class="form-group col-12">
                <label for="card-holder">Order ID</label>
                <input class="form-control" value="5e39112f9f6c0" >
              </div>
</div>
            <div class="row">
              <div class="form-group col-12">
                <label for="card-holder">PSP ID</label>
                <input class="form-control" value="UoN2020Grp3" >
              </div>
</div>

              <div class="row">
                  <div class="form-group col-6">
                    <label>Amount</label>
                    <input class="form-control" value="<?=$_SESSION['total']?>">
                  </div>

                  
                  <div class="form-group col-6">
                    <label>Currency</label>
                    <input type="text" class="form-control" value="GBP">
                  </div>
</div>

<div class="row">
              <div class="form-group col-6">
                <a href="#">
                  <button type="button" class="btn btn-orange btn-block" name="pay">Pay up!</button></a>
              </div>
              <div class="form-group col-6">
                <a href="#">
                  <button type="button" class="btn btn-orange btn-block" name="pay">Clear the field!</button></a>
              </div>


            </div>
          </div>
        </form>


      </div>
    </section>
</div>