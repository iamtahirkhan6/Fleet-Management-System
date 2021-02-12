<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App\Domain\Agent\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\General\Models\PhoneNumber;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentCollection;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;

    /**
	 * @property int         $id
	 * @property string      $name
	 * @property int         $company_id
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
	class Agent extends Model { }
}

namespace App\Domain\Company\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Agent\Models\Agent;
    use App\Domain\Fleet\Models\Fleet;
    use App\Domain\Office\Models\Office;
    use App\Domain\General\Models\Address;
    use App\Domain\Project\Models\Project;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\Employee\Models\Employee;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use LaravelIdea\Helper\App\Models\_UserQueryBuilder;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetCollection;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeCollection;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyCollection;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectCollection;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeQueryBuilder;

    /**
	 * @property int                            $id
	 * @property string                         $name
	 * @property string                         $short_name
	 * @property string|null                    $gstin
	 * @property string|null                    $pan
	 * @property bool                           $use_razorpay
	 * @property string|null                    $razorpay_key_id
	 * @property string|null                    $razorpay_key_secret
	 * @property string|null                    $razorpay_account_number
	 * @property int                            $user_id
	 * @property Carbon|null                    $created_at
	 * @property Carbon|null                    $updated_at
	 * @property Address                        $address
	 * @method MorphToMany|_AddressQueryBuilder address()
	 * @property _AgentCollection|Agent[]       $agents
	 * @method HasMany|_AgentQueryBuilder agents()
	 * @property _EmployeeCollection|Employee[] $employees
	 * @method HasMany|_EmployeeQueryBuilder employees()
	 * @property _FleetCollection|Fleet[]       $fleets
	 * @method HasMany|_FleetQueryBuilder fleets()
	 * @property User                           $manager
	 * @method HasOne|_UserQueryBuilder manager()
	 * @property _OfficeCollection|Office[]     $offices
	 * @method HasMany|_OfficeQueryBuilder offices()
	 * @property _ProjectCollection|Project[]   $projects
	 * @method HasMany|_ProjectQueryBuilder projects()
	 * @method _CompanyQueryBuilder newModelQuery()
	 * @method _CompanyQueryBuilder newQuery()
	 * @method static _CompanyQueryBuilder query()
	 * @method static _CompanyCollection|Company[] all()
	 * @mixin _CompanyQueryBuilder
	 */
	class Company extends Model { }
}

namespace App\Domain\Consignee\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\General\Models\Address;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeCollection;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeQueryBuilder;

    /**
	 * @property int         $id
	 * @property string      $name
	 * @property string|null $gstin
	 * @property string|null $pan
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Address     $address
	 * @method MorphToMany|_AddressQueryBuilder address()
	 * @method _ConsigneeQueryBuilder newModelQuery()
	 * @method _ConsigneeQueryBuilder newQuery()
	 * @method static _ConsigneeQueryBuilder query()
	 * @method static _ConsigneeCollection|Consignee[] all()
	 * @mixin _ConsigneeQueryBuilder
	 */
	class Consignee extends Model { }
}

namespace App\Domain\Document\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentCollection;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentCategoryCollection;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentCategoryQueryBuilder;

    /**
	 * @property _DocumentCategoryCollection|DocumentCategory[] $categories
	 * @method HasMany|_DocumentCategoryQueryBuilder categories()
	 * @property Model                                          $documentable
	 * @method MorphTo documentable()
	 * @method _DocumentQueryBuilder newModelQuery()
	 * @method _DocumentQueryBuilder newQuery()
	 * @method static _DocumentQueryBuilder query()
	 * @method static _DocumentCollection|Document[] all()
	 * @mixin _DocumentQueryBuilder
	 */
	class Document extends Model { }

	/**
	 * @property Document $categories
	 * @method BelongsTo|_DocumentQueryBuilder categories()
	 * @method _DocumentCategoryQueryBuilder newModelQuery()
	 * @method _DocumentCategoryQueryBuilder newQuery()
	 * @method static _DocumentCategoryQueryBuilder query()
	 * @method static _DocumentCategoryCollection|DocumentCategory[] all()
	 * @mixin _DocumentCategoryQueryBuilder
	 */
	class DocumentCategory extends Model { }
}

namespace App\Domain\Employee\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use App\Domain\Office\Models\Office;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\Payment\Models\BankAccount;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesAttendanceCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesDesignationCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesAttendanceQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeePaymentDetailsCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeesDesignationQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeePaymentDetailsQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeDesignationClassificationCollection;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeDesignationClassificationQueryBuilder;

    /**
	 * @property int                    $id
	 * @property string|null            $name
	 * @property float|null             $salary
	 * @property string|null            $email
	 * @property int                    $office_id
	 * @property int                    $company_id
	 * @property int                    $employee_designation_id
	 * @property bool|null              $is_currently_hired
	 * @property Carbon|null            $created_at
	 * @property Carbon|null            $updated_at
	 * @property BankAccount            $bankAccount
	 * @method MorphToMany|_BankAccountQueryBuilder bankAccount()
	 * @property EmployeesDesignation   $designation
	 * @method HasOne|_EmployeesDesignationQueryBuilder designation()
	 * @property Office                 $office
	 * @method HasOne|_OfficeQueryBuilder office()
	 * @property PhoneNumber            $phoneNumber
	 * @method MorphToMany|_PhoneNumberQueryBuilder phoneNumber()
	 * @property _TripCollection|Trip[] $trips
	 * @method MorphToMany|_TripQueryBuilder trips()
	 * @method _EmployeeQueryBuilder newModelQuery()
	 * @method _EmployeeQueryBuilder newQuery()
	 * @method static _EmployeeQueryBuilder query()
	 * @method static _EmployeeCollection|Employee[] all()
	 * @mixin _EmployeeQueryBuilder
	 */
	class Employee extends Model { }

	/**
	 * @property int                                                    $id
	 * @property string                                                 $name
	 * @property Carbon|null                                            $created_at
	 * @property Carbon|null                                            $updated_at
	 * @property _EmployeesDesignationCollection|EmployeesDesignation[] $designations
	 * @method HasMany|_EmployeesDesignationQueryBuilder designations()
	 * @method _EmployeeDesignationClassificationQueryBuilder newModelQuery()
	 * @method _EmployeeDesignationClassificationQueryBuilder newQuery()
	 * @method static _EmployeeDesignationClassificationQueryBuilder query()
	 * @method static _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] all()
	 * @mixin _EmployeeDesignationClassificationQueryBuilder
	 */
	class EmployeeDesignationClassification extends Model { }

	/**
	 * @property Employee $employee
	 * @method BelongsTo|_EmployeeQueryBuilder employee()
	 * @method _EmployeePaymentDetailsQueryBuilder newModelQuery()
	 * @method _EmployeePaymentDetailsQueryBuilder newQuery()
	 * @method static _EmployeePaymentDetailsQueryBuilder query()
	 * @method static _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] all()
	 * @mixin _EmployeePaymentDetailsQueryBuilder
	 */
	class EmployeePaymentDetails extends Model { }

	/**
	 * @property int         $id
	 * @property Carbon      $date
	 * @property int         $employee_id
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _EmployeesAttendanceQueryBuilder newModelQuery()
	 * @method _EmployeesAttendanceQueryBuilder newQuery()
	 * @method static _EmployeesAttendanceQueryBuilder query()
	 * @method static _EmployeesAttendanceCollection|EmployeesAttendance[] all()
	 * @mixin _EmployeesAttendanceQueryBuilder
	 */
	class EmployeesAttendance extends Model { }

	/**
	 * @property int                               $id
	 * @property string                            $name
	 * @property int                               $emp_desig_class_id
	 * @property Carbon|null                       $created_at
	 * @property Carbon|null                       $updated_at
	 * @property EmployeeDesignationClassification $classification
	 * @method BelongsTo|_EmployeeDesignationClassificationQueryBuilder classification()
	 * @method _EmployeesDesignationQueryBuilder newModelQuery()
	 * @method _EmployeesDesignationQueryBuilder newQuery()
	 * @method static _EmployeesDesignationQueryBuilder query()
	 * @method static _EmployeesDesignationCollection|EmployeesDesignation[] all()
	 * @mixin _EmployeesDesignationQueryBuilder
	 */
	class EmployeesDesignation extends Model { }
}

namespace App\Domain\Expense\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Office\Models\Office;
    use App\Domain\Company\Models\Company;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCollection;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseIndividualCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryTypeCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseIndividualQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCategoryTypeQueryBuilder;

    /**
	 * @property int                                              $id
	 * @property Carbon                                           $date
	 * @property int                                              $amount
	 * @property string|null                                      $remark
	 * @property int                                              $expense_category_id
	 * @property int                                              $expense_individual_id
	 * @property int                                              $office_id
	 * @property int                                              $payment_method_id
	 * @property int                                              $company_id
	 * @property Carbon|null                                      $created_at
	 * @property Carbon|null                                      $updated_at
	 * @property ExpenseCategory                                  $category
	 * @method BelongsTo|_ExpenseCategoryQueryBuilder category()
	 * @property _ExpenseIndividualCollection|ExpenseIndividual[] $expenseIndividuals
	 * @method HasMany|_ExpenseIndividualQueryBuilder expenseIndividuals()
	 * @property Office                                           $office
	 * @method BelongsTo|_OfficeQueryBuilder office()
	 * @property ExpenseCategory                                  $payment_method
	 * @method HasOne|_ExpenseCategoryQueryBuilder payment_method()
	 * @method _ExpenseQueryBuilder newModelQuery()
	 * @method _ExpenseQueryBuilder newQuery()
	 * @method static _ExpenseQueryBuilder query()
	 * @method static _ExpenseCollection|Expense[] all()
	 * @mixin _ExpenseQueryBuilder
	 */
	class Expense extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property int         $expense_category_type_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _ExpenseCategoryQueryBuilder newModelQuery()
	 * @method _ExpenseCategoryQueryBuilder newQuery()
	 * @method static _ExpenseCategoryQueryBuilder query()
	 * @method static _ExpenseCategoryCollection|ExpenseCategory[] all()
	 * @mixin _ExpenseCategoryQueryBuilder
	 */
	class ExpenseCategory extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _ExpenseCategoryTypeQueryBuilder newModelQuery()
	 * @method _ExpenseCategoryTypeQueryBuilder newQuery()
	 * @method static _ExpenseCategoryTypeQueryBuilder query()
	 * @method static _ExpenseCategoryTypeCollection|ExpenseCategoryType[] all()
	 * @mixin _ExpenseCategoryTypeQueryBuilder
	 */
	class ExpenseCategoryType extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Company     $company
	 * @method BelongsTo|_CompanyQueryBuilder company()
	 * @method _ExpenseIndividualQueryBuilder newModelQuery()
	 * @method _ExpenseIndividualQueryBuilder newQuery()
	 * @method static _ExpenseIndividualQueryBuilder query()
	 * @method static _ExpenseIndividualCollection|ExpenseIndividual[] all()
	 * @mixin _ExpenseIndividualQueryBuilder
	 */
	class ExpenseIndividual extends Model { }
}

namespace App\Domain\Fleet\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetLiveCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetLiveQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetVehicleCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetVehicleQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetMaintenanceCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetTripCatcherCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetMaintenanceQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetTripCatcherQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetDailyInspectionCollection;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetDailyInspectionQueryBuilder;

    /**
	 * @property int                                    $id
	 * @property string                                 $name
	 * @property int                                    $company_id
	 * @property Carbon|null                            $created_at
	 * @property Carbon|null                            $updated_at
	 * @property _FleetVehicleCollection|FleetVehicle[] $vehicles
	 * @method HasMany|_FleetVehicleQueryBuilder vehicles()
	 * @method _FleetQueryBuilder newModelQuery()
	 * @method _FleetQueryBuilder newQuery()
	 * @method static _FleetQueryBuilder query()
	 * @method static _FleetCollection|Fleet[] all()
	 * @mixin _FleetQueryBuilder
	 */
	class Fleet extends Model { }

	/**
	 * @property bool        $air_filter
	 * @property float|null  $air_filter_charge
	 * @property bool        $grease
	 * @property float|null  $grease_charge
	 * @property bool        $tyre_repair
	 * @property float|null  $tyre_repair_charge
	 * @property bool        $urea
	 * @property float|null  $urea_amount
	 * @property float|null  $urea_charge
	 * @property bool        $misc
	 * @property string|null $misc_charge
	 * @property float|null  $misc_remark
	 * @property float|null  $total
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _FleetDailyInspectionQueryBuilder newModelQuery()
	 * @method _FleetDailyInspectionQueryBuilder newQuery()
	 * @method static _FleetDailyInspectionQueryBuilder query()
	 * @method static _FleetDailyInspectionCollection|FleetDailyInspection[] all()
	 * @mixin _FleetDailyInspectionQueryBuilder
	 */
	class FleetDailyInspection extends Model { }

	/**
	 * @property int         $id
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
	class FleetLive extends Model { }

	/**
	 * @method _FleetMaintenanceQueryBuilder newModelQuery()
	 * @method _FleetMaintenanceQueryBuilder newQuery()
	 * @method static _FleetMaintenanceQueryBuilder query()
	 * @method static _FleetMaintenanceCollection|FleetMaintenance[] all()
	 * @mixin _FleetMaintenanceQueryBuilder
	 */
	class FleetMaintenance extends Model { }

	/**
	 * @property int         $id
	 * @property string      $vehicleno
	 * @property string      $etpno
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
	class FleetTripCatcher extends Model { }

	/**
	 * @property int         $id
	 * @property string      $number
	 * @property string      $owner_name
	 * @property string      $reg_date
	 * @property string      $model
	 * @property string      $fitness_upto
	 * @property string      $insurance_upto
	 * @property string      $class
	 * @property string      $chassis_number
	 * @property string      $engine_number
	 * @property string      $authority
	 * @property string      $rto_code
	 * @property int         $fleet_id
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _FleetVehicleQueryBuilder newModelQuery()
	 * @method _FleetVehicleQueryBuilder newQuery()
	 * @method static _FleetVehicleQueryBuilder query()
	 * @method static _FleetVehicleCollection|FleetVehicle[] all()
	 * @mixin _FleetVehicleQueryBuilder
	 */
	class FleetVehicle extends Model { }
}

namespace App\Domain\General\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use LaravelIdea\Helper\App\Domain\General\Models\_MineCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_MineQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_SectorCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_MaterialCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_SectorQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_AddressQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_MaterialQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_UnloadingPointCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_UnloadingPointQueryBuilder;

    /**
	 * @property int         $id
	 * @property string|null $line_1
	 * @property string|null $line_2
	 * @property string|null $city
	 * @property string|null $zip
	 * @property string|null $state
	 * @property int         $addressable_id
	 * @property string      $addressable_type
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Model       $addressable
	 * @method MorphTo addressable()
	 * @method _AddressQueryBuilder newModelQuery()
	 * @method _AddressQueryBuilder newQuery()
	 * @method static _AddressQueryBuilder query()
	 * @method static _AddressCollection|Address[] all()
	 * @mixin _AddressQueryBuilder
	 */
	class Address extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _MaterialQueryBuilder newModelQuery()
	 * @method _MaterialQueryBuilder newQuery()
	 * @method static _MaterialQueryBuilder query()
	 * @method static _MaterialCollection|Material[] all()
	 * @mixin _MaterialQueryBuilder
	 */
	class Material extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property int         $sector_id
	 * @property bool        $visible
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Sector      $sector
	 * @method BelongsTo|_SectorQueryBuilder sector()
	 * @method _MineQueryBuilder newModelQuery()
	 * @method _MineQueryBuilder newQuery()
	 * @method static _MineQueryBuilder query()
	 * @method static _MineCollection|LoadingPoint[] all()
	 * @mixin _MineQueryBuilder
	 */
	class Mine extends Model { }

	/**
	 * @property int         $id
	 * @property string      $phone_number
	 * @property int         $company_id
	 * @property int         $phoneable_id
	 * @property string      $phoneable_type
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Model       $phoneable
	 * @method MorphTo phoneable()
	 * @method _PhoneNumberQueryBuilder newModelQuery()
	 * @method _PhoneNumberQueryBuilder newQuery()
	 * @method static _PhoneNumberQueryBuilder query()
	 * @method static _PhoneNumberCollection|PhoneNumber[] all()
	 * @mixin _PhoneNumberQueryBuilder
	 */
	class PhoneNumber extends Model { }

	/**
	 * @property int                            $id
	 * @property string                         $name
	 * @property bool                           $visible
	 * @property Carbon|null                    $created_at
	 * @property Carbon|null                    $updated_at
	 * @property _MineCollection|LoadingPoint[] $loading-points
	 * @method HasMany|_MineQueryBuilder loading-points()
	 * @property Sector                         $sector
	 * @method BelongsTo|_SectorQueryBuilder sector()
	 * @method _SectorQueryBuilder newModelQuery()
	 * @method _SectorQueryBuilder newQuery()
	 * @method static _SectorQueryBuilder query()
	 * @method static _SectorCollection|Sector[] all()
	 * @mixin _SectorQueryBuilder
	 */
	class Sector extends Model { }

	/**
	 * @property int         $id
	 * @property string|null $short_code
	 * @property string      $name
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _UnloadingPointQueryBuilder newModelQuery()
	 * @method _UnloadingPointQueryBuilder newQuery()
	 * @method static _UnloadingPointQueryBuilder query()
	 * @method static _UnloadingPointCollection|Destination[] all()
	 * @mixin _UnloadingPointQueryBuilder
	 */
	class UnloadingPoint extends Model { }
}

namespace App\Domain\Invoice\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceCollection;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceItemCollection;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceItemQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceStatusCollection;
    use LaravelIdea\Helper\App\Domain\Invoice\Models\_InvoiceStatusQueryBuilder;

    /**
	 * @property int         $id
	 * @property Carbon      $invoice_date
	 * @property Carbon      $due_date
	 * @property string      $invoice_number
	 * @property string      $bill_number
	 * @property string|null $reference_number
	 * @property int         $status
	 * @property string|null $notes
	 * @property int         $total
	 * @property int         $tax
	 * @property int         $due_amount
	 * @property int         $received_amount
	 * @property int         $consignee_id
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _InvoiceQueryBuilder newModelQuery()
	 * @method _InvoiceQueryBuilder newQuery()
	 * @method static _InvoiceQueryBuilder query()
	 * @method static _InvoiceCollection|Invoice[] all()
	 * @mixin _InvoiceQueryBuilder
	 */
	class Invoice extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property string|null $description
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _InvoiceItemQueryBuilder newModelQuery()
	 * @method _InvoiceItemQueryBuilder newQuery()
	 * @method static _InvoiceItemQueryBuilder query()
	 * @method static _InvoiceItemCollection|InvoiceItem[] all()
	 * @mixin _InvoiceItemQueryBuilder
	 */
	class InvoiceItem extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _InvoiceStatusQueryBuilder newModelQuery()
	 * @method _InvoiceStatusQueryBuilder newQuery()
	 * @method static _InvoiceStatusQueryBuilder query()
	 * @method static _InvoiceStatusCollection|InvoiceStatus[] all()
	 * @mixin _InvoiceStatusQueryBuilder
	 */
	class InvoiceStatus extends Model { }
}

namespace App\Domain\MarketVehicle\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Party\Models\Party;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyCollection;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleCollection;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleQueryBuilder;

    /**
	 * @property int                      $id
	 * @property string                   $number
	 * @property int                      $party_id
	 * @property int                      $company_id
	 * @property Carbon|null              $created_at
	 * @property Carbon|null              $updated_at
	 * @property _PartyCollection|Party[] $party
	 * @method HasMany|_PartyQueryBuilder party()
	 * @method _MarketVehicleQueryBuilder newModelQuery()
	 * @method _MarketVehicleQueryBuilder newQuery()
	 * @method static _MarketVehicleQueryBuilder query()
	 * @method static _MarketVehicleCollection|MarketVehicle[] all()
	 * @mixin _MarketVehicleQueryBuilder
	 */
	class MarketVehicle extends Model { }
}

namespace App\Domain\Office\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Company\Models\Company;
    use App\Domain\Expense\Models\Expense;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\Employee\Models\Employee;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseCollection;
    use LaravelIdea\Helper\App\Domain\Office\Models\_OfficeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeCollection;
    use LaravelIdea\Helper\App\Domain\Expense\Models\_ExpenseQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Employee\Models\_EmployeeQueryBuilder;

    /**
	 * @property int                            $id
	 * @property string                         $name
	 * @property string|null                    $street_address
	 * @property string|null                    $city
	 * @property string|null                    $state
	 * @property string|null                    $zip
	 * @property int                            $company_id
	 * @property Carbon|null                    $created_at
	 * @property Carbon|null                    $updated_at
	 * @property Company                        $company
	 * @method BelongsTo|_CompanyQueryBuilder company()
	 * @property _EmployeeCollection|Employee[] $employees
	 * @method HasMany|_EmployeeQueryBuilder employees()
	 * @property _ExpenseCollection|Expense[]   $expenses
	 * @method HasMany|_ExpenseQueryBuilder expenses()
	 * @method _OfficeQueryBuilder newModelQuery()
	 * @method _OfficeQueryBuilder newQuery()
	 * @method static _OfficeQueryBuilder query()
	 * @method static _OfficeCollection|Office[] all()
	 * @mixin _OfficeQueryBuilder
	 */
	class Office extends Model { }
}

namespace App\Domain\Party\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\Payment\Models\BankAccount;
    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountCollection;
    use LaravelIdea\Helper\App\Domain\General\Models\_PhoneNumberQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountQueryBuilder;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleCollection;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;

    /**
	 * @property int                                      $id
	 * @property string                                   $name
	 * @property string|null                              $pan
	 * @property string|null                              $razorpay_contact_id
	 * @property int                                      $company_id
	 * @property Carbon|null                              $created_at
	 * @property Carbon|null                              $updated_at
	 * @property _BankAccountCollection|BankAccount[]     $bankAccounts
	 * @method MorphToMany|_BankAccountQueryBuilder bankAccounts()
	 * @property _MediaCollection|Media[]                 $media
	 * @method MorphToMany|_MediaQueryBuilder media()
	 * @property PhoneNumber                              $phoneNumber
	 * @method MorphToMany|_PhoneNumberQueryBuilder phoneNumber()
	 * @property _TripCollection|Trip[]                   $trips
	 * @method HasMany|_TripQueryBuilder trips()
	 * @property _MarketVehicleCollection|MarketVehicle[] $vehicles
	 * @method HasMany|_MarketVehicleQueryBuilder vehicles()
	 * @method _PartyQueryBuilder newModelQuery()
	 * @method _PartyQueryBuilder newQuery()
	 * @method static _PartyQueryBuilder query()
	 * @method static _PartyCollection|Party[] all()
	 * @mixin _PartyQueryBuilder
	 */
	class Party extends Model { }
}

