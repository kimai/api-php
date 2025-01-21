# Kimai API

JSON API for the Kimai time-tracking software: [API documentation](https://www.kimai.org/documentation/rest-api.html)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0 (for Kimai > 2.28.0)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

```bash
composer require kimai/api-php
```


## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Absence ID to delete

try {
    $apiInstance->deleteDeleteAbsence($id);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->deleteDeleteAbsence: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Publi holiday ID to delete

try {
    $apiInstance->deleteDeletePublicHoliday($id);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->deleteDeletePublicHoliday: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Public holiday group ID to delete

try {
    $apiInstance->deleteDeletePublicHolidayGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->deleteDeletePublicHolidayGroup: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to filter absences. Needs permission 'contract_other_profile' (default: current user)
$begin = "begin_example"; // string | Only absences after this date will be included (format: HTML5)
$end = "end_example"; // string | Only absences before this date will be included (format: HTML5)

try {
    $result = $apiInstance->getGetAbsences($user, $begin, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getGetAbsences: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to filter absences. Needs permission 'contract_other_profile' (default: current user)
$begin = "begin_example"; // string | Only absences after this date will be included (format: HTML5)
$end = "end_example"; // string | Only absences before this date will be included (format: HTML5)
$language = "language_example"; // string | The language to be used for displaying the absences (format: en or en_GB)

try {
    $result = $apiInstance->getGetAbsencesCalendar($user, $begin, $end, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getGetAbsencesCalendar: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Public holiday - group ID to filter. (default: default group)
$begin = "begin_example"; // string | Only absences after this date will be included (format: HTML5)
$end = "end_example"; // string | Only absences before this date will be included (format: HTML5)

try {
    $result = $apiInstance->getGetPublicHolidays($group, $begin, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getGetPublicHolidays: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Public holiday - group ID to filter. (default: default group)
$begin = "begin_example"; // string | Only absences after this date will be included (format: HTML5)
$end = "end_example"; // string | Only absences before this date will be included (format: HTML5)

try {
    $result = $apiInstance->getGetPublicHolidaysCalendar($group, $begin, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getGetPublicHolidaysCalendar: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | The language to be used for displaying the absences types (format: de or en_GB)

try {
    $result = $apiInstance->getKimaipluginWorkcontractApiAbsenceGetabsencetypes($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getKimaipluginWorkcontractApiAbsenceGetabsencetypes: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Absence ID

try {
    $result = $apiInstance->patchConfirmApprovalAbsence($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->patchConfirmApprovalAbsence: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Absence ID

try {
    $result = $apiInstance->patchRejectApprovalAbsence($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->patchRejectApprovalAbsence: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Swagger\Client\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Absence ID

try {
    $result = $apiInstance->patchRequestApprovalAbsence($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->patchRequestApprovalAbsence: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AbsenceApi* | [**deleteDeleteAbsence**](docs/Api/AbsenceApi.md#deletedeleteabsence) | **DELETE** /api/absences/{id} | Delete an absence
*AbsenceApi* | [**deleteDeletePublicHoliday**](docs/Api/AbsenceApi.md#deletedeletepublicholiday) | **DELETE** /api/public-holidays/{id} | Delete a public holiday
*AbsenceApi* | [**deleteDeletePublicHolidayGroup**](docs/Api/AbsenceApi.md#deletedeletepublicholidaygroup) | **DELETE** /api/public-holidays/group/{id} | Delete a public holiday group
*AbsenceApi* | [**getGetAbsences**](docs/Api/AbsenceApi.md#getgetabsences) | **GET** /api/absences | Returns a collection of absences (sickness, vacation, time-off, other).
*AbsenceApi* | [**getGetAbsencesCalendar**](docs/Api/AbsenceApi.md#getgetabsencescalendar) | **GET** /api/absences/calendar | Returns a collection of absences (sickness, vacation, time-off, other) for calendar integration.
*AbsenceApi* | [**getGetPublicHolidays**](docs/Api/AbsenceApi.md#getgetpublicholidays) | **GET** /api/public-holidays | Returns a collection of public holidays.
*AbsenceApi* | [**getGetPublicHolidaysCalendar**](docs/Api/AbsenceApi.md#getgetpublicholidayscalendar) | **GET** /api/public-holidays/calendar | Returns a collection of public holidays for calendar integration.
*AbsenceApi* | [**getKimaipluginWorkcontractApiAbsenceGetabsencetypes**](docs/Api/AbsenceApi.md#getkimaipluginworkcontractapiabsencegetabsencetypes) | **GET** /api/absences/types | Returns a collection of absences (sickness, vacation, time-off, other).
*AbsenceApi* | [**patchConfirmApprovalAbsence**](docs/Api/AbsenceApi.md#patchconfirmapprovalabsence) | **PATCH** /api/absences/{id}/confirm | Confirm an approval request
*AbsenceApi* | [**patchRejectApprovalAbsence**](docs/Api/AbsenceApi.md#patchrejectapprovalabsence) | **PATCH** /api/absences/{id}/reject | Reject an approval request
*AbsenceApi* | [**patchRequestApprovalAbsence**](docs/Api/AbsenceApi.md#patchrequestapprovalabsence) | **PATCH** /api/absences/{id}/request | Request an approval
*ActionsApi* | [**getGetActivityActions**](docs/Api/ActionsApi.md#getgetactivityactions) | **GET** /api/actions/activity/{id}/{view}/{locale} | Get all item actions for the given Activity [for internal use]
*ActionsApi* | [**getGetCustomerActions**](docs/Api/ActionsApi.md#getgetcustomeractions) | **GET** /api/actions/customer/{id}/{view}/{locale} | Get all item actions for the given Customer [for internal use]
*ActionsApi* | [**getGetProjectActions**](docs/Api/ActionsApi.md#getgetprojectactions) | **GET** /api/actions/project/{id}/{view}/{locale} | Get all item actions for the given Project [for internal use]
*ActionsApi* | [**getGetTimesheetActions**](docs/Api/ActionsApi.md#getgettimesheetactions) | **GET** /api/actions/timesheet/{id}/{view}/{locale} | Get all item actions for the given Timesheet [for internal use]
*ActivityApi* | [**deleteDeleteActivity**](docs/Api/ActivityApi.md#deletedeleteactivity) | **DELETE** /api/activities/{id} | Delete an existing activity
*ActivityApi* | [**deleteDeleteActivityRate**](docs/Api/ActivityApi.md#deletedeleteactivityrate) | **DELETE** /api/activities/{id}/rates/{rateId} | Deletes one rate for an activity
*ActivityApi* | [**getGetActivities**](docs/Api/ActivityApi.md#getgetactivities) | **GET** /api/activities | Returns a collection of activities (which are visible to the user)
*ActivityApi* | [**getGetActivity**](docs/Api/ActivityApi.md#getgetactivity) | **GET** /api/activities/{id} | Returns one activity
*ActivityApi* | [**getGetActivityRates**](docs/Api/ActivityApi.md#getgetactivityrates) | **GET** /api/activities/{id}/rates | Returns a collection of all rates for one activity
*ActivityApi* | [**patchAppApiActivityMeta**](docs/Api/ActivityApi.md#patchappapiactivitymeta) | **PATCH** /api/activities/{id}/meta | Sets the value of a meta-field for an existing activity
*ActivityApi* | [**patchPatchActivity**](docs/Api/ActivityApi.md#patchpatchactivity) | **PATCH** /api/activities/{id} | Update an existing activity
*ActivityApi* | [**postPostActivity**](docs/Api/ActivityApi.md#postpostactivity) | **POST** /api/activities | Creates a new activity
*ActivityApi* | [**postPostActivityRate**](docs/Api/ActivityApi.md#postpostactivityrate) | **POST** /api/activities/{id}/rates | Adds a new rate to an activity
*ApprovalBundleApiApi* | [**getKimaipluginApprovalApiApprovalovertimeOvertimeforyearuntil**](docs/Api/ApprovalBundleApiApi.md#getkimaipluginapprovalapiapprovalovertimeovertimeforyearuntil) | **GET** /api/overtime_year | 
*ApprovalBundleApiApi* | [**getKimaipluginApprovalApiApprovalovertimeweeklyWeeklyovertime**](docs/Api/ApprovalBundleApiApi.md#getkimaipluginapprovalapiapprovalovertimeweeklyweeklyovertime) | **GET** /api/weekly_overtime | 
*ApprovalBundleApiApi* | [**postKimaipluginApprovalApiApprovalbundleapiSubmitweek**](docs/Api/ApprovalBundleApiApi.md#postkimaipluginapprovalapiapprovalbundleapisubmitweek) | **POST** /api/add_to_approve | 
*ApprovalNextWeekApiApi* | [**getKimaipluginApprovalApiApprovalnextweekapiNextweek**](docs/Api/ApprovalNextWeekApiApi.md#getkimaipluginapprovalapiapprovalnextweekapinextweek) | **GET** /api/next-week | 
*ApprovalStatusApiApi* | [**getKimaipluginApprovalApiApprovalstatusapiSubmitweek**](docs/Api/ApprovalStatusApiApi.md#getkimaipluginapprovalapiapprovalstatusapisubmitweek) | **GET** /api/week-status | 
*CustomerApi* | [**deleteDeleteCustomer**](docs/Api/CustomerApi.md#deletedeletecustomer) | **DELETE** /api/customers/{id} | Delete an existing customer
*CustomerApi* | [**deleteDeleteCustomerRate**](docs/Api/CustomerApi.md#deletedeletecustomerrate) | **DELETE** /api/customers/{id}/rates/{rateId} | Deletes one rate for a customer
*CustomerApi* | [**getGetCustomer**](docs/Api/CustomerApi.md#getgetcustomer) | **GET** /api/customers/{id} | Returns one customer
*CustomerApi* | [**getGetCustomerRates**](docs/Api/CustomerApi.md#getgetcustomerrates) | **GET** /api/customers/{id}/rates | Returns a collection of all rates for one customer
*CustomerApi* | [**getGetCustomers**](docs/Api/CustomerApi.md#getgetcustomers) | **GET** /api/customers | Returns a collection of customers (which are visible to the user)
*CustomerApi* | [**patchAppApiCustomerMeta**](docs/Api/CustomerApi.md#patchappapicustomermeta) | **PATCH** /api/customers/{id}/meta | Sets the value of a meta-field for an existing customer
*CustomerApi* | [**patchPatchCustomer**](docs/Api/CustomerApi.md#patchpatchcustomer) | **PATCH** /api/customers/{id} | Update an existing customer
*CustomerApi* | [**postPostCustomer**](docs/Api/CustomerApi.md#postpostcustomer) | **POST** /api/customers | Creates a new customer
*CustomerApi* | [**postPostCustomerRate**](docs/Api/CustomerApi.md#postpostcustomerrate) | **POST** /api/customers/{id}/rates | Adds a new rate to a customer
*DefaultApi* | [**getAppApiConfigurationColorconfig**](docs/Api/DefaultApi.md#getappapiconfigurationcolorconfig) | **GET** /api/config/colors | Returns the configured color codes and names
*DefaultApi* | [**getAppApiConfigurationTimesheetconfig**](docs/Api/DefaultApi.md#getappapiconfigurationtimesheetconfig) | **GET** /api/config/timesheet | Returns the timesheet configuration
*DefaultApi* | [**getAppApiStatusPing**](docs/Api/DefaultApi.md#getappapistatusping) | **GET** /api/ping | A testing route for the API
*DefaultApi* | [**getAppApiStatusPlugin**](docs/Api/DefaultApi.md#getappapistatusplugin) | **GET** /api/plugins | Returns information about installed Plugins
*DefaultApi* | [**getAppApiStatusVersion**](docs/Api/DefaultApi.md#getappapistatusversion) | **GET** /api/version | Returns information about the Kimai release
*DemoApi* | [**getKimaipluginDemoApiDemoCget**](docs/Api/DemoApi.md#getkimaiplugindemoapidemocget) | **GET** /api/demos | Returns a collection of demo entities
*DemoApi* | [**getKimaipluginDemoApiDemoGet**](docs/Api/DemoApi.md#getkimaiplugindemoapidemoget) | **GET** /api/demos/{id} | Returns one demo entity
*ExpenseApi* | [**deleteDeleteExpense**](docs/Api/ExpenseApi.md#deletedeleteexpense) | **DELETE** /api/expenses/{id} | Delete an existing expense record
*ExpenseApi* | [**getGetExpense**](docs/Api/ExpenseApi.md#getgetexpense) | **GET** /api/expenses/{id} | Returns one expense
*ExpenseApi* | [**getGetExpenseCategories**](docs/Api/ExpenseApi.md#getgetexpensecategories) | **GET** /api/expenses/categories | Get all visible expense categories (requires \&quot;manage_expense_category\&quot; permission)
*ExpenseApi* | [**getGetExpenses**](docs/Api/ExpenseApi.md#getgetexpenses) | **GET** /api/expenses | Returns a collection of expenses
*ExpenseApi* | [**patchDuplicateExpense**](docs/Api/ExpenseApi.md#patchduplicateexpense) | **PATCH** /api/expenses/{id}/duplicate | Duplicates an existing expense record
*ExpenseApi* | [**patchKimaipluginExpensesApiExpenseMeta**](docs/Api/ExpenseApi.md#patchkimaipluginexpensesapiexpensemeta) | **PATCH** /api/expenses/{id}/meta | Sets the value of a meta-field for an existing expense
*ExpenseApi* | [**patchPatchExpense**](docs/Api/ExpenseApi.md#patchpatchexpense) | **PATCH** /api/expenses/{id} | Update an existing expense
*ExpenseApi* | [**postPostExpense**](docs/Api/ExpenseApi.md#postpostexpense) | **POST** /api/expenses | Creates a new expense
*InvoiceApi* | [**getGetInvoice**](docs/Api/InvoiceApi.md#getgetinvoice) | **GET** /api/invoices/{id} | Returns one invoice.
*InvoiceApi* | [**getGetInvoices**](docs/Api/InvoiceApi.md#getgetinvoices) | **GET** /api/invoices | Returns a paginated collection of invoices.
*KioskApi* | [**getApiKioskGetUserauthByUser**](docs/Api/KioskApi.md#getapikioskgetuserauthbyuser) | **GET** /api/kiosk/codes/{id} | Returns one UserAuthCodes entity
*KioskApi* | [**getApiKioskGetUserauths**](docs/Api/KioskApi.md#getapikioskgetuserauths) | **GET** /api/kiosk/codes | Returns a collection of UserAuthCodes objects
*MetaFieldApi* | [**getKimaipluginMetafieldsApiMetafieldsCget**](docs/Api/MetaFieldApi.md#getkimaipluginmetafieldsapimetafieldscget) | **GET** /api/metafields | Returns a collection of meta-fields
*ProjectApi* | [**deleteDeleteProject**](docs/Api/ProjectApi.md#deletedeleteproject) | **DELETE** /api/projects/{id} | Delete an existing project
*ProjectApi* | [**deleteDeleteProjectRate**](docs/Api/ProjectApi.md#deletedeleteprojectrate) | **DELETE** /api/projects/{id}/rates/{rateId} | Deletes one rate for a project
*ProjectApi* | [**getGetProject**](docs/Api/ProjectApi.md#getgetproject) | **GET** /api/projects/{id} | Returns one project
*ProjectApi* | [**getGetProjectRates**](docs/Api/ProjectApi.md#getgetprojectrates) | **GET** /api/projects/{id}/rates | Returns a collection of all rates for one project
*ProjectApi* | [**getGetProjects**](docs/Api/ProjectApi.md#getgetprojects) | **GET** /api/projects | Returns a collection of projects (which are visible to the user)
*ProjectApi* | [**patchAppApiProjectMeta**](docs/Api/ProjectApi.md#patchappapiprojectmeta) | **PATCH** /api/projects/{id}/meta | Sets the value of a meta-field for an existing project
*ProjectApi* | [**patchPatchProject**](docs/Api/ProjectApi.md#patchpatchproject) | **PATCH** /api/projects/{id} | Update an existing project
*ProjectApi* | [**postPostProject**](docs/Api/ProjectApi.md#postpostproject) | **POST** /api/projects | Creates a new project
*ProjectApi* | [**postPostProjectRate**](docs/Api/ProjectApi.md#postpostprojectrate) | **POST** /api/projects/{id}/rates | Adds a new rate to a project
*TagApi* | [**deleteDeleteTag**](docs/Api/TagApi.md#deletedeletetag) | **DELETE** /api/tags/{id} | Delete a tag
*TagApi* | [**getGetTags**](docs/Api/TagApi.md#getgettags) | **GET** /api/tags | Deprecated: Fetch tags by filter as string collection
*TagApi* | [**getGetTagsFull**](docs/Api/TagApi.md#getgettagsfull) | **GET** /api/tags/find | Fetch tags by filter (as full entities)
*TagApi* | [**postPostTag**](docs/Api/TagApi.md#postposttag) | **POST** /api/tags | Creates a new tag
*TaskApi* | [**deleteDeleteTask**](docs/Api/TaskApi.md#deletedeletetask) | **DELETE** /api/tasks/{id} | Delete an existing task record
*TaskApi* | [**getGetTask**](docs/Api/TaskApi.md#getgettask) | **GET** /api/tasks/{id} | Returns one task
*TaskApi* | [**getGetTasks**](docs/Api/TaskApi.md#getgettasks) | **GET** /api/tasks | Returns a collection of tasks
*TaskApi* | [**getTasksTimesheets**](docs/Api/TaskApi.md#gettaskstimesheets) | **GET** /api/tasks/{id}/timesheets | Returns a collection of timesheets for one task
*TaskApi* | [**patchAssignTask**](docs/Api/TaskApi.md#patchassigntask) | **PATCH** /api/tasks/{id}/assign | Assign a task to the current user
*TaskApi* | [**patchCloseTask**](docs/Api/TaskApi.md#patchclosetask) | **PATCH** /api/tasks/{id}/close | Close a task for the current user
*TaskApi* | [**patchKimaipluginTaskmanagementApiTaskMeta**](docs/Api/TaskApi.md#patchkimaiplugintaskmanagementapitaskmeta) | **PATCH** /api/tasks/{id}/meta | Sets the value of a meta-field for an existing task
*TaskApi* | [**patchLogTask**](docs/Api/TaskApi.md#patchlogtask) | **PATCH** /api/tasks/{id}/log | Logs work for a task record
*TaskApi* | [**patchPatchTask**](docs/Api/TaskApi.md#patchpatchtask) | **PATCH** /api/tasks/{id} | Update an existing task
*TaskApi* | [**patchReopenTask**](docs/Api/TaskApi.md#patchreopentask) | **PATCH** /api/tasks/{id}/reopen | Reopens a task for the current user
*TaskApi* | [**patchStartTask**](docs/Api/TaskApi.md#patchstarttask) | **PATCH** /api/tasks/{id}/start | Start working on a task
*TaskApi* | [**patchStopTask**](docs/Api/TaskApi.md#patchstoptask) | **PATCH** /api/tasks/{id}/stop | Stops a task record for the current user
*TaskApi* | [**patchUnassignTask**](docs/Api/TaskApi.md#patchunassigntask) | **PATCH** /api/tasks/{id}/unassign | Unassign a task from the current user
*TaskApi* | [**postPostTask**](docs/Api/TaskApi.md#postposttask) | **POST** /api/tasks | Creates a new Task
*TeamApi* | [**deleteDeleteTeam**](docs/Api/TeamApi.md#deletedeleteteam) | **DELETE** /api/teams/{id} | Delete a team
*TeamApi* | [**deleteDeleteTeamActivity**](docs/Api/TeamApi.md#deletedeleteteamactivity) | **DELETE** /api/teams/{id}/activities/{activityId} | Revokes access for an activity from a team
*TeamApi* | [**deleteDeleteTeamCustomer**](docs/Api/TeamApi.md#deletedeleteteamcustomer) | **DELETE** /api/teams/{id}/customers/{customerId} | Revokes access for a customer from a team
*TeamApi* | [**deleteDeleteTeamMember**](docs/Api/TeamApi.md#deletedeleteteammember) | **DELETE** /api/teams/{id}/members/{userId} | Removes a member from the team
*TeamApi* | [**deleteDeleteTeamProject**](docs/Api/TeamApi.md#deletedeleteteamproject) | **DELETE** /api/teams/{id}/projects/{projectId} | Revokes access for a project from a team
*TeamApi* | [**getGetTeam**](docs/Api/TeamApi.md#getgetteam) | **GET** /api/teams/{id} | Returns one team
*TeamApi* | [**getGetTeams**](docs/Api/TeamApi.md#getgetteams) | **GET** /api/teams | Fetch all existing teams (which are visible to the user)
*TeamApi* | [**patchPatchTeam**](docs/Api/TeamApi.md#patchpatchteam) | **PATCH** /api/teams/{id} | Update an existing team
*TeamApi* | [**postPostTeam**](docs/Api/TeamApi.md#postpostteam) | **POST** /api/teams | Creates a new team
*TeamApi* | [**postPostTeamActivity**](docs/Api/TeamApi.md#postpostteamactivity) | **POST** /api/teams/{id}/activities/{activityId} | Grant the team access to an activity
*TeamApi* | [**postPostTeamCustomer**](docs/Api/TeamApi.md#postpostteamcustomer) | **POST** /api/teams/{id}/customers/{customerId} | Grant the team access to a customer
*TeamApi* | [**postPostTeamMember**](docs/Api/TeamApi.md#postpostteammember) | **POST** /api/teams/{id}/members/{userId} | Add a new member to a team
*TeamApi* | [**postPostTeamProject**](docs/Api/TeamApi.md#postpostteamproject) | **POST** /api/teams/{id}/projects/{projectId} | Grant the team access to a project
*TimesheetApi* | [**deleteDeleteTimesheet**](docs/Api/TimesheetApi.md#deletedeletetimesheet) | **DELETE** /api/timesheets/{id} | Delete an existing timesheet record
*TimesheetApi* | [**getActiveTimesheet**](docs/Api/TimesheetApi.md#getactivetimesheet) | **GET** /api/timesheets/active | Returns the collection of active timesheet records
*TimesheetApi* | [**getGetTimesheet**](docs/Api/TimesheetApi.md#getgettimesheet) | **GET** /api/timesheets/{id} | Returns one timesheet record
*TimesheetApi* | [**getGetTimesheets**](docs/Api/TimesheetApi.md#getgettimesheets) | **GET** /api/timesheets | Returns a collection of timesheet records (which are visible to the user)
*TimesheetApi* | [**getRecentTimesheet**](docs/Api/TimesheetApi.md#getrecenttimesheet) | **GET** /api/timesheets/recent | Returns the collection of recent user activities
*TimesheetApi* | [**getRestartTimesheetGet**](docs/Api/TimesheetApi.md#getrestarttimesheetget) | **GET** /api/timesheets/{id}/restart | Restarts a previously stopped timesheet record for the current user
*TimesheetApi* | [**getStopTimesheetGet**](docs/Api/TimesheetApi.md#getstoptimesheetget) | **GET** /api/timesheets/{id}/stop | Stops an active timesheet record.
*TimesheetApi* | [**patchAppApiTimesheetMeta**](docs/Api/TimesheetApi.md#patchappapitimesheetmeta) | **PATCH** /api/timesheets/{id}/meta | Sets the value of a meta-field for an existing timesheet.
*TimesheetApi* | [**patchDuplicateTimesheet**](docs/Api/TimesheetApi.md#patchduplicatetimesheet) | **PATCH** /api/timesheets/{id}/duplicate | Duplicates an existing timesheet record
*TimesheetApi* | [**patchExportTimesheet**](docs/Api/TimesheetApi.md#patchexporttimesheet) | **PATCH** /api/timesheets/{id}/export | Switch the export state of a timesheet record to (un-)lock it
*TimesheetApi* | [**patchPatchTimesheet**](docs/Api/TimesheetApi.md#patchpatchtimesheet) | **PATCH** /api/timesheets/{id} | Update an existing timesheet record
*TimesheetApi* | [**patchRestartTimesheet**](docs/Api/TimesheetApi.md#patchrestarttimesheet) | **PATCH** /api/timesheets/{id}/restart | Restarts a previously stopped timesheet record for the current user
*TimesheetApi* | [**patchStopTimesheet**](docs/Api/TimesheetApi.md#patchstoptimesheet) | **PATCH** /api/timesheets/{id}/stop | Stops an active timesheet record.
*TimesheetApi* | [**postPostTimesheet**](docs/Api/TimesheetApi.md#postposttimesheet) | **POST** /api/timesheets | Creates a new timesheet record
*UserApi* | [**deleteDeleteApiToken**](docs/Api/UserApi.md#deletedeleteapitoken) | **DELETE** /api/users/api-token/{id} | Delete an API token for the current user
*UserApi* | [**getGetUser**](docs/Api/UserApi.md#getgetuser) | **GET** /api/users/{id} | Return one user entity
*UserApi* | [**getGetUsers**](docs/Api/UserApi.md#getgetusers) | **GET** /api/users | Returns the collection of users (which are visible to the user)
*UserApi* | [**getMeUser**](docs/Api/UserApi.md#getmeuser) | **GET** /api/users/me | Return the current user entity
*UserApi* | [**patchPatchUser**](docs/Api/UserApi.md#patchpatchuser) | **PATCH** /api/users/{id} | Update an existing user
*UserApi* | [**postPostUser**](docs/Api/UserApi.md#postpostuser) | **POST** /api/users | Creates a new user

## Documentation For Models

 - [Absence](docs/Model/Absence.md)
 - [Activity](docs/Model/Activity.md)
 - [ActivityCollection](docs/Model/ActivityCollection.md)
 - [ActivityEditForm](docs/Model/ActivityEditForm.md)
 - [ActivityEntity](docs/Model/ActivityEntity.md)
 - [ActivityExpanded](docs/Model/ActivityExpanded.md)
 - [ActivityMeta](docs/Model/ActivityMeta.md)
 - [ActivityRate](docs/Model/ActivityRate.md)
 - [ActivityRateForm](docs/Model/ActivityRateForm.md)
 - [CalendarEvent](docs/Model/CalendarEvent.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerCollection](docs/Model/CustomerCollection.md)
 - [CustomerEditForm](docs/Model/CustomerEditForm.md)
 - [CustomerEntity](docs/Model/CustomerEntity.md)
 - [CustomerMeta](docs/Model/CustomerMeta.md)
 - [CustomerRate](docs/Model/CustomerRate.md)
 - [CustomerRateForm](docs/Model/CustomerRateForm.md)
 - [DemoEntity](docs/Model/DemoEntity.md)
 - [DemoForm](docs/Model/DemoForm.md)
 - [ExpenseCategory](docs/Model/ExpenseCategory.md)
 - [ExpenseEditForm](docs/Model/ExpenseEditForm.md)
 - [ExpenseEntity](docs/Model/ExpenseEntity.md)
 - [ExpenseMeta](docs/Model/ExpenseMeta.md)
 - [IdMetaBody](docs/Model/IdMetaBody.md)
 - [IdMetaBody1](docs/Model/IdMetaBody1.md)
 - [IdMetaBody2](docs/Model/IdMetaBody2.md)
 - [IdMetaBody3](docs/Model/IdMetaBody3.md)
 - [IdMetaBody4](docs/Model/IdMetaBody4.md)
 - [IdMetaBody5](docs/Model/IdMetaBody5.md)
 - [IdRestartBody](docs/Model/IdRestartBody.md)
 - [IdRestartBody1](docs/Model/IdRestartBody1.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceCollection](docs/Model/InvoiceCollection.md)
 - [InvoiceMeta](docs/Model/InvoiceMeta.md)
 - [MetaFieldRule](docs/Model/MetaFieldRule.md)
 - [PageAction](docs/Model/PageAction.md)
 - [Plugin](docs/Model/Plugin.md)
 - [Project](docs/Model/Project.md)
 - [ProjectCollection](docs/Model/ProjectCollection.md)
 - [ProjectEditForm](docs/Model/ProjectEditForm.md)
 - [ProjectEntity](docs/Model/ProjectEntity.md)
 - [ProjectExpanded](docs/Model/ProjectExpanded.md)
 - [ProjectMeta](docs/Model/ProjectMeta.md)
 - [ProjectRate](docs/Model/ProjectRate.md)
 - [ProjectRateForm](docs/Model/ProjectRateForm.md)
 - [PublicHoliday](docs/Model/PublicHoliday.md)
 - [PublicHolidayGroup](docs/Model/PublicHolidayGroup.md)
 - [TagEditForm](docs/Model/TagEditForm.md)
 - [TagEntity](docs/Model/TagEntity.md)
 - [Task](docs/Model/Task.md)
 - [TaskEditForm](docs/Model/TaskEditForm.md)
 - [TaskLogWorkForm](docs/Model/TaskLogWorkForm.md)
 - [TaskMeta](docs/Model/TaskMeta.md)
 - [Team](docs/Model/Team.md)
 - [TeamCollection](docs/Model/TeamCollection.md)
 - [TeamEditForm](docs/Model/TeamEditForm.md)
 - [TeamEditFormMembers](docs/Model/TeamEditFormMembers.md)
 - [TeamMember](docs/Model/TeamMember.md)
 - [TeamMembership](docs/Model/TeamMembership.md)
 - [TimesheetCollection](docs/Model/TimesheetCollection.md)
 - [TimesheetCollectionExpanded](docs/Model/TimesheetCollectionExpanded.md)
 - [TimesheetConfig](docs/Model/TimesheetConfig.md)
 - [TimesheetEditForm](docs/Model/TimesheetEditForm.md)
 - [TimesheetEntity](docs/Model/TimesheetEntity.md)
 - [TimesheetExpanded](docs/Model/TimesheetExpanded.md)
 - [TimesheetMeta](docs/Model/TimesheetMeta.md)
 - [User](docs/Model/User.md)
 - [UserAuth](docs/Model/UserAuth.md)
 - [UserAuthCodes](docs/Model/UserAuthCodes.md)
 - [UserCollection](docs/Model/UserCollection.md)
 - [UserCreateForm](docs/Model/UserCreateForm.md)
 - [UserEditForm](docs/Model/UserEditForm.md)
 - [UserEntity](docs/Model/UserEntity.md)
 - [UserPreference](docs/Model/UserPreference.md)
 - [Version](docs/Model/Version.md)

## Documentation For Authorization


## bearer

- **Type**: HTTP bearer authentication


## Author



