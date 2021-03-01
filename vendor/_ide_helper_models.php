<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App\Domain\Agent\Models {

    use App\Domain\General\Models\PhoneNumber;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentCollection;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property PhoneNumber $phoneNumber
     * @method MorphToMany|_PhoneNumberQueryBuilder phoneNumber()
     * @method _AgentQueryBuilder newModelQuery()
     * @method _AgentQueryBuilder newQuery()
     * @method static _AgentQueryBuilder query()
     * @method static _AgentCollection|Agent[] all()
     * @mixin _AgentQueryBuilder
     */
    class Agent extends Model {}
}

namespace App\Domain\Company\Models {

    use App\Domain\Agent\Models\Agent;
    use App\Domain\Employee\Models\Employee;
    use App\Domain\Fleet\Models\Fleet;
    use App\Domain\General\Models\Address;
    use App\Domain\Office\Models\Office;
    use App\Domain\Project\Models\Project;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentCollection;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyCollection;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeCollection;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectCollection;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;
    use LaravelIdea\Helper\App\Models\_UserQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property string $short_code
     * @property string|null $gstn
     * @property string|null $pan
     * @property bool $use_razorpay
     * @property string|null $razorpay_key_id
     * @property string|null $razorpay_key_secret
     * @property string|null $razorpay_account_number
     * @property int $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Address $address
     * @method MorphToMany|_AddressQueryBuilder address()
     * @property _AgentCollection|Agent[] $agents
     * @method HasMany|_AgentQueryBuilder agents()
     * @property _EmployeeCollection|Employee[] $employees
     * @method HasMany|_EmployeeQueryBuilder employees()
     * @property _FleetCollection|Fleet[] $fleets
     * @method HasMany|_FleetQueryBuilder fleets()
     * @property User $manager
     * @method HasOne|_UserQueryBuilder manager()
     * @property _OfficeCollection|Office[] $offices
     * @method HasMany|_OfficeQueryBuilder offices()
     * @property _ProjectCollection|Project[] $projects
     * @method HasMany|_ProjectQueryBuilder projects()
     * @method _CompanyQueryBuilder newModelQuery()
     * @method _CompanyQueryBuilder newQuery()
     * @method static _CompanyQueryBuilder query()
     * @method static _CompanyCollection|Company[] all()
     * @mixin _CompanyQueryBuilder
     */
    class Company extends Model {}
}

namespace App\Domain\Consignee\Models {

    use App\Domain\General\Models\Address;
    use App\Domain\Project\Models\Project;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeCollection;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectCollection;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property string $short_code
     * @property string|null $gstn
     * @property string|null $pan
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Address $address
     * @method MorphToMany|_AddressQueryBuilder address()
     * @property _ProjectCollection|Project[] $projects
     * @method HasMany|_ProjectQueryBuilder projects()
     * @method _ConsigneeQueryBuilder newModelQuery()
     * @method _ConsigneeQueryBuilder newQuery()
     * @method static _ConsigneeQueryBuilder query()
     * @method static _ConsigneeCollection|Consignee[] all()
     * @mixin _ConsigneeQueryBuilder
     */
    class Consignee extends Model {}
}

namespace App\Domain\Employee\Models {

    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\Office\Models\Office;
    use App\Domain\Payment\Models\BankAccount;
    use App\Domain\Trip\Models\Trip;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeDesignationClassificationCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeDesignationClassificationQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeePaymentDetailsCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeePaymentDetailsQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesAttendanceCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesAttendanceQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesDesignationCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesDesignationQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;

    /**
     * @property int $id
     * @property string|null $name
     * @property float|null $salary
     * @property string|null $email
     * @property int $office_id
     * @property int $company_id
     * @property int $employee_designation_id
     * @property bool|null $is_currently_hired
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property BankAccount $bankAccount
     * @method MorphToMany|_BankAccountQueryBuilder bankAccount()
     * @property EmployeesDesignation $designation
     * @method HasOne|_EmployeesDesignationQueryBuilder designation()
     * @property Office $office
     * @method HasOne|_OfficeQueryBuilder office()
     * @property PhoneNumber $phoneNumber
     * @method MorphToMany|_PhoneNumberQueryBuilder phoneNumber()
     * @property _TripCollection|Trip[] $trips
     * @method MorphToMany|_TripQueryBuilder trips()
     * @method _EmployeeQueryBuilder newModelQuery()
     * @method _EmployeeQueryBuilder newQuery()
     * @method static _EmployeeQueryBuilder query()
     * @method static _EmployeeCollection|Employee[] all()
     * @mixin _EmployeeQueryBuilder
     */
    class Employee extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _EmployeesDesignationCollection|EmployeesDesignation[] $designations
     * @method HasMany|_EmployeesDesignationQueryBuilder designations()
     * @method _EmployeeDesignationClassificationQueryBuilder newModelQuery()
     * @method _EmployeeDesignationClassificationQueryBuilder newQuery()
     * @method static _EmployeeDesignationClassificationQueryBuilder query()
     * @method static _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] all()
     * @mixin _EmployeeDesignationClassificationQueryBuilder
     */
    class EmployeeDesignationClassification extends Model {}

    /**
     * @property Employee $employee
     * @method BelongsTo|_EmployeeQueryBuilder employee()
     * @method _EmployeePaymentDetailsQueryBuilder newModelQuery()
     * @method _EmployeePaymentDetailsQueryBuilder newQuery()
     * @method static _EmployeePaymentDetailsQueryBuilder query()
     * @method static _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] all()
     * @mixin _EmployeePaymentDetailsQueryBuilder
     */
    class EmployeePaymentDetails extends Model {}

    /**
     * @property int $id
     * @property Carbon $date
     * @property int $employee_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _EmployeesAttendanceQueryBuilder newModelQuery()
     * @method _EmployeesAttendanceQueryBuilder newQuery()
     * @method static _EmployeesAttendanceQueryBuilder query()
     * @method static _EmployeesAttendanceCollection|EmployeesAttendance[] all()
     * @mixin _EmployeesAttendanceQueryBuilder
     */
    class EmployeesAttendance extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $emp_desig_class_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property EmployeeDesignationClassification $classification
     * @method BelongsTo|_EmployeeDesignationClassificationQueryBuilder classification()
     * @method _EmployeesDesignationQueryBuilder newModelQuery()
     * @method _EmployeesDesignationQueryBuilder newQuery()
     * @method static _EmployeesDesignationQueryBuilder query()
     * @method static _EmployeesDesignationCollection|EmployeesDesignation[] all()
     * @mixin _EmployeesDesignationQueryBuilder
     */
    class EmployeesDesignation extends Model {}
}

namespace App\Domain\Expense\Models {

    use App\Domain\Office\Models\Office;
    use App\Domain\Payee\Models\Payee;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryTypeCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryTypeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payee\Models\_PayeeQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    /**
     * @property int $id
     * @property Carbon $date
     * @property int $amount
     * @property string|null $remark
     * @property int $expense_category_id
     * @property int|null $payee_id
     * @property int $office_id
     * @property int $payment_method_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ExpenseCategory $category
     * @method BelongsTo|_ExpenseCategoryQueryBuilder category()
     * @property _MediaCollection|Media[] $media
     * @method MorphToMany|_MediaQueryBuilder media()
     * @property Office $office
     * @method BelongsTo|_OfficeQueryBuilder office()
     * @property Payee $payee
     * @method BelongsTo|_PayeeQueryBuilder payee()
     * @property ExpenseCategory $payment_method
     * @method HasOne|_ExpenseCategoryQueryBuilder payment_method()
     * @method _ExpenseQueryBuilder newModelQuery()
     * @method _ExpenseQueryBuilder newQuery()
     * @method static _ExpenseQueryBuilder query()
     * @method static _ExpenseCollection|Expense[] all()
     * @mixin _ExpenseQueryBuilder
     */
    class Expense extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $expense_category_type_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _ExpenseCategoryQueryBuilder newModelQuery()
     * @method _ExpenseCategoryQueryBuilder newQuery()
     * @method static _ExpenseCategoryQueryBuilder query()
     * @method static _ExpenseCategoryCollection|ExpenseCategory[] all()
     * @mixin _ExpenseCategoryQueryBuilder
     */
    class ExpenseCategory extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _ExpenseCategoryTypeQueryBuilder newModelQuery()
     * @method _ExpenseCategoryTypeQueryBuilder newQuery()
     * @method static _ExpenseCategoryTypeQueryBuilder query()
     * @method static _ExpenseCategoryTypeCollection|ExpenseCategoryType[] all()
     * @mixin _ExpenseCategoryTypeQueryBuilder
     */
    class ExpenseCategoryType extends Model {}
}

namespace App\Domain\Fleet\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetDailyInspectionCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetDailyInspectionQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetLiveCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetLiveQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetMaintenanceCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetMaintenanceQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetTripCatcherCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetTripCatcherQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetVehicleCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetVehicleQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _FleetVehicleCollection|FleetVehicle[] $vehicles
     * @method HasMany|_FleetVehicleQueryBuilder vehicles()
     * @method _FleetQueryBuilder newModelQuery()
     * @method _FleetQueryBuilder newQuery()
     * @method static _FleetQueryBuilder query()
     * @method static _FleetCollection|Fleet[] all()
     * @mixin _FleetQueryBuilder
     */
    class Fleet extends Model {}

    /**
     * @property bool $air_filter
     * @property float|null $air_filter_charge
     * @property bool $grease
     * @property float|null $grease_charge
     * @property bool $tyre_repair
     * @property float|null $tyre_repair_charge
     * @property bool $urea
     * @property float|null $urea_amount
     * @property float|null $urea_charge
     * @property bool $misc
     * @property string|null $misc_charge
     * @property float|null $misc_remark
     * @property float|null $total
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _FleetDailyInspectionQueryBuilder newModelQuery()
     * @method _FleetDailyInspectionQueryBuilder newQuery()
     * @method static _FleetDailyInspectionQueryBuilder query()
     * @method static _FleetDailyInspectionCollection|FleetDailyInspection[] all()
     * @mixin _FleetDailyInspectionQueryBuilder
     */
    class FleetDailyInspection extends Model {}

    /**
     * @property int $id
     * @property string|null $outtype
     * @property string|null $ttime
     * @property string|null $rectime
     * @property string|null $trips
     * @property string|null $rdev
     * @property string|null $mineral
     * @property string|null $sourcecode
     * @property string|null $lessycode
     * @property string|null $vehiclespeed
     * @property string|null $ignumber
     * @property string|null $gpsstatus
     * @property string|null $circle
     * @property string|null $starttime
     * @property string|null $endtime
     * @property string|null $destination
     * @property string|null $routename
     * @property string|null $latitude
     * @property string|null $longitude
     * @property string|null $imeino
     * @property string|null $etpno
     * @property string|null $vehcount
     * @property string|null $tripcount
     * @property string|null $vehicleno
     * @property string|null $outtime
     * @property string|null $intime
     * @property string|null $rdevstarttime
     * @property string|null $rdevendtime
     * @property string|null $rdevtime
     * @property string|null $pollingtime
     * @property string|null $company
     * @property string|null $destcode
     * @property string|null $time
     * @property string|null $index
     * @property string|null $source
     * @property string|null $status
     * @property string|null $location
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _FleetLiveQueryBuilder newModelQuery()
     * @method _FleetLiveQueryBuilder newQuery()
     * @method static _FleetLiveQueryBuilder query()
     * @method static _FleetLiveCollection|FleetLive[] all()
     * @mixin _FleetLiveQueryBuilder
     */
    class FleetLive extends Model {}

    /**
     * @method _FleetMaintenanceQueryBuilder newModelQuery()
     * @method _FleetMaintenanceQueryBuilder newQuery()
     * @method static _FleetMaintenanceQueryBuilder query()
     * @method static _FleetMaintenanceCollection|FleetMaintenance[] all()
     * @mixin _FleetMaintenanceQueryBuilder
     */
    class FleetMaintenance extends Model {}

    /**
     * @property int $id
     * @property string $vehicleno
     * @property string $etpno
     * @property string|null $source
     * @property string|null $destination
     * @property string|null $starttime
     * @property string|null $pollingtime
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _FleetTripCatcherQueryBuilder newModelQuery()
     * @method _FleetTripCatcherQueryBuilder newQuery()
     * @method static _FleetTripCatcherQueryBuilder query()
     * @method static _FleetTripCatcherCollection|FleetTripCatcher[] all()
     * @mixin _FleetTripCatcherQueryBuilder
     */
    class FleetTripCatcher extends Model {}

    /**
     * @property int $id
     * @property string $license_plate
     * @property string|null $rto
     * @property string|null $model
     * @property string|null $class
     * @property string|null $color
     * @property string|null $state
     * @property string|null $weight
     * @property string|null $isValid
     * @property string|null $financer
     * @property string|null $puc_upto
     * @property string|null $rto_code
     * @property string|null $fuel_type
     * @property string|null $fuel_norm
     * @property string|null $owner_name
     * @property string|null $mvtax_upto
     * @property string|null $vehicle_age
     * @property string|null $price_range
     * @property string|null $noc_details
     * @property string|null $vehicle_type
     * @property string|null $fitness_upto
     * @property string|null $roadtax_upto
     * @property string|null $engine_number
     * @property string|null $ownership_type
     * @property string|null $chassis_number
     * @property string|null $engine_capacity
     * @property string|null $registration_date
     * @property string|null $registering_authority
     * @property int $fleet_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Fleet $fleet
     * @method BelongsTo|_FleetQueryBuilder fleet()
     * @method _FleetVehicleQueryBuilder newModelQuery()
     * @method _FleetVehicleQueryBuilder newQuery()
     * @method static _FleetVehicleQueryBuilder query()
     * @method static _FleetVehicleCollection|FleetVehicle[] all()
     * @mixin _FleetVehicleQueryBuilder
     */
    class FleetVehicle extends Model {}
}

namespace App\Domain\General\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_GstDetailsCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_GstDetailsQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_MaterialCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_MaterialQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;

    /**
     * @property int $id
     * @property string|null $line_1
     * @property string|null $line_2
     * @property string|null $city
     * @property string|null $district
     * @property string|null $state
     * @property string|null $zip
     * @property int $addressable_id
     * @property string $addressable_type
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $addressable
     * @method MorphTo addressable()
     * @method _AddressQueryBuilder newModelQuery()
     * @method _AddressQueryBuilder newQuery()
     * @method static _AddressQueryBuilder query()
     * @method static _AddressCollection|Address[] all()
     * @mixin _AddressQueryBuilder
     */
    class Address extends Model {}

    /**
     * @property int $id
     * @property string $gstn
     * @property string|null $legal_name
     * @property string|null $trade_name
     * @property string|null $taxpayer_type
     * @property string|null $reg_date
     * @property string|null $state_code
     * @property string|null $nature
     * @property string|null $jurisdiction
     * @property string|null $business_type
     * @property string|null $last_update
     * @property string|null $address_1
     * @property string|null $address_2
     * @property string|null $pin
     * @property string|null $state
     * @property string|null $city
     * @property string|null $district
     * @property string|null $status
     * @method _GstDetailsQueryBuilder newModelQuery()
     * @method _GstDetailsQueryBuilder newQuery()
     * @method static _GstDetailsQueryBuilder query()
     * @method static _GstDetailsCollection|GstDetails[] all()
     * @mixin _GstDetailsQueryBuilder
     */
    class GstDetails extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _MaterialQueryBuilder newModelQuery()
     * @method _MaterialQueryBuilder newQuery()
     * @method static _MaterialQueryBuilder query()
     * @method static _MaterialCollection|Material[] all()
     * @mixin _MaterialQueryBuilder
     */
    class Material extends Model {}

    /**
     * @property int $id
     * @property string $phone_number
     * @property int $company_id
     * @property int $phoneable_id
     * @property string $phoneable_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $phoneable
     * @method MorphTo phoneable()
     * @method _PhoneNumberQueryBuilder newModelQuery()
     * @method _PhoneNumberQueryBuilder newQuery()
     * @method static _PhoneNumberQueryBuilder query()
     * @method static _PhoneNumberCollection|PhoneNumber[] all()
     * @mixin _PhoneNumberQueryBuilder
     */
    class PhoneNumber extends Model {}
}

namespace App\Domain\Invoice\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceCollection;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceStatusCollection;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceStatusQueryBuilder;

    /**
     * @property int $id
     * @property Carbon $invoice_date
     * @property Carbon|null $due_date
     * @property string $invoice_number
     * @property string $bill_number
     * @property array|null $items
     * @property string|null $reference_number
     * @property int $status
     * @property string|null $notes
     * @property int $amount_total
     * @property int $amount_paid
     * @property int $amount_due
     * @property int $consignee_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _InvoiceQueryBuilder newModelQuery()
     * @method _InvoiceQueryBuilder newQuery()
     * @method static _InvoiceQueryBuilder query()
     * @method static _InvoiceCollection|Invoice[] all()
     * @mixin _InvoiceQueryBuilder
     */
    class Invoice extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _InvoiceStatusQueryBuilder newModelQuery()
     * @method _InvoiceStatusQueryBuilder newQuery()
     * @method static _InvoiceStatusQueryBuilder query()
     * @method static _InvoiceStatusCollection|InvoiceStatus[] all()
     * @mixin _InvoiceStatusQueryBuilder
     */
    class InvoiceStatus extends Model {}
}

namespace App\Domain\LoadingPoint\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\LoadingPoint\Models\_LoadingPointCollection;
    use LaravelIdea\Helper\App\Domain\LoadingPoint\Models\_LoadingPointQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property string $short_code
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _LoadingPointQueryBuilder newModelQuery()
     * @method _LoadingPointQueryBuilder newQuery()
     * @method static _LoadingPointQueryBuilder query()
     * @method static _LoadingPointCollection|LoadingPoint[] all()
     * @mixin _LoadingPointQueryBuilder
     */
    class LoadingPoint extends Model {}
}

namespace App\Domain\MarketVehicle\Models {

    use App\Domain\Party\Models\Party;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleCollection;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyCollection;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyQueryBuilder;

    /**
     * @property int $id
     * @property string $number
     * @property int $party_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _PartyCollection|Party[] $party
     * @method HasMany|_PartyQueryBuilder party()
     * @method _MarketVehicleQueryBuilder newModelQuery()
     * @method _MarketVehicleQueryBuilder newQuery()
     * @method static _MarketVehicleQueryBuilder query()
     * @method static _MarketVehicleCollection|MarketVehicle[] all()
     * @mixin _MarketVehicleQueryBuilder
     */
    class MarketVehicle extends Model {}
}

namespace App\Domain\Office\Models {

    use App\Domain\Company\Models\Company;
    use App\Domain\Employee\Models\Employee;
    use App\Domain\Expense\Models\Expense;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeCollection;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Company $company
     * @method BelongsTo|_CompanyQueryBuilder company()
     * @property _EmployeeCollection|Employee[] $employees
     * @method HasMany|_EmployeeQueryBuilder employees()
     * @property _ExpenseCollection|Expense[] $expenses
     * @method HasMany|_ExpenseQueryBuilder expenses()
     * @method _OfficeQueryBuilder newModelQuery()
     * @method _OfficeQueryBuilder newQuery()
     * @method static _OfficeQueryBuilder query()
     * @method static _OfficeCollection|Office[] all()
     * @mixin _OfficeQueryBuilder
     */
    class Office extends Model {}
}

namespace App\Domain\Party\Models {

    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use App\Domain\Payment\Models\BankAccount;
    use App\Domain\Trip\Models\Trip;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleCollection;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyCollection;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    /**
     * @property int $id
     * @property string $name
     * @property string|null $pan
     * @property string|null $razorpay_contact_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _BankAccountCollection|BankAccount[] $bankAccounts
     * @method MorphToMany|_BankAccountQueryBuilder bankAccounts()
     * @property _MediaCollection|Media[] $media
     * @method MorphToMany|_MediaQueryBuilder media()
     * @property PhoneNumber $phoneNumber
     * @method MorphToMany|_PhoneNumberQueryBuilder phoneNumber()
     * @property _TripCollection|Trip[] $trips
     * @method HasMany|_TripQueryBuilder trips()
     * @property _MarketVehicleCollection|MarketVehicle[] $vehicles
     * @method HasMany|_MarketVehicleQueryBuilder vehicles()
     * @method _PartyQueryBuilder newModelQuery()
     * @method _PartyQueryBuilder newQuery()
     * @method static _PartyQueryBuilder query()
     * @method static _PartyCollection|Party[] all()
     * @mixin _PartyQueryBuilder
     */
    class Party extends Model {}
}

namespace App\Domain\Payee\Models {

    use App\Domain\Company\Models\Company;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payee\Models\_PayeeCollection;
    use LaravelIdea\Helper\App\Domain\Payee\Models\_PayeeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payee\Models\_PayeeTypeCollection;
    use LaravelIdea\Helper\App\Domain\Payee\Models\_PayeeTypeQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property int $payee_type_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Company $company
     * @method BelongsTo|_CompanyQueryBuilder company()
     * @property PayeeType $payeeType
     * @method BelongsTo|_PayeeTypeQueryBuilder payeeType()
     * @method _PayeeQueryBuilder newModelQuery()
     * @method _PayeeQueryBuilder newQuery()
     * @method static _PayeeQueryBuilder query()
     * @method static _PayeeCollection|Payee[] all()
     * @mixin _PayeeQueryBuilder
     */
    class Payee extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _PayeeTypeQueryBuilder newModelQuery()
     * @method _PayeeTypeQueryBuilder newQuery()
     * @method static _PayeeTypeQueryBuilder query()
     * @method static _PayeeTypeCollection|PayeeType[] all()
     * @mixin _PayeeTypeQueryBuilder
     */
    class PayeeType extends Model {}
}

namespace App\Domain\Payment\Models {

    use App\Domain\Trip\Models\Trip;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentMethodCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentMethodQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentStatusCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentStatusQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_TaxCategoryCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_TaxCategoryQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    /**
     * @property int $id
     * @property string|null $account_name
     * @property string $account_number
     * @property string $ifsc_code
     * @property int $bankable_id
     * @property string $bankable_type
     * @property string|null $fund_account_id
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $bankable
     * @method MorphTo bankable()
     * @method _BankAccountQueryBuilder newModelQuery()
     * @method _BankAccountQueryBuilder newQuery()
     * @method static _BankAccountQueryBuilder query()
     * @method static _BankAccountCollection|BankAccount[] all()
     * @mixin _BankAccountQueryBuilder
     */
    class BankAccount extends Model {}

    /**
     * @property int $id
     * @property float $amount
     * @property int $bank_account_id
     * @property int $payment_method_id
     * @property int $payment_status_id
     * @property float|null $fees
     * @property string|null $remarks
     * @property string|null $utr_number
     * @property string|null $razorpay_payout_id
     * @property int $company_id
     * @property int|null $created_by
     * @property int|null $finished_by
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $trip_id
     * @property BankAccount $bankAccount
     * @method HasOne|_BankAccountQueryBuilder bankAccount()
     * @property _MediaCollection|Media[] $media
     * @method MorphToMany|_MediaQueryBuilder media()
     * @property PaymentMethod $method
     * @method HasOne|_PaymentMethodQueryBuilder method()
     * @property PaymentStatus $status
     * @method HasOne|_PaymentStatusQueryBuilder status()
     * @property Trip $trip
     * @method BelongsTo|_TripQueryBuilder trip()
     * @method _PaymentQueryBuilder newModelQuery()
     * @method _PaymentQueryBuilder newQuery()
     * @method static _PaymentQueryBuilder query()
     * @method static _PaymentCollection|Payment[] all()
     * @mixin _PaymentQueryBuilder
     */
    class Payment extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $paymentable
     * @method MorphTo paymentable()
     * @method _PaymentMethodQueryBuilder newModelQuery()
     * @method _PaymentMethodQueryBuilder newQuery()
     * @method static _PaymentMethodQueryBuilder query()
     * @method static _PaymentMethodCollection|PaymentMethod[] all()
     * @mixin _PaymentMethodQueryBuilder
     */
    class PaymentMethod extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $desc
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _PaymentStatusQueryBuilder newModelQuery()
     * @method _PaymentStatusQueryBuilder newQuery()
     * @method static _PaymentStatusQueryBuilder query()
     * @method static _PaymentStatusCollection|PaymentStatus[] all()
     * @mixin _PaymentStatusQueryBuilder
     */
    class PaymentStatus extends Model {}

    /**
     * @property int $id
     * @property string $section
     * @property float $percentage
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _TaxCategoryQueryBuilder newModelQuery()
     * @method _TaxCategoryQueryBuilder newQuery()
     * @method static _TaxCategoryQueryBuilder query()
     * @method static _TaxCategoryCollection|TaxCategory[] all()
     * @mixin _TaxCategoryQueryBuilder
     */
    class TaxCategory extends Model {}
}

namespace App\Domain\Project\Models {

    use App\Domain\Company\Models\Company;
    use App\Domain\Consignee\Models\Consignee;
    use App\Domain\General\Models\Material;
    use App\Domain\LoadingPoint\Models\LoadingPoint;
    use App\Domain\Trip\Models\Trip;
    use App\Domain\UnloadingPoint\Models\UnloadingPoint;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_MaterialQueryBuilder;
    use LaravelIdea\Helper\App\Domain\LoadingPoint\Models\_LoadingPointQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectCollection;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\UnloadingPoint\Models\_UnloadingPointQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property int $material_id
     * @property int $loading_point_id
     * @property int $unloading_point_id
     * @property int $consignee_id
     * @property int $company_id
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Company $company
     * @method BelongsTo|_CompanyQueryBuilder company()
     * @property Consignee $consignee
     * @method HasOne|_ConsigneeQueryBuilder consignee()
     * @property LoadingPoint $loadingPoint
     * @method HasOne|_LoadingPointQueryBuilder loadingPoint()
     * @property Material $material
     * @method HasOne|_MaterialQueryBuilder material()
     * @property _TripCollection|Trip[] $trips
     * @method HasMany|_TripQueryBuilder trips()
     * @property UnloadingPoint $unloadingPoint
     * @method HasOne|_UnloadingPointQueryBuilder unloadingPoint()
     * @method _ProjectQueryBuilder newModelQuery()
     * @method _ProjectQueryBuilder newQuery()
     * @method static _ProjectQueryBuilder query()
     * @method static _ProjectCollection|Project[] all()
     * @mixin _ProjectQueryBuilder
     */
    class Project extends Model {}
}

namespace App\Domain\Trip\Models {

    use App\Domain\Agent\Models\Agent;
    use App\Domain\Consignee\Models\Consignee;
    use App\Domain\Document\Models\Document;
    use App\Domain\Fleet\Models\FleetVehicle;
    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use App\Domain\Party\Models\Party;
    use App\Domain\Payment\Models\Payment;
    use App\Domain\Project\Models\Project;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentCollection;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetVehicleQueryBuilder;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripTypeCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripTypeQueryBuilder;
    use LaravelIdea\Helper\Database\Factories\_TripFactory;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    /**
     * @property int $id
     * @property Carbon $date
     * @property int $trip_type
     * @property int $project_id
     * @property int $company_id
     * @property string|null $challan_serial
     * @property string $tp_number
     * @property int $tp_serial
     * @property float|null $gross_weight
     * @property float|null $tare_weight
     * @property float $net_weight
     * @property float $rate
     * @property float|null $hsd
     * @property float|null $cash
     * @property string|null $market_vehicle_number
     * @property string|null $party_name
     * @property string|null $party_number
     * @property string|null $driver_name
     * @property string|null $driver_phone_num
     * @property string|null $driver_license_num
     * @property float|null $premium_rate
     * @property float|null $total_amount
     * @property float|null $cash_adv_pct
     * @property float|null $cash_adv_fees
     * @property bool|null $tds_sbm_bool
     * @property float|null $tds
     * @property bool|null $tds_paid
     * @property bool|null $tds_filed
     * @property int|null $tax_category_id
     * @property int|null $two_pay
     * @property float|null $final_payable
     * @property int|null $payment_id
     * @property float|null $profit
     * @property int|null $market_vehicle_id
     * @property int|null $fleet_vehicle_id
     * @property int|null $fleet_driver_id
     * @property int|null $party_id
     * @property int|null $agent_id
     * @property bool $loading_done
     * @property bool $payment_done
     * @property bool $completed
     * @property int $invoice_id
     * @property int|null $created_by
     * @property int|null $finished_by
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Agent $agent
     * @method HasOne|_AgentQueryBuilder agent()
     * @property Consignee $consignee
     * @method HasOne|_ConsigneeQueryBuilder consignee()
     * @property _DocumentCollection|Document[] $documents
     * @method MorphToMany|_DocumentQueryBuilder documents()
     * @property FleetVehicle $fleetVehicle
     * @method HasOne|_FleetVehicleQueryBuilder fleetVehicle()
     * @property MarketVehicle $marketVehicle
     * @method HasOne|_MarketVehicleQueryBuilder marketVehicle()
     * @property _MediaCollection|Media[] $media
     * @method MorphToMany|_MediaQueryBuilder media()
     * @property Party $party
     * @method BelongsTo|_PartyQueryBuilder party()
     * @property Payment $payment
     * @method HasOne|_PaymentQueryBuilder payment()
     * @property Project $project
     * @method HasOne|_ProjectQueryBuilder project()
     * @property TripType $trip_type
     * @method BelongsTo|_TripTypeQueryBuilder trip_type()
     * @method _TripQueryBuilder newModelQuery()
     * @method _TripQueryBuilder newQuery()
     * @method static _TripQueryBuilder query()
     * @method static _TripCollection|Trip[] all()
     * @mixin _TripQueryBuilder
     * @method static _TripFactory factory(...$parameters)
     */
    class Trip extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _TripTypeQueryBuilder newModelQuery()
     * @method _TripTypeQueryBuilder newQuery()
     * @method static _TripTypeQueryBuilder query()
     * @method static _TripTypeCollection|TripType[] all()
     * @mixin _TripTypeQueryBuilder
     */
    class TripType extends Model {}
}

namespace App\Domain\UnloadingPoint\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\UnloadingPoint\Models\_UnloadingPointCollection;
    use LaravelIdea\Helper\App\Domain\UnloadingPoint\Models\_UnloadingPointQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property string $short_code
     * @property int $company_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _UnloadingPointQueryBuilder newModelQuery()
     * @method _UnloadingPointQueryBuilder newQuery()
     * @method static _UnloadingPointQueryBuilder query()
     * @method static _UnloadingPointCollection|UnloadingPoint[] all()
     * @mixin _UnloadingPointQueryBuilder
     */
    class UnloadingPoint extends Model {}
}

namespace App\Domain\VehicleRC\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\VehicleRC\Models\_VehicleRCCollection;
    use LaravelIdea\Helper\App\Domain\VehicleRC\Models\_VehicleRCQueryBuilder;

    /**
     * @property int $id
     * @property string $license_plate
     * @property string|null $rto
     * @property string|null $model
     * @property string|null $class
     * @property string|null $color
     * @property string|null $state
     * @property string|null $weight
     * @property string|null $isValid
     * @property string|null $financer
     * @property string|null $puc_upto
     * @property string|null $rto_code
     * @property string|null $fuel_type
     * @property string|null $fuel_norm
     * @property string|null $owner_name
     * @property string|null $mvtax_upto
     * @property string|null $vehicle_age
     * @property string|null $price_range
     * @property string|null $noc_details
     * @property string|null $vehicle_type
     * @property string|null $fitness_upto
     * @property string|null $roadtax_upto
     * @property string|null $engine_number
     * @property string|null $ownership_type
     * @property string|null $chassis_number
     * @property string|null $engine_capacity
     * @property string|null $registration_date
     * @property string|null $registering_authority
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _VehicleRCQueryBuilder newModelQuery()
     * @method _VehicleRCQueryBuilder newQuery()
     * @method static _VehicleRCQueryBuilder query()
     * @method static _VehicleRCCollection|VehicleRC[] all()
     * @mixin _VehicleRCQueryBuilder
     */
    class VehicleRC extends Model {}
}

namespace App\Models {

    use App\Domain\Company\Models\Company;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Models\_MembershipCollection;
    use LaravelIdea\Helper\App\Models\_MembershipQueryBuilder;
    use LaravelIdea\Helper\App\Models\_PermissionCollection;
    use LaravelIdea\Helper\App\Models\_PermissionQueryBuilder;
    use LaravelIdea\Helper\App\Models\_RoleCollection;
    use LaravelIdea\Helper\App\Models\_RoleQueryBuilder;
    use LaravelIdea\Helper\App\Models\_TeamCollection;
    use LaravelIdea\Helper\App\Models\_TeamInvitationCollection;
    use LaravelIdea\Helper\App\Models\_TeamInvitationQueryBuilder;
    use LaravelIdea\Helper\App\Models\_TeamQueryBuilder;
    use LaravelIdea\Helper\App\Models\_UserCollection;
    use LaravelIdea\Helper\App\Models\_UserQueryBuilder;
    use LaravelIdea\Helper\Database\Factories\_TeamFactory;
    use LaravelIdea\Helper\Database\Factories\_UserFactory;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @method _MembershipQueryBuilder newModelQuery()
     * @method _MembershipQueryBuilder newQuery()
     * @method static _MembershipQueryBuilder query()
     * @method static _MembershipCollection|Membership[] all()
     * @mixin _MembershipQueryBuilder
     */
    class Membership extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $display_name
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _RoleCollection|Role[] $roles
     * @method BelongsToMany|_RoleQueryBuilder roles()
     * @method _PermissionQueryBuilder newModelQuery()
     * @method _PermissionQueryBuilder newQuery()
     * @method static _PermissionQueryBuilder query()
     * @method static _PermissionCollection|Permission[] all()
     * @mixin _PermissionQueryBuilder
     */
    class Permission extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $display_name
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _PermissionCollection|Permission[] $permissions
     * @method BelongsToMany|_PermissionQueryBuilder permissions()
     * @method _RoleQueryBuilder newModelQuery()
     * @method _RoleQueryBuilder newQuery()
     * @method static _RoleQueryBuilder query()
     * @method static _RoleCollection|Role[] all()
     * @mixin _RoleQueryBuilder
     */
    class Role extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $display_name
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _TeamQueryBuilder newModelQuery()
     * @method _TeamQueryBuilder newQuery()
     * @method static _TeamQueryBuilder query()
     * @method static _TeamCollection|Team[] all()
     * @mixin _TeamQueryBuilder
     * @method static _TeamFactory factory(...$parameters)
     */
    class Team extends Model {}

    /**
     * @method _TeamInvitationQueryBuilder newModelQuery()
     * @method _TeamInvitationQueryBuilder newQuery()
     * @method static _TeamInvitationQueryBuilder query()
     * @method static _TeamInvitationCollection|TeamInvitation[] all()
     * @mixin _TeamInvitationQueryBuilder
     */
    class TeamInvitation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int|null $phone_number
     * @property string $password
     * @property string|null $profile_photo_path
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property int|null $company_id
     * @property-read string $profile_photo_url
     * @property Company $company
     * @method HasOne|_CompanyQueryBuilder company()
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @property _PermissionCollection|Permission[] $permissions
     * @method MorphToMany|_PermissionQueryBuilder permissions()
     * @property _RoleCollection|Role[] $roles
     * @method MorphToMany|_RoleQueryBuilder roles()
     * @method _UserQueryBuilder newModelQuery()
     * @method _UserQueryBuilder newQuery()
     * @method static _UserQueryBuilder query()
     * @method static _UserCollection|User[] all()
     * @method _UserQueryBuilder orWherePermissionIs(string $permission = '')
     * @method _UserQueryBuilder orWhereRoleIs(string $role = '', $team = null)
     * @method _UserQueryBuilder whereDoesntHavePermission()
     * @method _UserQueryBuilder whereDoesntHaveRole()
     * @method _UserQueryBuilder wherePermissionIs(string $permission = '', $boolean = 'and')
     * @method _UserQueryBuilder whereRoleIs(string $role = '', $team = null, string $boolean = 'and')
     * @mixin _UserQueryBuilder
     * @method static _UserFactory factory(...$parameters)
     */
    class User extends Model {}
}

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method _DatabaseNotificationQueryBuilder newModelQuery()
     * @method _DatabaseNotificationQueryBuilder newQuery()
     * @method static _DatabaseNotificationQueryBuilder query()
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] all()
     * @method _DatabaseNotificationQueryBuilder read()
     * @method _DatabaseNotificationQueryBuilder unread()
     * @mixin _DatabaseNotificationQueryBuilder
     */
    class DatabaseNotification extends Model {}
}

namespace Laratrust\Models {

    use App\Models\Permission;
    use App\Models\Role;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use LaravelIdea\Helper\App\Models\_PermissionCollection;
    use LaravelIdea\Helper\App\Models\_PermissionQueryBuilder;
    use LaravelIdea\Helper\App\Models\_RoleCollection;
    use LaravelIdea\Helper\App\Models\_RoleQueryBuilder;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustPermissionCollection;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustPermissionQueryBuilder;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustRoleCollection;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustRoleQueryBuilder;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustTeamCollection;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustTeamQueryBuilder;

