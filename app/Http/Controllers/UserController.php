<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        // Fetch users from the database
        $users = User::all();

        // Return the users index view with the fetched users
        return view('user.index', compact('users'));
    }
    public function update(Request $request, User $user)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add other fields as needed
        ]);

        // Fill the user model with validated data
        $user->fill($validatedData);

        // Save the updated user
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User updated successfully.');
    }
}
