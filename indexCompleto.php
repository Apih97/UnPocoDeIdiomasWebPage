<?php

  include_once 'header.php'
  
?>
<body bgcolor="white">
<!-- HEADER -->
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel1" data-slide-to="1"></li>
              <li data-target="#carousel1" data-slide-to="2"></li>
              <li data-target="#carousel1" data-slide-to="3"></li>
              <li data-target="#carousel1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active">
     <img src="Material/Paises/Espana.jpg" alt="First slide image" class="center-block" width="600" height="500" alt=""/>
                <div class="carousel-caption">
                  <h3>España, Madrird</h3>
                </div>
              </div>
              <div class="item">
     <img src="Material/Paises/Alemania.jpg" width="600" height="500" alt="Second slide image" class="center-block"/>
                <div class="carousel-caption">
                  <h3>Alemania, Berlin</h3>
                </div>
              </div>
              <div class="item">
   <img src="Material/Paises/Inglaterra.jpg" width="600" height="500" alt="Third slide image" class="center-block"/>
<div class="carousel-caption">
        <h3>Inglarerra, Londres</h3>
                </div>
              </div>
              <div class="item">
   <img src="Material/Paises/Francia.jpg" width="600" height="500" alt="Fourth slide image" class="center-block"/>
<div class="carousel-caption">
        <h3>Francia, Paris</h3>
                </div>
              </div>
              <div class="item">
    <img src="Material/Paises/Italia.jpg" width="600" height="500" alt="Fifth slide image" class="center-block"/>
<div class="carousel-caption">
        <h3>Italia, Roma</h3>
                </div>
              </div>
            </div>
<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">UnPocoDeIdiomas</a></div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="defaultNavbar1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
                  <li><a href="Acerca de.html">Acerca de</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group"> </div>
                </form>
                
                  
                  
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
</nav>

<!-- / HEADER --> 

<!--  SECTION-1 -->
<section>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>Videos y descargas</h2>
    </div>
  </div>
  
  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-sm-12 text-center"> <img src="Material/Banderas/Espana.jpg" width="340" height="240">
        <p>Al hacer click sobre estos botones le llevaran a la sección de videos y libros en español.</p>
        <table>
        <form style="float:left;" action="DescargaEspañol.html">
        <input type="submit" value="Libros">
        </form>
        
        <form style="float:right;" action="Español.html">
        <input type="submit" value="Video">
        </form>
        </table>
       <p>&nbsp;</p>
       </div>
      
      <div class="col-lg-4 col-sm-12 text-center"><img src="Material/Banderas/Italia.jpg" width="340" height="240">
        <p>Al hacer click sobre estos botones le llevaran a la sección de videos y libros en italiano.</p>
        <table>
        <form style="float:left;" action="DescargaItaliano.html">
        <input type="submit" value="Libros">
        </form>
        
        <form style="float:right;" action="Italiano.html">
        <input type="submit" value="Video">
        </form>
        </table>
       <p>&nbsp;</p>
       </div>
      
 <div class="col-lg-4 col-sm-12 text-center"><img src="Material/Banderas/Alemania.jpg" width="340" height="240">
        <p>Al hacer click sobre estos botones le llevaran a la sección de videos y libros en italiano.</p>
        <table>
        <form style="float:left;" action="DescargaAleman.html">
        <input type="submit" value="Libros">
        </form>
        
        <form style="float:right;" action="Italiano.html">
        <input type="submit" value="Video">
        </form>
        </table>
       <p>&nbsp;</p>
       </div>
      
 <div class="col-lg-4 col-sm-12 text-center"><img src="Material/Banderas/Inglaterra.jpg" width="340" height="240" alt="">
        <p>Al hacer click sobre estos botones le llevaran a la sección de videos y libros en ingles.</p>
        <table>
        <form style="float:left;" action="DescargaIngles.html">
        <input type="submit" value="Libros">
        </form>
        
        <form style="float:right;" action="Ingles.html">
        <input type="submit" value="Video">
        </form>
        </table>
       <p>&nbsp;</p>
       </div>
       
 <div class="col-lg-4 col-sm-12 text-center"><img src="Material/Banderas/Francia.jpg" width="340" height="240" alt="">
       <p>Al hacer click sobre estos botones le llevaran a la sección de videos y libros en frances.</p>
        <table>
        <form style="float:left;" action="DescargaFrances.html">
        <input type="submit" value="Libros">
        </form>
        
        <form style="float:right;" action="Frances.html">
        <input type="submit" value="Video">
        </form>
        </table>
       <p>&nbsp;</p>
       </div>
      
      <div class="col-lg-4 col-sm-12 text-center"><img src="Material/proximamente.png" width="340" height="240" alt="">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
      
    <!-- / CONTAINER--> 
</section>
<!-- FOOTER -->
<?php

  include_once 'footer.php'
  
?>
<!-- / FOOTER --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- <script src="js/jquery.js"></script> -->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
