<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\{Redirect, Storage};

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data[] = [];
        if (Auth::check()) {
            $data["user"] = Auth::user()->email;
        }

        return view("admin.index", $data);
    }

    public function services()
    {
        return view("admin.services.services");
    }

    public function servicesCategory()
    {
        $categories = Category::get();

        return view("admin.services.category", compact('categories'));
    }

    public function servicesCategoryAdd(Request $request)
    {
        if ($request->hasFile('photoUrl')) {

            $image = Storage::disk('public')->put('images',
                $request->file('photoUrl'));

        }
        Category::create($request->except('photoUrl') + ['photoUrl' => $image ??
                null]);
        return redirect()->back();

    }

    public function servicesCategoryRemove(Category $id)
    {

        if (!is_null($id->photoUrl)) {
            Storage::disk('public')->delete($id->photoUrl);
        }
        $id->delete();
        return redirect()->back();

    }

    public function services_category_detail(Request $request)
    {
        $id = $request->input("id");

        $detay = Category::where("id", "=", $id)->first();

        if ($detay) {
            $html = view('admin.services.services_category_detay_ajax', ['detay' => $detay])->render();
            $json['durum'] = "basarili";
            $json["cikti"] = $html;
            echo json_encode($json);
        } else {

            $json['durum'] = "basarisiz";
            $json['aciklama'] = "Çıktı Bulunamadı.";
            echo json_encode($json);
            exit();
        }
    }

    public function servicesAdd()
    {
        return view("admin.services.services_add");
    }
}
