<?php
namespace App\Domain\VehicleRC\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\VehicleRC\Models\VehicleRC;

class SearchVehicleAndCreate
{
    use AsAction;

    public function handle($license_plate)
    {
        $validation = Validator::make(['license_plate' => $license_plate], $this->rules(), [], $this->validationAttributes());
        if (!$validation->fails()) {
            return $this->findVehicleInfo($license_plate);
        }
        else {
            return null;
        }
    }

    public static function findVehicleInfo($license_plate)
    {
        if (is_null($license_plate)) return null;

        return VehicleRC::where('license_plate', $license_plate)
            ->firstOr(function () use ($license_plate) {
                return VehicleRC::create(['license_plate' => $license_plate]);
            });
    }

    public static function rules($prefix = null) : array
    {
        return [
            'license_plate' => [
                'required', 'alpha_num', 'regex:/^[A-Z|a-z]{2}\s?[0-9]{1,2}\s?[A-Z|a-z]{0,3}\s?[0-9]{4}$/',
            ],
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            'license_plate' => 'license plate',
        ];
    }
}
