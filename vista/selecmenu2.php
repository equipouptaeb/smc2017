     
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
                  <li class="contacts">
                      <a href="#about">
                          <i class="fa fa-user"></i>
                      </a>
                  </li>
                 
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
                <p class="blue">Ingresar datos</p>
                
                
                <div class="feedbacks">
                    <form method="post" id="cedula-form" />                                   
                      <label class="orange"> Cédula</label>
                      <input type="text" name="cedula" />
                      <input type=hidden name="buscar" value="si" />
                     <input type="submit" value="Aceptar" class="button-red" /> 
                    </form>     
                  </div>
                
                    <div id="respuesta"></div>
               
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

                
                <!-- / Feedback -->
              </div>            
          </div>
        </div>
        <!-- /Content -->

        <!-- Footer -->
        <div id="footer">
          <div class="triangle"></div>
          <div class="copyright"></div>          
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