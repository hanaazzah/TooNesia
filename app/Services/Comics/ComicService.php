<?php

namespace App\Services\Comics;

use App\Services\Categories\Category;

class ComicService
{
	/**
	 * ini dalah atribute instance
	 */
	protected $model;
	protected $category;

	/**
	 * ini adalah konstrucktor
	 */
	public function __construct(Comic $model, Category $category)
	{
		$this->model = $model;
		$this->category = $category;
	}

	public function browse()
	{
		return $this->model->orderBy('id', 'DESC')->paginate();
	}

	public function getAllWithCategory()
	{
		$contents = $this->category->with('comics')->limit(6)->get();
		return $contents;
	}

	public function show($id)
	{
		return $this->model->findOrFail($id);
	}

	public function store($payload)
	{
		return $this->model->create($payload);
	}

	public function update($id, $payload)
	{
		$category = $this->model->find($id);
		return $category->update($payload);
	}

	public function destroy($id)
	{
		return $this->model->destroy($id);
	}

	public function setLimitComic($limit)
	{
		return $this->model->limit($limit)->get();
	}

}
