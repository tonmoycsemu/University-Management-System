<?php
session_start();
$msg=NULL;
include('dbconnect.php');

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != 2) {
  header('Location: index.php');
  exit();
}

if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header('Location: index.php');
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../admin/adminPicture/admin-icon.png"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5-0.0.2.css">
    <title>Admin Pannel</title>
    <style>

      .left-menu{
        background: #0084FF;
      }
      table{text-align: center;}
      
      form{

        background: #FFF;
        border:2px solid #4753FF; 
        padding: 40px 30px 30px 30px;
        box-shadow: 0px 0 25px 0px #888;
      }
      form input{
        margin:0 0 30px 0;
      }
      
      .side-dept-list{
        list-style:none;
      }

      .img{}
      .img-in{
        text-align: center;
        
      }
      .img img{
        width:220px;
        border: 5px solid #fff;
      }
      .img-in h5{
        text-transform: uppercase;;
        color: #0084FF;
        font-weight: 600;
        background: #fff;
        width: 220px;
        margin: 0 auto;
        text-align: center;
      }
      
      
    

      .side-dept-list li a{
        display: block;
        padding: 15px 16px;
        font-size: 18px;
        color: #fff;
        font-family: "Roboto", sans-serif;
        text-decoration: none;
      }
      .side-dept-list li a:hover{
        color: currentColor;
      }
      .side-dept-list li:hover .side-dept-list li a{
        color:#fff !important;
      }
      .side-dept-list li:last-child{
        border-bottom: 0px solid #ddd;
      }
      .my-btn{
        width: 100%;
        color: #FFF;
        background: #4753FF;
        text-transform: uppercase;
        font-weight: 600;
        border:2px solid #4753FF;
        
      }
       .my-btn:hover{
          color: #4753FF;
          background: #fff;
       }
       .color-1{color: #FFC36D;}
       .color-2{color: #FF7676;}
       .color-3{color: #FF75E8;}
       .color-4{color: #FFEA00;}
       .color-5{color: #33B4FF;}
       .color-6{color: #05BD52;}

       .home{}
       .home-title{
          background: #F7F7F7;
          padding: 22px;
          margin: 30px 0;
       }
       .home-title h1{}
       .home-title h5{
        font-weight: 600;
        margin: 25px 0;
        color: #4753FF;

       }
       .home h5 i{margin: 0 10px 0 0;}
       .home-content{}
       .home-content .home-card{
          background: #F7F7F7;
          padding: 22px;
          margin: 0 0 30px 0;
        }
       .home-content .home-card h1{
        font-weight: 600;
        color: #4753FF;
       }
       .home-content .home-card p{
          
          font-size: 15px;
          font-weight: 601;
       }
       .home-content .home-card i{
        font-size: 50px;
        
       }
       .home-card {
  padding: 20px;
  margin: 10px;
  background: #f5f5f5;
  border-radius: 10px;
  text-align: center;
  transition: all 0.3s ease;
  cursor: pointer;
}

/* Hover effect */
.home-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  background: #ffffff;
}

/* Icon animation */
.home-card i {
  font-size: 30px;
  margin-top: 10px;
  transition: all 0.3s ease;
}

.home-card:hover i {
  transform: scale(1.2);
}

/* Text color change */
.home-card:hover h1 {
  color: #007bff;
}

.home-card:hover p {
  color: #555;
}

    </style>
  </head>