    /**
     * @property _RoleCollection|Role[] $roles
     * @method BelongsToMany|_RoleQueryBuilder roles()
     * @method _LaratrustPermissionQueryBuilder newModelQuery()
     * @method _LaratrustPermissionQueryBuilder newQuery()
     * @method static _LaratrustPermissionQueryBuilder query()
     * @method static _LaratrustPermissionCollection|LaratrustPermission[] all()
     * @mixin _LaratrustPermissionQueryBuilder
     */
    class LaratrustPermission extends Model {}

    /**
     * @property _PermissionCollection|Permission[] $permissions
     * @method BelongsToMany|_PermissionQueryBuilder permissions()
     * @method _LaratrustRoleQueryBuilder newModelQuery()
     * @method _LaratrustRoleQueryBuilder newQuery()
     * @method static _LaratrustRoleQueryBuilder query()
     * @method static _LaratrustRoleCollection|LaratrustRole[] all()
     * @mixin _LaratrustRoleQueryBuilder
     */
    class LaratrustRole extends Model {}

    /**
     * @method _LaratrustTeamQueryBuilder newModelQuery()
     * @method _LaratrustTeamQueryBuilder newQuery()
     * @method static _LaratrustTeamQueryBuilder query()
     * @method static _LaratrustTeamCollection|LaratrustTeam[] all()
     * @mixin _LaratrustTeamQueryBuilder
     */
    class LaratrustTeam extends Model {}
}

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Support\Collection;

    /**
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method int insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(string $column)
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(string $table, string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::raw
     * @method Expression raw($value)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(Builder|\Illuminate\Database\Query\Builder|string $query, string $as, string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(string $table, null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::average
     * @method mixed average(string $column)
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method int sum(string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkMap
     * @method $this chunkMap(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::min
     * @method mixed min(string $column)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method $this hasMacro(string $name)
     * @see \Illuminate\Database\Concerns\BuildsQueries::unless
     * @method $this unless($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::where
     * @method $this where(array|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::latest
     * @method $this latest(string $column = 'created_at')
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method int insertUsing(array $columns, \Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(...$groups)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(Builder|\Illuminate\Database\Query\Builder|string $query, string $as, string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::oldest
     * @method $this oldest(string $column = 'created_at')
     * @see \Illuminate\Database\Query\Builder::pluck
     * @method $this pluck(string $column, null|string $key = null)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::dd
     * @method void dd()
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereBetweenColumns
     * @method $this orWhereBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::simplePaginate
     * @method $this simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method bool doesntExist()
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method int count(string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns
     * @method $this orWhereNotBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Database\Query\Builder::cursor
     * @method $this cursor()
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::whereBetweenColumns
     * @method $this whereBetweenColumns(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::update
     * @method $this update(array $values)
     * @see \Illuminate\Database\Query\Builder::cleanBindings
     * @method $this cleanBindings(array $bindings)
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method mixed avg(string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Concerns\BuildsQueries::sole
     * @method $this sole(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::clone
     * @method $this clone()
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(string $column, array $values)
     * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
     * @method $this explain()
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::paginate
     * @method $this paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array $column)
     * @see \Illuminate\Database\Concerns\BuildsQueries::when
     * @method $this when($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(string $table, string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(string $column, null|string $operator = null, null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::upsert
     * @method $this upsert(array $values, array|string $uniqueBy, array|null $update = null)
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Query\Builder::increment
     * @method $this increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::get
     * @method $this get(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::max
     * @method mixed max(string $column)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::decrement
     * @method $this decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method bool exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method ConnectionInterface getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(Builder|\Illuminate\Database\Query\Builder|string $query, string $as, string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::find
     * @method $this find(int|string $id, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::crossJoinSub
     * @method $this crossJoinSub(\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::whereNotBetweenColumns
     * @method $this whereNotBetweenColumns(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method int insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(Expression|string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method bool insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::delete
     * @method $this delete($id = null)
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dump
     * @method void dump()
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::value
     * @method $this value(string $column)
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method string toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(string $column, null|string $operator = null, null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method array getBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     * @see \Illuminate\Database\Query\Builder::orWhere
     * @method $this orWhere(array|string $column, $operator = null, $value = null)
     */
    class _BaseBuilder extends Builder {}

    class _BaseCollection extends Collection {}
}

namespace LaravelIdea\Helper\App\Domain\Agent\Models {

    use App\Domain\Agent\Models\Agent;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _AgentCollectionProxy $average
     * @property-read _AgentCollectionProxy $avg
     * @property-read _AgentCollectionProxy $contains
     * @property-read _AgentCollectionProxy $each
     * @property-read _AgentCollectionProxy $every
     * @property-read _AgentCollectionProxy $filter
     * @property-read _AgentCollectionProxy $first
     * @property-read _AgentCollectionProxy $flatMap
     * @property-read _AgentCollectionProxy $groupBy
     * @property-read _AgentCollectionProxy $keyBy
     * @property-read _AgentCollectionProxy $map
     * @property-read _AgentCollectionProxy $max
     * @property-read _AgentCollectionProxy $min
     * @property-read _AgentCollectionProxy $partition
     * @property-read _AgentCollectionProxy $reject
     * @property-read _AgentCollectionProxy $some
     * @property-read _AgentCollectionProxy $sortBy
     * @property-read _AgentCollectionProxy $sortByDesc
     * @property-read _AgentCollectionProxy $sum
     * @property-read _AgentCollectionProxy $unique
     */
    class _AgentCollection extends _BaseCollection {}

    /**
     * @property _AgentCollection|mixed $id
     * @property _AgentCollection|mixed $name
     * @property _AgentCollection|mixed $company_id
     * @property _AgentCollection|mixed $created_at
     * @property _AgentCollection|mixed $updated_at
     * @property _AgentCollection|mixed $phoneNumber
     * @see \App\Domain\Agent\Models\Agent::setName
     * @method _AgentCollection setName(string $name)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _AgentCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _AgentCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _AgentCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _AgentCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _AgentCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _AgentCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _AgentCollection delete()
     */
    class _AgentCollectionProxy {}

    /**
     * @method _AgentQueryBuilder whereId($value)
     * @method _AgentQueryBuilder whereName($value)
     * @method _AgentQueryBuilder whereCompanyId($value)
     * @method _AgentQueryBuilder whereCreatedAt($value)
     * @method _AgentQueryBuilder whereUpdatedAt($value)
     * @method Agent baseSole(array|string $columns = ['*'])
     * @method Agent create(array $attributes = [])
     * @method _AgentCollection|Agent[] cursor()
     * @method Agent|null find($id, array $columns = ['*'])
     * @method _AgentCollection|Agent[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Agent findOrFail($id, array $columns = ['*'])
     * @method _AgentCollection|Agent[] findOrNew($id, array $columns = ['*'])
     * @method Agent first(array|string $columns = ['*'])
     * @method Agent firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Agent firstOrCreate(array $attributes = [], array $values = [])
     * @method Agent firstOrFail(array $columns = ['*'])
     * @method Agent firstOrNew(array $attributes = [], array $values = [])
     * @method Agent firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Agent forceCreate(array $attributes)
     * @method _AgentCollection|Agent[] fromQuery(string $query, array $bindings = [])
     * @method _AgentCollection|Agent[] get(array|string $columns = ['*'])
     * @method Agent getModel()
     * @method Agent[] getModels(array|string $columns = ['*'])
     * @method _AgentCollection|Agent[] hydrate(array $items)
     * @method Agent make(array $attributes = [])
     * @method Agent newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Agent[]|_AgentCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Agent[]|_AgentCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Agent sole(array|string $columns = ['*'])
     * @method Agent updateOrCreate(array $attributes, array $values = [])
     */
    class _AgentQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Company\Models {

    use App\Domain\Company\Models\Company;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _CompanyCollectionProxy $average
     * @property-read _CompanyCollectionProxy $avg
     * @property-read _CompanyCollectionProxy $contains
     * @property-read _CompanyCollectionProxy $each
     * @property-read _CompanyCollectionProxy $every
     * @property-read _CompanyCollectionProxy $filter
     * @property-read _CompanyCollectionProxy $first
     * @property-read _CompanyCollectionProxy $flatMap
     * @property-read _CompanyCollectionProxy $groupBy
     * @property-read _CompanyCollectionProxy $keyBy
     * @property-read _CompanyCollectionProxy $map
     * @property-read _CompanyCollectionProxy $max
     * @property-read _CompanyCollectionProxy $min
     * @property-read _CompanyCollectionProxy $partition
     * @property-read _CompanyCollectionProxy $reject
     * @property-read _CompanyCollectionProxy $some
     * @property-read _CompanyCollectionProxy $sortBy
     * @property-read _CompanyCollectionProxy $sortByDesc
     * @property-read _CompanyCollectionProxy $sum
     * @property-read _CompanyCollectionProxy $unique
     */
    class _CompanyCollection extends _BaseCollection {}

    /**
     * @property _CompanyCollection|mixed $id
     * @property _CompanyCollection|mixed $name
     * @property _CompanyCollection|mixed $short_code
     * @property _CompanyCollection|mixed $gstn
     * @property _CompanyCollection|mixed $pan
     * @property _CompanyCollection|mixed $use_razorpay
     * @property _CompanyCollection|mixed $razorpay_key_id
     * @property _CompanyCollection|mixed $razorpay_key_secret
     * @property _CompanyCollection|mixed $razorpay_account_number
     * @property _CompanyCollection|mixed $user_id
     * @property _CompanyCollection|mixed $created_at
     * @property _CompanyCollection|mixed $updated_at
     * @property _CompanyCollection|mixed $address
     * @property _CompanyCollection|mixed $manager
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _CompanyCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _CompanyCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _CompanyCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _CompanyCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _CompanyCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _CompanyCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _CompanyCollection delete()
     */
    class _CompanyCollectionProxy {}

    /**
     * @method _CompanyQueryBuilder whereId($value)
     * @method _CompanyQueryBuilder whereName($value)
     * @method _CompanyQueryBuilder whereShortName($value)
     * @method _CompanyQueryBuilder whereGstn($value)
     * @method _CompanyQueryBuilder wherePan($value)
     * @method _CompanyQueryBuilder whereUseRazorpay($value)
     * @method _CompanyQueryBuilder whereRazorpayKeyId($value)
     * @method _CompanyQueryBuilder whereRazorpayKeySecret($value)
     * @method _CompanyQueryBuilder whereRazorpayAccountNumber($value)
     * @method _CompanyQueryBuilder whereUserId($value)
     * @method _CompanyQueryBuilder whereCreatedAt($value)
     * @method _CompanyQueryBuilder whereUpdatedAt($value)
     * @method Company baseSole(array|string $columns = ['*'])
     * @method Company create(array $attributes = [])
     * @method _CompanyCollection|Company[] cursor()
     * @method Company|null find($id, array $columns = ['*'])
     * @method _CompanyCollection|Company[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Company findOrFail($id, array $columns = ['*'])
     * @method _CompanyCollection|Company[] findOrNew($id, array $columns = ['*'])
     * @method Company first(array|string $columns = ['*'])
     * @method Company firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Company firstOrCreate(array $attributes = [], array $values = [])
     * @method Company firstOrFail(array $columns = ['*'])
     * @method Company firstOrNew(array $attributes = [], array $values = [])
     * @method Company firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Company forceCreate(array $attributes)
     * @method _CompanyCollection|Company[] fromQuery(string $query, array $bindings = [])
     * @method _CompanyCollection|Company[] get(array|string $columns = ['*'])
     * @method Company getModel()
     * @method Company[] getModels(array|string $columns = ['*'])
     * @method _CompanyCollection|Company[] hydrate(array $items)
     * @method Company make(array $attributes = [])
     * @method Company newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Company[]|_CompanyCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Company[]|_CompanyCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Company sole(array|string $columns = ['*'])
     * @method Company updateOrCreate(array $attributes, array $values = [])
     */
    class _CompanyQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Consignee\Models {

    use App\Domain\Consignee\Models\Consignee;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _ConsigneeCollectionProxy $average
     * @property-read _ConsigneeCollectionProxy $avg
     * @property-read _ConsigneeCollectionProxy $contains
     * @property-read _ConsigneeCollectionProxy $each
     * @property-read _ConsigneeCollectionProxy $every
     * @property-read _ConsigneeCollectionProxy $filter
     * @property-read _ConsigneeCollectionProxy $first
     * @property-read _ConsigneeCollectionProxy $flatMap
     * @property-read _ConsigneeCollectionProxy $groupBy
     * @property-read _ConsigneeCollectionProxy $keyBy
     * @property-read _ConsigneeCollectionProxy $map
     * @property-read _ConsigneeCollectionProxy $max
     * @property-read _ConsigneeCollectionProxy $min
     * @property-read _ConsigneeCollectionProxy $partition
     * @property-read _ConsigneeCollectionProxy $reject
     * @property-read _ConsigneeCollectionProxy $some
     * @property-read _ConsigneeCollectionProxy $sortBy
     * @property-read _ConsigneeCollectionProxy $sortByDesc
     * @property-read _ConsigneeCollectionProxy $sum
     * @property-read _ConsigneeCollectionProxy $unique
     */
    class _ConsigneeCollection extends _BaseCollection {}

    /**
     * @property _ConsigneeCollection|mixed $id
     * @property _ConsigneeCollection|mixed $name
     * @property _ConsigneeCollection|mixed $short_code
     * @property _ConsigneeCollection|mixed $gstn
     * @property _ConsigneeCollection|mixed $pan
     * @property _ConsigneeCollection|mixed $company_id
     * @property _ConsigneeCollection|mixed $created_at
     * @property _ConsigneeCollection|mixed $updated_at
     * @property _ConsigneeCollection|mixed $address
     * @see \App\Domain\Consignee\Models\Consignee::totalProjects
     * @method _ConsigneeCollection totalProjects()
     * @see \App\Domain\Consignee\Models\Consignee::runningProjects
     * @method _ConsigneeCollection runningProjects()
     * @see \App\Domain\Consignee\Models\Consignee::businessDone
     * @method _ConsigneeCollection businessDone()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ConsigneeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ConsigneeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ConsigneeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ConsigneeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ConsigneeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ConsigneeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ConsigneeCollection delete()
     */
    class _ConsigneeCollectionProxy {}

    /**
     * @method _ConsigneeQueryBuilder whereId($value)
     * @method _ConsigneeQueryBuilder whereName($value)
     * @method _ConsigneeQueryBuilder whereShortCode($value)
     * @method _ConsigneeQueryBuilder whereGstn($value)
     * @method _ConsigneeQueryBuilder wherePan($value)
     * @method _ConsigneeQueryBuilder whereCompanyId($value)
     * @method _ConsigneeQueryBuilder whereCreatedAt($value)
     * @method _ConsigneeQueryBuilder whereUpdatedAt($value)
     * @method Consignee baseSole(array|string $columns = ['*'])
     * @method Consignee create(array $attributes = [])
     * @method _ConsigneeCollection|Consignee[] cursor()
     * @method Consignee|null find($id, array $columns = ['*'])
     * @method _ConsigneeCollection|Consignee[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Consignee findOrFail($id, array $columns = ['*'])
     * @method _ConsigneeCollection|Consignee[] findOrNew($id, array $columns = ['*'])
     * @method Consignee first(array|string $columns = ['*'])
     * @method Consignee firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Consignee firstOrCreate(array $attributes = [], array $values = [])
     * @method Consignee firstOrFail(array $columns = ['*'])
     * @method Consignee firstOrNew(array $attributes = [], array $values = [])
     * @method Consignee firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Consignee forceCreate(array $attributes)
     * @method _ConsigneeCollection|Consignee[] fromQuery(string $query, array $bindings = [])
     * @method _ConsigneeCollection|Consignee[] get(array|string $columns = ['*'])
     * @method Consignee getModel()
     * @method Consignee[] getModels(array|string $columns = ['*'])
     * @method _ConsigneeCollection|Consignee[] hydrate(array $items)
     * @method Consignee make(array $attributes = [])
     * @method Consignee newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Consignee[]|_ConsigneeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Consignee[]|_ConsigneeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Consignee sole(array|string $columns = ['*'])
     * @method Consignee updateOrCreate(array $attributes, array $values = [])
     */
    class _ConsigneeQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Employee\Models {

    use App\Domain\Employee\Models\Employee;
    use App\Domain\Employee\Models\EmployeeDesignationClassification;
    use App\Domain\Employee\Models\EmployeePaymentDetails;
    use App\Domain\Employee\Models\EmployeesAttendance;
    use App\Domain\Employee\Models\EmployeesDesignation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _EmployeeCollectionProxy $average
     * @property-read _EmployeeCollectionProxy $avg
     * @property-read _EmployeeCollectionProxy $contains
     * @property-read _EmployeeCollectionProxy $each
     * @property-read _EmployeeCollectionProxy $every
     * @property-read _EmployeeCollectionProxy $filter
     * @property-read _EmployeeCollectionProxy $first
     * @property-read _EmployeeCollectionProxy $flatMap
     * @property-read _EmployeeCollectionProxy $groupBy
     * @property-read _EmployeeCollectionProxy $keyBy
     * @property-read _EmployeeCollectionProxy $map
     * @property-read _EmployeeCollectionProxy $max
     * @property-read _EmployeeCollectionProxy $min
     * @property-read _EmployeeCollectionProxy $partition
     * @property-read _EmployeeCollectionProxy $reject
     * @property-read _EmployeeCollectionProxy $some
     * @property-read _EmployeeCollectionProxy $sortBy
     * @property-read _EmployeeCollectionProxy $sortByDesc
     * @property-read _EmployeeCollectionProxy $sum
     * @property-read _EmployeeCollectionProxy $unique
     */
    class _EmployeeCollection extends _BaseCollection {}

    /**
     * @property _EmployeeCollection|mixed $id
     * @property _EmployeeCollection|mixed $name
     * @property _EmployeeCollection|mixed $salary
     * @property _EmployeeCollection|mixed $email
     * @property _EmployeeCollection|mixed $office_id
     * @property _EmployeeCollection|mixed $company_id
     * @property _EmployeeCollection|mixed $employee_designation_id
     * @property _EmployeeCollection|mixed $is_currently_hired
     * @property _EmployeeCollection|mixed $created_at
     * @property _EmployeeCollection|mixed $updated_at
     * @property _EmployeeCollection|mixed $bankAccount
     * @property _EmployeeCollection|mixed $designation
     * @property _EmployeeCollection|mixed $office
     * @property _EmployeeCollection|mixed $phoneNumber
     * @see \App\Domain\Employee\Models\Employee::getSalaryAttribute
     * @method _EmployeeCollection getSalaryAttribute($salary)
     * @see \App\Domain\Employee\Models\Employee::profile_photo_url
     * @method _EmployeeCollection profile_photo_url()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EmployeeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EmployeeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EmployeeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EmployeeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EmployeeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EmployeeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EmployeeCollection delete()
     */
    class _EmployeeCollectionProxy {}

    /**
     * @property-read _EmployeeDesignationClassificationCollectionProxy $average
     * @property-read _EmployeeDesignationClassificationCollectionProxy $avg
     * @property-read _EmployeeDesignationClassificationCollectionProxy $contains
     * @property-read _EmployeeDesignationClassificationCollectionProxy $each
     * @property-read _EmployeeDesignationClassificationCollectionProxy $every
     * @property-read _EmployeeDesignationClassificationCollectionProxy $filter
     * @property-read _EmployeeDesignationClassificationCollectionProxy $first
     * @property-read _EmployeeDesignationClassificationCollectionProxy $flatMap
     * @property-read _EmployeeDesignationClassificationCollectionProxy $groupBy
     * @property-read _EmployeeDesignationClassificationCollectionProxy $keyBy
     * @property-read _EmployeeDesignationClassificationCollectionProxy $map
     * @property-read _EmployeeDesignationClassificationCollectionProxy $max
     * @property-read _EmployeeDesignationClassificationCollectionProxy $min
     * @property-read _EmployeeDesignationClassificationCollectionProxy $partition
     * @property-read _EmployeeDesignationClassificationCollectionProxy $reject
     * @property-read _EmployeeDesignationClassificationCollectionProxy $some
     * @property-read _EmployeeDesignationClassificationCollectionProxy $sortBy
     * @property-read _EmployeeDesignationClassificationCollectionProxy $sortByDesc
     * @property-read _EmployeeDesignationClassificationCollectionProxy $sum
     * @property-read _EmployeeDesignationClassificationCollectionProxy $unique
     */
    class _EmployeeDesignationClassificationCollection extends _BaseCollection {}

    /**
     * @property _EmployeeDesignationClassificationCollection|mixed $id
     * @property _EmployeeDesignationClassificationCollection|mixed $name
     * @property _EmployeeDesignationClassificationCollection|mixed $created_at
     * @property _EmployeeDesignationClassificationCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EmployeeDesignationClassificationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EmployeeDesignationClassificationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EmployeeDesignationClassificationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EmployeeDesignationClassificationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EmployeeDesignationClassificationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EmployeeDesignationClassificationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EmployeeDesignationClassificationCollection delete()
     */
    class _EmployeeDesignationClassificationCollectionProxy {}

    /**
     * @method _EmployeeDesignationClassificationQueryBuilder whereId($value)
     * @method _EmployeeDesignationClassificationQueryBuilder whereName($value)
     * @method _EmployeeDesignationClassificationQueryBuilder whereCreatedAt($value)
     * @method _EmployeeDesignationClassificationQueryBuilder whereUpdatedAt($value)
     * @method EmployeeDesignationClassification baseSole(array|string $columns = ['*'])
     * @method EmployeeDesignationClassification create(array $attributes = [])
     * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] cursor()
     * @method EmployeeDesignationClassification|null find($id, array $columns = ['*'])
     * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method EmployeeDesignationClassification findOrFail($id, array $columns = ['*'])
     * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] findOrNew($id, array $columns = ['*'])
     * @method EmployeeDesignationClassification first(array|string $columns = ['*'])
     * @method EmployeeDesignationClassification firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method EmployeeDesignationClassification firstOrCreate(array $attributes = [], array $values = [])
     * @method EmployeeDesignationClassification firstOrFail(array $columns = ['*'])
     * @method EmployeeDesignationClassification firstOrNew(array $attributes = [], array $values = [])
     * @method EmployeeDesignationClassification firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EmployeeDesignationClassification forceCreate(array $attributes)
     * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] fromQuery(string $query, array $bindings = [])
     * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] get(array|string $columns = ['*'])
     * @method EmployeeDesignationClassification getModel()
     * @method EmployeeDesignationClassification[] getModels(array|string $columns = ['*'])
     * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] hydrate(array $items)
     * @method EmployeeDesignationClassification make(array $attributes = [])
     * @method EmployeeDesignationClassification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EmployeeDesignationClassification[]|_EmployeeDesignationClassificationCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|EmployeeDesignationClassification[]|_EmployeeDesignationClassificationCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EmployeeDesignationClassification sole(array|string $columns = ['*'])
     * @method EmployeeDesignationClassification updateOrCreate(array $attributes, array $values = [])
     */
    class _EmployeeDesignationClassificationQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _EmployeePaymentDetailsCollectionProxy $average
     * @property-read _EmployeePaymentDetailsCollectionProxy $avg
     * @property-read _EmployeePaymentDetailsCollectionProxy $contains
     * @property-read _EmployeePaymentDetailsCollectionProxy $each
     * @property-read _EmployeePaymentDetailsCollectionProxy $every
     * @property-read _EmployeePaymentDetailsCollectionProxy $filter
     * @property-read _EmployeePaymentDetailsCollectionProxy $first
     * @property-read _EmployeePaymentDetailsCollectionProxy $flatMap
     * @property-read _EmployeePaymentDetailsCollectionProxy $groupBy
     * @property-read _EmployeePaymentDetailsCollectionProxy $keyBy
     * @property-read _EmployeePaymentDetailsCollectionProxy $map
     * @property-read _EmployeePaymentDetailsCollectionProxy $max
     * @property-read _EmployeePaymentDetailsCollectionProxy $min
     * @property-read _EmployeePaymentDetailsCollectionProxy $partition
     * @property-read _EmployeePaymentDetailsCollectionProxy $reject
     * @property-read _EmployeePaymentDetailsCollectionProxy $some
     * @property-read _EmployeePaymentDetailsCollectionProxy $sortBy
     * @property-read _EmployeePaymentDetailsCollectionProxy $sortByDesc
     * @property-read _EmployeePaymentDetailsCollectionProxy $sum
     * @property-read _EmployeePaymentDetailsCollectionProxy $unique
     */
    class _EmployeePaymentDetailsCollection extends _BaseCollection {}

    /**
     * @property _EmployeePaymentDetailsCollection|mixed $employee
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EmployeePaymentDetailsCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EmployeePaymentDetailsCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EmployeePaymentDetailsCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EmployeePaymentDetailsCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EmployeePaymentDetailsCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EmployeePaymentDetailsCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EmployeePaymentDetailsCollection delete()
     */
    class _EmployeePaymentDetailsCollectionProxy {}

    /**
     * @method EmployeePaymentDetails baseSole(array|string $columns = ['*'])
     * @method EmployeePaymentDetails create(array $attributes = [])
     * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] cursor()
     * @method EmployeePaymentDetails|null find($id, array $columns = ['*'])
     * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method EmployeePaymentDetails findOrFail($id, array $columns = ['*'])
     * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] findOrNew($id, array $columns = ['*'])
     * @method EmployeePaymentDetails first(array|string $columns = ['*'])
     * @method EmployeePaymentDetails firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method EmployeePaymentDetails firstOrCreate(array $attributes = [], array $values = [])
     * @method EmployeePaymentDetails firstOrFail(array $columns = ['*'])
     * @method EmployeePaymentDetails firstOrNew(array $attributes = [], array $values = [])
     * @method EmployeePaymentDetails firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EmployeePaymentDetails forceCreate(array $attributes)
     * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] fromQuery(string $query, array $bindings = [])
     * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] get(array|string $columns = ['*'])
     * @method EmployeePaymentDetails getModel()
     * @method EmployeePaymentDetails[] getModels(array|string $columns = ['*'])
     * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] hydrate(array $items)
     * @method EmployeePaymentDetails make(array $attributes = [])
     * @method EmployeePaymentDetails newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EmployeePaymentDetails[]|_EmployeePaymentDetailsCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|EmployeePaymentDetails[]|_EmployeePaymentDetailsCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EmployeePaymentDetails sole(array|string $columns = ['*'])
     * @method EmployeePaymentDetails updateOrCreate(array $attributes, array $values = [])
     */
    class _EmployeePaymentDetailsQueryBuilder extends _BaseBuilder {}

    /**
     * @method _EmployeeQueryBuilder whereId($value)
     * @method _EmployeeQueryBuilder whereName($value)
     * @method _EmployeeQueryBuilder whereSalary($value)
     * @method _EmployeeQueryBuilder whereEmail($value)
     * @method _EmployeeQueryBuilder whereOfficeId($value)
     * @method _EmployeeQueryBuilder whereCompanyId($value)
     * @method _EmployeeQueryBuilder whereEmployeeDesignationId($value)
     * @method _EmployeeQueryBuilder whereIsCurrentlyHired($value)
     * @method _EmployeeQueryBuilder whereCreatedAt($value)
     * @method _EmployeeQueryBuilder whereUpdatedAt($value)
     * @method Employee baseSole(array|string $columns = ['*'])
     * @method Employee create(array $attributes = [])
     * @method _EmployeeCollection|Employee[] cursor()
     * @method Employee|null find($id, array $columns = ['*'])
     * @method _EmployeeCollection|Employee[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Employee findOrFail($id, array $columns = ['*'])
     * @method _EmployeeCollection|Employee[] findOrNew($id, array $columns = ['*'])
     * @method Employee first(array|string $columns = ['*'])
     * @method Employee firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Employee firstOrCreate(array $attributes = [], array $values = [])
     * @method Employee firstOrFail(array $columns = ['*'])
     * @method Employee firstOrNew(array $attributes = [], array $values = [])
     * @method Employee firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Employee forceCreate(array $attributes)
     * @method _EmployeeCollection|Employee[] fromQuery(string $query, array $bindings = [])
     * @method _EmployeeCollection|Employee[] get(array|string $columns = ['*'])
     * @method Employee getModel()
     * @method Employee[] getModels(array|string $columns = ['*'])
     * @method _EmployeeCollection|Employee[] hydrate(array $items)
     * @method Employee make(array $attributes = [])
     * @method Employee newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Employee[]|_EmployeeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Employee[]|_EmployeeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Employee sole(array|string $columns = ['*'])
     * @method Employee updateOrCreate(array $attributes, array $values = [])
     */
    class _EmployeeQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _EmployeesAttendanceCollectionProxy $average
     * @property-read _EmployeesAttendanceCollectionProxy $avg
     * @property-read _EmployeesAttendanceCollectionProxy $contains
     * @property-read _EmployeesAttendanceCollectionProxy $each
     * @property-read _EmployeesAttendanceCollectionProxy $every
     * @property-read _EmployeesAttendanceCollectionProxy $filter
     * @property-read _EmployeesAttendanceCollectionProxy $first
     * @property-read _EmployeesAttendanceCollectionProxy $flatMap
     * @property-read _EmployeesAttendanceCollectionProxy $groupBy
     * @property-read _EmployeesAttendanceCollectionProxy $keyBy
     * @property-read _EmployeesAttendanceCollectionProxy $map
     * @property-read _EmployeesAttendanceCollectionProxy $max
     * @property-read _EmployeesAttendanceCollectionProxy $min
     * @property-read _EmployeesAttendanceCollectionProxy $partition
     * @property-read _EmployeesAttendanceCollectionProxy $reject
     * @property-read _EmployeesAttendanceCollectionProxy $some
     * @property-read _EmployeesAttendanceCollectionProxy $sortBy
     * @property-read _EmployeesAttendanceCollectionProxy $sortByDesc
     * @property-read _EmployeesAttendanceCollectionProxy $sum
     * @property-read _EmployeesAttendanceCollectionProxy $unique
     */
    class _EmployeesAttendanceCollection extends _BaseCollection {}

    /**
     * @property _EmployeesAttendanceCollection|mixed $id
     * @property _EmployeesAttendanceCollection|mixed $date
     * @property _EmployeesAttendanceCollection|mixed $employee_id
     * @property _EmployeesAttendanceCollection|mixed $company_id
     * @property _EmployeesAttendanceCollection|mixed $created_at
     * @property _EmployeesAttendanceCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EmployeesAttendanceCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EmployeesAttendanceCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EmployeesAttendanceCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EmployeesAttendanceCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EmployeesAttendanceCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EmployeesAttendanceCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EmployeesAttendanceCollection delete()
     */
    class _EmployeesAttendanceCollectionProxy {}

    /**
     * @method _EmployeesAttendanceQueryBuilder whereId($value)
     * @method _EmployeesAttendanceQueryBuilder whereDate($value)
     * @method _EmployeesAttendanceQueryBuilder whereEmployeeId($value)
     * @method _EmployeesAttendanceQueryBuilder whereCompanyId($value)
     * @method _EmployeesAttendanceQueryBuilder whereCreatedAt($value)
     * @method _EmployeesAttendanceQueryBuilder whereUpdatedAt($value)
     * @method EmployeesAttendance baseSole(array|string $columns = ['*'])
     * @method EmployeesAttendance create(array $attributes = [])
     * @method _EmployeesAttendanceCollection|EmployeesAttendance[] cursor()
     * @method EmployeesAttendance|null find($id, array $columns = ['*'])
     * @method _EmployeesAttendanceCollection|EmployeesAttendance[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method EmployeesAttendance findOrFail($id, array $columns = ['*'])
     * @method _EmployeesAttendanceCollection|EmployeesAttendance[] findOrNew($id, array $columns = ['*'])
     * @method EmployeesAttendance first(array|string $columns = ['*'])
     * @method EmployeesAttendance firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method EmployeesAttendance firstOrCreate(array $attributes = [], array $values = [])
     * @method EmployeesAttendance firstOrFail(array $columns = ['*'])
     * @method EmployeesAttendance firstOrNew(array $attributes = [], array $values = [])
     * @method EmployeesAttendance firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EmployeesAttendance forceCreate(array $attributes)
     * @method _EmployeesAttendanceCollection|EmployeesAttendance[] fromQuery(string $query, array $bindings = [])
     * @method _EmployeesAttendanceCollection|EmployeesAttendance[] get(array|string $columns = ['*'])
     * @method EmployeesAttendance getModel()
     * @method EmployeesAttendance[] getModels(array|string $columns = ['*'])
     * @method _EmployeesAttendanceCollection|EmployeesAttendance[] hydrate(array $items)
     * @method EmployeesAttendance make(array $attributes = [])
     * @method EmployeesAttendance newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EmployeesAttendance[]|_EmployeesAttendanceCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|EmployeesAttendance[]|_EmployeesAttendanceCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EmployeesAttendance sole(array|string $columns = ['*'])
     * @method EmployeesAttendance updateOrCreate(array $attributes, array $values = [])
     */
    class _EmployeesAttendanceQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _EmployeesDesignationCollectionProxy $average
     * @property-read _EmployeesDesignationCollectionProxy $avg
     * @property-read _EmployeesDesignationCollectionProxy $contains
     * @property-read _EmployeesDesignationCollectionProxy $each
     * @property-read _EmployeesDesignationCollectionProxy $every
     * @property-read _EmployeesDesignationCollectionProxy $filter
     * @property-read _EmployeesDesignationCollectionProxy $first
     * @property-read _EmployeesDesignationCollectionProxy $flatMap
     * @property-read _EmployeesDesignationCollectionProxy $groupBy
     * @property-read _EmployeesDesignationCollectionProxy $keyBy
     * @property-read _EmployeesDesignationCollectionProxy $map
     * @property-read _EmployeesDesignationCollectionProxy $max
     * @property-read _EmployeesDesignationCollectionProxy $min
     * @property-read _EmployeesDesignationCollectionProxy $partition
     * @property-read _EmployeesDesignationCollectionProxy $reject
     * @property-read _EmployeesDesignationCollectionProxy $some
     * @property-read _EmployeesDesignationCollectionProxy $sortBy
     * @property-read _EmployeesDesignationCollectionProxy $sortByDesc
     * @property-read _EmployeesDesignationCollectionProxy $sum
     * @property-read _EmployeesDesignationCollectionProxy $unique
     */
    class _EmployeesDesignationCollection extends _BaseCollection {}

    /**
     * @property _EmployeesDesignationCollection|mixed $id
     * @property _EmployeesDesignationCollection|mixed $name
     * @property _EmployeesDesignationCollection|mixed $emp_desig_class_id
     * @property _EmployeesDesignationCollection|mixed $created_at
     * @property _EmployeesDesignationCollection|mixed $updated_at
     * @property _EmployeesDesignationCollection|mixed $classification
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EmployeesDesignationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EmployeesDesignationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EmployeesDesignationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EmployeesDesignationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EmployeesDesignationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EmployeesDesignationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EmployeesDesignationCollection delete()
     */
    class _EmployeesDesignationCollectionProxy {}

    /**
     * @method _EmployeesDesignationQueryBuilder whereId($value)
     * @method _EmployeesDesignationQueryBuilder whereName($value)
     * @method _EmployeesDesignationQueryBuilder whereEmpDesigClassId($value)
     * @method _EmployeesDesignationQueryBuilder whereCreatedAt($value)
     * @method _EmployeesDesignationQueryBuilder whereUpdatedAt($value)
     * @method EmployeesDesignation baseSole(array|string $columns = ['*'])
     * @method EmployeesDesignation create(array $attributes = [])
     * @method _EmployeesDesignationCollection|EmployeesDesignation[] cursor()
     * @method EmployeesDesignation|null find($id, array $columns = ['*'])
     * @method _EmployeesDesignationCollection|EmployeesDesignation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method EmployeesDesignation findOrFail($id, array $columns = ['*'])
     * @method _EmployeesDesignationCollection|EmployeesDesignation[] findOrNew($id, array $columns = ['*'])
     * @method EmployeesDesignation first(array|string $columns = ['*'])
     * @method EmployeesDesignation firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method EmployeesDesignation firstOrCreate(array $attributes = [], array $values = [])
     * @method EmployeesDesignation firstOrFail(array $columns = ['*'])
     * @method EmployeesDesignation firstOrNew(array $attributes = [], array $values = [])
     * @method EmployeesDesignation firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EmployeesDesignation forceCreate(array $attributes)
     * @method _EmployeesDesignationCollection|EmployeesDesignation[] fromQuery(string $query, array $bindings = [])
     * @method _EmployeesDesignationCollection|EmployeesDesignation[] get(array|string $columns = ['*'])
     * @method EmployeesDesignation getModel()
     * @method EmployeesDesignation[] getModels(array|string $columns = ['*'])
     * @method _EmployeesDesignationCollection|EmployeesDesignation[] hydrate(array $items)
     * @method EmployeesDesignation make(array $attributes = [])
     * @method EmployeesDesignation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EmployeesDesignation[]|_EmployeesDesignationCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|EmployeesDesignation[]|_EmployeesDesignationCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EmployeesDesignation sole(array|string $columns = ['*'])
     * @method EmployeesDesignation updateOrCreate(array $attributes, array $values = [])
     */
    class _EmployeesDesignationQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Expense\Models {

