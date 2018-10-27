<?php

namespace App\Services\Seasons;

class SeasonService
{
	/**
	 * ini dalah atribute instance
	 */
	protected $model;

	/**
	 * ini adalah konstrucktor
	 */
	public function __construct(Season $model)
	{
		$this->model = $model;
	}

	public function browse($id)
	{
		return $this->model->where('comic_id', $id)->orderBy('id', 'DESC')->paginate();
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

	public function getSeasonByComic($id)
	{
		return $this->model->where('comic_id', $id)->get();
	}

}
