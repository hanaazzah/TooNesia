<?php

namespace App\Services\Categories;

class CategoryService
{
	/**
	 * ini dalah atribute instance
	 */
	protected $model;

	/**
	 * ini adalah konstrucktor
	 */
	public function __construct(Category $model)
	{
		$this->model = $model;
	}

	public function browse()
	{
		return $this->model->orderBy('id', 'DESC')->paginate();
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

	public function getIdNameCategory()
	{
		return $this->model->get()->pluck('name', 'id');
	}

}
