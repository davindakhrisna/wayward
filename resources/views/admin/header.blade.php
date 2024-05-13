<header>
    <a href="#" class="logo"><img src="{{asset('img/Logo.png')}}" alt="" /> Admin</a>
    <nav class="navbar">

        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>

        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>

      <div class="user-profile">
        <p>Admin</p>
        <i class="fa-solid fa-user"></i>
      </div>
    </nav>
  </header>
