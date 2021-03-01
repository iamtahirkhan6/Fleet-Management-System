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
/**
 * App\Domain\Agent\Models\Agent
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read PhoneNumber|null $phoneNumber
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Agent extends \Eloquent {}
}

namespace App\Domain\Company\Models{
/**
 * App\Domain\Company\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property string|null $gstn
 * @property string|null $pan
 * @property int $use_razorpay
 * @property string|null $razorpay_key_id
 * @property string|null $razorpay_key_secret
 * @property string|null $razorpay_account_number
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Address|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|Agent[] $agents
 * @property-read int|null $agents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Employee[] $employees
 * @property-read int|null $employees_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Fleet[] $fleets
 * @property-read int|null $fleets_count
 * @property-read User|null $manager
 * @property-read \Illuminate\Database\Eloquent\Collection|Office[] $offices
 * @property-read int|null $offices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereGstn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeySecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUseRazorpay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $trade_name
 * @property-read \App\Domain\Payment\Models\BankAccount|null $bankAccount
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereTradeName($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Domain\Consignee\Models{
/**
 * App\Domain\Consignee\Models\Consignee
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property string|null $gstn
 * @property string|null $pan
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Address|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereGstn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $trade_name
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereTradeName($value)
 */
	class Consignee extends \Eloquent {}
}

namespace App\Domain\Document\Models{
/**
 * App\Domain\Document\Models\Document
 *
 * @property int $id
 * @property string $path
 * @property int $document_type_id
 * @property string $documentable_type
 * @property int $documentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $documentable
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Document\Models\DocumentType[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 */
	class Document extends \Eloquent {}
}

namespace App\Domain\Document\Models{
/**
 * App\Domain\Document\Models\DocumentType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Document\Models\Document $document
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereUpdatedAt($value)
 */
	class DocumentType extends \Eloquent {}
}

namespace App\Domain\Employee\Models{
/**
 * App\Domain\Employee\Models\Employee
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $salary
 * @property string|null $email
 * @property int $office_id
 * @property int $company_id
 * @property int $employee_designation_id
 * @property int|null $is_currently_hired
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read BankAccount|null $bankAccount
 * @property-read \App\Domain\Employee\Models\EmployeesDesignation|null $designation
 * @property-read \App\Domain\Office\Models\Office|null $office
 * @property-read PhoneNumber|null $phoneNumber
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmployeeDesignationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereIsCurrentlyHired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Employee extends \Eloquent {}
}

namespace App\Domain\Employee\Models{
/**
 * App\Domain\Employee\Models\EmployeeDesignationClassification
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Employee\Models\EmployeesDesignation[] $designations
 * @property-read int|null $designations_count
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class EmployeeDesignationClassification extends \Eloquent {}
}

namespace App\Domain\Employee\Models{
/**
 * App\Domain\Employee\Models\EmployeesAttendance
 *
 * @property int $id
 * @property string $date
 * @property int $employee_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class EmployeesAttendance extends \Eloquent {}
}

namespace App\Domain\Employee\Models{
/**
 * App\Domain\Employee\Models\EmployeesDesignation
 *
 * @property int $id
 * @property string $name
 * @property int $emp_desig_class_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Employee\Models\EmployeeDesignationClassification $classification
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereEmpDesigClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class EmployeesDesignation extends \Eloquent {}
}

namespace App\Domain\Expense\Models{
/**
 * App\Domain\Expense\Models\Expense
 *
 * @property int                                             $id
 * @property string                                          $date
 * @property int                                             $amount
 * @property string|null                                     $remark
 * @property int                                             $expense_category_id
 * @property int                                             $payee_id
 * @property int                                             $office_id
 * @property int                                             $payment_method_id
 * @property int                                             $company_id
 * @property \Illuminate\Support\Carbon|null                 $created_at
 * @property \Illuminate\Support\Carbon|null                 $updated_at
 * @property-read \App\Domain\Expense\Models\ExpenseCategory $category
 * @property-read Office                                     $office
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePayeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Payee                                      $payee
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 */
	class Expense extends \Eloquent {}
}

