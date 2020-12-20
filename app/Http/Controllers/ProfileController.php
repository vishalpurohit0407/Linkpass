<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\UserTags;
use Storage;
use App\Category;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user        = auth()->user();
        $category    = new Category();
        $categories  = $category->categoryList();
        $userTags    = UserTags::where('user_id', $user->id)->orderBy('name','asc')->pluck('name');
        $userTags    = $userTags->count() > 0 ? implode(',', $userTags->toArray()) :  '';

        return view('profile.edit', array('categories'=> $categories, 'userTags' => $userTags));
    }

    /**
     * Show the form for change password
     *
     * @return \Illuminate\View\View
     */
    public function changePassword()
    {
        $user        = auth()->user();
        $category    = new Category();
        $categories  = $category->categoryList();
        $userTags    = UserTags::where('user_id', $user->id)->orderBy('name','asc')->pluck('name');
        $userTags    = $userTags->count() > 0 ? implode(',', $userTags->toArray()) :  '';

        return view('profile.change-password', array('categories'=> $categories, 'userTags' => $userTags));
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $user = auth()->user();

        $file=$request->file('profile_img');
        $userArr = array();
        $userArr['name'] = $request->name;
        $userArr['email'] = $request->email;
        $userArr['category_id'] = $request->category;

        if(!empty($request->tags))
        {
            $tags = explode(',', $request->tags);

            foreach($tags as $tag)
            {
                $params   = array('user_id' => $user->id, 'name' => $tag);
                $userTags = UserTags::updateOrCreate($params);
            }

            UserTags::whereNotIn('name', $tags)->delete();
        }

        if($file){

            if (is_file(public_path($user->profile_img))) {

                unlink(public_path($user->profile_img));
            }
            $file_name =$file->getClientOriginalName();
            $fileslug= pathinfo($file_name, PATHINFO_FILENAME);
            $imageName = md5($fileslug.time());
            $imgext =$file->getClientOriginalExtension();
            $path = 'userprofile/'.$user->id.'/'.$imageName.".".$imgext;
            Storage::disk('public')->putFileAs('userprofile/'.$user->id,$file,$imageName.".".$imgext);

           $userArr['profile_img'] = $path;
        }

        auth()->user()->update($userArr);
        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
