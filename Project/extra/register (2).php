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
  <link href="css/register-nav.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
      </head>



      <body>

        <div>

          <div id="page-content-wrapper" style="padding:0px;">
            <div class="container-fluid title-css">

              <ul class="nav navbar-nav navbar-left navbar-left-css" style="margin-right: 0px;">



                <li><p class="register-nav-title">PULSER 2.0</p></li>

                <li><a href="index.php" class="navbar-left-title-css"><i class="fa fa-home" style="font-size: 20px;"></i></a></li>

                <li><a class="navbar-left-title-css">產品</a></li>

                <li><a class="navbar-left-title-css">應用程式</a></li>

                <li><a class="navbar-left-title-css">說明</a></li>

                <li><a href="dash4.php" class="navbar-left-title-css">服務</a></li>

              </ul>

              <ul class="nav navbar-nav navbar-right" style="margin-right: 0px; ">

                <li><a class="navbar-right-title-css"><i class="fa fa-fa" style="font-size: 20px;"></i></a></li>
                <li><a class="navbar-right-title-css"><i class="fa fa-facebook-official" style="font-size: 20px;"></i></a></li>
                <li><a class="navbar-right-title-css"><i class="fa fa-instagram" style="font-size: 20px;"></i></a></li>
                <li><a class="navbar-right-title-css"><i class="fa fa-google-plus-official" style="font-size: 20px;"></i></a></li>

              </ul>
            </div>
          </div>
          <!-- /#page-content-wrapper -->

        </div>

        <div style="height:40px;">
        </div>



        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="form-body">
                <ul class="nav nav-tabs final-login">
                  <li><a data-toggle="tab" href="#sectionA" style="text-align: center;font-size:18px;">登入</a></li>
                  <li class="active"><a data-toggle="tab" href="#sectionB" style="text-align: center;font-size:18px;">註冊</a></li>
                </ul>
                <div class="tab-content">
                  <div id="sectionA" class="tab-pane fade">
                    <div class="innter-form">
                      <form class="sa-innate-form" method="post">
                        <input type="text" name="username" placeholder="使用者信箱">
                        <input type="password" name="password" placeholder="密碼">
                        <a href="forgetpassword.php" style="margin-left: 5px;">忘記密碼?</a>
                        <div class="buttonOKandForgetP">
                          <button type="button" class="btn btn-default">確定</button>
                          
                        </div>
                      </form>
                    </div>
                    <div class="social-login">
                      <p></p>
                      <ul>
                        <li><a href="" style="margin-right:5px;"><i class="fa fa-facebook"></i> 使用Facebook登入</a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i> 使用Google+登入</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div id="sectionB" class="tab-pane fade in active">
                    <div class="innter-form">
                      <form class="sa-innate-form" method="post">
                        <label>姓名</label>
                        <input type="text" name="username" placeholder="姓名">
                        <label>信箱</label>
                        <input type="text" name="mail" placeholder="註冊信箱">
                        <label>密碼</label>
                        <input type="password" name="password" placeholder="密碼">
                        <label>手機號碼</label>
                        <input type="text" name="phonenumber" placeholder="手機號碼">

                        <div class="buttonOKandForgetP">
                          <button type="submit">註冊</button>
                        </div>
                        
                      </form>
                    </div>
                    <div class="social-login">
                      <p></p>
                      <ul>
                        <li><a href="" style="margin-right:5px;"><i class="fa fa-facebook"></i> 使用Facebook註冊</a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i> 使用Google+註冊</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        



        
        <!-- /#wrapper -->

        <!-- jQuery -->

        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        
        

      </body>

      </html>
