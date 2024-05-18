<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin\product\css')
  </head>
  <body>
    <section class="register">
      <div class="register-container">
        <h2>Update Data</h2>
        <form action="{{url('crud_update_product', $edit_id->id)}}" method="post" enctype="multipart/form-data">

          @csrf

          <label for="Image">Product Image</label>
          <input type="file" name="Image" value="{{$edit_id->product_image}}" required/>
          <label for="Name">Product Name</label>
          <input type="text" name="name" value="{{$edit_id->product_name}}" required/>
          <label for="Category">Product Category</label>
          <input type="text" name="category" value="{{$edit_id->category_name}}" required/>
          <label for="Size">Product Size</label>
          <input type="text" name="size" value="{{$edit_id->product_size}}" required/>
          <label for="Price">Product Price</label>
          <input type="text" name="price" value="{{$edit_id->product_price}}" required/>
          <button class="submit">Update</button>

        </form>
    </section>
  </body>
</html>
