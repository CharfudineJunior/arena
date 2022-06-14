<!--Design by foolishdeveloper.com-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        *{
        list-style: none;
        text-decoration: none;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
        }

        body{
        background: #f5f6fa;
        }

        .wrapper .sidebar{
        background: rgb(5, 68, 104);
        position: fixed;
        top: 0;
        left: 0;
        width: 225px;
        height: 100%;
        padding: 20px 0;
        transition: all 0.5s ease;
        }

        .wrapper .sidebar .profile{
        margin-bottom: 30px;
        text-align: center;
        }

        .wrapper .sidebar .profile img{
        display: block;
        width: 100px;
        height: 100px;
            border-radius: 50%;
        margin: 0 auto;
        }

        .wrapper .sidebar .profile h3{
        color: #ffffff;
        margin: 10px 0 5px;
        }

        .wrapper .sidebar .profile p{
        color: rgb(206, 240, 253);
        font-size: 14px;
        }

        .wrapper .sidebar ul li a{
        display: block;
        padding: 13px 20px;
        border-bottom: 1px solid #10558d;
        color: rgb(241, 237, 237);
        font-size: 16px;
        position: relative;
        }

        .wrapper .sidebar ul li a .icon{
        color: #dee4ec;
        width: 30px;
        display: inline-block;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active{
        color: #0c7db1;

        background:white;
            border-right: 2px solid rgb(5, 68, 104);
        }

        .wrapper .sidebar ul li a:hover .icon,
        .wrapper .sidebar ul li a.active .icon{
        color: #0c7db1;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before{
        display: block;
        }

        .wrapper .section{
        width: calc(100% - 225px);
        margin-left: 225px;
        transition: all 0.5s ease;
        }

        .wrapper .section .top_navbar{
        background: #000066;
        height: 50px;
        display: flex;
        align-items: center;
        padding: 0 30px;
        
        }

        .wrapper .section .top_navbar .hamburger a{
        font-size: 28px;
        color: #f4fbff;
        }

        .wrapper .section .top_navbar .hamburger a:hover{
        color: #a2ecff;
        }

        .wrapper .section .container{
        margin: 30px;
        background: #e6e6ff;
        padding: 258px;
        line-height: 28px;
        }

        body.active .wrapper .sidebar{
        left: -225px;
        }

        body.active .wrapper .section{
        margin-left: 0;
        width: 100%;
        }
   </style>     
<body>
   
    <div class="wrapper">
       <div class="section">
    <div class="top_navbar">
      <div class="hamburger">
        <a href="#">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
    <div class="container">
        <main style="margin-left:30%;margin-top:5%;">
            @yield('content') 
        </main>
    </div>
  </div>
        <div class="sidebar">
            <div class="profile">
                <img src="https://i1.sndcdn.com/avatars-VH72iF5MzzJPi7CZ-mAOCsQ-t240x240.jpg" alt="profile_picture">
                <h3>Admin</h3>
                <p>Development area</p>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">People</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Perfomance</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
    <script>
        var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
    </script>
</body>
</html>





        
