<!DOCTYPE html>
<html>
	<head>
		<title>Agenda</title>

		<link rel="stylesheet" type="text/css" href="css/sala_h.css">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<link rel="stylesheet" type="text/css" href="css/scrolling-nav.css">
		
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

		<script src="js/jquery_aja.js"></script>

		<script src="js/perfect-scrollbar.min.js"></script>

		<link rel='stylesheet' href="css/perfect-scrollbar.css">
		
	


		<!-- Custom Theme files -->
		<link href="css/style_calendario.css" rel='stylesheet' type='text/css' />

		<!-- Custom Theme files -->

		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script type="application/x-javascript">
		 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
		 function hideURLbar(){ window.scrollTo(0,1); } 
		 </script>

		<script src="js/jquery-1.11.1.min.js"></script>

		<script src="js/jQuery-plugin-progressbar.js"></script>

		
		<!--//theme-style-->
		 <!--Calender-->
		 <link rel="stylesheet" href="css/clndr.css" type="text/css" />

		 <script src="js/underscore-min.js"></script>
		 
		 <script src= "js/moment-2.2.1.js"></script>
		 
		 <script src="js/clndr.js"></script>
		 
		 <script src="js/site.js"></script>

     <style type="text/css">
       .navbar{
        border: none;
        font-family: open_sans;
        src:url('../fonts/opensans-regular-webfont.woff');
       }
     </style>
	</head>
	<body>
	<?php
		include ('cabecalho_logado.php');
	?>

	<div class="margem_top">
    <div id="calendario" class="main "> <!--   hvr-float-shadow -->
        <div class="slide" >
        <div id="dd1" class="wrapper-dropdown-3" tabindex="1"><span><img src="img/nav.png" alt=""/></span>
                    <ul class="dropdown">
                    
                        
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Taréfas</a></li>
                        <li><a href="#">Minhas anotações</a></li>
                        <li><a href="#">Mostrar tudo</a></li>
                    </ul>
        <script type="text/javascript">
              function DropDown(el) {
                  this.dd = el;
                  this.initEvents();
                  }
                  DropDown.prototype = {
                    initEvents : function() {
                      var obj = this;
                          obj.dd.on('click', function(event){
                          $(this).toggleClass('active');
                          event.stopPropagation();
                          }); 
                        }
                      }
                      $(function() {
                    
                      var dd = new DropDown( $('#dd1') );
                    
                    $(document).click(function() {
                      // all dropdowns
                    $('.wrapper-dropdown-3').removeClass('active');
                            });
                    
                          });
                  </script>
                
                </div>

          <!--Slide-->      
            <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
              <li>
                <div class="banner-info">
                   <h3>Eventos</h3>
                    <p>18 Abril</p>
                  <img src="img/1.jpg" alt=""/>
                </div>
              </li>
              <li>
                <div class="banner-info">
                   <h3>Eventos</h3>
                  <p>16 Abril</p>
                  <img src="img/2.jpg" alt=""/>
                </div>
              </li>
              <li>
                <div class="banner-info">
                   <h3>Eventos</h3>
                    <p>25 dezembro</p>
                  <img src="img/1.jpg" alt=""/>
                </div>
              </li>
            </ul>
          </div>
          <!--Final Slide-->

            <!--banner-Slider-->
            <script src="js/responsiveslides.min.js"></script>
             
             <script>
            // You can also use "$(window).load(function() {"
            
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
              });

            });
              </script>

             <div class="clear"></div>
            <ul class=" side-icons">
              <li><a class="fb" href="#"></a></li>
              <li><a class="twitt" href="#"></a></li>
              <li><a class="goog" href="#"></a></li>
             </ul>

          </div>
           <div class="mini-cal">
      <div class="calender">
          <div class="column_right_grid calender">
                      <div class="cal1 ">
                        <div class="clndr ">
                          <div class="clndr-controls ">
                            <div class="clndr-control-button">
                              <p class="clndr-previous-button">previous</p>
                            </div>
                            <div class="month">September 2015</div>
                            <div class="clndr-control-button rightalign">
                              <p class="clndr-next-button">next</p>
                            </div>
                          </div>
                          <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                            <thead>
                              <tr class="header-days">
                                <td class="header-day">S</td>
                                <td class="header-day">M</td>
                                <td class="header-day">T</td>
                                <td class="header-day">W</td>
                                <td class="header-day">T</td>
                                <td class="header-day">F</td>
                                <td class="header-day">S</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="day past adjacent-month last-month calendar-day-2015-08-30">
                                  <div class="day-contents">30</div>
                                </td>
                                <td class="day past adjacent-month last-month calendar-day-2015-08-31">
                                  <div class="day-contents">31</div>
                                </td>
                                <td class="day past calendar-day-2015-09-01">
                                  <div class="day-contents">1</div>
                                </td>
                                <td class="day past calendar-day-2015-09-02">
                                  <div class="day-contents">2</div>
                                </td>
                                <td class="day past calendar-day-2015-09-03">
                                  <div class="day-contents">3</div>
                                </td>
                                <td class="day past calendar-day-2015-09-04">
                                  <div class="day-contents">4</div>
                                </td>
                                <td class="day past calendar-day-2015-09-05">
                                  <div class="day-contents">5</div>
                                </td>
                              </tr>
                              <tr>
                                <td class="day past calendar-day-2015-09-06">
                                  <div class="day-contents">6</div>
                                </td>
                                <td class="day past calendar-day-2015-09-07">
                                  <div class="day-contents">7</div>
                                </td>
                                <td class="day past calendar-day-2015-09-08">
                                  <div class="day-contents">8</div>
                                </td>
                                <td class="day past calendar-day-2015-09-09">
                                  <div class="day-contents">9</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-10">
                                  <div class="day-contents">10</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-11">
                                  <div class="day-contents">11</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-12">
                                  <div class="day-contents">12</div>
                                </td>
                              </tr>
                              <tr>
                                <td class="day past event calendar-day-2015-09-13">
                                  <div class="day-contents">13</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-14">
                                  <div class="day-contents">14</div>
                                </td>
                                <td class="day past calendar-day-2015-09-15">
                                  <div class="day-contents">15</div>
                                </td>
                                <td class="day past calendar-day-2015-09-16">
                                  <div class="day-contents">16</div>
                                </td>
                                <td class="day past calendar-day-2015-09-17">
                                  <div class="day-contents">17</div>
                                </td>
                                <td class="day past calendar-day-2015-09-18">
                                  <div class="day-contents">18</div>
                                </td>
                                <td class="day past calendar-day-2015-09-19">
                                  <div class="day-contents">19</div>
                                </td>
                              </tr>
                              <tr>
                                <td class="day past calendar-day-2015-09-20">
                                  <div class="day-contents">20</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-21">
                                  <div class="day-contents">21</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-22">
                                  <div class="day-contents">22</div>
                                </td>
                                <td class="day past event calendar-day-2015-09-23">
                                  <div class="day-contents">23</div>
                                </td>
                                <td class="day past calendar-day-2015-09-24">
                                  <div class="day-contents">24</div>
                                </td>
                                <td class="day past calendar-day-2015-09-25">
                                  <div class="day-contents">25</div>
                                </td>
                                <td class="day today calendar-day-2015-09-26">
                                  <div class="day-contents">26</div>
                                </td>
                              </tr>
                              <tr>
                                <td class="day calendar-day-2015-09-27">
                                  <div class="day-contents">27</div>
                                </td>
                                <td class="day calendar-day-2015-09-28">
                                  <div class="day-contents">28</div>
                                </td>
                                <td class="day calendar-day-2015-09-29">
                                  <div class="day-contents">29</div>
                                </td><td class="day calendar-day-2015-09-30">
                                <div class="day-contents">30</div>
                              </td>
                              <td class="day adjacent-month next-month calendar-day-2015-10-01">
                                <div class="day-contents">1</div>
                              </td>
                              <td class="day adjacent-month next-month calendar-day-2015-10-02">
                                <div class="day-contents">2</div>
                              </td>
                              <td class="day adjacent-month next-month calendar-day-2015-10-03">
                                <div class="day-contents">3</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
            </div>
          <div class="cal-pos a">
            <ul>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="cal-pos">
            <ul>
              <li></li>
              <li></li>
            </ul>
          </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
  <p style="color: #F4CE51;text-align: center;font-size: 20px;">&nbsp;</p>

 <!-- Scrolling Nav JavaScript -->
    
    <script src="js/jquery.easing.min.js"></script>
    
    <script src="js/scrolling-nav.js"></script>

    
    <!-- jQuery (necessary JavaScript plugins) -->
	
	<script src="js/bootstrap.js"></script>

	<?php
		include("rodape.php");
	?>
	</body>
</html>