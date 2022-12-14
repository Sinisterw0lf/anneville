<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Articles;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::where('is_published', 1)->orderBy("created_at", "DESC")->paginate(3);
        $actualites = Articles::where('type', 'Actualités')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(3);
        $agendas = Articles::where('type', 'Agenda')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(3);
        return view('pages.index', compact('articles', 'actualites', 'agendas'));
    }

    // this part represents each type of articles that have been published in their respective links
    public function actualites()
    {
        $actualites = Articles::where('type', 'Actualités')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(6);
        return view('actualités', compact('actualites'));
    }

    public function agendas()
    {
        $agendas = Articles::where('type', 'Agenda')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(6);
        return view('agenda', compact('agendas'));
    }

    public function cadredevies()
    {
        $cadredevies = Articles::where('type', 'Cadredevie')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(6);
        return view('cadredevie', compact('cadredevies'));
    }

    public function mairies()
    {
        $mairies = Articles::where('type', 'Mairie')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(6);
        return view('mairie', compact('mairies'));
    }

    public function liens()
    {
        $liens = Articles::where('type', 'Liens')->where('is_published', 1)->orderBy("created_at", "DESC")->paginate(6);
        return view('liens', compact('liens'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $request->validate([
            'title' => 'required|min:5|string|max:20|unique:articles,title',
            'description' => 'required|min:20|string|max:300',
            'url_img' => 'required|image|mimes:png,jpg,jpeg|max:2000|',
            'description2' => 'required|min:20|string|max:800',
            'type' => 'required',
        ]);

        $validateImg = $request->file('url_img')->store('storage/articles');

        Articles::create([
            'title' => $request->title,
            'description' => $request->description,
            'url_img' => $validateImg,
            'description2' => $request->description2,
            'type' => $request->type,
            'created_at' => now(),
        ]);

        return redirect()->route('dashboard')->with('status', 'Nouvel article ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {
        // dd($article->all());
        return view('pages.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article)
    {
        return view('pages.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Articles $article)
    {
        // verify is_published
        $published = 0;
        if ($request->has('is_published')) {
            $published = 1;
        }

        // verify if file exist
        // if file exist delete previous img
        if ($request->hasFile('url_img')) {
            //delete previous img
            Storage::delete($article->url_img);
            //store new img
            $article->url_img = $request->file('url_img')->store('articles');
        }

        $request->validate([
            'title' => 'required|min:5|string|max:40|',
            'description' => 'required|min:20|string|max:300',
            'url_img' => 'required|image|mimes:png,jpg,jpeg|max:2000|',
            'description2' => 'required|min:20|string|max:800',
            'type' => 'required',
        ]);

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'url_img' => $article->url_img,
            'description2' => $request->description2,
            'type' => $request->type,
            'is_published' => $published,
            'updated_at' => now(),
        ]);

        return redirect()->route("dashboard")->with('status', "L'article a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $article)
    {
        $article->delete();
        return redirect()->route("index")->with('status', "L'article a été supprimé");
    }

    public function allArticles()
    {
        $articles = Articles::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pages.all-articles', compact('articles'));
    }
}
