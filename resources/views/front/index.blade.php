
@extends('front.master')

@section('title','Homepage')

@section('content')

<div class="content">
    <div class="about-section" id="about" id="about">
<div class="container">
    <div class="about-header">
        <h3>about</h3>
        <div class="about-imag">
        <img src="images/pic-9.jpg" alt=""/>
        </div>
        <div class="about-text">
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p> 
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. . </p>
        </div>
        <div class="clearfix"></div>
        </div>
        <div class="about-sectiongrids">
            <div class="col-md-6 about-leftgrid">
                <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>Graphic Design</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
                      <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>Ui/Ux</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
                      <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>Logo Design</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
                      <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>Html/Css</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>

</div>
<div class="col-md-6 about-rightgrid">
    <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>web design</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
                      <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>branding</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
                      <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>Photography</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
                      <div class="polls">
                <div class="poll">
                    <div class="poll-desc">
                        <h4>Jquery</h4>
                    </div>
                    <div class="percentage">
                        <p>75%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="skills">
                          <div style="width:75%"> </div>
                      </div>
                      </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="arrow1">
<a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
                </div>
</div>
</div>
<!-- about-section-ends -->
<div class="works-section" id="work" id="work">
   <div class="works-header">
        <h3>works</h3>
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
    </div>
    <div class="portfolio-section-bottom-row" id="portfolio">
        <div class="container">
            
                    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                    
                </script>
                    <link rel="stylesheet" href="css/swipebox.css">
                        <script src="js/jquery.swipebox.min.js"></script> 
                            <script type="text/javascript">
                                jQuery(function($) {
                                    $(".swipebox").swipebox();
                                });
                            </script>
                        <!-- Portfolio Ends Here -->
                    <div class="sap_tabs">
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                              <ul class="resp-tabs-list">
                                  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>
                                  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Branding</span></li>
                                  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Print</span></li>
                                  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Web design</span></li>
                                  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Photography</span></li>
                                  <div class="clearfix"></div>
                              </ul>	
                            <div id="portfoliolist">
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="tab_img">
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-1.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-2.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-3.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-4.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-5.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-6.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-7.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-8.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>	
                                        </div>
                                                                             
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-5.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-6.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-7.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-8.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                
                                                <div class="clearfix"></div>	
                                        </div>	 	        					 
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                        
                                        <div class="tab_img">
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-2.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-3.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-4.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                
                                                    <div class="clearfix"></div>
                                        </div>		        					 
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                                        <div class="tab_img">
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-1.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-2.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                
                                                    <div class="clearfix"></div>
                                        </div>	
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
                                        <div class="tab_img">
                                                <div class="col-md-3 img-top grid_box">
                                                    <a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
                                                          <img src="images/pic-1.jpg" class="img-responsive" alt="">
                                                          <span class="zoom-icon"></span> 
                                                    </a>
                                                </div>
                                                
                                                    <div class="clearfix"></div>
                                        </div>	
                                    </div>										
                                </div>	
                            </div>
                        </div>
                    </div>				

            <div class="arrow">
                <a href="#services" class="scroll"><img src="images/arrow.png" alt=""/></a>
            </div>
        </div>
    </div>
</div>
<!-- portfolio-section-ends -->
<div class="services-section" id="services">
        <div class="container"> 
        <div class="services-header">
            <h3>services</h3>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
        </div>
        <div class="services-sectiongrids">
            <div class="col-md-4 services-grid">
                <img src="images/img1.png" alt=""/>
                <h4>webdesign</h4>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
            </div>
            <div class="col-md-4 services-grid">
                <img src="images/img2.png" alt=""/>
                <h4>print design</h4>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
            </div>
            <div class="col-md-4 services-grid">
                <img src="images/img3.png" alt=""/>
                <h4>web development</h4>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
            </div>
            <div class="clearfix"></div>
            <div class="arrow1">
                <a href="#contact" class="scroll"><img src="images/arrow1.png" alt=""/></a>
                </div>
    </div>
    </div>
    </div>
    <!-- services-section-ends -->
</div>

 @endsection