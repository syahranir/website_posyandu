<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location: login_view");
  }
?>
<!DOCTYPE html>
<html>
  <head><html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/logoremove.png" type="image/x-icon">
    <title>E-Posyandu Pangongan</title>
    <style type="text/css">
      a, button,input[type=submit],input[type=reset] {
        font-family: sans-serif;
        font-size: 150px;
        background: #22a4cf;
        color: white;
        border: white 3px solid;
        border-radius: 5px;
        padding: 12px 20px;
        margin-top: 10px;
      }
      a {
        text-decoration: none;
      }
      a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
        opacity:0.9;
      }   
      /* .bawahnav {
        background-image: url(img/menu/bg1.png);
        background-attachment: scroll;
        background-size: cover;
        background-origin: inherit;
      } */
      /* #judul{
        font-size: 35px;
        margin: 0px 0px 0px 18px;
        font-family: "futura Md BT";
        color: black;
      }  */
      #logonav{
        margin-left: 30px;
      }

      .t-inline-block{
        font-size: 50px;
      }
      #box{
        border: none;
      }
      .box{
        padding: 50px;
        margin-bottom: 10px;
      }
      #content{
        position: absolute;
        align-content: center;
      }

      @media screen and (max-height: 640px) {
        #wraper {width: 640px; 
            position: relative;}
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            .card-img-top {width: 50px;}
      }
    </style>
  </head>
  
  <body>
   <!-- <div id="wrapper">
    <div id="container">
      <nav class="navbar bg-light">
        <a class="navbar-brand" onclick="window.location.href='home'">
          <p class="d-inline-block align-middle" id="judul">E-Posyandu Pongangan</p>
        </a> 
        <div class="nav-item dropleft">
          <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/menu/login.png" width="70px"></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="login.php">Logout</a>
             </div>
          </div> 
      </nav>
    </div> -->
    <div id="container align-self-center" class="bawahnav">
      <div class="box">
        <div class="row justify-content-lg-center">
          <div class="col-md-3">
          <a href="anak" button type="button" name="button" class="btn btn-info btn-md" >DATA ANAK</a>  
          </div>
          <div class="col-md-3">
          <a href="bidan" button type="button" name="button" class="btn btn-info btn-md">DATA BIDAN</a>  
          </div>
          <div class="col-md-3">
          <a href="kader" button type="button" name="button" class="btn btn-info btn-md" >DATA KADER</a>
          </div>
        </div>
        <br>
        <div class="row justify-content-lg-center">
          <div class="col-md-3">
          <a href="timbang" button type="button" name="button" class="btn btn-info btn-md" >DATA TIMBANG</a>  
          </div>
          <div class="col-md-3">
          <a href="imunisasi" button type="button" name="button" class="btn btn-info btn-md" >DATA IMUNISASI</a>  
          </div>
          <div class="col-md-3">
          <a href="laporan" button type="button" name="button" class="btn btn-info btn-md" >LAPORAN</a>  
          </div>
        </div>
      </div>
    </div>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>