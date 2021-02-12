<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Domain\Agent\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;
    use App\Domain\General\Models\PhoneNumber;

    /**
 * App\Domain\Agent\Models\Agent
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read PhoneNumber|null $phoneNumber
 * @method static Builder|Agent newModelQuery()
 * @method static Builder|Agent newQuery()
 * @method static Builder|Agent query()
 * @method static Builder|Agent whereCompanyId($value)
 * @method static Builder|Agent whereCreatedAt($value)
 * @method static Builder|Agent whereId($value)
 * @method static Builder|Agent whereName($value)
 * @method static Builder|Agent whereUpdatedAt($value)
 */
	class Agent extends Eloquent {}
}

namespace App\Domain\Company\Models{

    use Eloquent;
    use App\Models\User;
    use Illuminate\Support\Carbon;
    use App\Domain\Fleet\Models\Fleet;
    use App\Domain\Agent\Models\Agent;
    use App\Domain\Office\Models\Office;
    use App\Domain\Project\Models\Project;
    use App\Domain\General\Models\Address;
    use App\Domain\Employee\Models\Employee;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Company\Models\Company
 *
 * @property int                                          $id
 * @property string                                       $name
 * @property string                                           $short_name
 * @property string|null                                  $gstin
 * @property string|null                                  $pan
 * @property int                                          $use_razorpay
 * @property string|null                                  $razorpay_key_id
 * @property string|null                                  $razorpay_key_secret
 * @property string|null                                  $razorpay_account_number
 * @property int                                          $user_id
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property-read Address|null $address
 * @property-read Collection|Agent[]                      $agents
 * @property-read int|null                                $agents_count
 * @property-read Collection|Employee[]                   $employees
 * @property-read int|null                                $employees_count
 * @property-read Collection|Fleet[]                      $fleets
 * @property-read int|null                                $fleets_count
 * @property-read User|null                               $manager
 * @property-read Collection|Office[]                     $offices
 * @property-read int|null                                $offices_count
 * @property-read Collection|Project[]                    $projects
 * @property-read int|null                                $projects_count
 * @method static Builder|Company newModelQuery()
 * @method static Builder|Company newQuery()
 * @method static Builder|Company query()
 * @method static Builder|Company whereCreatedAt($value)
 * @method static Builder|Company whereGstin($value)
 * @method static Builder|Company whereId($value)
 * @method static Builder|Company whereName($value)
 * @method static Builder|Company wherePan($value)
 * @method static Builder|Company whereRazorpayAccountNumber($value)
 * @method static Builder|Company whereRazorpayKeyId($value)
 * @method static Builder|Company whereRazorpayKeySecret($value)
 * @method static Builder|Company whereShortName($value)
 * @method static Builder|Company whereUpdatedAt($value)
 * @method static Builder|Company whereUseRazorpay($value)
 * @method static Builder|Company whereUserId($value)
 */
	class Company extends Eloquent {}
}

namespace App\Domain\Consignee\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Project\Models\Project;
    use App\Domain\General\Models\Address;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Consignee\Models\Consignee
 *
 * @property int                                                     $id
 * @property string                                                  $name
 * @property string                                                  $short_code
 * @property string|null                                             $gstin
 * @property string|null                                             $pan
 * @property int                                                     $company_id
 * @property Carbon|null                         $created_at
 * @property Carbon|null                         $updated_at
 * @property-read Address|null            $address
 * @property-read Collection|Project[] $projects
 * @property-read int|null                                           $projects_count
 * @method static Builder|Consignee newModelQuery()
 * @method static Builder|Consignee newQuery()
 * @method static Builder|Consignee query()
 * @method static Builder|Consignee whereCompanyId($value)
 * @method static Builder|Consignee whereCreatedAt($value)
 * @method static Builder|Consignee whereGstin($value)
 * @method static Builder|Consignee whereId($value)
 * @method static Builder|Consignee whereName($value)
 * @method static Builder|Consignee wherePan($value)
 * @method static Builder|Consignee whereShortCode($value)
 * @method static Builder|Consignee whereUpdatedAt($value)
 */
	class Consignee extends Eloquent {}
}

namespace App\Domain\Document\Models{

    use Eloquent;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Document\Models\Document
 *
 * @property-read Collection|DocumentCategory[] $categories
 * @property-read int|null                                                    $categories_count
 * @property-read Model|Eloquent                                              $documentable
 * @method static Builder|Document newModelQuery()
 * @method static Builder|Document newQuery()
 * @method static Builder|Document query()
 */
	class Document extends Eloquent {}
}

namespace App\Domain\Document\Models{

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Document\Models\DocumentCategory
 *
 * @property-read Document $categories
 * @method static Builder|DocumentCategory newModelQuery()
 * @method static Builder|DocumentCategory newQuery()
 * @method static Builder|DocumentCategory query()
 */
	class DocumentCategory extends Eloquent {}
}

namespace App\Domain\Employee\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use App\Domain\Office\Models\Office;
    use Illuminate\Database\Eloquent\Builder;
    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\Payment\Models\BankAccount;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Employee\Models\Employee
 *
 * @property int                                                        $id
 * @property string|null                                      $name
 * @property float|null                                       $salary
 * @property string|null                                      $email
 * @property int                                              $office_id
 * @property int                                              $company_id
 * @property int                                              $employee_designation_id
 * @property int|null                                         $is_currently_hired
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property-read BankAccount|null $bankAccount
 * @property-read EmployeesDesignation|null                   $designation
 * @property-read Office|null                                 $office
 * @property-read PhoneNumber|null                            $phoneNumber
 * @property-read Collection|Trip[]                           $trips
 * @property-read int|null                                    $trips_count
 * @method static Builder|Employee newModelQuery()
 * @method static Builder|Employee newQuery()
 * @method static Builder|Employee query()
 * @method static Builder|Employee whereCompanyId($value)
 * @method static Builder|Employee whereCreatedAt($value)
 * @method static Builder|Employee whereEmail($value)
 * @method static Builder|Employee whereEmployeeDesignationId($value)
 * @method static Builder|Employee whereId($value)
 * @method static Builder|Employee whereIsCurrentlyHired($value)
 * @method static Builder|Employee whereName($value)
 * @method static Builder|Employee whereOfficeId($value)
 * @method static Builder|Employee whereSalary($value)
 * @method static Builder|Employee whereUpdatedAt($value)
 */
	class Employee extends Eloquent {}
}