    use App\Domain\Expense\Models\Expense;
    use App\Domain\Expense\Models\ExpenseCategory;
    use App\Domain\Expense\Models\ExpenseCategoryType;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\MediaLibrary\MediaCollections\FileAdder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    /**
     * @property-read _ExpenseCategoryCollectionProxy $average
     * @property-read _ExpenseCategoryCollectionProxy $avg
     * @property-read _ExpenseCategoryCollectionProxy $contains
     * @property-read _ExpenseCategoryCollectionProxy $each
     * @property-read _ExpenseCategoryCollectionProxy $every
     * @property-read _ExpenseCategoryCollectionProxy $filter
     * @property-read _ExpenseCategoryCollectionProxy $first
     * @property-read _ExpenseCategoryCollectionProxy $flatMap
     * @property-read _ExpenseCategoryCollectionProxy $groupBy
     * @property-read _ExpenseCategoryCollectionProxy $keyBy
     * @property-read _ExpenseCategoryCollectionProxy $map
     * @property-read _ExpenseCategoryCollectionProxy $max
     * @property-read _ExpenseCategoryCollectionProxy $min
     * @property-read _ExpenseCategoryCollectionProxy $partition
     * @property-read _ExpenseCategoryCollectionProxy $reject
     * @property-read _ExpenseCategoryCollectionProxy $some
     * @property-read _ExpenseCategoryCollectionProxy $sortBy
     * @property-read _ExpenseCategoryCollectionProxy $sortByDesc
     * @property-read _ExpenseCategoryCollectionProxy $sum
     * @property-read _ExpenseCategoryCollectionProxy $unique
     */
    class _ExpenseCategoryCollection extends _BaseCollection {}

    /**
     * @property _ExpenseCategoryCollection|mixed $id
     * @property _ExpenseCategoryCollection|mixed $name
     * @property _ExpenseCategoryCollection|mixed $expense_category_type_id
     * @property _ExpenseCategoryCollection|mixed $created_at
     * @property _ExpenseCategoryCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ExpenseCategoryCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ExpenseCategoryCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ExpenseCategoryCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ExpenseCategoryCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ExpenseCategoryCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ExpenseCategoryCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ExpenseCategoryCollection delete()
     */
    class _ExpenseCategoryCollectionProxy {}

    /**
     * @method _ExpenseCategoryQueryBuilder whereId($value)
     * @method _ExpenseCategoryQueryBuilder whereName($value)
     * @method _ExpenseCategoryQueryBuilder whereExpenseCategoryTypeId($value)
     * @method _ExpenseCategoryQueryBuilder whereCreatedAt($value)
     * @method _ExpenseCategoryQueryBuilder whereUpdatedAt($value)
     * @method ExpenseCategory baseSole(array|string $columns = ['*'])
     * @method ExpenseCategory create(array $attributes = [])
     * @method _ExpenseCategoryCollection|ExpenseCategory[] cursor()
     * @method ExpenseCategory|null find($id, array $columns = ['*'])
     * @method _ExpenseCategoryCollection|ExpenseCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ExpenseCategory findOrFail($id, array $columns = ['*'])
     * @method _ExpenseCategoryCollection|ExpenseCategory[] findOrNew($id, array $columns = ['*'])
     * @method ExpenseCategory first(array|string $columns = ['*'])
     * @method ExpenseCategory firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method ExpenseCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ExpenseCategory firstOrFail(array $columns = ['*'])
     * @method ExpenseCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ExpenseCategory firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ExpenseCategory forceCreate(array $attributes)
     * @method _ExpenseCategoryCollection|ExpenseCategory[] fromQuery(string $query, array $bindings = [])
     * @method _ExpenseCategoryCollection|ExpenseCategory[] get(array|string $columns = ['*'])
     * @method ExpenseCategory getModel()
     * @method ExpenseCategory[] getModels(array|string $columns = ['*'])
     * @method _ExpenseCategoryCollection|ExpenseCategory[] hydrate(array $items)
     * @method ExpenseCategory make(array $attributes = [])
     * @method ExpenseCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ExpenseCategory[]|_ExpenseCategoryCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ExpenseCategory[]|_ExpenseCategoryCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ExpenseCategory sole(array|string $columns = ['*'])
     * @method ExpenseCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _ExpenseCategoryQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _ExpenseCategoryTypeCollectionProxy $average
     * @property-read _ExpenseCategoryTypeCollectionProxy $avg
     * @property-read _ExpenseCategoryTypeCollectionProxy $contains
     * @property-read _ExpenseCategoryTypeCollectionProxy $each
     * @property-read _ExpenseCategoryTypeCollectionProxy $every
     * @property-read _ExpenseCategoryTypeCollectionProxy $filter
     * @property-read _ExpenseCategoryTypeCollectionProxy $first
     * @property-read _ExpenseCategoryTypeCollectionProxy $flatMap
     * @property-read _ExpenseCategoryTypeCollectionProxy $groupBy
     * @property-read _ExpenseCategoryTypeCollectionProxy $keyBy
     * @property-read _ExpenseCategoryTypeCollectionProxy $map
     * @property-read _ExpenseCategoryTypeCollectionProxy $max
     * @property-read _ExpenseCategoryTypeCollectionProxy $min
     * @property-read _ExpenseCategoryTypeCollectionProxy $partition
     * @property-read _ExpenseCategoryTypeCollectionProxy $reject
     * @property-read _ExpenseCategoryTypeCollectionProxy $some
     * @property-read _ExpenseCategoryTypeCollectionProxy $sortBy
     * @property-read _ExpenseCategoryTypeCollectionProxy $sortByDesc
     * @property-read _ExpenseCategoryTypeCollectionProxy $sum
     * @property-read _ExpenseCategoryTypeCollectionProxy $unique
     */
    class _ExpenseCategoryTypeCollection extends _BaseCollection {}

    /**
     * @property _ExpenseCategoryTypeCollection|mixed $id
     * @property _ExpenseCategoryTypeCollection|mixed $name
     * @property _ExpenseCategoryTypeCollection|mixed $created_at
     * @property _ExpenseCategoryTypeCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ExpenseCategoryTypeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ExpenseCategoryTypeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ExpenseCategoryTypeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ExpenseCategoryTypeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ExpenseCategoryTypeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ExpenseCategoryTypeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ExpenseCategoryTypeCollection delete()
     */
    class _ExpenseCategoryTypeCollectionProxy {}

    /**
     * @method _ExpenseCategoryTypeQueryBuilder whereId($value)
     * @method _ExpenseCategoryTypeQueryBuilder whereName($value)
     * @method _ExpenseCategoryTypeQueryBuilder whereCreatedAt($value)
     * @method _ExpenseCategoryTypeQueryBuilder whereUpdatedAt($value)
     * @method ExpenseCategoryType baseSole(array|string $columns = ['*'])
     * @method ExpenseCategoryType create(array $attributes = [])
     * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] cursor()
     * @method ExpenseCategoryType|null find($id, array $columns = ['*'])
     * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ExpenseCategoryType findOrFail($id, array $columns = ['*'])
     * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] findOrNew($id, array $columns = ['*'])
     * @method ExpenseCategoryType first(array|string $columns = ['*'])
     * @method ExpenseCategoryType firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method ExpenseCategoryType firstOrCreate(array $attributes = [], array $values = [])
     * @method ExpenseCategoryType firstOrFail(array $columns = ['*'])
     * @method ExpenseCategoryType firstOrNew(array $attributes = [], array $values = [])
     * @method ExpenseCategoryType firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ExpenseCategoryType forceCreate(array $attributes)
     * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] fromQuery(string $query, array $bindings = [])
     * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] get(array|string $columns = ['*'])
     * @method ExpenseCategoryType getModel()
     * @method ExpenseCategoryType[] getModels(array|string $columns = ['*'])
     * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] hydrate(array $items)
     * @method ExpenseCategoryType make(array $attributes = [])
     * @method ExpenseCategoryType newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ExpenseCategoryType[]|_ExpenseCategoryTypeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ExpenseCategoryType[]|_ExpenseCategoryTypeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ExpenseCategoryType sole(array|string $columns = ['*'])
     * @method ExpenseCategoryType updateOrCreate(array $attributes, array $values = [])
     */
    class _ExpenseCategoryTypeQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _ExpenseCollectionProxy $average
     * @property-read _ExpenseCollectionProxy $avg
     * @property-read _ExpenseCollectionProxy $contains
     * @property-read _ExpenseCollectionProxy $each
     * @property-read _ExpenseCollectionProxy $every
     * @property-read _ExpenseCollectionProxy $filter
     * @property-read _ExpenseCollectionProxy $first
     * @property-read _ExpenseCollectionProxy $flatMap
     * @property-read _ExpenseCollectionProxy $groupBy
     * @property-read _ExpenseCollectionProxy $keyBy
     * @property-read _ExpenseCollectionProxy $map
     * @property-read _ExpenseCollectionProxy $max
     * @property-read _ExpenseCollectionProxy $min
     * @property-read _ExpenseCollectionProxy $partition
     * @property-read _ExpenseCollectionProxy $reject
     * @property-read _ExpenseCollectionProxy $some
     * @property-read _ExpenseCollectionProxy $sortBy
     * @property-read _ExpenseCollectionProxy $sortByDesc
     * @property-read _ExpenseCollectionProxy $sum
     * @property-read _ExpenseCollectionProxy $unique
     */
    class _ExpenseCollection extends _BaseCollection {}

    /**
     * @property _ExpenseCollection|mixed $id
     * @property _ExpenseCollection|mixed $date
     * @property _ExpenseCollection|mixed $amount
     * @property _ExpenseCollection|mixed $remark
     * @property _ExpenseCollection|mixed $expense_category_id
     * @property _ExpenseCollection|mixed $payee_id
     * @property _ExpenseCollection|mixed $office_id
     * @property _ExpenseCollection|mixed $payment_method_id
     * @property _ExpenseCollection|mixed $company_id
     * @property _ExpenseCollection|mixed $created_at
     * @property _ExpenseCollection|mixed $updated_at
     * @property _ExpenseCollection|mixed $category
     * @property _ExpenseCollection|mixed $office
     * @property _ExpenseCollection|mixed $payee
     * @property _ExpenseCollection|mixed $payment_method
     * @see \App\Domain\Expense\Models\Expense::setDateAttribute
     * @method _ExpenseCollection setDateAttribute($value)
     * @see \App\Domain\Expense\Models\Expense::setAmountAttribute
     * @method _ExpenseCollection setAmountAttribute($value)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollection
     * @method _ExpenseCollection clearMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::hasMedia
     * @method _ExpenseCollection hasMedia(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaCollection
     * @method _ExpenseCollection addMediaCollection(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deleteMedia
     * @method _ExpenseCollection deleteMedia(int|Media $mediaId)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaPath
     * @method _ExpenseCollection getFirstMediaPath(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMediaCollection
     * @method _ExpenseCollection getMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::shouldDeletePreservingMedia
     * @method _ExpenseCollection shouldDeletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMultipleMediaFromRequest
     * @method _ExpenseCollection addMultipleMediaFromRequest(array $keys)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addAllMediaFromRequest
     * @method _ExpenseCollection addAllMediaFromRequest()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaUrl
     * @method _ExpenseCollection getFallbackMediaUrl(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaCollections
     * @method _ExpenseCollection registerMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaConversions
     * @method _ExpenseCollection registerMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::syncFromMediaLibraryRequest
     * @method _ExpenseCollection syncFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaConversion
     * @method _ExpenseCollection addMediaConversion(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerAllMediaConversions
     * @method _ExpenseCollection registerAllMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::loadMedia
     * @method _ExpenseCollection loadMedia(string $collectionName)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::updateMedia
     * @method _ExpenseCollection updateMedia(array $newMediaArray, string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deletePreservingMedia
     * @method _ExpenseCollection deletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromDisk
     * @method _ExpenseCollection addMediaFromDisk(string $key, string $disk = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaUrl
     * @method _ExpenseCollection getFirstMediaUrl(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromUrl
     * @method _ExpenseCollection addMediaFromUrl(string $url, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMedia
     * @method _ExpenseCollection addMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::copyMedia
     * @method _ExpenseCollection copyMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromString
     * @method _ExpenseCollection addMediaFromString(string $text)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromRequest
     * @method _ExpenseCollection addMediaFromRequest(string $key)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstTemporaryUrl
     * @method _ExpenseCollection getFirstTemporaryUrl(\DateTimeInterface $expiration, string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaPath
     * @method _ExpenseCollection getFallbackMediaPath(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromBase64
     * @method _ExpenseCollection addMediaFromBase64(string $base64data, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMedia
     * @method _ExpenseCollection getMedia(string $collectionName = 'default', array|callable $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getRegisteredMediaCollections
     * @method _ExpenseCollection getRegisteredMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMedia
     * @method _ExpenseCollection getFirstMedia(string $collectionName = 'default', $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollectionExcept
     * @method _ExpenseCollection clearMediaCollectionExcept(string $collectionName = 'default', Collection|Media[] $excludedMedia = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addFromMediaLibraryRequest
     * @method _ExpenseCollection addFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::processUnattachedMedia
     * @method _ExpenseCollection processUnattachedMedia(callable $callable)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::prepareToAttachMedia
     * @method _ExpenseCollection prepareToAttachMedia(Media $media, FileAdder $fileAdder)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ExpenseCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ExpenseCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ExpenseCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ExpenseCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ExpenseCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ExpenseCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ExpenseCollection delete()
     */
    class _ExpenseCollectionProxy {}

    /**
     * @method _ExpenseQueryBuilder whereId($value)
     * @method _ExpenseQueryBuilder whereDate($value)
     * @method _ExpenseQueryBuilder whereAmount($value)
     * @method _ExpenseQueryBuilder whereRemark($value)
     * @method _ExpenseQueryBuilder whereExpenseCategoryId($value)
     * @method _ExpenseQueryBuilder wherePayeeId($value)
     * @method _ExpenseQueryBuilder whereOfficeId($value)
     * @method _ExpenseQueryBuilder wherePaymentMethodId($value)
     * @method _ExpenseQueryBuilder whereCompanyId($value)
     * @method _ExpenseQueryBuilder whereCreatedAt($value)
     * @method _ExpenseQueryBuilder whereUpdatedAt($value)
     * @method Expense baseSole(array|string $columns = ['*'])
     * @method Expense create(array $attributes = [])
     * @method _ExpenseCollection|Expense[] cursor()
     * @method Expense|null find($id, array $columns = ['*'])
     * @method _ExpenseCollection|Expense[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Expense findOrFail($id, array $columns = ['*'])
     * @method _ExpenseCollection|Expense[] findOrNew($id, array $columns = ['*'])
     * @method Expense first(array|string $columns = ['*'])
     * @method Expense firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Expense firstOrCreate(array $attributes = [], array $values = [])
     * @method Expense firstOrFail(array $columns = ['*'])
     * @method Expense firstOrNew(array $attributes = [], array $values = [])
     * @method Expense firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Expense forceCreate(array $attributes)
     * @method _ExpenseCollection|Expense[] fromQuery(string $query, array $bindings = [])
     * @method _ExpenseCollection|Expense[] get(array|string $columns = ['*'])
     * @method Expense getModel()
     * @method Expense[] getModels(array|string $columns = ['*'])
     * @method _ExpenseCollection|Expense[] hydrate(array $items)
     * @method Expense make(array $attributes = [])
     * @method Expense newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Expense[]|_ExpenseCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Expense[]|_ExpenseCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Expense sole(array|string $columns = ['*'])
     * @method Expense updateOrCreate(array $attributes, array $values = [])
     */
    class _ExpenseQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Fleet\Models {

    use App\Domain\Fleet\Models\Fleet;
    use App\Domain\Fleet\Models\FleetDailyInspection;
    use App\Domain\Fleet\Models\FleetLive;
    use App\Domain\Fleet\Models\FleetMaintenance;
    use App\Domain\Fleet\Models\FleetTripCatcher;
    use App\Domain\Fleet\Models\FleetVehicle;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _FleetCollectionProxy $average
     * @property-read _FleetCollectionProxy $avg
     * @property-read _FleetCollectionProxy $contains
     * @property-read _FleetCollectionProxy $each
     * @property-read _FleetCollectionProxy $every
     * @property-read _FleetCollectionProxy $filter
     * @property-read _FleetCollectionProxy $first
     * @property-read _FleetCollectionProxy $flatMap
     * @property-read _FleetCollectionProxy $groupBy
     * @property-read _FleetCollectionProxy $keyBy
     * @property-read _FleetCollectionProxy $map
     * @property-read _FleetCollectionProxy $max
     * @property-read _FleetCollectionProxy $min
     * @property-read _FleetCollectionProxy $partition
     * @property-read _FleetCollectionProxy $reject
     * @property-read _FleetCollectionProxy $some
     * @property-read _FleetCollectionProxy $sortBy
     * @property-read _FleetCollectionProxy $sortByDesc
     * @property-read _FleetCollectionProxy $sum
     * @property-read _FleetCollectionProxy $unique
     */
    class _FleetCollection extends _BaseCollection {}

    /**
     * @property _FleetCollection|mixed $id
     * @property _FleetCollection|mixed $name
     * @property _FleetCollection|mixed $company_id
     * @property _FleetCollection|mixed $created_at
     * @property _FleetCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FleetCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FleetCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FleetCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FleetCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FleetCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FleetCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FleetCollection delete()
     */
    class _FleetCollectionProxy {}

    /**
     * @property-read _FleetDailyInspectionCollectionProxy $average
     * @property-read _FleetDailyInspectionCollectionProxy $avg
     * @property-read _FleetDailyInspectionCollectionProxy $contains
     * @property-read _FleetDailyInspectionCollectionProxy $each
     * @property-read _FleetDailyInspectionCollectionProxy $every
     * @property-read _FleetDailyInspectionCollectionProxy $filter
     * @property-read _FleetDailyInspectionCollectionProxy $first
     * @property-read _FleetDailyInspectionCollectionProxy $flatMap
     * @property-read _FleetDailyInspectionCollectionProxy $groupBy
     * @property-read _FleetDailyInspectionCollectionProxy $keyBy
     * @property-read _FleetDailyInspectionCollectionProxy $map
     * @property-read _FleetDailyInspectionCollectionProxy $max
     * @property-read _FleetDailyInspectionCollectionProxy $min
     * @property-read _FleetDailyInspectionCollectionProxy $partition
     * @property-read _FleetDailyInspectionCollectionProxy $reject
     * @property-read _FleetDailyInspectionCollectionProxy $some
     * @property-read _FleetDailyInspectionCollectionProxy $sortBy
     * @property-read _FleetDailyInspectionCollectionProxy $sortByDesc
     * @property-read _FleetDailyInspectionCollectionProxy $sum
     * @property-read _FleetDailyInspectionCollectionProxy $unique
     */
    class _FleetDailyInspectionCollection extends _BaseCollection {}

    /**
     * @property _FleetDailyInspectionCollection|mixed $air_filter
     * @property _FleetDailyInspectionCollection|mixed $air_filter_charge
     * @property _FleetDailyInspectionCollection|mixed $grease
     * @property _FleetDailyInspectionCollection|mixed $grease_charge
     * @property _FleetDailyInspectionCollection|mixed $tyre_repair
     * @property _FleetDailyInspectionCollection|mixed $tyre_repair_charge
     * @property _FleetDailyInspectionCollection|mixed $urea
     * @property _FleetDailyInspectionCollection|mixed $urea_amount
     * @property _FleetDailyInspectionCollection|mixed $urea_charge
     * @property _FleetDailyInspectionCollection|mixed $misc
     * @property _FleetDailyInspectionCollection|mixed $misc_charge
     * @property _FleetDailyInspectionCollection|mixed $misc_remark
     * @property _FleetDailyInspectionCollection|mixed $total
     * @property _FleetDailyInspectionCollection|mixed $created_at
     * @property _FleetDailyInspectionCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FleetDailyInspectionCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FleetDailyInspectionCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FleetDailyInspectionCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FleetDailyInspectionCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FleetDailyInspectionCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FleetDailyInspectionCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FleetDailyInspectionCollection delete()
     */
    class _FleetDailyInspectionCollectionProxy {}

    /**
     * @method _FleetDailyInspectionQueryBuilder whereAirFilter($value)
     * @method _FleetDailyInspectionQueryBuilder whereAirFilterCharge($value)
     * @method _FleetDailyInspectionQueryBuilder whereGrease($value)
     * @method _FleetDailyInspectionQueryBuilder whereGreaseCharge($value)
     * @method _FleetDailyInspectionQueryBuilder whereTyreRepair($value)
     * @method _FleetDailyInspectionQueryBuilder whereTyreRepairCharge($value)
     * @method _FleetDailyInspectionQueryBuilder whereUrea($value)
     * @method _FleetDailyInspectionQueryBuilder whereUreaAmount($value)
     * @method _FleetDailyInspectionQueryBuilder whereUreaCharge($value)
     * @method _FleetDailyInspectionQueryBuilder whereMisc($value)
     * @method _FleetDailyInspectionQueryBuilder whereMiscCharge($value)
     * @method _FleetDailyInspectionQueryBuilder whereMiscRemark($value)
     * @method _FleetDailyInspectionQueryBuilder whereTotal($value)
     * @method _FleetDailyInspectionQueryBuilder whereCreatedAt($value)
     * @method _FleetDailyInspectionQueryBuilder whereUpdatedAt($value)
     * @method FleetDailyInspection baseSole(array|string $columns = ['*'])
     * @method FleetDailyInspection create(array $attributes = [])
     * @method _FleetDailyInspectionCollection|FleetDailyInspection[] cursor()
     * @method FleetDailyInspection|null find($id, array $columns = ['*'])
     * @method _FleetDailyInspectionCollection|FleetDailyInspection[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FleetDailyInspection findOrFail($id, array $columns = ['*'])
     * @method _FleetDailyInspectionCollection|FleetDailyInspection[] findOrNew($id, array $columns = ['*'])
     * @method FleetDailyInspection first(array|string $columns = ['*'])
     * @method FleetDailyInspection firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method FleetDailyInspection firstOrCreate(array $attributes = [], array $values = [])
     * @method FleetDailyInspection firstOrFail(array $columns = ['*'])
     * @method FleetDailyInspection firstOrNew(array $attributes = [], array $values = [])
     * @method FleetDailyInspection firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FleetDailyInspection forceCreate(array $attributes)
     * @method _FleetDailyInspectionCollection|FleetDailyInspection[] fromQuery(string $query, array $bindings = [])
     * @method _FleetDailyInspectionCollection|FleetDailyInspection[] get(array|string $columns = ['*'])
     * @method FleetDailyInspection getModel()
     * @method FleetDailyInspection[] getModels(array|string $columns = ['*'])
     * @method _FleetDailyInspectionCollection|FleetDailyInspection[] hydrate(array $items)
     * @method FleetDailyInspection make(array $attributes = [])
     * @method FleetDailyInspection newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FleetDailyInspection[]|_FleetDailyInspectionCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FleetDailyInspection[]|_FleetDailyInspectionCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FleetDailyInspection sole(array|string $columns = ['*'])
     * @method FleetDailyInspection updateOrCreate(array $attributes, array $values = [])
     */
    class _FleetDailyInspectionQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _FleetLiveCollectionProxy $average
     * @property-read _FleetLiveCollectionProxy $avg
     * @property-read _FleetLiveCollectionProxy $contains
     * @property-read _FleetLiveCollectionProxy $each
     * @property-read _FleetLiveCollectionProxy $every
     * @property-read _FleetLiveCollectionProxy $filter
     * @property-read _FleetLiveCollectionProxy $first
     * @property-read _FleetLiveCollectionProxy $flatMap
     * @property-read _FleetLiveCollectionProxy $groupBy
     * @property-read _FleetLiveCollectionProxy $keyBy
     * @property-read _FleetLiveCollectionProxy $map
     * @property-read _FleetLiveCollectionProxy $max
     * @property-read _FleetLiveCollectionProxy $min
     * @property-read _FleetLiveCollectionProxy $partition
     * @property-read _FleetLiveCollectionProxy $reject
     * @property-read _FleetLiveCollectionProxy $some
     * @property-read _FleetLiveCollectionProxy $sortBy
     * @property-read _FleetLiveCollectionProxy $sortByDesc
     * @property-read _FleetLiveCollectionProxy $sum
     * @property-read _FleetLiveCollectionProxy $unique
     */
    class _FleetLiveCollection extends _BaseCollection {}

    /**
     * @property _FleetLiveCollection|mixed $id
     * @property _FleetLiveCollection|mixed $outtype
     * @property _FleetLiveCollection|mixed $ttime
     * @property _FleetLiveCollection|mixed $rectime
     * @property _FleetLiveCollection|mixed $trips
     * @property _FleetLiveCollection|mixed $rdev
     * @property _FleetLiveCollection|mixed $mineral
     * @property _FleetLiveCollection|mixed $sourcecode
     * @property _FleetLiveCollection|mixed $lessycode
     * @property _FleetLiveCollection|mixed $vehiclespeed
     * @property _FleetLiveCollection|mixed $ignumber
     * @property _FleetLiveCollection|mixed $gpsstatus
     * @property _FleetLiveCollection|mixed $circle
     * @property _FleetLiveCollection|mixed $starttime
     * @property _FleetLiveCollection|mixed $endtime
     * @property _FleetLiveCollection|mixed $destination
     * @property _FleetLiveCollection|mixed $routename
     * @property _FleetLiveCollection|mixed $latitude
     * @property _FleetLiveCollection|mixed $longitude
     * @property _FleetLiveCollection|mixed $imeino
     * @property _FleetLiveCollection|mixed $etpno
     * @property _FleetLiveCollection|mixed $vehcount
     * @property _FleetLiveCollection|mixed $tripcount
     * @property _FleetLiveCollection|mixed $vehicleno
     * @property _FleetLiveCollection|mixed $outtime
     * @property _FleetLiveCollection|mixed $intime
     * @property _FleetLiveCollection|mixed $rdevstarttime
     * @property _FleetLiveCollection|mixed $rdevendtime
     * @property _FleetLiveCollection|mixed $rdevtime
     * @property _FleetLiveCollection|mixed $pollingtime
     * @property _FleetLiveCollection|mixed $company
     * @property _FleetLiveCollection|mixed $destcode
     * @property _FleetLiveCollection|mixed $time
     * @property _FleetLiveCollection|mixed $index
     * @property _FleetLiveCollection|mixed $source
     * @property _FleetLiveCollection|mixed $status
     * @property _FleetLiveCollection|mixed $location
     * @property _FleetLiveCollection|mixed $created_at
     * @property _FleetLiveCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FleetLiveCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FleetLiveCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FleetLiveCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FleetLiveCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FleetLiveCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FleetLiveCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FleetLiveCollection delete()
     */
    class _FleetLiveCollectionProxy {}

    /**
     * @method _FleetLiveQueryBuilder whereId($value)
     * @method _FleetLiveQueryBuilder whereOuttype($value)
     * @method _FleetLiveQueryBuilder whereTtime($value)
     * @method _FleetLiveQueryBuilder whereRectime($value)
     * @method _FleetLiveQueryBuilder whereTrips($value)
     * @method _FleetLiveQueryBuilder whereRdev($value)
     * @method _FleetLiveQueryBuilder whereMineral($value)
     * @method _FleetLiveQueryBuilder whereSourcecode($value)
     * @method _FleetLiveQueryBuilder whereLessycode($value)
     * @method _FleetLiveQueryBuilder whereVehiclespeed($value)
     * @method _FleetLiveQueryBuilder whereIgnumber($value)
     * @method _FleetLiveQueryBuilder whereGpsstatus($value)
     * @method _FleetLiveQueryBuilder whereCircle($value)
     * @method _FleetLiveQueryBuilder whereStarttime($value)
     * @method _FleetLiveQueryBuilder whereEndtime($value)
     * @method _FleetLiveQueryBuilder whereDestination($value)
     * @method _FleetLiveQueryBuilder whereRoutename($value)
     * @method _FleetLiveQueryBuilder whereLatitude($value)
     * @method _FleetLiveQueryBuilder whereLongitude($value)
     * @method _FleetLiveQueryBuilder whereImeino($value)
     * @method _FleetLiveQueryBuilder whereEtpno($value)
     * @method _FleetLiveQueryBuilder whereVehcount($value)
     * @method _FleetLiveQueryBuilder whereTripcount($value)
     * @method _FleetLiveQueryBuilder whereVehicleno($value)
     * @method _FleetLiveQueryBuilder whereOuttime($value)
     * @method _FleetLiveQueryBuilder whereIntime($value)
     * @method _FleetLiveQueryBuilder whereRdevstarttime($value)
     * @method _FleetLiveQueryBuilder whereRdevendtime($value)
     * @method _FleetLiveQueryBuilder whereRdevtime($value)
     * @method _FleetLiveQueryBuilder wherePollingtime($value)
     * @method _FleetLiveQueryBuilder whereCompany($value)
     * @method _FleetLiveQueryBuilder whereDestcode($value)
     * @method _FleetLiveQueryBuilder whereTime($value)
     * @method _FleetLiveQueryBuilder whereIndex($value)
     * @method _FleetLiveQueryBuilder whereSource($value)
     * @method _FleetLiveQueryBuilder whereStatus($value)
     * @method _FleetLiveQueryBuilder whereLocation($value)
     * @method _FleetLiveQueryBuilder whereCreatedAt($value)
     * @method _FleetLiveQueryBuilder whereUpdatedAt($value)
     * @method FleetLive baseSole(array|string $columns = ['*'])
     * @method FleetLive create(array $attributes = [])
     * @method _FleetLiveCollection|FleetLive[] cursor()
     * @method FleetLive|null find($id, array $columns = ['*'])
     * @method _FleetLiveCollection|FleetLive[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FleetLive findOrFail($id, array $columns = ['*'])
     * @method _FleetLiveCollection|FleetLive[] findOrNew($id, array $columns = ['*'])
     * @method FleetLive first(array|string $columns = ['*'])
     * @method FleetLive firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method FleetLive firstOrCreate(array $attributes = [], array $values = [])
     * @method FleetLive firstOrFail(array $columns = ['*'])
     * @method FleetLive firstOrNew(array $attributes = [], array $values = [])
     * @method FleetLive firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FleetLive forceCreate(array $attributes)
     * @method _FleetLiveCollection|FleetLive[] fromQuery(string $query, array $bindings = [])
     * @method _FleetLiveCollection|FleetLive[] get(array|string $columns = ['*'])
     * @method FleetLive getModel()
     * @method FleetLive[] getModels(array|string $columns = ['*'])
     * @method _FleetLiveCollection|FleetLive[] hydrate(array $items)
     * @method FleetLive make(array $attributes = [])
     * @method FleetLive newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FleetLive[]|_FleetLiveCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FleetLive[]|_FleetLiveCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FleetLive sole(array|string $columns = ['*'])
     * @method FleetLive updateOrCreate(array $attributes, array $values = [])
     */
    class _FleetLiveQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _FleetMaintenanceCollectionProxy $average
     * @property-read _FleetMaintenanceCollectionProxy $avg
     * @property-read _FleetMaintenanceCollectionProxy $contains
     * @property-read _FleetMaintenanceCollectionProxy $each
     * @property-read _FleetMaintenanceCollectionProxy $every
     * @property-read _FleetMaintenanceCollectionProxy $filter
     * @property-read _FleetMaintenanceCollectionProxy $first
     * @property-read _FleetMaintenanceCollectionProxy $flatMap
     * @property-read _FleetMaintenanceCollectionProxy $groupBy
     * @property-read _FleetMaintenanceCollectionProxy $keyBy
     * @property-read _FleetMaintenanceCollectionProxy $map
     * @property-read _FleetMaintenanceCollectionProxy $max
     * @property-read _FleetMaintenanceCollectionProxy $min
     * @property-read _FleetMaintenanceCollectionProxy $partition
     * @property-read _FleetMaintenanceCollectionProxy $reject
     * @property-read _FleetMaintenanceCollectionProxy $some
     * @property-read _FleetMaintenanceCollectionProxy $sortBy
     * @property-read _FleetMaintenanceCollectionProxy $sortByDesc
     * @property-read _FleetMaintenanceCollectionProxy $sum
     * @property-read _FleetMaintenanceCollectionProxy $unique
     */
    class _FleetMaintenanceCollection extends _BaseCollection {}

    /**
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FleetMaintenanceCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FleetMaintenanceCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FleetMaintenanceCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FleetMaintenanceCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FleetMaintenanceCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FleetMaintenanceCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FleetMaintenanceCollection delete()
     */
    class _FleetMaintenanceCollectionProxy {}

    /**
     * @method FleetMaintenance baseSole(array|string $columns = ['*'])
     * @method FleetMaintenance create(array $attributes = [])
     * @method _FleetMaintenanceCollection|FleetMaintenance[] cursor()
     * @method FleetMaintenance|null find($id, array $columns = ['*'])
     * @method _FleetMaintenanceCollection|FleetMaintenance[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FleetMaintenance findOrFail($id, array $columns = ['*'])
     * @method _FleetMaintenanceCollection|FleetMaintenance[] findOrNew($id, array $columns = ['*'])
     * @method FleetMaintenance first(array|string $columns = ['*'])
     * @method FleetMaintenance firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method FleetMaintenance firstOrCreate(array $attributes = [], array $values = [])
     * @method FleetMaintenance firstOrFail(array $columns = ['*'])
     * @method FleetMaintenance firstOrNew(array $attributes = [], array $values = [])
     * @method FleetMaintenance firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FleetMaintenance forceCreate(array $attributes)
     * @method _FleetMaintenanceCollection|FleetMaintenance[] fromQuery(string $query, array $bindings = [])
     * @method _FleetMaintenanceCollection|FleetMaintenance[] get(array|string $columns = ['*'])
     * @method FleetMaintenance getModel()
     * @method FleetMaintenance[] getModels(array|string $columns = ['*'])
     * @method _FleetMaintenanceCollection|FleetMaintenance[] hydrate(array $items)
     * @method FleetMaintenance make(array $attributes = [])
     * @method FleetMaintenance newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FleetMaintenance[]|_FleetMaintenanceCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FleetMaintenance[]|_FleetMaintenanceCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FleetMaintenance sole(array|string $columns = ['*'])
     * @method FleetMaintenance updateOrCreate(array $attributes, array $values = [])
     */
    class _FleetMaintenanceQueryBuilder extends _BaseBuilder {}

    /**
     * @method _FleetQueryBuilder whereId($value)
     * @method _FleetQueryBuilder whereName($value)
     * @method _FleetQueryBuilder whereCompanyId($value)
     * @method _FleetQueryBuilder whereCreatedAt($value)
     * @method _FleetQueryBuilder whereUpdatedAt($value)
     * @method Fleet baseSole(array|string $columns = ['*'])
     * @method Fleet create(array $attributes = [])
     * @method _FleetCollection|Fleet[] cursor()
     * @method Fleet|null find($id, array $columns = ['*'])
     * @method _FleetCollection|Fleet[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Fleet findOrFail($id, array $columns = ['*'])
     * @method _FleetCollection|Fleet[] findOrNew($id, array $columns = ['*'])
     * @method Fleet first(array|string $columns = ['*'])
     * @method Fleet firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Fleet firstOrCreate(array $attributes = [], array $values = [])
     * @method Fleet firstOrFail(array $columns = ['*'])
     * @method Fleet firstOrNew(array $attributes = [], array $values = [])
     * @method Fleet firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Fleet forceCreate(array $attributes)
     * @method _FleetCollection|Fleet[] fromQuery(string $query, array $bindings = [])
     * @method _FleetCollection|Fleet[] get(array|string $columns = ['*'])
     * @method Fleet getModel()
     * @method Fleet[] getModels(array|string $columns = ['*'])
     * @method _FleetCollection|Fleet[] hydrate(array $items)
     * @method Fleet make(array $attributes = [])
     * @method Fleet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Fleet[]|_FleetCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Fleet[]|_FleetCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Fleet sole(array|string $columns = ['*'])
     * @method Fleet updateOrCreate(array $attributes, array $values = [])
     */
    class _FleetQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _FleetTripCatcherCollectionProxy $average
     * @property-read _FleetTripCatcherCollectionProxy $avg
     * @property-read _FleetTripCatcherCollectionProxy $contains
     * @property-read _FleetTripCatcherCollectionProxy $each
     * @property-read _FleetTripCatcherCollectionProxy $every
     * @property-read _FleetTripCatcherCollectionProxy $filter
     * @property-read _FleetTripCatcherCollectionProxy $first
     * @property-read _FleetTripCatcherCollectionProxy $flatMap
     * @property-read _FleetTripCatcherCollectionProxy $groupBy
     * @property-read _FleetTripCatcherCollectionProxy $keyBy
     * @property-read _FleetTripCatcherCollectionProxy $map
     * @property-read _FleetTripCatcherCollectionProxy $max
     * @property-read _FleetTripCatcherCollectionProxy $min
     * @property-read _FleetTripCatcherCollectionProxy $partition
     * @property-read _FleetTripCatcherCollectionProxy $reject
     * @property-read _FleetTripCatcherCollectionProxy $some
     * @property-read _FleetTripCatcherCollectionProxy $sortBy
     * @property-read _FleetTripCatcherCollectionProxy $sortByDesc
     * @property-read _FleetTripCatcherCollectionProxy $sum
     * @property-read _FleetTripCatcherCollectionProxy $unique
     */
    class _FleetTripCatcherCollection extends _BaseCollection {}

