<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
<ul>
  <li>
    <a class="font-bold text-lg mb-4 block" href="/tweets"><i class="fa fa-home mr-2"></i>Home</a>
  </li>
  <li>
    <a class="font-bold text-lg mb-4 block" href="{!! route('explore') !!}"><i class="fab fa-slack mr-2"></i>Explore</a>
  </li>
  <li>
    <a class="font-bold text-lg mb-4 block" href="{!! route('profile', auth()->user()) !!}"><i class="fa fa-user mr-2"></i>Profile</a>
  </li>
  <li>
    <form action="/logout" method="post">
      @csrf

      <button class="font-bold text-lg mb-4 block"><i class="fa fa-rocket mr-2"></i>Logout</button>
    </form>
  </li>




</ul>
