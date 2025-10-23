<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\PostMajorRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Activity;
use App\Models\Major;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    protected $sidebarItem = [
        [
            'name' => 'Berita',
            'link' => '/dashboard/admin/news',
            'active' => 'dashboard/admin/news'
        ],
        [
            'name' => 'Jurusan',
            'link' => '/dashboard/admin/jurusan',
            'active' => 'dashboard/admin/jurusan'
        ],
        [
            'name' => 'Kegiatan',
            'link' => '/dashboard/admin/kegiatan',
            'active' => 'dashboard/admin/kegiatan'
        ],
    ];

    public function admin(): View
    {

        $newses = News::all();
        return view('components.dashboard-admin.news.news', [
            'title' => 'Berita',
            'newses' => $newses,
            'sidebarItem' => $this->sidebarItem
        ]);
    }

    public function postNews(NewsRequest $request)
    {
        $validated = $request->validated();
        $originalName = $request->img_url->getClientOriginalName();
        $filename = now()->toDateString() . '-' . $originalName;

        if ($request->hasFile('img_url')) {
            $path = $request->img_url->storeAs('upload', $filename);
            $validated['img_url'] = $path;
        }

        $validated['author_id'] = Auth::id();
        News::create($validated);
        return redirect('/dashboard/admin/news')->with('successNews', 'Berhasil membuat berita baru!');
    }

    public function detailNews(int $id): View
    {
        $news = News::find($id);
        $paraghrap = explode('\n', $news->isi_berita);
        $news['isi_berita'] = $paraghrap;
        return view('detail-news', [
            'title' => 'Detail Berita',
            'news' => $news
        ]);
    }

    public function formUpdateNews(int $id): View
    {
        $oldNews = News::find($id);
        return view('components.form.update-news', [
            'title' => 'Ubah Berita',
            'oldNews' => $oldNews
        ]);
    }

    public function updateNews(NewsRequest $request, int $id)
    {
        $oldNews = News::findOrFail($id);
        $validated = $request->validated();
        dd($validated);
        // $originalName = $request->img_url->getClientOriginalName();
        // $filename = now()->toDateString() . '-' . $originalName;

        // if ($request->hasFile('img_url')) {
        //     if ($oldNews['img_url']) {
        //         Storage::delete($oldNews['img_url']);
        //     }
        //     $path = $request->img_url->storeAs('upload', $filename);
        //     $validated['img_url'] = $path;
        // }

        // return redirect('/dashboard/admin/news')->with('successUpdate', 'Berhasil merubah berita');
    }

    public function deleteNews(int $id)
    {
        $news = News::find($id);
        News::where('id', $id)->delete();
        Storage::delete($news['img_url']);

        return redirect('/dashboard/admin/news')->with('successDelete', 'Berhasil menghapus berita!');
    }

    public function major(): View
    {
        $majors = Major::all();
        return view('components.dashboard-admin.major.major', [
            'title' => 'Jurusan',
            'sidebarItem' => $this->sidebarItem,
            'majors' => $majors
        ]);
    }

    public function postMajor(PostMajorRequest $request)
    {
        $validated = $request->validated();
        $ext = last(explode('/', $request->img_url->getClientMimeType()));
        $extBg = last(explode('/', $request->bg_img->getClientMimeType()));
        $filename = strtoupper(date('Y-m-d-s') . '-' . $request->img_url->getClientOriginalName()) . ".$ext";
        $filenameBg = strtoupper(date('Y-m-d-s') . '-' . $request->bg_img->getClientOriginalName()) . ".$extBg";

        if ($request->hasFile('img_url')) {
            $path = $request->img_url->storeAs('upload', $filename);
            $pathBg = $request->bg_img->storeAs('upload', $filenameBg);

            $validated['img_url'] = $path;
            $validated['bg_img'] = $pathBg;
        }

        $validated['id'] = Auth::id();
        Major::create($validated);
        return redirect('/dashboard/admin/jurusan')->with('successMajor', 'Berhasil menambah jurusan');
    }

    public function activitiesView(): View
    {
        return view('components.dashboard-admin.activity.activities', [
            'title' => 'Kegiatan',
            'sidebarItem' => $this->sidebarItem,
            'activities' => Activity::all()
        ]);
    }

    public function postActivity(ActivityRequest $request)
    {
        $validated = $request->validated();
        $ext = last(explode('/', $request->img_url->getClientMimeType()));
        $filename = strtoupper(date('Y-m-d-s') . '-' . $request->img_url->getClientOriginalName()) . ".$ext";

        if ($request->hasFile('img_url')) {
            $path = $request->img_url->storeAs('upload', $filename);
            $validated['img_url'] = $path;
        }

        Activity::create($validated);
        return redirect('/dashboard/admin/kegiatan')->with('successActivity', 'Berhasil menambah kegiatan!');
    }
}
