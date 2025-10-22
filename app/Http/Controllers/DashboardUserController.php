<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardUserController extends Controller
{
    public function profile(): View
    {
        $user = Auth::user();
        return view('components.dashboard-user.profile', [
            'title' => 'Poofile',
            'user' => $user
        ]);
    }
}
