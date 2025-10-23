<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Activity;
use App\Models\Contact;
use App\Models\Major;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function home(): View
    {
        $activities = Activity::activityItem()->get();
        $newses = News::getNews();
        return view('home', [
            'title' => 'smkw9',
            'newses' => $newses,
            'majors' => Major::all(),
            'activities' => $activities
        ]);
    }

    public function createUser(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('/masuk')->with('success', 'Berhasil mendaftar,login sekarang!');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        };

        return back()->with('errLog', 'Gagal login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function postContacts(ContactsRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect('/#contact')->with('successMessage', 'Berhasil mengirim pesan!');
    }
}
