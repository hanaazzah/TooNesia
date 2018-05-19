<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Categories\CategoryService;
use App\Http\Request\CategoryRequest;

class CategoryController extends Controller
{
    
    /**
     * @var $service;
     */
    protected $service;

    public function __construct(CategoryService $service)
    {
    	$this->service = $service;
    }

    public function index()
    {
    	$categories = $this->service->browse();
    	return view('panels.categories.index', compact('categories'));
    }

    public function add()
    {
    	return view('panels.categories.add');
    }

    /**
     * @param App\Http\Request\CategoryRequest|$request --> berfungsi untuk melakukan validasi terlebih dahulu sebelum di proses di controller
     */
    public function store(CategoryRequest $request)
    {
    	$category = $this->service->store($request);
    	return redirect()->route('categories.index')->with('status', 'Data Berhasil di Simpan');
    }	

    public function edit($id)
    {
    	$category = $this->service->show($id);
    	return view('panels.categories.edit', compact('category'));
    }

    public function update($id, CategoryRequest $request)
    {
    	$this->service->update($id, $request);
    	return redirect()->route('categories.index')->with('status', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
    	$this->service->destroy($id);
    	return redirect()->route('categories.index')->with('status', 'Data Berhasil di Hapus');
    }
}