namespace App\Domain\Expense\Models{
/**
 * App\Domain\Expense\Models\ExpenseCategory
 *
 * @property int $id
 * @property string $name
 * @property int $expense_category_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereExpenseCategoryTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ExpenseCategory extends \Eloquent {}
}

namespace App\Domain\Expense\Models{
/**
 * App\Domain\Expense\Models\ExpenseCategoryType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ExpenseCategoryType extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
/**
 * App\Domain\Fleet\Models\Fleet
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Fleet\Models\FleetVehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Fleet extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereAirFilter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereAirFilterCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereGrease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereGreaseCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereMisc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereMiscCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereMiscRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereTyreRepair($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereTyreRepairCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUrea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUreaAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUreaCharge($value)
 * @mixin \Eloquent
 */
	class FleetDailyInspection extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereCircle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereDestcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereEndtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereEtpno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereGpsstatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereIgnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereImeino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereIntime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLessycode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereMineral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereOuttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereOuttype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive wherePollingtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdev($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdevendtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdevstarttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdevtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRectime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRoutename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereSourcecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereStarttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTripcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTrips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereVehcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereVehicleno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereVehiclespeed($value)
 * @mixin \Eloquent
 */
	class FleetLive extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
/**
 * App\Domain\Fleet\Models\FleetMaintenance
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FleetMaintenance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetMaintenance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetMaintenance query()
 * @mixin \Eloquent
 */
	class FleetMaintenance extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereEtpno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher wherePollingtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereStarttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereVehicleno($value)
 * @mixin \Eloquent
 */
	class FleetTripCatcher extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Fleet\Models\Fleet $fleet
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereChassisNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereEngineNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFitnessUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereInsuranceUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRtoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $license_plate
 * @property string|null $rto
 * @property string|null $color
 * @property string|null $state
 * @property string|null $weight
 * @property string|null $isValid
 * @property string|null $financer
 * @property string|null $puc_upto
 * @property string|null $fuel_type
 * @property string|null $fuel_norm
 * @property string|null $mvtax_upto
 * @property string|null $vehicle_age
 * @property string|null $price_range
 * @property string|null $noc_details
 * @property string|null $vehicle_type
 * @property string|null $roadtax_upto
 * @property string|null $ownership_type
 * @property string|null $engine_capacity
 * @property string|null $registration_date
 * @property string|null $registering_authority
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereEngineCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFinancer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFuelNorm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFuelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereIsValid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereLicensePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereMvtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereNocDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereOwnershipType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle wherePucUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRegisteringAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRegistrationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRoadtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereVehicleAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereWeight($value)
 * @property string|null $insurance_expiry
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Trip\Models\Trip[] $trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereInsuranceExpiry($value)
 */
	class FleetVehicle extends \Eloquent {}
}

namespace App\Domain\General\Models{
/**
 * App\Domain\General\Models\Address
 *
 * @property int $id
 * @property string|null $line_1
 * @property string|null $line_2
 * @property string|null $city
 * @property string|null $zip
 * @property string|null $state
 * @property string $addressable_type
 * @property int $addressable_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $addressable
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZip($value)
 * @mixin \Eloquent
 * @property string|null $district
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDistrict($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Domain\General\Models{
/**
 * App\Domain\General\Models\GstDetails
 *
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
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereGstn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereJurisdiction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereLegalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereNature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereStateCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereTaxpayerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereTradeName($value)
 * @mixin \Eloquent
 */
	class GstDetails extends \Eloquent {}
}

namespace App\Domain\General\Models{
/**
 * App\Domain\General\Models\Material
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material query()
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Material extends \Eloquent {}
}

namespace App\Domain\General\Models{
/**
 * App\Domain\General\Models\PhoneNumber
 *
 * @property int $id
 * @property string $phone_number
 * @property int $company_id
 * @property string $phoneable_type
 * @property int $phoneable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $phoneable
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber wherePhoneableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber wherePhoneableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PhoneNumber extends \Eloquent {}
}

namespace App\Domain\Invoice\Models{
/**
 * App\Domain\Invoice\Models\Invoice
 *
 * @property int $id
 * @property string $date
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBillNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereConsigneeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property array|null $items
 * @property int $amount_total
 * @property int $amount_paid
 * @property int $amount_due
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountDue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereItems($value)
 * @property string $issue_date
 * @property int|null $reverse_charge_basis
 * @property int $amount_tax
 * @property int $amount_subtotal
 * @property int $invoice_status_id
 * @property int $bank_account_id
 * @property string|null $invoice_path
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBankAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoicePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereIssueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReverseChargeBasis($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Domain\Invoice\Models{
/**
 * App\Domain\Invoice\Models\InvoiceStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $desc
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereDesc($value)
 */
	class InvoiceStatus extends \Eloquent {}
}

namespace App\Domain\Invoice\Models{
/**
 * App\Domain\Invoice\Models\InvoiceType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereUpdatedAt($value)
 */
	class InvoiceType extends \Eloquent {}
}

namespace App\Domain\LoadingPoint\Models{
/**
 * App\Domain\LoadingPoint\Models\LoadingPoint
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class LoadingPoint extends \Eloquent {}
}

namespace App\Domain\MarketVehicle\Models{
/**
 * App\Domain\MarketVehicle\Models\MarketVehicle
 *
 * @property int $id
 * @property string $number
 * @property int $party_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Party\Models\Party[] $party
 * @property-read int|null $party_count
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class MarketVehicle extends \Eloquent {}
}

namespace App\Domain\Office\Models{
/**
 * App\Domain\Office\Models\Office
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Company\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|Employee[] $employees
 * @property-read int|null $employees_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Expense[] $expenses
 * @property-read int|null $expenses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Office extends \Eloquent {}
}

namespace App\Domain\Party\Models{
/**
 * App\Domain\Party\Models\Party
 *
 * @property int $id
 * @property string $name
 * @property string|null $pan
 * @property string|null $razorpay_contact_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|BankAccount[] $bankAccounts
 * @property-read int|null $bank_accounts_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Domain\General\Models\PhoneNumber|null $phoneNumber
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|MarketVehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Party newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party query()
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereRazorpayContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Party extends \Eloquent {}
}

namespace App\Domain\Payee\Models{
/**
 * App\Domain\Payee\Models\Payee
 *
 * @property int $id
 * @property string $name
 * @property int $payee_type_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Company\Models\Company $company
 * @property-read \App\Domain\Payee\Models\PayeeType $payeeType
 * @method static \Illuminate\Database\Eloquent\Builder|Payee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee wherePayeeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Payee extends \Eloquent {}
}

namespace App\Domain\Payee\Models{
/**
 * App\Domain\Payee\Models\PayeeType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PayeeType extends \Eloquent {}
}

namespace App\Domain\Payment\Models{
/**
 * App\Domain\Payment\Models\BankAccount
 *
 * @property int $id
 * @property string|null $account_name
 * @property string $account_number
 * @property string $ifsc_code
 * @property string $bankable_type
 * @property int $bankable_id
 * @property string|null $fund_account_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $bankable
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereFundAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereIfscCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class BankAccount extends \Eloquent {}
}

namespace App\Domain\Payment\Models{
/**
 * App\Domain\Payment\Models\Payment
 *
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
 * @property int|null $trip_id
 * @property int|null $created_by
 * @property int|null $finished_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Payment\Models\BankAccount|null $bankAccount
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Domain\Payment\Models\PaymentMethod|null $method
 * @property-read \App\Domain\Payment\Models\PaymentStatus|null $status
 * @property-read Trip|null $trip
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBankAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereFinishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereRazorpayPayoutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUtrNumber($value)
 * @mixin \Eloquent
 */
	class Payment extends \Eloquent {}
}

namespace App\Domain\Payment\Models{
/**
 * App\Domain\Payment\Models\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $paymentable
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Domain\Payment\Models{
/**
 * App\Domain\Payment\Models\PaymentStatus
 *
 * @property int $id
 * @property string $name
 * @property string|null $desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PaymentStatus extends \Eloquent {}
}

namespace App\Domain\Payment\Models{
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
 * @mixin Eloquent
 */
	class TaxCategory extends \Eloquent {}
}

namespace App\Domain\Project\Models{
/**
 * App\Domain\Project\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property int $material_id
 * @property int $loading_point_id
 * @property int $unloading_point_id
 * @property int $consignee_id
 * @property int $company_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Company $company
 * @property-read \App\Domain\Consignee\Models\Consignee|null $consignee
 * @property-read \App\Domain\LoadingPoint\Models\LoadingPoint|null $loadingPoint
 * @property-read \App\Domain\General\Models\Material|null $material
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @property-read \App\Domain\UnloadingPoint\Models\UnloadingPoint|null $unloadingPoint
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereConsigneeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLoadingPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUnloadingPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Project extends \Eloquent {}
}

namespace App\Domain\Trip\Models{
/**
 * App\Domain\Trip\Models\Trip
 *
 * @property int $id
 * @property mixed $date
 * @property \App\Domain\Trip\Models\TripType $trip_type
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
 * @property int|null $agent_id
 * @property int $loading_done
 * @property int $payment_done
 * @property int $completed
 * @property int|null $created_by
 * @property int|null $finished_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Agent\Models\Agent|null $agent
 * @property-read \App\Domain\Consignee\Models\Consignee|null $consignee
 * @property-read \Illuminate\Database\Eloquent\Collection|Document[] $documents
 * @property-read int|null $documents_count
 * @property-read \App\Domain\Fleet\Models\FleetVehicle|null $fleetVehicle
 * @property-read \App\Domain\MarketVehicle\Models\MarketVehicle|null $marketVehicle
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Domain\Party\Models\Party|null $party
 * @property-read Payment|null $payment
 * @property-read \App\Domain\Project\Models\Project|null $project
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereChallanSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverLicenseNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverPhoneNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinalPayable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFleetDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFleetVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereGrossWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereHsd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereLoadingDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereMarketVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereMarketVehicleNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereNetWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePaymentDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePremiumRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereProfit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTareWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTaxCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsSbmBool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTripType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTwoPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $tds_paid
 * @property int|null $tds_filed
 * @property int $invoice_id
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsFiled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsPaid($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Document\Models\Document[] $challanCopy
 * @property-read int|null $challan_copy_count
 * @property-read \App\Domain\Trip\Models\TripType $tripType
 */
	class Trip extends \Eloquent {}
}

namespace App\Domain\Trip\Models{
/**
 * App\Domain\Trip\Models\TripType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TripType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TripType extends \Eloquent {}
}

namespace App\Domain\UnloadingPoint\Models{
/**
 * App\Domain\UnloadingPoint\Models\UnloadingPoint
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class UnloadingPoint extends \Eloquent {}
}

namespace App\Domain\VehicleRC\Models{
/**
 * App\Domain\VehicleRC\Models\VehicleRC
 *
 * @property int                             $id
 * @property string                          $number
 * @property string|null                     $model
 * @property string|null                     $class
 * @property string|null                     $reg_date
 * @property string|null                     $puc_upto
 * @property string|null                     $rto_code
 * @property string|null                     $fuel_norm
 * @property string|null                     $fuel_type
 * @property string|null                     $authority
 * @property string|null                     $owner_name
 * @property string|null                     $mvtax_upto
 * @property string|null                     $noc_details
 * @property string|null                     $fitness_upto
 * @property string|null                     $roadtax_upto
 * @property string|null                     $vehicle_type
 * @property string|null                     $engine_number
 * @property string|null                     $insurance_upto
 * @property string|null                     $chassis_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereChassisNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereEngineNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFitnessUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFuelNorm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFuelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereInsuranceUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereMvtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereNocDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC wherePucUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRoadtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRtoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereVehicleType($value)
 * @mixin \Eloquent
 * @property string $license_plate
 * @property string|null $rto
 * @property string|null $color
 * @property string|null $state
 * @property string|null $weight
 * @property string|null $isValid
 * @property string|null $financer
 * @property string|null $vehicle_age
 * @property string|null $price_range
 * @property string|null $ownership_type
 * @property string|null $engine_capacity
 * @property string|null $registration_date
 * @property string|null $registering_authority
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereEngineCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFinancer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereIsValid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereLicensePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereOwnershipType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRegisteringAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRegistrationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereVehicleAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereWeight($value)
 * @property string|null $insurance_expiry
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereInsuranceExpiry($value)
 */
	class VehicleRC extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Team
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property int|null $phone_number
 * @property string $password
 * @property int|null $company_id
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $profile_photo_path
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Company|null $company
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User orWherePermissionIs($permission = '')
 * @method static \Illuminate\Database\Eloquent\Builder|User orWhereRoleIs($role = '', $team = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDoesntHavePermission()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDoesntHaveRole()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissionIs($permission = '', $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleIs($role = '', $team = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

