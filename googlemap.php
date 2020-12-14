<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="home.html"><img src="assets/logo.png" alt="seed_logo" class="hidden-xs hidden-sm">
                        <img src="assets/logo.png" alt="seed_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="HomePage.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <!-- <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li> -->
                        <li class="active"><a href="googlemap.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Google Map</span></a></li>
                        <li><a href="calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
                        <li><a href="setting.php"><i class="fa fa-info" aria-hidden="true"></i><span class="hidden-xs hidden-sm">About</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <!-- <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div> -->
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <!-- <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li> -->
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                <style>
                    *{
                        margin: 0;
                        padding 0;

                    }
                    #map{
                        height: 500px;
                        width: 100%;
                    }
                    </style>
                    <div id="map" ></div>
                    <script>
                        function initMap(){
                            var location={lat:10.315699,lng:123.885437};
                            var map = new google.maps.Map(document.getElementById("map"),{
                                zoom:4,
                                center: location
                            });

                        }
                        
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgX_eQ-YB_2R74F9ZlbvYUQ8GSOrQPaAQ&callback=initMap"></script>
 <style>
         body
         {
             margin: 0;
             padding: 0;
             font-family:
         }              
      .container{
          position: relative;
          width: 1200px;
          height: 300px;
          margin: 10px auto;
          
      }
      .container .box{
          position: relative;
          width: calc(350px - 30px);
          height: calc(350px - 30px);
          background: #000;
          float: left;
          margin: 15px;
          box-sizing: border-box;
          overflow: hidden;
          border-radius: 10px;
      }
      .container .box .icon{
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: #f00;
          transition: 0.5s;
          z-index: 1 ;
      }
      .container .box:hover .icon{
          top: 20px;
          left: calc(50% - 40px);
          width: 80px;
          height: 80px;
          border-radius: 50%;
      }
      .container .box .icon .fa{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          font-size: 80px;
          transition: 0.5s;
          color: #fff;
      }
      .container .box:hover .icon .fa{
        font-size: 40px;
      }
      .container .box .content{
        position: absolute; 
        top: 100%;
        height: calc(100% - 100px);
        text-align:center;
        padding: 20px;
        box-sizing: border-box;
        transition: 0.5s;
        opacity: 0;
      }
      .container .box:hover .content{
        top: 100px;
        opacity: 1; 
      }
      .container .box .content h3{
          margin: 0 0 10px;
          padding: 0;
          color: #fff;
          font-size: 24px;
      }
      .container .box .content p{
        margin: 0;
          padding: 0;
          color: #fff;
          
      }
      .container .box:nth-child(1) .icon{
            background: #319635;
      }
      .container .box:nth-child(1){
            background: #4caf50;
      } 
      .container .box:nth-child(2) .icon{
            background: #d03852;
      }
      .container .box:nth-child(2){
            background: #f54967;
      } 
      .container .box:nth-child(3) .icon{
            background: #23798e;
      }
      .container .box:nth-child(3){
            background: #328fa5;
      } 


</style>

<body>
    <div class="container">
        <div class="box">
            <div class=icon> 
                <i class="fa fa-bar-chart" aria-hidden="true"> </i>
            </div>
            <div class="content">
                <h3>Stats</h3>
                <i class="fa fa-user" aria-hidden="true">100</i><br>
                <i class="fa fa-mars" aria-hidden="true">50</i><br>
                <i class="fa fa-venus" aria-hidden="true">50</i>
            </div>
        </div> 
        <div class="box">
            <div class=icon> 
                <i class="fa fa-search" aria-hidden="true"> </i>
            </div>
            <div class="content">
                <h3>Info</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos. </p>
            </div>
        </div>  
        <div class="box">
            <div class=icon> 
                <i class="fa fa-clone" aria-hidden="true"> </i>
            </div>
            <div class="content">
                <h3>History</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
            </div>
        </div>    
       
</body>










   <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>