namespace App\Domain\Employee\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Employee\Models\EmployeeDesignationClassification
 *
 * @property int                                                                  $id
 * @property string                                                               $name
 * @property Carbon|null                                      $created_at
 * @property Carbon|null                                      $updated_at
 * @property-read Collection|EmployeesDesignation[] $designations
 * @property-read int|null                                                        $designations_count
 * @method static Builder|EmployeeDesignationClassification newModelQuery()
 * @method static Builder|EmployeeDesignationClassification newQuery()
 * @method static Builder|EmployeeDesignationClassification query()
 * @method static Builder|EmployeeDesignationClassification whereCreatedAt($value)
 * @method static Builder|EmployeeDesignationClassification whereId($value)
 * @method static Builder|EmployeeDesignationClassification whereName($value)
 * @method static Builder|EmployeeDesignationClassification whereUpdatedAt($value)
 */
	class EmployeeDesignationClassification extends Eloquent {}
}

namespace App\Domain\Employee\Models{

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Employee\Models\EmployeePaymentDetails
 *
 * @property-read Employee $employee
 * @method static Builder|EmployeePaymentDetails newModelQuery()
 * @method static Builder|EmployeePaymentDetails newQuery()
 * @method static Builder|EmployeePaymentDetails query()
 */
	class EmployeePaymentDetails extends Eloquent {}
}

namespace App\Domain\Employee\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Employee\Models\EmployeesAttendance
 *
 * @property int $id
 * @property string $date
 * @property int $employee_id
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|EmployeesAttendance newModelQuery()
 * @method static Builder|EmployeesAttendance newQuery()
 * @method static Builder|EmployeesAttendance query()
 * @method static Builder|EmployeesAttendance whereCompanyId($value)
 * @method static Builder|EmployeesAttendance whereCreatedAt($value)
 * @method static Builder|EmployeesAttendance whereDate($value)
 * @method static Builder|EmployeesAttendance whereEmployeeId($value)
 * @method static Builder|EmployeesAttendance whereId($value)
 * @method static Builder|EmployeesAttendance whereUpdatedAt($value)
 */
	class EmployeesAttendance extends Eloquent {}
}

namespace App\Domain\Employee\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Employee\Models\EmployeesDesignation
 *
 * @property int                                    $id
 * @property string                                 $name
 * @property int                                    $emp_desig_class_id
 * @property Carbon|null        $created_at
 * @property Carbon|null        $updated_at
 * @property-read EmployeeDesignationClassification $classification
 * @method static Builder|EmployeesDesignation newModelQuery()
 * @method static Builder|EmployeesDesignation newQuery()
 * @method static Builder|EmployeesDesignation query()
 * @method static Builder|EmployeesDesignation whereCreatedAt($value)
 * @method static Builder|EmployeesDesignation whereEmpDesigClassId($value)
 * @method static Builder|EmployeesDesignation whereId($value)
 * @method static Builder|EmployeesDesignation whereName($value)
 * @method static Builder|EmployeesDesignation whereUpdatedAt($value)
 */
	class EmployeesDesignation extends Eloquent {}
}

namespace App\Domain\Expense\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Office\Models\Office;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Expense\Models\Expense
 *
 * @property int $id
 * @property string                              $date
 * @property int                                 $amount
 * @property string|null                         $remark
 * @property int                                 $expense_category_id
 * @property int                                 $expense_individual_id
 * @property int                                 $office_id
 * @property int                                 $payment_method_id
 * @property int                                 $company_id
 * @property Carbon|null     $created_at
 * @property Carbon|null     $updated_at
 * @property-read ExpenseCategory                $category
 * @property-read Collection|ExpenseIndividual[] $expenseIndividuals
 * @property-read int|null                       $expense_individuals_count
 * @property-read Office                         $office
 * @method static Builder|Expense newModelQuery()
 * @method static Builder|Expense newQuery()
 * @method static Builder|Expense query()
 * @method static Builder|Expense whereAmount($value)
 * @method static Builder|Expense whereCompanyId($value)
 * @method static Builder|Expense whereCreatedAt($value)
 * @method static Builder|Expense whereDate($value)
 * @method static Builder|Expense whereExpenseCategoryId($value)
 * @method static Builder|Expense whereExpenseIndividualId($value)
 * @method static Builder|Expense whereId($value)
 * @method static Builder|Expense whereOfficeId($value)
 * @method static Builder|Expense wherePaymentMethodId($value)
 * @method static Builder|Expense whereRemark($value)
 * @method static Builder|Expense whereUpdatedAt($value)
 */
	class Expense extends Eloquent {}
}

namespace App\Domain\Expense\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Expense\Models\ExpenseCategory
 *
 * @property int $id
 * @property string $name
 * @property int $expense_category_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|ExpenseCategory newModelQuery()
 * @method static Builder|ExpenseCategory newQuery()
 * @method static Builder|ExpenseCategory query()
 * @method static Builder|ExpenseCategory whereCreatedAt($value)
 * @method static Builder|ExpenseCategory whereExpenseCategoryTypeId($value)
 * @method static Builder|ExpenseCategory whereId($value)
 * @method static Builder|ExpenseCategory whereName($value)
 * @method static Builder|ExpenseCategory whereUpdatedAt($value)
 */
	class ExpenseCategory extends Eloquent {}
}

