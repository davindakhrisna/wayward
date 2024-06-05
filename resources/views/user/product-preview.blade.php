<!DOCTYPE html>
<html lang="en">
  <head>
  @include('user.css')
  <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
  </head>
  <body>
    <section>
      @include('user/product/header')
    </section>
    @include('user.product-single')

    @include('user.product')

    @include('user.footer')
  </body>
</html>
