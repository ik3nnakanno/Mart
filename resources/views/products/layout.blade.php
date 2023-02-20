
<!DOCTYPE html>
<html>
<head>
    <title>Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }

    body {
        padding: 0px;
        margin-bottom: 40px;
    }
        body{
            padding: 20px
        }
        button{
        padding: 7px;
        border-radius: 6px;
    }
    a:visited{
        text-decoration: none;
    }
    a:active{
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    a{
        text-decoration: none;
    }
    .btnn {
        display: block;
        margin-left: 150px;
    }
    .button{
        padding: 4px
    }
        .nnn{
            width: 300px;
            box-shadow: 1px 2px 3px rgba(66, 66, 66, 0.211), -1px 2px 3px rgba(66, 66, 66, 0.211),
            -1px -2px 3px rgba(66, 66, 66, 0.211), 1px -2px 3px rgba(66, 66, 66, 0.211);
            padding: 7px;
            border-radius: 7px;
            margin: 10px auto
        }
        button{
            margin: 8px;
        }
        .nav{
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        width: 100%;
        border-bottom: 2px solid rgba(128, 128, 128, 0.11); 
        margin-bottom: 25px;
        padding: -7px 9px;
        align-items: center;
    }
    .ul{
        display: flex;
        justify-content: space-evenly
    }
    </style>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>