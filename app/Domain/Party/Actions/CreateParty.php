<?php


namespace App\Domain\Party\Actions;

use App\Domain\Party\Models\Party;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateParty
{
    use AsAction;

    public static function message()
    {
        return [
            'name.required' => 'Party Name cannot be empty',
            'pan.required'  => 'Pan Details cannot be empty',
        ];
    }

    public function handle($input)
    {
        $validator = Validator::make($input, $this->rules());
        if ($validator->fails()) {
            return false;
        } else {
            return Party::firstOrCreate([ "pan"        => $input["pan"],
                                          "company_id" => Auth::user()->company_id,
            ], [ "name" => $input["name"] ]);
        }
    }

    public static function rules($prefix = null)
    {
        return [
            'name' => 'required',
            'pan'  => 'required',
        ];
    }
}