    /**
     * @property _FleetTripCatcherCollection|mixed $id
     * @property _FleetTripCatcherCollection|mixed $vehicleno
     * @property _FleetTripCatcherCollection|mixed $etpno
     * @property _FleetTripCatcherCollection|mixed $source
     * @property _FleetTripCatcherCollection|mixed $destination
     * @property _FleetTripCatcherCollection|mixed $starttime
     * @property _FleetTripCatcherCollection|mixed $pollingtime
     * @property _FleetTripCatcherCollection|mixed $created_at
     * @property _FleetTripCatcherCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FleetTripCatcherCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FleetTripCatcherCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FleetTripCatcherCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FleetTripCatcherCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FleetTripCatcherCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FleetTripCatcherCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FleetTripCatcherCollection delete()
     */
    class _FleetTripCatcherCollectionProxy {}

    /**
     * @method _FleetTripCatcherQueryBuilder whereId($value)
     * @method _FleetTripCatcherQueryBuilder whereVehicleno($value)
     * @method _FleetTripCatcherQueryBuilder whereEtpno($value)
     * @method _FleetTripCatcherQueryBuilder whereSource($value)
     * @method _FleetTripCatcherQueryBuilder whereDestination($value)
     * @method _FleetTripCatcherQueryBuilder whereStarttime($value)
     * @method _FleetTripCatcherQueryBuilder wherePollingtime($value)
     * @method _FleetTripCatcherQueryBuilder whereCreatedAt($value)
     * @method _FleetTripCatcherQueryBuilder whereUpdatedAt($value)
     * @method FleetTripCatcher baseSole(array|string $columns = ['*'])
     * @method FleetTripCatcher create(array $attributes = [])
     * @method _FleetTripCatcherCollection|FleetTripCatcher[] cursor()
     * @method FleetTripCatcher|null find($id, array $columns = ['*'])
     * @method _FleetTripCatcherCollection|FleetTripCatcher[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FleetTripCatcher findOrFail($id, array $columns = ['*'])
     * @method _FleetTripCatcherCollection|FleetTripCatcher[] findOrNew($id, array $columns = ['*'])
     * @method FleetTripCatcher first(array|string $columns = ['*'])
     * @method FleetTripCatcher firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method FleetTripCatcher firstOrCreate(array $attributes = [], array $values = [])
     * @method FleetTripCatcher firstOrFail(array $columns = ['*'])
     * @method FleetTripCatcher firstOrNew(array $attributes = [], array $values = [])
     * @method FleetTripCatcher firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FleetTripCatcher forceCreate(array $attributes)
     * @method _FleetTripCatcherCollection|FleetTripCatcher[] fromQuery(string $query, array $bindings = [])
     * @method _FleetTripCatcherCollection|FleetTripCatcher[] get(array|string $columns = ['*'])
     * @method FleetTripCatcher getModel()
     * @method FleetTripCatcher[] getModels(array|string $columns = ['*'])
     * @method _FleetTripCatcherCollection|FleetTripCatcher[] hydrate(array $items)
     * @method FleetTripCatcher make(array $attributes = [])
     * @method FleetTripCatcher newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FleetTripCatcher[]|_FleetTripCatcherCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FleetTripCatcher[]|_FleetTripCatcherCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FleetTripCatcher sole(array|string $columns = ['*'])
     * @method FleetTripCatcher updateOrCreate(array $attributes, array $values = [])
     */
    class _FleetTripCatcherQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _FleetVehicleCollectionProxy $average
     * @property-read _FleetVehicleCollectionProxy $avg
     * @property-read _FleetVehicleCollectionProxy $contains
     * @property-read _FleetVehicleCollectionProxy $each
     * @property-read _FleetVehicleCollectionProxy $every
     * @property-read _FleetVehicleCollectionProxy $filter
     * @property-read _FleetVehicleCollectionProxy $first
     * @property-read _FleetVehicleCollectionProxy $flatMap
     * @property-read _FleetVehicleCollectionProxy $groupBy
     * @property-read _FleetVehicleCollectionProxy $keyBy
     * @property-read _FleetVehicleCollectionProxy $map
     * @property-read _FleetVehicleCollectionProxy $max
     * @property-read _FleetVehicleCollectionProxy $min
     * @property-read _FleetVehicleCollectionProxy $partition
     * @property-read _FleetVehicleCollectionProxy $reject
     * @property-read _FleetVehicleCollectionProxy $some
     * @property-read _FleetVehicleCollectionProxy $sortBy
     * @property-read _FleetVehicleCollectionProxy $sortByDesc
     * @property-read _FleetVehicleCollectionProxy $sum
     * @property-read _FleetVehicleCollectionProxy $unique
     */
    class _FleetVehicleCollection extends _BaseCollection {}

    /**
     * @property _FleetVehicleCollection|mixed $id
     * @property _FleetVehicleCollection|mixed $license_plate
     * @property _FleetVehicleCollection|mixed $rto
     * @property _FleetVehicleCollection|mixed $model
     * @property _FleetVehicleCollection|mixed $class
     * @property _FleetVehicleCollection|mixed $color
     * @property _FleetVehicleCollection|mixed $state
     * @property _FleetVehicleCollection|mixed $weight
     * @property _FleetVehicleCollection|mixed $isValid
     * @property _FleetVehicleCollection|mixed $financer
     * @property _FleetVehicleCollection|mixed $puc_upto
     * @property _FleetVehicleCollection|mixed $rto_code
     * @property _FleetVehicleCollection|mixed $fuel_type
     * @property _FleetVehicleCollection|mixed $fuel_norm
     * @property _FleetVehicleCollection|mixed $owner_name
     * @property _FleetVehicleCollection|mixed $mvtax_upto
     * @property _FleetVehicleCollection|mixed $vehicle_age
     * @property _FleetVehicleCollection|mixed $price_range
     * @property _FleetVehicleCollection|mixed $noc_details
     * @property _FleetVehicleCollection|mixed $vehicle_type
     * @property _FleetVehicleCollection|mixed $fitness_upto
     * @property _FleetVehicleCollection|mixed $roadtax_upto
     * @property _FleetVehicleCollection|mixed $engine_number
     * @property _FleetVehicleCollection|mixed $ownership_type
     * @property _FleetVehicleCollection|mixed $chassis_number
     * @property _FleetVehicleCollection|mixed $engine_capacity
     * @property _FleetVehicleCollection|mixed $registration_date
     * @property _FleetVehicleCollection|mixed $registering_authority
     * @property _FleetVehicleCollection|mixed $fleet_id
     * @property _FleetVehicleCollection|mixed $company_id
     * @property _FleetVehicleCollection|mixed $created_at
     * @property _FleetVehicleCollection|mixed $updated_at
     * @property _FleetVehicleCollection|mixed $fleet
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FleetVehicleCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FleetVehicleCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FleetVehicleCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FleetVehicleCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FleetVehicleCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FleetVehicleCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FleetVehicleCollection delete()
     */
    class _FleetVehicleCollectionProxy {}

    /**
     * @method _FleetVehicleQueryBuilder whereId($value)
     * @method _FleetVehicleQueryBuilder whereLicensePlate($value)
     * @method _FleetVehicleQueryBuilder whereRto($value)
     * @method _FleetVehicleQueryBuilder whereModel($value)
     * @method _FleetVehicleQueryBuilder whereClass($value)
     * @method _FleetVehicleQueryBuilder whereColor($value)
     * @method _FleetVehicleQueryBuilder whereState($value)
     * @method _FleetVehicleQueryBuilder whereWeight($value)
     * @method _FleetVehicleQueryBuilder whereIsvalid($value)
     * @method _FleetVehicleQueryBuilder whereFinancer($value)
     * @method _FleetVehicleQueryBuilder wherePucUpto($value)
     * @method _FleetVehicleQueryBuilder whereRtoCode($value)
     * @method _FleetVehicleQueryBuilder whereFuelType($value)
     * @method _FleetVehicleQueryBuilder whereFuelNorm($value)
     * @method _FleetVehicleQueryBuilder whereOwnerName($value)
     * @method _FleetVehicleQueryBuilder whereMvtaxUpto($value)
     * @method _FleetVehicleQueryBuilder whereVehicleAge($value)
     * @method _FleetVehicleQueryBuilder wherePriceRange($value)
     * @method _FleetVehicleQueryBuilder whereNocDetails($value)
     * @method _FleetVehicleQueryBuilder whereVehicleType($value)
     * @method _FleetVehicleQueryBuilder whereFitnessUpto($value)
     * @method _FleetVehicleQueryBuilder whereRoadtaxUpto($value)
     * @method _FleetVehicleQueryBuilder whereEngineNumber($value)
     * @method _FleetVehicleQueryBuilder whereOwnershipType($value)
     * @method _FleetVehicleQueryBuilder whereChassisNumber($value)
     * @method _FleetVehicleQueryBuilder whereEngineCapacity($value)
     * @method _FleetVehicleQueryBuilder whereRegistrationDate($value)
     * @method _FleetVehicleQueryBuilder whereRegisteringAuthority($value)
     * @method _FleetVehicleQueryBuilder whereFleetId($value)
     * @method _FleetVehicleQueryBuilder whereCompanyId($value)
     * @method _FleetVehicleQueryBuilder whereCreatedAt($value)
     * @method _FleetVehicleQueryBuilder whereUpdatedAt($value)
     * @method FleetVehicle baseSole(array|string $columns = ['*'])
     * @method FleetVehicle create(array $attributes = [])
     * @method _FleetVehicleCollection|FleetVehicle[] cursor()
     * @method FleetVehicle|null find($id, array $columns = ['*'])
     * @method _FleetVehicleCollection|FleetVehicle[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FleetVehicle findOrFail($id, array $columns = ['*'])
     * @method _FleetVehicleCollection|FleetVehicle[] findOrNew($id, array $columns = ['*'])
     * @method FleetVehicle first(array|string $columns = ['*'])
     * @method FleetVehicle firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method FleetVehicle firstOrCreate(array $attributes = [], array $values = [])
     * @method FleetVehicle firstOrFail(array $columns = ['*'])
     * @method FleetVehicle firstOrNew(array $attributes = [], array $values = [])
     * @method FleetVehicle firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FleetVehicle forceCreate(array $attributes)
     * @method _FleetVehicleCollection|FleetVehicle[] fromQuery(string $query, array $bindings = [])
     * @method _FleetVehicleCollection|FleetVehicle[] get(array|string $columns = ['*'])
     * @method FleetVehicle getModel()
     * @method FleetVehicle[] getModels(array|string $columns = ['*'])
     * @method _FleetVehicleCollection|FleetVehicle[] hydrate(array $items)
     * @method FleetVehicle make(array $attributes = [])
     * @method FleetVehicle newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FleetVehicle[]|_FleetVehicleCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FleetVehicle[]|_FleetVehicleCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FleetVehicle sole(array|string $columns = ['*'])
     * @method FleetVehicle updateOrCreate(array $attributes, array $values = [])
     */
    class _FleetVehicleQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\General\Models {

    use App\Domain\General\Models\Address;
    use App\Domain\General\Models\GstDetails;
    use App\Domain\General\Models\Material;
    use App\Domain\General\Models\PhoneNumber;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _AddressCollectionProxy $average
     * @property-read _AddressCollectionProxy $avg
     * @property-read _AddressCollectionProxy $contains
     * @property-read _AddressCollectionProxy $each
     * @property-read _AddressCollectionProxy $every
     * @property-read _AddressCollectionProxy $filter
     * @property-read _AddressCollectionProxy $first
     * @property-read _AddressCollectionProxy $flatMap
     * @property-read _AddressCollectionProxy $groupBy
     * @property-read _AddressCollectionProxy $keyBy
     * @property-read _AddressCollectionProxy $map
     * @property-read _AddressCollectionProxy $max
     * @property-read _AddressCollectionProxy $min
     * @property-read _AddressCollectionProxy $partition
     * @property-read _AddressCollectionProxy $reject
     * @property-read _AddressCollectionProxy $some
     * @property-read _AddressCollectionProxy $sortBy
     * @property-read _AddressCollectionProxy $sortByDesc
     * @property-read _AddressCollectionProxy $sum
     * @property-read _AddressCollectionProxy $unique
     */
    class _AddressCollection extends _BaseCollection {}

    /**
     * @property _AddressCollection|mixed $id
     * @property _AddressCollection|mixed $line_1
     * @property _AddressCollection|mixed $line_2
     * @property _AddressCollection|mixed $city
     * @property _AddressCollection|mixed $district
     * @property _AddressCollection|mixed $state
     * @property _AddressCollection|mixed $zip
     * @property _AddressCollection|mixed $addressable_id
     * @property _AddressCollection|mixed $addressable_type
     * @property _AddressCollection|mixed $company_id
     * @property _AddressCollection|mixed $created_at
     * @property _AddressCollection|mixed $updated_at
     * @property _AddressCollection|mixed $addressable
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _AddressCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _AddressCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _AddressCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _AddressCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _AddressCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _AddressCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _AddressCollection delete()
     */
    class _AddressCollectionProxy {}

    /**
     * @method _AddressQueryBuilder whereId($value)
     * @method _AddressQueryBuilder whereLine1($value)
     * @method _AddressQueryBuilder whereLine2($value)
     * @method _AddressQueryBuilder whereCity($value)
     * @method _AddressQueryBuilder whereDistrict($value)
     * @method _AddressQueryBuilder whereState($value)
     * @method _AddressQueryBuilder whereZip($value)
     * @method _AddressQueryBuilder whereAddressableId($value)
     * @method _AddressQueryBuilder whereAddressableType($value)
     * @method _AddressQueryBuilder whereCompanyId($value)
     * @method _AddressQueryBuilder whereCreatedAt($value)
     * @method _AddressQueryBuilder whereUpdatedAt($value)
     * @method Address baseSole(array|string $columns = ['*'])
     * @method Address create(array $attributes = [])
     * @method _AddressCollection|Address[] cursor()
     * @method Address|null find($id, array $columns = ['*'])
     * @method _AddressCollection|Address[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Address findOrFail($id, array $columns = ['*'])
     * @method _AddressCollection|Address[] findOrNew($id, array $columns = ['*'])
     * @method Address first(array|string $columns = ['*'])
     * @method Address firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Address firstOrCreate(array $attributes = [], array $values = [])
     * @method Address firstOrFail(array $columns = ['*'])
     * @method Address firstOrNew(array $attributes = [], array $values = [])
     * @method Address firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Address forceCreate(array $attributes)
     * @method _AddressCollection|Address[] fromQuery(string $query, array $bindings = [])
     * @method _AddressCollection|Address[] get(array|string $columns = ['*'])
     * @method Address getModel()
     * @method Address[] getModels(array|string $columns = ['*'])
     * @method _AddressCollection|Address[] hydrate(array $items)
     * @method Address make(array $attributes = [])
     * @method Address newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Address[]|_AddressCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Address[]|_AddressCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Address sole(array|string $columns = ['*'])
     * @method Address updateOrCreate(array $attributes, array $values = [])
     */
    class _AddressQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _GstDetailsCollectionProxy $average
     * @property-read _GstDetailsCollectionProxy $avg
     * @property-read _GstDetailsCollectionProxy $contains
     * @property-read _GstDetailsCollectionProxy $each
     * @property-read _GstDetailsCollectionProxy $every
     * @property-read _GstDetailsCollectionProxy $filter
     * @property-read _GstDetailsCollectionProxy $first
     * @property-read _GstDetailsCollectionProxy $flatMap
     * @property-read _GstDetailsCollectionProxy $groupBy
     * @property-read _GstDetailsCollectionProxy $keyBy
     * @property-read _GstDetailsCollectionProxy $map
     * @property-read _GstDetailsCollectionProxy $max
     * @property-read _GstDetailsCollectionProxy $min
     * @property-read _GstDetailsCollectionProxy $partition
     * @property-read _GstDetailsCollectionProxy $reject
     * @property-read _GstDetailsCollectionProxy $some
     * @property-read _GstDetailsCollectionProxy $sortBy
     * @property-read _GstDetailsCollectionProxy $sortByDesc
     * @property-read _GstDetailsCollectionProxy $sum
     * @property-read _GstDetailsCollectionProxy $unique
     */
    class _GstDetailsCollection extends _BaseCollection {}

    /**
     * @property _GstDetailsCollection|mixed $id
     * @property _GstDetailsCollection|mixed $gstn
     * @property _GstDetailsCollection|mixed $legal_name
     * @property _GstDetailsCollection|mixed $trade_name
     * @property _GstDetailsCollection|mixed $taxpayer_type
     * @property _GstDetailsCollection|mixed $reg_date
     * @property _GstDetailsCollection|mixed $state_code
     * @property _GstDetailsCollection|mixed $nature
     * @property _GstDetailsCollection|mixed $jurisdiction
     * @property _GstDetailsCollection|mixed $business_type
     * @property _GstDetailsCollection|mixed $last_update
     * @property _GstDetailsCollection|mixed $address_1
     * @property _GstDetailsCollection|mixed $address_2
     * @property _GstDetailsCollection|mixed $pin
     * @property _GstDetailsCollection|mixed $state
     * @property _GstDetailsCollection|mixed $city
     * @property _GstDetailsCollection|mixed $district
     * @property _GstDetailsCollection|mixed $status
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _GstDetailsCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _GstDetailsCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _GstDetailsCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _GstDetailsCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _GstDetailsCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _GstDetailsCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _GstDetailsCollection delete()
     */
    class _GstDetailsCollectionProxy {}

    /**
     * @method _GstDetailsQueryBuilder whereId($value)
     * @method _GstDetailsQueryBuilder whereGstn($value)
     * @method _GstDetailsQueryBuilder whereLegalName($value)
     * @method _GstDetailsQueryBuilder whereTradeName($value)
     * @method _GstDetailsQueryBuilder whereTaxpayerType($value)
     * @method _GstDetailsQueryBuilder whereRegDate($value)
     * @method _GstDetailsQueryBuilder whereStateCode($value)
     * @method _GstDetailsQueryBuilder whereNature($value)
     * @method _GstDetailsQueryBuilder whereJurisdiction($value)
     * @method _GstDetailsQueryBuilder whereBusinessType($value)
     * @method _GstDetailsQueryBuilder whereLastUpdate($value)
     * @method _GstDetailsQueryBuilder whereAddress1($value)
     * @method _GstDetailsQueryBuilder whereAddress2($value)
     * @method _GstDetailsQueryBuilder wherePin($value)
     * @method _GstDetailsQueryBuilder whereState($value)
     * @method _GstDetailsQueryBuilder whereCity($value)
     * @method _GstDetailsQueryBuilder whereDistrict($value)
     * @method _GstDetailsQueryBuilder whereStatus($value)
     * @method GstDetails baseSole(array|string $columns = ['*'])
     * @method GstDetails create(array $attributes = [])
     * @method _GstDetailsCollection|GstDetails[] cursor()
     * @method GstDetails|null find($id, array $columns = ['*'])
     * @method _GstDetailsCollection|GstDetails[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method GstDetails findOrFail($id, array $columns = ['*'])
     * @method _GstDetailsCollection|GstDetails[] findOrNew($id, array $columns = ['*'])
     * @method GstDetails first(array|string $columns = ['*'])
     * @method GstDetails firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method GstDetails firstOrCreate(array $attributes = [], array $values = [])
     * @method GstDetails firstOrFail(array $columns = ['*'])
     * @method GstDetails firstOrNew(array $attributes = [], array $values = [])
     * @method GstDetails firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GstDetails forceCreate(array $attributes)
     * @method _GstDetailsCollection|GstDetails[] fromQuery(string $query, array $bindings = [])
     * @method _GstDetailsCollection|GstDetails[] get(array|string $columns = ['*'])
     * @method GstDetails getModel()
     * @method GstDetails[] getModels(array|string $columns = ['*'])
     * @method _GstDetailsCollection|GstDetails[] hydrate(array $items)
     * @method GstDetails make(array $attributes = [])
     * @method GstDetails newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GstDetails[]|_GstDetailsCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|GstDetails[]|_GstDetailsCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GstDetails sole(array|string $columns = ['*'])
     * @method GstDetails updateOrCreate(array $attributes, array $values = [])
     */
    class _GstDetailsQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _MaterialCollectionProxy $average
     * @property-read _MaterialCollectionProxy $avg
     * @property-read _MaterialCollectionProxy $contains
     * @property-read _MaterialCollectionProxy $each
     * @property-read _MaterialCollectionProxy $every
     * @property-read _MaterialCollectionProxy $filter
     * @property-read _MaterialCollectionProxy $first
     * @property-read _MaterialCollectionProxy $flatMap
     * @property-read _MaterialCollectionProxy $groupBy
     * @property-read _MaterialCollectionProxy $keyBy
     * @property-read _MaterialCollectionProxy $map
     * @property-read _MaterialCollectionProxy $max
     * @property-read _MaterialCollectionProxy $min
     * @property-read _MaterialCollectionProxy $partition
     * @property-read _MaterialCollectionProxy $reject
     * @property-read _MaterialCollectionProxy $some
     * @property-read _MaterialCollectionProxy $sortBy
     * @property-read _MaterialCollectionProxy $sortByDesc
     * @property-read _MaterialCollectionProxy $sum
     * @property-read _MaterialCollectionProxy $unique
     */
    class _MaterialCollection extends _BaseCollection {}

    /**
     * @property _MaterialCollection|mixed $id
     * @property _MaterialCollection|mixed $name
     * @property _MaterialCollection|mixed $created_at
     * @property _MaterialCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MaterialCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MaterialCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MaterialCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MaterialCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MaterialCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MaterialCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _MaterialCollection delete()
     */
    class _MaterialCollectionProxy {}

    /**
     * @method _MaterialQueryBuilder whereId($value)
     * @method _MaterialQueryBuilder whereName($value)
     * @method _MaterialQueryBuilder whereCreatedAt($value)
     * @method _MaterialQueryBuilder whereUpdatedAt($value)
     * @method Material baseSole(array|string $columns = ['*'])
     * @method Material create(array $attributes = [])
     * @method _MaterialCollection|Material[] cursor()
     * @method Material|null find($id, array $columns = ['*'])
     * @method _MaterialCollection|Material[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Material findOrFail($id, array $columns = ['*'])
     * @method _MaterialCollection|Material[] findOrNew($id, array $columns = ['*'])
     * @method Material first(array|string $columns = ['*'])
     * @method Material firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Material firstOrCreate(array $attributes = [], array $values = [])
     * @method Material firstOrFail(array $columns = ['*'])
     * @method Material firstOrNew(array $attributes = [], array $values = [])
     * @method Material firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Material forceCreate(array $attributes)
     * @method _MaterialCollection|Material[] fromQuery(string $query, array $bindings = [])
     * @method _MaterialCollection|Material[] get(array|string $columns = ['*'])
     * @method Material getModel()
     * @method Material[] getModels(array|string $columns = ['*'])
     * @method _MaterialCollection|Material[] hydrate(array $items)
     * @method Material make(array $attributes = [])
     * @method Material newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Material[]|_MaterialCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Material[]|_MaterialCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Material sole(array|string $columns = ['*'])
     * @method Material updateOrCreate(array $attributes, array $values = [])
     */
    class _MaterialQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _PhoneNumberCollectionProxy $average
     * @property-read _PhoneNumberCollectionProxy $avg
     * @property-read _PhoneNumberCollectionProxy $contains
     * @property-read _PhoneNumberCollectionProxy $each
     * @property-read _PhoneNumberCollectionProxy $every
     * @property-read _PhoneNumberCollectionProxy $filter
     * @property-read _PhoneNumberCollectionProxy $first
     * @property-read _PhoneNumberCollectionProxy $flatMap
     * @property-read _PhoneNumberCollectionProxy $groupBy
     * @property-read _PhoneNumberCollectionProxy $keyBy
     * @property-read _PhoneNumberCollectionProxy $map
     * @property-read _PhoneNumberCollectionProxy $max
     * @property-read _PhoneNumberCollectionProxy $min
     * @property-read _PhoneNumberCollectionProxy $partition
     * @property-read _PhoneNumberCollectionProxy $reject
     * @property-read _PhoneNumberCollectionProxy $some
     * @property-read _PhoneNumberCollectionProxy $sortBy
     * @property-read _PhoneNumberCollectionProxy $sortByDesc
     * @property-read _PhoneNumberCollectionProxy $sum
     * @property-read _PhoneNumberCollectionProxy $unique
     */
    class _PhoneNumberCollection extends _BaseCollection {}

    /**
     * @property _PhoneNumberCollection|mixed $id
     * @property _PhoneNumberCollection|mixed $phone_number
     * @property _PhoneNumberCollection|mixed $company_id
     * @property _PhoneNumberCollection|mixed $phoneable_id
     * @property _PhoneNumberCollection|mixed $phoneable_type
     * @property _PhoneNumberCollection|mixed $created_at
     * @property _PhoneNumberCollection|mixed $updated_at
     * @property _PhoneNumberCollection|mixed $phoneable
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PhoneNumberCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PhoneNumberCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PhoneNumberCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PhoneNumberCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PhoneNumberCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PhoneNumberCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PhoneNumberCollection delete()
     */
    class _PhoneNumberCollectionProxy {}

    /**
     * @method _PhoneNumberQueryBuilder whereId($value)
     * @method _PhoneNumberQueryBuilder wherePhoneNumber($value)
     * @method _PhoneNumberQueryBuilder whereCompanyId($value)
     * @method _PhoneNumberQueryBuilder wherePhoneableId($value)
     * @method _PhoneNumberQueryBuilder wherePhoneableType($value)
     * @method _PhoneNumberQueryBuilder whereCreatedAt($value)
     * @method _PhoneNumberQueryBuilder whereUpdatedAt($value)
     * @method PhoneNumber baseSole(array|string $columns = ['*'])
     * @method PhoneNumber create(array $attributes = [])
     * @method _PhoneNumberCollection|PhoneNumber[] cursor()
     * @method PhoneNumber|null find($id, array $columns = ['*'])
     * @method _PhoneNumberCollection|PhoneNumber[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PhoneNumber findOrFail($id, array $columns = ['*'])
     * @method _PhoneNumberCollection|PhoneNumber[] findOrNew($id, array $columns = ['*'])
     * @method PhoneNumber first(array|string $columns = ['*'])
     * @method PhoneNumber firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method PhoneNumber firstOrCreate(array $attributes = [], array $values = [])
     * @method PhoneNumber firstOrFail(array $columns = ['*'])
     * @method PhoneNumber firstOrNew(array $attributes = [], array $values = [])
     * @method PhoneNumber firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PhoneNumber forceCreate(array $attributes)
     * @method _PhoneNumberCollection|PhoneNumber[] fromQuery(string $query, array $bindings = [])
     * @method _PhoneNumberCollection|PhoneNumber[] get(array|string $columns = ['*'])
     * @method PhoneNumber getModel()
     * @method PhoneNumber[] getModels(array|string $columns = ['*'])
     * @method _PhoneNumberCollection|PhoneNumber[] hydrate(array $items)
     * @method PhoneNumber make(array $attributes = [])
     * @method PhoneNumber newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PhoneNumber[]|_PhoneNumberCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PhoneNumber[]|_PhoneNumberCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PhoneNumber sole(array|string $columns = ['*'])
     * @method PhoneNumber updateOrCreate(array $attributes, array $values = [])
     */
    class _PhoneNumberQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Invoice\Models {

    use App\Domain\Invoice\Models\Invoice;
    use App\Domain\Invoice\Models\InvoiceStatus;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _InvoiceCollectionProxy $average
     * @property-read _InvoiceCollectionProxy $avg
     * @property-read _InvoiceCollectionProxy $contains
     * @property-read _InvoiceCollectionProxy $each
     * @property-read _InvoiceCollectionProxy $every
     * @property-read _InvoiceCollectionProxy $filter
     * @property-read _InvoiceCollectionProxy $first
     * @property-read _InvoiceCollectionProxy $flatMap
     * @property-read _InvoiceCollectionProxy $groupBy
     * @property-read _InvoiceCollectionProxy $keyBy
     * @property-read _InvoiceCollectionProxy $map
     * @property-read _InvoiceCollectionProxy $max
     * @property-read _InvoiceCollectionProxy $min
     * @property-read _InvoiceCollectionProxy $partition
     * @property-read _InvoiceCollectionProxy $reject
     * @property-read _InvoiceCollectionProxy $some
     * @property-read _InvoiceCollectionProxy $sortBy
     * @property-read _InvoiceCollectionProxy $sortByDesc
     * @property-read _InvoiceCollectionProxy $sum
     * @property-read _InvoiceCollectionProxy $unique
     */
    class _InvoiceCollection extends _BaseCollection {}

    /**
     * @property _InvoiceCollection|mixed $id
     * @property _InvoiceCollection|mixed $invoice_date
     * @property _InvoiceCollection|mixed $due_date
     * @property _InvoiceCollection|mixed $invoice_number
     * @property _InvoiceCollection|mixed $bill_number
     * @property _InvoiceCollection|mixed $items
     * @property _InvoiceCollection|mixed $reference_number
     * @property _InvoiceCollection|mixed $status
     * @property _InvoiceCollection|mixed $notes
     * @property _InvoiceCollection|mixed $amount_total
     * @property _InvoiceCollection|mixed $amount_paid
     * @property _InvoiceCollection|mixed $amount_due
     * @property _InvoiceCollection|mixed $consignee_id
     * @property _InvoiceCollection|mixed $company_id
     * @property _InvoiceCollection|mixed $created_at
     * @property _InvoiceCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _InvoiceCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _InvoiceCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _InvoiceCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _InvoiceCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _InvoiceCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _InvoiceCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _InvoiceCollection delete()
     */
    class _InvoiceCollectionProxy {}

    /**
     * @method _InvoiceQueryBuilder whereId($value)
     * @method _InvoiceQueryBuilder whereInvoiceDate($value)
     * @method _InvoiceQueryBuilder whereDueDate($value)
     * @method _InvoiceQueryBuilder whereInvoiceNumber($value)
     * @method _InvoiceQueryBuilder whereBillNumber($value)
     * @method _InvoiceQueryBuilder whereItems($value)
     * @method _InvoiceQueryBuilder whereReferenceNumber($value)
     * @method _InvoiceQueryBuilder whereStatus($value)
     * @method _InvoiceQueryBuilder whereNotes($value)
     * @method _InvoiceQueryBuilder whereAmountTotal($value)
     * @method _InvoiceQueryBuilder whereAmountPaid($value)
     * @method _InvoiceQueryBuilder whereAmountDue($value)
     * @method _InvoiceQueryBuilder whereConsigneeId($value)
     * @method _InvoiceQueryBuilder whereCompanyId($value)
     * @method _InvoiceQueryBuilder whereCreatedAt($value)
     * @method _InvoiceQueryBuilder whereUpdatedAt($value)
     * @method Invoice baseSole(array|string $columns = ['*'])
     * @method Invoice create(array $attributes = [])
     * @method _InvoiceCollection|Invoice[] cursor()
     * @method Invoice|null find($id, array $columns = ['*'])
     * @method _InvoiceCollection|Invoice[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Invoice findOrFail($id, array $columns = ['*'])
     * @method _InvoiceCollection|Invoice[] findOrNew($id, array $columns = ['*'])
     * @method Invoice first(array|string $columns = ['*'])
     * @method Invoice firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Invoice firstOrCreate(array $attributes = [], array $values = [])
     * @method Invoice firstOrFail(array $columns = ['*'])
     * @method Invoice firstOrNew(array $attributes = [], array $values = [])
     * @method Invoice firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Invoice forceCreate(array $attributes)
     * @method _InvoiceCollection|Invoice[] fromQuery(string $query, array $bindings = [])
     * @method _InvoiceCollection|Invoice[] get(array|string $columns = ['*'])
     * @method Invoice getModel()
     * @method Invoice[] getModels(array|string $columns = ['*'])
     * @method _InvoiceCollection|Invoice[] hydrate(array $items)
     * @method Invoice make(array $attributes = [])
     * @method Invoice newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Invoice[]|_InvoiceCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Invoice[]|_InvoiceCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Invoice sole(array|string $columns = ['*'])
     * @method Invoice updateOrCreate(array $attributes, array $values = [])
     */
    class _InvoiceQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _InvoiceStatusCollectionProxy $average
     * @property-read _InvoiceStatusCollectionProxy $avg
     * @property-read _InvoiceStatusCollectionProxy $contains
     * @property-read _InvoiceStatusCollectionProxy $each
     * @property-read _InvoiceStatusCollectionProxy $every
     * @property-read _InvoiceStatusCollectionProxy $filter
     * @property-read _InvoiceStatusCollectionProxy $first
     * @property-read _InvoiceStatusCollectionProxy $flatMap
     * @property-read _InvoiceStatusCollectionProxy $groupBy
     * @property-read _InvoiceStatusCollectionProxy $keyBy
     * @property-read _InvoiceStatusCollectionProxy $map
     * @property-read _InvoiceStatusCollectionProxy $max
     * @property-read _InvoiceStatusCollectionProxy $min
     * @property-read _InvoiceStatusCollectionProxy $partition
     * @property-read _InvoiceStatusCollectionProxy $reject
     * @property-read _InvoiceStatusCollectionProxy $some
     * @property-read _InvoiceStatusCollectionProxy $sortBy
     * @property-read _InvoiceStatusCollectionProxy $sortByDesc
     * @property-read _InvoiceStatusCollectionProxy $sum
     * @property-read _InvoiceStatusCollectionProxy $unique
     */
    class _InvoiceStatusCollection extends _BaseCollection {}

    /**
     * @property _InvoiceStatusCollection|mixed $id
     * @property _InvoiceStatusCollection|mixed $name
     * @property _InvoiceStatusCollection|mixed $created_at
     * @property _InvoiceStatusCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _InvoiceStatusCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _InvoiceStatusCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _InvoiceStatusCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _InvoiceStatusCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _InvoiceStatusCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _InvoiceStatusCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _InvoiceStatusCollection delete()
     */
    class _InvoiceStatusCollectionProxy {}

    /**
     * @method _InvoiceStatusQueryBuilder whereId($value)
     * @method _InvoiceStatusQueryBuilder whereName($value)
     * @method _InvoiceStatusQueryBuilder whereCreatedAt($value)
     * @method _InvoiceStatusQueryBuilder whereUpdatedAt($value)
     * @method InvoiceStatus baseSole(array|string $columns = ['*'])
     * @method InvoiceStatus create(array $attributes = [])
     * @method _InvoiceStatusCollection|InvoiceStatus[] cursor()
     * @method InvoiceStatus|null find($id, array $columns = ['*'])
     * @method _InvoiceStatusCollection|InvoiceStatus[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method InvoiceStatus findOrFail($id, array $columns = ['*'])
     * @method _InvoiceStatusCollection|InvoiceStatus[] findOrNew($id, array $columns = ['*'])
     * @method InvoiceStatus first(array|string $columns = ['*'])
     * @method InvoiceStatus firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method InvoiceStatus firstOrCreate(array $attributes = [], array $values = [])
     * @method InvoiceStatus firstOrFail(array $columns = ['*'])
     * @method InvoiceStatus firstOrNew(array $attributes = [], array $values = [])
     * @method InvoiceStatus firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InvoiceStatus forceCreate(array $attributes)
     * @method _InvoiceStatusCollection|InvoiceStatus[] fromQuery(string $query, array $bindings = [])
     * @method _InvoiceStatusCollection|InvoiceStatus[] get(array|string $columns = ['*'])
     * @method InvoiceStatus getModel()
     * @method InvoiceStatus[] getModels(array|string $columns = ['*'])
     * @method _InvoiceStatusCollection|InvoiceStatus[] hydrate(array $items)
     * @method InvoiceStatus make(array $attributes = [])
     * @method InvoiceStatus newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InvoiceStatus[]|_InvoiceStatusCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|InvoiceStatus[]|_InvoiceStatusCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InvoiceStatus sole(array|string $columns = ['*'])
     * @method InvoiceStatus updateOrCreate(array $attributes, array $values = [])
     */
    class _InvoiceStatusQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\LoadingPoint\Models {

    use App\Domain\LoadingPoint\Models\LoadingPoint;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _LoadingPointCollectionProxy $average
     * @property-read _LoadingPointCollectionProxy $avg
     * @property-read _LoadingPointCollectionProxy $contains
     * @property-read _LoadingPointCollectionProxy $each
     * @property-read _LoadingPointCollectionProxy $every
     * @property-read _LoadingPointCollectionProxy $filter
     * @property-read _LoadingPointCollectionProxy $first
     * @property-read _LoadingPointCollectionProxy $flatMap
     * @property-read _LoadingPointCollectionProxy $groupBy
     * @property-read _LoadingPointCollectionProxy $keyBy
     * @property-read _LoadingPointCollectionProxy $map
     * @property-read _LoadingPointCollectionProxy $max
     * @property-read _LoadingPointCollectionProxy $min
     * @property-read _LoadingPointCollectionProxy $partition
     * @property-read _LoadingPointCollectionProxy $reject
     * @property-read _LoadingPointCollectionProxy $some
     * @property-read _LoadingPointCollectionProxy $sortBy
     * @property-read _LoadingPointCollectionProxy $sortByDesc
     * @property-read _LoadingPointCollectionProxy $sum
     * @property-read _LoadingPointCollectionProxy $unique
     */
    class _LoadingPointCollection extends _BaseCollection {}

