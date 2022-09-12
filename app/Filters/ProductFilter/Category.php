<?php

namespace App\Filters\ProductFilter;

use App\Filters\BaseFilter;

class Category extends BaseFilter
{
    protected function applyFilter($builder)
    {
        return $builder->where(function ($query) {
            $query->where($this->filterName(), request($this->filterName()));
        });
    }
}
