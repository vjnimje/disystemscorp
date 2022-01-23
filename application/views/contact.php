  <header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/blockchain.png')">
    <span class="mask bg-gradient-info opacity-4"></span>
    <div class="container">
      <div class="row" style="padding-top:100px;">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Contact Us</h1>
          <p class="lead text-white mt-3"></p>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">

  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0">Connect With Us</h3>
                </div>
              </div>
              <div class="card-body">
                <h6>Location</h6>
                <p>4870 Sadler Road Suite 300 Glen Allen, VA 23060</p>
                <h6>Mail</h6>
                <p>info@disystemscorp.com</p>
                <h6>Mail</h6>
                <p>+1-937-553-2361</p>
              </div>
              <div id="googleMap" style="width:100%;height:300px;"></div>

                <script>
                function myMap() {
                var mapProp= {
                  center:new google.maps.LatLng(37.667833, -77.578528),
                  zoom:5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
              </div>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0">Contact us</h3>
                </div>
              </div>
              <div class="card-body">
                <p class="pb-3">
                  For further questions, including partnership opportunities, please email info@disystemscorp.com
                  or contact using our contact form.
                </p>
                <form id="contact-form" method="post" autocomplete="off">
                  <div class="card-body p-0 my-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Full Name</label>
                          <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="col-md-6 ps-md-2">
                        <div class="input-group input-group-static mb-4">
                          <label>Email</label>
                          <input type="email" class="form-control" placeholder="hello@disystemscorp.com">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-0 mt-md-0 mt-4">
                        <div class="input-group input-group-static mb-4">
                          <label>Subject</label>
                          <input type="text" class="form-control" placeholder="Your subject here...">
                        </div>
                    </div>
                    <div class="form-group mb-0 mt-md-0 mt-4">
                      <div class="input-group input-group-static mb-4">
                        <label>How can we help you?</label>
                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
