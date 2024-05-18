<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin\product\css')
  </head>
  <body>
    <section class="register">
      <div class="register-container">
        <h2>Update User</h2>
        <form action="{{url('crud_user_update', $edit_id->id)}}" method="post"  enctype="multipart/form-data">

          @csrf

          <label for="Image">Username</label>
          <input type="text" name="user_name" value="{{$edit_id->user_name}}" required/>
          <label for="Name">User Email</label>
          <input type="text" name="user_email" value="{{$edit_id->user_email}}" required/>
          <label for="Name">User Role</label>
          <input type="text" name="user_role" value="{{$edit_id->user_role}}" required/>
          <button class="submit">Update</button>

        </form>
    </section>
  </body>
</html>
