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
        .item{
            background-color: white;
            display: flex;
            justify-content: space-evenly;
            margin-top: 20px;
            padding: -10px;
            width: 700px;
        }
        #itemDiv{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #nav{
            display: flex;
            justify-content: flex-end;
            padding: 20px 80px;
        }
    </style>
</head>
<body>
    <div id="nav">
        <form action="{{url('/home')}}" method="GET">
            <button type="submit">Home</button>
        </form>
    </div>
    <div id="itemDiv">
        @foreach($items as $item)
            <div class="item">
                <h3>{{$item['name']}}</h3>
                <h3>{{$item['cost']}}</h3>
            </div>
        @endforeach    
    </div>
</body>
</html>