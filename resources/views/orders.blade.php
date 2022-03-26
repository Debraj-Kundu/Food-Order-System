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
            box-shadow: 10px 9px 10px 1px #C26DBC;
            border-radius: 20px;
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
        .footer{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
        }
        
.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}
    </style>
</head>
<body>
    <div id="nav">
        <form action="{{url('/home')}}" method="GET">
            <button type="submit" class="button-62">Home</button>
        </form>
    </div>
    <div id="itemDiv">
        @foreach($items[0] as $item)
            <div class="item">
                <h3>{{$item['name']}}</h3>
                <h3>${{$item['cost']}}</h3>
                <h3>{{$item['date']}}</h3>
            </div>
        @endforeach    
    </div>
    <div class="footer">
        <h2>Total: ${{$items[1]}}</h2>
    </div>
</body>
</html>