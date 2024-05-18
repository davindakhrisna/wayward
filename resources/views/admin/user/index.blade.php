<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin\user\css')
  </head>
  <body>
    <section>
    @include('admin.header')
    </section>

    @include('admin.sidebar')

    <section class="admin">
      <div class="admin-container">
        <div class="admin-content">
          <h3>Users</h3>
        </div>
        <table class="table-4">

          <tr>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
            <th>Actions</th>
          </tr>

          @foreach ($data as $data)

          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->usertype}}</td>
            <td class="actions">
              <button>
                <a href="{{url('crud_user_edit', $data->id)}}" class="edit-admin"><i class="fa-solid fa-pen"></i></a>
              </button>
              <button class="delete-admin"><a onclick="confirmation(event)" href="{{url('crud_user_delete', $data->id)}}" class="delete-admin"><i class="fa-solid fa-trash-can"></i></a></button>
            </td>
            </td>
          </tr>

          @endforeach

        </table>

      </div>
    </section>
  </body>
</html>