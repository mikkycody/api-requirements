<?php

namespace App\Traits;

use Illuminate\Pipeline\Pipeline;

trait AddPipelineToModelTrait
{
    /**
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array  $pipes
     */
    public function scopeFilterWithPipeline($query, array $pipes)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through($pipes)
            ->thenReturn();
    }
}
