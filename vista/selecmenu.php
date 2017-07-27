    
      <!-- Contenedor -->
      <div class="vcard-container">

      <!-- Salir Sesion -->      
      <div class="social-buttons">
            <a href="?accion=cerrarsesion">
                <div class="facebook">
                      <i class="fa fa-facebook"></i>
                </div>
            </a>
      </div>

      <!-- Columna Principal -->
      <div id="content" class="tab-container main-column">

          <!-- Top row -->
          <div class="top-row">
              <!-- Photo -->
              <div class="photo">
                  <ul id="photo" class="tabs">
                      <li class="def">
                          <a href="#home">
                              <img src="public/images/ConstituyenteLogo.jpg" alt="Usuario"/>
                          </a>
                      </li>
                  </ul>
              </div>
              <!-- /Photo -->

          <div class="attributes">
              <a href="#">
                  <div class="row">
                      <div class="name">Usuario(a): <?php echo $_SESSION["nombre"]." ". $_SESSION["apellido"]; ?></div> 
                      <div class="position"><?php echo $_SESSION["tipo"]; ?></div>
                  </div>
              </a>
              
              <!-- Navigation tabs -->
              <ul id="main-nav" class="tabs">
                  <li class="about">
                      <a href="#about">
                          <i class="fa fa-user"></i>
                      </a>
                  </li>
                  <li class="resume"><a href="#resume"><i class="fa fa-tasks"></i></a></li>
                  <li class="portfolio"><a href="#portfolio"><i class="fa fa-suitcase"></i></a></li>
                  <li class="contacts"><a href="#contacts" class="tab-contact"><i class="fa fa-globe"></i></a></li>
                  <li class="feedback"><a href="#feedback"><i class="fa fa-comments"></i></a></li>
              </ul>
              
          </div>
        </div>
        <!-- /Top row -->

        <div id="mobile_row">
          <!-- Navigation tabs for mobile devices. Normally hidden. -->
            <ul id="mobile-nav" class="tabs">
              <li class="about"><a href="#about"><i class="fa fa-user"></i></a></li>
              <li class="resume"><a href="#resume"><i class="fa fa-tasks"></i></a></li>
              <li class="portfolio"><a href="#portfolio"><i class="fa fa-suitcase"></i></a></li>
              <li class="contacts"><a href="#contacts" class="tab-contact"><i class="fa fa-globe"></i></a></li>
              <li class="feedback"><a href="#feedback"><i class="fa fa-comments"></i></a></li>
            </ul>
          <!-- /Navigation tabs for mobile devices. Normally hidden. -->
        </div>

        <!-- Content -->
        <div class="content">
          <div class="panel-container">
              <div id="home">

                <!-- Home Page -->
                <p class="blue">NEED A DESIGNER?</p>
                <p class="orange">I AM HERE</p>
                <span><i class="fa fa-phone-square"></i>&nbsp;+1 234 567 876 54</span>
                <!-- / Home Page -->

              </div>
              <div id="about">

                <!-- About -->
                <!-- Welcome block -->
                <div class="plain-content">
                  <h1>Welcome!</h1>
                  <p>My name is James, I'm a web designer and web developer based in Ireland. I have 5 years web development experience and I'm available to work with you.
                  <br />Look at my Portfolio and make a right descision.</p>              
                </div>
                <!-- /Welcome block -->

                <!-- Grey block -->
                <div class="grey-content">
                  <div class="one-third">
                    <div class="services">
                      <div class="servtitle">
                        <div class="servicon"><i class="fa fa-comments web"></i><h3>Web Design</h3></div>
                      </div>
                      <div>
                        <p>
                        Depending on who you follow and what you read, you may have noticed the concept of “responsive text” being discussed in design circles recently.
                        </p>
                        <a href="#"><span>Learn More <i class="icon-angle-right"></i></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="one-third">
                    <div class="services">
                      <div class="servtitle">
                        <div class="servicon"><i class="fa fa-comments ui"></i><h3>UI Design</h3></div>
                      </div>
                      <div>
                        <p>
                        Depending on who you follow and what you read, you may have noticed the concept of “responsive text” being discussed in design circles recently.
                        </p>
                        <a href="#"><span>Learn More <i class="icon-angle-right"></i></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="one-third column-last">
                    <div class="services">
                      <div class="servtitle">
                        <div class="servicon"><i class="fa fa-comments app"></i><h3>Mobile Apps</h3></div>
                      </div>
                      <div>
                        <p>
                        Depending on who you follow and what you read, you may have noticed the concept of “responsive text” being discussed in design circles recently.
                        </p>
                        <a href="#"><span>Learn More <i class="icon-angle-right"></i></span></a>
                      </div>
                    </div>
                  </div>                  
                </div>
                <!-- /Grey block -->
                <!-- / About -->

              </div>
              <div id="resume">

                <!-- Resume -->
                <!-- Resume title -->
                <div class="plain-content">
                  <h1>Resume</h1>
                  <p>Here i'd like to describe all my professional experience and skills.</p>
                </div>
                <!-- /Resume title -->

                <!-- Employment block -->
                <div class="grey-content">
                  <div><h2>Employment</h2></div>
                  <div class="job">
                    <div class="date">
                      <div class="datefrom">2011</div>
                      <div class="datetill">Present</div>
                      <div class="trianglewrap"><div class="datetriangle"></div></div>
                    </div>
                    <div class="jobtitle">
                      <h3>Connectivity Group LLC</h3>
                      <h4><strong>Art-Director</strong></h4> 
                      <div class="jobdescription">
                        <div class="one-half">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin, ac pharetra diam convallis. Integer lobortis justo tempus odio gravida 
                        </div>
                        <div class="one-half column-last">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin, ac pharetra diam convallis. Integer lobortis justo tempus odio gravida 
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="clear dividewhite3"></div>
                  <div class="job">
                    <div class="date">
                      <div class="datefrom">2011</div>
                      <div class="datetill">Present</div>
                      <div class="trianglewrap"><div class="datetriangle"></div></div>
                    </div>
                    <div class="jobtitle">
                      <h3>ABC Construction</h3>
                      <h4><strong>Web Designer</strong></h4> 
                      <div class="jobdescription">
                        <div class="one-half">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin, ac pharetra diam convallis. Integer lobortis justo tempus odio gravida 
                        </div>
                        <div class="one-half column-last">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin, ac pharetra diam convallis. Integer lobortis justo tempus odio gravida 
                        </div>
                      </div> 
                    </div>
                    <div class="clear dividewhite3"></div>
                  </div>                  
                </div>
                <!-- /Employment block -->

                <!-- Education block -->
                <div class="plain-content">
                  <div><h2>Education</h2></div>
                  <div class="job">
                    <div class="date">
                      <div class="datefrom">2011</div>
                      <div class="datetill-f">Present</div>
                      <div class="trianglewrap"><div class="datetriangle-f"></div></div>
                    </div>
                    <div class="jobtitle">
                      <h3>Lorem Ipsum University</h3>
                      <h4><strong>Graphic Designer</strong></h4> 
                      <div class="jobdescription">
                        <div class="one-half">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin, ac pharetra diam convallis. Integer lobortis justo tempus odio gravida 
                        </div>
                        <div class="one-half column-last">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin, ac pharetra diam convallis. Integer lobortis justo tempus odio gravida 
                        </div>
                      </div> 
                    </div>
                    <div class="clear dividewhite3"></div>
                  </div>
                </div>
                <!-- /Education block -->

                <div class="clear dividewhite3"></div>

                <!-- Skills block -->
                <div class="grey-content">
                  <div><h2>Skills</h2></div>
                  <div class="clear dividewhite3"></div>
                  <div>
                    <div class="one-third">
                      <div>
                        <input class="knob" data-width="150" data-fgcolor="#1abc9c" data-bgcolor="#d2d4d8" data-thickness=".2" readonly="" value="25" />
                        <h4><strong>Graphic Designer</strong></h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin
                      </div>
                    </div>
                    <div class="one-third">
                      <div>
                        <input class="knob" data-width="150" data-fgcolor="#9b59b6" data-bgcolor="#d2d4d8" data-thickness=".2" readonly="" value="58" />
                        <h4><strong>Graphic Designer</strong></h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin
                      </div>
                    </div>
                    <div class="one-third column-last">
                      <div>
                        <input class="knob" data-width="150" data-fgcolor="#e74c3c" data-bgcolor="#d2d4d8" data-thickness=".2" readonly="" value="90" />
                        <h4><strong>Graphic Designer</strong></h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla libero a nibh sollicitudin
                      </div>
                    </div>
                  </div>
                  <div class="clear dividewhite3"></div>
                </div>
                <!-- /Skills block -->

                <div class="clear dividewhite3"></div>
                <div class="plain-content wopadd">
                  <input type="button" value="Save as PDF" class="button-red" />
                  <input type="button" value="Print" class="button-blue" />
                </div>
                <div class="clear dividewhite3"></div>
                <!-- / Resume -->

              </div>
              <div id="portfolio">

                <!-- Portfolio -->
                <div class="plain-content">
                  <h1>Portfolio</h1>
                  <p>Here i'd like to describe all my professional experience and skills.</p>

                  <!-- Project Feed Filter -->
                   <ul class="project-feed-filter">
                      <li><a href="" class="current" data-filter="*">All <i class="icon-angle-right"></i></a></li>
                      <li><a href="" data-filter=".animation">Animation <i class="icon-angle-right"></i></a></li>
                      <li><a href="" data-filter=".artwork">Artwork <i class="icon-angle-right"></i></a></li>
                      <li><a href="" data-filter=".motiongraphics">Motion Graphics <i class="icon-angle-right"></i></a></li>
                      <li><a href="" data-filter=".printdesign">Print Design <i class="icon-angle-right"></i></a></li>
                      <li><a href="" data-filter=".webdesign">Web Design <i class="icon-angle-right"></i></a></li>
                  </ul>
                  <!-- /Project Feed Filter -->

                  <!-- Project Feed -->
                  <div class="project-feed">
                      <div class="one-third project-item animation webdesign">
                          <img src="images/content/project_01.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_01.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Simple Web Project</a>
                          </div>
                      </div>
                      <div class="one-third project-item animation motiongraphics">
                          <img src="images/content/project_02.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_02.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Responsive Wordpres Theme</a>
                          </div>
                      </div>
                      <div class="one-third project-item motiongraphics">
                          <img src="images/content/project_03.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_03.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Personal Portfolio</a>
                          </div>
                      </div>
                      <div class="one-third project-item artwork webdesign">
                          <img src="images/content/project_04.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_04.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Simple Web Project</a>
                          </div>
                      </div>
                      <div class="one-third project-item animation webdesign">
                          <img src="images/content/project_05.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_05.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Mobile Application</a>
                          </div>
                      </div>
                      <div class="one-third project-item artwork printdesign">
                          <img src="images/content/project_06.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_06.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Search Engine Optimization</a>
                          </div>
                      </div>
                      <div class="one-third project-item artwork printdesign webdesign">
                          <img src="images/content/project_07.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_07.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Simple Web Project</a>
                          </div>
                      </div>
                      <div class="one-third project-item motiongraphics webdesign">
                          <img src="images/content/project_08.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_08.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Personal Portfolio</a>
                          </div>
                      </div>
                      <div class="one-third project-item artwork webdesign">
                          <img src="images/content/project_09.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_09.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Responsive Web Design</a>
                          </div>
                      </div>
                      <div class="one-third project-item printdesign webdesign">
                          <img src="images/content/project_10.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_10.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Design Theme</a>
                          </div>
                      </div>
                      <div class="one-third project-item motiongraphics">
                          <img src="images/content/project_11.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_11.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">Programming</a>
                          </div>
                      </div>
                      <div class="one-third project-item animation motiongraphics">
                          <img src="images/content/project_12.jpg" alt="" />
                          <div class="overlay"></div>
                          <div class="mask">
                              <a href="images/content/project_12.jpg" class="icon-image folio"></a>
                              <a href="portfolio_details.html" class="item-title">E-Commerce Project</a>
                          </div>
                      </div>
                  </div>
                  <!-- /Project Feed -->

                </div>
                <!-- / Portfolio -->

              </div>
              <div id="contacts">

                <!-- Contacts -->
                <div class="plain-content">
                  <h1>Contacts</h1>
                  <p>Here i'd like to describe all my professional experience and skills.</p>
                  <div>
                    <div class="one-third">
                      <div>
                        1234 Oxford drive, Daytona Beach, 
                        FL 90266, USA
                      </div>
                    </div>
                    <div class="one-third">
                      <div>
                        Phone: (415) 124-5678 
                        Fax: (415) 124-5678
                      </div>
                    </div>
                    <div class="one-third column-last">
                      <div>
                        info@snobcompany.com
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clear dividewhite6"></div>

                <!-- Google Map -->
                <div id="map"></div>
                <!-- /Google Map -->  

                <!-- / Contacts -->
              </div>
              <div id="feedback">

                <!-- Feedback -->
                <div class="plain-content">
                  <h1>Feedback</h1>
                  <p>Here i'd like to describe all my professional experience and skills.</p>

                  <!-- Contact Form -->
                  <div class="feedbacks">
                    <form method="post" id="contact-form" />                                   
                      <label>Name</label>
                      <input type="text" name="name" />
                      <label>Email</label>
                      <input type="text" name="email" />
                      <label>Website</label>
                      <input type="text" name="website" />
                      <label>Message</label>
                      <textarea cols="100" rows="8" name="message"></textarea>     
                     <input type="submit" value="Submit Form " class="button-red" /> 
                    </form>     
                  </div>                  
                </div>
                <!-- /Contact Form -->

                <!-- / Feedback -->
              </div>            
          </div>
        </div>
        <!-- /Content -->

        <!-- Footer -->
        <div id="footer">
          <div class="triangle"></div>
          <div class="copyright">© 2013 james jameson. All rights reserved.</div>          
        </div>
        <!-- /Footer -->

        <div class="clear dividewhite6"></div>
      </div>
      <!-- /Main column -->

    </div>
  <!-- /Container -->


  <!-- Back to Top -->
  <div id="back-top"><a href="#top"></a></div>
  <!-- /Back to Top -->

  </body>
</html>