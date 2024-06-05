<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user/mycart/css')
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
  </head>
  <body>
    <section>
      @include('user/mycart/header')
    </section>

    @include('user/mycart/cart')

    @include('user.footer')
  </body>
</html>
