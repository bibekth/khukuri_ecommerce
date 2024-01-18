<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Auth::user();
        $data['images'] = Image::all();
        return view('admin.images.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        return view('admin.images.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Image $image)
    {
        // $data['user'] = Auth::user();
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'required|mimes:png,jpg|max:10000'
        ]);
        // dd($request);
        try {
            DB::BeginTransaction();
            $image->name = $request->name;
            $image->description = $request->description;
            $filecontent = File::get($request->image);
            $path = time() . $request->image->getClientOriginalName();
            // $name = $request->image->getClientOriginalName();
            Storage::disk('public')->put("/images/$path", $filecontent);
            $image->path = $path;
            $image->save();
            DB::commit();
            Session::flash('success',"Image added successfully");
            return back()->with('success');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('error', "Image entry failed due to internal error!!");
            return back()->with('error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
