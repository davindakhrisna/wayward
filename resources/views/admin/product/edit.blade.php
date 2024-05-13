<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin\product\css')
  </head>
  <body>
    <section class="register">
      <div class="register-container">
        <h2>Update Data</h2>
        <form action="{{url('crud_update_product', $edit_id->id)}}" method="post">

          @csrf

          <label for="Name">Product Name</label>
          <input type="text" name="name" value="{{$edit_id->product_name}}" />
          <label for="Category">Product Category</label>
          <input type="text" name="category" value="{{$edit_id->category_name}}" />
          <label for="Size">Product Size</label>
          <input type="text" name="size" value="{{$edit_id->product_size}}" />
          <label for="Price">Product Price</label>
          <input type="text" name="price" value="{{$edit_id->product_price}}" />
          <button class="submit">Update</button>

        </form>
    </section>
  </body>
</html>