namespace App\Domain\Expense\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Expense\Models\ExpenseCategoryType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|ExpenseCategoryType newModelQuery()
 * @method static Builder|ExpenseCategoryType newQuery()
 * @method static Builder|ExpenseCategoryType query()
 * @method static Builder|ExpenseCategoryType whereCreatedAt($value)
 * @method static Builder|ExpenseCategoryType whereId($value)
 * @method static Builder|ExpenseCategoryType whereName($value)
 * @method static Builder|ExpenseCategoryType whereUpdatedAt($value)
 */
	class ExpenseCategoryType extends Eloquent {}
}

namespace App\Domain\Expense\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Company\Models\Company;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Expense\Models\ExpenseIndividual
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Company $company
 * @method static Builder|ExpenseIndividual newModelQuery()
 * @method static Builder|ExpenseIndividual newQuery()
 * @method static Builder|ExpenseIndividual query()
 * @method static Builder|ExpenseIndividual whereCompanyId($value)
 * @method static Builder|ExpenseIndividual whereCreatedAt($value)
 * @method static Builder|ExpenseIndividual whereId($value)
 * @method static Builder|ExpenseIndividual whereName($value)
 * @method static Builder|ExpenseIndividual whereUpdatedAt($value)
 */
	class ExpenseIndividual extends Eloquent {}
}

namespace App\Domain\Fleet\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Fleet\Models\Fleet
 *
 * @property int                                                          $id
 * @property string                                                       $name
 * @property int                                                          $company_id
 * @property Carbon|null                              $created_at
 * @property Carbon|null                              $updated_at
 * @property-read Collection|FleetVehicle[] $vehicles
 * @property-read int|null                                                $vehicles_count
 * @method static Builder|Fleet newModelQuery()
 * @method static Builder|Fleet newQuery()
 * @method static Builder|Fleet query()
 * @method static Builder|Fleet whereCompanyId($value)
 * @method static Builder|Fleet whereCreatedAt($value)
 * @method static Builder|Fleet whereId($value)
 * @method static Builder|Fleet whereName($value)
 * @method static Builder|Fleet whereUpdatedAt($value)
 */
	class Fleet extends Eloquent {}
}

namespace App\Domain\Fleet\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Fleet\Models\FleetDailyInspection
 *
 * @property int $air_filter
 * @property float|null $air_filter_charge
 * @property int $grease
 * @property float|null $grease_charge
 * @property int $tyre_repair
 * @property float|null $tyre_repair_charge
 * @property int $urea
 * @property float|null $urea_amount
 * @property float|null $urea_charge
 * @property int $misc
 * @property string|null $misc_charge
 * @property float|null $misc_remark
 * @property float|null $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|FleetDailyInspection newModelQuery()
 * @method static Builder|FleetDailyInspection newQuery()
 * @method static Builder|FleetDailyInspection query()
 * @method static Builder|FleetDailyInspection whereAirFilter($value)
 * @method static Builder|FleetDailyInspection whereAirFilterCharge($value)
 * @method static Builder|FleetDailyInspection whereCreatedAt($value)
 * @method static Builder|FleetDailyInspection whereGrease($value)
 * @method static Builder|FleetDailyInspection whereGreaseCharge($value)
 * @method static Builder|FleetDailyInspection whereMisc($value)
 * @method static Builder|FleetDailyInspection whereMiscCharge($value)
 * @method static Builder|FleetDailyInspection whereMiscRemark($value)
 * @method static Builder|FleetDailyInspection whereTotal($value)
 * @method static Builder|FleetDailyInspection whereTyreRepair($value)
 * @method static Builder|FleetDailyInspection whereTyreRepairCharge($value)
 * @method static Builder|FleetDailyInspection whereUpdatedAt($value)
 * @method static Builder|FleetDailyInspection whereUrea($value)
 * @method static Builder|FleetDailyInspection whereUreaAmount($value)
 * @method static Builder|FleetDailyInspection whereUreaCharge($value)
 */
	class FleetDailyInspection extends Eloquent {}
}

namespace App\Domain\Fleet\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Fleet\Models\FleetLive
 *
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
 * @method static Builder|FleetLive newModelQuery()
 * @method static Builder|FleetLive newQuery()
 * @method static Builder|FleetLive query()
 * @method static Builder|FleetLive whereCircle($value)
 * @method static Builder|FleetLive whereCompany($value)
 * @method static Builder|FleetLive whereCreatedAt($value)
 * @method static Builder|FleetLive whereDestcode($value)
 * @method static Builder|FleetLive whereDestination($value)
 * @method static Builder|FleetLive whereEndtime($value)
 * @method static Builder|FleetLive whereEtpno($value)
 * @method static Builder|FleetLive whereGpsstatus($value)
 * @method static Builder|FleetLive whereId($value)
 * @method static Builder|FleetLive whereIgnumber($value)
 * @method static Builder|FleetLive whereImeino($value)
 * @method static Builder|FleetLive whereIndex($value)
 * @method static Builder|FleetLive whereIntime($value)
 * @method static Builder|FleetLive whereLatitude($value)
 * @method static Builder|FleetLive whereLessycode($value)
 * @method static Builder|FleetLive whereLocation($value)
 * @method static Builder|FleetLive whereLongitude($value)
 * @method static Builder|FleetLive whereMineral($value)
 * @method static Builder|FleetLive whereOuttime($value)
 * @method static Builder|FleetLive whereOuttype($value)
 * @method static Builder|FleetLive wherePollingtime($value)
 * @method static Builder|FleetLive whereRdev($value)
 * @method static Builder|FleetLive whereRdevendtime($value)
 * @method static Builder|FleetLive whereRdevstarttime($value)
 * @method static Builder|FleetLive whereRdevtime($value)
 * @method static Builder|FleetLive whereRectime($value)
 * @method static Builder|FleetLive whereRoutename($value)
 * @method static Builder|FleetLive whereSource($value)
 * @method static Builder|FleetLive whereSourcecode($value)
 * @method static Builder|FleetLive whereStarttime($value)
 * @method static Builder|FleetLive whereStatus($value)
 * @method static Builder|FleetLive whereTime($value)
 * @method static Builder|FleetLive whereTripcount($value)
 * @method static Builder|FleetLive whereTrips($value)
 * @method static Builder|FleetLive whereTtime($value)
 * @method static Builder|FleetLive whereUpdatedAt($value)
 * @method static Builder|FleetLive whereVehcount($value)
 * @method static Builder|FleetLive whereVehicleno($value)
 * @method static Builder|FleetLive whereVehiclespeed($value)
 */
	class FleetLive extends Eloquent {}
}

