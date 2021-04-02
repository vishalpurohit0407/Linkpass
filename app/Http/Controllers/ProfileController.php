<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Storage;
use Auth;
use App\User;
use App\Category;
use App\UserPreferencesGroups;
use App\UserPreferencesGroupTags;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user                  = auth()->user();
        $category              = new Category();
        $categories            = $category->categoryList();
        $userPreferencesGroups = UserPreferencesGroups::where('user_id', $user->id)->where('name', 'default')->first();

        if(!isset($userPreferencesGroups->id))
        {
            UserPreferencesGroups::create(['name' => 'default', 'user_id' => Auth::user()->id]);
        }

        return view('profile.edit', array('categories'=> $categories, 'user' => $user));
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
        $toalUserPreferencesGroups = UserPreferencesGroups::where('user_id', $user->id)->count();

        return view('profile.change-password', array('categories'=> $categories));
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

    public function getUserPreferences(Request $request){

        $userPreferencesGroups = UserPreferencesGroups::with('tags')->where('user_id', Auth::user()->id)->orderBy('id','asc')->get();

        $userPreferencesCount  = $userPreferencesGroups->count();

        $html = view('profile.ajax-user-preferences-list', array('userPreferencesGroups' => $userPreferencesGroups))->render();

        return response()->json(['success' => true, 'userPreferencesCount' => $userPreferencesCount, 'html' => $html]);
    }

    public function saveUserPreferencesGroup(Request $request){

        $name = $request->get('name');
        $id   = $request->get('id');

        if(!empty($name))
        {
            if(!empty($id))
            {
                $group = UserPreferencesGroups::find($id);
                $group->name = $name;
                $group->save();
            }
            else
            {
                UserPreferencesGroups::create(['name' => $name, 'user_id' => Auth::user()->id]);
            }

            return response()->json(['success' => true, 'message' => 'The user group has been saved successfully.']);
        }
        else
        {
            return response()->json(['success' => false, 'message' => 'Please enter group name']);
        }
    }

    public function deleteUserPreferencesGroup(Request $request){

        $id = $request->get('id');

        if(!empty($id))
        {
            $group = UserPreferencesGroups::find($id);

            if(isset($group->id))
            {
                UserPreferencesGroupTags::where('group_id', $group->id)->delete();
            }

            $group->delete();

            return response()->json(['success' => true, 'message' => 'The user group has been saved successfully.']);
        }
        else
        {
            return response()->json(['success' => false, 'message' => 'Cound not found the group']);
        }
    }

    public function setUserPreferencesGroupStatus(Request $request){

        $status = $request->get('status');
        $id     = $request->get('group_id');

        $group  = UserPreferencesGroups::find($id);

        if(isset($group->id))
        {
            $group->status = $status;
            $group->save();

            return response()->json(['success' => true, 'message' => 'The user group status has been saved successfully.']);
        }
        else
        {
            return response()->json(['success' => false, 'message' => 'Cound not found the group']);
        }
    }

    public function saveUserPreferencesGroupTag(Request $request){

        $name     = $request->get('name');
        $group_id = $request->get('group_id');

        if(!empty($name))
        {
            UserPreferencesGroupTags::create(['name' => $name, 'group_id' => $group_id]);

            return response()->json(['success' => true, 'message' => 'The tag has been saved to group successfully.']);
        }
        else
        {
            return response()->json(['success' => false, 'message' => 'Please enter tag name']);
        }
    }

    public function setUserType(Request $request){

        $status = $request->get('status');
        $user   = Auth::user();

        if(isset($user->id))
        {
            $user->user_type = $status;
            $user->save();

            return response()->json(['success' => true, 'message' => 'The user type has been saved successfully.']);
        }
        else
        {
            return response()->json(['success' => false, 'message' => 'Cound not found the user']);
        }
    }
}
