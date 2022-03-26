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
            box-shadow: 6px 5px 10px 1px black;
        }
        .imgClass{
            margin-bottom: 20px;
            border-radius: 20px;
        }
        .price{
            margin-left: 20px;
            
        }
        .details{
            
        }

/* CSS */
button {
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

button:hover,
button:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

button:active {
  opacity: .5;
  transform: scale(0.90);
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
        <form action="{{url('/orders')}}">
        @csrf
            <input type="submit" class="button-62" value="Order List" name="btn"/>
        </form>
    </div>
    <div style="display: flex; justify-content: space-around;">
        <form action="{{url('/item1')}}" method="POST">
        @csrf
            <div class="foodItem">
                <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fharvestbakery.com%2Fwp-content%2Fuploads%2F2016%2F04%2FCranberryWalnutMuffin_clipped_rev_1.png&f=1&nofb=1" alt="muffin" height="300px" width="300px">
                <div class="details">
                    <h3>Muffin</h3>
                    <h3 class="price">$80</h3>
                </div>
                <button type="submit" id="1" value="Muffin">Order</button>
            </div>
        </form>
        <form action="{{url('/item2')}}" method="POST">
        @csrf
            <div class="foodItem">
                <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffarm5.staticflickr.com%2F4206%2F34630446624_ec6133ed16_o_d.jpg&f=1&nofb=1" alt="biriyani" height="300px" width="300px">
                <div class="details">
                    <h3>Biriyani</h3>
                    <h3 class="price">$360</h3>
                </div>
                <button type="submit" id="2" value="Biriyani">Order</button>
            </div>
        </form>
        <form action="{{url('/item3')}}" method="POST">
        @csrf
            <div class="foodItem">
                <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stahlbush.com%2Fwp-content%2Fuploads%2F2020%2F06%2FCut-Berry-Vanilla-Cake-with-Slice-by-Bronwyn-Fraser-landscape-1-scaled.jpg&f=1&nofb=1" alt="cake" height="300px" width="300px">
                <div class="details">
                    <h3>Cake</h3>
                    <h3 class="price">$240</h3>
                </div>
                <button type="submit" id="3" value="Cake">Order</button>
            </div>
        </form>
    </div>
    <div style="display: flex; justify-content: space-around;">
        <form action="{{url('/item4')}}" method="POST">
        @csrf
            <div class="foodItem">
                <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2Fx2_F2duRaQc%2Fmaxresdefault.jpg&f=1&nofb=1" alt="muffin" height="300px" width="300px">
                <div class="details">
                    <h3>Dosa</h3>
                    <h3 class="price">$80</h3>
                </div>
                <button type="submit" id="4" value="Muffin">Order</button>
            </div>
        </form>
        <form action="{{url('/item5')}}" method="POST">
        @csrf
            <div class="foodItem">
                <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.licious.in%2Fblog%2Fwp-content%2Fuploads%2F2020%2F10%2Fbutter-chicken-.jpg&f=1&nofb=1" alt="biriyani" height="300px" width="300px">
                <div class="details">
                    <h3>Butter Chicken</h3>
                    <h3 class="price">$360</h3>
                </div>
                <button type="submit" id="5" value="Biriyani">Order</button>
            </div>
        </form>
        <form action="{{url('/item6')}}" method="POST">
        @csrf
            <div class="foodItem">
                <img class="imgClass" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Frecipes.timesofindia.com%2Fphoto%2F52743612.cms&f=1&nofb=1" alt="cake" height="300px" width="300px">
                <div class="details">
                    <h3>Rasgulla</h3>
                    <h3 class="price">$240</h3>
                </div>
                <button type="submit" id="6" value="Cake">Order</button>
            </div>
        </form>
    </div>
</body>

</html>