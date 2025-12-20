<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Activity;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Major;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class UserController extends Controller
{
    public function home(): View
    {
        $activities = Activity::activityItem()->get();
        $newses = News::getNews();
        $navbarItem = [
            [
                "name" => "Beranda",
                "link" => "#beranda"
            ],
            [
                "name" => "Tentang",
                "link" => "#tentang"
            ],
            [
                "name" => "Jurusan",
                "link" => "#jurusan"
            ],
            [
                "name" => "Kegiatan",
                "link" => "#kegiatan"
            ],
            [
                "name" => "Berita",
                "link" => "#berita"
            ],
            [
                "name" => "Pendaftaran",
                "link" => "#pendaftaran"
            ],
            [
                "name" => "Hubungi",
                "link" => "#hubungi"
            ]
        ];

        return view('home', [
            'title' => 'smkw9',
            'newses' => $newses,
            'majors' => Major::all(),
            'activities' => $activities,
            'galleries' => Gallery::all(),
            'navbarItems' => $navbarItem
        ]);
    }

    public function detailAbout(): View
    {
        $slides = [
            'img/school.jpg',
            'img/mount.jpg',
            'img/bg.webp'
        ];

        return view('components.sections.section-about.detail-about.detail', [
            'title' => 'Detail Informasi',
            'slides' => $slides
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

    public function forgotPassword(Request $request)
    {
        $request->validate(
            ['email' => ['required', 'email:rfc']],
            [
                'required' => 'email tidak boleh kosong!',
                'email' => 'format email salah!'
            ]
        );

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::ResetLinkSent ?
            back()->with('message', 'Berhasil mengirim link tautan!') :
            back()->withErrors('errorForgot', 'Gagal mengirim tautan!');
    }

    public function resetPassword(string $token): View
    {
        return view('components.form.reset-password', [
            'title' => 'Reset Password',
            'token' => $token
        ]);
    }
}
