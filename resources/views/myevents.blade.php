@include('navbar')
@yield('navbar')

 
<h2 class="my-3" style="margin-left:45%;"> Your Events </h2>
<hr>
<?php foreach ($orders as $event) {?>
  <div class="row my-2 mx-2">
        <div class="col">
      <a href="/detail/events/{{$event->id}}">
      <img src="{{$event->poster}}" style="height:250px; margin-left:10%;"alt="Card image cap">
    </div>
      <div class="col">
        <h5>{{$event->name}}</h5>
    </a>
        <p >{{$event->description}}</p>
    </div>
              <a href="/disenroll/{{$event->order_id}}"><button class="btn btn-primary"> Disenroll </button></a>

    <div class="col">
    </div>
  </div>
</div>
<hr>
<?php } ?>


@include('footer')
@yield('footer')