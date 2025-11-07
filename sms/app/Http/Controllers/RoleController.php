<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function assignRole(Request $request)
    {
        $request->validate([
            'role' => 'required|string|in:SuperAdmin,SchoolAdmin,Teacher,Student,Parent,Bursar',
        ]);

        $user = Auth::user();
        $role = $request->input('role');

        // Assign role
        $user->syncRoles([$role]);

        // Redirect based on role
        switch ($role) {
            case 'SuperAdmin':
                return redirect()->route('admin.dashboard');
            case 'Teacher':
                return redirect()->route('teacher.dashboard');
            case 'Student':
                return redirect()->route('student.dashboard');
            case 'Parent':
                return redirect()->route('parent.dashboard');
            case 'Bursar':
                return redirect()->route('bursar.dashboard');
            default:
                return redirect()->route('home');
        }
    }
}