namespace App\Domain\Payment\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_TaxCategoryCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_BankAccountQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentMethodCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentStatusCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_TaxCategoryQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentMethodQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentStatusQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;

    /**
	 * @property int         $id
	 * @property string|null $account_name
	 * @property string      $account_number
	 * @property string      $ifsc_code
	 * @property int         $bankable_id
	 * @property string      $bankable_type
	 * @property string|null $fund_account_id
	 * @property int         $company_id
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Model       $bankable
	 * @method MorphTo bankable()
	 * @method _BankAccountQueryBuilder newModelQuery()
	 * @method _BankAccountQueryBuilder newQuery()
	 * @method static _BankAccountQueryBuilder query()
	 * @method static _BankAccountCollection|BankAccount[] all()
	 * @mixin _BankAccountQueryBuilder
	 */
	class BankAccount extends Model { }

	/**
	 * @property int                      $id
	 * @property float                    $amount
	 * @property int                      $bank_account_id
	 * @property int                      $payment_method_id
	 * @property int                      $payment_status_id
	 * @property float|null               $fees
	 * @property object|null              $remarks
	 * @property string|null              $utr_number
	 * @property string|null              $razorpay_payout_id
	 * @property int                      $company_id
	 * @property int|null                 $created_by
	 * @property int|null                 $finished_by
	 * @property Carbon|null              $created_at
	 * @property Carbon|null              $updated_at
	 * @property int|null                 $trip_id
	 * @property BankAccount              $bankAccount
	 * @method HasOne|_BankAccountQueryBuilder bankAccount()
	 * @property _MediaCollection|Media[] $media
	 * @method MorphToMany|_MediaQueryBuilder media()
	 * @property PaymentMethod            $method
	 * @method HasOne|_PaymentMethodQueryBuilder method()
	 * @property PaymentStatus            $status
	 * @method HasOne|_PaymentStatusQueryBuilder status()
	 * @property Trip                     $trip
	 * @method BelongsTo|_TripQueryBuilder trip()
	 * @method _PaymentQueryBuilder newModelQuery()
	 * @method _PaymentQueryBuilder newQuery()
	 * @method static _PaymentQueryBuilder query()
	 * @method static _PaymentCollection|Payment[] all()
	 * @mixin _PaymentQueryBuilder
	 */
	class Payment extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @property Model       $paymentable
	 * @method MorphTo paymentable()
	 * @method _PaymentMethodQueryBuilder newModelQuery()
	 * @method _PaymentMethodQueryBuilder newQuery()
	 * @method static _PaymentMethodQueryBuilder query()
	 * @method static _PaymentMethodCollection|PaymentMethod[] all()
	 * @mixin _PaymentMethodQueryBuilder
	 */
	class PaymentMethod extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property string|null $desc
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _PaymentStatusQueryBuilder newModelQuery()
	 * @method _PaymentStatusQueryBuilder newQuery()
	 * @method static _PaymentStatusQueryBuilder query()
	 * @method static _PaymentStatusCollection|PaymentStatus[] all()
	 * @mixin _PaymentStatusQueryBuilder
	 */
	class PaymentStatus extends Model { }

	/**
	 * @property int         $id
	 * @property string      $section
	 * @property float       $percentage
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _TaxCategoryQueryBuilder newModelQuery()
	 * @method _TaxCategoryQueryBuilder newQuery()
	 * @method static _TaxCategoryQueryBuilder query()
	 * @method static _TaxCategoryCollection|TaxCategory[] all()
	 * @mixin _TaxCategoryQueryBuilder
	 */
	class TaxCategory extends Model { }
}

namespace App\Domain\Project\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use App\Domain\Company\Models\Company;
    use App\Domain\General\Models\Material;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\Consignee\Models\Consignee;
    use App\Domain\LoadingPoint\Models\LoadingPoint;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_MineQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectCollection;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_MaterialQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\General\Models\_UnloadingPointQueryBuilder;

    /**
	 * @property int                    $id
	 * @property string|null            $name
	 * @property int                    $material_id
	 * @property int                    $source_id
	 * @property int                    $destination_id
	 * @property int                    $consignee_id
	 * @property int                    $company_id
	 * @property bool                   $status
	 * @property Carbon|null            $created_at
	 * @property Carbon|null            $updated_at
	 * @property Company                $company
	 * @method BelongsTo|_CompanyQueryBuilder company()
	 * @property Consignee              $consignee
	 * @method HasOne|_ConsigneeQueryBuilder consignee()
	 * @property UnloadingPoint         $destination
	 * @method HasOne|_UnloadingPointQueryBuilder destination()
	 * @property Material               $material
	 * @method HasOne|_MaterialQueryBuilder material()
	 * @property Mine                   $source
	 * @method HasOne|_MineQueryBuilder source()
	 * @property _TripCollection|Trip[] $trips
	 * @method HasMany|_TripQueryBuilder trips()
	 * @method _ProjectQueryBuilder newModelQuery()
	 * @method _ProjectQueryBuilder newQuery()
	 * @method static _ProjectQueryBuilder query()
	 * @method static _ProjectCollection|Project[] all()
	 * @mixin _ProjectQueryBuilder
	 */
	class Project extends Model { }
}

namespace App\Domain\Trip\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Agent\Models\Agent;
    use App\Domain\Party\Models\Party;
    use App\Domain\Payment\Models\Payment;
    use App\Domain\Project\Models\Project;
    use Illuminate\Database\Eloquent\Model;
    use App\Domain\Document\Models\Document;
    use App\Domain\Fleet\Models\FleetVehicle;
    use App\Domain\Consignee\Models\Consignee;
    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\Database\Factories\_TripFactory;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Agent\Models\_AgentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Party\Models\_PartyQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripTypeCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripTypeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentCollection;
    use LaravelIdea\Helper\App\Domain\Payment\Models\_PaymentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Project\Models\_ProjectQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Document\Models\_DocumentQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Fleet\Models\_FleetVehicleQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Consignee\Models\_ConsigneeQueryBuilder;
    use LaravelIdea\Helper\App\Domain\MarketVehicle\Models\_MarketVehicleQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;

    /**
	 * @property int                            $id
	 * @property Carbon                         $date
	 * @property int                            $trip_type
	 * @property int                            $project_id
	 * @property int                            $company_id
	 * @property string|null                    $challan_serial
	 * @property string                         $tp_number
	 * @property int                            $tp_serial
	 * @property float|null                     $gross_weight
	 * @property float|null                     $tare_weight
	 * @property float                          $net_weight
	 * @property float                          $rate
	 * @property float|null                     $hsd
	 * @property float|null                     $cash
	 * @property string|null                    $market_vehicle_number
	 * @property string|null                    $party_name
	 * @property string|null                    $party_number
	 * @property string|null                    $driver_name
	 * @property string|null                    $driver_phone_num
	 * @property string|null                    $driver_license_num
	 * @property float|null                     $premium_rate
	 * @property float|null                     $total_amount
	 * @property float|null                     $cash_adv_pct
	 * @property float|null                     $cash_adv_fees
	 * @property bool|null                      $tds_sbm_bool
	 * @property float|null                     $tds
	 * @property int|null                       $tax_category_id
	 * @property int|null                       $two_pay
	 * @property float|null                     $final_payable
	 * @property int|null                       $payment_id
	 * @property float|null                     $profit
	 * @property int|null                       $market_vehicle_id
	 * @property int|null                       $fleet_vehicle_id
	 * @property int|null                       $fleet_driver_id
	 * @property int|null                       $party_id
	 * @property int|null                       $agent_id
	 * @property bool                           $loading_done
	 * @property bool                           $payment_done
	 * @property bool                           $completed
	 * @property int|null                       $created_by
	 * @property int|null                       $finished_by
	 * @property Carbon|null                    $created_at
	 * @property Carbon|null                    $updated_at
	 * @property Agent                          $agent
	 * @method HasOne|_AgentQueryBuilder agent()
	 * @property Consignee                      $consignee
	 * @method HasOne|_ConsigneeQueryBuilder consignee()
	 * @property _DocumentCollection|Document[] $documents
	 * @method MorphToMany|_DocumentQueryBuilder documents()
	 * @property FleetVehicle                   $fleetVehicle
	 * @method HasOne|_FleetVehicleQueryBuilder fleetVehicle()
	 * @property MarketVehicle                  $marketVehicle
	 * @method HasOne|_MarketVehicleQueryBuilder marketVehicle()
	 * @property _MediaCollection|Media[]       $media
	 * @method MorphToMany|_MediaQueryBuilder media()
	 * @property Party                          $party
	 * @method BelongsTo|_PartyQueryBuilder party()
	 * @property Payment                        $payment
	 * @method HasOne|_PaymentQueryBuilder payment()
	 * @property Project                        $project
	 * @method HasOne|_ProjectQueryBuilder project()
	 * @property TripType                       $trip_type
	 * @method BelongsTo|_TripTypeQueryBuilder trip_type()
	 * @method _TripQueryBuilder newModelQuery()
	 * @method _TripQueryBuilder newQuery()
	 * @method static _TripQueryBuilder query()
	 * @method static _TripCollection|Trip[] all()
	 * @mixin _TripQueryBuilder
	 * @method static _TripFactory factory(...$parameters)
	 */
	class Trip extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _TripTypeQueryBuilder newModelQuery()
	 * @method _TripTypeQueryBuilder newQuery()
	 * @method static _TripTypeQueryBuilder query()
	 * @method static _TripTypeCollection|TripType[] all()
	 * @mixin _TripTypeQueryBuilder
	 */
	class TripType extends Model { }
}

namespace App\Domain\VehicleRC\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\App\Domain\VehicleRC\Models\_VehicleRCCollection;
    use LaravelIdea\Helper\App\Domain\VehicleRC\Models\_VehicleRCQueryBuilder;

    /**
	 * @property int         $id
	 * @property string      $number
	 * @property string|null $model
	 * @property string|null $class
	 * @property string|null $reg_date
	 * @property string|null $puc_upto
	 * @property string|null $rto_code
	 * @property string|null $fuel_norm
	 * @property string|null $fuel_type
	 * @property string|null $authority
	 * @property string|null $owner_name
	 * @property string|null $mvtax_upto
	 * @property string|null $noc_details
	 * @property string|null $fitness_upto
	 * @property string|null $roadtax_upto
	 * @property string|null $vehicle_type
	 * @property string|null $engine_number
	 * @property string|null $insurance_upto
	 * @property string|null $chassis_number
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _VehicleRCQueryBuilder newModelQuery()
	 * @method _VehicleRCQueryBuilder newQuery()
	 * @method static _VehicleRCQueryBuilder query()
	 * @method static _VehicleRCCollection|VehicleRC[] all()
	 * @mixin _VehicleRCQueryBuilder
	 */
	class VehicleRC extends Model { }
}

namespace App\Models {

    use Illuminate\Support\Carbon;
    use App\Domain\Company\Models\Company;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use LaravelIdea\Helper\App\Models\_RoleCollection;
    use LaravelIdea\Helper\App\Models\_TeamCollection;
    use LaravelIdea\Helper\App\Models\_UserCollection;
    use LaravelIdea\Helper\App\Models\_RoleQueryBuilder;
    use LaravelIdea\Helper\App\Models\_TeamQueryBuilder;
    use LaravelIdea\Helper\App\Models\_UserQueryBuilder;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\Database\Factories\_UserFactory;
    use LaravelIdea\Helper\App\Models\_MembershipCollection;
    use LaravelIdea\Helper\App\Models\_PermissionCollection;
    use LaravelIdea\Helper\App\Models\_MembershipQueryBuilder;
    use LaravelIdea\Helper\App\Models\_PermissionQueryBuilder;
    use LaravelIdea\Helper\App\Domain\Company\Models\_CompanyQueryBuilder;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
	 * @method _MembershipQueryBuilder newModelQuery()
	 * @method _MembershipQueryBuilder newQuery()
	 * @method static _MembershipQueryBuilder query()
	 * @method static _MembershipCollection|Membership[] all()
	 * @mixin _MembershipQueryBuilder
	 */
	class Membership extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property string|null $display_name
	 * @property string|null $description
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _PermissionQueryBuilder newModelQuery()
	 * @method _PermissionQueryBuilder newQuery()
	 * @method static _PermissionQueryBuilder query()
	 * @method static _PermissionCollection|Permission[] all()
	 * @mixin _PermissionQueryBuilder
	 */
	class Permission extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property string|null $display_name
	 * @property string|null $description
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _RoleQueryBuilder newModelQuery()
	 * @method _RoleQueryBuilder newQuery()
	 * @method static _RoleQueryBuilder query()
	 * @method static _RoleCollection|Role[] all()
	 * @mixin _RoleQueryBuilder
	 */
	class Role extends Model { }

	/**
	 * @property int         $id
	 * @property string      $name
	 * @property string|null $display_name
	 * @property string|null $description
	 * @property Carbon|null $created_at
	 * @property Carbon|null $updated_at
	 * @method _TeamQueryBuilder newModelQuery()
	 * @method _TeamQueryBuilder newQuery()
	 * @method static _TeamQueryBuilder query()
	 * @method static _TeamCollection|Team[] all()
	 * @mixin _TeamQueryBuilder
	 */
	class Team extends Model { }

	/**
	 * @property int                                                    $id
	 * @property string                                                 $name
	 * @property int|null                                               $phone_number
	 * @property string                                                 $password
	 * @property string|null                                            $email
	 * @property Carbon|null                                            $email_verified_at
	 * @property string|null                                            $profile_photo_path
	 * @property string|null                                            $remember_token
	 * @property Carbon|null                                            $created_at
	 * @property Carbon|null                                            $updated_at
	 * @property string|null                                            $two_factor_secret
	 * @property string|null                                            $two_factor_recovery_codes
	 * @property int|null                                               $company_id
	 * @property-read string                                            $profile_photo_url
	 * @property Company                                                $company
	 * @method HasOne|_CompanyQueryBuilder company()
	 * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
	 * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
	 * @property _PermissionCollection|Permission[]                     $permissions
	 * @method MorphToMany|_PermissionQueryBuilder permissions()
	 * @property _RoleCollection|Role[]                                 $roles
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
	class User extends Model { }
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
	class DatabaseNotification extends Model { }
}

namespace Laratrust\Models {

    use App\Models\Role;
    use App\Models\Permission;
    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\App\Models\_RoleCollection;
    use LaravelIdea\Helper\App\Models\_RoleQueryBuilder;
    use LaravelIdea\Helper\App\Models\_PermissionCollection;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use LaravelIdea\Helper\App\Models\_PermissionQueryBuilder;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustRoleCollection;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustTeamCollection;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustRoleQueryBuilder;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustTeamQueryBuilder;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustPermissionCollection;
    use LaravelIdea\Helper\Laratrust\Models\_LaratrustPermissionQueryBuilder;

    /**
	 * @property _RoleCollection|Role[] $roles
	 * @method BelongsToMany|_RoleQueryBuilder roles()
	 * @method _LaratrustPermissionQueryBuilder newModelQuery()
	 * @method _LaratrustPermissionQueryBuilder newQuery()
	 * @method static _LaratrustPermissionQueryBuilder query()
	 * @method static _LaratrustPermissionCollection|LaratrustPermission[] all()
	 * @mixin _LaratrustPermissionQueryBuilder
	 */
	class LaratrustPermission extends Model { }

	/**
	 * @property _PermissionCollection|Permission[] $permissions
	 * @method BelongsToMany|_PermissionQueryBuilder permissions()
	 * @method _LaratrustRoleQueryBuilder newModelQuery()
	 * @method _LaratrustRoleQueryBuilder newQuery()
	 * @method static _LaratrustRoleQueryBuilder query()
	 * @method static _LaratrustRoleCollection|LaratrustRole[] all()
	 * @mixin _LaratrustRoleQueryBuilder
	 */
	class LaratrustRole extends Model { }

	/**
	 * @method _LaratrustTeamQueryBuilder newModelQuery()
	 * @method _LaratrustTeamQueryBuilder newQuery()
	 * @method static _LaratrustTeamQueryBuilder query()
	 * @method static _LaratrustTeamCollection|LaratrustTeam[] all()
	 * @mixin _LaratrustTeamQueryBuilder
	 */
	class LaratrustTeam extends Model { }
}

namespace LaravelIdea\Helper {

