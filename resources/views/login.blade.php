<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #D3B5E5;
        }
        #main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        #form{
            border-radius: 20px;
            padding: 30px 80px;
            padding-bottom: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1 id="title">Food Order</h1>
        <div id="form">
            <h4>User Login</h4>
            <form action="{{url('/process_login')}}" method="POST">
            @csrf
                <input type="text" name="uname" placeholder="Username"><br><br>
                <input type="text" name="upass" placeholder="Enter Password"><br><br>
                <input style="margin-left: 30px;  margin-top: 30px; width: 150px; height: 40px" type="submit" name="save" value="Login">
            </form>
        </div>
    </div>
</body>
</html>