namespace App\Domain\Fleet\Models{

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Fleet\Models\FleetMaintenance
 *
 * @method static Builder|FleetMaintenance newModelQuery()
 * @method static Builder|FleetMaintenance newQuery()
 * @method static Builder|FleetMaintenance query()
 */
	class FleetMaintenance extends Eloquent {}
}

namespace App\Domain\Fleet\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Fleet\Models\FleetTripCatcher
 *
 * @property int $id
 * @property string $vehicleno
 * @property string $etpno
 * @property string|null $source
 * @property string|null $destination
 * @property string|null $starttime
 * @property string|null $pollingtime
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|FleetTripCatcher newModelQuery()
 * @method static Builder|FleetTripCatcher newQuery()
 * @method static Builder|FleetTripCatcher query()
 * @method static Builder|FleetTripCatcher whereCreatedAt($value)
 * @method static Builder|FleetTripCatcher whereDestination($value)
 * @method static Builder|FleetTripCatcher whereEtpno($value)
 * @method static Builder|FleetTripCatcher whereId($value)
 * @method static Builder|FleetTripCatcher wherePollingtime($value)
 * @method static Builder|FleetTripCatcher whereSource($value)
 * @method static Builder|FleetTripCatcher whereStarttime($value)
 * @method static Builder|FleetTripCatcher whereUpdatedAt($value)
 * @method static Builder|FleetTripCatcher whereVehicleno($value)
 */
	class FleetTripCatcher extends Eloquent {}
}

namespace App\Domain\Fleet\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Fleet\Models\FleetVehicle
 *
 * @property int $id
 * @property string $number
 * @property string $owner_name
 * @property string $reg_date
 * @property string $model
 * @property string $fitness_upto
 * @property string $insurance_upto
 * @property string $class
 * @property string $chassis_number
 * @property string $engine_number
 * @property string $authority
 * @property string $rto_code
 * @property int $fleet_id
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|FleetVehicle newModelQuery()
 * @method static Builder|FleetVehicle newQuery()
 * @method static Builder|FleetVehicle query()
 * @method static Builder|FleetVehicle whereAuthority($value)
 * @method static Builder|FleetVehicle whereChassisNumber($value)
 * @method static Builder|FleetVehicle whereClass($value)
 * @method static Builder|FleetVehicle whereCompanyId($value)
 * @method static Builder|FleetVehicle whereCreatedAt($value)
 * @method static Builder|FleetVehicle whereEngineNumber($value)
 * @method static Builder|FleetVehicle whereFitnessUpto($value)
 * @method static Builder|FleetVehicle whereFleetId($value)
 * @method static Builder|FleetVehicle whereId($value)
 * @method static Builder|FleetVehicle whereInsuranceUpto($value)
 * @method static Builder|FleetVehicle whereModel($value)
 * @method static Builder|FleetVehicle whereNumber($value)
 * @method static Builder|FleetVehicle whereOwnerName($value)
 * @method static Builder|FleetVehicle whereRegDate($value)
 * @method static Builder|FleetVehicle whereRtoCode($value)
 * @method static Builder|FleetVehicle whereUpdatedAt($value)
 */
	class FleetVehicle extends Eloquent {}
}

namespace App\Domain\General\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\General\Models\Address
 *
 * @property int                                               $id
 * @property string|null                                       $line_1
 * @property string|null                                       $line_2
 * @property string|null                                       $city
 * @property string|null                                       $zip
 * @property string|null                                       $state
 * @property string                                            $addressable_type
 * @property int                                               $addressable_id
 * @property int                                               $company_id
 * @property Carbon|null                   $created_at
 * @property Carbon|null                   $updated_at
 * @property-read Model|Eloquent $addressable
 * @method static Builder|Address newModelQuery()
 * @method static Builder|Address newQuery()
 * @method static Builder|Address query()
 * @method static Builder|Address whereAddressableId($value)
 * @method static Builder|Address whereAddressableType($value)
 * @method static Builder|Address whereCity($value)
 * @method static Builder|Address whereCompanyId($value)
 * @method static Builder|Address whereCreatedAt($value)
 * @method static Builder|Address whereId($value)
 * @method static Builder|Address whereLine1($value)
 * @method static Builder|Address whereLine2($value)
 * @method static Builder|Address whereState($value)
 * @method static Builder|Address whereUpdatedAt($value)
 * @method static Builder|Address whereZip($value)
 */
	class Address extends Eloquent {}
}

namespace App\Domain\General\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\General\Models\Material
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Material newModelQuery()
 * @method static Builder|Material newQuery()
 * @method static Builder|Material query()
 * @method static Builder|Material whereCreatedAt($value)
 * @method static Builder|Material whereId($value)
 * @method static Builder|Material whereName($value)
 * @method static Builder|Material whereUpdatedAt($value)
 */
	class Material extends Eloquent {}
}

namespace App\Domain\General\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\General\Models\PhoneNumber
 *
 * @property int                                               $id
 * @property string                                            $phone_number
 * @property int                                               $company_id
 * @property string                                            $phoneable_type
 * @property int                                               $phoneable_id
 * @property Carbon|null                   $created_at
 * @property Carbon|null                   $updated_at
 * @property-read Model|Eloquent $phoneable
 * @method static Builder|PhoneNumber newModelQuery()
 * @method static Builder|PhoneNumber newQuery()
 * @method static Builder|PhoneNumber query()
 * @method static Builder|PhoneNumber whereCompanyId($value)
 * @method static Builder|PhoneNumber whereCreatedAt($value)
 * @method static Builder|PhoneNumber whereId($value)
 * @method static Builder|PhoneNumber wherePhoneNumber($value)
 * @method static Builder|PhoneNumber wherePhoneableId($value)
 * @method static Builder|PhoneNumber wherePhoneableType($value)
 * @method static Builder|PhoneNumber whereUpdatedAt($value)
 */
	class PhoneNumber extends Eloquent {}
}

