<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Admin Dashboard GB">

  <meta name="author" content="GeeksLabs">

  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <link rel="shortcut icon" href="img/favicon.png">



  <title>Panel de Administracion</title>



  <!-- Bootstrap CSS -->

  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- bootstrap theme -->

  <link href="../css/bootstrap-theme.css" rel="stylesheet">

  <!--external css-->

  <!-- font icon -->

  <link href="../css/elegant-icons-style.css" rel="stylesheet" />

  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles -->

  <link href="../css/style.css" rel="stylesheet">

  <link href="../css/style-responsive.css" rel="stylesheet" />



  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->

  <!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

      <script src="js/lte-ie7.js"></script>

    <![endif]-->


  </head>

  <style>





/* Style the tab */

.tab {

  overflow: hidden;

  border: 1px solid #ccc;

  background-color: #f1f1f1;

}



/* Style the buttons inside the tab */

.tab button {

  background-color: inherit;

  float: left;

  border: none;

  outline: none;

  cursor: pointer;

  padding: 14px 16px;

  transition: 0.3s;

  font-size: 17px;

}



/* Change background color of buttons on hover */

.tab button:hover {

  background-color: #ddd;

}



/* Create an active/current tablink class */

.tab button.active {

  background-color: #ccc;

}



/* Style the tab content */

.tabcontent {

  display: none;

  padding: 6px 12px;

  border: 1px solid #ccc;

  border-top: none;

}

</style>
<body>

    @extends('layouts.nav')
    @section('menu')

    @yield('contenido_2')
    
    @endsection
    
 
    
    <!-- javascripts -->
    
    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script>
  
    <!-- nicescroll -->
  
    <script src="../js/jquery.scrollTo.min.js"></script>
  
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
  
    <!--custome script for all page-->
  
    <script src="../js/scripts.js"></script>

</body>

</html>



