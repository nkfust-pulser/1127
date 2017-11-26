<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//d3js.org/d3.v4.min.js"></script>

  <title>History 4.0</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/history2.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
      </head>

      <body>


        <!--sidebar begining-->
        <div id="wrapper" class="active">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
            <ul id="sidebar_menu" class="sidebar-nav">
             <li class="sidebar-brand">
               <a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a>
             </li>
           </ul>
           <ul class="sidebar-nav" id="sidebar">     
            <li><a>Link1<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
            <li><a>link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          </ul>
        </div>
        <!--end of sidebar-->

      </div>
      

      




      <!-- /#wrapper -->

      <!-- jQuery -->

      <script src="js/plugins/morris/raphael.min.js"></script>
      <script src="js/plugins/morris/morris.min.js"></script>
      <script src="js/plugins/morris/morris-data.js"></script>
      <script src="js/jquery.js"></script>

      <script>
       $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
      });
    </script>




  </body>

  </html>
