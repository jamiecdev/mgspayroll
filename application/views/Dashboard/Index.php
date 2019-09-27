<div class="main-panel">
        <div class="content-wrapper">
          <span><?php 
            if($this->session->flashdata('dashboard')=="success")
                echo '<script type="text/javascript"> showWelcomeToast("'.$this->session->userdata('userdata')['fullname'].'")</script>';
              ?>
            </span>
            
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="row portfolio-grid">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/10.png" alt="image"/>
                            <figcaption>
                              <!-- <h4>Photography</h4> -->
                              <p>INBOUND/OUTBOUND SERVICES</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/1.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Lifestyle</h4> -->
                              <p>ACCOUNT RECEIVABLES</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/2.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Tech Geeks</h4> -->
                              <p>COLLECTIONS</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/7.png" alt="image"/>
                            <figcaption>
                              <!-- <h4>Explore World</h4> -->
                              <p>MULTI-LINGUAL CUSTOMER CARE</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/6.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Travel</h4> -->
                              <p>MEDICAL CODING</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/8.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Colors</h4> -->
                              <p>PAYMENTS</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/4.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Through Nature</h4> -->
                              <p>DATA SCRUBBING</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/5.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>World</h4> -->
                              <p>RECORD RETRIEVAL AND DIGITIZATION</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/9.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Cultures</h4> -->
                              <p>BENEFIT ENROLMENT AND VALIDATION</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/3.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Habits</h4> -->
                              <p>CONTACT CENTRE SALES SOLUTIONS</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/11.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Being yourself</h4> -->
                              <p>TECH SUPPORT</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="<?=base_url(); ?>assets/images/auth/12.jpg" alt="image"/>
                            <figcaption>
                              <!-- <h4>Being yourself</h4> -->
                              <p>CUSTOMER SERVICE</p>
                            </figcaption>
                          </figure>
                        </div>
        
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.urbanui.com/" target="_blank" class="text-muted">BlackCoders</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart-outline text-primary"></i></span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->