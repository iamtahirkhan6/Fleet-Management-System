<?php

namespace App\Domain\Project\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class CreateProject
{
    use AsAction;

    public function handle()
    {

    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'material_id'        => 'required',
            $prefix . 'consignee_id'       => 'required',
            $prefix . 'loading_point_id'   => 'required',
            $prefix . 'unloading_point_id' => 'required',
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'material_id'        => 'material',
            $prefix . 'consignee_id'       => 'consignee',
            $prefix . 'loading_point_id'   => 'loading point',
            $prefix . 'unloading_point_id' => 'unloading point',
        ];
    }
}
