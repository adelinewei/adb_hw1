<?php
require_once('inc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISA6120 - Advanced Database System - Assignment #1</title>
  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

  	<!-- Optional theme -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/star-rating.min.css">

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA2SijSHw48ozVyXnNFr-QI4alZe9RaFQE&sensor=FALSE&libraries=drawing"></script>
    <script type="text/javascript" src="area/wicket.js"></script>
    <script type="text/javascript" src="area/wicket-gmap3.js"></script>
  </head>

  <body  onload="app.gmap=app.init();">

    <div class="container" style="margin-top:20px;">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-6">
          <div id="canvas" style="width:550px;height:450px;"></div>
          <textarea style="display:none;" id="wkt"><?php echo getAllCustomAreaWKT(); ?></textarea>
          <div style="margin-top:30px; text-align:center;">
            <p><a href="#" class="btn btn-info disabled" id="position">Somewhere</a> <a href="area/view.php" class="btn btn-primary">Customized Area Overview</a></p>
          </div>
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-6" id="applist">
          <div class="row" style="text-align:center;margin-top:0px;" id="applist-content">

          </div><!--/row-->
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; National Tsing Hua University, ISA6120 - Advanced Database System - Assignment #1 (Adeline, Kojima)</p>
      </footer>

    </div><!--/.container-->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <a class="modalLink" target="_blank" href="#"><h4 class="modal-title" id="myModalLabel"><img src="http://a1997.phobos.apple.com/us/r30/Purple3/v4/fa/db/60/fadb6031-91ec-c429-085c-f1dd40c78fd1/Icon-Production.png" style="height:60px;width:60px;" class="modalImage img-rounded"/> <span class="modalTitle">Title</span> <span class="modalBadge badge"></span></h4></a>
          </div>
          <div class="modal-body">
            <input id="input-id" type="number" class="rating" step="1"/>
            <input class="modalID" name="appID" type="hidden"/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/new-main.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="js/star-rating.min.js"></script>

  </body>
</html>

