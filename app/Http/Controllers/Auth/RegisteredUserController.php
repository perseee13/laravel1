<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact_no' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle Profile Picture Upload
        $profile_picture_path = null;
        if ($request->hasFile('profile_picture')) {
            $profile_picture_path = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Create User with Extra Fields
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'profile_picture' => $profile_picture_path,
            'password' => Hash::make($request->password),
        ]);

        // Assign Role (Customer by default)
        $user->assignRole('customer');

        auth()->login($user);

        return redirect()->intended('/dashboard');
    }
}
