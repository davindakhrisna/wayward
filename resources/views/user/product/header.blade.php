<header>
        <input type="checkbox" name="" id="toggler" />
        <label for="toggler" class="fas fa-bars"></label>
        <a href="" class="logo"><img src="img/Logo.png" alt="" /></a>
        <nav class="navbar">
          <a href="{{url('/dashboard')}}">Home</a>
          <a href="{{url('/product')}}" class="page-in">Product</a>
          <a href="{{url('/mycart')}}">My Cart</a>
          <a href="#" class="a-orange" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
          <div class="user-profile">
            <p>{{ Auth::user()->name }}</p> <!-- Display the username here -->
            <i class="fa-solid fa-user"></i>
          </div>
        </nav>
      </header>