@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 50%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}


.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>
        
<h3>Menu</h3>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="images/vod.jpg" alt="Cinque Terre" width="600" height="200">
    </a>
    <div class="desc">Tulleeho recipe of Mist - a vodka based cocktail</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="images/martini.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">This is a Martini for olive lovers. It can be served on the rocks, or chilled.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="images/irish.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">The coffee is drunk through the cream</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="images/negroni.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">The Negroni is an iconic Italian cocktailosso</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="images/maria.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Tequila Takes Over the Bloody Mary</div>
  </div>
</div>

<div class="clearfix"></div>



</body>
@section('content')
<a class="btn btn-secondary" href="/orders/create" role="button">Place Order</a>
<a class="btn btn-secondary" href="/" role="button">Back</a>
@endsection
</html>



