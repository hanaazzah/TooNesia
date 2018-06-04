<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Comics\ComicService;
use App\Services\Categories\CategoryService;
use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{
    /**
     * @var $service;
     */
    protected $service;
    protected $category;

    public function __construct(ComicService $service, CategoryService $category)
    {
        $this->service = $service;
    	$this->category = $category;
    }

    public function index()
    {
    	$comics = $this->service->browse();
    	return view('panels.comics.index', compact('comics'));
    }

    public function add()
    {
        $categories = $this->category->getIdNameCategory();
    	return view('panels.comics.add', compact('categories'));
    }

    public function store(ComicRequest $request)
    {
        if($request->has('image')){
            $image = $request->file('image');
            $input['image'] = 'public/images/comics/'.time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images/comics');

            $image->move($destinationPath, $input['image']);
        }

        $input['title'] = $request->title;
        $input['description'] = $request->description;
        $input['category_id'] = $request->category;

    	$comic = $this->service->store($input);
    	return redirect()->route('comics.index')->with('status', 'Data Berhasil di Simpan');
    }

    public function edit($id)
    {
    	$comic = $this->service->show($id);
        $categories = $this->category->getIdNameCategory();
    	return view('panels.comics.update', compact('comic', 'categories'));
    }

    public function update($id, Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        
        if($request->has('image')){
            $image = $request->file('image');
            $input['image'] = 'public/images/comics/'.time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images/comics');

            $image->move($destinationPath, $input['image']);
        }

        $input['title'] = $request->title;
        $input['description'] = $request->description;
        $input['category_id'] = $request->category;

    	$this->service->update($id, $input);
    	return redirect()->route('comics.index')->with('status', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
    	$this->service->destroy($id);
    	return redirect()->route('comics.index')->with('status', 'Data Berhasil di Hapus');
    }
}
