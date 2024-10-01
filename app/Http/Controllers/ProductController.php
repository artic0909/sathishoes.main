<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\SubCategoryModel;
use App\Models\MainCategoryModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Products add==============================================================================
    public function products_get()
    {
        
    }



    // Products add==============================================================================
    public function product_add(Request $request)
    {

    }



    // Products edit==============================================================================
    public function product_edit(Request $request, $id)
    {

    }



    // Products delete==============================================================================
    // public function product_delete($id)
    // {
    //     $productsInfo = ProductModel::find($id);

    //     if ($productsInfo) {

    //         if (file_exists(public_path('storage/' . $productsInfo->product_image))) {
    //             unlink(public_path('storage/' . $productsInfo->product_image));
    //         }


    //         $productsInfo->delete();

    //         return back()->with('success', 'deleted successfully!');
    //     } else {
    //         return back()->with('error', 'not found.');
    //     }
    // }
}
