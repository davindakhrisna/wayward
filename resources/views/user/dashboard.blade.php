<!DOCTYPE html>
<html lang="en">
  <head>
  @include('user.css')
  <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
  </head>
  <body>
    <section>
      @include('user.header')
    </section>

    @include('user.jumbotron')

    @include('user.product')

    @include('user.about')

    @include('user.footer')
  </body>
</html>