    /**
     * @property _LoadingPointCollection|mixed $id
     * @property _LoadingPointCollection|mixed $name
     * @property _LoadingPointCollection|mixed $short_code
     * @property _LoadingPointCollection|mixed $company_id
     * @property _LoadingPointCollection|mixed $created_at
     * @property _LoadingPointCollection|mixed $updated_at
     * @see \App\Domain\LoadingPoint\Models\LoadingPoint::totalProjects
     * @method _LoadingPointCollection totalProjects()
     * @see \App\Domain\LoadingPoint\Models\LoadingPoint::currentProjects
     * @method _LoadingPointCollection currentProjects()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _LoadingPointCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _LoadingPointCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _LoadingPointCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _LoadingPointCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _LoadingPointCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _LoadingPointCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _LoadingPointCollection delete()
     */
    class _LoadingPointCollectionProxy {}

    /**
     * @method _LoadingPointQueryBuilder whereId($value)
     * @method _LoadingPointQueryBuilder whereName($value)
     * @method _LoadingPointQueryBuilder whereShortCode($value)
     * @method _LoadingPointQueryBuilder whereCompanyId($value)
     * @method _LoadingPointQueryBuilder whereCreatedAt($value)
     * @method _LoadingPointQueryBuilder whereUpdatedAt($value)
     * @method LoadingPoint baseSole(array|string $columns = ['*'])
     * @method LoadingPoint create(array $attributes = [])
     * @method _LoadingPointCollection|LoadingPoint[] cursor()
     * @method LoadingPoint|null find($id, array $columns = ['*'])
     * @method _LoadingPointCollection|LoadingPoint[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method LoadingPoint findOrFail($id, array $columns = ['*'])
     * @method _LoadingPointCollection|LoadingPoint[] findOrNew($id, array $columns = ['*'])
     * @method LoadingPoint first(array|string $columns = ['*'])
     * @method LoadingPoint firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method LoadingPoint firstOrCreate(array $attributes = [], array $values = [])
     * @method LoadingPoint firstOrFail(array $columns = ['*'])
     * @method LoadingPoint firstOrNew(array $attributes = [], array $values = [])
     * @method LoadingPoint firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LoadingPoint forceCreate(array $attributes)
     * @method _LoadingPointCollection|LoadingPoint[] fromQuery(string $query, array $bindings = [])
     * @method _LoadingPointCollection|LoadingPoint[] get(array|string $columns = ['*'])
     * @method LoadingPoint getModel()
     * @method LoadingPoint[] getModels(array|string $columns = ['*'])
     * @method _LoadingPointCollection|LoadingPoint[] hydrate(array $items)
     * @method LoadingPoint make(array $attributes = [])
     * @method LoadingPoint newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LoadingPoint[]|_LoadingPointCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LoadingPoint[]|_LoadingPointCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LoadingPoint sole(array|string $columns = ['*'])
     * @method LoadingPoint updateOrCreate(array $attributes, array $values = [])
     */
    class _LoadingPointQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\MarketVehicle\Models {

    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _MarketVehicleCollectionProxy $average
     * @property-read _MarketVehicleCollectionProxy $avg
     * @property-read _MarketVehicleCollectionProxy $contains
     * @property-read _MarketVehicleCollectionProxy $each
     * @property-read _MarketVehicleCollectionProxy $every
     * @property-read _MarketVehicleCollectionProxy $filter
     * @property-read _MarketVehicleCollectionProxy $first
     * @property-read _MarketVehicleCollectionProxy $flatMap
     * @property-read _MarketVehicleCollectionProxy $groupBy
     * @property-read _MarketVehicleCollectionProxy $keyBy
     * @property-read _MarketVehicleCollectionProxy $map
     * @property-read _MarketVehicleCollectionProxy $max
     * @property-read _MarketVehicleCollectionProxy $min
     * @property-read _MarketVehicleCollectionProxy $partition
     * @property-read _MarketVehicleCollectionProxy $reject
     * @property-read _MarketVehicleCollectionProxy $some
     * @property-read _MarketVehicleCollectionProxy $sortBy
     * @property-read _MarketVehicleCollectionProxy $sortByDesc
     * @property-read _MarketVehicleCollectionProxy $sum
     * @property-read _MarketVehicleCollectionProxy $unique
     */
    class _MarketVehicleCollection extends _BaseCollection {}

    /**
     * @property _MarketVehicleCollection|mixed $id
     * @property _MarketVehicleCollection|mixed $number
     * @property _MarketVehicleCollection|mixed $party_id
     * @property _MarketVehicleCollection|mixed $company_id
     * @property _MarketVehicleCollection|mixed $created_at
     * @property _MarketVehicleCollection|mixed $updated_at
     * @see \App\Domain\MarketVehicle\Models\MarketVehicle::hsd
     * @method _MarketVehicleCollection hsd($party_id)
     * @see \App\Domain\MarketVehicle\Models\MarketVehicle::cash_advance
     * @method _MarketVehicleCollection cash_advance($party_id)
     * @see \App\Domain\MarketVehicle\Models\MarketVehicle::trips
     * @method _MarketVehicleCollection trips($party_id)
     * @see \App\Domain\MarketVehicle\Models\MarketVehicle::all_trips
     * @method _MarketVehicleCollection all_trips()
     * @see \App\Domain\MarketVehicle\Models\MarketVehicle::net_weight
     * @method _MarketVehicleCollection net_weight($party_id)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MarketVehicleCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MarketVehicleCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MarketVehicleCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MarketVehicleCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MarketVehicleCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MarketVehicleCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _MarketVehicleCollection delete()
     */
    class _MarketVehicleCollectionProxy {}

    /**
     * @method _MarketVehicleQueryBuilder whereId($value)
     * @method _MarketVehicleQueryBuilder whereNumber($value)
     * @method _MarketVehicleQueryBuilder wherePartyId($value)
     * @method _MarketVehicleQueryBuilder whereCompanyId($value)
     * @method _MarketVehicleQueryBuilder whereCreatedAt($value)
     * @method _MarketVehicleQueryBuilder whereUpdatedAt($value)
     * @method MarketVehicle baseSole(array|string $columns = ['*'])
     * @method MarketVehicle create(array $attributes = [])
     * @method _MarketVehicleCollection|MarketVehicle[] cursor()
     * @method MarketVehicle|null find($id, array $columns = ['*'])
     * @method _MarketVehicleCollection|MarketVehicle[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method MarketVehicle findOrFail($id, array $columns = ['*'])
     * @method _MarketVehicleCollection|MarketVehicle[] findOrNew($id, array $columns = ['*'])
     * @method MarketVehicle first(array|string $columns = ['*'])
     * @method MarketVehicle firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method MarketVehicle firstOrCreate(array $attributes = [], array $values = [])
     * @method MarketVehicle firstOrFail(array $columns = ['*'])
     * @method MarketVehicle firstOrNew(array $attributes = [], array $values = [])
     * @method MarketVehicle firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MarketVehicle forceCreate(array $attributes)
     * @method _MarketVehicleCollection|MarketVehicle[] fromQuery(string $query, array $bindings = [])
     * @method _MarketVehicleCollection|MarketVehicle[] get(array|string $columns = ['*'])
     * @method MarketVehicle getModel()
     * @method MarketVehicle[] getModels(array|string $columns = ['*'])
     * @method _MarketVehicleCollection|MarketVehicle[] hydrate(array $items)
     * @method MarketVehicle make(array $attributes = [])
     * @method MarketVehicle newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MarketVehicle[]|_MarketVehicleCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MarketVehicle[]|_MarketVehicleCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MarketVehicle sole(array|string $columns = ['*'])
     * @method MarketVehicle updateOrCreate(array $attributes, array $values = [])
     */
    class _MarketVehicleQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Office\Models {

    use App\Domain\Office\Models\Office;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _OfficeCollectionProxy $average
     * @property-read _OfficeCollectionProxy $avg
     * @property-read _OfficeCollectionProxy $contains
     * @property-read _OfficeCollectionProxy $each
     * @property-read _OfficeCollectionProxy $every
     * @property-read _OfficeCollectionProxy $filter
     * @property-read _OfficeCollectionProxy $first
     * @property-read _OfficeCollectionProxy $flatMap
     * @property-read _OfficeCollectionProxy $groupBy
     * @property-read _OfficeCollectionProxy $keyBy
     * @property-read _OfficeCollectionProxy $map
     * @property-read _OfficeCollectionProxy $max
     * @property-read _OfficeCollectionProxy $min
     * @property-read _OfficeCollectionProxy $partition
     * @property-read _OfficeCollectionProxy $reject
     * @property-read _OfficeCollectionProxy $some
     * @property-read _OfficeCollectionProxy $sortBy
     * @property-read _OfficeCollectionProxy $sortByDesc
     * @property-read _OfficeCollectionProxy $sum
     * @property-read _OfficeCollectionProxy $unique
     */
    class _OfficeCollection extends _BaseCollection {}

    /**
     * @property _OfficeCollection|mixed $id
     * @property _OfficeCollection|mixed $name
     * @property _OfficeCollection|mixed $company_id
     * @property _OfficeCollection|mixed $created_at
     * @property _OfficeCollection|mixed $updated_at
     * @property _OfficeCollection|mixed $company
     * @see \App\Domain\Office\Models\Office::total_employees
     * @method _OfficeCollection total_employees()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _OfficeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _OfficeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _OfficeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _OfficeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _OfficeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _OfficeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _OfficeCollection delete()
     */
    class _OfficeCollectionProxy {}

    /**
     * @method _OfficeQueryBuilder whereId($value)
     * @method _OfficeQueryBuilder whereName($value)
     * @method _OfficeQueryBuilder whereCompanyId($value)
     * @method _OfficeQueryBuilder whereCreatedAt($value)
     * @method _OfficeQueryBuilder whereUpdatedAt($value)
     * @method Office baseSole(array|string $columns = ['*'])
     * @method Office create(array $attributes = [])
     * @method _OfficeCollection|Office[] cursor()
     * @method Office|null find($id, array $columns = ['*'])
     * @method _OfficeCollection|Office[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Office findOrFail($id, array $columns = ['*'])
     * @method _OfficeCollection|Office[] findOrNew($id, array $columns = ['*'])
     * @method Office first(array|string $columns = ['*'])
     * @method Office firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Office firstOrCreate(array $attributes = [], array $values = [])
     * @method Office firstOrFail(array $columns = ['*'])
     * @method Office firstOrNew(array $attributes = [], array $values = [])
     * @method Office firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Office forceCreate(array $attributes)
     * @method _OfficeCollection|Office[] fromQuery(string $query, array $bindings = [])
     * @method _OfficeCollection|Office[] get(array|string $columns = ['*'])
     * @method Office getModel()
     * @method Office[] getModels(array|string $columns = ['*'])
     * @method _OfficeCollection|Office[] hydrate(array $items)
     * @method Office make(array $attributes = [])
     * @method Office newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Office[]|_OfficeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Office[]|_OfficeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Office sole(array|string $columns = ['*'])
     * @method Office updateOrCreate(array $attributes, array $values = [])
     */
    class _OfficeQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Party\Models {

    use App\Domain\Party\Models\Party;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\MediaLibrary\MediaCollections\FileAdder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    /**
     * @property-read _PartyCollectionProxy $average
     * @property-read _PartyCollectionProxy $avg
     * @property-read _PartyCollectionProxy $contains
     * @property-read _PartyCollectionProxy $each
     * @property-read _PartyCollectionProxy $every
     * @property-read _PartyCollectionProxy $filter
     * @property-read _PartyCollectionProxy $first
     * @property-read _PartyCollectionProxy $flatMap
     * @property-read _PartyCollectionProxy $groupBy
     * @property-read _PartyCollectionProxy $keyBy
     * @property-read _PartyCollectionProxy $map
     * @property-read _PartyCollectionProxy $max
     * @property-read _PartyCollectionProxy $min
     * @property-read _PartyCollectionProxy $partition
     * @property-read _PartyCollectionProxy $reject
     * @property-read _PartyCollectionProxy $some
     * @property-read _PartyCollectionProxy $sortBy
     * @property-read _PartyCollectionProxy $sortByDesc
     * @property-read _PartyCollectionProxy $sum
     * @property-read _PartyCollectionProxy $unique
     */
    class _PartyCollection extends _BaseCollection {}

    /**
     * @property _PartyCollection|mixed $id
     * @property _PartyCollection|mixed $name
     * @property _PartyCollection|mixed $pan
     * @property _PartyCollection|mixed $razorpay_contact_id
     * @property _PartyCollection|mixed $company_id
     * @property _PartyCollection|mixed $created_at
     * @property _PartyCollection|mixed $updated_at
     * @property _PartyCollection|mixed $phoneNumber
     * @see \App\Domain\Party\Models\Party::totalBusiness
     * @method _PartyCollection totalBusiness()
     * @see \App\Domain\Party\Models\Party::totalMaterialTransported
     * @method _PartyCollection totalMaterialTransported()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollection
     * @method _PartyCollection clearMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::hasMedia
     * @method _PartyCollection hasMedia(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaCollection
     * @method _PartyCollection addMediaCollection(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deleteMedia
     * @method _PartyCollection deleteMedia(int|Media $mediaId)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaPath
     * @method _PartyCollection getFirstMediaPath(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMediaCollection
     * @method _PartyCollection getMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::shouldDeletePreservingMedia
     * @method _PartyCollection shouldDeletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMultipleMediaFromRequest
     * @method _PartyCollection addMultipleMediaFromRequest(array $keys)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addAllMediaFromRequest
     * @method _PartyCollection addAllMediaFromRequest()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaUrl
     * @method _PartyCollection getFallbackMediaUrl(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaCollections
     * @method _PartyCollection registerMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaConversions
     * @method _PartyCollection registerMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::syncFromMediaLibraryRequest
     * @method _PartyCollection syncFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaConversion
     * @method _PartyCollection addMediaConversion(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerAllMediaConversions
     * @method _PartyCollection registerAllMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::loadMedia
     * @method _PartyCollection loadMedia(string $collectionName)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::updateMedia
     * @method _PartyCollection updateMedia(array $newMediaArray, string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deletePreservingMedia
     * @method _PartyCollection deletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromDisk
     * @method _PartyCollection addMediaFromDisk(string $key, string $disk = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaUrl
     * @method _PartyCollection getFirstMediaUrl(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromUrl
     * @method _PartyCollection addMediaFromUrl(string $url, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMedia
     * @method _PartyCollection addMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::copyMedia
     * @method _PartyCollection copyMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromString
     * @method _PartyCollection addMediaFromString(string $text)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromRequest
     * @method _PartyCollection addMediaFromRequest(string $key)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstTemporaryUrl
     * @method _PartyCollection getFirstTemporaryUrl(\DateTimeInterface $expiration, string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaPath
     * @method _PartyCollection getFallbackMediaPath(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromBase64
     * @method _PartyCollection addMediaFromBase64(string $base64data, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMedia
     * @method _PartyCollection getMedia(string $collectionName = 'default', array|callable $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getRegisteredMediaCollections
     * @method _PartyCollection getRegisteredMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMedia
     * @method _PartyCollection getFirstMedia(string $collectionName = 'default', $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollectionExcept
     * @method _PartyCollection clearMediaCollectionExcept(string $collectionName = 'default', Collection|Media[] $excludedMedia = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addFromMediaLibraryRequest
     * @method _PartyCollection addFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::processUnattachedMedia
     * @method _PartyCollection processUnattachedMedia(callable $callable)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::prepareToAttachMedia
     * @method _PartyCollection prepareToAttachMedia(Media $media, FileAdder $fileAdder)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PartyCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PartyCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PartyCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PartyCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PartyCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PartyCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PartyCollection delete()
     */
    class _PartyCollectionProxy {}

    /**
     * @method _PartyQueryBuilder whereId($value)
     * @method _PartyQueryBuilder whereName($value)
     * @method _PartyQueryBuilder wherePan($value)
     * @method _PartyQueryBuilder whereRazorpayContactId($value)
     * @method _PartyQueryBuilder whereCompanyId($value)
     * @method _PartyQueryBuilder whereCreatedAt($value)
     * @method _PartyQueryBuilder whereUpdatedAt($value)
     * @method Party baseSole(array|string $columns = ['*'])
     * @method Party create(array $attributes = [])
     * @method _PartyCollection|Party[] cursor()
     * @method Party|null find($id, array $columns = ['*'])
     * @method _PartyCollection|Party[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Party findOrFail($id, array $columns = ['*'])
     * @method _PartyCollection|Party[] findOrNew($id, array $columns = ['*'])
     * @method Party first(array|string $columns = ['*'])
     * @method Party firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Party firstOrCreate(array $attributes = [], array $values = [])
     * @method Party firstOrFail(array $columns = ['*'])
     * @method Party firstOrNew(array $attributes = [], array $values = [])
     * @method Party firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Party forceCreate(array $attributes)
     * @method _PartyCollection|Party[] fromQuery(string $query, array $bindings = [])
     * @method _PartyCollection|Party[] get(array|string $columns = ['*'])
     * @method Party getModel()
     * @method Party[] getModels(array|string $columns = ['*'])
     * @method _PartyCollection|Party[] hydrate(array $items)
     * @method Party make(array $attributes = [])
     * @method Party newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Party[]|_PartyCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Party[]|_PartyCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Party sole(array|string $columns = ['*'])
     * @method Party updateOrCreate(array $attributes, array $values = [])
     */
    class _PartyQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Payee\Models {

    use App\Domain\Payee\Models\Payee;
    use App\Domain\Payee\Models\PayeeType;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _PayeeCollectionProxy $average
     * @property-read _PayeeCollectionProxy $avg
     * @property-read _PayeeCollectionProxy $contains
     * @property-read _PayeeCollectionProxy $each
     * @property-read _PayeeCollectionProxy $every
     * @property-read _PayeeCollectionProxy $filter
     * @property-read _PayeeCollectionProxy $first
     * @property-read _PayeeCollectionProxy $flatMap
     * @property-read _PayeeCollectionProxy $groupBy
     * @property-read _PayeeCollectionProxy $keyBy
     * @property-read _PayeeCollectionProxy $map
     * @property-read _PayeeCollectionProxy $max
     * @property-read _PayeeCollectionProxy $min
     * @property-read _PayeeCollectionProxy $partition
     * @property-read _PayeeCollectionProxy $reject
     * @property-read _PayeeCollectionProxy $some
     * @property-read _PayeeCollectionProxy $sortBy
     * @property-read _PayeeCollectionProxy $sortByDesc
     * @property-read _PayeeCollectionProxy $sum
     * @property-read _PayeeCollectionProxy $unique
     */
    class _PayeeCollection extends _BaseCollection {}

    /**
     * @property _PayeeCollection|mixed $id
     * @property _PayeeCollection|mixed $name
     * @property _PayeeCollection|mixed $payee_type_id
     * @property _PayeeCollection|mixed $company_id
     * @property _PayeeCollection|mixed $created_at
     * @property _PayeeCollection|mixed $updated_at
     * @property _PayeeCollection|mixed $company
     * @property _PayeeCollection|mixed $payeeType
     * @see \App\Domain\Payee\Models\Payee::totalAmountPaid
     * @method _PayeeCollection totalAmountPaid()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PayeeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PayeeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PayeeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PayeeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PayeeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PayeeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PayeeCollection delete()
     */
    class _PayeeCollectionProxy {}

    /**
     * @method _PayeeQueryBuilder whereId($value)
     * @method _PayeeQueryBuilder whereName($value)
     * @method _PayeeQueryBuilder wherePayeeTypeId($value)
     * @method _PayeeQueryBuilder whereCompanyId($value)
     * @method _PayeeQueryBuilder whereCreatedAt($value)
     * @method _PayeeQueryBuilder whereUpdatedAt($value)
     * @method Payee baseSole(array|string $columns = ['*'])
     * @method Payee create(array $attributes = [])
     * @method _PayeeCollection|Payee[] cursor()
     * @method Payee|null find($id, array $columns = ['*'])
     * @method _PayeeCollection|Payee[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Payee findOrFail($id, array $columns = ['*'])
     * @method _PayeeCollection|Payee[] findOrNew($id, array $columns = ['*'])
     * @method Payee first(array|string $columns = ['*'])
     * @method Payee firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Payee firstOrCreate(array $attributes = [], array $values = [])
     * @method Payee firstOrFail(array $columns = ['*'])
     * @method Payee firstOrNew(array $attributes = [], array $values = [])
     * @method Payee firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Payee forceCreate(array $attributes)
     * @method _PayeeCollection|Payee[] fromQuery(string $query, array $bindings = [])
     * @method _PayeeCollection|Payee[] get(array|string $columns = ['*'])
     * @method Payee getModel()
     * @method Payee[] getModels(array|string $columns = ['*'])
     * @method _PayeeCollection|Payee[] hydrate(array $items)
     * @method Payee make(array $attributes = [])
     * @method Payee newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Payee[]|_PayeeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Payee[]|_PayeeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payee sole(array|string $columns = ['*'])
     * @method Payee updateOrCreate(array $attributes, array $values = [])
     */
    class _PayeeQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _PayeeTypeCollectionProxy $average
     * @property-read _PayeeTypeCollectionProxy $avg
     * @property-read _PayeeTypeCollectionProxy $contains
     * @property-read _PayeeTypeCollectionProxy $each
     * @property-read _PayeeTypeCollectionProxy $every
     * @property-read _PayeeTypeCollectionProxy $filter
     * @property-read _PayeeTypeCollectionProxy $first
     * @property-read _PayeeTypeCollectionProxy $flatMap
     * @property-read _PayeeTypeCollectionProxy $groupBy
     * @property-read _PayeeTypeCollectionProxy $keyBy
     * @property-read _PayeeTypeCollectionProxy $map
     * @property-read _PayeeTypeCollectionProxy $max
     * @property-read _PayeeTypeCollectionProxy $min
     * @property-read _PayeeTypeCollectionProxy $partition
     * @property-read _PayeeTypeCollectionProxy $reject
     * @property-read _PayeeTypeCollectionProxy $some
     * @property-read _PayeeTypeCollectionProxy $sortBy
     * @property-read _PayeeTypeCollectionProxy $sortByDesc
     * @property-read _PayeeTypeCollectionProxy $sum
     * @property-read _PayeeTypeCollectionProxy $unique
     */
    class _PayeeTypeCollection extends _BaseCollection {}

    /**
     * @property _PayeeTypeCollection|mixed $id
     * @property _PayeeTypeCollection|mixed $name
     * @property _PayeeTypeCollection|mixed $created_at
     * @property _PayeeTypeCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PayeeTypeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PayeeTypeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PayeeTypeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PayeeTypeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PayeeTypeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PayeeTypeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PayeeTypeCollection delete()
     */
    class _PayeeTypeCollectionProxy {}

    /**
     * @method _PayeeTypeQueryBuilder whereId($value)
     * @method _PayeeTypeQueryBuilder whereName($value)
     * @method _PayeeTypeQueryBuilder whereCreatedAt($value)
     * @method _PayeeTypeQueryBuilder whereUpdatedAt($value)
     * @method PayeeType baseSole(array|string $columns = ['*'])
     * @method PayeeType create(array $attributes = [])
     * @method _PayeeTypeCollection|PayeeType[] cursor()
     * @method PayeeType|null find($id, array $columns = ['*'])
     * @method _PayeeTypeCollection|PayeeType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PayeeType findOrFail($id, array $columns = ['*'])
     * @method _PayeeTypeCollection|PayeeType[] findOrNew($id, array $columns = ['*'])
     * @method PayeeType first(array|string $columns = ['*'])
     * @method PayeeType firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method PayeeType firstOrCreate(array $attributes = [], array $values = [])
     * @method PayeeType firstOrFail(array $columns = ['*'])
     * @method PayeeType firstOrNew(array $attributes = [], array $values = [])
     * @method PayeeType firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PayeeType forceCreate(array $attributes)
     * @method _PayeeTypeCollection|PayeeType[] fromQuery(string $query, array $bindings = [])
     * @method _PayeeTypeCollection|PayeeType[] get(array|string $columns = ['*'])
     * @method PayeeType getModel()
     * @method PayeeType[] getModels(array|string $columns = ['*'])
     * @method _PayeeTypeCollection|PayeeType[] hydrate(array $items)
     * @method PayeeType make(array $attributes = [])
     * @method PayeeType newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PayeeType[]|_PayeeTypeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PayeeType[]|_PayeeTypeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PayeeType sole(array|string $columns = ['*'])
     * @method PayeeType updateOrCreate(array $attributes, array $values = [])
     */
    class _PayeeTypeQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Payment\Models {

    use App\Domain\Payment\Models\BankAccount;
    use App\Domain\Payment\Models\Payment;
    use App\Domain\Payment\Models\PaymentMethod;
    use App\Domain\Payment\Models\PaymentStatus;
    use App\Domain\Payment\Models\TaxCategory;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\MediaLibrary\MediaCollections\FileAdder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    /**
     * @property-read _BankAccountCollectionProxy $average
     * @property-read _BankAccountCollectionProxy $avg
     * @property-read _BankAccountCollectionProxy $contains
     * @property-read _BankAccountCollectionProxy $each
     * @property-read _BankAccountCollectionProxy $every
     * @property-read _BankAccountCollectionProxy $filter
     * @property-read _BankAccountCollectionProxy $first
     * @property-read _BankAccountCollectionProxy $flatMap
     * @property-read _BankAccountCollectionProxy $groupBy
     * @property-read _BankAccountCollectionProxy $keyBy
     * @property-read _BankAccountCollectionProxy $map
     * @property-read _BankAccountCollectionProxy $max
     * @property-read _BankAccountCollectionProxy $min
     * @property-read _BankAccountCollectionProxy $partition
     * @property-read _BankAccountCollectionProxy $reject
     * @property-read _BankAccountCollectionProxy $some
     * @property-read _BankAccountCollectionProxy $sortBy
     * @property-read _BankAccountCollectionProxy $sortByDesc
     * @property-read _BankAccountCollectionProxy $sum
     * @property-read _BankAccountCollectionProxy $unique
     */
    class _BankAccountCollection extends _BaseCollection {}

    /**
     * @property _BankAccountCollection|mixed $id
     * @property _BankAccountCollection|mixed $account_name
     * @property _BankAccountCollection|mixed $account_number
     * @property _BankAccountCollection|mixed $ifsc_code
     * @property _BankAccountCollection|mixed $bankable_id
     * @property _BankAccountCollection|mixed $bankable_type
     * @property _BankAccountCollection|mixed $fund_account_id
     * @property _BankAccountCollection|mixed $company_id
     * @property _BankAccountCollection|mixed $created_at
     * @property _BankAccountCollection|mixed $updated_at
     * @property _BankAccountCollection|mixed $bankable
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _BankAccountCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _BankAccountCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _BankAccountCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _BankAccountCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _BankAccountCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _BankAccountCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _BankAccountCollection delete()
     */
    class _BankAccountCollectionProxy {}

    /**
     * @method _BankAccountQueryBuilder whereId($value)
     * @method _BankAccountQueryBuilder whereAccountName($value)
     * @method _BankAccountQueryBuilder whereAccountNumber($value)
     * @method _BankAccountQueryBuilder whereIfscCode($value)
     * @method _BankAccountQueryBuilder whereBankableId($value)
     * @method _BankAccountQueryBuilder whereBankableType($value)
     * @method _BankAccountQueryBuilder whereFundAccountId($value)
     * @method _BankAccountQueryBuilder whereCompanyId($value)
     * @method _BankAccountQueryBuilder whereCreatedAt($value)
     * @method _BankAccountQueryBuilder whereUpdatedAt($value)
     * @method BankAccount baseSole(array|string $columns = ['*'])
     * @method BankAccount create(array $attributes = [])
     * @method _BankAccountCollection|BankAccount[] cursor()
     * @method BankAccount|null find($id, array $columns = ['*'])
     * @method _BankAccountCollection|BankAccount[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method BankAccount findOrFail($id, array $columns = ['*'])
     * @method _BankAccountCollection|BankAccount[] findOrNew($id, array $columns = ['*'])
     * @method BankAccount first(array|string $columns = ['*'])
     * @method BankAccount firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method BankAccount firstOrCreate(array $attributes = [], array $values = [])
     * @method BankAccount firstOrFail(array $columns = ['*'])
     * @method BankAccount firstOrNew(array $attributes = [], array $values = [])
     * @method BankAccount firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BankAccount forceCreate(array $attributes)
     * @method _BankAccountCollection|BankAccount[] fromQuery(string $query, array $bindings = [])
     * @method _BankAccountCollection|BankAccount[] get(array|string $columns = ['*'])
     * @method BankAccount getModel()
     * @method BankAccount[] getModels(array|string $columns = ['*'])
     * @method _BankAccountCollection|BankAccount[] hydrate(array $items)
     * @method BankAccount make(array $attributes = [])
     * @method BankAccount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BankAccount[]|_BankAccountCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BankAccount[]|_BankAccountCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BankAccount sole(array|string $columns = ['*'])
     * @method BankAccount updateOrCreate(array $attributes, array $values = [])
     */
    class _BankAccountQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _PaymentCollectionProxy $average
     * @property-read _PaymentCollectionProxy $avg
     * @property-read _PaymentCollectionProxy $contains
     * @property-read _PaymentCollectionProxy $each
     * @property-read _PaymentCollectionProxy $every
     * @property-read _PaymentCollectionProxy $filter
     * @property-read _PaymentCollectionProxy $first
     * @property-read _PaymentCollectionProxy $flatMap
     * @property-read _PaymentCollectionProxy $groupBy
     * @property-read _PaymentCollectionProxy $keyBy
     * @property-read _PaymentCollectionProxy $map
     * @property-read _PaymentCollectionProxy $max
     * @property-read _PaymentCollectionProxy $min
     * @property-read _PaymentCollectionProxy $partition
     * @property-read _PaymentCollectionProxy $reject
     * @property-read _PaymentCollectionProxy $some
     * @property-read _PaymentCollectionProxy $sortBy
     * @property-read _PaymentCollectionProxy $sortByDesc
     * @property-read _PaymentCollectionProxy $sum
     * @property-read _PaymentCollectionProxy $unique
     */
    class _PaymentCollection extends _BaseCollection {}

    /**
     * @property _PaymentCollection|mixed $id
     * @property _PaymentCollection|mixed $amount
     * @property _PaymentCollection|mixed $bank_account_id
     * @property _PaymentCollection|mixed $payment_method_id
     * @property _PaymentCollection|mixed $payment_status_id
     * @property _PaymentCollection|mixed $fees
     * @property _PaymentCollection|mixed $remarks
     * @property _PaymentCollection|mixed $utr_number
     * @property _PaymentCollection|mixed $razorpay_payout_id
     * @property _PaymentCollection|mixed $company_id
     * @property _PaymentCollection|mixed $created_by
     * @property _PaymentCollection|mixed $finished_by
     * @property _PaymentCollection|mixed $created_at
     * @property _PaymentCollection|mixed $updated_at
     * @property _PaymentCollection|mixed $trip_id
     * @property _PaymentCollection|mixed $bankAccount
     * @property _PaymentCollection|mixed $method
     * @property _PaymentCollection|mixed $status
     * @property _PaymentCollection|mixed $trip
     * @see \App\Domain\Payment\Models\Payment::type
     * @method _PaymentCollection type()
     * @see \App\Domain\Payment\Models\Payment::getAmountAttribute
     * @method _PaymentCollection getAmountAttribute($amount)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollection
     * @method _PaymentCollection clearMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::hasMedia
     * @method _PaymentCollection hasMedia(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaCollection
     * @method _PaymentCollection addMediaCollection(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deleteMedia
     * @method _PaymentCollection deleteMedia(int|Media $mediaId)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaPath
     * @method _PaymentCollection getFirstMediaPath(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMediaCollection
     * @method _PaymentCollection getMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::shouldDeletePreservingMedia
     * @method _PaymentCollection shouldDeletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMultipleMediaFromRequest
     * @method _PaymentCollection addMultipleMediaFromRequest(array $keys)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addAllMediaFromRequest
     * @method _PaymentCollection addAllMediaFromRequest()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaUrl
     * @method _PaymentCollection getFallbackMediaUrl(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaCollections
     * @method _PaymentCollection registerMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaConversions
     * @method _PaymentCollection registerMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::syncFromMediaLibraryRequest
     * @method _PaymentCollection syncFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaConversion
     * @method _PaymentCollection addMediaConversion(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerAllMediaConversions
     * @method _PaymentCollection registerAllMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::loadMedia
     * @method _PaymentCollection loadMedia(string $collectionName)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::updateMedia
     * @method _PaymentCollection updateMedia(array $newMediaArray, string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deletePreservingMedia
     * @method _PaymentCollection deletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromDisk
     * @method _PaymentCollection addMediaFromDisk(string $key, string $disk = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaUrl
     * @method _PaymentCollection getFirstMediaUrl(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromUrl
     * @method _PaymentCollection addMediaFromUrl(string $url, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMedia
     * @method _PaymentCollection addMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::copyMedia
     * @method _PaymentCollection copyMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromString
     * @method _PaymentCollection addMediaFromString(string $text)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromRequest
     * @method _PaymentCollection addMediaFromRequest(string $key)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstTemporaryUrl
     * @method _PaymentCollection getFirstTemporaryUrl(\DateTimeInterface $expiration, string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaPath
     * @method _PaymentCollection getFallbackMediaPath(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromBase64
     * @method _PaymentCollection addMediaFromBase64(string $base64data, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMedia
     * @method _PaymentCollection getMedia(string $collectionName = 'default', array|callable $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getRegisteredMediaCollections
     * @method _PaymentCollection getRegisteredMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMedia
     * @method _PaymentCollection getFirstMedia(string $collectionName = 'default', $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollectionExcept
     * @method _PaymentCollection clearMediaCollectionExcept(string $collectionName = 'default', Collection|Media[] $excludedMedia = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addFromMediaLibraryRequest
     * @method _PaymentCollection addFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::processUnattachedMedia
     * @method _PaymentCollection processUnattachedMedia(callable $callable)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::prepareToAttachMedia
     * @method _PaymentCollection prepareToAttachMedia(Media $media, FileAdder $fileAdder)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PaymentCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PaymentCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PaymentCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PaymentCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PaymentCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PaymentCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PaymentCollection delete()
     */
    class _PaymentCollectionProxy {}

    /**
     * @property-read _PaymentMethodCollectionProxy $average
     * @property-read _PaymentMethodCollectionProxy $avg
     * @property-read _PaymentMethodCollectionProxy $contains
     * @property-read _PaymentMethodCollectionProxy $each
     * @property-read _PaymentMethodCollectionProxy $every
     * @property-read _PaymentMethodCollectionProxy $filter
     * @property-read _PaymentMethodCollectionProxy $first
     * @property-read _PaymentMethodCollectionProxy $flatMap
     * @property-read _PaymentMethodCollectionProxy $groupBy
     * @property-read _PaymentMethodCollectionProxy $keyBy
     * @property-read _PaymentMethodCollectionProxy $map
     * @property-read _PaymentMethodCollectionProxy $max
     * @property-read _PaymentMethodCollectionProxy $min
     * @property-read _PaymentMethodCollectionProxy $partition
     * @property-read _PaymentMethodCollectionProxy $reject
     * @property-read _PaymentMethodCollectionProxy $some
     * @property-read _PaymentMethodCollectionProxy $sortBy
     * @property-read _PaymentMethodCollectionProxy $sortByDesc
     * @property-read _PaymentMethodCollectionProxy $sum
     * @property-read _PaymentMethodCollectionProxy $unique
     */
    class _PaymentMethodCollection extends _BaseCollection {}

    /**
     * @property _PaymentMethodCollection|mixed $id
     * @property _PaymentMethodCollection|mixed $name
     * @property _PaymentMethodCollection|mixed $created_at
     * @property _PaymentMethodCollection|mixed $updated_at
     * @property _PaymentMethodCollection|mixed $paymentable
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PaymentMethodCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PaymentMethodCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PaymentMethodCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PaymentMethodCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PaymentMethodCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PaymentMethodCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PaymentMethodCollection delete()
     */
    class _PaymentMethodCollectionProxy {}

    /**
     * @method _PaymentMethodQueryBuilder whereId($value)
     * @method _PaymentMethodQueryBuilder whereName($value)
     * @method _PaymentMethodQueryBuilder whereCreatedAt($value)
     * @method _PaymentMethodQueryBuilder whereUpdatedAt($value)
     * @method PaymentMethod baseSole(array|string $columns = ['*'])
     * @method PaymentMethod create(array $attributes = [])
     * @method _PaymentMethodCollection|PaymentMethod[] cursor()
     * @method PaymentMethod|null find($id, array $columns = ['*'])
     * @method _PaymentMethodCollection|PaymentMethod[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PaymentMethod findOrFail($id, array $columns = ['*'])
     * @method _PaymentMethodCollection|PaymentMethod[] findOrNew($id, array $columns = ['*'])
     * @method PaymentMethod first(array|string $columns = ['*'])
     * @method PaymentMethod firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method PaymentMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method PaymentMethod firstOrFail(array $columns = ['*'])
     * @method PaymentMethod firstOrNew(array $attributes = [], array $values = [])
     * @method PaymentMethod firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaymentMethod forceCreate(array $attributes)
     * @method _PaymentMethodCollection|PaymentMethod[] fromQuery(string $query, array $bindings = [])
     * @method _PaymentMethodCollection|PaymentMethod[] get(array|string $columns = ['*'])
     * @method PaymentMethod getModel()
     * @method PaymentMethod[] getModels(array|string $columns = ['*'])
     * @method _PaymentMethodCollection|PaymentMethod[] hydrate(array $items)
     * @method PaymentMethod make(array $attributes = [])
     * @method PaymentMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaymentMethod[]|_PaymentMethodCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaymentMethod[]|_PaymentMethodCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentMethod sole(array|string $columns = ['*'])
     * @method PaymentMethod updateOrCreate(array $attributes, array $values = [])
     */
    class _PaymentMethodQueryBuilder extends _BaseBuilder {}

