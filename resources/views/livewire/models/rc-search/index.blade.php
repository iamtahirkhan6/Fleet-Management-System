<div x-data="{showVehicleInfo: @entangle('showVehicleInfo')}">

    <div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg">
        <x-forms.basic-stacked.form wire:submit.prevent='findVehicleInfo' :backLink="route('dashboard')"
                                    backLinkTitle="Go Back">

            <!-- License Plate -->
            <x-forms.basic-stacked.column title="License Plate" error="license_plate" required="true">
                <x-forms.basic-stacked.input-basic wire:model.lazy="license_plate"
                                                   placeholder="License Plate Number"></x-forms.basic-stacked.input-basic>
            </x-forms.basic-stacked.column>

{{--            <div wire:loading wire:target="findVehicleInfo">--}}
{{--                <div>--}}
{{--                    <br>--}}
{{--                    <img src="{{ asset('img/theme/loader.gif') }}" class="w-8/12" alt="Loading">--}}
{{--                </div>--}}
{{--            </div>--}}

        </x-forms.basic-stacked.form>
    </div>

{{--    {{ TODO Generate Descript list from an array }}--}}
    <x-description-list.main :list="$vehicle"
                             x-show="showVehicleInfo"
                             title="Vehicle Information"
                             desc="All the details regarding the vehicle is available here." x-cloak>

    </x-description-list.main>
</div>
