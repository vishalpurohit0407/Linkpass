<?php

namespace App\Http\Controllers;

use App\Guide;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SocialAccountRequest;
use Auth;
use PDF;
use App\SocialAccount;
use App\User;
use App\Content;
use Response;
use Storage;

class UserAccountController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a logged in user account
     *
     * @return \Illuminate\Http\Response
     */
    public function getLoggedInUserAccount(Request $request)
    {
        $socialAccounts = SocialAccount::where('user_id', Auth::user()->id)->where('status', '1')->orderBy('name', 'asc')->get();
        $user = User::find(Auth::user()->id);

        return view('user-account.logged-in-user-account', array('title' => 'My Account', 'socialAccounts' => $socialAccounts, 'type' => 'socialAccount' , 'user' => $user, 'editable' => true));
    }

    /**
     * Display a logged in user account
     *
     * @return \Illuminate\Http\Response
     */
    public function getOtherUserAccount($id)
    {
        $decodedId = decodeHashId($id);

        $socialAccounts = SocialAccount::where('user_id', $decodedId)->where('status', '1')->orderBy('name', 'asc')->get();
        $user = User::find($decodedId);

        $editable = Auth::user()->id == $user->id ? true : false;

        return view('user-account.logged-in-user-account', array('title' => 'User Account', 'socialAccounts' => $socialAccounts, 'type' => 'socialAccount', 'user' => $user, 'editable' => $editable));
    }

    /**
     * Display a logged in user contents by accountId
     *
     * @return \Illuminate\Http\Response
     */
    public function getContentsByAccountId($id, $userId)
    {
        $decodedId = decodeHashId($id);
        $decodedUserId = decodeHashId($userId);
        $user = User::find($decodedUserId);

        $editable = Auth::user()->id == $user->id ? true : false;

        $socialAccount = SocialAccount::where('user_id', $decodedUserId)->where('id', $decodedId)->where('status', '1')->first();

        $items = Content::where('user_id', $decodedUserId)->where('social_account_id', $decodedId)->orderBy('created_at', 'desc')->get();
        //dd($items);
        return view('user-account.logged-in-user-account', array('title' => 'Account Contents', 'items' => $items, 'type' => 'content', 'socialAccountId' => $id, 'user' => $user, 'socialAccount' => $socialAccount, 'editable' => $editable));
    }
}
