<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\PostMajorRequest;
use App\Models\Activity;
use App\Models\Gallery;
use App\Models\Major;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

use function Pest\Laravel\delete;

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
        [
            'name' => 'Gallery',
            'link' => '/dashboard/admin/gallery',
            'active' => 'dashboard/admin/gallery'
        ],
        [
            'name' => 'Pesan',
            'link' => '/dashboard/admin/pesan',
            'active' => 'dashboard/admin/pesan'
        ],
    ];

    public function admin(): View
    {

        $newses = News::paginate(6);
        $pages = $newses->getUrlRange(1, min(3, $newses->lastPage()));
        return view('components.dashboard-admin.news.news', [
            'title' => 'Berita',
            'newses' => $newses,
            'sidebarItem' => $this->sidebarItem,
            'pages' => $pages
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
        $news = News::findOrFail($id);
        if ($news->img_url) {
            Storage::delete($news->img_url);
        }
        $news->delete();
        return response()->json(['message' => "Berhasil menghapus kegiatan!"]);
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
            $path = $request->img_url->storeAs('upload/activity', $filename);
            $validated['img_url'] = $path;
        }

        Activity::create($validated);
        return redirect('/dashboard/admin/kegiatan')->with('successActivity', 'Berhasil menambah kegiatan!');
    }

    public function deleteActivity(string $id)
    {
        $activity = Activity::findOrFail($id);
        if ($activity->img_url) {
            Storage::delete($activity->img_url);
        }
        $activity->delete();
        return response()->json(['message' => "Berhasil menghapus kegiatan!"]);
    }

    public function galleryView(): View
    {
        return view('components.dashboard-admin.gallery.gallery', [
            'title' => 'Gallery',
            'sidebarItem' => $this->sidebarItem
        ]);
    }

    public function postGallery(Request $request)
    {
        $validated = $request->validate([
            'img_url' => 'required',
            'size_img' => 'required'
        ], [
            'required.img_url' => 'gambar tidak boleh kosong!',
            'required.size_img' => 'ukuran gambar tidak boleh kosong!'
        ]);
        $validated['author_id'] = Auth::id();
        $ext = last(explode('/', $request->img_url->getClientMimeType()));
        $filename = strtoupper(date('Y-m-d-s') . '-' . $request->img_url->getClientOriginalName()) . ".$ext";

        if ($request->hasFile('img_url')) {
            $path = $request->img_url->storeAs('upload/gallery', $filename);
            $validated['img_url'] = $path;
        }

        Gallery::create($validated);
        return redirect('/dashboard/admin/gallery')->with('successGallery', 'Berhasil menambahkan gambar!');
    }

    public function messageView(): View
    {
        return view('components.dashboard-admin.contact.contact', [
            'title' => "Pesan",
            'sidebarItem' => $this->sidebarItem
        ]);
    }
}
