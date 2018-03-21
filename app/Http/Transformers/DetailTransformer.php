<?php

namespace App\HTTP\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

class DetailTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param \Illuminate\Database\Eloquent\Model $model;
     * @return array
     */
    public function transform(Model $model)
    {
        return $model->toArray();
    }
}
