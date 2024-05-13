<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_product()
    {
        $data = Product::all();

        return view('admin\product\index', compact('data'));
    }
    public function add_product()
    {
        return view('admin\product\add');
    }
    public function crud_add_product(Request $request)
    {
        $product = new Product;

        $product->product_name = $request->name;
        $product->category_name = $request->category;
        $product->product_size = $request->size;
        $product->product_price = $request->price;

        $product->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Product Berhasil Ditambahkan');

        return redirect('view_product');
    }
    public function crud_delete_product($id)
    {
        $product_id = Product::find($id);

        $product_id->delete();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Product Berhasil Dihapus');

        return redirect()->back();
    }
    public function crud_edit_product($id)
    {
        $edit_id = Product::find($id);
        return view('admin\product\edit', compact('edit_id'));
    }
    public function crud_update_product(Request $request, $id)
    {
        $edit_id = Product::find($id);

        $edit_id->product_name = $request->name;
        $edit_id->category_name = $request->category;
        $edit_id->product_size = $request->size;
        $edit_id->product_price = $request->price;

        $edit_id->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Product Berhasil Diedit');

        return redirect('view_product');
    }
}
