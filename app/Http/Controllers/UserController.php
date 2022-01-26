<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use App\Models\User;

class UserController extends Controller
{
    public function getHomepage(Request $request) {
        $order = ($request->has('order')) ? $request->input('order') : 'id';
        $sort = ($request->has('sort')) ? $request->input('sort') : 'desc';
        
        $users = User::nameOrEmailLike($request->input('query'))
            ->orderBy($order, $sort)
            ->paginate(20);
        
        return view('homepage.index')
            ->with('users', $users);
    }
    
    public function getDashboard() {
        $user = User::find(Auth::user()->id);
        
        return view('user.dashboard')
            ->with('user', $user);
    }
    
    public function getViewProfile() {
        $user = User::find(Auth::user()->id);
        
        return view('user.view')
            ->with('user', $user);
    }
    
    public function postUpdateProfile(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'min:3','max:255'],
            'telp_no' => ['required', 'numeric', 'digits_between:7,15'],
            'home_address' => ['required', 'string', 'min:5'],
            'avatar' => ['max:5120', 'mimes:jpeg,jpg,png']
        ]);
        
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->telp_no = $request->telp_no;
        $user->home_address = $request->home_address;
        $user->save();
        
        // Assign Folder Name
        $userFolderName = 'user_' . Auth::user()->id;
        $finalFolderName = 'public' . DIRECTORY_SEPARATOR . $userFolderName;
        
        // Create folder for each user if not exists
        if (!Storage::exists($finalFolderName)) {
            Storage::makeDirectory($finalFolderName);
        }
        
        $file = $request->file('avatar');
        
        if ($file) {
            // get file extension
            $extension = $file->getClientOriginalExtension();
            
            // make unique name
            $uniqueName    = 'avatar-' . date('YmdHis') . '.' . $extension;
            
            // Put image to storage
            Storage::putFileAs($finalFolderName, $file, $uniqueName, 'public');
            
            $user->avatar = $userFolderName . DIRECTORY_SEPARATOR . $uniqueName;
            $user->save();
        }
        
        return redirect('user/view-profile')->with('success', 'Your profile has been updated successfully!');
    }
    
    public function postChangePassword(Request $request) {
        $request->validate([
            'old_password' => [
                'required',
            ],
            'password' => [
                'required',
                'confirmed',
                Rules\Password::defaults()
            ]
        ]);
        
        $oldpassword = $request->old_password;
        $newpassword = $request->password;
        
        if (Hash::check($oldpassword, Auth::user()->password)) {
            $request->user()->fill(['password' => Hash::make($newpassword)])->save();
            return redirect('user/view-profile')->with('success', 'Your password has been changed successfully!');
        } else {
            return redirect('user/view-profile')->withErrors('The old password does not match!');
        }
    }
}