namespace App\Domain\Invoice\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Invoice\Models\Invoice
 *
 * @property int $id
 * @property string $invoice_date
 * @property string $due_date
 * @property string $invoice_number
 * @property string $bill_number
 * @property string|null $reference_number
 * @property int $status
 * @property string|null $notes
 * @property int $total
 * @property int $tax
 * @property int $due_amount
 * @property int $received_amount
 * @property int $consignee_id
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Invoice newModelQuery()
 * @method static Builder|Invoice newQuery()
 * @method static Builder|Invoice query()
 * @method static Builder|Invoice whereBillNumber($value)
 * @method static Builder|Invoice whereCompanyId($value)
 * @method static Builder|Invoice whereConsigneeId($value)
 * @method static Builder|Invoice whereCreatedAt($value)
 * @method static Builder|Invoice whereDueAmount($value)
 * @method static Builder|Invoice whereDueDate($value)
 * @method static Builder|Invoice whereId($value)
 * @method static Builder|Invoice whereInvoiceDate($value)
 * @method static Builder|Invoice whereInvoiceNumber($value)
 * @method static Builder|Invoice whereNotes($value)
 * @method static Builder|Invoice whereReceivedAmount($value)
 * @method static Builder|Invoice whereReferenceNumber($value)
 * @method static Builder|Invoice whereStatus($value)
 * @method static Builder|Invoice whereTax($value)
 * @method static Builder|Invoice whereTotal($value)
 * @method static Builder|Invoice whereUpdatedAt($value)
 */
	class Invoice extends Eloquent {}
}

namespace App\Domain\Invoice\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Invoice\Models\InvoiceItem
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $invoice_id
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|InvoiceItem newModelQuery()
 * @method static Builder|InvoiceItem newQuery()
 * @method static Builder|InvoiceItem query()
 * @method static Builder|InvoiceItem whereCompanyId($value)
 * @method static Builder|InvoiceItem whereCreatedAt($value)
 * @method static Builder|InvoiceItem whereDescription($value)
 * @method static Builder|InvoiceItem whereId($value)
 * @method static Builder|InvoiceItem whereInvoiceId($value)
 * @method static Builder|InvoiceItem whereName($value)
 * @method static Builder|InvoiceItem whereUpdatedAt($value)
 */
	class InvoiceItem extends Eloquent {}
}

namespace App\Domain\Invoice\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Invoice\Models\InvoiceStatus
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|InvoiceStatus newModelQuery()
 * @method static Builder|InvoiceStatus newQuery()
 * @method static Builder|InvoiceStatus query()
 * @method static Builder|InvoiceStatus whereCreatedAt($value)
 * @method static Builder|InvoiceStatus whereId($value)
 * @method static Builder|InvoiceStatus whereName($value)
 * @method static Builder|InvoiceStatus whereUpdatedAt($value)
 */
	class InvoiceStatus extends Eloquent {}
}

namespace App\Domain\LoadingPoint\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\LoadingPoint\Models\LoadingPoint
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|LoadingPoint newModelQuery()
 * @method static Builder|LoadingPoint newQuery()
 * @method static Builder|LoadingPoint query()
 * @method static Builder|LoadingPoint whereCompanyId($value)
 * @method static Builder|LoadingPoint whereCreatedAt($value)
 * @method static Builder|LoadingPoint whereId($value)
 * @method static Builder|LoadingPoint whereName($value)
 * @method static Builder|LoadingPoint whereShortCode($value)
 * @method static Builder|LoadingPoint whereUpdatedAt($value)
 */
	class LoadingPoint extends Eloquent {}
}

namespace App\Domain\MarketVehicle\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Party\Models\Party;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\MarketVehicle\Models\MarketVehicle
 *
 * @property int                                                   $id
 * @property string                                                $number
 * @property int                                                   $party_id
 * @property int                                                   $company_id
 * @property Carbon|null                       $created_at
 * @property Carbon|null                       $updated_at
 * @property-read Collection|Party[] $party
 * @property-read int|null                                         $party_count
 * @method static Builder|MarketVehicle newModelQuery()
 * @method static Builder|MarketVehicle newQuery()
 * @method static Builder|MarketVehicle query()
 * @method static Builder|MarketVehicle whereCompanyId($value)
 * @method static Builder|MarketVehicle whereCreatedAt($value)
 * @method static Builder|MarketVehicle whereId($value)
 * @method static Builder|MarketVehicle whereNumber($value)
 * @method static Builder|MarketVehicle wherePartyId($value)
 * @method static Builder|MarketVehicle whereUpdatedAt($value)
 */
	class MarketVehicle extends Eloquent {}
}

namespace App\Domain\Office\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Expense\Models\Expense;
    use App\Domain\Company\Models\Company;
    use App\Domain\Employee\Models\Employee;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Domain\Office\Models\Office
 *
 * @property int                                     $id
 * @property string                                  $name
 * @property string|null                             $street_address
 * @property string|null                             $city
 * @property string|null                             $state
 * @property string|null                             $zip
 * @property int                                     $company_id
 * @property Carbon|null         $created_at
 * @property Carbon|null         $updated_at
 * @property-read Company $company
 * @property-read Collection|Employee[]              $employees
 * @property-read int|null                           $employees_count
 * @property-read Collection|Expense[]               $expenses
 * @property-read int|null                           $expenses_count
 * @method static Builder|Office newModelQuery()
 * @method static Builder|Office newQuery()
 * @method static Builder|Office query()
 * @method static Builder|Office whereCity($value)
 * @method static Builder|Office whereCompanyId($value)
 * @method static Builder|Office whereCreatedAt($value)
 * @method static Builder|Office whereId($value)
 * @method static Builder|Office whereName($value)
 * @method static Builder|Office whereState($value)
 * @method static Builder|Office whereStreetAddress($value)
 * @method static Builder|Office whereUpdatedAt($value)
 * @method static Builder|Office whereZip($value)
 */
	class Office extends Eloquent {}
}

