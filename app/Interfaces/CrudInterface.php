<?php

namespace App\Interfaces;

interface CrudInterface
{
    /**
     * Get eloquent model resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function get(): \Illuminate\Database\Eloquent\Collection;

    /**
     * Show eloquent model resource.
     *
     * @param integer $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null
     */
    public function show(int $id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null;

    /**
     * Create an eloquent model resource.
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null
     */
    public function create(array $data): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null;

    /**
     * Update an eloquent model resource.
     *
     * @param array $data
     * @param integer $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null
     */
    public function update(array $data, int $id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null;

    /**
     * Delete an eloquent model resource.
     *
     * @param integer $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null
     */
    public function delete(int $id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null;
}
