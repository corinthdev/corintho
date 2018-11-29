  <?php include 'navigation/links.php'; ?>
  <div id="wrapper">
    <?php include 'navigation/toggle.php'; ?>
    <?php include 'navigation/header.php'; ?>
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Get in touch</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div id = "map" style="width: 100%; height: 300px;">
              <script>
                    // Initialize and add the map
                    function initMap() {
                      // The location of Uluru
                      var location = {lat:  13.942000, lng: 121.628330};
                      // The map, centered at Uluru
                      var map = new google.maps.Map(
                          document.getElementById('map'), {zoom: 16, center: location});
                      // The marker, positioned at Uluru
                      var marker = new google.maps.Marker({position: location, map: map});
                    }

              </script>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEMzAWTXyjN9qCwMw90c8Sbvj7SKEnmA&libraries=places&callback=initMap" async defer></script>
      </div>

      <div class="container">
        <div class="row">
          <div class="span12"><br>
            <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

            <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include 'navigation/footer.php'; ?>
  </div>
