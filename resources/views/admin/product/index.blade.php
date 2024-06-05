<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
  </head>
  <body>
    <section>
      @include('admin.header')
    </section>

    @include('admin.sidebar')

    <section class="admin">
        <div class="admin-container">
          <div class="admin-content">
            <h3>Products</h3>
            <a href="{{url('add_product')}}" class="add-admin"><i class="fa-solid fa-plus"></i>Add New</a>
          </div>
          <table class="table-6">
            <tr>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Product Category</th>
              <th>Product Size</th>
              <th>Product Price</th>
              <th>Actions</th>
            </tr>

            @foreach ($data as $data)

            <tr>
                <td><img src="{{ asset($data->product_image) }}" class="admin-product-image" /></td>
                <td>{{$data->product_name}}</td>
                <td>{{$data->category_name}}</td>
                <td>{{$data->product_size}}</td>
                <td>{{$data->product_price}}</td>
                <td class="actions">
                <button class="edit-admin"><a href="{{url('crud_edit_product', $data->id)}}"><i class="fa-solid fa-pen"></i></a></button>
                <button class="delete-admin"><a onclick="confirmation(event)" href="{{url('crud_delete_product', $data->id)}}"><i class="fa-solid fa-trash-can"></i></a></button>
                </td>
            </tr>

            @endforeach

          </table>
        </div>
    </section>

    <script type="text/javascript">
    function confirmation(ev)
    {
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({

            title:"Apakah Anda Yakin Untuk Menghapus Produk Ini?",
            text:"Ini akan permanen",
            icon:"warning",
            buttons: true,
            dangerMode: true,
        })

        .then((willCancel)=>{
            if(willCancel)
            {
                window.location.href=urlToRedirect;
            }
        });
    }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>
</html>
