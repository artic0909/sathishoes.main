<?php

namespace App\Http\Controllers;

use App\Models\BigBannerModel;
use App\Models\ContactBannerModel;
use App\Models\MainCategoryModel;
use App\Models\SmallBannerModel;
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
        $mainCategories = MainCategoryModel::orderBy('created_at', 'desc')->get();
        return view('admin.main_category', compact('mainCategories'));
    }


    public function sub_category_get()
    {
        
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








    // MainCategory add==============================================================================

    public function main_category_add(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'main_category' => 'required|string|max:255',
        ]);

        // Create new main category
        \Illuminate\Support\Str::slug($validated['main_category']); // Generate slug using fully qualified name
        MainCategoryModel::create([
            'main_category' => $validated['main_category'],
            'slug' => \Illuminate\Support\Str::slug($validated['main_category']),
        ]);

        return back()->with('success', 'Added Successfully!');
    }





    // MainCategory edit==============================================================================
    public function main_category_edit(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'main_category' => 'required|string|max:255', // Ensure it's required and has a max length
        ]);

        // Find the main category by ID
        $mainCategoryInfo = MainCategoryModel::find($id);

        if ($mainCategoryInfo) {
            // Update the main category and its slug
            $mainCategoryInfo->main_category = $validated['main_category'];
            $mainCategoryInfo->slug = \Illuminate\Support\Str::slug($validated['main_category']); // Generate slug
            $mainCategoryInfo->save();

            return back()->with('success', 'Updated successfully!');
        } else {
            return back()->with('error', 'Not found.');
        }
    }



    // MainCategory delete==============================================================================
    public function main_category_delete($id)
    {
        $mainCategoryInfo = MainCategoryModel::find($id);

        if ($mainCategoryInfo) {

            $mainCategoryInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }









    // SubCategory add==============================================================================
    public function sub_category_add(Request $request)
    {

    }
    
    



    // SubCategory edit==============================================================================
    public function sub_category_edit(Request $request, $id)
    {

    }
    




    // SubCategory delete==============================================================================
    public function sub_category_delete($id)
    {

    }
}