    /**
     * @method _PaymentQueryBuilder whereId($value)
     * @method _PaymentQueryBuilder whereAmount($value)
     * @method _PaymentQueryBuilder whereBankAccountId($value)
     * @method _PaymentQueryBuilder wherePaymentMethodId($value)
     * @method _PaymentQueryBuilder wherePaymentStatusId($value)
     * @method _PaymentQueryBuilder whereFees($value)
     * @method _PaymentQueryBuilder whereRemarks($value)
     * @method _PaymentQueryBuilder whereUtrNumber($value)
     * @method _PaymentQueryBuilder whereRazorpayPayoutId($value)
     * @method _PaymentQueryBuilder whereCompanyId($value)
     * @method _PaymentQueryBuilder whereCreatedBy($value)
     * @method _PaymentQueryBuilder whereFinishedBy($value)
     * @method _PaymentQueryBuilder whereCreatedAt($value)
     * @method _PaymentQueryBuilder whereUpdatedAt($value)
     * @method _PaymentQueryBuilder whereTripId($value)
     * @method Payment baseSole(array|string $columns = ['*'])
     * @method Payment create(array $attributes = [])
     * @method _PaymentCollection|Payment[] cursor()
     * @method Payment|null find($id, array $columns = ['*'])
     * @method _PaymentCollection|Payment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Payment findOrFail($id, array $columns = ['*'])
     * @method _PaymentCollection|Payment[] findOrNew($id, array $columns = ['*'])
     * @method Payment first(array|string $columns = ['*'])
     * @method Payment firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Payment firstOrCreate(array $attributes = [], array $values = [])
     * @method Payment firstOrFail(array $columns = ['*'])
     * @method Payment firstOrNew(array $attributes = [], array $values = [])
     * @method Payment firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Payment forceCreate(array $attributes)
     * @method _PaymentCollection|Payment[] fromQuery(string $query, array $bindings = [])
     * @method _PaymentCollection|Payment[] get(array|string $columns = ['*'])
     * @method Payment getModel()
     * @method Payment[] getModels(array|string $columns = ['*'])
     * @method _PaymentCollection|Payment[] hydrate(array $items)
     * @method Payment make(array $attributes = [])
     * @method Payment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Payment[]|_PaymentCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Payment[]|_PaymentCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payment sole(array|string $columns = ['*'])
     * @method Payment updateOrCreate(array $attributes, array $values = [])
     */
    class _PaymentQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _PaymentStatusCollectionProxy $average
     * @property-read _PaymentStatusCollectionProxy $avg
     * @property-read _PaymentStatusCollectionProxy $contains
     * @property-read _PaymentStatusCollectionProxy $each
     * @property-read _PaymentStatusCollectionProxy $every
     * @property-read _PaymentStatusCollectionProxy $filter
     * @property-read _PaymentStatusCollectionProxy $first
     * @property-read _PaymentStatusCollectionProxy $flatMap
     * @property-read _PaymentStatusCollectionProxy $groupBy
     * @property-read _PaymentStatusCollectionProxy $keyBy
     * @property-read _PaymentStatusCollectionProxy $map
     * @property-read _PaymentStatusCollectionProxy $max
     * @property-read _PaymentStatusCollectionProxy $min
     * @property-read _PaymentStatusCollectionProxy $partition
     * @property-read _PaymentStatusCollectionProxy $reject
     * @property-read _PaymentStatusCollectionProxy $some
     * @property-read _PaymentStatusCollectionProxy $sortBy
     * @property-read _PaymentStatusCollectionProxy $sortByDesc
     * @property-read _PaymentStatusCollectionProxy $sum
     * @property-read _PaymentStatusCollectionProxy $unique
     */
    class _PaymentStatusCollection extends _BaseCollection {}

    /**
     * @property _PaymentStatusCollection|mixed $id
     * @property _PaymentStatusCollection|mixed $name
     * @property _PaymentStatusCollection|mixed $desc
     * @property _PaymentStatusCollection|mixed $created_at
     * @property _PaymentStatusCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PaymentStatusCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PaymentStatusCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PaymentStatusCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PaymentStatusCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PaymentStatusCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PaymentStatusCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PaymentStatusCollection delete()
     */
    class _PaymentStatusCollectionProxy {}

    /**
     * @method _PaymentStatusQueryBuilder whereId($value)
     * @method _PaymentStatusQueryBuilder whereName($value)
     * @method _PaymentStatusQueryBuilder whereDesc($value)
     * @method _PaymentStatusQueryBuilder whereCreatedAt($value)
     * @method _PaymentStatusQueryBuilder whereUpdatedAt($value)
     * @method PaymentStatus baseSole(array|string $columns = ['*'])
     * @method PaymentStatus create(array $attributes = [])
     * @method _PaymentStatusCollection|PaymentStatus[] cursor()
     * @method PaymentStatus|null find($id, array $columns = ['*'])
     * @method _PaymentStatusCollection|PaymentStatus[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PaymentStatus findOrFail($id, array $columns = ['*'])
     * @method _PaymentStatusCollection|PaymentStatus[] findOrNew($id, array $columns = ['*'])
     * @method PaymentStatus first(array|string $columns = ['*'])
     * @method PaymentStatus firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method PaymentStatus firstOrCreate(array $attributes = [], array $values = [])
     * @method PaymentStatus firstOrFail(array $columns = ['*'])
     * @method PaymentStatus firstOrNew(array $attributes = [], array $values = [])
     * @method PaymentStatus firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaymentStatus forceCreate(array $attributes)
     * @method _PaymentStatusCollection|PaymentStatus[] fromQuery(string $query, array $bindings = [])
     * @method _PaymentStatusCollection|PaymentStatus[] get(array|string $columns = ['*'])
     * @method PaymentStatus getModel()
     * @method PaymentStatus[] getModels(array|string $columns = ['*'])
     * @method _PaymentStatusCollection|PaymentStatus[] hydrate(array $items)
     * @method PaymentStatus make(array $attributes = [])
     * @method PaymentStatus newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaymentStatus[]|_PaymentStatusCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaymentStatus[]|_PaymentStatusCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentStatus sole(array|string $columns = ['*'])
     * @method PaymentStatus updateOrCreate(array $attributes, array $values = [])
     */
    class _PaymentStatusQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _TaxCategoryCollectionProxy $average
     * @property-read _TaxCategoryCollectionProxy $avg
     * @property-read _TaxCategoryCollectionProxy $contains
     * @property-read _TaxCategoryCollectionProxy $each
     * @property-read _TaxCategoryCollectionProxy $every
     * @property-read _TaxCategoryCollectionProxy $filter
     * @property-read _TaxCategoryCollectionProxy $first
     * @property-read _TaxCategoryCollectionProxy $flatMap
     * @property-read _TaxCategoryCollectionProxy $groupBy
     * @property-read _TaxCategoryCollectionProxy $keyBy
     * @property-read _TaxCategoryCollectionProxy $map
     * @property-read _TaxCategoryCollectionProxy $max
     * @property-read _TaxCategoryCollectionProxy $min
     * @property-read _TaxCategoryCollectionProxy $partition
     * @property-read _TaxCategoryCollectionProxy $reject
     * @property-read _TaxCategoryCollectionProxy $some
     * @property-read _TaxCategoryCollectionProxy $sortBy
     * @property-read _TaxCategoryCollectionProxy $sortByDesc
     * @property-read _TaxCategoryCollectionProxy $sum
     * @property-read _TaxCategoryCollectionProxy $unique
     */
    class _TaxCategoryCollection extends _BaseCollection {}

    /**
     * @property _TaxCategoryCollection|mixed $id
     * @property _TaxCategoryCollection|mixed $section
     * @property _TaxCategoryCollection|mixed $percentage
     * @property _TaxCategoryCollection|mixed $created_at
     * @property _TaxCategoryCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TaxCategoryCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TaxCategoryCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TaxCategoryCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TaxCategoryCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TaxCategoryCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TaxCategoryCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TaxCategoryCollection delete()
     */
    class _TaxCategoryCollectionProxy {}

    /**
     * @method _TaxCategoryQueryBuilder whereId($value)
     * @method _TaxCategoryQueryBuilder whereSection($value)
     * @method _TaxCategoryQueryBuilder wherePercentage($value)
     * @method _TaxCategoryQueryBuilder whereCreatedAt($value)
     * @method _TaxCategoryQueryBuilder whereUpdatedAt($value)
     * @method TaxCategory baseSole(array|string $columns = ['*'])
     * @method TaxCategory create(array $attributes = [])
     * @method _TaxCategoryCollection|TaxCategory[] cursor()
     * @method TaxCategory|null find($id, array $columns = ['*'])
     * @method _TaxCategoryCollection|TaxCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TaxCategory findOrFail($id, array $columns = ['*'])
     * @method _TaxCategoryCollection|TaxCategory[] findOrNew($id, array $columns = ['*'])
     * @method TaxCategory first(array|string $columns = ['*'])
     * @method TaxCategory firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method TaxCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method TaxCategory firstOrFail(array $columns = ['*'])
     * @method TaxCategory firstOrNew(array $attributes = [], array $values = [])
     * @method TaxCategory firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TaxCategory forceCreate(array $attributes)
     * @method _TaxCategoryCollection|TaxCategory[] fromQuery(string $query, array $bindings = [])
     * @method _TaxCategoryCollection|TaxCategory[] get(array|string $columns = ['*'])
     * @method TaxCategory getModel()
     * @method TaxCategory[] getModels(array|string $columns = ['*'])
     * @method _TaxCategoryCollection|TaxCategory[] hydrate(array $items)
     * @method TaxCategory make(array $attributes = [])
     * @method TaxCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TaxCategory[]|_TaxCategoryCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TaxCategory[]|_TaxCategoryCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TaxCategory sole(array|string $columns = ['*'])
     * @method TaxCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _TaxCategoryQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Project\Models {

    use App\Domain\Project\Models\Project;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _ProjectCollectionProxy $average
     * @property-read _ProjectCollectionProxy $avg
     * @property-read _ProjectCollectionProxy $contains
     * @property-read _ProjectCollectionProxy $each
     * @property-read _ProjectCollectionProxy $every
     * @property-read _ProjectCollectionProxy $filter
     * @property-read _ProjectCollectionProxy $first
     * @property-read _ProjectCollectionProxy $flatMap
     * @property-read _ProjectCollectionProxy $groupBy
     * @property-read _ProjectCollectionProxy $keyBy
     * @property-read _ProjectCollectionProxy $map
     * @property-read _ProjectCollectionProxy $max
     * @property-read _ProjectCollectionProxy $min
     * @property-read _ProjectCollectionProxy $partition
     * @property-read _ProjectCollectionProxy $reject
     * @property-read _ProjectCollectionProxy $some
     * @property-read _ProjectCollectionProxy $sortBy
     * @property-read _ProjectCollectionProxy $sortByDesc
     * @property-read _ProjectCollectionProxy $sum
     * @property-read _ProjectCollectionProxy $unique
     */
    class _ProjectCollection extends _BaseCollection {}

    /**
     * @property _ProjectCollection|mixed $id
     * @property _ProjectCollection|mixed $name
     * @property _ProjectCollection|mixed $material_id
     * @property _ProjectCollection|mixed $loading_point_id
     * @property _ProjectCollection|mixed $unloading_point_id
     * @property _ProjectCollection|mixed $consignee_id
     * @property _ProjectCollection|mixed $company_id
     * @property _ProjectCollection|mixed $status
     * @property _ProjectCollection|mixed $created_at
     * @property _ProjectCollection|mixed $updated_at
     * @property _ProjectCollection|mixed $company
     * @property _ProjectCollection|mixed $consignee
     * @property _ProjectCollection|mixed $loadingPoint
     * @property _ProjectCollection|mixed $material
     * @property _ProjectCollection|mixed $unloadingPoint
     * @see \App\Domain\Project\Models\Project::workDone
     * @method _ProjectCollection workDone()
     * @see \App\Domain\Project\Models\Project::transportVolume
     * @method _ProjectCollection transportVolume()
     * @see \App\Domain\Project\Models\Project::pendingPayments
     * @method _ProjectCollection pendingPayments()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ProjectCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ProjectCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ProjectCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ProjectCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ProjectCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ProjectCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ProjectCollection delete()
     */
    class _ProjectCollectionProxy {}

    /**
     * @method _ProjectQueryBuilder whereId($value)
     * @method _ProjectQueryBuilder whereName($value)
     * @method _ProjectQueryBuilder whereMaterialId($value)
     * @method _ProjectQueryBuilder whereLoadingPointId($value)
     * @method _ProjectQueryBuilder whereUnloadingPointId($value)
     * @method _ProjectQueryBuilder whereConsigneeId($value)
     * @method _ProjectQueryBuilder whereCompanyId($value)
     * @method _ProjectQueryBuilder whereStatus($value)
     * @method _ProjectQueryBuilder whereCreatedAt($value)
     * @method _ProjectQueryBuilder whereUpdatedAt($value)
     * @method Project baseSole(array|string $columns = ['*'])
     * @method Project create(array $attributes = [])
     * @method _ProjectCollection|Project[] cursor()
     * @method Project|null find($id, array $columns = ['*'])
     * @method _ProjectCollection|Project[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Project findOrFail($id, array $columns = ['*'])
     * @method _ProjectCollection|Project[] findOrNew($id, array $columns = ['*'])
     * @method Project first(array|string $columns = ['*'])
     * @method Project firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Project firstOrCreate(array $attributes = [], array $values = [])
     * @method Project firstOrFail(array $columns = ['*'])
     * @method Project firstOrNew(array $attributes = [], array $values = [])
     * @method Project firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Project forceCreate(array $attributes)
     * @method _ProjectCollection|Project[] fromQuery(string $query, array $bindings = [])
     * @method _ProjectCollection|Project[] get(array|string $columns = ['*'])
     * @method Project getModel()
     * @method Project[] getModels(array|string $columns = ['*'])
     * @method _ProjectCollection|Project[] hydrate(array $items)
     * @method Project make(array $attributes = [])
     * @method Project newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Project[]|_ProjectCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Project[]|_ProjectCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Project sole(array|string $columns = ['*'])
     * @method Project updateOrCreate(array $attributes, array $values = [])
     */
    class _ProjectQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\Trip\Models {

    use App\Domain\Trip\Models\Trip;
    use App\Domain\Trip\Models\TripType;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\MediaLibrary\MediaCollections\FileAdder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    /**
     * @property-read _TripCollectionProxy $average
     * @property-read _TripCollectionProxy $avg
     * @property-read _TripCollectionProxy $contains
     * @property-read _TripCollectionProxy $each
     * @property-read _TripCollectionProxy $every
     * @property-read _TripCollectionProxy $filter
     * @property-read _TripCollectionProxy $first
     * @property-read _TripCollectionProxy $flatMap
     * @property-read _TripCollectionProxy $groupBy
     * @property-read _TripCollectionProxy $keyBy
     * @property-read _TripCollectionProxy $map
     * @property-read _TripCollectionProxy $max
     * @property-read _TripCollectionProxy $min
     * @property-read _TripCollectionProxy $partition
     * @property-read _TripCollectionProxy $reject
     * @property-read _TripCollectionProxy $some
     * @property-read _TripCollectionProxy $sortBy
     * @property-read _TripCollectionProxy $sortByDesc
     * @property-read _TripCollectionProxy $sum
     * @property-read _TripCollectionProxy $unique
     */
    class _TripCollection extends _BaseCollection {}

    /**
     * @property _TripCollection|mixed $id
     * @property _TripCollection|mixed $date
     * @property _TripCollection|mixed $trip_type
     * @property _TripCollection|mixed $project_id
     * @property _TripCollection|mixed $company_id
     * @property _TripCollection|mixed $challan_serial
     * @property _TripCollection|mixed $tp_number
     * @property _TripCollection|mixed $tp_serial
     * @property _TripCollection|mixed $gross_weight
     * @property _TripCollection|mixed $tare_weight
     * @property _TripCollection|mixed $net_weight
     * @property _TripCollection|mixed $rate
     * @property _TripCollection|mixed $hsd
     * @property _TripCollection|mixed $cash
     * @property _TripCollection|mixed $market_vehicle_number
     * @property _TripCollection|mixed $party_name
     * @property _TripCollection|mixed $party_number
     * @property _TripCollection|mixed $driver_name
     * @property _TripCollection|mixed $driver_phone_num
     * @property _TripCollection|mixed $driver_license_num
     * @property _TripCollection|mixed $premium_rate
     * @property _TripCollection|mixed $total_amount
     * @property _TripCollection|mixed $cash_adv_pct
     * @property _TripCollection|mixed $cash_adv_fees
     * @property _TripCollection|mixed $tds_sbm_bool
     * @property _TripCollection|mixed $tds
     * @property _TripCollection|mixed $tds_paid
     * @property _TripCollection|mixed $tds_filed
     * @property _TripCollection|mixed $tax_category_id
     * @property _TripCollection|mixed $two_pay
     * @property _TripCollection|mixed $final_payable
     * @property _TripCollection|mixed $payment_id
     * @property _TripCollection|mixed $profit
     * @property _TripCollection|mixed $market_vehicle_id
     * @property _TripCollection|mixed $fleet_vehicle_id
     * @property _TripCollection|mixed $fleet_driver_id
     * @property _TripCollection|mixed $party_id
     * @property _TripCollection|mixed $agent_id
     * @property _TripCollection|mixed $loading_done
     * @property _TripCollection|mixed $payment_done
     * @property _TripCollection|mixed $completed
     * @property _TripCollection|mixed $invoice_id
     * @property _TripCollection|mixed $created_by
     * @property _TripCollection|mixed $finished_by
     * @property _TripCollection|mixed $created_at
     * @property _TripCollection|mixed $updated_at
     * @property _TripCollection|mixed $agent
     * @property _TripCollection|mixed $consignee
     * @property _TripCollection|mixed $fleetVehicle
     * @property _TripCollection|mixed $marketVehicle
     * @property _TripCollection|mixed $party
     * @property _TripCollection|mixed $payment
     * @property _TripCollection|mixed $project
     * @property _TripCollection|mixed $trip_type
     * @see \App\Domain\Trip\Models\Trip::getCashAttribute
     * @method _TripCollection getCashAttribute($cash)
     * @see \App\Domain\Trip\Models\Trip::getTwoPayAttribute
     * @method _TripCollection getTwoPayAttribute($two_pay)
     * @see \App\Domain\Trip\Models\Trip::setDateAttribute
     * @method _TripCollection setDateAttribute(string $date)
     * @see \App\Domain\Trip\Models\Trip::getHsdAttribute
     * @method _TripCollection getHsdAttribute($hsd)
     * @see \App\Domain\Trip\Models\Trip::getRateAttribute
     * @method _TripCollection getRateAttribute($rate)
     * @see \App\Domain\Trip\Models\Trip::getTotalAmountAttribute
     * @method _TripCollection getTotalAmountAttribute($total_amount)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollection
     * @method _TripCollection clearMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::hasMedia
     * @method _TripCollection hasMedia(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaCollection
     * @method _TripCollection addMediaCollection(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deleteMedia
     * @method _TripCollection deleteMedia(int|Media $mediaId)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaPath
     * @method _TripCollection getFirstMediaPath(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMediaCollection
     * @method _TripCollection getMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::shouldDeletePreservingMedia
     * @method _TripCollection shouldDeletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMultipleMediaFromRequest
     * @method _TripCollection addMultipleMediaFromRequest(array $keys)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addAllMediaFromRequest
     * @method _TripCollection addAllMediaFromRequest()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaUrl
     * @method _TripCollection getFallbackMediaUrl(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaCollections
     * @method _TripCollection registerMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaConversions
     * @method _TripCollection registerMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::syncFromMediaLibraryRequest
     * @method _TripCollection syncFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaConversion
     * @method _TripCollection addMediaConversion(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerAllMediaConversions
     * @method _TripCollection registerAllMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::loadMedia
     * @method _TripCollection loadMedia(string $collectionName)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::updateMedia
     * @method _TripCollection updateMedia(array $newMediaArray, string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deletePreservingMedia
     * @method _TripCollection deletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromDisk
     * @method _TripCollection addMediaFromDisk(string $key, string $disk = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaUrl
     * @method _TripCollection getFirstMediaUrl(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromUrl
     * @method _TripCollection addMediaFromUrl(string $url, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMedia
     * @method _TripCollection addMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::copyMedia
     * @method _TripCollection copyMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromString
     * @method _TripCollection addMediaFromString(string $text)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromRequest
     * @method _TripCollection addMediaFromRequest(string $key)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstTemporaryUrl
     * @method _TripCollection getFirstTemporaryUrl(\DateTimeInterface $expiration, string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaPath
     * @method _TripCollection getFallbackMediaPath(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromBase64
     * @method _TripCollection addMediaFromBase64(string $base64data, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMedia
     * @method _TripCollection getMedia(string $collectionName = 'default', array|callable $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getRegisteredMediaCollections
     * @method _TripCollection getRegisteredMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMedia
     * @method _TripCollection getFirstMedia(string $collectionName = 'default', $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollectionExcept
     * @method _TripCollection clearMediaCollectionExcept(string $collectionName = 'default', Collection|Media[] $excludedMedia = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addFromMediaLibraryRequest
     * @method _TripCollection addFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::processUnattachedMedia
     * @method _TripCollection processUnattachedMedia(callable $callable)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::prepareToAttachMedia
     * @method _TripCollection prepareToAttachMedia(Media $media, FileAdder $fileAdder)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TripCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TripCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TripCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TripCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TripCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TripCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TripCollection delete()
     */
    class _TripCollectionProxy {}

    /**
     * @method _TripQueryBuilder whereId($value)
     * @method _TripQueryBuilder whereDate($value)
     * @method _TripQueryBuilder whereTripType($value)
     * @method _TripQueryBuilder whereProjectId($value)
     * @method _TripQueryBuilder whereCompanyId($value)
     * @method _TripQueryBuilder whereChallanSerial($value)
     * @method _TripQueryBuilder whereTpNumber($value)
     * @method _TripQueryBuilder whereTpSerial($value)
     * @method _TripQueryBuilder whereGrossWeight($value)
     * @method _TripQueryBuilder whereTareWeight($value)
     * @method _TripQueryBuilder whereNetWeight($value)
     * @method _TripQueryBuilder whereRate($value)
     * @method _TripQueryBuilder whereHsd($value)
     * @method _TripQueryBuilder whereCash($value)
     * @method _TripQueryBuilder whereMarketVehicleNumber($value)
     * @method _TripQueryBuilder wherePartyName($value)
     * @method _TripQueryBuilder wherePartyNumber($value)
     * @method _TripQueryBuilder whereDriverName($value)
     * @method _TripQueryBuilder whereDriverPhoneNum($value)
     * @method _TripQueryBuilder whereDriverLicenseNum($value)
     * @method _TripQueryBuilder wherePremiumRate($value)
     * @method _TripQueryBuilder whereTotalAmount($value)
     * @method _TripQueryBuilder whereCashAdvPct($value)
     * @method _TripQueryBuilder whereCashAdvFees($value)
     * @method _TripQueryBuilder whereTdsSbmBool($value)
     * @method _TripQueryBuilder whereTds($value)
     * @method _TripQueryBuilder whereTdsPaid($value)
     * @method _TripQueryBuilder whereTdsFiled($value)
     * @method _TripQueryBuilder whereTaxCategoryId($value)
     * @method _TripQueryBuilder whereTwoPay($value)
     * @method _TripQueryBuilder whereFinalPayable($value)
     * @method _TripQueryBuilder wherePaymentId($value)
     * @method _TripQueryBuilder whereProfit($value)
     * @method _TripQueryBuilder whereMarketVehicleId($value)
     * @method _TripQueryBuilder whereFleetVehicleId($value)
     * @method _TripQueryBuilder whereFleetDriverId($value)
     * @method _TripQueryBuilder wherePartyId($value)
     * @method _TripQueryBuilder whereAgentId($value)
     * @method _TripQueryBuilder whereLoadingDone($value)
     * @method _TripQueryBuilder wherePaymentDone($value)
     * @method _TripQueryBuilder whereCompleted($value)
     * @method _TripQueryBuilder whereInvoiceId($value)
     * @method _TripQueryBuilder whereCreatedBy($value)
     * @method _TripQueryBuilder whereFinishedBy($value)
     * @method _TripQueryBuilder whereCreatedAt($value)
     * @method _TripQueryBuilder whereUpdatedAt($value)
     * @method Trip baseSole(array|string $columns = ['*'])
     * @method Trip create(array $attributes = [])
     * @method _TripCollection|Trip[] cursor()
     * @method Trip|null find($id, array $columns = ['*'])
     * @method _TripCollection|Trip[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Trip findOrFail($id, array $columns = ['*'])
     * @method _TripCollection|Trip[] findOrNew($id, array $columns = ['*'])
     * @method Trip first(array|string $columns = ['*'])
     * @method Trip firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Trip firstOrCreate(array $attributes = [], array $values = [])
     * @method Trip firstOrFail(array $columns = ['*'])
     * @method Trip firstOrNew(array $attributes = [], array $values = [])
     * @method Trip firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Trip forceCreate(array $attributes)
     * @method _TripCollection|Trip[] fromQuery(string $query, array $bindings = [])
     * @method _TripCollection|Trip[] get(array|string $columns = ['*'])
     * @method Trip getModel()
     * @method Trip[] getModels(array|string $columns = ['*'])
     * @method _TripCollection|Trip[] hydrate(array $items)
     * @method Trip make(array $attributes = [])
     * @method Trip newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Trip[]|_TripCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Trip[]|_TripCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Trip sole(array|string $columns = ['*'])
     * @method Trip updateOrCreate(array $attributes, array $values = [])
     */
    class _TripQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _TripTypeCollectionProxy $average
     * @property-read _TripTypeCollectionProxy $avg
     * @property-read _TripTypeCollectionProxy $contains
     * @property-read _TripTypeCollectionProxy $each
     * @property-read _TripTypeCollectionProxy $every
     * @property-read _TripTypeCollectionProxy $filter
     * @property-read _TripTypeCollectionProxy $first
     * @property-read _TripTypeCollectionProxy $flatMap
     * @property-read _TripTypeCollectionProxy $groupBy
     * @property-read _TripTypeCollectionProxy $keyBy
     * @property-read _TripTypeCollectionProxy $map
     * @property-read _TripTypeCollectionProxy $max
     * @property-read _TripTypeCollectionProxy $min
     * @property-read _TripTypeCollectionProxy $partition
     * @property-read _TripTypeCollectionProxy $reject
     * @property-read _TripTypeCollectionProxy $some
     * @property-read _TripTypeCollectionProxy $sortBy
     * @property-read _TripTypeCollectionProxy $sortByDesc
     * @property-read _TripTypeCollectionProxy $sum
     * @property-read _TripTypeCollectionProxy $unique
     */
    class _TripTypeCollection extends _BaseCollection {}

    /**
     * @property _TripTypeCollection|mixed $id
     * @property _TripTypeCollection|mixed $name
     * @property _TripTypeCollection|mixed $created_at
     * @property _TripTypeCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TripTypeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TripTypeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TripTypeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TripTypeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TripTypeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TripTypeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TripTypeCollection delete()
     */
    class _TripTypeCollectionProxy {}

    /**
     * @method _TripTypeQueryBuilder whereId($value)
     * @method _TripTypeQueryBuilder whereName($value)
     * @method _TripTypeQueryBuilder whereCreatedAt($value)
     * @method _TripTypeQueryBuilder whereUpdatedAt($value)
     * @method TripType baseSole(array|string $columns = ['*'])
     * @method TripType create(array $attributes = [])
     * @method _TripTypeCollection|TripType[] cursor()
     * @method TripType|null find($id, array $columns = ['*'])
     * @method _TripTypeCollection|TripType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TripType findOrFail($id, array $columns = ['*'])
     * @method _TripTypeCollection|TripType[] findOrNew($id, array $columns = ['*'])
     * @method TripType first(array|string $columns = ['*'])
     * @method TripType firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method TripType firstOrCreate(array $attributes = [], array $values = [])
     * @method TripType firstOrFail(array $columns = ['*'])
     * @method TripType firstOrNew(array $attributes = [], array $values = [])
     * @method TripType firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TripType forceCreate(array $attributes)
     * @method _TripTypeCollection|TripType[] fromQuery(string $query, array $bindings = [])
     * @method _TripTypeCollection|TripType[] get(array|string $columns = ['*'])
     * @method TripType getModel()
     * @method TripType[] getModels(array|string $columns = ['*'])
     * @method _TripTypeCollection|TripType[] hydrate(array $items)
     * @method TripType make(array $attributes = [])
     * @method TripType newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TripType[]|_TripTypeCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TripType[]|_TripTypeCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TripType sole(array|string $columns = ['*'])
     * @method TripType updateOrCreate(array $attributes, array $values = [])
     */
    class _TripTypeQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\UnloadingPoint\Models {

    use App\Domain\UnloadingPoint\Models\UnloadingPoint;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _UnloadingPointCollectionProxy $average
     * @property-read _UnloadingPointCollectionProxy $avg
     * @property-read _UnloadingPointCollectionProxy $contains
     * @property-read _UnloadingPointCollectionProxy $each
     * @property-read _UnloadingPointCollectionProxy $every
     * @property-read _UnloadingPointCollectionProxy $filter
     * @property-read _UnloadingPointCollectionProxy $first
     * @property-read _UnloadingPointCollectionProxy $flatMap
     * @property-read _UnloadingPointCollectionProxy $groupBy
     * @property-read _UnloadingPointCollectionProxy $keyBy
     * @property-read _UnloadingPointCollectionProxy $map
     * @property-read _UnloadingPointCollectionProxy $max
     * @property-read _UnloadingPointCollectionProxy $min
     * @property-read _UnloadingPointCollectionProxy $partition
     * @property-read _UnloadingPointCollectionProxy $reject
     * @property-read _UnloadingPointCollectionProxy $some
     * @property-read _UnloadingPointCollectionProxy $sortBy
     * @property-read _UnloadingPointCollectionProxy $sortByDesc
     * @property-read _UnloadingPointCollectionProxy $sum
     * @property-read _UnloadingPointCollectionProxy $unique
     */
    class _UnloadingPointCollection extends _BaseCollection {}

    /**
     * @property _UnloadingPointCollection|mixed $id
     * @property _UnloadingPointCollection|mixed $name
     * @property _UnloadingPointCollection|mixed $short_code
     * @property _UnloadingPointCollection|mixed $company_id
     * @property _UnloadingPointCollection|mixed $created_at
     * @property _UnloadingPointCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _UnloadingPointCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _UnloadingPointCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _UnloadingPointCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _UnloadingPointCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _UnloadingPointCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _UnloadingPointCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _UnloadingPointCollection delete()
     */
    class _UnloadingPointCollectionProxy {}

    /**
     * @method _UnloadingPointQueryBuilder whereId($value)
     * @method _UnloadingPointQueryBuilder whereName($value)
     * @method _UnloadingPointQueryBuilder whereShortCode($value)
     * @method _UnloadingPointQueryBuilder whereCompanyId($value)
     * @method _UnloadingPointQueryBuilder whereCreatedAt($value)
     * @method _UnloadingPointQueryBuilder whereUpdatedAt($value)
     * @method UnloadingPoint baseSole(array|string $columns = ['*'])
     * @method UnloadingPoint create(array $attributes = [])
     * @method _UnloadingPointCollection|UnloadingPoint[] cursor()
     * @method UnloadingPoint|null find($id, array $columns = ['*'])
     * @method _UnloadingPointCollection|UnloadingPoint[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UnloadingPoint findOrFail($id, array $columns = ['*'])
     * @method _UnloadingPointCollection|UnloadingPoint[] findOrNew($id, array $columns = ['*'])
     * @method UnloadingPoint first(array|string $columns = ['*'])
     * @method UnloadingPoint firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method UnloadingPoint firstOrCreate(array $attributes = [], array $values = [])
     * @method UnloadingPoint firstOrFail(array $columns = ['*'])
     * @method UnloadingPoint firstOrNew(array $attributes = [], array $values = [])
     * @method UnloadingPoint firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UnloadingPoint forceCreate(array $attributes)
     * @method _UnloadingPointCollection|UnloadingPoint[] fromQuery(string $query, array $bindings = [])
     * @method _UnloadingPointCollection|UnloadingPoint[] get(array|string $columns = ['*'])
     * @method UnloadingPoint getModel()
     * @method UnloadingPoint[] getModels(array|string $columns = ['*'])
     * @method _UnloadingPointCollection|UnloadingPoint[] hydrate(array $items)
     * @method UnloadingPoint make(array $attributes = [])
     * @method UnloadingPoint newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UnloadingPoint[]|_UnloadingPointCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UnloadingPoint[]|_UnloadingPointCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UnloadingPoint sole(array|string $columns = ['*'])
     * @method UnloadingPoint updateOrCreate(array $attributes, array $values = [])
     */
    class _UnloadingPointQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Domain\VehicleRC\Models {

    use App\Domain\VehicleRC\Models\VehicleRC;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _VehicleRCCollectionProxy $average
     * @property-read _VehicleRCCollectionProxy $avg
     * @property-read _VehicleRCCollectionProxy $contains
     * @property-read _VehicleRCCollectionProxy $each
     * @property-read _VehicleRCCollectionProxy $every
     * @property-read _VehicleRCCollectionProxy $filter
     * @property-read _VehicleRCCollectionProxy $first
     * @property-read _VehicleRCCollectionProxy $flatMap
     * @property-read _VehicleRCCollectionProxy $groupBy
     * @property-read _VehicleRCCollectionProxy $keyBy
     * @property-read _VehicleRCCollectionProxy $map
     * @property-read _VehicleRCCollectionProxy $max
     * @property-read _VehicleRCCollectionProxy $min
     * @property-read _VehicleRCCollectionProxy $partition
     * @property-read _VehicleRCCollectionProxy $reject
     * @property-read _VehicleRCCollectionProxy $some
     * @property-read _VehicleRCCollectionProxy $sortBy
     * @property-read _VehicleRCCollectionProxy $sortByDesc
     * @property-read _VehicleRCCollectionProxy $sum
     * @property-read _VehicleRCCollectionProxy $unique
     */
    class _VehicleRCCollection extends _BaseCollection {}

    /**
     * @property _VehicleRCCollection|mixed $id
     * @property _VehicleRCCollection|mixed $license_plate
     * @property _VehicleRCCollection|mixed $rto
     * @property _VehicleRCCollection|mixed $model
     * @property _VehicleRCCollection|mixed $class
     * @property _VehicleRCCollection|mixed $color
     * @property _VehicleRCCollection|mixed $state
     * @property _VehicleRCCollection|mixed $weight
     * @property _VehicleRCCollection|mixed $isValid
     * @property _VehicleRCCollection|mixed $financer
     * @property _VehicleRCCollection|mixed $puc_upto
     * @property _VehicleRCCollection|mixed $rto_code
     * @property _VehicleRCCollection|mixed $fuel_type
     * @property _VehicleRCCollection|mixed $fuel_norm
     * @property _VehicleRCCollection|mixed $owner_name
     * @property _VehicleRCCollection|mixed $mvtax_upto
     * @property _VehicleRCCollection|mixed $vehicle_age
     * @property _VehicleRCCollection|mixed $price_range
     * @property _VehicleRCCollection|mixed $noc_details
     * @property _VehicleRCCollection|mixed $vehicle_type
     * @property _VehicleRCCollection|mixed $fitness_upto
     * @property _VehicleRCCollection|mixed $roadtax_upto
     * @property _VehicleRCCollection|mixed $engine_number
     * @property _VehicleRCCollection|mixed $ownership_type
     * @property _VehicleRCCollection|mixed $chassis_number
     * @property _VehicleRCCollection|mixed $engine_capacity
     * @property _VehicleRCCollection|mixed $registration_date
     * @property _VehicleRCCollection|mixed $registering_authority
     * @property _VehicleRCCollection|mixed $created_at
     * @property _VehicleRCCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _VehicleRCCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _VehicleRCCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _VehicleRCCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _VehicleRCCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _VehicleRCCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _VehicleRCCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _VehicleRCCollection delete()
     */
    class _VehicleRCCollectionProxy {}