namespace App\Domain\Party\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use Spatie\MediaLibrary\HasMedia;
    use Illuminate\Database\Eloquent\Builder;
    use App\Domain\General\Models\PhoneNumber;
    use App\Domain\Payment\Models\BankAccount;
    use Illuminate\Database\Eloquent\Collection;
    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

    /**
 * App\Domain\Party\Models\Party
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $pan
 * @property string|null                     $razorpay_contact_id
 * @property int                             $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|BankAccount[]   $bankAccounts
 * @property-read int|null                   $bank_accounts_count
 * @property-read MediaCollection|Media[]    $media
 * @property-read int|null                   $media_count
 * @property-read PhoneNumber|null           $phoneNumber
 * @property-read Collection|Trip[]          $trips
 * @property-read int|null                   $trips_count
 * @property-read Collection|MarketVehicle[] $vehicles
 * @property-read int|null                   $vehicles_count
 * @method static Builder|Party newModelQuery()
 * @method static Builder|Party newQuery()
 * @method static Builder|Party query()
 * @method static Builder|Party whereCompanyId($value)
 * @method static Builder|Party whereCreatedAt($value)
 * @method static Builder|Party whereId($value)
 * @method static Builder|Party whereName($value)
 * @method static Builder|Party wherePan($value)
 * @method static Builder|Party whereRazorpayContactId($value)
 * @method static Builder|Party whereUpdatedAt($value)
 */
	class Party extends Eloquent implements HasMedia {}
}

namespace App\Domain\Payment\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Payment\Models\BankAccount
 *
 * @property int                                               $id
 * @property string|null                                       $account_name
 * @property string                                            $account_number
 * @property string                                            $ifsc_code
 * @property string                                            $bankable_type
 * @property int                                               $bankable_id
 * @property string|null                                       $fund_account_id
 * @property int                                               $company_id
 * @property Carbon|null                   $created_at
 * @property Carbon|null                   $updated_at
 * @property-read Model|Eloquent $bankable
 * @method static Builder|BankAccount newModelQuery()
 * @method static Builder|BankAccount newQuery()
 * @method static Builder|BankAccount query()
 * @method static Builder|BankAccount whereAccountName($value)
 * @method static Builder|BankAccount whereAccountNumber($value)
 * @method static Builder|BankAccount whereBankableId($value)
 * @method static Builder|BankAccount whereBankableType($value)
 * @method static Builder|BankAccount whereCompanyId($value)
 * @method static Builder|BankAccount whereCreatedAt($value)
 * @method static Builder|BankAccount whereFundAccountId($value)
 * @method static Builder|BankAccount whereId($value)
 * @method static Builder|BankAccount whereIfscCode($value)
 * @method static Builder|BankAccount whereUpdatedAt($value)
 */
	class BankAccount extends Eloquent {}
}

namespace App\Domain\Payment\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Payment\Models\PaymentMethod
 *
 * @property int                                               $id
 * @property string                                            $name
 * @property Carbon|null                   $created_at
 * @property Carbon|null                   $updated_at
 * @property-read Model|Eloquent $paymentable
 * @method static Builder|PaymentMethod newModelQuery()
 * @method static Builder|PaymentMethod newQuery()
 * @method static Builder|PaymentMethod query()
 * @method static Builder|PaymentMethod whereCreatedAt($value)
 * @method static Builder|PaymentMethod whereId($value)
 * @method static Builder|PaymentMethod whereName($value)
 * @method static Builder|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends Eloquent {}
}

namespace App\Domain\Payment\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Payment\Models\PaymentStatus
 *
 * @property int $id
 * @property string $name
 * @property string|null $desc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|PaymentStatus newModelQuery()
 * @method static Builder|PaymentStatus newQuery()
 * @method static Builder|PaymentStatus query()
 * @method static Builder|PaymentStatus whereCreatedAt($value)
 * @method static Builder|PaymentStatus whereDesc($value)
 * @method static Builder|PaymentStatus whereId($value)
 * @method static Builder|PaymentStatus whereName($value)
 * @method static Builder|PaymentStatus whereUpdatedAt($value)
 */
	class PaymentStatus extends Eloquent {}
}

namespace App\Domain\Payment\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Payment\Models\TaxCategory
 *
 * @property int $id
 * @property string $section
 * @property float $percentage
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TaxCategory newModelQuery()
 * @method static Builder|TaxCategory newQuery()
 * @method static Builder|TaxCategory query()
 * @method static Builder|TaxCategory whereCreatedAt($value)
 * @method static Builder|TaxCategory whereId($value)
 * @method static Builder|TaxCategory wherePercentage($value)
 * @method static Builder|TaxCategory whereSection($value)
 * @method static Builder|TaxCategory whereUpdatedAt($value)
 */
	class TaxCategory extends Eloquent {}
}

