<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPhoto;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class UserPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadPhoto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $photo = new UserPhoto($this->validation());
        $photo->userId = auth()->user()->id;
        $photo->photo = request()->photo->store('uploads', 'public');
        $photo->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userPhoto)
    {
        $photo = UserPhoto::find($userPhoto);

        return view('showPhoto', compact('photo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userPhoto)
    {
        $photo = UserPhoto::findOrFail($userPhoto);
        return view('editPhoto', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userPhoto)
    {
        $photo = UserPhoto::findOrFail($userPhoto);
        $data = request()->validate([
          'caption' => 'max:255',
        ]);
        $photo->caption = $data['caption'];
        $photo->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userPhoto)
    {
        $photo = UserPhoto::findOrFail($userPhoto);
        File::delete("/storage/$photo->photo");
        $photo->delete();
        return redirect('/');
    }

    public function validation()
    {
      return request()->validate([
        'photo' => 'required|file|image|max:5000',
        'caption' => 'max:255',
      ]);
    }
}
