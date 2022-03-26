<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.jackspiceradams.com%2Fwp-content%2Fuploads%2F2017%2F05%2FCafe-Soya-01.jpg&f=1&nofb=1");
            background-size: 1600px 800px;
        }
.button-24 {
  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.button-24:hover,
.button-24:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

.button-24:active {
  opacity: .5;
}

        #main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        #form{
            font-family: algerian;
            border-radius: 20px;
            padding: 30px 80px;
            padding-bottom: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            box-shadow: 6px 5px 10px 1px black;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1 id="title" style="font-family: algerian;">Food Order</h1>
        <div id="form">
            <h4 >User Login</h4>
            <form action="{{url('/process_login')}}" method="POST">
            @csrf
                <input type="text" name="uname" placeholder="Username"><br><br>
                <input type="text" name="upass" placeholder="Enter Password"><br><br>
                <input style="margin-left: 30px;  margin-top: 30px; width: 150px; height: 40px" class="button-24" type="submit" name="save" value="Login">
            </form>
        </div>
    </div>
</body>
</html>