<?php

namespace App\Http\Controllers;

use App\Models\FixedCollectionModel;
use Illuminate\Http\Request;

class FixedCollectionController extends Controller
{
    public function fixed_img_get()
    {
        $fixedCollections = FixedCollectionModel::orderBy('created_at', 'desc')->get();
        return view('admin.fixed_collection', compact('fixedCollections'));
    }





        public function fixed_img_add(Request $request)
        {
            $validated = $request->validate([
                'fixed_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
            ]);
    
            if ($request->hasFile('fixed_img')) {
                $file = $request->file('fixed_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/fixed', $fileName, 'public');
            }
    
    
            FixedCollectionModel::create([
                'fixed_img' => $filePath ?? null,
            ]);
    
            return back()->with('success', 'Added Successfully!');
        }
    
    
    
        // BigBanner edit==============================================================================
        public function fixed_img_edit(Request $request, $id)
        {
            $validated = $request->validate([
                'fixed_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
            ]);
    
            $fixedInfo = FixedCollectionModel::find($id);
    
            if ($fixedInfo) {
                if ($request->hasFile('fixed_img')) {
                    // Delete the old image
                    if (file_exists(public_path('storage/' . $fixedInfo->fixed_img))) {
                        unlink(public_path('storage/' . $fixedInfo->fixed_img));
                    }
    
                    // Store the new image
                    $file = $request->file('fixed_img');
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->storeAs('uploads/fixed', $fileName, 'public');
                    $fixedInfo->fixed_img = $filePath;
                }
    
                $fixedInfo->save();
    
                return back()->with('success', 'updated successfully!');
            } else {
                return back()->with('error', 'not found.');
            }
        }
    
    
    
        // BigBanner delete==============================================================================
        public function fixed_img_delete($id)
        {
            $fixedInfo = FixedCollectionModel::find($id);
    
            if ($fixedInfo) {
    
                if (file_exists(public_path('storage/' . $fixedInfo->fixed_img))) {
                    unlink(public_path('storage/' . $fixedInfo->fixed_img));
                }
    
    
                $fixedInfo->delete();
    
                return back()->with('success', 'deleted successfully!');
            } else {
                return back()->with('error', 'not found.');
            }
        }
}
