<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Default redirect if no role matches.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle user redirection after login based on role.
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('SuperAdmin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('SchoolAdmin')) {
            return redirect()->route('school.dashboard');
        } elseif ($user->hasRole('Teacher')) {
            return redirect()->route('teacher.dashboard');
        } elseif ($user->hasRole('Student')) {
            return redirect()->route('student.dashboard');
        } elseif ($user->hasRole('Parent')) {
            return redirect()->route('parent.dashboard');
        } elseif ($user->hasRole('Bursar')) {
            return redirect()->route('bursar.dashboard');
        }

        return redirect($this->redirectTo);
    }

    /**
     * Properly handle logout and prevent 419 Page Expired.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate and regenerate session to prevent CSRF token mismatch
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect to login after logout
    }
}