    /**
     * @method _VehicleRCQueryBuilder whereId($value)
     * @method _VehicleRCQueryBuilder whereLicensePlate($value)
     * @method _VehicleRCQueryBuilder whereRto($value)
     * @method _VehicleRCQueryBuilder whereModel($value)
     * @method _VehicleRCQueryBuilder whereClass($value)
     * @method _VehicleRCQueryBuilder whereColor($value)
     * @method _VehicleRCQueryBuilder whereState($value)
     * @method _VehicleRCQueryBuilder whereWeight($value)
     * @method _VehicleRCQueryBuilder whereIsvalid($value)
     * @method _VehicleRCQueryBuilder whereFinancer($value)
     * @method _VehicleRCQueryBuilder wherePucUpto($value)
     * @method _VehicleRCQueryBuilder whereRtoCode($value)
     * @method _VehicleRCQueryBuilder whereFuelType($value)
     * @method _VehicleRCQueryBuilder whereFuelNorm($value)
     * @method _VehicleRCQueryBuilder whereOwnerName($value)
     * @method _VehicleRCQueryBuilder whereMvtaxUpto($value)
     * @method _VehicleRCQueryBuilder whereVehicleAge($value)
     * @method _VehicleRCQueryBuilder wherePriceRange($value)
     * @method _VehicleRCQueryBuilder whereNocDetails($value)
     * @method _VehicleRCQueryBuilder whereVehicleType($value)
     * @method _VehicleRCQueryBuilder whereFitnessUpto($value)
     * @method _VehicleRCQueryBuilder whereRoadtaxUpto($value)
     * @method _VehicleRCQueryBuilder whereEngineNumber($value)
     * @method _VehicleRCQueryBuilder whereOwnershipType($value)
     * @method _VehicleRCQueryBuilder whereChassisNumber($value)
     * @method _VehicleRCQueryBuilder whereEngineCapacity($value)
     * @method _VehicleRCQueryBuilder whereRegistrationDate($value)
     * @method _VehicleRCQueryBuilder whereRegisteringAuthority($value)
     * @method _VehicleRCQueryBuilder whereCreatedAt($value)
     * @method _VehicleRCQueryBuilder whereUpdatedAt($value)
     * @method VehicleRC baseSole(array|string $columns = ['*'])
     * @method VehicleRC create(array $attributes = [])
     * @method _VehicleRCCollection|VehicleRC[] cursor()
     * @method VehicleRC|null find($id, array $columns = ['*'])
     * @method _VehicleRCCollection|VehicleRC[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method VehicleRC findOrFail($id, array $columns = ['*'])
     * @method _VehicleRCCollection|VehicleRC[] findOrNew($id, array $columns = ['*'])
     * @method VehicleRC first(array|string $columns = ['*'])
     * @method VehicleRC firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method VehicleRC firstOrCreate(array $attributes = [], array $values = [])
     * @method VehicleRC firstOrFail(array $columns = ['*'])
     * @method VehicleRC firstOrNew(array $attributes = [], array $values = [])
     * @method VehicleRC firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method VehicleRC forceCreate(array $attributes)
     * @method _VehicleRCCollection|VehicleRC[] fromQuery(string $query, array $bindings = [])
     * @method _VehicleRCCollection|VehicleRC[] get(array|string $columns = ['*'])
     * @method VehicleRC getModel()
     * @method VehicleRC[] getModels(array|string $columns = ['*'])
     * @method _VehicleRCCollection|VehicleRC[] hydrate(array $items)
     * @method VehicleRC make(array $attributes = [])
     * @method VehicleRC newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|VehicleRC[]|_VehicleRCCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|VehicleRC[]|_VehicleRCCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method VehicleRC sole(array|string $columns = ['*'])
     * @method VehicleRC updateOrCreate(array $attributes, array $values = [])
     */
    class _VehicleRCQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Membership;
    use App\Models\Permission;
    use App\Models\Role;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Http\UploadedFile;
    use Illuminate\Notifications\Notification;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Sanctum\Contracts\HasAbilities;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _MembershipCollectionProxy $average
     * @property-read _MembershipCollectionProxy $avg
     * @property-read _MembershipCollectionProxy $contains
     * @property-read _MembershipCollectionProxy $each
     * @property-read _MembershipCollectionProxy $every
     * @property-read _MembershipCollectionProxy $filter
     * @property-read _MembershipCollectionProxy $first
     * @property-read _MembershipCollectionProxy $flatMap
     * @property-read _MembershipCollectionProxy $groupBy
     * @property-read _MembershipCollectionProxy $keyBy
     * @property-read _MembershipCollectionProxy $map
     * @property-read _MembershipCollectionProxy $max
     * @property-read _MembershipCollectionProxy $min
     * @property-read _MembershipCollectionProxy $partition
     * @property-read _MembershipCollectionProxy $reject
     * @property-read _MembershipCollectionProxy $some
     * @property-read _MembershipCollectionProxy $sortBy
     * @property-read _MembershipCollectionProxy $sortByDesc
     * @property-read _MembershipCollectionProxy $sum
     * @property-read _MembershipCollectionProxy $unique
     */
    class _MembershipCollection extends _BaseCollection {}

    /**
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getQueueableId
     * @method _MembershipCollection getQueueableId()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getCreatedAtColumn
     * @method _MembershipCollection getCreatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getTable
     * @method _MembershipCollection getTable()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::delete
     * @method _MembershipCollection delete()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getForeignKey
     * @method _MembershipCollection getForeignKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::unsetRelations
     * @method _MembershipCollection unsetRelations()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::newQueryForRestoration
     * @method _MembershipCollection newQueryForRestoration(int[]|string|string[] $ids)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::hasTimestampAttributes
     * @method _MembershipCollection hasTimestampAttributes(array|null $attributes = null)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::setPivotKeys
     * @method _MembershipCollection setPivotKeys(string $foreignKey, string $relatedKey)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getOtherKey
     * @method _MembershipCollection getOtherKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getUpdatedAtColumn
     * @method _MembershipCollection getUpdatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getRelatedKey
     * @method _MembershipCollection getRelatedKey()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MembershipCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MembershipCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MembershipCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MembershipCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MembershipCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MembershipCollection fill(array $attributes)
     */
    class _MembershipCollectionProxy {}

    /**
     * @method Membership baseSole(array|string $columns = ['*'])
     * @method Membership create(array $attributes = [])
     * @method _MembershipCollection|Membership[] cursor()
     * @method Membership|null find($id, array $columns = ['*'])
     * @method _MembershipCollection|Membership[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Membership findOrFail($id, array $columns = ['*'])
     * @method _MembershipCollection|Membership[] findOrNew($id, array $columns = ['*'])
     * @method Membership first(array|string $columns = ['*'])
     * @method Membership firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Membership firstOrCreate(array $attributes = [], array $values = [])
     * @method Membership firstOrFail(array $columns = ['*'])
     * @method Membership firstOrNew(array $attributes = [], array $values = [])
     * @method Membership firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Membership forceCreate(array $attributes)
     * @method _MembershipCollection|Membership[] fromQuery(string $query, array $bindings = [])
     * @method _MembershipCollection|Membership[] get(array|string $columns = ['*'])
     * @method Membership getModel()
     * @method Membership[] getModels(array|string $columns = ['*'])
     * @method _MembershipCollection|Membership[] hydrate(array $items)
     * @method Membership make(array $attributes = [])
     * @method Membership newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Membership[]|_MembershipCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Membership[]|_MembershipCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Membership sole(array|string $columns = ['*'])
     * @method Membership updateOrCreate(array $attributes, array $values = [])
     */
    class _MembershipQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _PermissionCollectionProxy $average
     * @property-read _PermissionCollectionProxy $avg
     * @property-read _PermissionCollectionProxy $contains
     * @property-read _PermissionCollectionProxy $each
     * @property-read _PermissionCollectionProxy $every
     * @property-read _PermissionCollectionProxy $filter
     * @property-read _PermissionCollectionProxy $first
     * @property-read _PermissionCollectionProxy $flatMap
     * @property-read _PermissionCollectionProxy $groupBy
     * @property-read _PermissionCollectionProxy $keyBy
     * @property-read _PermissionCollectionProxy $map
     * @property-read _PermissionCollectionProxy $max
     * @property-read _PermissionCollectionProxy $min
     * @property-read _PermissionCollectionProxy $partition
     * @property-read _PermissionCollectionProxy $reject
     * @property-read _PermissionCollectionProxy $some
     * @property-read _PermissionCollectionProxy $sortBy
     * @property-read _PermissionCollectionProxy $sortByDesc
     * @property-read _PermissionCollectionProxy $sum
     * @property-read _PermissionCollectionProxy $unique
     */
    class _PermissionCollection extends _BaseCollection {}

    /**
     * @property _PermissionCollection|mixed $id
     * @property _PermissionCollection|mixed $name
     * @property _PermissionCollection|mixed $display_name
     * @property _PermissionCollection|mixed $description
     * @property _PermissionCollection|mixed $created_at
     * @property _PermissionCollection|mixed $updated_at
     * @see \Laratrust\Traits\LaratrustPermissionTrait::getMorphByUserRelation
     * @method _PermissionCollection getMorphByUserRelation(string $relationship)
     * @see \Laratrust\Traits\LaratrustDynamicUserRelationsCalls::getUsersRelationValue
     * @method _PermissionCollection getUsersRelationValue(string $key)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PermissionCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PermissionCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PermissionCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PermissionCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PermissionCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PermissionCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PermissionCollection delete()
     */
    class _PermissionCollectionProxy {}

    /**
     * @method _PermissionQueryBuilder whereId($value)
     * @method _PermissionQueryBuilder whereName($value)
     * @method _PermissionQueryBuilder whereDisplayName($value)
     * @method _PermissionQueryBuilder whereDescription($value)
     * @method _PermissionQueryBuilder whereCreatedAt($value)
     * @method _PermissionQueryBuilder whereUpdatedAt($value)
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _PermissionCollection|Permission[] cursor()
     * @method Permission|null find($id, array $columns = ['*'])
     * @method _PermissionCollection|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission findOrFail($id, array $columns = ['*'])
     * @method _PermissionCollection|Permission[] findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _PermissionCollection|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _PermissionCollection|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _PermissionCollection|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_PermissionCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Permission[]|_PermissionCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     */
    class _PermissionQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _RoleCollectionProxy $average
     * @property-read _RoleCollectionProxy $avg
     * @property-read _RoleCollectionProxy $contains
     * @property-read _RoleCollectionProxy $each
     * @property-read _RoleCollectionProxy $every
     * @property-read _RoleCollectionProxy $filter
     * @property-read _RoleCollectionProxy $first
     * @property-read _RoleCollectionProxy $flatMap
     * @property-read _RoleCollectionProxy $groupBy
     * @property-read _RoleCollectionProxy $keyBy
     * @property-read _RoleCollectionProxy $map
     * @property-read _RoleCollectionProxy $max
     * @property-read _RoleCollectionProxy $min
     * @property-read _RoleCollectionProxy $partition
     * @property-read _RoleCollectionProxy $reject
     * @property-read _RoleCollectionProxy $some
     * @property-read _RoleCollectionProxy $sortBy
     * @property-read _RoleCollectionProxy $sortByDesc
     * @property-read _RoleCollectionProxy $sum
     * @property-read _RoleCollectionProxy $unique
     */
    class _RoleCollection extends _BaseCollection {}

    /**
     * @property _RoleCollection|mixed $id
     * @property _RoleCollection|mixed $name
     * @property _RoleCollection|mixed $display_name
     * @property _RoleCollection|mixed $description
     * @property _RoleCollection|mixed $created_at
     * @property _RoleCollection|mixed $updated_at
     * @see \Laratrust\Traits\LaratrustRoleTrait::attachPermissions
     * @method _RoleCollection attachPermissions($permissions)
     * @see \Laratrust\Traits\LaratrustRoleTrait::getMorphByUserRelation
     * @method _RoleCollection getMorphByUserRelation(string $relationship)
     * @see \Laratrust\Traits\LaratrustRoleTrait::syncPermissions
     * @method _RoleCollection syncPermissions($permissions)
     * @see \Laratrust\Traits\LaratrustRoleTrait::detachPermissions
     * @method _RoleCollection detachPermissions($permissions = null)
     * @see \Laratrust\Traits\LaratrustRoleTrait::detachPermission
     * @method _RoleCollection detachPermission(array|object $permission)
     * @see \Laratrust\Traits\LaratrustRoleTrait::attachPermission
     * @method _RoleCollection attachPermission(array|object $permission)
     * @see \Laratrust\Traits\LaratrustRoleTrait::hasPermission
     * @method _RoleCollection hasPermission(array|string $permission, bool $requireAll = false)
     * @see \Laratrust\Traits\LaratrustRoleTrait::flushCache
     * @method _RoleCollection flushCache()
     * @see \Laratrust\Traits\LaratrustDynamicUserRelationsCalls::getUsersRelationValue
     * @method _RoleCollection getUsersRelationValue(string $key)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _RoleCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _RoleCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _RoleCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _RoleCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _RoleCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _RoleCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _RoleCollection delete()
     */
    class _RoleCollectionProxy {}

    /**
     * @method _RoleQueryBuilder whereId($value)
     * @method _RoleQueryBuilder whereName($value)
     * @method _RoleQueryBuilder whereDisplayName($value)
     * @method _RoleQueryBuilder whereDescription($value)
     * @method _RoleQueryBuilder whereCreatedAt($value)
     * @method _RoleQueryBuilder whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _RoleCollection|Role[] cursor()
     * @method Role|null find($id, array $columns = ['*'])
     * @method _RoleCollection|Role[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role findOrFail($id, array $columns = ['*'])
     * @method _RoleCollection|Role[] findOrNew($id, array $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _RoleCollection|Role[] fromQuery(string $query, array $bindings = [])
     * @method _RoleCollection|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _RoleCollection|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_RoleCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_RoleCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _RoleQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _TeamCollectionProxy $average
     * @property-read _TeamCollectionProxy $avg
     * @property-read _TeamCollectionProxy $contains
     * @property-read _TeamCollectionProxy $each
     * @property-read _TeamCollectionProxy $every
     * @property-read _TeamCollectionProxy $filter
     * @property-read _TeamCollectionProxy $first
     * @property-read _TeamCollectionProxy $flatMap
     * @property-read _TeamCollectionProxy $groupBy
     * @property-read _TeamCollectionProxy $keyBy
     * @property-read _TeamCollectionProxy $map
     * @property-read _TeamCollectionProxy $max
     * @property-read _TeamCollectionProxy $min
     * @property-read _TeamCollectionProxy $partition
     * @property-read _TeamCollectionProxy $reject
     * @property-read _TeamCollectionProxy $some
     * @property-read _TeamCollectionProxy $sortBy
     * @property-read _TeamCollectionProxy $sortByDesc
     * @property-read _TeamCollectionProxy $sum
     * @property-read _TeamCollectionProxy $unique
     */
    class _TeamCollection extends _BaseCollection {}

    /**
     * @property _TeamCollection|mixed $id
     * @property _TeamCollection|mixed $name
     * @property _TeamCollection|mixed $display_name
     * @property _TeamCollection|mixed $description
     * @property _TeamCollection|mixed $created_at
     * @property _TeamCollection|mixed $updated_at
     * @see \Laratrust\Traits\LaratrustTeamTrait::getMorphByUserRelation
     * @method _TeamCollection getMorphByUserRelation(string $relationship)
     * @see \Laratrust\Traits\LaratrustDynamicUserRelationsCalls::getUsersRelationValue
     * @method _TeamCollection getUsersRelationValue(string $key)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TeamCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TeamCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TeamCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TeamCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TeamCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TeamCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TeamCollection delete()
     */
    class _TeamCollectionProxy {}

    /**
     * @property-read _TeamInvitationCollectionProxy $average
     * @property-read _TeamInvitationCollectionProxy $avg
     * @property-read _TeamInvitationCollectionProxy $contains
     * @property-read _TeamInvitationCollectionProxy $each
     * @property-read _TeamInvitationCollectionProxy $every
     * @property-read _TeamInvitationCollectionProxy $filter
     * @property-read _TeamInvitationCollectionProxy $first
     * @property-read _TeamInvitationCollectionProxy $flatMap
     * @property-read _TeamInvitationCollectionProxy $groupBy
     * @property-read _TeamInvitationCollectionProxy $keyBy
     * @property-read _TeamInvitationCollectionProxy $map
     * @property-read _TeamInvitationCollectionProxy $max
     * @property-read _TeamInvitationCollectionProxy $min
     * @property-read _TeamInvitationCollectionProxy $partition
     * @property-read _TeamInvitationCollectionProxy $reject
     * @property-read _TeamInvitationCollectionProxy $some
     * @property-read _TeamInvitationCollectionProxy $sortBy
     * @property-read _TeamInvitationCollectionProxy $sortByDesc
     * @property-read _TeamInvitationCollectionProxy $sum
     * @property-read _TeamInvitationCollectionProxy $unique
     */
    class _TeamInvitationCollection extends _BaseCollection {}

    /**
     * @see \App\Models\TeamInvitation::team
     * @method _TeamInvitationCollection team()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TeamInvitationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TeamInvitationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TeamInvitationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TeamInvitationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TeamInvitationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TeamInvitationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TeamInvitationCollection delete()
     */
    class _TeamInvitationCollectionProxy {}

    /**
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _TeamInvitationCollection|TeamInvitation[] cursor()
     * @method TeamInvitation|null find($id, array $columns = ['*'])
     * @method _TeamInvitationCollection|TeamInvitation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TeamInvitation findOrFail($id, array $columns = ['*'])
     * @method _TeamInvitationCollection|TeamInvitation[] findOrNew($id, array $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _TeamInvitationCollection|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _TeamInvitationCollection|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _TeamInvitationCollection|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_TeamInvitationCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_TeamInvitationCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _TeamInvitationQueryBuilder extends _BaseBuilder {}

    /**
     * @method _TeamQueryBuilder whereId($value)
     * @method _TeamQueryBuilder whereName($value)
     * @method _TeamQueryBuilder whereDisplayName($value)
     * @method _TeamQueryBuilder whereDescription($value)
     * @method _TeamQueryBuilder whereCreatedAt($value)
     * @method _TeamQueryBuilder whereUpdatedAt($value)
     * @method Team baseSole(array|string $columns = ['*'])
     * @method Team create(array $attributes = [])
     * @method _TeamCollection|Team[] cursor()
     * @method Team|null find($id, array $columns = ['*'])
     * @method _TeamCollection|Team[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Team findOrFail($id, array $columns = ['*'])
     * @method _TeamCollection|Team[] findOrNew($id, array $columns = ['*'])
     * @method Team first(array|string $columns = ['*'])
     * @method Team firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Team firstOrCreate(array $attributes = [], array $values = [])
     * @method Team firstOrFail(array $columns = ['*'])
     * @method Team firstOrNew(array $attributes = [], array $values = [])
     * @method Team firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Team forceCreate(array $attributes)
     * @method _TeamCollection|Team[] fromQuery(string $query, array $bindings = [])
     * @method _TeamCollection|Team[] get(array|string $columns = ['*'])
     * @method Team getModel()
     * @method Team[] getModels(array|string $columns = ['*'])
     * @method _TeamCollection|Team[] hydrate(array $items)
     * @method Team make(array $attributes = [])
     * @method Team newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Team[]|_TeamCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Team[]|_TeamCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Team sole(array|string $columns = ['*'])
     * @method Team updateOrCreate(array $attributes, array $values = [])
     */
    class _TeamQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _UserCollectionProxy $average
     * @property-read _UserCollectionProxy $avg
     * @property-read _UserCollectionProxy $contains
     * @property-read _UserCollectionProxy $each
     * @property-read _UserCollectionProxy $every
     * @property-read _UserCollectionProxy $filter
     * @property-read _UserCollectionProxy $first
     * @property-read _UserCollectionProxy $flatMap
     * @property-read _UserCollectionProxy $groupBy
     * @property-read _UserCollectionProxy $keyBy
     * @property-read _UserCollectionProxy $map
     * @property-read _UserCollectionProxy $max
     * @property-read _UserCollectionProxy $min
     * @property-read _UserCollectionProxy $partition
     * @property-read _UserCollectionProxy $reject
     * @property-read _UserCollectionProxy $some
     * @property-read _UserCollectionProxy $sortBy
     * @property-read _UserCollectionProxy $sortByDesc
     * @property-read _UserCollectionProxy $sum
     * @property-read _UserCollectionProxy $unique
     */
    class _UserCollection extends _BaseCollection {}

    /**
     * @property _UserCollection|mixed $id
     * @property _UserCollection|mixed $name
     * @property _UserCollection|mixed $phone_number
     * @property _UserCollection|mixed $password
     * @property _UserCollection|mixed $profile_photo_path
     * @property _UserCollection|mixed $remember_token
     * @property _UserCollection|mixed $created_at
     * @property _UserCollection|mixed $updated_at
     * @property _UserCollection|mixed $two_factor_secret
     * @property _UserCollection|mixed $two_factor_recovery_codes
     * @property _UserCollection|mixed $company_id
     * @property _UserCollection|mixed $company
     * @see \App\Models\User::hasCompanyId
     * @method _UserCollection hasCompanyId()
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::replaceRecoveryCode
     * @method _UserCollection replaceRecoveryCode(string $code)
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::twoFactorQrCodeUrl
     * @method _UserCollection twoFactorQrCodeUrl()
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::twoFactorQrCodeSvg
     * @method _UserCollection twoFactorQrCodeSvg()
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::recoveryCodes
     * @method _UserCollection recoveryCodes()
     * @see \Laravel\Sanctum\HasApiTokens::tokens
     * @method _UserCollection tokens()
     * @see \Laravel\Sanctum\HasApiTokens::createToken
     * @method _UserCollection createToken(string $name, array $abilities = ['*'])
     * @see \Laravel\Sanctum\HasApiTokens::tokenCan
     * @method _UserCollection tokenCan(string $ability)
     * @see \Laravel\Sanctum\HasApiTokens::currentAccessToken
     * @method _UserCollection currentAccessToken()
     * @see \Laravel\Sanctum\HasApiTokens::withAccessToken
     * @method _UserCollection withAccessToken(HasAbilities $accessToken)
     * @see \Illuminate\Notifications\RoutesNotifications::notifyNow
     * @method _UserCollection notifyNow($instance, array $channels = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notify
     * @method _UserCollection notify($instance)
     * @see \Illuminate\Notifications\RoutesNotifications::routeNotificationFor
     * @method _UserCollection routeNotificationFor(string $driver, Notification|null $notification = null)
     * @see \Illuminate\Notifications\HasDatabaseNotifications::readNotifications
     * @method _UserCollection readNotifications()
     * @see \Illuminate\Notifications\HasDatabaseNotifications::unreadNotifications
     * @method _UserCollection unreadNotifications()
     * @see \Laratrust\Traits\LaratrustUserTrait::isAbleToAndOwns
     * @method _UserCollection isAbleToAndOwns(array|string $permission, Object $thing, array $options = [])
     * @see \Laratrust\Traits\LaratrustUserTrait::attachPermissions
     * @method _UserCollection attachPermissions($permissions = [], $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::owns
     * @method _UserCollection owns(Object $thing, string $foreignKeyName = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::detachRole
     * @method _UserCollection detachRole($role, $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::detachPermissions
     * @method _UserCollection detachPermissions($permissions = [], $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::allPermissions
     * @method _UserCollection allPermissions(array|null $columns = null, false|null $team = false)
     * @see \Laratrust\Traits\LaratrustUserTrait::isA
     * @method _UserCollection isA($role, bool|string $team = null, bool $requireAll = false)
     * @see \Laratrust\Traits\LaratrustUserTrait::hasRoleAndOwns
     * @method _UserCollection hasRoleAndOwns(array|string $role, Object $thing, array $options = [])
     * @see \Laratrust\Traits\LaratrustUserTrait::permissionsTeams
     * @method _UserCollection permissionsTeams()
     * @see \Laratrust\Traits\LaratrustUserTrait::allTeams
     * @method _UserCollection allTeams(array|null $columns = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::attachRoles
     * @method _UserCollection attachRoles($roles = [], $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::hasRole
     * @method _UserCollection hasRole(array|string $name, bool|string $team = null, bool $requireAll = false)
     * @see \Laratrust\Traits\LaratrustUserTrait::flushCache
     * @method _UserCollection flushCache()
     * @see \Laratrust\Traits\LaratrustUserTrait::syncRolesWithoutDetaching
     * @method _UserCollection syncRolesWithoutDetaching(array $roles = [], $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::isAbleTo
     * @method _UserCollection isAbleTo(array|string $permission, bool|string $team = null, bool $requireAll = false)
     * @see \Laratrust\Traits\LaratrustUserTrait::detachRoles
     * @method _UserCollection detachRoles($roles = [], $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::getRoles
     * @method _UserCollection getRoles(bool|string $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::syncPermissions
     * @method _UserCollection syncPermissions(array $permissions = [], $team = null, bool $detaching = true)
     * @see \Laratrust\Traits\LaratrustUserTrait::rolesTeams
     * @method _UserCollection rolesTeams()
     * @see \Laratrust\Traits\LaratrustUserTrait::syncRoles
     * @method _UserCollection syncRoles(array $roles = [], $team = null, bool $detaching = true)
     * @see \Laratrust\Traits\LaratrustUserTrait::attachPermission
     * @method _UserCollection attachPermission($permission, $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::detachPermission
     * @method _UserCollection detachPermission($permission, $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::syncPermissionsWithoutDetaching
     * @method _UserCollection syncPermissionsWithoutDetaching(array $permissions = [], $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::hasPermission
     * @method _UserCollection hasPermission(array|string $permission, bool|string $team = null, bool $requireAll = false)
     * @see \Laratrust\Traits\LaratrustUserTrait::ability
     * @method _UserCollection ability(array|string $roles, array|string $permissions, bool|string $team = null, array $options = [])
     * @see \Laratrust\Traits\LaratrustUserTrait::attachRole
     * @method _UserCollection attachRole($role, $team = null)
     * @see \Laratrust\Traits\LaratrustUserTrait::isAn
     * @method _UserCollection isAn($role, bool|string $team = null, bool $requireAll = false)
     * @see \Laravel\Jetstream\HasProfilePhoto::updateProfilePhoto
     * @method _UserCollection updateProfilePhoto(UploadedFile $photo)
     * @see \Laravel\Jetstream\HasProfilePhoto::deleteProfilePhoto
     * @method _UserCollection deleteProfilePhoto()
     * @see \Illuminate\Auth\MustVerifyEmail::sendEmailVerificationNotification
     * @method _UserCollection sendEmailVerificationNotification()
     * @see \Illuminate\Auth\MustVerifyEmail::getEmailForVerification
     * @method _UserCollection getEmailForVerification()
     * @see \Illuminate\Auth\MustVerifyEmail::markEmailAsVerified
     * @method _UserCollection markEmailAsVerified()
     * @see \Illuminate\Auth\MustVerifyEmail::hasVerifiedEmail
     * @method _UserCollection hasVerifiedEmail()
     * @see \Illuminate\Auth\Authenticatable::getRememberTokenName
     * @method _UserCollection getRememberTokenName()
     * @see \Illuminate\Auth\Authenticatable::getAuthPassword
     * @method _UserCollection getAuthPassword()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifier
     * @method _UserCollection getAuthIdentifier()
     * @see \Illuminate\Auth\Authenticatable::getRememberToken
     * @method _UserCollection getRememberToken()
     * @see \Illuminate\Auth\Authenticatable::setRememberToken
     * @method _UserCollection setRememberToken(string $value)
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierName
     * @method _UserCollection getAuthIdentifierName()
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::can
     * @method _UserCollection can(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::canAny
     * @method _UserCollection canAny(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cant
     * @method _UserCollection cant(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cannot
     * @method _UserCollection cannot(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Auth\Passwords\CanResetPassword::sendPasswordResetNotification
     * @method _UserCollection sendPasswordResetNotification(string $token)
     * @see \Illuminate\Auth\Passwords\CanResetPassword::getEmailForPasswordReset
     * @method _UserCollection getEmailForPasswordReset()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _UserCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _UserCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _UserCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _UserCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _UserCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _UserCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _UserCollection delete()
     */
    class _UserCollectionProxy {}

    /**
     * @method _UserQueryBuilder whereId($value)
     * @method _UserQueryBuilder whereName($value)
     * @method _UserQueryBuilder wherePhoneNumber($value)
     * @method _UserQueryBuilder wherePassword($value)
     * @method _UserQueryBuilder whereProfilePhotoPath($value)
     * @method _UserQueryBuilder whereRememberToken($value)
     * @method _UserQueryBuilder whereCreatedAt($value)
     * @method _UserQueryBuilder whereUpdatedAt($value)
     * @method _UserQueryBuilder whereTwoFactorSecret($value)
     * @method _UserQueryBuilder whereTwoFactorRecoveryCodes($value)
     * @method _UserQueryBuilder whereCompanyId($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _UserCollection|User[] cursor()
     * @method User|null find($id, array $columns = ['*'])
     * @method _UserCollection|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User findOrFail($id, array $columns = ['*'])
     * @method _UserCollection|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _UserCollection|User[] fromQuery(string $query, array $bindings = [])
     * @method _UserCollection|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _UserCollection|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_UserCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_UserCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _UserQueryBuilder orWherePermissionIs(string $permission = '')
     * @method _UserQueryBuilder orWhereRoleIs(string $role = '', $team = null)
     * @method _UserQueryBuilder whereDoesntHavePermission()
     * @method _UserQueryBuilder whereDoesntHaveRole()
     * @method _UserQueryBuilder wherePermissionIs(string $permission = '', $boolean = 'and')
     * @method _UserQueryBuilder whereRoleIs(string $role = '', $team = null, string $boolean = 'and')
     */
    class _UserQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Database\Factories {

    use App\Domain\Trip\Models\Trip;
    use App\Models\Team;
    use App\Models\User;
    use Database\Factories\TeamFactory;
    use Database\Factories\TripFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Models\_TeamCollection;
    use LaravelIdea\Helper\App\Models\_UserCollection;

    /**
     * @method Team createOne(array $attributes = [])
     * @method Team makeOne(array|callable $attributes = [])
     * @method _TeamCollection|Team[]|Team create(array $attributes = [], Model|null $parent = null)
     * @method _TeamCollection|Team[]|Team make(array $attributes = [], Model|null $parent = null)
     * @method _TeamCollection|Team[] createMany(iterable $records)
     */
    class _TeamFactory extends TeamFactory {}

    /**
     * @method Trip createOne(array $attributes = [])
     * @method Trip makeOne(array|callable $attributes = [])
     * @method _TripCollection|Trip[]|Trip create(array $attributes = [], Model|null $parent = null)
     * @method _TripCollection|Trip[]|Trip make(array $attributes = [], Model|null $parent = null)
     * @method _TripCollection|Trip[] createMany(iterable $records)
     */
    class _TripFactory extends TripFactory {}

    /**
     * @method User createOne(array $attributes = [])
     * @method User makeOne(array|callable $attributes = [])
     * @method _UserCollection|User[]|User create(array $attributes = [], Model|null $parent = null)
     * @method _UserCollection|User[]|User make(array $attributes = [], Model|null $parent = null)
     * @method _UserCollection|User[] createMany(iterable $records)
     */
    class _UserFactory extends UserFactory {}
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _DatabaseNotificationCollectionProxy $average
     * @property-read _DatabaseNotificationCollectionProxy $avg
     * @property-read _DatabaseNotificationCollectionProxy $contains
     * @property-read _DatabaseNotificationCollectionProxy $each
     * @property-read _DatabaseNotificationCollectionProxy $every
     * @property-read _DatabaseNotificationCollectionProxy $filter
     * @property-read _DatabaseNotificationCollectionProxy $first
     * @property-read _DatabaseNotificationCollectionProxy $flatMap
     * @property-read _DatabaseNotificationCollectionProxy $groupBy
     * @property-read _DatabaseNotificationCollectionProxy $keyBy
     * @property-read _DatabaseNotificationCollectionProxy $map
     * @property-read _DatabaseNotificationCollectionProxy $max
     * @property-read _DatabaseNotificationCollectionProxy $min
     * @property-read _DatabaseNotificationCollectionProxy $partition
     * @property-read _DatabaseNotificationCollectionProxy $reject
     * @property-read _DatabaseNotificationCollectionProxy $some
     * @property-read _DatabaseNotificationCollectionProxy $sortBy
     * @property-read _DatabaseNotificationCollectionProxy $sortByDesc
     * @property-read _DatabaseNotificationCollectionProxy $sum
     * @property-read _DatabaseNotificationCollectionProxy $unique
     * @method $this mapWithKeys(callable $callback)
     * @method $this pad(int $size, $value)
     * @method $this keys()
     * @method $this loadMin(array|string $relations, string $column)
     * @method $this loadMissing(array|string $relations)
     * @method $this loadCount(array|string $relations)
     * @method $this merge(array|\ArrayAccess $items)
     * @method $this loadMax(array|string $relations, string $column)
     * @method $this loadMorph(string $relation, array $relations)
     * @method $this loadSum(array|string $relations, string $column)
     * @method $this pluck(array|string $value, null|string $key = null)
     * @method $this map(callable $callback)
     * @method $this unique(callable|null|string $key = null, bool $strict = false)
     * @method $this load(array|string $relations)
     * @method $this diff(array|\ArrayAccess $items)
     * @method $this only($keys)
     * @method $this collapse()
     * @method $this append(array|string $attributes)
     * @method $this makeHidden(array|string $attributes)
     * @method $this flatten(int $depth = INF)
     * @method $this makeVisible(array|string $attributes)
     * @method $this fresh(array|string $with = [])
     * @method $this flip()
     * @method $this intersect(array|\ArrayAccess $items)
     * @method $this except($keys)
     * @method $this loadAvg(array|string $relations, string $column)
     * @method $this zip(array $items)
     * @method $this loadAggregate(array|string $relations, string $column, string $function = null)
     * @method $this loadMorphCount(string $relation, array $relations)
     * @mixin DatabaseNotificationCollection
     */
    class _DatabaseNotificationCollection extends _BaseCollection {}

    /**
     * @property _DatabaseNotificationCollection|mixed $notifiable
     * @see \Illuminate\Notifications\DatabaseNotification::markAsRead
     * @method _DatabaseNotificationCollection markAsRead()
     * @see \Illuminate\Notifications\DatabaseNotification::read
     * @method _DatabaseNotificationCollection read()
     * @see \Illuminate\Notifications\DatabaseNotification::markAsUnread
     * @method _DatabaseNotificationCollection markAsUnread()
     * @see \Illuminate\Notifications\DatabaseNotification::unread
     * @method _DatabaseNotificationCollection unread()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _DatabaseNotificationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _DatabaseNotificationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _DatabaseNotificationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _DatabaseNotificationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _DatabaseNotificationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _DatabaseNotificationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _DatabaseNotificationCollection delete()
     */
    class _DatabaseNotificationCollectionProxy {}

    /**
     * @method DatabaseNotification baseSole(array|string $columns = ['*'])
     * @method DatabaseNotification create(array $attributes = [])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null find($id, array $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DatabaseNotification findOrFail($id, array $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _DatabaseNotificationCollection|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DatabaseNotification[]|_DatabaseNotificationCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DatabaseNotification[]|_DatabaseNotificationCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DatabaseNotification sole(array|string $columns = ['*'])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method _DatabaseNotificationQueryBuilder read()
     * @method _DatabaseNotificationQueryBuilder unread()
     */
    class _DatabaseNotificationQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laratrust\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laratrust\Models\LaratrustPermission;
    use Laratrust\Models\LaratrustRole;
    use Laratrust\Models\LaratrustTeam;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _LaratrustPermissionCollectionProxy $average
     * @property-read _LaratrustPermissionCollectionProxy $avg
     * @property-read _LaratrustPermissionCollectionProxy $contains
     * @property-read _LaratrustPermissionCollectionProxy $each
     * @property-read _LaratrustPermissionCollectionProxy $every
     * @property-read _LaratrustPermissionCollectionProxy $filter
     * @property-read _LaratrustPermissionCollectionProxy $first
     * @property-read _LaratrustPermissionCollectionProxy $flatMap
     * @property-read _LaratrustPermissionCollectionProxy $groupBy
     * @property-read _LaratrustPermissionCollectionProxy $keyBy
     * @property-read _LaratrustPermissionCollectionProxy $map
     * @property-read _LaratrustPermissionCollectionProxy $max
     * @property-read _LaratrustPermissionCollectionProxy $min
     * @property-read _LaratrustPermissionCollectionProxy $partition
     * @property-read _LaratrustPermissionCollectionProxy $reject
     * @property-read _LaratrustPermissionCollectionProxy $some
     * @property-read _LaratrustPermissionCollectionProxy $sortBy
     * @property-read _LaratrustPermissionCollectionProxy $sortByDesc
     * @property-read _LaratrustPermissionCollectionProxy $sum
     * @property-read _LaratrustPermissionCollectionProxy $unique
     */
    class _LaratrustPermissionCollection extends _BaseCollection {}

    /**
     * @see \Laratrust\Traits\LaratrustPermissionTrait::getMorphByUserRelation
     * @method _LaratrustPermissionCollection getMorphByUserRelation(string $relationship)
     * @see \Laratrust\Traits\LaratrustDynamicUserRelationsCalls::getUsersRelationValue
     * @method _LaratrustPermissionCollection getUsersRelationValue(string $key)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _LaratrustPermissionCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _LaratrustPermissionCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _LaratrustPermissionCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _LaratrustPermissionCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _LaratrustPermissionCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _LaratrustPermissionCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _LaratrustPermissionCollection delete()
     */
    class _LaratrustPermissionCollectionProxy {}

