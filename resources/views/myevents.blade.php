@include('navbar')
@yield('navbar')

 
<h2 class="my-3"> Your Events: </h2>
<hr>
<?php foreach ($orders as $product) {?>
  <div class="row my-2 mx-2">
        <div class="col">
      <a href="/detail/{{$product->id}}">
      <img src="{{$product->poster}}" alt="Card image cap">
    </div>
      <div class="col">
        <h5>{{$product->name}}</h5>
    </a>
        <p >{{$product->description}}</p>
    </div>
    <div class="col">
    </div>
  </div>
</div>
<hr>
<?php } ?>


@include('footer')
@yield('footer')