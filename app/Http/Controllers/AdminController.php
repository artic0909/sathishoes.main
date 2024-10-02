<?php

namespace App\Http\Controllers;

use App\Models\BigBannerModel;
use App\Models\ContactBannerModel;
use App\Models\MainCategoryModel;
use App\Models\SmallBannerModel;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function admin_dash_view()
    {
        return view("admin.index");
    }








    // All get==========================================================================================
    public function big_banner_get()
    {
        $bigBanners = BigBannerModel::orderBy('created_at', 'desc')->get();
        return view('admin.big_banner', compact('bigBanners'));
    }

    public function small_banner_get()
    {
        $smallBanners = SmallBannerModel::orderBy('created_at', 'desc')->get();
        return view('admin.small_banner', compact('smallBanners'));
    }

    public function contact_banner_get()
    {
        $contactBanners = ContactBannerModel::orderBy('created_at', 'desc')->get();
        return view('admin.contact_banner', compact('contactBanners'));
    }


    public function main_category_get()
    {
        $subCategories = MainCategoryModel::orderBy('created_at', 'desc')->get();
        return view('admin.category', compact('subCategories'));
    }



    // All get==========================================================================================













    // BigBanner add==============================================================================
    public function big_banner_add(Request $request)
    {
        $validated = $request->validate([
            'big_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'big_banner_title' => 'string',
        ]);

        if ($request->hasFile('big_banner')) {
            $file = $request->file('big_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/bigbanner', $fileName, 'public');
        }


        BigBannerModel::create([
            'big_banner' => $filePath ?? null,
            'big_banner_title' => $request->input('big_banner_title'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }



    // BigBanner edit==============================================================================
    public function big_banner_edit(Request $request, $id)
    {
        $validated = $request->validate([
            'big_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'big_banner_title' => 'string',
        ]);

        $bigBannerInfo = BigBannerModel::find($id);

        if ($bigBannerInfo) {
            if ($request->hasFile('big_banner')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $bigBannerInfo->big_banner))) {
                    unlink(public_path('storage/' . $bigBannerInfo->big_banner));
                }

                // Store the new image
                $file = $request->file('big_banner');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/bigbanner', $fileName, 'public');
                $bigBannerInfo->big_banner = $filePath;
            }

            $bigBannerInfo->big_banner_title = $request->input('big_banner_title');
            $bigBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    // BigBanner delete==============================================================================
    public function big_banner_delete($id)
    {
        $bigBannerInfo = BigBannerModel::find($id);

        if ($bigBannerInfo) {

            if (file_exists(public_path('storage/' . $bigBannerInfo->big_banner))) {
                unlink(public_path('storage/' . $bigBannerInfo->big_banner));
            }


            $bigBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }







    // SmallBanner add==============================================================================
    public function small_banner_add(Request $request)
    {
        $validated = $request->validate([
            'small_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'small_banner_title' => 'string',
        ]);

        if ($request->hasFile('small_banner')) {
            $file = $request->file('small_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/smallbanner', $fileName, 'public');
        }


        SmallBannerModel::create([
            'small_banner' => $filePath ?? null,
            'small_banner_title' => $request->input('small_banner_title'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }



    // SmallBanner edit==============================================================================
    public function small_banner_edit(Request $request, $id)
    {
        $validated = $request->validate([
            'small_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'small_banner_title' => 'string',
        ]);

        $smallBannerInfo = SmallBannerModel::find($id);

        if ($smallBannerInfo) {
            if ($request->hasFile('small_banner')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $smallBannerInfo->small_banner))) {
                    unlink(public_path('storage/' . $smallBannerInfo->small_banner));
                }

                // Store the new image
                $file = $request->file('small_banner');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/smallbanner', $fileName, 'public');
                $smallBannerInfo->small_banner = $filePath;
            }

            $smallBannerInfo->small_banner_title = $request->input('small_banner_title');
            $smallBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    // SmallBanner delete==============================================================================
    public function small_banner_delete($id)
    {
        $smallBannerInfo = SmallBannerModel::find($id);

        if ($smallBannerInfo) {

            if (file_exists(public_path('storage/' . $smallBannerInfo->small_banner))) {
                unlink(public_path('storage/' . $smallBannerInfo->small_banner));
            }


            $smallBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }








    // ContactBanner add==============================================================================
    public function contact_banner_add(Request $request)
    {
        $validated = $request->validate([
            'contact_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'contact_banner_title' => 'string',
        ]);

        if ($request->hasFile('contact_banner')) {
            $file = $request->file('contact_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/contactbanner', $fileName, 'public');
        }


        ContactBannerModel::create([
            'contact_banner' => $filePath ?? null,
            'contact_banner_title' => $request->input('contact_banner_title'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }



    // ContactBanner edit==============================================================================
    public function contact_banner_edit(Request $request, $id)
    {
        $validated = $request->validate([
            'contact_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'contact_banner_title' => 'string',
        ]);

        $contactBannerInfo = ContactBannerModel::find($id);

        if ($contactBannerInfo) {
            if ($request->hasFile('contact_banner')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $contactBannerInfo->contact_banner))) {
                    unlink(public_path('storage/' . $contactBannerInfo->contact_banner));
                }

                // Store the new image
                $file = $request->file('contact_banner');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/contactbanner', $fileName, 'public');
                $contactBannerInfo->contact_banner = $filePath;
            }

            $contactBannerInfo->contact_banner_title = $request->input('contact_banner_title');
            $contactBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    // ContactBanner delete==============================================================================
    public function contact_banner_delete($id)
    {
        $contactBannerInfo = ContactBannerModel::find($id);

        if ($contactBannerInfo) {

            if (file_exists(public_path('storage/' . $contactBannerInfo->contact_banner))) {
                unlink(public_path('storage/' . $contactBannerInfo->contact_banner));
            }


            $contactBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }

















    // mainCategory add==============================================================================
    public function main_category_add(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'sub_category_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'main_category' => 'required|string|max:255',
            'sub_category' => 'required|string|max:255',
        ]);

        // Handle image upload if present
        if ($request->hasFile('sub_category_image')) {
            $file = $request->file('sub_category_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/subcategories', $fileName, 'public');
        }

        

        // Create the mainCategory
        MainCategoryModel::create([
            'sub_category_image' => $filePath ?? null,
            'main_category' => $request->input('main_category'),
            'sub_category' => $request->input('sub_category'),
        ]);

        return back()->with('success', 'mainCategory added successfully!');
    }









    // mainCategory edit==============================================================================
    public function main_category_edit(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'sub_category_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'main_category' => 'required|string|max:255',
            'sub_category' => 'required|string|max:255',
        ]);

        // Find the mainCategory by ID
        $mainCategory = MainCategoryModel::find($id);

        if ($mainCategory) {
            // Handle image upload if new image is provided
            if ($request->hasFile('sub_category_image')) {
                // Delete the old image if it exists
                $oldImagePath = public_path('storage/' . $mainCategory->sub_category_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                // Store the new image
                $file = $request->file('sub_category_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'uploads/subcategories/' . $fileName; // Define the new file path
                $file->move(public_path('storage/uploads/subcategories'), $fileName); // Move the file

                // Update the image path in the mainCategory
                $mainCategory->sub_category_image = $filePath;
            }

            
            $mainCategory->main_category = $request->input('main_category');
            $mainCategory->sub_category = $request->input('sub_category');
            $mainCategory->save(); // Save changes

            return back()->with('success', 'mainCategory updated successfully!');
        } else {
            return back()->with('error', 'mainCategory not found.');
        }
    }








    // mainCategory delete==============================================================================
    public function main_category_delete($id)
    {
        // Find the mainCategory by ID
        $mainCategory = MainCategoryModel::find($id);

        if ($mainCategory) {
            // Delete the image from the public storage if it exists
            $imagePath = public_path('storage/' . $mainCategory->sub_category_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Delete the mainCategory
            $mainCategory->delete();

            return back()->with('success', 'mainCategory deleted successfully!');
        } else {
            return back()->with('error', 'mainCategory not found.');
        }
    }
}
