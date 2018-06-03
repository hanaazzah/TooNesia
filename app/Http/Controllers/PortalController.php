<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Comics\ComicService;
use App\Services\Seasons\SeasonService;

class PortalController extends Controller
{

    private $comic;
    private $season;

    public function __construct(ComicService $comic, SeasonService $season)
    {
        $this->comic = $comic;
        $this->season = $season;
    }

    public function index()
    {
        $comics = $this->comic->setLimitComic(3);
        $popular_comics = $this->comic->setLimitComic(4);
        $tab_contents = $this->setTabContent();
        return view('welcome', compact('comics', 'popular_comics', 'tab_contents'));
    }

    public function detail($id)
    {
        $seasons = $this->season->browse($id);
        return view('details', compact('seasons'));
    }

    public function view()
    {
        return view('view');
    }

    private function setTabContent()
    {
        $content = $this->comic->getAllWithCategory();
        return $content;
    }
}
