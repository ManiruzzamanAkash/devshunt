<?php

namespace App\Interfaces;

interface SlugInterface
{
    /**
     * Show a model by slug if it has.
     *
     * @param string $slug
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null
     */
    public function showBySlug(string $slug): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|null;
}
