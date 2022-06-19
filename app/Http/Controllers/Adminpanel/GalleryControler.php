<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class GalleryControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galleryImages = Gallery::orderby('id', 'desc')->get();
        return view('adminpanel.pages.gallery.index', compact('galleryImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folders = GalleryFolder::all();
        return view('adminpanel.pages.gallery.create', compact('folders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'order_number' => 'nullable|numeric',
            'gallery_folder_id' => 'required|integer|exists:gallery_folders,id',
        ]);
        $input['gallery_folder_id'] = $request->gallery_folder_id;
        $input['admin_id'] = Auth::guard('admin')->id();
        $input['order_number'] = $request->order_number;
        // dd($request->all());
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path().'/storage/images/gallery', $name);
                $input['image'] = $name;
                Gallery::create($input);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $folders = GalleryFolder::all();
        $galleryImage = Gallery::find($id);
        return view('adminpanel.pages.gallery.edit', compact('folders', 'galleryImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'nullable|file',
            'order_number' => 'nullable|numeric',
            'gallery_folder_id' => 'required|integer|exists:gallery_folders,id',
        ]);
        // dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/gallery', $name);
            $input['image'] = $name;
        }
        $gallaryImage = Gallery::find($id);
        if($gallaryImage){
            $gallaryImage->gallery_folder_id = $request->gallery_folder_id;
            $gallaryImage->order_number = $request->order_number;
            $gallaryImage->save();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallaryImage = Gallery::findOrFail($id);
        if ($gallaryImage) {
            File::delete(public_path().'/storage/images/gallery/'.$gallaryImage->image);
            $gallaryImage->delete();
            return response()->json(['success' => 'Deleted Successfully !']);
        }
        return response()->json(['error' => 'Error while deleting !']);
    }
}
