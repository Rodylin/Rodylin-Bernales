<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Strength Gym</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        /* background-color: #0069fb;     */
        /* background-image: url('https://thumbs.dreamstime.com/b/abstract-blur-gym-room-interior-fitness-equipment-background-abstract-blur-gym-room-interior-fitness-equipment-168759839.jpg'); */
        background-image: url('https://wallsdesk.com/wp-content/uploads/2016/10/Gym-for-desktop.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .buttons {
        /* background-color: #740606; */
        color: #ffffff;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 15px;
        }   

    ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        margin-top: 25px;
    }

    li {
        margin-right: 15px;
        margin-top: 35px;
        font-size: 20px;
    }

    a {
        text-decoration: none;
        color: black;
        padding: 12px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }


    a:hover, a.active {
        background-color: rgb(192, 10, 10);
    }

    .container {
        background-color: rgba(220, 20, 60, 0.788);
        padding: 30px;
        /* margin: 2% 6%;
        border-radius: 5px;
        border-style: inset;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); */
    }
    .name { 
        padding-left: 580px;    
    }
    img {
        height: 100px;
    }
    h1, label {
        color: white;
        text-align: center;
    }
    .row {
        justify-content: center;
    }
</style>
</head>
<body>

  
    <div class="buttons">
        <ul>
            <div class="logo">
                <img src="https://www.logolynx.com/images/logolynx/3f/3fe209d213f1e1924a5349cf14a64e33.png" alt="logo">
            </div>
            <li><a href="{{ url('/home') }}"    class="{{ Request::is('home') ? 'active' : '' }}">Power Strength Gym</a></li>
            <li><a href="{{ url('/user')}}" class="{{ Request::is('user') ? 'active' : '' }}"> Members</a></li>
            <li><a href="{{ url('/about')}}" class="{{ Request::is('about') ? 'active' : '' }}"> Fitness Advisors </a></li>
            <li><a href="{{ url('/course')}}" class="{{ Request::is('course') ? 'active' : '' }}"> Courses </a></li>

        </ul>   
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