namespace App\Domain\Project\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Trip\Models\Trip;
    use App\Domain\Company\Models\Company;
    use App\Domain\General\Models\Material;
    use Illuminate\Database\Eloquent\Builder;
    use App\Domain\Consignee\Models\Consignee;
    use Illuminate\Database\Eloquent\Collection;
    use App\Domain\LoadingPoint\Models\LoadingPoint;

    /**
 * App\Domain\Project\Models\Project
 *
 * @property int                                                    $id
 * @property string                                                 $name
 * @property int                                                    $material_id
 * @property int                                                    $loading_point_id
 * @property int                                                    $destination_id
 * @property int                                                    $consignee_id
 * @property int                                                    $company_id
 * @property int                                                    $status
 * @property Carbon|null                        $created_at
 * @property Carbon|null                        $updated_at
 * @property-read Company                $company
 * @property-read Consignee|null       $consignee
 * @property-read Material|null          $material
 * @property-read LoadingPoint|null $source
 * @property-read Collection|Trip[]   $trips
 * @property-read int|null                                          $trips_count
 * @method static Builder|Project newModelQuery()
 * @method static Builder|Project newQuery()
 * @method static Builder|Project query()
 * @method static Builder|Project whereCompanyId($value)
 * @method static Builder|Project whereConsigneeId($value)
 * @method static Builder|Project whereCreatedAt($value)
 * @method static Builder|Project whereDestinationId($value)
 * @method static Builder|Project whereId($value)
 * @method static Builder|Project whereLoadingPointId($value)
 * @method static Builder|Project whereMaterialId($value)
 * @method static Builder|Project whereName($value)
 * @method static Builder|Project whereStatus($value)
 * @method static Builder|Project whereUpdatedAt($value)
 */
	class Project extends Eloquent {}
}

namespace App\Domain\Trip\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Spatie\MediaLibrary\HasMedia;
    use App\Domain\Party\Models\Party;
    use App\Domain\Agent\Models\Agent;
    use App\Domain\Project\Models\Project;
    use App\Domain\Payment\Models\Payment;
    use App\Domain\Document\Models\Document;
    use Illuminate\Database\Eloquent\Builder;
    use App\Domain\Fleet\Models\FleetVehicle;
    use App\Domain\Consignee\Models\Consignee;
    use Illuminate\Database\Eloquent\Collection;
    use App\Domain\MarketVehicle\Models\MarketVehicle;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

    /**
 * App\Domain\Trip\Models\Trip
 *
 * @property int         $id
 * @property mixed       $date
 * @property TripType    $trip_type
 * @property int         $project_id
 * @property int         $company_id
 * @property string|null $challan_serial
 * @property string      $tp_number
 * @property int         $tp_serial
 * @property float|null  $gross_weight
 * @property float|null  $tare_weight
 * @property float       $net_weight
 * @property float       $rate
 * @property float|null  $hsd
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
 * @property int|null $tds_sbm_bool
 * @property float|null $tds
 * @property int|null $tax_category_id
 * @property int|null $two_pay
 * @property float|null $final_payable
 * @property int|null $payment_id
 * @property float|null $profit
 * @property int|null $market_vehicle_id
 * @property int|null $fleet_vehicle_id
 * @property int|null $fleet_driver_id
 * @property int|null $party_id
 * @property int|null                                                 $agent_id
 * @property int                                                      $loading_done
 * @property int                                                      $payment_done
 * @property int                                                      $completed
 * @property int|null                                                 $created_by
 * @property int|null                                                 $finished_by
 * @property Carbon|null                          $created_at
 * @property Carbon|null                          $updated_at
 * @property-read Agent|null                 $agent
 * @property-read Consignee|null         $consignee
 * @property-read Collection|Document[] $documents
 * @property-read int|null                                            $documents_count
 * @property-read FleetVehicle|null                                   $fleetVehicle
 * @property-read MarketVehicle|null                                  $marketVehicle
 * @property-read MediaCollection|Media[]                             $media
 * @property-read int|null                                            $media_count
 * @property-read Party|null                                          $party
 * @property-read Payment|null                                        $payment
 * @property-read Project|null                                        $project
 * @method static Builder|Trip newModelQuery()
 * @method static Builder|Trip newQuery()
 * @method static Builder|Trip query()
 * @method static Builder|Trip whereAgentId($value)
 * @method static Builder|Trip whereCash($value)
 * @method static Builder|Trip whereCashAdvFees($value)
 * @method static Builder|Trip whereCashAdvPct($value)
 * @method static Builder|Trip whereChallanSerial($value)
 * @method static Builder|Trip whereCompanyId($value)
 * @method static Builder|Trip whereCompleted($value)
 * @method static Builder|Trip whereCreatedAt($value)
 * @method static Builder|Trip whereCreatedBy($value)
 * @method static Builder|Trip whereDate($value)
 * @method static Builder|Trip whereDriverLicenseNum($value)
 * @method static Builder|Trip whereDriverName($value)
 * @method static Builder|Trip whereDriverPhoneNum($value)
 * @method static Builder|Trip whereFinalPayable($value)
 * @method static Builder|Trip whereFinishedBy($value)
 * @method static Builder|Trip whereFleetDriverId($value)
 * @method static Builder|Trip whereFleetVehicleId($value)
 * @method static Builder|Trip whereGrossWeight($value)
 * @method static Builder|Trip whereHsd($value)
 * @method static Builder|Trip whereId($value)
 * @method static Builder|Trip whereLoadingDone($value)
 * @method static Builder|Trip whereMarketVehicleId($value)
 * @method static Builder|Trip whereMarketVehicleNumber($value)
 * @method static Builder|Trip whereNetWeight($value)
 * @method static Builder|Trip wherePartyId($value)
 * @method static Builder|Trip wherePartyName($value)
 * @method static Builder|Trip wherePartyNumber($value)
 * @method static Builder|Trip wherePaymentDone($value)
 * @method static Builder|Trip wherePaymentId($value)
 * @method static Builder|Trip wherePremiumRate($value)
 * @method static Builder|Trip whereProfit($value)
 * @method static Builder|Trip whereProjectId($value)
 * @method static Builder|Trip whereRate($value)
 * @method static Builder|Trip whereTareWeight($value)
 * @method static Builder|Trip whereTaxCategoryId($value)
 * @method static Builder|Trip whereTds($value)
 * @method static Builder|Trip whereTdsSbmBool($value)
 * @method static Builder|Trip whereTotalAmount($value)
 * @method static Builder|Trip whereTpNumber($value)
 * @method static Builder|Trip whereTpSerial($value)
 * @method static Builder|Trip whereTripType($value)
 * @method static Builder|Trip whereTwoPay($value)
 * @method static Builder|Trip whereUpdatedAt($value)
 */
	class Trip extends Eloquent implements HasMedia {}
}

