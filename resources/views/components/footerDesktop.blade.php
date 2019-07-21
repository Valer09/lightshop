<footer class="footer">
  <div class="newsletter-wrap">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="newsletter">
            <form action="{{ url('news_reader') }}?ref={{$_SERVER['REQUEST_URI']}}" method="post">
              @csrf
              <div>
                <h4><span>newsletter</span></h4>
                <input type="text" placeholder="Enter your email address" class="input-text"
                  title="Sign up for our newsletter" id="newsletter1" name="email">
                <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--newsletter-->
  <div class="footer-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="footer-column pull-left">
            <h4>Shopping Guide</h4>
            <ul class="links">
              <li><a href="faq.html" title="FAQs">FAQs</a></li>
              <li><a href="{{ url('profile') }}" title="Shipment">Shipment</a></li>
              <li><a href="{{ url('profile') }}" title="Where is my order?">Where is my order?</a></li>
              <li><a href="{{ url('privacy_policy') }}" title="Return policy">Return policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-column pull-left">
            <h4>Style Advisor</h4>
            <ul class="links">
              <li><a href="login.html" title="Your Account">Your Account</a></li>
              <li><a href="{{ url('profile') }}" title="Information">Information</a></li>
              <li><a href="{{ url('profile') }}" title="Addresses">Addresses</a></li>
              <li><a href="{{ url('profile') }}" title="Orders History">Orders History</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-column pull-left">
            <h4>Information</h4>
            <ul class="links">
              <li><a href="{{ url('sitemap') }}" title="Site Map">Site Map</a></li>
              <li><a href="#" title="Search Terms">Search Terms</a></li>
              <li><a href="{{ url('about') }}" title="About Us">About Us</a></li>
              <li><a href="{{ url('contact') }}" title="Contact Us">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <h4>Contact Us</h4>
          <div class="contacts-info">
            <address>
              <i class="add-icon">&nbsp;</i>ABC Town Luton Street, <br>
              &nbsp;New York 226688
            </address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> + 0800 567 345</div>
            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a
                href="mailto:support@magikcommerce.com">abc@example.com</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="social">
            <ul>
              <li class="fb"><a href="#"></a></li>
              <li class="tw"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="rss"><a href="#"></a></li>
              <li class="pintrest"><a href="#"></a></li>
              <li class="linkedin"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="payment-accept"> <img src="{{ asset('images/payment-1.png') }}" alt=""> <img src="{{ asset('images/payment-2.png') }}"
              alt=""> <img src="{{ asset('images/payment-3.png') }}" alt=""> <img src="{{ asset('images/payment-4.png') }}" alt=""> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12 coppyright">
          © 2017 ThemesSoft. All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
</footer>
