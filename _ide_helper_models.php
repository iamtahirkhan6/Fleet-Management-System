<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Domain\Company\Models{
/**
 * App\Domain\Company\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $gstin
 * @property string|null $pan
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Office[] $offices
 * @property-read int|null $offices_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereGstin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $razorpay_key_id
 * @property string|null $razorpay_key_secret
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeySecret($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Domain\Document\Models{
/**
 * App\Domain\Document\Models\Document
 *
 * @property int $id
 * @property string|null $uid_num
 * @property string $path
 * @property int $document_category_id
 * @property string $documentable_type
 * @property int $documentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Document\Models\DocumentCategory[] $categories
 * @property-read int|null $categories_count
 * @property-read Model|\Eloquent $documentable
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUidNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Document extends \Eloquent {}
}

namespace App\Domain\Document\Models{
/**
 * App\Domain\Document\Models\DocumentCategory
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Document\Models\Document $categories
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class DocumentCategory extends \Eloquent {}
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
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read BankAccount|null $bankAccount
 * @property-read \App\Domain\Employee\Models\EmployeesDesignation|null $designation
 * @property-read \App\Domain\Office\Models\Office|null $office
 * @property-read \Illuminate\Database\Eloquent\Collection|PhoneNumber[] $phoneNumber
 * @property-read int|null $phone_number_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereProfilePhotoPath($value)
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
 * @property-read \Illuminate\Database\Eloquent\Collection|EmployeesDesignation[] $designations
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
 * App\Domain\Employee\Models\EmployeePaymentDetails
 *
 * @property-read \App\Domain\Employee\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeePaymentDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeePaymentDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeePaymentDetails query()
 * @mixin \Eloquent
 */
	class EmployeePaymentDetails extends \Eloquent {}
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
 * @property-read EmployeeDesignationClassification $classification
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
 * @property int $id
 * @property string $date
 * @property int $amount
 * @property string|null $remark
 * @property int $expense_category_id
 * @property int $expense_individual_id
 * @property int $office_id
 * @property int $company_id
 * @property int $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read ExpenseCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|ExpenseIndividual[] $expenseIndividuals
 * @property-read int|null $expense_individuals_count
 * @property-read Office $office
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseIndividualId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @mixin \Eloquent
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

namespace App\Domain\Expense\Models{
/**
 * App\Domain\Expense\Models\ExpenseIndividual
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Company\Models\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ExpenseIndividual extends \Eloquent {}
}

namespace App\Domain\Fleet\Models{
/**
 * App\Domain\Fleet\Models\Fleet
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|FleetVehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet query()
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
 * @property int $fleet_id
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereChassisNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereClass($value)
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
 */
	class FleetVehicle extends \Eloquent {}
}

namespace App\Domain\Invoice\Models{
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBillNumber($value)
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
 */
	class Invoice extends \Eloquent {}
}

namespace App\Domain\Invoice\Models{
/**
 * App\Domain\Invoice\Models\InvoiceItem
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $invoice_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class InvoiceItem extends \Eloquent {}
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
 */
	class InvoiceStatus extends \Eloquent {}
}

namespace App\Domain\Office\Models{
/**
 * App\Domain\Office\Models\Office
 *
 * @property int $id
 * @property string $name
 * @property string|null $street_address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
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
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereZip($value)
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
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|BankAccount[] $bankAccounts
 * @property-read int|null $bank_accounts_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Party extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereIfscCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class BankAccount extends \Eloquent {}
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

namespace App\Domain\Project\Models{
/**
 * App\Domain\Project\Models\Project
 *
 * @property int $id
 * @property string|null $name
 * @property int $material_id
 * @property int $mine_id
 * @property int $unloading_point_id
 * @property int $consignee_id
 * @property int $company_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Company $Company
 * @property-read \App\Models\Consignee|null $Consignee
 * @property-read \App\Models\UnloadingPoint|null $Destination
 * @property-read \App\Models\Material|null $Material
 * @property-read \App\Models\Mine|null $Source
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereConsigneeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMineId($value)
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
 * @property string $date
 * @property string|null $challan_serial
 * @property int $vehicle_id
 * @property int $project_id
 * @property string $tp_number
 * @property int $tp_serial
 * @property float|null $gross_weight
 * @property float|null $tare_weight
 * @property float $net_weight
 * @property float $rate
 * @property float|null $premium_rate
 * @property int $amount
 * @property int|null $hsd
 * @property int|null $cash
 * @property float|null $cash_adv_pct
 * @property float|null $cash_adv_fees
 * @property int|null $tds_sbm_bool
 * @property int $tax_category_id
 * @property float|null $tds
 * @property int|null $two_pay
 * @property float $final_payable
 * @property int $step_loading
 * @property int $step_payment
 * @property int $company_id
 * @property int $party_id
 * @property int $agent_id
 * @property string|null $driver_type
 * @property int|null $driver_id
 * @property int|null $trip_payment_transaction_id
 * @property int|null $created_by
 * @property int|null $finished_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent|null $agent
 * @property-read \App\Models\Consignee|null $consignee
 * @property-read Model|\Eloquent $driverable
 * @property-read \App\Domain\Project\Models\Project|null $project
 * @property-write mixed $loading_date
 * @property-read \App\Domain\Trip\Models\TripPaymentTransaction|null $txn
 * @property-read \App\Models\MarketVehicle|null $vehicle
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereChallanSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinalPayable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereGrossWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereHsd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereNetWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePremiumRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereStepLoading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereStepPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTareWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTaxCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsSbmBool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTripPaymentTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTwoPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereVehicleId($value)
 * @mixin \Eloquent
 */
	class Trip extends \Eloquent {}
}

namespace App\Domain\Trip\Models{
/**
 * App\Domain\Trip\Models\TripPaymentTransaction
 *
 * @property int $id
 * @property int $party_id
 * @property float $amount
 * @property int $parties_bank_account_id
 * @property int $trip_id
 * @property int $status
 * @property int $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Party $party
 * @property-read PaymentMethod|null $payment_method
 * @property-read Trip $trip
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction wherePartiesBankAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TripPaymentTransaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string|null $street_address
 * @property string|null $street_address_two
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreetAddressTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZip($value)
 * @mixin \Eloquent
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Agent
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Agent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Consignee
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $gstin_uin
 * @property string $pan
 * @property string $state_name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereGstinUin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereStateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Consignee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MarketVehicle
 *
 * @property int $id
 * @property string $number
 * @property int $party_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Party\Models\Party[] $party
 * @property-read int|null $party_count
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class MarketVehicle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Material
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

namespace App\Models{
/**
 * App\Models\Mine
 *
 * @property int $id
 * @property string $name
 * @property int $sector_id
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Sector $sector
 * @method static \Illuminate\Database\Eloquent\Builder|Mine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mine query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereVisible($value)
 * @mixin \Eloquent
 */
	class Mine extends \Eloquent {}
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
 * App\Models\PhoneNumber
 *
 * @property int $id
 * @property string $phone_number
 * @property string $phoneable_type
 * @property int $phoneable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $phoneable
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber query()
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
 * App\Models\Sector
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Mine[] $mines
 * @property-read int|null $mines_count
 * @property-read Sector $sector
 * @method static \Illuminate\Database\Eloquent\Builder|Sector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereVisible($value)
 * @mixin \Eloquent
 */
	class Sector extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TaxCategory
 *
 * @property int $id
 * @property string $section
 * @property float $percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TaxCategory extends \Eloquent {}
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
 * App\Models\UnloadingPoint
 *
 * @property int $id
 * @property string|null $short_code
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class UnloadingPoint extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone_number
 * @property string $password
 * @property int|null $company_id
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $profile_photo_path
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
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
 * @property-read \App\Domain\Company\Models\Company|null $company
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VehicleRC
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
 */
	class VehicleRC extends \Eloquent {}
}

