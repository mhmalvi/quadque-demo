  <!-- footer - start -->
  <footer class="footer">
      <div class="footer--wrapper">
          <div class="container">
              <div class="footer--header">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="footer--logo">
                              <a href="{{ route('home') }}" target="_blank" alt="footer logo">
                                  <img src="{{ asset('assets/images/quadque_digital_final_logo_v1.0_1_300x80.png') }}" alt="footer">
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-5 offset-lg-1">
                          <div class="footer--paragraph">
                              <h3 class="heading heading-large light-1">
                                  A young digital agency in the heart of Sydney.
                              </h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer--details">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="detail-single footer-phone-number">
                              <h6>PHONE</h6>
                              <a href="tel:8039376963">
                                  <h4>+61405899496</h4>
                                  <h4>+01765-276560</h4>



                              </a>
                          </div>
                          <div class="detail-single footer-address">
                              <h6>BANGLADESH ADDRESS</h6>
                              <h4>Level -7, 8/C, F.R Tower,<br> Sukrabad, PanthaPath 1207 Dhaka,<br> Dhaka Division, Bangladesh</h4>
                               <div class="bd_address mt-5">
                                    <iframe style="border:3px solid #ffc107" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8620011579173!2d90.3778221149814!3d23.752299984588486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf8e936845e9%3A0x87e96cce58137752!2sQuadque%20Technologies%20Limited!5e0!3m2!1sen!2sbd!4v1658654292708!5m2!1sen!2sbd" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                               </div>

                          </div>


                      </div>
                      <div class="col-lg-4">
                          <div class="detail-single footer-email">
                              <h6>EMAIL</h6>
                              <a href="mailto:info@quadque.digital">
                                  <h4>info@quadque.digital</h4>

                              </a>

                              <br><br>
                          </div>
                          @if(!(\Route::currentRouteName() == 'contact'))
                          <div class="detail-single">
                              <div class="navigation-menu-social">
                                  <h6>FOLLOW</h6>
                                  <ul>
                                      <li>
                                          <a href="https://www.facebook.com/QuadqueDigital22" target="_blank">
                                              <i class="fab fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://twitter.com/DQuadque" target="_blank">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.linkedin.com/services/page/b682423165625b9144/" target="_blank">
                                              <i class="fab fa-linkedin"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.instagram.com/quadque.digital22/" target="_blank">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          @endif

                          @if(\Route::currentRouteName() == 'contact')
                          <div class="detail-single footer-address">
                              <h6>AUSTRALIA ADDRESS</h6>
                              <h4>7 Greenfield Pde <br> BANKSTOWN NSW 2200,<br> Australia.</h4>
                              <div class="aus_address mt-5"><iframe style="border:3px solid #ffc107" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.8567911868276!2d151.0319837152116!3d-33.91908518064232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bc1b224e94cd%3A0x49e8442371e3be77!2s7%20Greenfield%20Parade%2C%20Bankstown%20NSW%202200%2C%20Australia!5e0!3m2!1sen!2sbd!4v1658654597143!5m2!1sen!2sbd" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>


                          </div>
                          <div>

                          </div>
                          @endif


                      </div>
                      <div class="col-lg-4">
                          <div class="detail-single">
                              <div class="email-form">
                                  @if(Session::has('success'))
                                  <p class="text-success" style="font-size:15px">{{ Session::get('success') }}</p>
                                  @endif
                                  <label>SUBSCRIBE</label>
                                  <div class="email-form-field">
                                      <form action="{{ route('store.subscription') }}" method="POST">
                                          @csrf
                                          <span class="email">
                                              <input type="email" name="email" placeholder="Email address">
                                              @error('email')
                                              <p class="text-warning" style="font-size:15px">{{ $message }}</p>

                                              @enderror
                                          </span>
                                          <button type="submit">
                                              <i class="fas fa-check-circle"></i>
                                          </button>

                                      </form>

                                  </div>
                              </div>

                          </div>
                          @if(\Route::currentRouteName() == 'contact')
                          <div class="detail-single">
                              <div class="navigation-menu-social">
                                  <h6>FOLLOW</h6>
                                  <ul>
                                      <li>
                                          <a href="https://www.facebook.com/QuadqueDigital22" target="_blank">
                                              <i class="fab fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://twitter.com/DQuadque" target="_blank">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.linkedin.com/services/page/b682423165625b9144/" target="_blank">
                                              <i class="fab fa-linkedin"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.instagram.com/quadque.digital22/" target="_blank">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          @endif
                      </div>

                  </div>
              </div>
              <div class="footer-bottom">
                  <h6>Copyright © 2022.</h6>
              </div>
          </div>

      </div>
      </div>
  </footer>
  <!-- footer - end -->