    use Illuminate\Support\Collection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;

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
	 * @method $this simplePaginate(int $perPage = 15, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
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
	 * @method $this sole(array|string $columns = [ '*' ])
	 * @see \Illuminate\Database\Query\Builder::orHavingRaw
	 * @method $this orHavingRaw(string $sql, array $bindings = [])
	 * @see \Illuminate\Database\Query\Builder::forPageBeforeId
	 * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
	 * @see \Illuminate\Database\Query\Builder::clone
	 * @method $this clone ()
	 * @see \Illuminate\Database\Query\Builder::orWhereBetween
	 * @method $this orWhereBetween(string $column, array $values)
	 * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
	 * @method $this explain()
	 * @see \Illuminate\Database\Query\Builder::select
	 * @method $this select(array $columns = [ '*' ])
	 * @see \Illuminate\Database\Query\Builder::paginate
	 * @method $this paginate(int $perPage = 15, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
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
	 * @method $this get(array|string $columns = [ '*' ])
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
	 * @method $this first(array|string $columns = [ '*' ])
	 * @see \Illuminate\Database\Query\Builder::whereColumn
	 * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
	 * @see \Illuminate\Database\Query\Builder::numericAggregate
	 * @method $this numericAggregate(string $function, array $columns = [ '*' ])
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
	 * @method $this find(int|string $id, array $columns = [ '*' ])
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
	 * @method $this getCountForPagination(array $columns = [ '*' ])
	 * @see \Illuminate\Database\Query\Builder::groupByRaw
	 * @method $this groupByRaw(string $sql, array $bindings = [])
	 * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
	 * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
	 * @see \Illuminate\Database\Query\Builder::aggregate
	 * @method $this aggregate(string $function, array $columns = [ '*' ])
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
	class _BaseBuilder extends Builder { }

	/**
	 * @method Collection mapSpread(callable $callback)
	 * @method Collection mapWithKeys(callable $callback)
	 * @method Collection zip(array $items)
	 * @method Collection partition(callable|string $key, $operator = null, $value = null)
	 * @method Collection mapInto(string $class)
	 * @method Collection mapToGroups(callable $callback)
	 * @method Collection map(callable $callback)
	 * @method Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
	 * @method Collection pluck(array|int|null|string $value, null|string $key = null)
	 * @method Collection pad(int $size, $value)
	 * @method Collection split(int $numberOfGroups)
	 * @method Collection combine($values)
	 * @method Collection countBy(callable|string $countBy = null)
	 * @method Collection mapToDictionary(callable $callback)
	 * @method Collection keys()
	 * @method Collection transform(callable $callback)
	 * @method Collection flatMap(callable $callback)
	 * @method Collection collapse()
	 */
	class _BaseCollection extends Collection { }
}

namespace LaravelIdea\Helper\App\Domain\Agent\Models {

    use App\Domain\Agent\Models\Agent;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Agent shift()
	 * @method Agent pop()
	 * @method Agent get($key, $default = null)
	 * @method Agent pull($key, $default = null)
	 * @method Agent first(callable $callback = null, $default = null)
	 * @method Agent firstWhere(string $key, $operator = null, $value = null)
	 * @method Agent[] all()
	 * @method Agent last(callable $callback = null, $default = null)
	 */
	class _AgentCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Agent[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _AgentQueryBuilder whereId($value)
	 * @method _AgentQueryBuilder whereName($value)
	 * @method _AgentQueryBuilder whereCompanyId($value)
	 * @method _AgentQueryBuilder whereCreatedAt($value)
	 * @method _AgentQueryBuilder whereUpdatedAt($value)
	 * @method Agent baseSole(array|string $columns = [ '*' ])
	 * @method Agent create(array $attributes = [])
	 * @method _AgentCollection|Agent[] cursor()
	 * @method Agent|null find($id, array $columns = [ '*' ])
	 * @method _AgentCollection|Agent[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Agent findOrFail($id, array $columns = [ '*' ])
	 * @method _AgentCollection|Agent[] findOrNew($id, array $columns = [ '*' ])
	 * @method Agent first(array|string $columns = [ '*' ])
	 * @method Agent firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Agent firstOrCreate(array $attributes = [], array $values = [])
	 * @method Agent firstOrFail(array $columns = [ '*' ])
	 * @method Agent firstOrNew(array $attributes = [], array $values = [])
	 * @method Agent firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Agent forceCreate(array $attributes)
	 * @method _AgentCollection|Agent[] fromQuery(string $query, array $bindings = [])
	 * @method _AgentCollection|Agent[] get(array|string $columns = [ '*' ])
	 * @method Agent getModel()
	 * @method Agent[] getModels(array|string $columns = [ '*' ])
	 * @method _AgentCollection|Agent[] hydrate(array $items)
	 * @method Agent make(array $attributes = [])
	 * @method Agent newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Agent[]|_AgentCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Agent[]|_AgentCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Agent sole(array|string $columns = [ '*' ])
	 * @method Agent updateOrCreate(array $attributes, array $values = [])
	 */
	class _AgentQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Company\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\Company\Models\Company;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Company shift()
	 * @method Company pop()
	 * @method Company get($key, $default = null)
	 * @method Company pull($key, $default = null)
	 * @method Company first(callable $callback = null, $default = null)
	 * @method Company firstWhere(string $key, $operator = null, $value = null)
	 * @method Company[] all()
	 * @method Company last(callable $callback = null, $default = null)
	 */
	class _CompanyCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Company[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _CompanyQueryBuilder whereId($value)
	 * @method _CompanyQueryBuilder whereName($value)
	 * @method _CompanyQueryBuilder whereShortName($value)
	 * @method _CompanyQueryBuilder whereGstin($value)
	 * @method _CompanyQueryBuilder wherePan($value)
	 * @method _CompanyQueryBuilder whereUseRazorpay($value)
	 * @method _CompanyQueryBuilder whereRazorpayKeyId($value)
	 * @method _CompanyQueryBuilder whereRazorpayKeySecret($value)
	 * @method _CompanyQueryBuilder whereRazorpayAccountNumber($value)
	 * @method _CompanyQueryBuilder whereUserId($value)
	 * @method _CompanyQueryBuilder whereCreatedAt($value)
	 * @method _CompanyQueryBuilder whereUpdatedAt($value)
	 * @method Company baseSole(array|string $columns = [ '*' ])
	 * @method Company create(array $attributes = [])
	 * @method _CompanyCollection|Company[] cursor()
	 * @method Company|null find($id, array $columns = [ '*' ])
	 * @method _CompanyCollection|Company[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Company findOrFail($id, array $columns = [ '*' ])
	 * @method _CompanyCollection|Company[] findOrNew($id, array $columns = [ '*' ])
	 * @method Company first(array|string $columns = [ '*' ])
	 * @method Company firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Company firstOrCreate(array $attributes = [], array $values = [])
	 * @method Company firstOrFail(array $columns = [ '*' ])
	 * @method Company firstOrNew(array $attributes = [], array $values = [])
	 * @method Company firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Company forceCreate(array $attributes)
	 * @method _CompanyCollection|Company[] fromQuery(string $query, array $bindings = [])
	 * @method _CompanyCollection|Company[] get(array|string $columns = [ '*' ])
	 * @method Company getModel()
	 * @method Company[] getModels(array|string $columns = [ '*' ])
	 * @method _CompanyCollection|Company[] hydrate(array $items)
	 * @method Company make(array $attributes = [])
	 * @method Company newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Company[]|_CompanyCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Company[]|_CompanyCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Company sole(array|string $columns = [ '*' ])
	 * @method Company updateOrCreate(array $attributes, array $values = [])
	 */
	class _CompanyQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Consignee\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use App\Domain\Consignee\Models\Consignee;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Consignee shift()
	 * @method Consignee pop()
	 * @method Consignee get($key, $default = null)
	 * @method Consignee pull($key, $default = null)
	 * @method Consignee first(callable $callback = null, $default = null)
	 * @method Consignee firstWhere(string $key, $operator = null, $value = null)
	 * @method Consignee[] all()
	 * @method Consignee last(callable $callback = null, $default = null)
	 */
	class _ConsigneeCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Consignee[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _ConsigneeQueryBuilder whereId($value)
	 * @method _ConsigneeQueryBuilder whereName($value)
	 * @method _ConsigneeQueryBuilder whereGstin($value)
	 * @method _ConsigneeQueryBuilder wherePan($value)
	 * @method _ConsigneeQueryBuilder whereCompanyId($value)
	 * @method _ConsigneeQueryBuilder whereCreatedAt($value)
	 * @method _ConsigneeQueryBuilder whereUpdatedAt($value)
	 * @method Consignee baseSole(array|string $columns = [ '*' ])
	 * @method Consignee create(array $attributes = [])
	 * @method _ConsigneeCollection|Consignee[] cursor()
	 * @method Consignee|null find($id, array $columns = [ '*' ])
	 * @method _ConsigneeCollection|Consignee[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Consignee findOrFail($id, array $columns = [ '*' ])
	 * @method _ConsigneeCollection|Consignee[] findOrNew($id, array $columns = [ '*' ])
	 * @method Consignee first(array|string $columns = [ '*' ])
	 * @method Consignee firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Consignee firstOrCreate(array $attributes = [], array $values = [])
	 * @method Consignee firstOrFail(array $columns = [ '*' ])
	 * @method Consignee firstOrNew(array $attributes = [], array $values = [])
	 * @method Consignee firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Consignee forceCreate(array $attributes)
	 * @method _ConsigneeCollection|Consignee[] fromQuery(string $query, array $bindings = [])
	 * @method _ConsigneeCollection|Consignee[] get(array|string $columns = [ '*' ])
	 * @method Consignee getModel()
	 * @method Consignee[] getModels(array|string $columns = [ '*' ])
	 * @method _ConsigneeCollection|Consignee[] hydrate(array $items)
	 * @method Consignee make(array $attributes = [])
	 * @method Consignee newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Consignee[]|_ConsigneeCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Consignee[]|_ConsigneeCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Consignee sole(array|string $columns = [ '*' ])
	 * @method Consignee updateOrCreate(array $attributes, array $values = [])
	 */
	class _ConsigneeQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Document\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use App\Domain\Document\Models\Document;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use App\Domain\Document\Models\DocumentCategory;

    /**
	 * @method DocumentCategory shift()
	 * @method DocumentCategory pop()
	 * @method DocumentCategory get($key, $default = null)
	 * @method DocumentCategory pull($key, $default = null)
	 * @method DocumentCategory first(callable $callback = null, $default = null)
	 * @method DocumentCategory firstWhere(string $key, $operator = null, $value = null)
	 * @method DocumentCategory[] all()
	 * @method DocumentCategory last(callable $callback = null, $default = null)
	 */
	class _DocumentCategoryCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return DocumentCategory[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method DocumentCategory baseSole(array|string $columns = [ '*' ])
	 * @method DocumentCategory create(array $attributes = [])
	 * @method _DocumentCategoryCollection|DocumentCategory[] cursor()
	 * @method DocumentCategory|null find($id, array $columns = [ '*' ])
	 * @method _DocumentCategoryCollection|DocumentCategory[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method DocumentCategory findOrFail($id, array $columns = [ '*' ])
	 * @method _DocumentCategoryCollection|DocumentCategory[] findOrNew($id, array $columns = [ '*' ])
	 * @method DocumentCategory first(array|string $columns = [ '*' ])
	 * @method DocumentCategory firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method DocumentCategory firstOrCreate(array $attributes = [], array $values = [])
	 * @method DocumentCategory firstOrFail(array $columns = [ '*' ])
	 * @method DocumentCategory firstOrNew(array $attributes = [], array $values = [])
	 * @method DocumentCategory firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method DocumentCategory forceCreate(array $attributes)
	 * @method _DocumentCategoryCollection|DocumentCategory[] fromQuery(string $query, array $bindings = [])
	 * @method _DocumentCategoryCollection|DocumentCategory[] get(array|string $columns = [ '*' ])
	 * @method DocumentCategory getModel()
	 * @method DocumentCategory[] getModels(array|string $columns = [ '*' ])
	 * @method _DocumentCategoryCollection|DocumentCategory[] hydrate(array $items)
	 * @method DocumentCategory make(array $attributes = [])
	 * @method DocumentCategory newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|DocumentCategory[]|_DocumentCategoryCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|DocumentCategory[]|_DocumentCategoryCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method DocumentCategory sole(array|string $columns = [ '*' ])
	 * @method DocumentCategory updateOrCreate(array $attributes, array $values = [])
	 */
	class _DocumentCategoryQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Document shift()
	 * @method Document pop()
	 * @method Document get($key, $default = null)
	 * @method Document pull($key, $default = null)
	 * @method Document first(callable $callback = null, $default = null)
	 * @method Document firstWhere(string $key, $operator = null, $value = null)
	 * @method Document[] all()
	 * @method Document last(callable $callback = null, $default = null)
	 */
	class _DocumentCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Document[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method Document baseSole(array|string $columns = [ '*' ])
	 * @method Document create(array $attributes = [])
	 * @method _DocumentCollection|Document[] cursor()
	 * @method Document|null find($id, array $columns = [ '*' ])
	 * @method _DocumentCollection|Document[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Document findOrFail($id, array $columns = [ '*' ])
	 * @method _DocumentCollection|Document[] findOrNew($id, array $columns = [ '*' ])
	 * @method Document first(array|string $columns = [ '*' ])
	 * @method Document firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Document firstOrCreate(array $attributes = [], array $values = [])
	 * @method Document firstOrFail(array $columns = [ '*' ])
	 * @method Document firstOrNew(array $attributes = [], array $values = [])
	 * @method Document firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Document forceCreate(array $attributes)
	 * @method _DocumentCollection|Document[] fromQuery(string $query, array $bindings = [])
	 * @method _DocumentCollection|Document[] get(array|string $columns = [ '*' ])
	 * @method Document getModel()
	 * @method Document[] getModels(array|string $columns = [ '*' ])
	 * @method _DocumentCollection|Document[] hydrate(array $items)
	 * @method Document make(array $attributes = [])
	 * @method Document newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Document[]|_DocumentCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Document[]|_DocumentCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Document sole(array|string $columns = [ '*' ])
	 * @method Document updateOrCreate(array $attributes, array $values = [])
	 */
	class _DocumentQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Employee\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use App\Domain\Employee\Models\Employee;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use App\Domain\Employee\Models\EmployeesAttendance;
    use App\Domain\Employee\Models\EmployeesDesignation;
    use App\Domain\Employee\Models\EmployeePaymentDetails;
    use App\Domain\Employee\Models\EmployeeDesignationClassification;

    /**
	 * @method Employee shift()
	 * @method Employee pop()
	 * @method Employee get($key, $default = null)
	 * @method Employee pull($key, $default = null)
	 * @method Employee first(callable $callback = null, $default = null)
	 * @method Employee firstWhere(string $key, $operator = null, $value = null)
	 * @method Employee[] all()
	 * @method Employee last(callable $callback = null, $default = null)
	 */
	class _EmployeeCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Employee[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method EmployeeDesignationClassification shift()
	 * @method EmployeeDesignationClassification pop()
	 * @method EmployeeDesignationClassification get($key, $default = null)
	 * @method EmployeeDesignationClassification pull($key, $default = null)
	 * @method EmployeeDesignationClassification first(callable $callback = null, $default = null)
	 * @method EmployeeDesignationClassification firstWhere(string $key, $operator = null, $value = null)
	 * @method EmployeeDesignationClassification[] all()
	 * @method EmployeeDesignationClassification last(callable $callback = null, $default = null)
	 */
	class _EmployeeDesignationClassificationCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return EmployeeDesignationClassification[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _EmployeeDesignationClassificationQueryBuilder whereId($value)
	 * @method _EmployeeDesignationClassificationQueryBuilder whereName($value)
	 * @method _EmployeeDesignationClassificationQueryBuilder whereCreatedAt($value)
	 * @method _EmployeeDesignationClassificationQueryBuilder whereUpdatedAt($value)
	 * @method EmployeeDesignationClassification baseSole(array|string $columns = [ '*' ])
	 * @method EmployeeDesignationClassification create(array $attributes = [])
	 * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] cursor()
	 * @method EmployeeDesignationClassification|null find($id, array $columns = [ '*' ])
	 * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method EmployeeDesignationClassification findOrFail($id, array $columns = [ '*' ])
	 * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] findOrNew($id, array $columns = [ '*' ])
	 * @method EmployeeDesignationClassification first(array|string $columns = [ '*' ])
	 * @method EmployeeDesignationClassification firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method EmployeeDesignationClassification firstOrCreate(array $attributes = [], array $values = [])
	 * @method EmployeeDesignationClassification firstOrFail(array $columns = [ '*' ])
	 * @method EmployeeDesignationClassification firstOrNew(array $attributes = [], array $values = [])
	 * @method EmployeeDesignationClassification firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method EmployeeDesignationClassification forceCreate(array $attributes)
	 * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] fromQuery(string $query, array $bindings = [])
	 * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] get(array|string $columns = [ '*' ])
	 * @method EmployeeDesignationClassification getModel()
	 * @method EmployeeDesignationClassification[] getModels(array|string $columns = [ '*' ])
	 * @method _EmployeeDesignationClassificationCollection|EmployeeDesignationClassification[] hydrate(array $items)
	 * @method EmployeeDesignationClassification make(array $attributes = [])
	 * @method EmployeeDesignationClassification newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|EmployeeDesignationClassification[]|_EmployeeDesignationClassificationCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|EmployeeDesignationClassification[]|_EmployeeDesignationClassificationCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method EmployeeDesignationClassification sole(array|string $columns = [ '*' ])
	 * @method EmployeeDesignationClassification updateOrCreate(array $attributes, array $values = [])
	 */
	class _EmployeeDesignationClassificationQueryBuilder extends _BaseBuilder { }

	/**
	 * @method EmployeePaymentDetails shift()
	 * @method EmployeePaymentDetails pop()
	 * @method EmployeePaymentDetails get($key, $default = null)
	 * @method EmployeePaymentDetails pull($key, $default = null)
	 * @method EmployeePaymentDetails first(callable $callback = null, $default = null)
	 * @method EmployeePaymentDetails firstWhere(string $key, $operator = null, $value = null)
	 * @method EmployeePaymentDetails[] all()
	 * @method EmployeePaymentDetails last(callable $callback = null, $default = null)
	 */
	class _EmployeePaymentDetailsCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return EmployeePaymentDetails[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method EmployeePaymentDetails baseSole(array|string $columns = [ '*' ])
	 * @method EmployeePaymentDetails create(array $attributes = [])
	 * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] cursor()
	 * @method EmployeePaymentDetails|null find($id, array $columns = [ '*' ])
	 * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method EmployeePaymentDetails findOrFail($id, array $columns = [ '*' ])
	 * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] findOrNew($id, array $columns = [ '*' ])
	 * @method EmployeePaymentDetails first(array|string $columns = [ '*' ])
	 * @method EmployeePaymentDetails firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method EmployeePaymentDetails firstOrCreate(array $attributes = [], array $values = [])
	 * @method EmployeePaymentDetails firstOrFail(array $columns = [ '*' ])
	 * @method EmployeePaymentDetails firstOrNew(array $attributes = [], array $values = [])
	 * @method EmployeePaymentDetails firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method EmployeePaymentDetails forceCreate(array $attributes)
	 * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] fromQuery(string $query, array $bindings = [])
	 * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] get(array|string $columns = [ '*' ])
	 * @method EmployeePaymentDetails getModel()
	 * @method EmployeePaymentDetails[] getModels(array|string $columns = [ '*' ])
	 * @method _EmployeePaymentDetailsCollection|EmployeePaymentDetails[] hydrate(array $items)
	 * @method EmployeePaymentDetails make(array $attributes = [])
	 * @method EmployeePaymentDetails newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|EmployeePaymentDetails[]|_EmployeePaymentDetailsCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|EmployeePaymentDetails[]|_EmployeePaymentDetailsCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method EmployeePaymentDetails sole(array|string $columns = [ '*' ])
	 * @method EmployeePaymentDetails updateOrCreate(array $attributes, array $values = [])
	 */
	class _EmployeePaymentDetailsQueryBuilder extends _BaseBuilder { }

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
	 * @method Employee baseSole(array|string $columns = [ '*' ])
	 * @method Employee create(array $attributes = [])
	 * @method _EmployeeCollection|Employee[] cursor()
	 * @method Employee|null find($id, array $columns = [ '*' ])
	 * @method _EmployeeCollection|Employee[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Employee findOrFail($id, array $columns = [ '*' ])
	 * @method _EmployeeCollection|Employee[] findOrNew($id, array $columns = [ '*' ])
	 * @method Employee first(array|string $columns = [ '*' ])
	 * @method Employee firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Employee firstOrCreate(array $attributes = [], array $values = [])
	 * @method Employee firstOrFail(array $columns = [ '*' ])
	 * @method Employee firstOrNew(array $attributes = [], array $values = [])
	 * @method Employee firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Employee forceCreate(array $attributes)
	 * @method _EmployeeCollection|Employee[] fromQuery(string $query, array $bindings = [])
	 * @method _EmployeeCollection|Employee[] get(array|string $columns = [ '*' ])
	 * @method Employee getModel()
	 * @method Employee[] getModels(array|string $columns = [ '*' ])
	 * @method _EmployeeCollection|Employee[] hydrate(array $items)
	 * @method Employee make(array $attributes = [])
	 * @method Employee newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Employee[]|_EmployeeCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Employee[]|_EmployeeCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Employee sole(array|string $columns = [ '*' ])
	 * @method Employee updateOrCreate(array $attributes, array $values = [])
	 */
	class _EmployeeQueryBuilder extends _BaseBuilder { }

	/**
	 * @method EmployeesAttendance shift()
	 * @method EmployeesAttendance pop()
	 * @method EmployeesAttendance get($key, $default = null)
	 * @method EmployeesAttendance pull($key, $default = null)
	 * @method EmployeesAttendance first(callable $callback = null, $default = null)
	 * @method EmployeesAttendance firstWhere(string $key, $operator = null, $value = null)
	 * @method EmployeesAttendance[] all()
	 * @method EmployeesAttendance last(callable $callback = null, $default = null)
	 */
	class _EmployeesAttendanceCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return EmployeesAttendance[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _EmployeesAttendanceQueryBuilder whereId($value)
	 * @method _EmployeesAttendanceQueryBuilder whereDate($value)
	 * @method _EmployeesAttendanceQueryBuilder whereEmployeeId($value)
	 * @method _EmployeesAttendanceQueryBuilder whereCompanyId($value)
	 * @method _EmployeesAttendanceQueryBuilder whereCreatedAt($value)
	 * @method _EmployeesAttendanceQueryBuilder whereUpdatedAt($value)
	 * @method EmployeesAttendance baseSole(array|string $columns = [ '*' ])
	 * @method EmployeesAttendance create(array $attributes = [])
	 * @method _EmployeesAttendanceCollection|EmployeesAttendance[] cursor()
	 * @method EmployeesAttendance|null find($id, array $columns = [ '*' ])
	 * @method _EmployeesAttendanceCollection|EmployeesAttendance[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method EmployeesAttendance findOrFail($id, array $columns = [ '*' ])
	 * @method _EmployeesAttendanceCollection|EmployeesAttendance[] findOrNew($id, array $columns = [ '*' ])
	 * @method EmployeesAttendance first(array|string $columns = [ '*' ])
	 * @method EmployeesAttendance firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method EmployeesAttendance firstOrCreate(array $attributes = [], array $values = [])
	 * @method EmployeesAttendance firstOrFail(array $columns = [ '*' ])
	 * @method EmployeesAttendance firstOrNew(array $attributes = [], array $values = [])
	 * @method EmployeesAttendance firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method EmployeesAttendance forceCreate(array $attributes)
	 * @method _EmployeesAttendanceCollection|EmployeesAttendance[] fromQuery(string $query, array $bindings = [])
	 * @method _EmployeesAttendanceCollection|EmployeesAttendance[] get(array|string $columns = [ '*' ])
	 * @method EmployeesAttendance getModel()
	 * @method EmployeesAttendance[] getModels(array|string $columns = [ '*' ])
	 * @method _EmployeesAttendanceCollection|EmployeesAttendance[] hydrate(array $items)
	 * @method EmployeesAttendance make(array $attributes = [])
	 * @method EmployeesAttendance newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|EmployeesAttendance[]|_EmployeesAttendanceCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|EmployeesAttendance[]|_EmployeesAttendanceCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method EmployeesAttendance sole(array|string $columns = [ '*' ])
	 * @method EmployeesAttendance updateOrCreate(array $attributes, array $values = [])
	 */
	class _EmployeesAttendanceQueryBuilder extends _BaseBuilder { }

	/**
	 * @method EmployeesDesignation shift()
	 * @method EmployeesDesignation pop()
	 * @method EmployeesDesignation get($key, $default = null)
	 * @method EmployeesDesignation pull($key, $default = null)
	 * @method EmployeesDesignation first(callable $callback = null, $default = null)
	 * @method EmployeesDesignation firstWhere(string $key, $operator = null, $value = null)
	 * @method EmployeesDesignation[] all()
	 * @method EmployeesDesignation last(callable $callback = null, $default = null)
	 */
	class _EmployeesDesignationCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return EmployeesDesignation[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _EmployeesDesignationQueryBuilder whereId($value)
	 * @method _EmployeesDesignationQueryBuilder whereName($value)
	 * @method _EmployeesDesignationQueryBuilder whereEmpDesigClassId($value)
	 * @method _EmployeesDesignationQueryBuilder whereCreatedAt($value)
	 * @method _EmployeesDesignationQueryBuilder whereUpdatedAt($value)
	 * @method EmployeesDesignation baseSole(array|string $columns = [ '*' ])
	 * @method EmployeesDesignation create(array $attributes = [])
	 * @method _EmployeesDesignationCollection|EmployeesDesignation[] cursor()
	 * @method EmployeesDesignation|null find($id, array $columns = [ '*' ])
	 * @method _EmployeesDesignationCollection|EmployeesDesignation[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method EmployeesDesignation findOrFail($id, array $columns = [ '*' ])
	 * @method _EmployeesDesignationCollection|EmployeesDesignation[] findOrNew($id, array $columns = [ '*' ])
	 * @method EmployeesDesignation first(array|string $columns = [ '*' ])
	 * @method EmployeesDesignation firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method EmployeesDesignation firstOrCreate(array $attributes = [], array $values = [])
	 * @method EmployeesDesignation firstOrFail(array $columns = [ '*' ])
	 * @method EmployeesDesignation firstOrNew(array $attributes = [], array $values = [])
	 * @method EmployeesDesignation firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method EmployeesDesignation forceCreate(array $attributes)
	 * @method _EmployeesDesignationCollection|EmployeesDesignation[] fromQuery(string $query, array $bindings = [])
	 * @method _EmployeesDesignationCollection|EmployeesDesignation[] get(array|string $columns = [ '*' ])
	 * @method EmployeesDesignation getModel()
	 * @method EmployeesDesignation[] getModels(array|string $columns = [ '*' ])
	 * @method _EmployeesDesignationCollection|EmployeesDesignation[] hydrate(array $items)
	 * @method EmployeesDesignation make(array $attributes = [])
	 * @method EmployeesDesignation newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|EmployeesDesignation[]|_EmployeesDesignationCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|EmployeesDesignation[]|_EmployeesDesignationCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method EmployeesDesignation sole(array|string $columns = [ '*' ])
	 * @method EmployeesDesignation updateOrCreate(array $attributes, array $values = [])
	 */
	class _EmployeesDesignationQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Expense\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\Expense\Models\Expense;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use App\Domain\Expense\Models\ExpenseCategory;
    use Illuminate\Pagination\LengthAwarePaginator;
    use App\Domain\Expense\Models\ExpenseIndividual;
    use App\Domain\Expense\Models\ExpenseCategoryType;

    /**
	 * @method ExpenseCategory shift()
	 * @method ExpenseCategory pop()
	 * @method ExpenseCategory get($key, $default = null)
	 * @method ExpenseCategory pull($key, $default = null)
	 * @method ExpenseCategory first(callable $callback = null, $default = null)
	 * @method ExpenseCategory firstWhere(string $key, $operator = null, $value = null)
	 * @method ExpenseCategory[] all()
	 * @method ExpenseCategory last(callable $callback = null, $default = null)
	 */
	class _ExpenseCategoryCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return ExpenseCategory[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _ExpenseCategoryQueryBuilder whereId($value)
	 * @method _ExpenseCategoryQueryBuilder whereName($value)
	 * @method _ExpenseCategoryQueryBuilder whereExpenseCategoryTypeId($value)
	 * @method _ExpenseCategoryQueryBuilder whereCreatedAt($value)
	 * @method _ExpenseCategoryQueryBuilder whereUpdatedAt($value)
	 * @method ExpenseCategory baseSole(array|string $columns = [ '*' ])
	 * @method ExpenseCategory create(array $attributes = [])
	 * @method _ExpenseCategoryCollection|ExpenseCategory[] cursor()
	 * @method ExpenseCategory|null find($id, array $columns = [ '*' ])
	 * @method _ExpenseCategoryCollection|ExpenseCategory[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method ExpenseCategory findOrFail($id, array $columns = [ '*' ])
	 * @method _ExpenseCategoryCollection|ExpenseCategory[] findOrNew($id, array $columns = [ '*' ])
	 * @method ExpenseCategory first(array|string $columns = [ '*' ])
	 * @method ExpenseCategory firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method ExpenseCategory firstOrCreate(array $attributes = [], array $values = [])
	 * @method ExpenseCategory firstOrFail(array $columns = [ '*' ])
	 * @method ExpenseCategory firstOrNew(array $attributes = [], array $values = [])
	 * @method ExpenseCategory firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method ExpenseCategory forceCreate(array $attributes)
	 * @method _ExpenseCategoryCollection|ExpenseCategory[] fromQuery(string $query, array $bindings = [])
	 * @method _ExpenseCategoryCollection|ExpenseCategory[] get(array|string $columns = [ '*' ])
	 * @method ExpenseCategory getModel()
	 * @method ExpenseCategory[] getModels(array|string $columns = [ '*' ])
	 * @method _ExpenseCategoryCollection|ExpenseCategory[] hydrate(array $items)
	 * @method ExpenseCategory make(array $attributes = [])
	 * @method ExpenseCategory newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|ExpenseCategory[]|_ExpenseCategoryCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|ExpenseCategory[]|_ExpenseCategoryCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method ExpenseCategory sole(array|string $columns = [ '*' ])
	 * @method ExpenseCategory updateOrCreate(array $attributes, array $values = [])
	 */
	class _ExpenseCategoryQueryBuilder extends _BaseBuilder { }

	/**
	 * @method ExpenseCategoryType shift()
	 * @method ExpenseCategoryType pop()
	 * @method ExpenseCategoryType get($key, $default = null)
	 * @method ExpenseCategoryType pull($key, $default = null)
	 * @method ExpenseCategoryType first(callable $callback = null, $default = null)
	 * @method ExpenseCategoryType firstWhere(string $key, $operator = null, $value = null)
	 * @method ExpenseCategoryType[] all()
	 * @method ExpenseCategoryType last(callable $callback = null, $default = null)
	 */
	class _ExpenseCategoryTypeCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return ExpenseCategoryType[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _ExpenseCategoryTypeQueryBuilder whereId($value)
	 * @method _ExpenseCategoryTypeQueryBuilder whereName($value)
	 * @method _ExpenseCategoryTypeQueryBuilder whereCreatedAt($value)
	 * @method _ExpenseCategoryTypeQueryBuilder whereUpdatedAt($value)
	 * @method ExpenseCategoryType baseSole(array|string $columns = [ '*' ])
	 * @method ExpenseCategoryType create(array $attributes = [])
	 * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] cursor()
	 * @method ExpenseCategoryType|null find($id, array $columns = [ '*' ])
	 * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method ExpenseCategoryType findOrFail($id, array $columns = [ '*' ])
	 * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] findOrNew($id, array $columns = [ '*' ])
	 * @method ExpenseCategoryType first(array|string $columns = [ '*' ])
	 * @method ExpenseCategoryType firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method ExpenseCategoryType firstOrCreate(array $attributes = [], array $values = [])
	 * @method ExpenseCategoryType firstOrFail(array $columns = [ '*' ])
	 * @method ExpenseCategoryType firstOrNew(array $attributes = [], array $values = [])
	 * @method ExpenseCategoryType firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method ExpenseCategoryType forceCreate(array $attributes)
	 * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] fromQuery(string $query, array $bindings = [])
	 * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] get(array|string $columns = [ '*' ])
	 * @method ExpenseCategoryType getModel()
	 * @method ExpenseCategoryType[] getModels(array|string $columns = [ '*' ])
	 * @method _ExpenseCategoryTypeCollection|ExpenseCategoryType[] hydrate(array $items)
	 * @method ExpenseCategoryType make(array $attributes = [])
	 * @method ExpenseCategoryType newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|ExpenseCategoryType[]|_ExpenseCategoryTypeCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|ExpenseCategoryType[]|_ExpenseCategoryTypeCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method ExpenseCategoryType sole(array|string $columns = [ '*' ])
	 * @method ExpenseCategoryType updateOrCreate(array $attributes, array $values = [])
	 */
	class _ExpenseCategoryTypeQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Expense shift()
	 * @method Expense pop()
	 * @method Expense get($key, $default = null)
	 * @method Expense pull($key, $default = null)
	 * @method Expense first(callable $callback = null, $default = null)
	 * @method Expense firstWhere(string $key, $operator = null, $value = null)
	 * @method Expense[] all()
	 * @method Expense last(callable $callback = null, $default = null)
	 */
	class _ExpenseCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Expense[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method ExpenseIndividual shift()
	 * @method ExpenseIndividual pop()
	 * @method ExpenseIndividual get($key, $default = null)
	 * @method ExpenseIndividual pull($key, $default = null)
	 * @method ExpenseIndividual first(callable $callback = null, $default = null)
	 * @method ExpenseIndividual firstWhere(string $key, $operator = null, $value = null)
	 * @method ExpenseIndividual[] all()
	 * @method ExpenseIndividual last(callable $callback = null, $default = null)
	 */
	class _ExpenseIndividualCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return ExpenseIndividual[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _ExpenseIndividualQueryBuilder whereId($value)
	 * @method _ExpenseIndividualQueryBuilder whereName($value)
	 * @method _ExpenseIndividualQueryBuilder whereCompanyId($value)
	 * @method _ExpenseIndividualQueryBuilder whereCreatedAt($value)
	 * @method _ExpenseIndividualQueryBuilder whereUpdatedAt($value)
	 * @method ExpenseIndividual baseSole(array|string $columns = [ '*' ])
	 * @method ExpenseIndividual create(array $attributes = [])
	 * @method _ExpenseIndividualCollection|ExpenseIndividual[] cursor()
	 * @method ExpenseIndividual|null find($id, array $columns = [ '*' ])
	 * @method _ExpenseIndividualCollection|ExpenseIndividual[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method ExpenseIndividual findOrFail($id, array $columns = [ '*' ])
	 * @method _ExpenseIndividualCollection|ExpenseIndividual[] findOrNew($id, array $columns = [ '*' ])
	 * @method ExpenseIndividual first(array|string $columns = [ '*' ])
	 * @method ExpenseIndividual firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method ExpenseIndividual firstOrCreate(array $attributes = [], array $values = [])
	 * @method ExpenseIndividual firstOrFail(array $columns = [ '*' ])
	 * @method ExpenseIndividual firstOrNew(array $attributes = [], array $values = [])
	 * @method ExpenseIndividual firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method ExpenseIndividual forceCreate(array $attributes)
	 * @method _ExpenseIndividualCollection|ExpenseIndividual[] fromQuery(string $query, array $bindings = [])
	 * @method _ExpenseIndividualCollection|ExpenseIndividual[] get(array|string $columns = [ '*' ])
	 * @method ExpenseIndividual getModel()
	 * @method ExpenseIndividual[] getModels(array|string $columns = [ '*' ])
	 * @method _ExpenseIndividualCollection|ExpenseIndividual[] hydrate(array $items)
	 * @method ExpenseIndividual make(array $attributes = [])
	 * @method ExpenseIndividual newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|ExpenseIndividual[]|_ExpenseIndividualCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|ExpenseIndividual[]|_ExpenseIndividualCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method ExpenseIndividual sole(array|string $columns = [ '*' ])
	 * @method ExpenseIndividual updateOrCreate(array $attributes, array $values = [])
	 */
	class _ExpenseIndividualQueryBuilder extends _BaseBuilder { }

	/**
	 * @method _ExpenseQueryBuilder whereId($value)
	 * @method _ExpenseQueryBuilder whereDate($value)
	 * @method _ExpenseQueryBuilder whereAmount($value)
	 * @method _ExpenseQueryBuilder whereRemark($value)
	 * @method _ExpenseQueryBuilder whereExpenseCategoryId($value)
	 * @method _ExpenseQueryBuilder whereExpenseIndividualId($value)
	 * @method _ExpenseQueryBuilder whereOfficeId($value)
	 * @method _ExpenseQueryBuilder wherePaymentMethodId($value)
	 * @method _ExpenseQueryBuilder whereCompanyId($value)
	 * @method _ExpenseQueryBuilder whereCreatedAt($value)
	 * @method _ExpenseQueryBuilder whereUpdatedAt($value)
	 * @method Expense baseSole(array|string $columns = [ '*' ])
	 * @method Expense create(array $attributes = [])
	 * @method _ExpenseCollection|Expense[] cursor()
	 * @method Expense|null find($id, array $columns = [ '*' ])
	 * @method _ExpenseCollection|Expense[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Expense findOrFail($id, array $columns = [ '*' ])
	 * @method _ExpenseCollection|Expense[] findOrNew($id, array $columns = [ '*' ])
	 * @method Expense first(array|string $columns = [ '*' ])
	 * @method Expense firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Expense firstOrCreate(array $attributes = [], array $values = [])
	 * @method Expense firstOrFail(array $columns = [ '*' ])
	 * @method Expense firstOrNew(array $attributes = [], array $values = [])
	 * @method Expense firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Expense forceCreate(array $attributes)
	 * @method _ExpenseCollection|Expense[] fromQuery(string $query, array $bindings = [])
	 * @method _ExpenseCollection|Expense[] get(array|string $columns = [ '*' ])
	 * @method Expense getModel()
	 * @method Expense[] getModels(array|string $columns = [ '*' ])
	 * @method _ExpenseCollection|Expense[] hydrate(array $items)
	 * @method Expense make(array $attributes = [])
	 * @method Expense newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Expense[]|_ExpenseCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Expense[]|_ExpenseCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Expense sole(array|string $columns = [ '*' ])
	 * @method Expense updateOrCreate(array $attributes, array $values = [])
	 */
	class _ExpenseQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Fleet\Models {

    use App\Domain\Fleet\Models\Fleet;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\Fleet\Models\FleetLive;
    use LaravelIdea\Helper\_BaseCollection;
    use App\Domain\Fleet\Models\FleetVehicle;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use App\Domain\Fleet\Models\FleetMaintenance;
    use App\Domain\Fleet\Models\FleetTripCatcher;
    use Illuminate\Pagination\LengthAwarePaginator;
    use App\Domain\Fleet\Models\FleetDailyInspection;

    /**
	 * @method Fleet shift()
	 * @method Fleet pop()
	 * @method Fleet get($key, $default = null)
	 * @method Fleet pull($key, $default = null)
	 * @method Fleet first(callable $callback = null, $default = null)
	 * @method Fleet firstWhere(string $key, $operator = null, $value = null)
	 * @method Fleet[] all()
	 * @method Fleet last(callable $callback = null, $default = null)
	 */
	class _FleetCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Fleet[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method FleetDailyInspection shift()
	 * @method FleetDailyInspection pop()
	 * @method FleetDailyInspection get($key, $default = null)
	 * @method FleetDailyInspection pull($key, $default = null)
	 * @method FleetDailyInspection first(callable $callback = null, $default = null)
	 * @method FleetDailyInspection firstWhere(string $key, $operator = null, $value = null)
	 * @method FleetDailyInspection[] all()
	 * @method FleetDailyInspection last(callable $callback = null, $default = null)
	 */
	class _FleetDailyInspectionCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return FleetDailyInspection[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

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
	 * @method FleetDailyInspection baseSole(array|string $columns = [ '*' ])
	 * @method FleetDailyInspection create(array $attributes = [])
	 * @method _FleetDailyInspectionCollection|FleetDailyInspection[] cursor()
	 * @method FleetDailyInspection|null find($id, array $columns = [ '*' ])
	 * @method _FleetDailyInspectionCollection|FleetDailyInspection[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method FleetDailyInspection findOrFail($id, array $columns = [ '*' ])
	 * @method _FleetDailyInspectionCollection|FleetDailyInspection[] findOrNew($id, array $columns = [ '*' ])
	 * @method FleetDailyInspection first(array|string $columns = [ '*' ])
	 * @method FleetDailyInspection firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method FleetDailyInspection firstOrCreate(array $attributes = [], array $values = [])
	 * @method FleetDailyInspection firstOrFail(array $columns = [ '*' ])
	 * @method FleetDailyInspection firstOrNew(array $attributes = [], array $values = [])
	 * @method FleetDailyInspection firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method FleetDailyInspection forceCreate(array $attributes)
	 * @method _FleetDailyInspectionCollection|FleetDailyInspection[] fromQuery(string $query, array $bindings = [])
	 * @method _FleetDailyInspectionCollection|FleetDailyInspection[] get(array|string $columns = [ '*' ])
	 * @method FleetDailyInspection getModel()
	 * @method FleetDailyInspection[] getModels(array|string $columns = [ '*' ])
	 * @method _FleetDailyInspectionCollection|FleetDailyInspection[] hydrate(array $items)
	 * @method FleetDailyInspection make(array $attributes = [])
	 * @method FleetDailyInspection newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|FleetDailyInspection[]|_FleetDailyInspectionCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|FleetDailyInspection[]|_FleetDailyInspectionCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method FleetDailyInspection sole(array|string $columns = [ '*' ])
	 * @method FleetDailyInspection updateOrCreate(array $attributes, array $values = [])
	 */
	class _FleetDailyInspectionQueryBuilder extends _BaseBuilder { }

	/**
	 * @method FleetLive shift()
	 * @method FleetLive pop()
	 * @method FleetLive get($key, $default = null)
	 * @method FleetLive pull($key, $default = null)
	 * @method FleetLive first(callable $callback = null, $default = null)
	 * @method FleetLive firstWhere(string $key, $operator = null, $value = null)
	 * @method FleetLive[] all()
	 * @method FleetLive last(callable $callback = null, $default = null)
	 */
	class _FleetLiveCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return FleetLive[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

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
	 * @method FleetLive baseSole(array|string $columns = [ '*' ])
	 * @method FleetLive create(array $attributes = [])
	 * @method _FleetLiveCollection|FleetLive[] cursor()
	 * @method FleetLive|null find($id, array $columns = [ '*' ])
	 * @method _FleetLiveCollection|FleetLive[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method FleetLive findOrFail($id, array $columns = [ '*' ])
	 * @method _FleetLiveCollection|FleetLive[] findOrNew($id, array $columns = [ '*' ])
	 * @method FleetLive first(array|string $columns = [ '*' ])
	 * @method FleetLive firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method FleetLive firstOrCreate(array $attributes = [], array $values = [])
	 * @method FleetLive firstOrFail(array $columns = [ '*' ])
	 * @method FleetLive firstOrNew(array $attributes = [], array $values = [])
	 * @method FleetLive firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method FleetLive forceCreate(array $attributes)
	 * @method _FleetLiveCollection|FleetLive[] fromQuery(string $query, array $bindings = [])
	 * @method _FleetLiveCollection|FleetLive[] get(array|string $columns = [ '*' ])
	 * @method FleetLive getModel()
	 * @method FleetLive[] getModels(array|string $columns = [ '*' ])
	 * @method _FleetLiveCollection|FleetLive[] hydrate(array $items)
	 * @method FleetLive make(array $attributes = [])
	 * @method FleetLive newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|FleetLive[]|_FleetLiveCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|FleetLive[]|_FleetLiveCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method FleetLive sole(array|string $columns = [ '*' ])
	 * @method FleetLive updateOrCreate(array $attributes, array $values = [])
	 */
	class _FleetLiveQueryBuilder extends _BaseBuilder { }

	/**
	 * @method FleetMaintenance shift()
	 * @method FleetMaintenance pop()
	 * @method FleetMaintenance get($key, $default = null)
	 * @method FleetMaintenance pull($key, $default = null)
	 * @method FleetMaintenance first(callable $callback = null, $default = null)
	 * @method FleetMaintenance firstWhere(string $key, $operator = null, $value = null)
	 * @method FleetMaintenance[] all()
	 * @method FleetMaintenance last(callable $callback = null, $default = null)
	 */
	class _FleetMaintenanceCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return FleetMaintenance[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method FleetMaintenance baseSole(array|string $columns = [ '*' ])
	 * @method FleetMaintenance create(array $attributes = [])
	 * @method _FleetMaintenanceCollection|FleetMaintenance[] cursor()
	 * @method FleetMaintenance|null find($id, array $columns = [ '*' ])
	 * @method _FleetMaintenanceCollection|FleetMaintenance[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method FleetMaintenance findOrFail($id, array $columns = [ '*' ])
	 * @method _FleetMaintenanceCollection|FleetMaintenance[] findOrNew($id, array $columns = [ '*' ])
	 * @method FleetMaintenance first(array|string $columns = [ '*' ])
	 * @method FleetMaintenance firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method FleetMaintenance firstOrCreate(array $attributes = [], array $values = [])
	 * @method FleetMaintenance firstOrFail(array $columns = [ '*' ])
	 * @method FleetMaintenance firstOrNew(array $attributes = [], array $values = [])
	 * @method FleetMaintenance firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method FleetMaintenance forceCreate(array $attributes)
	 * @method _FleetMaintenanceCollection|FleetMaintenance[] fromQuery(string $query, array $bindings = [])
	 * @method _FleetMaintenanceCollection|FleetMaintenance[] get(array|string $columns = [ '*' ])
	 * @method FleetMaintenance getModel()
	 * @method FleetMaintenance[] getModels(array|string $columns = [ '*' ])
	 * @method _FleetMaintenanceCollection|FleetMaintenance[] hydrate(array $items)
	 * @method FleetMaintenance make(array $attributes = [])
	 * @method FleetMaintenance newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|FleetMaintenance[]|_FleetMaintenanceCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|FleetMaintenance[]|_FleetMaintenanceCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method FleetMaintenance sole(array|string $columns = [ '*' ])
	 * @method FleetMaintenance updateOrCreate(array $attributes, array $values = [])
	 */
	class _FleetMaintenanceQueryBuilder extends _BaseBuilder { }

	/**
	 * @method _FleetQueryBuilder whereId($value)
	 * @method _FleetQueryBuilder whereName($value)
	 * @method _FleetQueryBuilder whereCompanyId($value)
	 * @method _FleetQueryBuilder whereCreatedAt($value)
	 * @method _FleetQueryBuilder whereUpdatedAt($value)
	 * @method Fleet baseSole(array|string $columns = [ '*' ])
	 * @method Fleet create(array $attributes = [])
	 * @method _FleetCollection|Fleet[] cursor()
	 * @method Fleet|null find($id, array $columns = [ '*' ])
	 * @method _FleetCollection|Fleet[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Fleet findOrFail($id, array $columns = [ '*' ])
	 * @method _FleetCollection|Fleet[] findOrNew($id, array $columns = [ '*' ])
	 * @method Fleet first(array|string $columns = [ '*' ])
	 * @method Fleet firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Fleet firstOrCreate(array $attributes = [], array $values = [])
	 * @method Fleet firstOrFail(array $columns = [ '*' ])
	 * @method Fleet firstOrNew(array $attributes = [], array $values = [])
	 * @method Fleet firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Fleet forceCreate(array $attributes)
	 * @method _FleetCollection|Fleet[] fromQuery(string $query, array $bindings = [])
	 * @method _FleetCollection|Fleet[] get(array|string $columns = [ '*' ])
	 * @method Fleet getModel()
	 * @method Fleet[] getModels(array|string $columns = [ '*' ])
	 * @method _FleetCollection|Fleet[] hydrate(array $items)
	 * @method Fleet make(array $attributes = [])
	 * @method Fleet newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Fleet[]|_FleetCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Fleet[]|_FleetCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Fleet sole(array|string $columns = [ '*' ])
	 * @method Fleet updateOrCreate(array $attributes, array $values = [])
	 */
	class _FleetQueryBuilder extends _BaseBuilder { }

	/**
	 * @method FleetTripCatcher shift()
	 * @method FleetTripCatcher pop()
	 * @method FleetTripCatcher get($key, $default = null)
	 * @method FleetTripCatcher pull($key, $default = null)
	 * @method FleetTripCatcher first(callable $callback = null, $default = null)
	 * @method FleetTripCatcher firstWhere(string $key, $operator = null, $value = null)
	 * @method FleetTripCatcher[] all()
	 * @method FleetTripCatcher last(callable $callback = null, $default = null)
	 */
	class _FleetTripCatcherCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return FleetTripCatcher[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

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
	 * @method FleetTripCatcher baseSole(array|string $columns = [ '*' ])
	 * @method FleetTripCatcher create(array $attributes = [])
	 * @method _FleetTripCatcherCollection|FleetTripCatcher[] cursor()
	 * @method FleetTripCatcher|null find($id, array $columns = [ '*' ])
	 * @method _FleetTripCatcherCollection|FleetTripCatcher[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method FleetTripCatcher findOrFail($id, array $columns = [ '*' ])
	 * @method _FleetTripCatcherCollection|FleetTripCatcher[] findOrNew($id, array $columns = [ '*' ])
	 * @method FleetTripCatcher first(array|string $columns = [ '*' ])
	 * @method FleetTripCatcher firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method FleetTripCatcher firstOrCreate(array $attributes = [], array $values = [])
	 * @method FleetTripCatcher firstOrFail(array $columns = [ '*' ])
	 * @method FleetTripCatcher firstOrNew(array $attributes = [], array $values = [])
	 * @method FleetTripCatcher firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method FleetTripCatcher forceCreate(array $attributes)
	 * @method _FleetTripCatcherCollection|FleetTripCatcher[] fromQuery(string $query, array $bindings = [])
	 * @method _FleetTripCatcherCollection|FleetTripCatcher[] get(array|string $columns = [ '*' ])
	 * @method FleetTripCatcher getModel()
	 * @method FleetTripCatcher[] getModels(array|string $columns = [ '*' ])
	 * @method _FleetTripCatcherCollection|FleetTripCatcher[] hydrate(array $items)
	 * @method FleetTripCatcher make(array $attributes = [])
	 * @method FleetTripCatcher newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|FleetTripCatcher[]|_FleetTripCatcherCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|FleetTripCatcher[]|_FleetTripCatcherCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method FleetTripCatcher sole(array|string $columns = [ '*' ])
	 * @method FleetTripCatcher updateOrCreate(array $attributes, array $values = [])
	 */
	class _FleetTripCatcherQueryBuilder extends _BaseBuilder { }

	/**
	 * @method FleetVehicle shift()
	 * @method FleetVehicle pop()
	 * @method FleetVehicle get($key, $default = null)
	 * @method FleetVehicle pull($key, $default = null)
	 * @method FleetVehicle first(callable $callback = null, $default = null)
	 * @method FleetVehicle firstWhere(string $key, $operator = null, $value = null)
	 * @method FleetVehicle[] all()
	 * @method FleetVehicle last(callable $callback = null, $default = null)
	 */
	class _FleetVehicleCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return FleetVehicle[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _FleetVehicleQueryBuilder whereId($value)
	 * @method _FleetVehicleQueryBuilder whereNumber($value)
	 * @method _FleetVehicleQueryBuilder whereOwnerName($value)
	 * @method _FleetVehicleQueryBuilder whereRegDate($value)
	 * @method _FleetVehicleQueryBuilder whereModel($value)
	 * @method _FleetVehicleQueryBuilder whereFitnessUpto($value)
	 * @method _FleetVehicleQueryBuilder whereInsuranceUpto($value)
	 * @method _FleetVehicleQueryBuilder whereClass($value)
	 * @method _FleetVehicleQueryBuilder whereChassisNumber($value)
	 * @method _FleetVehicleQueryBuilder whereEngineNumber($value)
	 * @method _FleetVehicleQueryBuilder whereAuthority($value)
	 * @method _FleetVehicleQueryBuilder whereRtoCode($value)
	 * @method _FleetVehicleQueryBuilder whereFleetId($value)
	 * @method _FleetVehicleQueryBuilder whereCompanyId($value)
	 * @method _FleetVehicleQueryBuilder whereCreatedAt($value)
	 * @method _FleetVehicleQueryBuilder whereUpdatedAt($value)
	 * @method FleetVehicle baseSole(array|string $columns = [ '*' ])
	 * @method FleetVehicle create(array $attributes = [])
	 * @method _FleetVehicleCollection|FleetVehicle[] cursor()
	 * @method FleetVehicle|null find($id, array $columns = [ '*' ])
	 * @method _FleetVehicleCollection|FleetVehicle[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method FleetVehicle findOrFail($id, array $columns = [ '*' ])
	 * @method _FleetVehicleCollection|FleetVehicle[] findOrNew($id, array $columns = [ '*' ])
	 * @method FleetVehicle first(array|string $columns = [ '*' ])
	 * @method FleetVehicle firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method FleetVehicle firstOrCreate(array $attributes = [], array $values = [])
	 * @method FleetVehicle firstOrFail(array $columns = [ '*' ])
	 * @method FleetVehicle firstOrNew(array $attributes = [], array $values = [])
	 * @method FleetVehicle firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method FleetVehicle forceCreate(array $attributes)
	 * @method _FleetVehicleCollection|FleetVehicle[] fromQuery(string $query, array $bindings = [])
	 * @method _FleetVehicleCollection|FleetVehicle[] get(array|string $columns = [ '*' ])
	 * @method FleetVehicle getModel()
	 * @method FleetVehicle[] getModels(array|string $columns = [ '*' ])
	 * @method _FleetVehicleCollection|FleetVehicle[] hydrate(array $items)
	 * @method FleetVehicle make(array $attributes = [])
	 * @method FleetVehicle newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|FleetVehicle[]|_FleetVehicleCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|FleetVehicle[]|_FleetVehicleCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method FleetVehicle sole(array|string $columns = [ '*' ])
	 * @method FleetVehicle updateOrCreate(array $attributes, array $values = [])
	 */
	class _FleetVehicleQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\General\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\General\Models\Sector;
    use App\Domain\General\Models\Address;
    use App\Domain\General\Models\Material;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\UnloadingPoint\Models\UnloadingPoint;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use App\Domain\LoadingPoint\Models\LoadingPoint;

    /**
	 * @method Address shift()
	 * @method Address pop()
	 * @method Address get($key, $default = null)
	 * @method Address pull($key, $default = null)
	 * @method Address first(callable $callback = null, $default = null)
	 * @method Address firstWhere(string $key, $operator = null, $value = null)
	 * @method Address[] all()
	 * @method Address last(callable $callback = null, $default = null)
	 */
	class _AddressCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Address[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _AddressQueryBuilder whereId($value)
	 * @method _AddressQueryBuilder whereLine1($value)
	 * @method _AddressQueryBuilder whereLine2($value)
	 * @method _AddressQueryBuilder whereCity($value)
	 * @method _AddressQueryBuilder whereZip($value)
	 * @method _AddressQueryBuilder whereState($value)
	 * @method _AddressQueryBuilder whereAddressableId($value)
	 * @method _AddressQueryBuilder whereAddressableType($value)
	 * @method _AddressQueryBuilder whereCompanyId($value)
	 * @method _AddressQueryBuilder whereCreatedAt($value)
	 * @method _AddressQueryBuilder whereUpdatedAt($value)
	 * @method Address baseSole(array|string $columns = [ '*' ])
	 * @method Address create(array $attributes = [])
	 * @method _AddressCollection|Address[] cursor()
	 * @method Address|null find($id, array $columns = [ '*' ])
	 * @method _AddressCollection|Address[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Address findOrFail($id, array $columns = [ '*' ])
	 * @method _AddressCollection|Address[] findOrNew($id, array $columns = [ '*' ])
	 * @method Address first(array|string $columns = [ '*' ])
	 * @method Address firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Address firstOrCreate(array $attributes = [], array $values = [])
	 * @method Address firstOrFail(array $columns = [ '*' ])
	 * @method Address firstOrNew(array $attributes = [], array $values = [])
	 * @method Address firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Address forceCreate(array $attributes)
	 * @method _AddressCollection|Address[] fromQuery(string $query, array $bindings = [])
	 * @method _AddressCollection|Address[] get(array|string $columns = [ '*' ])
	 * @method Address getModel()
	 * @method Address[] getModels(array|string $columns = [ '*' ])
	 * @method _AddressCollection|Address[] hydrate(array $items)
	 * @method Address make(array $attributes = [])
	 * @method Address newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Address[]|_AddressCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Address[]|_AddressCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Address sole(array|string $columns = [ '*' ])
	 * @method Address updateOrCreate(array $attributes, array $values = [])
	 */
	class _AddressQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Material shift()
	 * @method Material pop()
	 * @method Material get($key, $default = null)
	 * @method Material pull($key, $default = null)
	 * @method Material first(callable $callback = null, $default = null)
	 * @method Material firstWhere(string $key, $operator = null, $value = null)
	 * @method Material[] all()
	 * @method Material last(callable $callback = null, $default = null)
	 */
	class _MaterialCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Material[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _MaterialQueryBuilder whereId($value)
	 * @method _MaterialQueryBuilder whereName($value)
	 * @method _MaterialQueryBuilder whereCreatedAt($value)
	 * @method _MaterialQueryBuilder whereUpdatedAt($value)
	 * @method Material baseSole(array|string $columns = [ '*' ])
	 * @method Material create(array $attributes = [])
	 * @method _MaterialCollection|Material[] cursor()
	 * @method Material|null find($id, array $columns = [ '*' ])
	 * @method _MaterialCollection|Material[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Material findOrFail($id, array $columns = [ '*' ])
	 * @method _MaterialCollection|Material[] findOrNew($id, array $columns = [ '*' ])
	 * @method Material first(array|string $columns = [ '*' ])
	 * @method Material firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Material firstOrCreate(array $attributes = [], array $values = [])
	 * @method Material firstOrFail(array $columns = [ '*' ])
	 * @method Material firstOrNew(array $attributes = [], array $values = [])
	 * @method Material firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Material forceCreate(array $attributes)
	 * @method _MaterialCollection|Material[] fromQuery(string $query, array $bindings = [])
	 * @method _MaterialCollection|Material[] get(array|string $columns = [ '*' ])
	 * @method Material getModel()
	 * @method Material[] getModels(array|string $columns = [ '*' ])
	 * @method _MaterialCollection|Material[] hydrate(array $items)
	 * @method Material make(array $attributes = [])
	 * @method Material newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Material[]|_MaterialCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Material[]|_MaterialCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Material sole(array|string $columns = [ '*' ])
	 * @method Material updateOrCreate(array $attributes, array $values = [])
	 */
	class _MaterialQueryBuilder extends _BaseBuilder { }

	/**
	 * @method LoadingPoint shift()
	 * @method LoadingPoint pop()
	 * @method LoadingPoint get($key, $default = null)
	 * @method LoadingPoint pull($key, $default = null)
	 * @method LoadingPoint first(callable $callback = null, $default = null)
	 * @method LoadingPoint firstWhere(string $key, $operator = null, $value = null)
	 * @method LoadingPoint[] all()
	 * @method LoadingPoint last(callable $callback = null, $default = null)
	 */
	class _MineCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Mine[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _MineQueryBuilder whereId($value)
	 * @method _MineQueryBuilder whereName($value)
	 * @method _MineQueryBuilder whereSectorId($value)
	 * @method _MineQueryBuilder whereVisible($value)
	 * @method _MineQueryBuilder whereCreatedAt($value)
	 * @method _MineQueryBuilder whereUpdatedAt($value)
	 * @method LoadingPoint baseSole(array|string $columns = ['*' ])
	 * @method LoadingPoint create(array $attributes = [])
	 * @method _MineCollection|LoadingPoint[] cursor()
	 * @method LoadingPoint|null find($id, array $columns = ['*' ])
	 * @method _MineCollection|LoadingPoint[] findMany(array|Arrayable $ids, array $columns = ['*' ])
	 * @method LoadingPoint findOrFail($id, array $columns = ['*' ])
	 * @method _MineCollection|LoadingPoint[] findOrNew($id, array $columns = ['*' ])
	 * @method LoadingPoint first(array|string $columns = ['*' ])
	 * @method LoadingPoint firstOr(array $columns = ['*' ], \Closure $callback = null)
	 * @method LoadingPoint firstOrCreate(array $attributes = [], array $values = [])
	 * @method LoadingPoint firstOrFail(array $columns = ['*' ])
	 * @method LoadingPoint firstOrNew(array $attributes = [], array $values = [])
	 * @method LoadingPoint firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method LoadingPoint forceCreate(array $attributes)
	 * @method _MineCollection|LoadingPoint[] fromQuery(string $query, array $bindings = [])
	 * @method _MineCollection|LoadingPoint[] get(array|string $columns = ['*' ])
	 * @method LoadingPoint getModel()
	 * @method LoadingPoint[] getModels(array|string $columns = ['*' ])
	 * @method _MineCollection|LoadingPoint[] hydrate(array $items)
	 * @method LoadingPoint make(array $attributes = [])
	 * @method LoadingPoint newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|LoadingPoint[]|_MineCollection paginate(int|null $perPage = null, array $columns = ['*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|LoadingPoint[]|_MineCollection simplePaginate(int|null $perPage = null, array $columns = ['*' ], string $pageName = 'page', int|null $page = null)
	 * @method LoadingPoint sole(array|string $columns = ['*' ])
	 * @method LoadingPoint updateOrCreate(array $attributes, array $values = [])
	 */
	class _MineQueryBuilder extends _BaseBuilder { }

	/**
	 * @method PhoneNumber shift()
	 * @method PhoneNumber pop()
	 * @method PhoneNumber get($key, $default = null)
	 * @method PhoneNumber pull($key, $default = null)
	 * @method PhoneNumber first(callable $callback = null, $default = null)
	 * @method PhoneNumber firstWhere(string $key, $operator = null, $value = null)
	 * @method PhoneNumber[] all()
	 * @method PhoneNumber last(callable $callback = null, $default = null)
	 */
	class _PhoneNumberCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return PhoneNumber[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _PhoneNumberQueryBuilder whereId($value)
	 * @method _PhoneNumberQueryBuilder wherePhoneNumber($value)
	 * @method _PhoneNumberQueryBuilder whereCompanyId($value)
	 * @method _PhoneNumberQueryBuilder wherePhoneableId($value)
	 * @method _PhoneNumberQueryBuilder wherePhoneableType($value)
	 * @method _PhoneNumberQueryBuilder whereCreatedAt($value)
	 * @method _PhoneNumberQueryBuilder whereUpdatedAt($value)
	 * @method PhoneNumber baseSole(array|string $columns = [ '*' ])
	 * @method PhoneNumber create(array $attributes = [])
	 * @method _PhoneNumberCollection|PhoneNumber[] cursor()
	 * @method PhoneNumber|null find($id, array $columns = [ '*' ])
	 * @method _PhoneNumberCollection|PhoneNumber[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method PhoneNumber findOrFail($id, array $columns = [ '*' ])
	 * @method _PhoneNumberCollection|PhoneNumber[] findOrNew($id, array $columns = [ '*' ])
	 * @method PhoneNumber first(array|string $columns = [ '*' ])
	 * @method PhoneNumber firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method PhoneNumber firstOrCreate(array $attributes = [], array $values = [])
	 * @method PhoneNumber firstOrFail(array $columns = [ '*' ])
	 * @method PhoneNumber firstOrNew(array $attributes = [], array $values = [])
	 * @method PhoneNumber firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method PhoneNumber forceCreate(array $attributes)
	 * @method _PhoneNumberCollection|PhoneNumber[] fromQuery(string $query, array $bindings = [])
	 * @method _PhoneNumberCollection|PhoneNumber[] get(array|string $columns = [ '*' ])
	 * @method PhoneNumber getModel()
	 * @method PhoneNumber[] getModels(array|string $columns = [ '*' ])
	 * @method _PhoneNumberCollection|PhoneNumber[] hydrate(array $items)
	 * @method PhoneNumber make(array $attributes = [])
	 * @method PhoneNumber newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|PhoneNumber[]|_PhoneNumberCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|PhoneNumber[]|_PhoneNumberCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method PhoneNumber sole(array|string $columns = [ '*' ])
	 * @method PhoneNumber updateOrCreate(array $attributes, array $values = [])
	 */
	class _PhoneNumberQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Sector shift()
	 * @method Sector pop()
	 * @method Sector get($key, $default = null)
	 * @method Sector pull($key, $default = null)
	 * @method Sector first(callable $callback = null, $default = null)
	 * @method Sector firstWhere(string $key, $operator = null, $value = null)
	 * @method Sector[] all()
	 * @method Sector last(callable $callback = null, $default = null)
	 */
	class _SectorCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Sector[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _SectorQueryBuilder whereId($value)
	 * @method _SectorQueryBuilder whereName($value)
	 * @method _SectorQueryBuilder whereVisible($value)
	 * @method _SectorQueryBuilder whereCreatedAt($value)
	 * @method _SectorQueryBuilder whereUpdatedAt($value)
	 * @method Sector baseSole(array|string $columns = [ '*' ])
	 * @method Sector create(array $attributes = [])
	 * @method _SectorCollection|Sector[] cursor()
	 * @method Sector|null find($id, array $columns = [ '*' ])
	 * @method _SectorCollection|Sector[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Sector findOrFail($id, array $columns = [ '*' ])
	 * @method _SectorCollection|Sector[] findOrNew($id, array $columns = [ '*' ])
	 * @method Sector first(array|string $columns = [ '*' ])
	 * @method Sector firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Sector firstOrCreate(array $attributes = [], array $values = [])
	 * @method Sector firstOrFail(array $columns = [ '*' ])
	 * @method Sector firstOrNew(array $attributes = [], array $values = [])
	 * @method Sector firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Sector forceCreate(array $attributes)
	 * @method _SectorCollection|Sector[] fromQuery(string $query, array $bindings = [])
	 * @method _SectorCollection|Sector[] get(array|string $columns = [ '*' ])
	 * @method Sector getModel()
	 * @method Sector[] getModels(array|string $columns = [ '*' ])
	 * @method _SectorCollection|Sector[] hydrate(array $items)
	 * @method Sector make(array $attributes = [])
	 * @method Sector newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Sector[]|_SectorCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Sector[]|_SectorCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Sector sole(array|string $columns = [ '*' ])
	 * @method Sector updateOrCreate(array $attributes, array $values = [])
	 */
	class _SectorQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Destination shift()
	 * @method Destination pop()
	 * @method Destination get($key, $default = null)
	 * @method Destination pull($key, $default = null)
	 * @method Destination first(callable $callback = null, $default = null)
	 * @method Destination firstWhere(string $key, $operator = null, $value = null)
	 * @method Destination[] all()
	 * @method Destination last(callable $callback = null, $default = null)
	 */
	class _UnloadingPointCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return UnloadingPoint[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _UnloadingPointQueryBuilder whereId($value)
	 * @method _UnloadingPointQueryBuilder whereShortCode($value)
	 * @method _UnloadingPointQueryBuilder whereName($value)
	 * @method _UnloadingPointQueryBuilder whereCreatedAt($value)
	 * @method _UnloadingPointQueryBuilder whereUpdatedAt($value)
	 * @method Destination baseSole(array|string $columns = ['*' ])
	 * @method Destination create(array $attributes = [])
	 * @method _UnloadingPointCollection|Destination[] cursor()
	 * @method Destination|null find($id, array $columns = ['*' ])
	 * @method _UnloadingPointCollection|Destination[] findMany(array|Arrayable $ids, array $columns = ['*' ])
	 * @method Destination findOrFail($id, array $columns = ['*' ])
	 * @method _UnloadingPointCollection|Destination[] findOrNew($id, array $columns = ['*' ])
	 * @method Destination first(array|string $columns = ['*' ])
	 * @method Destination firstOr(array $columns = ['*' ], \Closure $callback = null)
	 * @method Destination firstOrCreate(array $attributes = [], array $values = [])
	 * @method Destination firstOrFail(array $columns = ['*' ])
	 * @method Destination firstOrNew(array $attributes = [], array $values = [])
	 * @method Destination firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Destination forceCreate(array $attributes)
	 * @method _UnloadingPointCollection|Destination[] fromQuery(string $query, array $bindings = [])
	 * @method _UnloadingPointCollection|Destination[] get(array|string $columns = ['*' ])
	 * @method Destination getModel()
	 * @method Destination[] getModels(array|string $columns = ['*' ])
	 * @method _UnloadingPointCollection|Destination[] hydrate(array $items)
	 * @method Destination make(array $attributes = [])
	 * @method Destination newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Destination[]|_UnloadingPointCollection paginate(int|null $perPage = null, array $columns = ['*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Destination[]|_UnloadingPointCollection simplePaginate(int|null $perPage = null, array $columns = ['*' ], string $pageName = 'page', int|null $page = null)
	 * @method Destination sole(array|string $columns = ['*' ])
	 * @method Destination updateOrCreate(array $attributes, array $values = [])
	 */
	class _UnloadingPointQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Invoice\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\Invoice\Models\Invoice;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use App\Domain\Invoice\Models\InvoiceItem;
    use Illuminate\Contracts\Support\Arrayable;
    use App\Domain\Invoice\Models\InvoiceStatus;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Invoice shift()
	 * @method Invoice pop()
	 * @method Invoice get($key, $default = null)
	 * @method Invoice pull($key, $default = null)
	 * @method Invoice first(callable $callback = null, $default = null)
	 * @method Invoice firstWhere(string $key, $operator = null, $value = null)
	 * @method Invoice[] all()
	 * @method Invoice last(callable $callback = null, $default = null)
	 */
	class _InvoiceCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Invoice[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method InvoiceItem shift()
	 * @method InvoiceItem pop()
	 * @method InvoiceItem get($key, $default = null)
	 * @method InvoiceItem pull($key, $default = null)
	 * @method InvoiceItem first(callable $callback = null, $default = null)
	 * @method InvoiceItem firstWhere(string $key, $operator = null, $value = null)
	 * @method InvoiceItem[] all()
	 * @method InvoiceItem last(callable $callback = null, $default = null)
	 */
	class _InvoiceItemCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return InvoiceItem[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _InvoiceItemQueryBuilder whereId($value)
	 * @method _InvoiceItemQueryBuilder whereName($value)
	 * @method _InvoiceItemQueryBuilder whereDescription($value)
	 * @method _InvoiceItemQueryBuilder whereCompanyId($value)
	 * @method _InvoiceItemQueryBuilder whereCreatedAt($value)
	 * @method _InvoiceItemQueryBuilder whereUpdatedAt($value)
	 * @method InvoiceItem baseSole(array|string $columns = [ '*' ])
	 * @method InvoiceItem create(array $attributes = [])
	 * @method _InvoiceItemCollection|InvoiceItem[] cursor()
	 * @method InvoiceItem|null find($id, array $columns = [ '*' ])
	 * @method _InvoiceItemCollection|InvoiceItem[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method InvoiceItem findOrFail($id, array $columns = [ '*' ])
	 * @method _InvoiceItemCollection|InvoiceItem[] findOrNew($id, array $columns = [ '*' ])
	 * @method InvoiceItem first(array|string $columns = [ '*' ])
	 * @method InvoiceItem firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method InvoiceItem firstOrCreate(array $attributes = [], array $values = [])
	 * @method InvoiceItem firstOrFail(array $columns = [ '*' ])
	 * @method InvoiceItem firstOrNew(array $attributes = [], array $values = [])
	 * @method InvoiceItem firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method InvoiceItem forceCreate(array $attributes)
	 * @method _InvoiceItemCollection|InvoiceItem[] fromQuery(string $query, array $bindings = [])
	 * @method _InvoiceItemCollection|InvoiceItem[] get(array|string $columns = [ '*' ])
	 * @method InvoiceItem getModel()
	 * @method InvoiceItem[] getModels(array|string $columns = [ '*' ])
	 * @method _InvoiceItemCollection|InvoiceItem[] hydrate(array $items)
	 * @method InvoiceItem make(array $attributes = [])
	 * @method InvoiceItem newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|InvoiceItem[]|_InvoiceItemCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|InvoiceItem[]|_InvoiceItemCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method InvoiceItem sole(array|string $columns = [ '*' ])
	 * @method InvoiceItem updateOrCreate(array $attributes, array $values = [])
	 */
	class _InvoiceItemQueryBuilder extends _BaseBuilder { }

	/**
	 * @method _InvoiceQueryBuilder whereId($value)
	 * @method _InvoiceQueryBuilder whereInvoiceDate($value)
	 * @method _InvoiceQueryBuilder whereDueDate($value)
	 * @method _InvoiceQueryBuilder whereInvoiceNumber($value)
	 * @method _InvoiceQueryBuilder whereBillNumber($value)
	 * @method _InvoiceQueryBuilder whereReferenceNumber($value)
	 * @method _InvoiceQueryBuilder whereStatus($value)
	 * @method _InvoiceQueryBuilder whereNotes($value)
	 * @method _InvoiceQueryBuilder whereTotal($value)
	 * @method _InvoiceQueryBuilder whereTax($value)
	 * @method _InvoiceQueryBuilder whereDueAmount($value)
	 * @method _InvoiceQueryBuilder whereReceivedAmount($value)
	 * @method _InvoiceQueryBuilder whereConsigneeId($value)
	 * @method _InvoiceQueryBuilder whereCompanyId($value)
	 * @method _InvoiceQueryBuilder whereCreatedAt($value)
	 * @method _InvoiceQueryBuilder whereUpdatedAt($value)
	 * @method Invoice baseSole(array|string $columns = [ '*' ])
	 * @method Invoice create(array $attributes = [])
	 * @method _InvoiceCollection|Invoice[] cursor()
	 * @method Invoice|null find($id, array $columns = [ '*' ])
	 * @method _InvoiceCollection|Invoice[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Invoice findOrFail($id, array $columns = [ '*' ])
	 * @method _InvoiceCollection|Invoice[] findOrNew($id, array $columns = [ '*' ])
	 * @method Invoice first(array|string $columns = [ '*' ])
	 * @method Invoice firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Invoice firstOrCreate(array $attributes = [], array $values = [])
	 * @method Invoice firstOrFail(array $columns = [ '*' ])
	 * @method Invoice firstOrNew(array $attributes = [], array $values = [])
	 * @method Invoice firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Invoice forceCreate(array $attributes)
	 * @method _InvoiceCollection|Invoice[] fromQuery(string $query, array $bindings = [])
	 * @method _InvoiceCollection|Invoice[] get(array|string $columns = [ '*' ])
	 * @method Invoice getModel()
	 * @method Invoice[] getModels(array|string $columns = [ '*' ])
	 * @method _InvoiceCollection|Invoice[] hydrate(array $items)
	 * @method Invoice make(array $attributes = [])
	 * @method Invoice newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Invoice[]|_InvoiceCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Invoice[]|_InvoiceCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Invoice sole(array|string $columns = [ '*' ])
	 * @method Invoice updateOrCreate(array $attributes, array $values = [])
	 */
	class _InvoiceQueryBuilder extends _BaseBuilder { }

	/**
	 * @method InvoiceStatus shift()
	 * @method InvoiceStatus pop()
	 * @method InvoiceStatus get($key, $default = null)
	 * @method InvoiceStatus pull($key, $default = null)
	 * @method InvoiceStatus first(callable $callback = null, $default = null)
	 * @method InvoiceStatus firstWhere(string $key, $operator = null, $value = null)
	 * @method InvoiceStatus[] all()
	 * @method InvoiceStatus last(callable $callback = null, $default = null)
	 */
	class _InvoiceStatusCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return InvoiceStatus[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _InvoiceStatusQueryBuilder whereId($value)
	 * @method _InvoiceStatusQueryBuilder whereName($value)
	 * @method _InvoiceStatusQueryBuilder whereCreatedAt($value)
	 * @method _InvoiceStatusQueryBuilder whereUpdatedAt($value)
	 * @method InvoiceStatus baseSole(array|string $columns = [ '*' ])
	 * @method InvoiceStatus create(array $attributes = [])
	 * @method _InvoiceStatusCollection|InvoiceStatus[] cursor()
	 * @method InvoiceStatus|null find($id, array $columns = [ '*' ])
	 * @method _InvoiceStatusCollection|InvoiceStatus[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method InvoiceStatus findOrFail($id, array $columns = [ '*' ])
	 * @method _InvoiceStatusCollection|InvoiceStatus[] findOrNew($id, array $columns = [ '*' ])
	 * @method InvoiceStatus first(array|string $columns = [ '*' ])
	 * @method InvoiceStatus firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method InvoiceStatus firstOrCreate(array $attributes = [], array $values = [])
	 * @method InvoiceStatus firstOrFail(array $columns = [ '*' ])
	 * @method InvoiceStatus firstOrNew(array $attributes = [], array $values = [])
	 * @method InvoiceStatus firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method InvoiceStatus forceCreate(array $attributes)
	 * @method _InvoiceStatusCollection|InvoiceStatus[] fromQuery(string $query, array $bindings = [])
	 * @method _InvoiceStatusCollection|InvoiceStatus[] get(array|string $columns = [ '*' ])
	 * @method InvoiceStatus getModel()
	 * @method InvoiceStatus[] getModels(array|string $columns = [ '*' ])
	 * @method _InvoiceStatusCollection|InvoiceStatus[] hydrate(array $items)
	 * @method InvoiceStatus make(array $attributes = [])
	 * @method InvoiceStatus newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|InvoiceStatus[]|_InvoiceStatusCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|InvoiceStatus[]|_InvoiceStatusCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method InvoiceStatus sole(array|string $columns = [ '*' ])
	 * @method InvoiceStatus updateOrCreate(array $attributes, array $values = [])
	 */
	class _InvoiceStatusQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\MarketVehicle\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use App\Domain\MarketVehicle\Models\MarketVehicle;

    /**
	 * @method MarketVehicle shift()
	 * @method MarketVehicle pop()
	 * @method MarketVehicle get($key, $default = null)
	 * @method MarketVehicle pull($key, $default = null)
	 * @method MarketVehicle first(callable $callback = null, $default = null)
	 * @method MarketVehicle firstWhere(string $key, $operator = null, $value = null)
	 * @method MarketVehicle[] all()
	 * @method MarketVehicle last(callable $callback = null, $default = null)
	 */
	class _MarketVehicleCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return MarketVehicle[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _MarketVehicleQueryBuilder whereId($value)
	 * @method _MarketVehicleQueryBuilder whereNumber($value)
	 * @method _MarketVehicleQueryBuilder wherePartyId($value)
	 * @method _MarketVehicleQueryBuilder whereCompanyId($value)
	 * @method _MarketVehicleQueryBuilder whereCreatedAt($value)
	 * @method _MarketVehicleQueryBuilder whereUpdatedAt($value)
	 * @method MarketVehicle baseSole(array|string $columns = [ '*' ])
	 * @method MarketVehicle create(array $attributes = [])
	 * @method _MarketVehicleCollection|MarketVehicle[] cursor()
	 * @method MarketVehicle|null find($id, array $columns = [ '*' ])
	 * @method _MarketVehicleCollection|MarketVehicle[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method MarketVehicle findOrFail($id, array $columns = [ '*' ])
	 * @method _MarketVehicleCollection|MarketVehicle[] findOrNew($id, array $columns = [ '*' ])
	 * @method MarketVehicle first(array|string $columns = [ '*' ])
	 * @method MarketVehicle firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method MarketVehicle firstOrCreate(array $attributes = [], array $values = [])
	 * @method MarketVehicle firstOrFail(array $columns = [ '*' ])
	 * @method MarketVehicle firstOrNew(array $attributes = [], array $values = [])
	 * @method MarketVehicle firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method MarketVehicle forceCreate(array $attributes)
	 * @method _MarketVehicleCollection|MarketVehicle[] fromQuery(string $query, array $bindings = [])
	 * @method _MarketVehicleCollection|MarketVehicle[] get(array|string $columns = [ '*' ])
	 * @method MarketVehicle getModel()
	 * @method MarketVehicle[] getModels(array|string $columns = [ '*' ])
	 * @method _MarketVehicleCollection|MarketVehicle[] hydrate(array $items)
	 * @method MarketVehicle make(array $attributes = [])
	 * @method MarketVehicle newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|MarketVehicle[]|_MarketVehicleCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|MarketVehicle[]|_MarketVehicleCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method MarketVehicle sole(array|string $columns = [ '*' ])
	 * @method MarketVehicle updateOrCreate(array $attributes, array $values = [])
	 */
	class _MarketVehicleQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Office\Models {

    use App\Domain\Office\Models\Office;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Office shift()
	 * @method Office pop()
	 * @method Office get($key, $default = null)
	 * @method Office pull($key, $default = null)
	 * @method Office first(callable $callback = null, $default = null)
	 * @method Office firstWhere(string $key, $operator = null, $value = null)
	 * @method Office[] all()
	 * @method Office last(callable $callback = null, $default = null)
	 */
	class _OfficeCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Office[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _OfficeQueryBuilder whereId($value)
	 * @method _OfficeQueryBuilder whereName($value)
	 * @method _OfficeQueryBuilder whereStreetAddress($value)
	 * @method _OfficeQueryBuilder whereCity($value)
	 * @method _OfficeQueryBuilder whereState($value)
	 * @method _OfficeQueryBuilder whereZip($value)
	 * @method _OfficeQueryBuilder whereCompanyId($value)
	 * @method _OfficeQueryBuilder whereCreatedAt($value)
	 * @method _OfficeQueryBuilder whereUpdatedAt($value)
	 * @method Office baseSole(array|string $columns = [ '*' ])
	 * @method Office create(array $attributes = [])
	 * @method _OfficeCollection|Office[] cursor()
	 * @method Office|null find($id, array $columns = [ '*' ])
	 * @method _OfficeCollection|Office[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Office findOrFail($id, array $columns = [ '*' ])
	 * @method _OfficeCollection|Office[] findOrNew($id, array $columns = [ '*' ])
	 * @method Office first(array|string $columns = [ '*' ])
	 * @method Office firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Office firstOrCreate(array $attributes = [], array $values = [])
	 * @method Office firstOrFail(array $columns = [ '*' ])
	 * @method Office firstOrNew(array $attributes = [], array $values = [])
	 * @method Office firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Office forceCreate(array $attributes)
	 * @method _OfficeCollection|Office[] fromQuery(string $query, array $bindings = [])
	 * @method _OfficeCollection|Office[] get(array|string $columns = [ '*' ])
	 * @method Office getModel()
	 * @method Office[] getModels(array|string $columns = [ '*' ])
	 * @method _OfficeCollection|Office[] hydrate(array $items)
	 * @method Office make(array $attributes = [])
	 * @method Office newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Office[]|_OfficeCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Office[]|_OfficeCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Office sole(array|string $columns = [ '*' ])
	 * @method Office updateOrCreate(array $attributes, array $values = [])
	 */
	class _OfficeQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Party\Models {

    use App\Domain\Party\Models\Party;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Party shift()
	 * @method Party pop()
	 * @method Party get($key, $default = null)
	 * @method Party pull($key, $default = null)
	 * @method Party first(callable $callback = null, $default = null)
	 * @method Party firstWhere(string $key, $operator = null, $value = null)
	 * @method Party[] all()
	 * @method Party last(callable $callback = null, $default = null)
	 */
	class _PartyCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Party[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _PartyQueryBuilder whereId($value)
	 * @method _PartyQueryBuilder whereName($value)
	 * @method _PartyQueryBuilder wherePan($value)
	 * @method _PartyQueryBuilder whereRazorpayContactId($value)
	 * @method _PartyQueryBuilder whereCompanyId($value)
	 * @method _PartyQueryBuilder whereCreatedAt($value)
	 * @method _PartyQueryBuilder whereUpdatedAt($value)
	 * @method Party baseSole(array|string $columns = [ '*' ])
	 * @method Party create(array $attributes = [])
	 * @method _PartyCollection|Party[] cursor()
	 * @method Party|null find($id, array $columns = [ '*' ])
	 * @method _PartyCollection|Party[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Party findOrFail($id, array $columns = [ '*' ])
	 * @method _PartyCollection|Party[] findOrNew($id, array $columns = [ '*' ])
	 * @method Party first(array|string $columns = [ '*' ])
	 * @method Party firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Party firstOrCreate(array $attributes = [], array $values = [])
	 * @method Party firstOrFail(array $columns = [ '*' ])
	 * @method Party firstOrNew(array $attributes = [], array $values = [])
	 * @method Party firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Party forceCreate(array $attributes)
	 * @method _PartyCollection|Party[] fromQuery(string $query, array $bindings = [])
	 * @method _PartyCollection|Party[] get(array|string $columns = [ '*' ])
	 * @method Party getModel()
	 * @method Party[] getModels(array|string $columns = [ '*' ])
	 * @method _PartyCollection|Party[] hydrate(array $items)
	 * @method Party make(array $attributes = [])
	 * @method Party newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Party[]|_PartyCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Party[]|_PartyCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Party sole(array|string $columns = [ '*' ])
	 * @method Party updateOrCreate(array $attributes, array $values = [])
	 */
	class _PartyQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Payment\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\Payment\Models\Payment;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use App\Domain\Payment\Models\BankAccount;
    use App\Domain\Payment\Models\TaxCategory;
    use Illuminate\Contracts\Support\Arrayable;
    use App\Domain\Payment\Models\PaymentMethod;
    use App\Domain\Payment\Models\PaymentStatus;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method BankAccount shift()
	 * @method BankAccount pop()
	 * @method BankAccount get($key, $default = null)
	 * @method BankAccount pull($key, $default = null)
	 * @method BankAccount first(callable $callback = null, $default = null)
	 * @method BankAccount firstWhere(string $key, $operator = null, $value = null)
	 * @method BankAccount[] all()
	 * @method BankAccount last(callable $callback = null, $default = null)
	 */
	class _BankAccountCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return BankAccount[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

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
	 * @method BankAccount baseSole(array|string $columns = [ '*' ])
	 * @method BankAccount create(array $attributes = [])
	 * @method _BankAccountCollection|BankAccount[] cursor()
	 * @method BankAccount|null find($id, array $columns = [ '*' ])
	 * @method _BankAccountCollection|BankAccount[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method BankAccount findOrFail($id, array $columns = [ '*' ])
	 * @method _BankAccountCollection|BankAccount[] findOrNew($id, array $columns = [ '*' ])
	 * @method BankAccount first(array|string $columns = [ '*' ])
	 * @method BankAccount firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method BankAccount firstOrCreate(array $attributes = [], array $values = [])
	 * @method BankAccount firstOrFail(array $columns = [ '*' ])
	 * @method BankAccount firstOrNew(array $attributes = [], array $values = [])
	 * @method BankAccount firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method BankAccount forceCreate(array $attributes)
	 * @method _BankAccountCollection|BankAccount[] fromQuery(string $query, array $bindings = [])
	 * @method _BankAccountCollection|BankAccount[] get(array|string $columns = [ '*' ])
	 * @method BankAccount getModel()
	 * @method BankAccount[] getModels(array|string $columns = [ '*' ])
	 * @method _BankAccountCollection|BankAccount[] hydrate(array $items)
	 * @method BankAccount make(array $attributes = [])
	 * @method BankAccount newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|BankAccount[]|_BankAccountCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|BankAccount[]|_BankAccountCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method BankAccount sole(array|string $columns = [ '*' ])
	 * @method BankAccount updateOrCreate(array $attributes, array $values = [])
	 */
	class _BankAccountQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Payment shift()
	 * @method Payment pop()
	 * @method Payment get($key, $default = null)
	 * @method Payment pull($key, $default = null)
	 * @method Payment first(callable $callback = null, $default = null)
	 * @method Payment firstWhere(string $key, $operator = null, $value = null)
	 * @method Payment[] all()
	 * @method Payment last(callable $callback = null, $default = null)
	 */
	class _PaymentCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Payment[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method PaymentMethod shift()
	 * @method PaymentMethod pop()
	 * @method PaymentMethod get($key, $default = null)
	 * @method PaymentMethod pull($key, $default = null)
	 * @method PaymentMethod first(callable $callback = null, $default = null)
	 * @method PaymentMethod firstWhere(string $key, $operator = null, $value = null)
	 * @method PaymentMethod[] all()
	 * @method PaymentMethod last(callable $callback = null, $default = null)
	 */
	class _PaymentMethodCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return PaymentMethod[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _PaymentMethodQueryBuilder whereId($value)
	 * @method _PaymentMethodQueryBuilder whereName($value)
	 * @method _PaymentMethodQueryBuilder whereCreatedAt($value)
	 * @method _PaymentMethodQueryBuilder whereUpdatedAt($value)
	 * @method PaymentMethod baseSole(array|string $columns = [ '*' ])
	 * @method PaymentMethod create(array $attributes = [])
	 * @method _PaymentMethodCollection|PaymentMethod[] cursor()
	 * @method PaymentMethod|null find($id, array $columns = [ '*' ])
	 * @method _PaymentMethodCollection|PaymentMethod[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method PaymentMethod findOrFail($id, array $columns = [ '*' ])
	 * @method _PaymentMethodCollection|PaymentMethod[] findOrNew($id, array $columns = [ '*' ])
	 * @method PaymentMethod first(array|string $columns = [ '*' ])
	 * @method PaymentMethod firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method PaymentMethod firstOrCreate(array $attributes = [], array $values = [])
	 * @method PaymentMethod firstOrFail(array $columns = [ '*' ])
	 * @method PaymentMethod firstOrNew(array $attributes = [], array $values = [])
	 * @method PaymentMethod firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method PaymentMethod forceCreate(array $attributes)
	 * @method _PaymentMethodCollection|PaymentMethod[] fromQuery(string $query, array $bindings = [])
	 * @method _PaymentMethodCollection|PaymentMethod[] get(array|string $columns = [ '*' ])
	 * @method PaymentMethod getModel()
	 * @method PaymentMethod[] getModels(array|string $columns = [ '*' ])
	 * @method _PaymentMethodCollection|PaymentMethod[] hydrate(array $items)
	 * @method PaymentMethod make(array $attributes = [])
	 * @method PaymentMethod newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|PaymentMethod[]|_PaymentMethodCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|PaymentMethod[]|_PaymentMethodCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method PaymentMethod sole(array|string $columns = [ '*' ])
	 * @method PaymentMethod updateOrCreate(array $attributes, array $values = [])
	 */
	class _PaymentMethodQueryBuilder extends _BaseBuilder { }

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
	 * @method Payment baseSole(array|string $columns = [ '*' ])
	 * @method Payment create(array $attributes = [])
	 * @method _PaymentCollection|Payment[] cursor()
	 * @method Payment|null find($id, array $columns = [ '*' ])
	 * @method _PaymentCollection|Payment[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Payment findOrFail($id, array $columns = [ '*' ])
	 * @method _PaymentCollection|Payment[] findOrNew($id, array $columns = [ '*' ])
	 * @method Payment first(array|string $columns = [ '*' ])
	 * @method Payment firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Payment firstOrCreate(array $attributes = [], array $values = [])
	 * @method Payment firstOrFail(array $columns = [ '*' ])
	 * @method Payment firstOrNew(array $attributes = [], array $values = [])
	 * @method Payment firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Payment forceCreate(array $attributes)
	 * @method _PaymentCollection|Payment[] fromQuery(string $query, array $bindings = [])
	 * @method _PaymentCollection|Payment[] get(array|string $columns = [ '*' ])
	 * @method Payment getModel()
	 * @method Payment[] getModels(array|string $columns = [ '*' ])
	 * @method _PaymentCollection|Payment[] hydrate(array $items)
	 * @method Payment make(array $attributes = [])
	 * @method Payment newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Payment[]|_PaymentCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Payment[]|_PaymentCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Payment sole(array|string $columns = [ '*' ])
	 * @method Payment updateOrCreate(array $attributes, array $values = [])
	 */
	class _PaymentQueryBuilder extends _BaseBuilder { }

	/**
	 * @method PaymentStatus shift()
	 * @method PaymentStatus pop()
	 * @method PaymentStatus get($key, $default = null)
	 * @method PaymentStatus pull($key, $default = null)
	 * @method PaymentStatus first(callable $callback = null, $default = null)
	 * @method PaymentStatus firstWhere(string $key, $operator = null, $value = null)
	 * @method PaymentStatus[] all()
	 * @method PaymentStatus last(callable $callback = null, $default = null)
	 */
	class _PaymentStatusCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return PaymentStatus[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _PaymentStatusQueryBuilder whereId($value)
	 * @method _PaymentStatusQueryBuilder whereName($value)
	 * @method _PaymentStatusQueryBuilder whereDesc($value)
	 * @method _PaymentStatusQueryBuilder whereCreatedAt($value)
	 * @method _PaymentStatusQueryBuilder whereUpdatedAt($value)
	 * @method PaymentStatus baseSole(array|string $columns = [ '*' ])
	 * @method PaymentStatus create(array $attributes = [])
	 * @method _PaymentStatusCollection|PaymentStatus[] cursor()
	 * @method PaymentStatus|null find($id, array $columns = [ '*' ])
	 * @method _PaymentStatusCollection|PaymentStatus[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method PaymentStatus findOrFail($id, array $columns = [ '*' ])
	 * @method _PaymentStatusCollection|PaymentStatus[] findOrNew($id, array $columns = [ '*' ])
	 * @method PaymentStatus first(array|string $columns = [ '*' ])
	 * @method PaymentStatus firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method PaymentStatus firstOrCreate(array $attributes = [], array $values = [])
	 * @method PaymentStatus firstOrFail(array $columns = [ '*' ])
	 * @method PaymentStatus firstOrNew(array $attributes = [], array $values = [])
	 * @method PaymentStatus firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method PaymentStatus forceCreate(array $attributes)
	 * @method _PaymentStatusCollection|PaymentStatus[] fromQuery(string $query, array $bindings = [])
	 * @method _PaymentStatusCollection|PaymentStatus[] get(array|string $columns = [ '*' ])
	 * @method PaymentStatus getModel()
	 * @method PaymentStatus[] getModels(array|string $columns = [ '*' ])
	 * @method _PaymentStatusCollection|PaymentStatus[] hydrate(array $items)
	 * @method PaymentStatus make(array $attributes = [])
	 * @method PaymentStatus newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|PaymentStatus[]|_PaymentStatusCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|PaymentStatus[]|_PaymentStatusCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method PaymentStatus sole(array|string $columns = [ '*' ])
	 * @method PaymentStatus updateOrCreate(array $attributes, array $values = [])
	 */
	class _PaymentStatusQueryBuilder extends _BaseBuilder { }

	/**
	 * @method TaxCategory shift()
	 * @method TaxCategory pop()
	 * @method TaxCategory get($key, $default = null)
	 * @method TaxCategory pull($key, $default = null)
	 * @method TaxCategory first(callable $callback = null, $default = null)
	 * @method TaxCategory firstWhere(string $key, $operator = null, $value = null)
	 * @method TaxCategory[] all()
	 * @method TaxCategory last(callable $callback = null, $default = null)
	 */
	class _TaxCategoryCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return TaxCategory[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _TaxCategoryQueryBuilder whereId($value)
	 * @method _TaxCategoryQueryBuilder whereSection($value)
	 * @method _TaxCategoryQueryBuilder wherePercentage($value)
	 * @method _TaxCategoryQueryBuilder whereCreatedAt($value)
	 * @method _TaxCategoryQueryBuilder whereUpdatedAt($value)
	 * @method TaxCategory baseSole(array|string $columns = [ '*' ])
	 * @method TaxCategory create(array $attributes = [])
	 * @method _TaxCategoryCollection|TaxCategory[] cursor()
	 * @method TaxCategory|null find($id, array $columns = [ '*' ])
	 * @method _TaxCategoryCollection|TaxCategory[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method TaxCategory findOrFail($id, array $columns = [ '*' ])
	 * @method _TaxCategoryCollection|TaxCategory[] findOrNew($id, array $columns = [ '*' ])
	 * @method TaxCategory first(array|string $columns = [ '*' ])
	 * @method TaxCategory firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method TaxCategory firstOrCreate(array $attributes = [], array $values = [])
	 * @method TaxCategory firstOrFail(array $columns = [ '*' ])
	 * @method TaxCategory firstOrNew(array $attributes = [], array $values = [])
	 * @method TaxCategory firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method TaxCategory forceCreate(array $attributes)
	 * @method _TaxCategoryCollection|TaxCategory[] fromQuery(string $query, array $bindings = [])
	 * @method _TaxCategoryCollection|TaxCategory[] get(array|string $columns = [ '*' ])
	 * @method TaxCategory getModel()
	 * @method TaxCategory[] getModels(array|string $columns = [ '*' ])
	 * @method _TaxCategoryCollection|TaxCategory[] hydrate(array $items)
	 * @method TaxCategory make(array $attributes = [])
	 * @method TaxCategory newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|TaxCategory[]|_TaxCategoryCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|TaxCategory[]|_TaxCategoryCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method TaxCategory sole(array|string $columns = [ '*' ])
	 * @method TaxCategory updateOrCreate(array $attributes, array $values = [])
	 */
	class _TaxCategoryQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Project\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use App\Domain\Project\Models\Project;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Project shift()
	 * @method Project pop()
	 * @method Project get($key, $default = null)
	 * @method Project pull($key, $default = null)
	 * @method Project first(callable $callback = null, $default = null)
	 * @method Project firstWhere(string $key, $operator = null, $value = null)
	 * @method Project[] all()
	 * @method Project last(callable $callback = null, $default = null)
	 */
	class _ProjectCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Project[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _ProjectQueryBuilder whereId($value)
	 * @method _ProjectQueryBuilder whereName($value)
	 * @method _ProjectQueryBuilder whereMaterialId($value)
	 * @method _ProjectQueryBuilder whereMineId($value)
	 * @method _ProjectQueryBuilder whereUnloadingPointId($value)
	 * @method _ProjectQueryBuilder whereConsigneeId($value)
	 * @method _ProjectQueryBuilder whereCompanyId($value)
	 * @method _ProjectQueryBuilder whereStatus($value)
	 * @method _ProjectQueryBuilder whereCreatedAt($value)
	 * @method _ProjectQueryBuilder whereUpdatedAt($value)
	 * @method Project baseSole(array|string $columns = [ '*' ])
	 * @method Project create(array $attributes = [])
	 * @method _ProjectCollection|Project[] cursor()
	 * @method Project|null find($id, array $columns = [ '*' ])
	 * @method _ProjectCollection|Project[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Project findOrFail($id, array $columns = [ '*' ])
	 * @method _ProjectCollection|Project[] findOrNew($id, array $columns = [ '*' ])
	 * @method Project first(array|string $columns = [ '*' ])
	 * @method Project firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Project firstOrCreate(array $attributes = [], array $values = [])
	 * @method Project firstOrFail(array $columns = [ '*' ])
	 * @method Project firstOrNew(array $attributes = [], array $values = [])
	 * @method Project firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Project forceCreate(array $attributes)
	 * @method _ProjectCollection|Project[] fromQuery(string $query, array $bindings = [])
	 * @method _ProjectCollection|Project[] get(array|string $columns = [ '*' ])
	 * @method Project getModel()
	 * @method Project[] getModels(array|string $columns = [ '*' ])
	 * @method _ProjectCollection|Project[] hydrate(array $items)
	 * @method Project make(array $attributes = [])
	 * @method Project newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Project[]|_ProjectCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Project[]|_ProjectCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Project sole(array|string $columns = [ '*' ])
	 * @method Project updateOrCreate(array $attributes, array $values = [])
	 */
	class _ProjectQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\Trip\Models {

    use App\Domain\Trip\Models\Trip;
    use App\Domain\Trip\Models\TripType;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Trip shift()
	 * @method Trip pop()
	 * @method Trip get($key, $default = null)
	 * @method Trip pull($key, $default = null)
	 * @method Trip first(callable $callback = null, $default = null)
	 * @method Trip firstWhere(string $key, $operator = null, $value = null)
	 * @method Trip[] all()
	 * @method Trip last(callable $callback = null, $default = null)
	 */
	class _TripCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Trip[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

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
	 * @method _TripQueryBuilder whereCreatedBy($value)
	 * @method _TripQueryBuilder whereFinishedBy($value)
	 * @method _TripQueryBuilder whereCreatedAt($value)
	 * @method _TripQueryBuilder whereUpdatedAt($value)
	 * @method Trip baseSole(array|string $columns = [ '*' ])
	 * @method Trip create(array $attributes = [])
	 * @method _TripCollection|Trip[] cursor()
	 * @method Trip|null find($id, array $columns = [ '*' ])
	 * @method _TripCollection|Trip[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Trip findOrFail($id, array $columns = [ '*' ])
	 * @method _TripCollection|Trip[] findOrNew($id, array $columns = [ '*' ])
	 * @method Trip first(array|string $columns = [ '*' ])
	 * @method Trip firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Trip firstOrCreate(array $attributes = [], array $values = [])
	 * @method Trip firstOrFail(array $columns = [ '*' ])
	 * @method Trip firstOrNew(array $attributes = [], array $values = [])
	 * @method Trip firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Trip forceCreate(array $attributes)
	 * @method _TripCollection|Trip[] fromQuery(string $query, array $bindings = [])
	 * @method _TripCollection|Trip[] get(array|string $columns = [ '*' ])
	 * @method Trip getModel()
	 * @method Trip[] getModels(array|string $columns = [ '*' ])
	 * @method _TripCollection|Trip[] hydrate(array $items)
	 * @method Trip make(array $attributes = [])
	 * @method Trip newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Trip[]|_TripCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Trip[]|_TripCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Trip sole(array|string $columns = [ '*' ])
	 * @method Trip updateOrCreate(array $attributes, array $values = [])
	 */
	class _TripQueryBuilder extends _BaseBuilder { }

	/**
	 * @method TripType shift()
	 * @method TripType pop()
	 * @method TripType get($key, $default = null)
	 * @method TripType pull($key, $default = null)
	 * @method TripType first(callable $callback = null, $default = null)
	 * @method TripType firstWhere(string $key, $operator = null, $value = null)
	 * @method TripType[] all()
	 * @method TripType last(callable $callback = null, $default = null)
	 */
	class _TripTypeCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return TripType[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _TripTypeQueryBuilder whereId($value)
	 * @method _TripTypeQueryBuilder whereName($value)
	 * @method _TripTypeQueryBuilder whereCreatedAt($value)
	 * @method _TripTypeQueryBuilder whereUpdatedAt($value)
	 * @method TripType baseSole(array|string $columns = [ '*' ])
	 * @method TripType create(array $attributes = [])
	 * @method _TripTypeCollection|TripType[] cursor()
	 * @method TripType|null find($id, array $columns = [ '*' ])
	 * @method _TripTypeCollection|TripType[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method TripType findOrFail($id, array $columns = [ '*' ])
	 * @method _TripTypeCollection|TripType[] findOrNew($id, array $columns = [ '*' ])
	 * @method TripType first(array|string $columns = [ '*' ])
	 * @method TripType firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method TripType firstOrCreate(array $attributes = [], array $values = [])
	 * @method TripType firstOrFail(array $columns = [ '*' ])
	 * @method TripType firstOrNew(array $attributes = [], array $values = [])
	 * @method TripType firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method TripType forceCreate(array $attributes)
	 * @method _TripTypeCollection|TripType[] fromQuery(string $query, array $bindings = [])
	 * @method _TripTypeCollection|TripType[] get(array|string $columns = [ '*' ])
	 * @method TripType getModel()
	 * @method TripType[] getModels(array|string $columns = [ '*' ])
	 * @method _TripTypeCollection|TripType[] hydrate(array $items)
	 * @method TripType make(array $attributes = [])
	 * @method TripType newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|TripType[]|_TripTypeCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|TripType[]|_TripTypeCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method TripType sole(array|string $columns = [ '*' ])
	 * @method TripType updateOrCreate(array $attributes, array $values = [])
	 */
	class _TripTypeQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Domain\VehicleRC\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use App\Domain\VehicleRC\Models\VehicleRC;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method VehicleRC shift()
	 * @method VehicleRC pop()
	 * @method VehicleRC get($key, $default = null)
	 * @method VehicleRC pull($key, $default = null)
	 * @method VehicleRC first(callable $callback = null, $default = null)
	 * @method VehicleRC firstWhere(string $key, $operator = null, $value = null)
	 * @method VehicleRC[] all()
	 * @method VehicleRC last(callable $callback = null, $default = null)
	 */
	class _VehicleRCCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return VehicleRC[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _VehicleRCQueryBuilder whereId($value)
	 * @method _VehicleRCQueryBuilder whereNumber($value)
	 * @method _VehicleRCQueryBuilder whereModel($value)
	 * @method _VehicleRCQueryBuilder whereClass($value)
	 * @method _VehicleRCQueryBuilder whereRegDate($value)
	 * @method _VehicleRCQueryBuilder wherePucUpto($value)
	 * @method _VehicleRCQueryBuilder whereRtoCode($value)
	 * @method _VehicleRCQueryBuilder whereFuelNorm($value)
	 * @method _VehicleRCQueryBuilder whereFuelType($value)
	 * @method _VehicleRCQueryBuilder whereAuthority($value)
	 * @method _VehicleRCQueryBuilder whereOwnerName($value)
	 * @method _VehicleRCQueryBuilder whereMvtaxUpto($value)
	 * @method _VehicleRCQueryBuilder whereNocDetails($value)
	 * @method _VehicleRCQueryBuilder whereFitnessUpto($value)
	 * @method _VehicleRCQueryBuilder whereRoadtaxUpto($value)
	 * @method _VehicleRCQueryBuilder whereVehicleType($value)
	 * @method _VehicleRCQueryBuilder whereEngineNumber($value)
	 * @method _VehicleRCQueryBuilder whereInsuranceUpto($value)
	 * @method _VehicleRCQueryBuilder whereChassisNumber($value)
	 * @method _VehicleRCQueryBuilder whereCreatedAt($value)
	 * @method _VehicleRCQueryBuilder whereUpdatedAt($value)
	 * @method VehicleRC baseSole(array|string $columns = [ '*' ])
	 * @method VehicleRC create(array $attributes = [])
	 * @method _VehicleRCCollection|VehicleRC[] cursor()
	 * @method VehicleRC|null find($id, array $columns = [ '*' ])
	 * @method _VehicleRCCollection|VehicleRC[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method VehicleRC findOrFail($id, array $columns = [ '*' ])
	 * @method _VehicleRCCollection|VehicleRC[] findOrNew($id, array $columns = [ '*' ])
	 * @method VehicleRC first(array|string $columns = [ '*' ])
	 * @method VehicleRC firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method VehicleRC firstOrCreate(array $attributes = [], array $values = [])
	 * @method VehicleRC firstOrFail(array $columns = [ '*' ])
	 * @method VehicleRC firstOrNew(array $attributes = [], array $values = [])
	 * @method VehicleRC firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method VehicleRC forceCreate(array $attributes)
	 * @method _VehicleRCCollection|VehicleRC[] fromQuery(string $query, array $bindings = [])
	 * @method _VehicleRCCollection|VehicleRC[] get(array|string $columns = [ '*' ])
	 * @method VehicleRC getModel()
	 * @method VehicleRC[] getModels(array|string $columns = [ '*' ])
	 * @method _VehicleRCCollection|VehicleRC[] hydrate(array $items)
	 * @method VehicleRC make(array $attributes = [])
	 * @method VehicleRC newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|VehicleRC[]|_VehicleRCCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|VehicleRC[]|_VehicleRCCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method VehicleRC sole(array|string $columns = [ '*' ])
	 * @method VehicleRC updateOrCreate(array $attributes, array $values = [])
	 */
	class _VehicleRCQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Role;
    use App\Models\Team;
    use App\Models\User;
    use App\Models\Membership;
    use App\Models\Permission;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method Membership shift()
	 * @method Membership pop()
	 * @method Membership get($key, $default = null)
	 * @method Membership pull($key, $default = null)
	 * @method Membership first(callable $callback = null, $default = null)
	 * @method Membership firstWhere(string $key, $operator = null, $value = null)
	 * @method Membership[] all()
	 * @method Membership last(callable $callback = null, $default = null)
	 */
	class _MembershipCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Membership[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method Membership baseSole(array|string $columns = [ '*' ])
	 * @method Membership create(array $attributes = [])
	 * @method _MembershipCollection|Membership[] cursor()
	 * @method Membership|null find($id, array $columns = [ '*' ])
	 * @method _MembershipCollection|Membership[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Membership findOrFail($id, array $columns = [ '*' ])
	 * @method _MembershipCollection|Membership[] findOrNew($id, array $columns = [ '*' ])
	 * @method Membership first(array|string $columns = [ '*' ])
	 * @method Membership firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Membership firstOrCreate(array $attributes = [], array $values = [])
	 * @method Membership firstOrFail(array $columns = [ '*' ])
	 * @method Membership firstOrNew(array $attributes = [], array $values = [])
	 * @method Membership firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Membership forceCreate(array $attributes)
	 * @method _MembershipCollection|Membership[] fromQuery(string $query, array $bindings = [])
	 * @method _MembershipCollection|Membership[] get(array|string $columns = [ '*' ])
	 * @method Membership getModel()
	 * @method Membership[] getModels(array|string $columns = [ '*' ])
	 * @method _MembershipCollection|Membership[] hydrate(array $items)
	 * @method Membership make(array $attributes = [])
	 * @method Membership newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Membership[]|_MembershipCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Membership[]|_MembershipCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Membership sole(array|string $columns = [ '*' ])
	 * @method Membership updateOrCreate(array $attributes, array $values = [])
	 */
	class _MembershipQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Permission shift()
	 * @method Permission pop()
	 * @method Permission get($key, $default = null)
	 * @method Permission pull($key, $default = null)
	 * @method Permission first(callable $callback = null, $default = null)
	 * @method Permission firstWhere(string $key, $operator = null, $value = null)
	 * @method Permission[] all()
	 * @method Permission last(callable $callback = null, $default = null)
	 */
	class _PermissionCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Permission[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _PermissionQueryBuilder whereId($value)
	 * @method _PermissionQueryBuilder whereName($value)
	 * @method _PermissionQueryBuilder whereDisplayName($value)
	 * @method _PermissionQueryBuilder whereDescription($value)
	 * @method _PermissionQueryBuilder whereCreatedAt($value)
	 * @method _PermissionQueryBuilder whereUpdatedAt($value)
	 * @method Permission baseSole(array|string $columns = [ '*' ])
	 * @method Permission create(array $attributes = [])
	 * @method _PermissionCollection|Permission[] cursor()
	 * @method Permission|null find($id, array $columns = [ '*' ])
	 * @method _PermissionCollection|Permission[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Permission findOrFail($id, array $columns = [ '*' ])
	 * @method _PermissionCollection|Permission[] findOrNew($id, array $columns = [ '*' ])
	 * @method Permission first(array|string $columns = [ '*' ])
	 * @method Permission firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Permission firstOrCreate(array $attributes = [], array $values = [])
	 * @method Permission firstOrFail(array $columns = [ '*' ])
	 * @method Permission firstOrNew(array $attributes = [], array $values = [])
	 * @method Permission firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Permission forceCreate(array $attributes)
	 * @method _PermissionCollection|Permission[] fromQuery(string $query, array $bindings = [])
	 * @method _PermissionCollection|Permission[] get(array|string $columns = [ '*' ])
	 * @method Permission getModel()
	 * @method Permission[] getModels(array|string $columns = [ '*' ])
	 * @method _PermissionCollection|Permission[] hydrate(array $items)
	 * @method Permission make(array $attributes = [])
	 * @method Permission newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Permission[]|_PermissionCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Permission[]|_PermissionCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Permission sole(array|string $columns = [ '*' ])
	 * @method Permission updateOrCreate(array $attributes, array $values = [])
	 */
	class _PermissionQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Role shift()
	 * @method Role pop()
	 * @method Role get($key, $default = null)
	 * @method Role pull($key, $default = null)
	 * @method Role first(callable $callback = null, $default = null)
	 * @method Role firstWhere(string $key, $operator = null, $value = null)
	 * @method Role[] all()
	 * @method Role last(callable $callback = null, $default = null)
	 */
	class _RoleCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Role[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _RoleQueryBuilder whereId($value)
	 * @method _RoleQueryBuilder whereName($value)
	 * @method _RoleQueryBuilder whereDisplayName($value)
	 * @method _RoleQueryBuilder whereDescription($value)
	 * @method _RoleQueryBuilder whereCreatedAt($value)
	 * @method _RoleQueryBuilder whereUpdatedAt($value)
	 * @method Role baseSole(array|string $columns = [ '*' ])
	 * @method Role create(array $attributes = [])
	 * @method _RoleCollection|Role[] cursor()
	 * @method Role|null find($id, array $columns = [ '*' ])
	 * @method _RoleCollection|Role[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Role findOrFail($id, array $columns = [ '*' ])
	 * @method _RoleCollection|Role[] findOrNew($id, array $columns = [ '*' ])
	 * @method Role first(array|string $columns = [ '*' ])
	 * @method Role firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Role firstOrCreate(array $attributes = [], array $values = [])
	 * @method Role firstOrFail(array $columns = [ '*' ])
	 * @method Role firstOrNew(array $attributes = [], array $values = [])
	 * @method Role firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Role forceCreate(array $attributes)
	 * @method _RoleCollection|Role[] fromQuery(string $query, array $bindings = [])
	 * @method _RoleCollection|Role[] get(array|string $columns = [ '*' ])
	 * @method Role getModel()
	 * @method Role[] getModels(array|string $columns = [ '*' ])
	 * @method _RoleCollection|Role[] hydrate(array $items)
	 * @method Role make(array $attributes = [])
	 * @method Role newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Role[]|_RoleCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Role[]|_RoleCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Role sole(array|string $columns = [ '*' ])
	 * @method Role updateOrCreate(array $attributes, array $values = [])
	 */
	class _RoleQueryBuilder extends _BaseBuilder { }

	/**
	 * @method Team shift()
	 * @method Team pop()
	 * @method Team get($key, $default = null)
	 * @method Team pull($key, $default = null)
	 * @method Team first(callable $callback = null, $default = null)
	 * @method Team firstWhere(string $key, $operator = null, $value = null)
	 * @method Team[] all()
	 * @method Team last(callable $callback = null, $default = null)
	 */
	class _TeamCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Team[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _TeamQueryBuilder whereId($value)
	 * @method _TeamQueryBuilder whereName($value)
	 * @method _TeamQueryBuilder whereDisplayName($value)
	 * @method _TeamQueryBuilder whereDescription($value)
	 * @method _TeamQueryBuilder whereCreatedAt($value)
	 * @method _TeamQueryBuilder whereUpdatedAt($value)
	 * @method Team baseSole(array|string $columns = [ '*' ])
	 * @method Team create(array $attributes = [])
	 * @method _TeamCollection|Team[] cursor()
	 * @method Team|null find($id, array $columns = [ '*' ])
	 * @method _TeamCollection|Team[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Team findOrFail($id, array $columns = [ '*' ])
	 * @method _TeamCollection|Team[] findOrNew($id, array $columns = [ '*' ])
	 * @method Team first(array|string $columns = [ '*' ])
	 * @method Team firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Team firstOrCreate(array $attributes = [], array $values = [])
	 * @method Team firstOrFail(array $columns = [ '*' ])
	 * @method Team firstOrNew(array $attributes = [], array $values = [])
	 * @method Team firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Team forceCreate(array $attributes)
	 * @method _TeamCollection|Team[] fromQuery(string $query, array $bindings = [])
	 * @method _TeamCollection|Team[] get(array|string $columns = [ '*' ])
	 * @method Team getModel()
	 * @method Team[] getModels(array|string $columns = [ '*' ])
	 * @method _TeamCollection|Team[] hydrate(array $items)
	 * @method Team make(array $attributes = [])
	 * @method Team newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Team[]|_TeamCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Team[]|_TeamCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Team sole(array|string $columns = [ '*' ])
	 * @method Team updateOrCreate(array $attributes, array $values = [])
	 */
	class _TeamQueryBuilder extends _BaseBuilder { }

	/**
	 * @method User shift()
	 * @method User pop()
	 * @method User get($key, $default = null)
	 * @method User pull($key, $default = null)
	 * @method User first(callable $callback = null, $default = null)
	 * @method User firstWhere(string $key, $operator = null, $value = null)
	 * @method User[] all()
	 * @method User last(callable $callback = null, $default = null)
	 */
	class _UserCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return User[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _UserQueryBuilder whereId($value)
	 * @method _UserQueryBuilder whereName($value)
	 * @method _UserQueryBuilder wherePhoneNumber($value)
	 * @method _UserQueryBuilder wherePassword($value)
	 * @method _UserQueryBuilder whereEmail($value)
	 * @method _UserQueryBuilder whereEmailVerifiedAt($value)
	 * @method _UserQueryBuilder whereProfilePhotoPath($value)
	 * @method _UserQueryBuilder whereRememberToken($value)
	 * @method _UserQueryBuilder whereCreatedAt($value)
	 * @method _UserQueryBuilder whereUpdatedAt($value)
	 * @method _UserQueryBuilder whereTwoFactorSecret($value)
	 * @method _UserQueryBuilder whereTwoFactorRecoveryCodes($value)
	 * @method _UserQueryBuilder whereCompanyId($value)
	 * @method User baseSole(array|string $columns = [ '*' ])
	 * @method User create(array $attributes = [])
	 * @method _UserCollection|User[] cursor()
	 * @method User|null find($id, array $columns = [ '*' ])
	 * @method _UserCollection|User[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method User findOrFail($id, array $columns = [ '*' ])
	 * @method _UserCollection|User[] findOrNew($id, array $columns = [ '*' ])
	 * @method User first(array|string $columns = [ '*' ])
	 * @method User firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method User firstOrCreate(array $attributes = [], array $values = [])
	 * @method User firstOrFail(array $columns = [ '*' ])
	 * @method User firstOrNew(array $attributes = [], array $values = [])
	 * @method User firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method User forceCreate(array $attributes)
	 * @method _UserCollection|User[] fromQuery(string $query, array $bindings = [])
	 * @method _UserCollection|User[] get(array|string $columns = [ '*' ])
	 * @method User getModel()
	 * @method User[] getModels(array|string $columns = [ '*' ])
	 * @method _UserCollection|User[] hydrate(array $items)
	 * @method User make(array $attributes = [])
	 * @method User newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|User[]|_UserCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|User[]|_UserCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method User sole(array|string $columns = [ '*' ])
	 * @method User updateOrCreate(array $attributes, array $values = [])
	 * @method _UserQueryBuilder orWherePermissionIs(string $permission = '')
	 * @method _UserQueryBuilder orWhereRoleIs(string $role = '', $team = null)
	 * @method _UserQueryBuilder whereDoesntHavePermission()
	 * @method _UserQueryBuilder whereDoesntHaveRole()
	 * @method _UserQueryBuilder wherePermissionIs(string $permission = '', $boolean = 'and')
	 * @method _UserQueryBuilder whereRoleIs(string $role = '', $team = null, string $boolean = 'and')
	 */
	class _UserQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\Database\Factories {

    use App\Models\User;
    use App\Domain\Trip\Models\Trip;
    use Database\Factories\TripFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\App\Models\_UserCollection;
    use LaravelIdea\Helper\App\Domain\Trip\Models\_TripCollection;

    /**
	 * @method Trip createOne(array $attributes = [])
	 * @method Trip makeOne(array|callable $attributes = [])
	 * @method _TripCollection|Trip[]|Trip create(array $attributes = [], Model|null $parent = null)
	 * @method _TripCollection|Trip[]|Trip make(array $attributes = [], Model|null $parent = null)
	 * @method _TripCollection|Trip[] createMany(iterable $records)
	 */
	class _TripFactory extends TripFactory { }

	/**
	 * @method User createOne(array $attributes = [])
	 * @method User makeOne(array|callable $attributes = [])
	 * @method _UserCollection|User[]|User create(array $attributes = [], Model|null $parent = null)
	 * @method _UserCollection|User[]|User make(array $attributes = [], Model|null $parent = null)
	 * @method _UserCollection|User[] createMany(iterable $records)
	 */
	class _UserFactory extends UserFactory { }
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;

    /**
	 * @method DatabaseNotification shift()
	 * @method DatabaseNotification pop()
	 * @method DatabaseNotification get($key, $default = null)
	 * @method DatabaseNotification pull($key, $default = null)
	 * @method DatabaseNotification first(callable $callback = null, $default = null)
	 * @method DatabaseNotification firstWhere(string $key, $operator = null, $value = null)
	 * @method DatabaseNotification[] all()
	 * @method DatabaseNotification last(callable $callback = null, $default = null)
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
	class _DatabaseNotificationCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return DatabaseNotification[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method DatabaseNotification baseSole(array|string $columns = [ '*' ])
	 * @method DatabaseNotification create(array $attributes = [])
	 * @method _DatabaseNotificationCollection|DatabaseNotification[] cursor()
	 * @method DatabaseNotification|null find($id, array $columns = [ '*' ])
	 * @method _DatabaseNotificationCollection|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method DatabaseNotification findOrFail($id, array $columns = [ '*' ])
	 * @method _DatabaseNotificationCollection|DatabaseNotification[] findOrNew($id, array $columns = [ '*' ])
	 * @method DatabaseNotification first(array|string $columns = [ '*' ])
	 * @method DatabaseNotification firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method DatabaseNotification firstOrCreate(array $attributes = [], array $values = [])
	 * @method DatabaseNotification firstOrFail(array $columns = [ '*' ])
	 * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
	 * @method DatabaseNotification firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method DatabaseNotification forceCreate(array $attributes)
	 * @method _DatabaseNotificationCollection|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
	 * @method _DatabaseNotificationCollection|DatabaseNotification[] get(array|string $columns = [ '*' ])
	 * @method DatabaseNotification getModel()
	 * @method DatabaseNotification[] getModels(array|string $columns = [ '*' ])
	 * @method _DatabaseNotificationCollection|DatabaseNotification[] hydrate(array $items)
	 * @method DatabaseNotification make(array $attributes = [])
	 * @method DatabaseNotification newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|DatabaseNotification[]|_DatabaseNotificationCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|DatabaseNotification[]|_DatabaseNotificationCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method DatabaseNotification sole(array|string $columns = [ '*' ])
	 * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
	 * @method _DatabaseNotificationQueryBuilder read()
	 * @method _DatabaseNotificationQueryBuilder unread()
	 */
	class _DatabaseNotificationQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\Laratrust\Models {

    use Laratrust\Models\LaratrustRole;
    use Laratrust\Models\LaratrustTeam;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Laratrust\Models\LaratrustPermission;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method LaratrustPermission shift()
	 * @method LaratrustPermission pop()
	 * @method LaratrustPermission get($key, $default = null)
	 * @method LaratrustPermission pull($key, $default = null)
	 * @method LaratrustPermission first(callable $callback = null, $default = null)
	 * @method LaratrustPermission firstWhere(string $key, $operator = null, $value = null)
	 * @method LaratrustPermission[] all()
	 * @method LaratrustPermission last(callable $callback = null, $default = null)
	 */
	class _LaratrustPermissionCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return LaratrustPermission[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method LaratrustPermission baseSole(array|string $columns = [ '*' ])
	 * @method LaratrustPermission create(array $attributes = [])
	 * @method _LaratrustPermissionCollection|LaratrustPermission[] cursor()
	 * @method LaratrustPermission|null find($id, array $columns = [ '*' ])
	 * @method _LaratrustPermissionCollection|LaratrustPermission[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method LaratrustPermission findOrFail($id, array $columns = [ '*' ])
	 * @method _LaratrustPermissionCollection|LaratrustPermission[] findOrNew($id, array $columns = [ '*' ])
	 * @method LaratrustPermission first(array|string $columns = [ '*' ])
	 * @method LaratrustPermission firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method LaratrustPermission firstOrCreate(array $attributes = [], array $values = [])
	 * @method LaratrustPermission firstOrFail(array $columns = [ '*' ])
	 * @method LaratrustPermission firstOrNew(array $attributes = [], array $values = [])
	 * @method LaratrustPermission firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method LaratrustPermission forceCreate(array $attributes)
	 * @method _LaratrustPermissionCollection|LaratrustPermission[] fromQuery(string $query, array $bindings = [])
	 * @method _LaratrustPermissionCollection|LaratrustPermission[] get(array|string $columns = [ '*' ])
	 * @method LaratrustPermission getModel()
	 * @method LaratrustPermission[] getModels(array|string $columns = [ '*' ])
	 * @method _LaratrustPermissionCollection|LaratrustPermission[] hydrate(array $items)
	 * @method LaratrustPermission make(array $attributes = [])
	 * @method LaratrustPermission newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|LaratrustPermission[]|_LaratrustPermissionCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|LaratrustPermission[]|_LaratrustPermissionCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method LaratrustPermission sole(array|string $columns = [ '*' ])
	 * @method LaratrustPermission updateOrCreate(array $attributes, array $values = [])
	 */
	class _LaratrustPermissionQueryBuilder extends _BaseBuilder { }

	/**
	 * @method LaratrustRole shift()
	 * @method LaratrustRole pop()
	 * @method LaratrustRole get($key, $default = null)
	 * @method LaratrustRole pull($key, $default = null)
	 * @method LaratrustRole first(callable $callback = null, $default = null)
	 * @method LaratrustRole firstWhere(string $key, $operator = null, $value = null)
	 * @method LaratrustRole[] all()
	 * @method LaratrustRole last(callable $callback = null, $default = null)
	 */
	class _LaratrustRoleCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return LaratrustRole[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method LaratrustRole baseSole(array|string $columns = [ '*' ])
	 * @method LaratrustRole create(array $attributes = [])
	 * @method _LaratrustRoleCollection|LaratrustRole[] cursor()
	 * @method LaratrustRole|null find($id, array $columns = [ '*' ])
	 * @method _LaratrustRoleCollection|LaratrustRole[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method LaratrustRole findOrFail($id, array $columns = [ '*' ])
	 * @method _LaratrustRoleCollection|LaratrustRole[] findOrNew($id, array $columns = [ '*' ])
	 * @method LaratrustRole first(array|string $columns = [ '*' ])
	 * @method LaratrustRole firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method LaratrustRole firstOrCreate(array $attributes = [], array $values = [])
	 * @method LaratrustRole firstOrFail(array $columns = [ '*' ])
	 * @method LaratrustRole firstOrNew(array $attributes = [], array $values = [])
	 * @method LaratrustRole firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method LaratrustRole forceCreate(array $attributes)
	 * @method _LaratrustRoleCollection|LaratrustRole[] fromQuery(string $query, array $bindings = [])
	 * @method _LaratrustRoleCollection|LaratrustRole[] get(array|string $columns = [ '*' ])
	 * @method LaratrustRole getModel()
	 * @method LaratrustRole[] getModels(array|string $columns = [ '*' ])
	 * @method _LaratrustRoleCollection|LaratrustRole[] hydrate(array $items)
	 * @method LaratrustRole make(array $attributes = [])
	 * @method LaratrustRole newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|LaratrustRole[]|_LaratrustRoleCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|LaratrustRole[]|_LaratrustRoleCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method LaratrustRole sole(array|string $columns = [ '*' ])
	 * @method LaratrustRole updateOrCreate(array $attributes, array $values = [])
	 */
	class _LaratrustRoleQueryBuilder extends _BaseBuilder { }

	/**
	 * @method LaratrustTeam shift()
	 * @method LaratrustTeam pop()
	 * @method LaratrustTeam get($key, $default = null)
	 * @method LaratrustTeam pull($key, $default = null)
	 * @method LaratrustTeam first(callable $callback = null, $default = null)
	 * @method LaratrustTeam firstWhere(string $key, $operator = null, $value = null)
	 * @method LaratrustTeam[] all()
	 * @method LaratrustTeam last(callable $callback = null, $default = null)
	 */
	class _LaratrustTeamCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return LaratrustTeam[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method LaratrustTeam baseSole(array|string $columns = [ '*' ])
	 * @method LaratrustTeam create(array $attributes = [])
	 * @method _LaratrustTeamCollection|LaratrustTeam[] cursor()
	 * @method LaratrustTeam|null find($id, array $columns = [ '*' ])
	 * @method _LaratrustTeamCollection|LaratrustTeam[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method LaratrustTeam findOrFail($id, array $columns = [ '*' ])
	 * @method _LaratrustTeamCollection|LaratrustTeam[] findOrNew($id, array $columns = [ '*' ])
	 * @method LaratrustTeam first(array|string $columns = [ '*' ])
	 * @method LaratrustTeam firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method LaratrustTeam firstOrCreate(array $attributes = [], array $values = [])
	 * @method LaratrustTeam firstOrFail(array $columns = [ '*' ])
	 * @method LaratrustTeam firstOrNew(array $attributes = [], array $values = [])
	 * @method LaratrustTeam firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method LaratrustTeam forceCreate(array $attributes)
	 * @method _LaratrustTeamCollection|LaratrustTeam[] fromQuery(string $query, array $bindings = [])
	 * @method _LaratrustTeamCollection|LaratrustTeam[] get(array|string $columns = [ '*' ])
	 * @method LaratrustTeam getModel()
	 * @method LaratrustTeam[] getModels(array|string $columns = [ '*' ])
	 * @method _LaratrustTeamCollection|LaratrustTeam[] hydrate(array $items)
	 * @method LaratrustTeam make(array $attributes = [])
	 * @method LaratrustTeam newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|LaratrustTeam[]|_LaratrustTeamCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|LaratrustTeam[]|_LaratrustTeamCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method LaratrustTeam sole(array|string $columns = [ '*' ])
	 * @method LaratrustTeam updateOrCreate(array $attributes, array $values = [])
	 */
	class _LaratrustTeamQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Laravel\Sanctum\PersonalAccessToken;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;

    /**
	 * @method PersonalAccessToken shift()
	 * @method PersonalAccessToken pop()
	 * @method PersonalAccessToken get($key, $default = null)
	 * @method PersonalAccessToken pull($key, $default = null)
	 * @method PersonalAccessToken first(callable $callback = null, $default = null)
	 * @method PersonalAccessToken firstWhere(string $key, $operator = null, $value = null)
	 * @method PersonalAccessToken[] all()
	 * @method PersonalAccessToken last(callable $callback = null, $default = null)
	 */
	class _PersonalAccessTokenCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return PersonalAccessToken[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method PersonalAccessToken baseSole(array|string $columns = [ '*' ])
	 * @method PersonalAccessToken create(array $attributes = [])
	 * @method _PersonalAccessTokenCollection|PersonalAccessToken[] cursor()
	 * @method PersonalAccessToken|null find($id, array $columns = [ '*' ])
	 * @method _PersonalAccessTokenCollection|PersonalAccessToken[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method PersonalAccessToken findOrFail($id, array $columns = [ '*' ])
	 * @method _PersonalAccessTokenCollection|PersonalAccessToken[] findOrNew($id, array $columns = [ '*' ])
	 * @method PersonalAccessToken first(array|string $columns = [ '*' ])
	 * @method PersonalAccessToken firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
	 * @method PersonalAccessToken firstOrFail(array $columns = [ '*' ])
	 * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
	 * @method PersonalAccessToken firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method PersonalAccessToken forceCreate(array $attributes)
	 * @method _PersonalAccessTokenCollection|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
	 * @method _PersonalAccessTokenCollection|PersonalAccessToken[] get(array|string $columns = [ '*' ])
	 * @method PersonalAccessToken getModel()
	 * @method PersonalAccessToken[] getModels(array|string $columns = [ '*' ])
	 * @method _PersonalAccessTokenCollection|PersonalAccessToken[] hydrate(array $items)
	 * @method PersonalAccessToken make(array $attributes = [])
	 * @method PersonalAccessToken newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|PersonalAccessToken[]|_PersonalAccessTokenCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|PersonalAccessToken[]|_PersonalAccessTokenCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method PersonalAccessToken sole(array|string $columns = [ '*' ])
	 * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
	 */
	class _PersonalAccessTokenQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\Spatie\MediaLibraryPro\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Spatie\MediaLibraryPro\Models\TemporaryUpload;

    /**
	 * @method TemporaryUpload shift()
	 * @method TemporaryUpload pop()
	 * @method TemporaryUpload get($key, $default = null)
	 * @method TemporaryUpload pull($key, $default = null)
	 * @method TemporaryUpload first(callable $callback = null, $default = null)
	 * @method TemporaryUpload firstWhere(string $key, $operator = null, $value = null)
	 * @method TemporaryUpload[] all()
	 * @method TemporaryUpload last(callable $callback = null, $default = null)
	 */
	class _TemporaryUploadCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return TemporaryUpload[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

	/**
	 * @method _TemporaryUploadQueryBuilder whereId($value)
	 * @method _TemporaryUploadQueryBuilder whereSessionId($value)
	 * @method _TemporaryUploadQueryBuilder whereCreatedAt($value)
	 * @method _TemporaryUploadQueryBuilder whereUpdatedAt($value)
	 * @method TemporaryUpload baseSole(array|string $columns = [ '*' ])
	 * @method TemporaryUpload create(array $attributes = [])
	 * @method _TemporaryUploadCollection|TemporaryUpload[] cursor()
	 * @method TemporaryUpload|null find($id, array $columns = [ '*' ])
	 * @method _TemporaryUploadCollection|TemporaryUpload[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method TemporaryUpload findOrFail($id, array $columns = [ '*' ])
	 * @method _TemporaryUploadCollection|TemporaryUpload[] findOrNew($id, array $columns = [ '*' ])
	 * @method TemporaryUpload first(array|string $columns = [ '*' ])
	 * @method TemporaryUpload firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method TemporaryUpload firstOrCreate(array $attributes = [], array $values = [])
	 * @method TemporaryUpload firstOrFail(array $columns = [ '*' ])
	 * @method TemporaryUpload firstOrNew(array $attributes = [], array $values = [])
	 * @method TemporaryUpload firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method TemporaryUpload forceCreate(array $attributes)
	 * @method _TemporaryUploadCollection|TemporaryUpload[] fromQuery(string $query, array $bindings = [])
	 * @method _TemporaryUploadCollection|TemporaryUpload[] get(array|string $columns = [ '*' ])
	 * @method TemporaryUpload getModel()
	 * @method TemporaryUpload[] getModels(array|string $columns = [ '*' ])
	 * @method _TemporaryUploadCollection|TemporaryUpload[] hydrate(array $items)
	 * @method TemporaryUpload make(array $attributes = [])
	 * @method TemporaryUpload newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|TemporaryUpload[]|_TemporaryUploadCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|TemporaryUpload[]|_TemporaryUploadCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method TemporaryUpload sole(array|string $columns = [ '*' ])
	 * @method TemporaryUpload updateOrCreate(array $attributes, array $values = [])
	 * @method _TemporaryUploadQueryBuilder old()
	 */
	class _TemporaryUploadQueryBuilder extends _BaseBuilder { }
}

namespace LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models {

    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

    /**
	 * @method Media shift()
	 * @method Media pop()
	 * @method Media get($key, $default = null)
	 * @method Media pull($key, $default = null)
	 * @method Media first(callable $callback = null, $default = null)
	 * @method Media firstWhere(string $key, $operator = null, $value = null)
	 * @method Media[] all()
	 * @method Media last(callable $callback = null, $default = null)
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
	class _MediaCollection extends _BaseCollection
	{
		/**
		 * @param int $size
		 *
		 * @return Media[][]
		 */
		public function chunk($size)
		{
			return [];
		}
	}

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
	 * @method Media baseSole(array|string $columns = [ '*' ])
	 * @method Media create(array $attributes = [])
	 * @method _MediaCollection|Media[] cursor()
	 * @method Media|null find($id, array $columns = [ '*' ])
	 * @method _MediaCollection|Media[] findMany(array|Arrayable $ids, array $columns = [ '*' ])
	 * @method Media findOrFail($id, array $columns = [ '*' ])
	 * @method _MediaCollection|Media[] findOrNew($id, array $columns = [ '*' ])
	 * @method Media first(array|string $columns = [ '*' ])
	 * @method Media firstOr(array $columns = [ '*' ], \Closure $callback = null)
	 * @method Media firstOrCreate(array $attributes = [], array $values = [])
	 * @method Media firstOrFail(array $columns = [ '*' ])
	 * @method Media firstOrNew(array $attributes = [], array $values = [])
	 * @method Media firstWhere(array|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
	 * @method Media forceCreate(array $attributes)
	 * @method _MediaCollection|Media[] fromQuery(string $query, array $bindings = [])
	 * @method _MediaCollection|Media[] get(array|string $columns = [ '*' ])
	 * @method Media getModel()
	 * @method Media[] getModels(array|string $columns = [ '*' ])
	 * @method _MediaCollection|Media[] hydrate(array $items)
	 * @method Media make(array $attributes = [])
	 * @method Media newModelInstance(array $attributes = [])
	 * @method LengthAwarePaginator|Media[]|_MediaCollection paginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Paginator|Media[]|_MediaCollection simplePaginate(int|null $perPage = null, array $columns = [ '*' ], string $pageName = 'page', int|null $page = null)
	 * @method Media sole(array|string $columns = [ '*' ])
	 * @method Media updateOrCreate(array $attributes, array $values = [])
	 * @method _MediaQueryBuilder ordered()
	 */
	class _MediaQueryBuilder extends _BaseBuilder { }
}

namespace Laravel\Sanctum {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Laravel\Sanctum\_PersonalAccessTokenCollection;
    use LaravelIdea\Helper\Laravel\Sanctum\_PersonalAccessTokenQueryBuilder;

    /**
	 * @property Model $tokenable
	 * @method MorphTo tokenable()
	 * @method _PersonalAccessTokenQueryBuilder newModelQuery()
	 * @method _PersonalAccessTokenQueryBuilder newQuery()
	 * @method static _PersonalAccessTokenQueryBuilder query()
	 * @method static _PersonalAccessTokenCollection|PersonalAccessToken[] all()
	 * @mixin _PersonalAccessTokenQueryBuilder
	 */
	class PersonalAccessToken extends Model { }
}

namespace Spatie\MediaLibraryPro\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\Spatie\MediaLibraryPro\Models\_TemporaryUploadCollection;
    use LaravelIdea\Helper\Spatie\MediaLibraryPro\Models\_TemporaryUploadQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;

    /**
	 * @property int                      $id
	 * @property string                   $session_id
	 * @property Carbon|null              $created_at
	 * @property Carbon|null              $updated_at
	 * @property _MediaCollection|Media[] $media
	 * @method MorphToMany|_MediaQueryBuilder media()
	 * @method _TemporaryUploadQueryBuilder newModelQuery()
	 * @method _TemporaryUploadQueryBuilder newQuery()
	 * @method static _TemporaryUploadQueryBuilder query()
	 * @method static _TemporaryUploadCollection|TemporaryUpload[] all()
	 * @method _TemporaryUploadQueryBuilder old()
	 * @mixin _TemporaryUploadQueryBuilder
	 */
	class TemporaryUpload extends Model { }
}

namespace Spatie\MediaLibrary\MediaCollections\Models {

    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use LaravelIdea\Helper\Spatie\MediaLibraryPro\Models\_TemporaryUploadQueryBuilder;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaCollection;
    use LaravelIdea\Helper\Spatie\MediaLibrary\MediaCollections\Models\_MediaQueryBuilder;

    /**
	 * @property int             $id
	 * @property int             $model_id
	 * @property string          $model_type
	 * @property string|null     $uuid
	 * @property string          $collection_name
	 * @property string          $name
	 * @property string          $file_name
	 * @property string|null     $mime_type
	 * @property string          $disk
	 * @property string|null     $conversions_disk
	 * @property int             $size
	 * @property array           $manipulations
	 * @property array           $custom_properties
	 * @property array           $generated_conversions
	 * @property array           $responsive_images
	 * @property int|null        $order_column
	 * @property Carbon|null     $created_at
	 * @property Carbon|null     $updated_at
	 * @property-read string     $extension
	 * @property-read string     $human_readable_size
	 * @property-read string     $type
	 * @property Model           $model
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
	class Media extends Model { }
}
