<?php
/**
 * Created by PhpStorm.
 * User: huguihai
 * Date: 1/26/18
 * Time: 6:45 PM
 */

namespace App\HTTP\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

class BaseTransformer extends TransformerAbstract
{
    protected $fieldToShow = [];
    public function transform(Model $obj)
    {
        $result = [];
        foreach ($this->fieldToShow as $field) {
            $result[$field] = $obj->{$field};
        }
        return $result;
    }
}
