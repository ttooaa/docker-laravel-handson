<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class UserController extends Controller
{
    public function __construct()
    {
        // 登録してあるユーザーかどうか
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $user = Auth::user();
        $ages = [];
        for ($age=18; $age < 61; $age++) {
            $ages[] = $age;
        }

        $prefectures = Prefecture::get();
        return view('user.profile', compact('user','ages', 'prefectures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        $file = $request->file('file');
        if( !empty( $file ) ) {
            $uploadedFile = Cloudinary::upload ( $file->getRealPath(), [
                'folder' => 'KYONOWADAI',
                'height' => 300,
                'width' => 300,
                'crop' => "fill",
            ]);
        }

        $user->image_url = $uploadedFile->getSecurePath();
        $user->public_id = $uploadedFile->getPublicId();
        $user->sex = $request->input('sex');
        $user->age = $request->age;
        $user->prefecture_id = $request->prefecture_id;
        $user->hobby = $request->hobby;
        $user->profile = $request->profile;

        $user -> save();

        return redirect()->route('join');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
