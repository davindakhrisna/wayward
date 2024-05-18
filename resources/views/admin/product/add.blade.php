<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin\product\css')
  </head>
  <body>
    <section class="register">
      <div class="register-container">
        <h2>Add Data</h2>
        <form action="{{url('crud_add_product')}}" method="post" enctype="multipart/form-data">

          @csrf

          <label for="Image">Product Image</label>
          <input type="file" name="Image" required id="Image"/>
          <label for="Name">Product Name</label>
          <input type="text" name="name" required autocomplete="name" />
          <label for="Category">Product Category</label>
          <input type="text" name="category" required autocomplete="category" />
          <label for="Size">Product Size</label>
          <input type="text" name="size" required autocomplete="size" />
          <label for="Price">Product Price</label>
          <input type="text" name="price" required autocomplete="price" />
          <button class="submit">Add</button>
        </form>
    </section>
  </body>
</html>
