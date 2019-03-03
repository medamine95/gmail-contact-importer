<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use Auth;

class ContactController extends Controller
{
    public function importGoogleContact()
{
    // get data from request
    $code = Request::get('code');

    // get google service
    $googleService = \OAuth::consumer('Google');

    // check if code is valid

    // if code is provided get user data and sign in
    if ( ! is_null($code)) {
        // This was a callback request from google, get the token
        $token = $googleService->requestAccessToken($code);

        // Send a request with it
        $result = json_decode($googleService->request('https://www.google.com/m8/feeds/contacts/default/full?alt=json&amp;max-results=400'), true);
        $result2 = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
        // Going through the array to clear it and create a new clean array with only the email addresses
        $emails = []; // initialize the new array
        foreach ($result['feed']['entry'] as $contact) {
            if (isset($contact['gd$email'])) { // Sometimes, a contact doesn't have email address
                $emails[] = $contact['gd$email'][0]['address'];
            }
        }

      // verify connected user id  and store his contacts into db contactlist field;
      $id = Auth::user()->id;
      $user = User::find($id);

          $converted=implode(",",$emails)  ;
          $user->contactlist=$converted;
          $user->save();



      return view('result')->with('emails', $emails);

     // return view('home', ["emails"=>$emails]);

       // return view('home', $emails);




    }

    // if not ask for permission first
    else {
        // get googleService authorization
        $url = $googleService->getAuthorizationUri();

        // return to google login url
        return redirect((string)$url);
    }
}
}