namespace App\Domain\Trip\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\Trip\Models\TripType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TripType newModelQuery()
 * @method static Builder|TripType newQuery()
 * @method static Builder|TripType query()
 * @method static Builder|TripType whereCreatedAt($value)
 * @method static Builder|TripType whereId($value)
 * @method static Builder|TripType whereName($value)
 * @method static Builder|TripType whereUpdatedAt($value)
 */
	class TripType extends Eloquent {}
}

namespace App\Domain\VehicleRC\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Domain\VehicleRC\Models\VehicleRC
 *
 * @property int $id
 * @property string $number
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
 * @method static Builder|VehicleRC newModelQuery()
 * @method static Builder|VehicleRC newQuery()
 * @method static Builder|VehicleRC query()
 * @method static Builder|VehicleRC whereAuthority($value)
 * @method static Builder|VehicleRC whereChassisNumber($value)
 * @method static Builder|VehicleRC whereClass($value)
 * @method static Builder|VehicleRC whereCreatedAt($value)
 * @method static Builder|VehicleRC whereEngineNumber($value)
 * @method static Builder|VehicleRC whereFitnessUpto($value)
 * @method static Builder|VehicleRC whereFuelNorm($value)
 * @method static Builder|VehicleRC whereFuelType($value)
 * @method static Builder|VehicleRC whereId($value)
 * @method static Builder|VehicleRC whereInsuranceUpto($value)
 * @method static Builder|VehicleRC whereModel($value)
 * @method static Builder|VehicleRC whereMvtaxUpto($value)
 * @method static Builder|VehicleRC whereNocDetails($value)
 * @method static Builder|VehicleRC whereNumber($value)
 * @method static Builder|VehicleRC whereOwnerName($value)
 * @method static Builder|VehicleRC wherePucUpto($value)
 * @method static Builder|VehicleRC whereRegDate($value)
 * @method static Builder|VehicleRC whereRoadtaxUpto($value)
 * @method static Builder|VehicleRC whereRtoCode($value)
 * @method static Builder|VehicleRC whereUpdatedAt($value)
 * @method static Builder|VehicleRC whereVehicleType($value)
 */
	class VehicleRC extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Models\Permission
 *
 * @property int                                                  $id
 * @property string                                               $name
 * @property string|null                                          $display_name
 * @property string|null                                          $description
 * @property Carbon|null                      $created_at
 * @property Carbon|null                      $updated_at
 * @property-read Collection|Role[] $roles
 * @property-read int|null                                        $roles_count
 * @method static Builder|Permission newModelQuery()
 * @method static Builder|Permission newQuery()
 * @method static Builder|Permission query()
 * @method static Builder|Permission whereCreatedAt($value)
 * @method static Builder|Permission whereDescription($value)
 * @method static Builder|Permission whereDisplayName($value)
 * @method static Builder|Permission whereId($value)
 * @method static Builder|Permission whereName($value)
 * @method static Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Models\Role
 *
 * @property int                                                        $id
 * @property string                                                     $name
 * @property string|null                                                $display_name
 * @property string|null                                                $description
 * @property Carbon|null                            $created_at
 * @property Carbon|null                            $updated_at
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                                              $permissions_count
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static Builder|Role query()
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereDescription($value)
 * @method static Builder|Role whereDisplayName($value)
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereUpdatedAt($value)
 */
	class Role extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Models\Team
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Team newModelQuery()
 * @method static Builder|Team newQuery()
 * @method static Builder|Team query()
 * @method static Builder|Team whereCreatedAt($value)
 * @method static Builder|Team whereDescription($value)
 * @method static Builder|Team whereDisplayName($value)
 * @method static Builder|Team whereId($value)
 * @method static Builder|Team whereName($value)
 * @method static Builder|Team whereUpdatedAt($value)
 */
	class Team extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Illuminate\Support\Carbon;
    use App\Domain\Company\Models\Company;
    use Laravel\Sanctum\PersonalAccessToken;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;

    /**
 * App\Models\User
 *
 * @property int                                                                                  $id
 * @property string                                                                               $name
 * @property int|null                                                                             $phone_number
 * @property string                                                                               $password
 * @property int|null                                                                             $company_id
 * @property string|null                                                                          $two_factor_secret
 * @property string|null                                                                          $two_factor_recovery_codes
 * @property string|null                                                                          $email
 * @property Carbon|null                                                      $email_verified_at
 * @property string|null                                                                          $profile_photo_path
 * @property string|null                                                                          $remember_token
 * @property Carbon|null                                                      $created_at
 * @property Carbon|null                                                      $updated_at
 * @property-read Company|null                                         $company
 * @property-read string                                                                          $profile_photo_url
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null                                                                        $notifications_count
 * @property-read Collection|Permission[]                                                         $permissions
 * @property-read int|null                                                                        $permissions_count
 * @property-read Collection|Role[]                                                               $roles
 * @property-read int|null                                                                        $roles_count
 * @property-read Collection|PersonalAccessToken[]                                                $tokens
 * @property-read int|null                                                                        $tokens_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User orWherePermissionIs($permission = '')
 * @method static Builder|User orWhereRoleIs($role = '', $team = null)
 * @method static Builder|User query()
 * @method static Builder|User whereCompanyId($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereDoesntHavePermission()
 * @method static Builder|User whereDoesntHaveRole()
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePermissionIs($permission = '', $boolean = 'and')
 * @method static Builder|User wherePhoneNumber($value)
 * @method static Builder|User whereProfilePhotoPath($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRoleIs($role = '', $team = null, $boolean = 'and')
 * @method static Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static Builder|User whereTwoFactorSecret($value)
 * @method static Builder|User whereUpdatedAt($value)
 */
	class User extends Eloquent {}
}

