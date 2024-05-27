<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user/checkout/css')
  </head>
  <body>
    <section>
      <header>
        <h3>
          <a href="{{url('/mycart')}}" class="header-back"><i class="fa-solid fa-chevron-left"></i></a><i class="fa-solid fa-truck-fast"></i>Shipping
        </h3>
      </header>
    </section>

    <section class="checkout">
      <div class="checkout-container">
        <div class="checkout-desc-content">
          <div class="checkout-desc-alamat">
            <i class="fa-solid fa-location-dot"></i>
            <div class="desc-alamat">
              <h5>Shipping Adress</h5>
              <h6>Username | user@gmail.com</h6>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ullam fugiat repudiandae similique commodi pariatur fuga beatae esse deserunt ipsa molestiae nulla obcaecati, iure aliquam voluptates, voluptatibus voluptate
                autem recusandae!
              </p>
            </div>
          </div>
          <div class="checkout-desc-product">
            <img src="img/product/10851775_0.jpg" alt="" />
            <div class="product-description">
              <h4>Product Name</h4>
              <p class="price">Rp. 50.000</p>
              <p>Bag</p>
              <p>One Size</p>
            </div>
          </div>
          <div class="checkout-desc-payment">
            <h3>Select Payment</h3>
            <div class="checkout-payment">
              <input type="radio" id="option1" name="options" value="1" />
              <label for="option1" class="radio-button"><i class="fa-brands fa-cc-paypal"></i> PayPal</label>

              <input type="radio" id="option2" name="options" value="2" />
              <label for="option2" class="radio-button"><i class="fa-brands fa-cc-apple-pay"></i>Apple Pay</label>

              <input type="radio" id="option3" name="options" value="3" />
              <label for="option3" class="radio-button"><i class="fa-brands fa-cc-visa"></i>Visa</label>

              <input type="radio" id="option4" name="options" value="4" />
              <label for="option4" class="radio-button"><i class="fa-solid fa-people-robbery"></i>Cash On Delivery</label>
            </div>
          </div>
          
          <div class="checkout-desc-method">
            <h3>Shipping Method</h3>
            <div class="checkout-shipping">
              <p class="header-shipping">Standard Shipping</p>
              <p>Rp. 16.000</p>
            </div>
          </div>
        </div>

      <form action="{{url('add_order')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="checkout-summary-content">
          <div class="checkout-summary-details">
            <h3>Order Details</h3>
            <div class="detail-order-container">
              <div class="detail-order">
                <p class="detail-head">Order ID</p>
                <p class="detail-body">00001</p>
              </div>
              <div class="detail-order">
                <label for="datetime">Current Date:</label>
                <input type="datetime-local" name="datetime" id="datetime" class="datetime-input" readonly />
              </div>
            </div>
          </div>
          <div class="checkout-summary-total">

              <h3>Order Summary</h3>
              <div class="order-price">
                <p>Price</p>
                <h5 class="price">Rp. 50.000</h5>
              </div>
              <div class="order-price">
                <p>Item(s)</p>
                <h5 class="price">3</h5>
              </div>
              <div class="order-price">
                <p>Total</p>
                <h5 class="price">Rp. 150.000</h5>
              </div>
              <div class="order-price">
                <p>Sub Total</p>
                <h5 class="price">Rp. 150.000</h5>
                <input type="hidden" name="total" id="total_input" value="150000">
              </div>
              <button class="place-order">Place Order</button>

            
          </div>
        </div>
    </form>
    </section>
    <script>
      window.onload = function () {
        var now = new Date();
        var year = now.getFullYear();
        var month = ("0" + (now.getMonth() + 1)).slice(-2); // bulan dimulai dari 0
        var day = ("0" + now.getDate()).slice(-2);
        var hours = ("0" + now.getHours()).slice(-2);
        var minutes = ("0" + now.getMinutes()).slice(-2);

        var formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

        document.getElementById("datetime").value = formattedDateTime;
      };
    </script>
  </body>
</html>
