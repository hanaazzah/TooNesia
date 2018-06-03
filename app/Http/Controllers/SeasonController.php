<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Seasons\SeasonService;
use App\Http\Requests\SeasonRequest;

class SeasonController extends Controller
{
    protected $service;

    public function __construct(SeasonService $service)
    {
        $this->service = $service;
    }

    public function index($id)
    {
        $seasons = $this->service->browse($id);
        return view('panels.seasons.index', compact('seasons'));
    }

    public function add($id)
    {
    	return view('panels.seasons.add');
    }

    public function store($id, SeasonRequest $request)
    {
        if($request->has('cover_image')){
            $image = $request->file('cover_image');
            $input['cover_image'] = 'public/images/seasons/'.time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images/seasons');

            $image->move($destinationPath, $input['cover_image']);
        }

        if($request->has('file_comic')){
            $image = $request->file('file_comic');
            $input['file_comic'] = 'public/images/seasons/'.time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/seasons');

            $image->move($destinationPath, $input['file_comic']);
        }

        $input['season_name'] = $request->season_name;
        $input['comic_id'] = $id;

    	$season = $this->service->store($input);
        $url = 'seasons/'.$id;
    	return redirect($url)->with('status', 'Data Berhasil di Simpan');
    }

    public function edit($id)
    {
    	$season = $this->service->show($id);
    	return view('panels.seasons.update', compact('season'));
    }

    public function update($id, ComicRequest $request)
    {
    	$this->service->update($id, $request->toArray());
    	return redirect()->route('seasons.index')->with('status', 'Data Berhasil di Update');
    }

    public function delete($uri, $id)
    {
    	$this->service->destroy($id);
        $url = 'seasons/'.$uri;
    	return redirect($url)->with('status', 'Data Berhasil di Hapus');
    }
}
