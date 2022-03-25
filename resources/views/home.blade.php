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
        #nav{
            display: flex;
            justify-content: flex-end;
            padding: 20px 80px;
        }
        .foodItem{
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            border: solid 2px black; 
            border-radius: 20px;
            padding: 20px;
            margin-top: 30px;
            background-color: white;
        }
        .imgClass{
            margin-bottom: 20px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div id="nav">
        <form action="{{url('/orders')}}">
        @csrf
            <input type="submit"  value="Order List" name="btn"/>
        </form>
    </div>
    <div style="display: flex; justify-content: space-around;">
    <form action="{{url('/item1')}}" method="POST">
    @csrf
        <div class="foodItem">
            <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fharvestbakery.com%2Fwp-content%2Fuploads%2F2016%2F04%2FCranberryWalnutMuffin_clipped_rev_1.png&f=1&nofb=1" alt="muffin" height="300px" width="300px">
            <button type="submit" id="1" value="Muffin">Muffin</button>
        </div>
    </form>
    <form action="{{url('/item2')}}" method="POST">
    @csrf
        <div class="foodItem">
            <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffarm5.staticflickr.com%2F4206%2F34630446624_ec6133ed16_o_d.jpg&f=1&nofb=1" alt="biriyani" height="300px" width="300px">
            <button type="submit" id="2" value="Biriyani">Biriyani</button>
        </div>
    </form>
    <form action="{{url('/item3')}}" method="POST">
    @csrf
        <div class="foodItem">
            <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stahlbush.com%2Fwp-content%2Fuploads%2F2020%2F06%2FCut-Berry-Vanilla-Cake-with-Slice-by-Bronwyn-Fraser-landscape-1-scaled.jpg&f=1&nofb=1" alt="cake" height="300px" width="300px">
            <button type="submit" id="3" value="Cake">Cake</button>
        </div>
    </form>
    </div>
</body>

</html>