    /**
     * @method LaratrustPermission baseSole(array|string $columns = ['*'])
     * @method LaratrustPermission create(array $attributes = [])
     * @method _LaratrustPermissionCollection|LaratrustPermission[] cursor()
     * @method LaratrustPermission|null find($id, array $columns = ['*'])
     * @method _LaratrustPermissionCollection|LaratrustPermission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method LaratrustPermission findOrFail($id, array $columns = ['*'])
     * @method _LaratrustPermissionCollection|LaratrustPermission[] findOrNew($id, array $columns = ['*'])
     * @method LaratrustPermission first(array|string $columns = ['*'])
     * @method LaratrustPermission firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method LaratrustPermission firstOrCreate(array $attributes = [], array $values = [])
     * @method LaratrustPermission firstOrFail(array $columns = ['*'])
     * @method LaratrustPermission firstOrNew(array $attributes = [], array $values = [])
     * @method LaratrustPermission firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LaratrustPermission forceCreate(array $attributes)
     * @method _LaratrustPermissionCollection|LaratrustPermission[] fromQuery(string $query, array $bindings = [])
     * @method _LaratrustPermissionCollection|LaratrustPermission[] get(array|string $columns = ['*'])
     * @method LaratrustPermission getModel()
     * @method LaratrustPermission[] getModels(array|string $columns = ['*'])
     * @method _LaratrustPermissionCollection|LaratrustPermission[] hydrate(array $items)
     * @method LaratrustPermission make(array $attributes = [])
     * @method LaratrustPermission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LaratrustPermission[]|_LaratrustPermissionCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LaratrustPermission[]|_LaratrustPermissionCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LaratrustPermission sole(array|string $columns = ['*'])
     * @method LaratrustPermission updateOrCreate(array $attributes, array $values = [])
     */
    class _LaratrustPermissionQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _LaratrustRoleCollectionProxy $average
     * @property-read _LaratrustRoleCollectionProxy $avg
     * @property-read _LaratrustRoleCollectionProxy $contains
     * @property-read _LaratrustRoleCollectionProxy $each
     * @property-read _LaratrustRoleCollectionProxy $every
     * @property-read _LaratrustRoleCollectionProxy $filter
     * @property-read _LaratrustRoleCollectionProxy $first
     * @property-read _LaratrustRoleCollectionProxy $flatMap
     * @property-read _LaratrustRoleCollectionProxy $groupBy
     * @property-read _LaratrustRoleCollectionProxy $keyBy
     * @property-read _LaratrustRoleCollectionProxy $map
     * @property-read _LaratrustRoleCollectionProxy $max
     * @property-read _LaratrustRoleCollectionProxy $min
     * @property-read _LaratrustRoleCollectionProxy $partition
     * @property-read _LaratrustRoleCollectionProxy $reject
     * @property-read _LaratrustRoleCollectionProxy $some
     * @property-read _LaratrustRoleCollectionProxy $sortBy
     * @property-read _LaratrustRoleCollectionProxy $sortByDesc
     * @property-read _LaratrustRoleCollectionProxy $sum
     * @property-read _LaratrustRoleCollectionProxy $unique
     */
    class _LaratrustRoleCollection extends _BaseCollection {}

    /**
     * @see \Laratrust\Traits\LaratrustRoleTrait::attachPermissions
     * @method _LaratrustRoleCollection attachPermissions($permissions)
     * @see \Laratrust\Traits\LaratrustRoleTrait::getMorphByUserRelation
     * @method _LaratrustRoleCollection getMorphByUserRelation(string $relationship)
     * @see \Laratrust\Traits\LaratrustRoleTrait::syncPermissions
     * @method _LaratrustRoleCollection syncPermissions($permissions)
     * @see \Laratrust\Traits\LaratrustRoleTrait::detachPermissions
     * @method _LaratrustRoleCollection detachPermissions($permissions = null)
     * @see \Laratrust\Traits\LaratrustRoleTrait::detachPermission
     * @method _LaratrustRoleCollection detachPermission(array|object $permission)
     * @see \Laratrust\Traits\LaratrustRoleTrait::attachPermission
     * @method _LaratrustRoleCollection attachPermission(array|object $permission)
     * @see \Laratrust\Traits\LaratrustRoleTrait::hasPermission
     * @method _LaratrustRoleCollection hasPermission(array|string $permission, bool $requireAll = false)
     * @see \Laratrust\Traits\LaratrustRoleTrait::flushCache
     * @method _LaratrustRoleCollection flushCache()
     * @see \Laratrust\Traits\LaratrustDynamicUserRelationsCalls::getUsersRelationValue
     * @method _LaratrustRoleCollection getUsersRelationValue(string $key)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _LaratrustRoleCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _LaratrustRoleCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _LaratrustRoleCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _LaratrustRoleCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _LaratrustRoleCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _LaratrustRoleCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _LaratrustRoleCollection delete()
     */
    class _LaratrustRoleCollectionProxy {}

    /**
     * @method LaratrustRole baseSole(array|string $columns = ['*'])
     * @method LaratrustRole create(array $attributes = [])
     * @method _LaratrustRoleCollection|LaratrustRole[] cursor()
     * @method LaratrustRole|null find($id, array $columns = ['*'])
     * @method _LaratrustRoleCollection|LaratrustRole[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method LaratrustRole findOrFail($id, array $columns = ['*'])
     * @method _LaratrustRoleCollection|LaratrustRole[] findOrNew($id, array $columns = ['*'])
     * @method LaratrustRole first(array|string $columns = ['*'])
     * @method LaratrustRole firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method LaratrustRole firstOrCreate(array $attributes = [], array $values = [])
     * @method LaratrustRole firstOrFail(array $columns = ['*'])
     * @method LaratrustRole firstOrNew(array $attributes = [], array $values = [])
     * @method LaratrustRole firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LaratrustRole forceCreate(array $attributes)
     * @method _LaratrustRoleCollection|LaratrustRole[] fromQuery(string $query, array $bindings = [])
     * @method _LaratrustRoleCollection|LaratrustRole[] get(array|string $columns = ['*'])
     * @method LaratrustRole getModel()
     * @method LaratrustRole[] getModels(array|string $columns = ['*'])
     * @method _LaratrustRoleCollection|LaratrustRole[] hydrate(array $items)
     * @method LaratrustRole make(array $attributes = [])
     * @method LaratrustRole newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LaratrustRole[]|_LaratrustRoleCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LaratrustRole[]|_LaratrustRoleCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LaratrustRole sole(array|string $columns = ['*'])
     * @method LaratrustRole updateOrCreate(array $attributes, array $values = [])
     */
    class _LaratrustRoleQueryBuilder extends _BaseBuilder {}

    /**
     * @property-read _LaratrustTeamCollectionProxy $average
     * @property-read _LaratrustTeamCollectionProxy $avg
     * @property-read _LaratrustTeamCollectionProxy $contains
     * @property-read _LaratrustTeamCollectionProxy $each
     * @property-read _LaratrustTeamCollectionProxy $every
     * @property-read _LaratrustTeamCollectionProxy $filter
     * @property-read _LaratrustTeamCollectionProxy $first
     * @property-read _LaratrustTeamCollectionProxy $flatMap
     * @property-read _LaratrustTeamCollectionProxy $groupBy
     * @property-read _LaratrustTeamCollectionProxy $keyBy
     * @property-read _LaratrustTeamCollectionProxy $map
     * @property-read _LaratrustTeamCollectionProxy $max
     * @property-read _LaratrustTeamCollectionProxy $min
     * @property-read _LaratrustTeamCollectionProxy $partition
     * @property-read _LaratrustTeamCollectionProxy $reject
     * @property-read _LaratrustTeamCollectionProxy $some
     * @property-read _LaratrustTeamCollectionProxy $sortBy
     * @property-read _LaratrustTeamCollectionProxy $sortByDesc
     * @property-read _LaratrustTeamCollectionProxy $sum
     * @property-read _LaratrustTeamCollectionProxy $unique
     */
    class _LaratrustTeamCollection extends _BaseCollection {}

    /**
     * @see \Laratrust\Traits\LaratrustTeamTrait::getMorphByUserRelation
     * @method _LaratrustTeamCollection getMorphByUserRelation(string $relationship)
     * @see \Laratrust\Traits\LaratrustDynamicUserRelationsCalls::getUsersRelationValue
     * @method _LaratrustTeamCollection getUsersRelationValue(string $key)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _LaratrustTeamCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _LaratrustTeamCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _LaratrustTeamCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _LaratrustTeamCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _LaratrustTeamCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _LaratrustTeamCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _LaratrustTeamCollection delete()
     */
    class _LaratrustTeamCollectionProxy {}

    /**
     * @method LaratrustTeam baseSole(array|string $columns = ['*'])
     * @method LaratrustTeam create(array $attributes = [])
     * @method _LaratrustTeamCollection|LaratrustTeam[] cursor()
     * @method LaratrustTeam|null find($id, array $columns = ['*'])
     * @method _LaratrustTeamCollection|LaratrustTeam[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method LaratrustTeam findOrFail($id, array $columns = ['*'])
     * @method _LaratrustTeamCollection|LaratrustTeam[] findOrNew($id, array $columns = ['*'])
     * @method LaratrustTeam first(array|string $columns = ['*'])
     * @method LaratrustTeam firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method LaratrustTeam firstOrCreate(array $attributes = [], array $values = [])
     * @method LaratrustTeam firstOrFail(array $columns = ['*'])
     * @method LaratrustTeam firstOrNew(array $attributes = [], array $values = [])
     * @method LaratrustTeam firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LaratrustTeam forceCreate(array $attributes)
     * @method _LaratrustTeamCollection|LaratrustTeam[] fromQuery(string $query, array $bindings = [])
     * @method _LaratrustTeamCollection|LaratrustTeam[] get(array|string $columns = ['*'])
     * @method LaratrustTeam getModel()
     * @method LaratrustTeam[] getModels(array|string $columns = ['*'])
     * @method _LaratrustTeamCollection|LaratrustTeam[] hydrate(array $items)
     * @method LaratrustTeam make(array $attributes = [])
     * @method LaratrustTeam newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LaratrustTeam[]|_LaratrustTeamCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LaratrustTeam[]|_LaratrustTeamCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LaratrustTeam sole(array|string $columns = ['*'])
     * @method LaratrustTeam updateOrCreate(array $attributes, array $values = [])
     */
    class _LaratrustTeamQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Jetstream {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Jetstream\TeamInvitation;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _TeamInvitationCollectionProxy $average
     * @property-read _TeamInvitationCollectionProxy $avg
     * @property-read _TeamInvitationCollectionProxy $contains
     * @property-read _TeamInvitationCollectionProxy $each
     * @property-read _TeamInvitationCollectionProxy $every
     * @property-read _TeamInvitationCollectionProxy $filter
     * @property-read _TeamInvitationCollectionProxy $first
     * @property-read _TeamInvitationCollectionProxy $flatMap
     * @property-read _TeamInvitationCollectionProxy $groupBy
     * @property-read _TeamInvitationCollectionProxy $keyBy
     * @property-read _TeamInvitationCollectionProxy $map
     * @property-read _TeamInvitationCollectionProxy $max
     * @property-read _TeamInvitationCollectionProxy $min
     * @property-read _TeamInvitationCollectionProxy $partition
     * @property-read _TeamInvitationCollectionProxy $reject
     * @property-read _TeamInvitationCollectionProxy $some
     * @property-read _TeamInvitationCollectionProxy $sortBy
     * @property-read _TeamInvitationCollectionProxy $sortByDesc
     * @property-read _TeamInvitationCollectionProxy $sum
     * @property-read _TeamInvitationCollectionProxy $unique
     */
    class _TeamInvitationCollection extends _BaseCollection {}

    /**
     * @see \Laravel\Jetstream\TeamInvitation::team
     * @method _TeamInvitationCollection team()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TeamInvitationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TeamInvitationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TeamInvitationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TeamInvitationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TeamInvitationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TeamInvitationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TeamInvitationCollection delete()
     */
    class _TeamInvitationCollectionProxy {}

    /**
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _TeamInvitationCollection|TeamInvitation[] cursor()
     * @method TeamInvitation|null find($id, array $columns = ['*'])
     * @method _TeamInvitationCollection|TeamInvitation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TeamInvitation findOrFail($id, array $columns = ['*'])
     * @method _TeamInvitationCollection|TeamInvitation[] findOrNew($id, array $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _TeamInvitationCollection|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _TeamInvitationCollection|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _TeamInvitationCollection|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_TeamInvitationCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_TeamInvitationCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _TeamInvitationQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @property-read _PersonalAccessTokenCollectionProxy $average
     * @property-read _PersonalAccessTokenCollectionProxy $avg
     * @property-read _PersonalAccessTokenCollectionProxy $contains
     * @property-read _PersonalAccessTokenCollectionProxy $each
     * @property-read _PersonalAccessTokenCollectionProxy $every
     * @property-read _PersonalAccessTokenCollectionProxy $filter
     * @property-read _PersonalAccessTokenCollectionProxy $first
     * @property-read _PersonalAccessTokenCollectionProxy $flatMap
     * @property-read _PersonalAccessTokenCollectionProxy $groupBy
     * @property-read _PersonalAccessTokenCollectionProxy $keyBy
     * @property-read _PersonalAccessTokenCollectionProxy $map
     * @property-read _PersonalAccessTokenCollectionProxy $max
     * @property-read _PersonalAccessTokenCollectionProxy $min
     * @property-read _PersonalAccessTokenCollectionProxy $partition
     * @property-read _PersonalAccessTokenCollectionProxy $reject
     * @property-read _PersonalAccessTokenCollectionProxy $some
     * @property-read _PersonalAccessTokenCollectionProxy $sortBy
     * @property-read _PersonalAccessTokenCollectionProxy $sortByDesc
     * @property-read _PersonalAccessTokenCollectionProxy $sum
     * @property-read _PersonalAccessTokenCollectionProxy $unique
     */
    class _PersonalAccessTokenCollection extends _BaseCollection {}

    /**
     * @property _PersonalAccessTokenCollection|mixed $id
     * @property _PersonalAccessTokenCollection|mixed $tokenable_id
     * @property _PersonalAccessTokenCollection|mixed $tokenable_type
     * @property _PersonalAccessTokenCollection|mixed $name
     * @property _PersonalAccessTokenCollection|mixed $token
     * @property _PersonalAccessTokenCollection|mixed $abilities
     * @property _PersonalAccessTokenCollection|mixed $last_used_at
     * @property _PersonalAccessTokenCollection|mixed $created_at
     * @property _PersonalAccessTokenCollection|mixed $updated_at
     * @property _PersonalAccessTokenCollection|mixed $tokenable
     * @see \Laravel\Sanctum\PersonalAccessToken::can
     * @method _PersonalAccessTokenCollection can(string $ability)
     * @see \Laravel\Sanctum\PersonalAccessToken::cant
     * @method _PersonalAccessTokenCollection cant(string $ability)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PersonalAccessTokenCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PersonalAccessTokenCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PersonalAccessTokenCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PersonalAccessTokenCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PersonalAccessTokenCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PersonalAccessTokenCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PersonalAccessTokenCollection delete()
     */
    class _PersonalAccessTokenCollectionProxy {}

    /**
     * @method _PersonalAccessTokenQueryBuilder whereId($value)
     * @method _PersonalAccessTokenQueryBuilder whereTokenableId($value)
     * @method _PersonalAccessTokenQueryBuilder whereTokenableType($value)
     * @method _PersonalAccessTokenQueryBuilder whereName($value)
     * @method _PersonalAccessTokenQueryBuilder whereToken($value)
     * @method _PersonalAccessTokenQueryBuilder whereAbilities($value)
     * @method _PersonalAccessTokenQueryBuilder whereLastUsedAt($value)
     * @method _PersonalAccessTokenQueryBuilder whereCreatedAt($value)
     * @method _PersonalAccessTokenQueryBuilder whereUpdatedAt($value)
     * @method PersonalAccessToken baseSole(array|string $columns = ['*'])
     * @method PersonalAccessToken create(array $attributes = [])
     * @method _PersonalAccessTokenCollection|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken|null find($id, array $columns = ['*'])
     * @method _PersonalAccessTokenCollection|PersonalAccessToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessToken findOrFail($id, array $columns = ['*'])
     * @method _PersonalAccessTokenCollection|PersonalAccessToken[] findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessToken first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method _PersonalAccessTokenCollection|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _PersonalAccessTokenCollection|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _PersonalAccessTokenCollection|PersonalAccessToken[] hydrate(array $items)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_PersonalAccessTokenCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessToken[]|_PersonalAccessTokenCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _PersonalAccessTokenQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Spatie\MediaLibraryPro\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\MediaCollections\FileAdder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Spatie\MediaLibraryPro\Models\TemporaryUpload;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    /**
     * @property-read _TemporaryUploadCollectionProxy $average
     * @property-read _TemporaryUploadCollectionProxy $avg
     * @property-read _TemporaryUploadCollectionProxy $contains
     * @property-read _TemporaryUploadCollectionProxy $each
     * @property-read _TemporaryUploadCollectionProxy $every
     * @property-read _TemporaryUploadCollectionProxy $filter
     * @property-read _TemporaryUploadCollectionProxy $first
     * @property-read _TemporaryUploadCollectionProxy $flatMap
     * @property-read _TemporaryUploadCollectionProxy $groupBy
     * @property-read _TemporaryUploadCollectionProxy $keyBy
     * @property-read _TemporaryUploadCollectionProxy $map
     * @property-read _TemporaryUploadCollectionProxy $max
     * @property-read _TemporaryUploadCollectionProxy $min
     * @property-read _TemporaryUploadCollectionProxy $partition
     * @property-read _TemporaryUploadCollectionProxy $reject
     * @property-read _TemporaryUploadCollectionProxy $some
     * @property-read _TemporaryUploadCollectionProxy $sortBy
     * @property-read _TemporaryUploadCollectionProxy $sortByDesc
     * @property-read _TemporaryUploadCollectionProxy $sum
     * @property-read _TemporaryUploadCollectionProxy $unique
     */
    class _TemporaryUploadCollection extends _BaseCollection {}

    /**
     * @property _TemporaryUploadCollection|mixed $id
     * @property _TemporaryUploadCollection|mixed $session_id
     * @property _TemporaryUploadCollection|mixed $created_at
     * @property _TemporaryUploadCollection|mixed $updated_at
     * @see \Spatie\MediaLibraryPro\Models\TemporaryUpload::registerMediaConversions
     * @method _TemporaryUploadCollection registerMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibraryPro\Models\TemporaryUpload::moveMedia
     * @method _TemporaryUploadCollection moveMedia(HasMedia $toModel, string $collectionName, string $diskName, string $fileName)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollection
     * @method _TemporaryUploadCollection clearMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::hasMedia
     * @method _TemporaryUploadCollection hasMedia(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaCollection
     * @method _TemporaryUploadCollection addMediaCollection(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deleteMedia
     * @method _TemporaryUploadCollection deleteMedia(int|Media $mediaId)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaPath
     * @method _TemporaryUploadCollection getFirstMediaPath(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMediaCollection
     * @method _TemporaryUploadCollection getMediaCollection(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::shouldDeletePreservingMedia
     * @method _TemporaryUploadCollection shouldDeletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMultipleMediaFromRequest
     * @method _TemporaryUploadCollection addMultipleMediaFromRequest(array $keys)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addAllMediaFromRequest
     * @method _TemporaryUploadCollection addAllMediaFromRequest()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaUrl
     * @method _TemporaryUploadCollection getFallbackMediaUrl(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerMediaCollections
     * @method _TemporaryUploadCollection registerMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::syncFromMediaLibraryRequest
     * @method _TemporaryUploadCollection syncFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaConversion
     * @method _TemporaryUploadCollection addMediaConversion(string $name)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::registerAllMediaConversions
     * @method _TemporaryUploadCollection registerAllMediaConversions(Media $media = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::loadMedia
     * @method _TemporaryUploadCollection loadMedia(string $collectionName)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::updateMedia
     * @method _TemporaryUploadCollection updateMedia(array $newMediaArray, string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::deletePreservingMedia
     * @method _TemporaryUploadCollection deletePreservingMedia()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromDisk
     * @method _TemporaryUploadCollection addMediaFromDisk(string $key, string $disk = null)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMediaUrl
     * @method _TemporaryUploadCollection getFirstMediaUrl(string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromUrl
     * @method _TemporaryUploadCollection addMediaFromUrl(string $url, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMedia
     * @method _TemporaryUploadCollection addMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::copyMedia
     * @method _TemporaryUploadCollection copyMedia(string|UploadedFile $file)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromString
     * @method _TemporaryUploadCollection addMediaFromString(string $text)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromRequest
     * @method _TemporaryUploadCollection addMediaFromRequest(string $key)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstTemporaryUrl
     * @method _TemporaryUploadCollection getFirstTemporaryUrl(\DateTimeInterface $expiration, string $collectionName = 'default', string $conversionName = '')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFallbackMediaPath
     * @method _TemporaryUploadCollection getFallbackMediaPath(string $collectionName = 'default')
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addMediaFromBase64
     * @method _TemporaryUploadCollection addMediaFromBase64(string $base64data, ...$allowedMimeTypes)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getMedia
     * @method _TemporaryUploadCollection getMedia(string $collectionName = 'default', array|callable $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getRegisteredMediaCollections
     * @method _TemporaryUploadCollection getRegisteredMediaCollections()
     * @see \Spatie\MediaLibrary\InteractsWithMedia::getFirstMedia
     * @method _TemporaryUploadCollection getFirstMedia(string $collectionName = 'default', $filters = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::clearMediaCollectionExcept
     * @method _TemporaryUploadCollection clearMediaCollectionExcept(string $collectionName = 'default', Collection|Media[] $excludedMedia = [])
     * @see \Spatie\MediaLibrary\InteractsWithMedia::addFromMediaLibraryRequest
     * @method _TemporaryUploadCollection addFromMediaLibraryRequest(array|null $mediaLibraryRequestItems)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::processUnattachedMedia
     * @method _TemporaryUploadCollection processUnattachedMedia(callable $callable)
     * @see \Spatie\MediaLibrary\InteractsWithMedia::prepareToAttachMedia
     * @method _TemporaryUploadCollection prepareToAttachMedia(Media $media, FileAdder $fileAdder)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TemporaryUploadCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TemporaryUploadCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TemporaryUploadCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TemporaryUploadCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TemporaryUploadCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TemporaryUploadCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TemporaryUploadCollection delete()
     */
    class _TemporaryUploadCollectionProxy {}

    /**
     * @method _TemporaryUploadQueryBuilder whereId($value)
     * @method _TemporaryUploadQueryBuilder whereSessionId($value)
     * @method _TemporaryUploadQueryBuilder whereCreatedAt($value)
     * @method _TemporaryUploadQueryBuilder whereUpdatedAt($value)
     * @method TemporaryUpload baseSole(array|string $columns = ['*'])
     * @method TemporaryUpload create(array $attributes = [])
     * @method _TemporaryUploadCollection|TemporaryUpload[] cursor()
     * @method TemporaryUpload|null find($id, array $columns = ['*'])
     * @method _TemporaryUploadCollection|TemporaryUpload[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TemporaryUpload findOrFail($id, array $columns = ['*'])
     * @method _TemporaryUploadCollection|TemporaryUpload[] findOrNew($id, array $columns = ['*'])
     * @method TemporaryUpload first(array|string $columns = ['*'])
     * @method TemporaryUpload firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method TemporaryUpload firstOrCreate(array $attributes = [], array $values = [])
     * @method TemporaryUpload firstOrFail(array $columns = ['*'])
     * @method TemporaryUpload firstOrNew(array $attributes = [], array $values = [])
     * @method TemporaryUpload firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TemporaryUpload forceCreate(array $attributes)
     * @method _TemporaryUploadCollection|TemporaryUpload[] fromQuery(string $query, array $bindings = [])
     * @method _TemporaryUploadCollection|TemporaryUpload[] get(array|string $columns = ['*'])
     * @method TemporaryUpload getModel()
     * @method TemporaryUpload[] getModels(array|string $columns = ['*'])
     * @method _TemporaryUploadCollection|TemporaryUpload[] hydrate(array $items)
     * @method TemporaryUpload make(array $attributes = [])
     * @method TemporaryUpload newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TemporaryUpload[]|_TemporaryUploadCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TemporaryUpload[]|_TemporaryUploadCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TemporaryUpload sole(array|string $columns = ['*'])
     * @method TemporaryUpload updateOrCreate(array $attributes, array $values = [])
     * @method _TemporaryUploadQueryBuilder old()
     */
    class _TemporaryUploadQueryBuilder extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    /**
     * @property-read _MediaCollectionProxy $average
     * @property-read _MediaCollectionProxy $avg
     * @property-read _MediaCollectionProxy $contains
     * @property-read _MediaCollectionProxy $each
     * @property-read _MediaCollectionProxy $every
     * @property-read _MediaCollectionProxy $filter
     * @property-read _MediaCollectionProxy $first
     * @property-read _MediaCollectionProxy $flatMap
     * @property-read _MediaCollectionProxy $groupBy
     * @property-read _MediaCollectionProxy $keyBy
     * @property-read _MediaCollectionProxy $map
     * @property-read _MediaCollectionProxy $max
     * @property-read _MediaCollectionProxy $min
     * @property-read _MediaCollectionProxy $partition
     * @property-read _MediaCollectionProxy $reject
     * @property-read _MediaCollectionProxy $some
     * @property-read _MediaCollectionProxy $sortBy
     * @property-read _MediaCollectionProxy $sortByDesc
     * @property-read _MediaCollectionProxy $sum
     * @property-read _MediaCollectionProxy $unique
     * @method $this jsonSerialize()
     * @method $this collectionName(string $collectionName)
     * @method $this formFieldName(string $formFieldName)
     * @method $this mapWithKeys(callable $callback)
     * @method $this pad(int $size, $value)
     * @method $this keys()
     * @method $this loadMin(array|string $relations, string $column)
     * @method $this loadMissing(array|string $relations)
     * @method $this loadCount(array|string $relations)
     * @method $this merge(array|\ArrayAccess $items)
     * @method $this loadMax(array|string $relations, string $column)
     * @method $this loadMorph(string $relation, array $relations)
     * @method $this loadSum(array|string $relations, string $column)
     * @method $this pluck(array|string $value, null|string $key = null)
     * @method $this map(callable $callback)
     * @method $this unique(callable|null|string $key = null, bool $strict = false)
     * @method $this load(array|string $relations)
     * @method $this diff(array|\ArrayAccess $items)
     * @method $this only($keys)
     * @method $this collapse()
     * @method $this append(array|string $attributes)
     * @method $this makeHidden(array|string $attributes)
     * @method $this flatten(int $depth = INF)
     * @method $this makeVisible(array|string $attributes)
     * @method $this fresh(array|string $with = [])
     * @method $this flip()
     * @method $this intersect(array|\ArrayAccess $items)
     * @method $this except($keys)
     * @method $this loadAvg(array|string $relations, string $column)
     * @method $this zip(array $items)
     * @method $this loadAggregate(array|string $relations, string $column, string $function = null)
     * @method $this loadMorphCount(string $relation, array $relations)
     * @mixin MediaCollection
     */
    class _MediaCollection extends _BaseCollection {}

    /**
     * @property _MediaCollection|mixed $id
     * @property _MediaCollection|mixed $model_id
     * @property _MediaCollection|mixed $model_type
     * @property _MediaCollection|mixed $uuid
     * @property _MediaCollection|mixed $collection_name
     * @property _MediaCollection|mixed $name
     * @property _MediaCollection|mixed $file_name
     * @property _MediaCollection|mixed $mime_type
     * @property _MediaCollection|mixed $disk
     * @property _MediaCollection|mixed $conversions_disk
     * @property _MediaCollection|mixed $size
     * @property _MediaCollection|mixed $manipulations
     * @property _MediaCollection|mixed $custom_properties
     * @property _MediaCollection|mixed $generated_conversions
     * @property _MediaCollection|mixed $responsive_images
     * @property _MediaCollection|mixed $order_column
     * @property _MediaCollection|mixed $created_at
     * @property _MediaCollection|mixed $updated_at
     * @property _MediaCollection|mixed $model
     * @property _MediaCollection|mixed $temporaryUpload
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::stream
     * @method _MediaCollection stream()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getConversionsDiskDriverName
     * @method _MediaCollection getConversionsDiskDriverName()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getMediaConversionNames
     * @method _MediaCollection getMediaConversionNames()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::move
     * @method _MediaCollection move(HasMedia $model, $collectionName = 'default', string $diskName = '', string $fileName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getResponsiveImageUrls
     * @method _MediaCollection getResponsiveImageUrls(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::hasCustomProperty
     * @method _MediaCollection hasCustomProperty(string $propertyName)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getTypeFromExtension
     * @method _MediaCollection getTypeFromExtension()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::toResponse
     * @method _MediaCollection toResponse($request)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::img
     * @method _MediaCollection img(string $conversionName = '', $extraAttributes = [])
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getUrl
     * @method _MediaCollection getUrl(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getPath
     * @method _MediaCollection getPath(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::forgetCustomProperty
     * @method _MediaCollection forgetCustomProperty(string $name)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::setCustomProperty
     * @method _MediaCollection setCustomProperty(string $name, $value)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getDiskDriverName
     * @method _MediaCollection getDiskDriverName()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::responsiveImages
     * @method _MediaCollection responsiveImages(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getGeneratedConversions
     * @method _MediaCollection getGeneratedConversions()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::hasGeneratedConversion
     * @method _MediaCollection hasGeneratedConversion(string $conversionName)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getFullUrl
     * @method _MediaCollection getFullUrl(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getTypeFromMime
     * @method _MediaCollection getTypeFromMime()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getTemporaryUrl
     * @method _MediaCollection getTemporaryUrl(\DateTimeInterface $expiration, string $conversionName = '', array $options = [])
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::toHtml
     * @method _MediaCollection toHtml()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getSrcset
     * @method _MediaCollection getSrcset(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::hasResponsiveImages
     * @method _MediaCollection hasResponsiveImages(string $conversionName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::getCustomProperty
     * @method _MediaCollection getCustomProperty(string $propertyName, $default = null)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::markAsConversionGenerated
     * @method _MediaCollection markAsConversionGenerated(string $conversionName)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::copy
     * @method _MediaCollection copy(HasMedia $model, $collectionName = 'default', string $diskName = '', string $fileName = '')
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Media::markAsConversionNotGenerated
     * @method _MediaCollection markAsConversionNotGenerated(string $conversionName)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Concerns\CustomMediaProperties::getCustomHeaders
     * @method _MediaCollection getCustomHeaders()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Concerns\CustomMediaProperties::setCustomHeaders
     * @method _MediaCollection setCustomHeaders(array $customHeaders)
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Concerns\IsSorted::setHighestOrderNumber
     * @method _MediaCollection setHighestOrderNumber()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Concerns\IsSorted::getHighestOrderNumber
     * @method _MediaCollection getHighestOrderNumber()
     * @see \Spatie\MediaLibrary\MediaCollections\Models\Concerns\IsSorted::shouldSortWhenCreating
     * @method _MediaCollection shouldSortWhenCreating()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MediaCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MediaCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MediaCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MediaCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MediaCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MediaCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _MediaCollection delete()
     */
    class _MediaCollectionProxy {}

    /**
     * @method _MediaQueryBuilder whereId($value)
     * @method _MediaQueryBuilder whereModelId($value)
     * @method _MediaQueryBuilder whereModelType($value)
     * @method _MediaQueryBuilder whereUuid($value)
     * @method _MediaQueryBuilder whereCollectionName($value)
     * @method _MediaQueryBuilder whereName($value)
     * @method _MediaQueryBuilder whereFileName($value)
     * @method _MediaQueryBuilder whereMimeType($value)
     * @method _MediaQueryBuilder whereDisk($value)
     * @method _MediaQueryBuilder whereConversionsDisk($value)
     * @method _MediaQueryBuilder whereSize($value)
     * @method _MediaQueryBuilder whereManipulations($value)
     * @method _MediaQueryBuilder whereCustomProperties($value)
     * @method _MediaQueryBuilder whereGeneratedConversions($value)
     * @method _MediaQueryBuilder whereResponsiveImages($value)
     * @method _MediaQueryBuilder whereOrderColumn($value)
     * @method _MediaQueryBuilder whereCreatedAt($value)
     * @method _MediaQueryBuilder whereUpdatedAt($value)
     * @method Media baseSole(array|string $columns = ['*'])
     * @method Media create(array $attributes = [])
     * @method _MediaCollection|Media[] cursor()
     * @method Media|null find($id, array $columns = ['*'])
     * @method _MediaCollection|Media[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Media findOrFail($id, array $columns = ['*'])
     * @method _MediaCollection|Media[] findOrNew($id, array $columns = ['*'])
     * @method Media first(array|string $columns = ['*'])
     * @method Media firstOr(array $columns = ['*'], \Closure $callback = null)
     * @method Media firstOrCreate(array $attributes = [], array $values = [])
     * @method Media firstOrFail(array $columns = ['*'])
     * @method Media firstOrNew(array $attributes = [], array $values = [])
     * @method Media firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Media forceCreate(array $attributes)
     * @method _MediaCollection|Media[] fromQuery(string $query, array $bindings = [])
     * @method _MediaCollection|Media[] get(array|string $columns = ['*'])
     * @method Media getModel()
     * @method Media[] getModels(array|string $columns = ['*'])
     * @method _MediaCollection|Media[] hydrate(array $items)
     * @method Media make(array $attributes = [])
     * @method Media newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Media[]|_MediaCollection paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Media[]|_MediaCollection simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Media sole(array|string $columns = ['*'])
     * @method Media updateOrCreate(array $attributes, array $values = [])
     * @method _MediaQueryBuilder ordered()
     */
    class _MediaQueryBuilder extends _BaseBuilder {}
}

namespace Laravel\Jetstream {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\Laravel\Jetstream\_TeamInvitationCollection;
    use LaravelIdea\Helper\Laravel\Jetstream\_TeamInvitationQueryBuilder;

    /**
     * @method _TeamInvitationQueryBuilder newModelQuery()
     * @method _TeamInvitationQueryBuilder newQuery()
     * @method static _TeamInvitationQueryBuilder query()
     * @method static _TeamInvitationCollection|TeamInvitation[] all()
     * @mixin _TeamInvitationQueryBuilder
     */
    class TeamInvitation extends Model {}
}

namespace Laravel\Sanctum {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Sanctum\_PersonalAccessTokenCollection;
    use LaravelIdea\Helper\Laravel\Sanctum\_PersonalAccessTokenQueryBuilder;

    /**
     * @property int $id
     * @property int $tokenable_id
     * @property string $tokenable_type
     * @property string $name
     * @property string $token
     * @property string|null|mixed $abilities
     * @property Carbon|null $last_used_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $tokenable
     * @method MorphTo tokenable()
     * @method _PersonalAccessTokenQueryBuilder newModelQuery()
     * @method _PersonalAccessTokenQueryBuilder newQuery()
     * @method static _PersonalAccessTokenQueryBuilder query()
     * @method static _PersonalAccessTokenCollection|PersonalAccessToken[] all()
     * @mixin _PersonalAccessTokenQueryBuilder
     */
    class PersonalAccessToken extends Model {}
}

namespace Spatie\MediaLibraryPro\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibraryPro\Models\_TemporaryUploadCollection;
    use LaravelIdea\Helper\Spatie\MediaLibraryPro\Models\_TemporaryUploadQueryBuilder;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    /**
     * @property int $id
     * @property string $session_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _MediaCollection|Media[] $media
     * @method MorphToMany|_MediaQueryBuilder media()
     * @method _TemporaryUploadQueryBuilder newModelQuery()
     * @method _TemporaryUploadQueryBuilder newQuery()
     * @method static _TemporaryUploadQueryBuilder query()
     * @method static _TemporaryUploadCollection|TemporaryUpload[] all()
     * @method _TemporaryUploadQueryBuilder old()
     * @mixin _TemporaryUploadQueryBuilder
     */
    class TemporaryUpload extends Model {}
}

namespace Spatie\MediaLibrary\MediaCollections\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibraryPro\Models\_TemporaryUploadQueryBuilder;
    use Spatie\MediaLibraryPro\Models\TemporaryUpload;

    /**
     * @property int $id
     * @property int $model_id
     * @property string $model_type
     * @property string|null $uuid
     * @property string $collection_name
     * @property string $name
     * @property string $file_name
     * @property string|null $mime_type
     * @property string $disk
     * @property string|null $conversions_disk
     * @property int $size
     * @property array $manipulations
     * @property array $custom_properties
     * @property array $generated_conversions
     * @property array $responsive_images
     * @property int|null $order_column
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $extension
     * @property-read string $human_readable_size
     * @property-read string $type
     * @property Model $model
     * @method MorphTo model()
     * @property TemporaryUpload $temporaryUpload
     * @method BelongsTo|_TemporaryUploadQueryBuilder temporaryUpload()
     * @method _MediaQueryBuilder newModelQuery()
     * @method _MediaQueryBuilder newQuery()
     * @method static _MediaQueryBuilder query()
     * @method static _MediaCollection|Media[] all()
     * @method _MediaQueryBuilder ordered()
     * @mixin _MediaQueryBuilder
     */
    class Media extends Model {}
}
