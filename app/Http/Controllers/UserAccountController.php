<?php

namespace App\Http\Controllers;

use App\Guide;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SocialAccountRequest;
use Auth;
use PDF;
use App\SocialAccount;
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

        return view('user-account.logged-in-user-account', array('title' => 'My Account', 'socialAccounts' => $socialAccounts, 'type' => 'socialAccount'));
    }

    /**
     * Display a logged in user contents by accountId
     *
     * @return \Illuminate\Http\Response
     */
    public function getContentsByAccountId($id)
    {
        $decodedId = decodeHashId($id);

        $socialAccount = SocialAccount::where('user_id', Auth::user()->id)->where('id', $decodedId)->where('status', '1')->first();

        $creatorContents = Content::where('user_id', Auth::user()->id)->where('social_account_id', $decodedId)->orderBy('main_title', 'asc')->get();

        return view('user-account.logged-in-user-account', array('title' => 'Account Contents', 'creatorContents' => $creatorContents, 'type' => 'content', 'socialAccountId' => $id, 'socialAccount' => $socialAccount));
    }
}
