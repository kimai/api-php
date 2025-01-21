# Swagger\Client\AbsenceApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteAbsence**](AbsenceApi.md#deletedeleteabsence) | **DELETE** /api/absences/{id} | Delete an absence
[**deleteDeletePublicHoliday**](AbsenceApi.md#deletedeletepublicholiday) | **DELETE** /api/public-holidays/{id} | Delete a public holiday
[**deleteDeletePublicHolidayGroup**](AbsenceApi.md#deletedeletepublicholidaygroup) | **DELETE** /api/public-holidays/group/{id} | Delete a public holiday group
[**getGetAbsences**](AbsenceApi.md#getgetabsences) | **GET** /api/absences | Returns a collection of absences (sickness, vacation, time-off, other).
[**getGetAbsencesCalendar**](AbsenceApi.md#getgetabsencescalendar) | **GET** /api/absences/calendar | Returns a collection of absences (sickness, vacation, time-off, other) for calendar integration.
[**getGetPublicHolidays**](AbsenceApi.md#getgetpublicholidays) | **GET** /api/public-holidays | Returns a collection of public holidays.
[**getGetPublicHolidaysCalendar**](AbsenceApi.md#getgetpublicholidayscalendar) | **GET** /api/public-holidays/calendar | Returns a collection of public holidays for calendar integration.
[**getKimaipluginWorkcontractApiAbsenceGetabsencetypes**](AbsenceApi.md#getkimaipluginworkcontractapiabsencegetabsencetypes) | **GET** /api/absences/types | Returns a collection of absences (sickness, vacation, time-off, other).
[**patchConfirmApprovalAbsence**](AbsenceApi.md#patchconfirmapprovalabsence) | **PATCH** /api/absences/{id}/confirm | Confirm an approval request
[**patchRejectApprovalAbsence**](AbsenceApi.md#patchrejectapprovalabsence) | **PATCH** /api/absences/{id}/reject | Reject an approval request
[**patchRequestApprovalAbsence**](AbsenceApi.md#patchrequestapprovalabsence) | **PATCH** /api/absences/{id}/request | Request an approval

# **deleteDeleteAbsence**
> deleteDeleteAbsence($id)

Delete an absence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Absence ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeletePublicHoliday**
> deleteDeletePublicHoliday($id)

Delete a public holiday

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Publi holiday ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeletePublicHolidayGroup**
> deleteDeletePublicHolidayGroup($id)

Delete a public holiday group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Public holiday group ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetAbsences**
> \Swagger\Client\Model\Absence[] getGetAbsences($user, $begin, $end)

Returns a collection of absences (sickness, vacation, time-off, other).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to filter absences. Needs permission &#x27;contract_other_profile&#x27; (default: current user) | [optional]
 **begin** | **string**| Only absences after this date will be included (format: HTML5) | [optional]
 **end** | **string**| Only absences before this date will be included (format: HTML5) | [optional]

### Return type

[**\Swagger\Client\Model\Absence[]**](../Model/Absence.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetAbsencesCalendar**
> \Swagger\Client\Model\CalendarEvent[] getGetAbsencesCalendar($user, $begin, $end, $language)

Returns a collection of absences (sickness, vacation, time-off, other) for calendar integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to filter absences. Needs permission &#x27;contract_other_profile&#x27; (default: current user) | [optional]
 **begin** | **string**| Only absences after this date will be included (format: HTML5) | [optional]
 **end** | **string**| Only absences before this date will be included (format: HTML5) | [optional]
 **language** | **string**| The language to be used for displaying the absences (format: en or en_GB) | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetPublicHolidays**
> \Swagger\Client\Model\PublicHoliday[] getGetPublicHolidays($group, $begin, $end)

Returns a collection of public holidays.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Public holiday - group ID to filter. (default: default group) | [optional]
 **begin** | **string**| Only absences after this date will be included (format: HTML5) | [optional]
 **end** | **string**| Only absences before this date will be included (format: HTML5) | [optional]

### Return type

[**\Swagger\Client\Model\PublicHoliday[]**](../Model/PublicHoliday.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetPublicHolidaysCalendar**
> \Swagger\Client\Model\CalendarEvent[] getGetPublicHolidaysCalendar($group, $begin, $end)

Returns a collection of public holidays for calendar integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Public holiday - group ID to filter. (default: default group) | [optional]
 **begin** | **string**| Only absences after this date will be included (format: HTML5) | [optional]
 **end** | **string**| Only absences before this date will be included (format: HTML5) | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKimaipluginWorkcontractApiAbsenceGetabsencetypes**
> map[string,string] getKimaipluginWorkcontractApiAbsenceGetabsencetypes($language)

Returns a collection of absences (sickness, vacation, time-off, other).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| The language to be used for displaying the absences types (format: de or en_GB) | [optional]

### Return type

**map[string,string]**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConfirmApprovalAbsence**
> \Swagger\Client\Model\Absence patchConfirmApprovalAbsence($id)

Confirm an approval request

Confirm approval request for absence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Absence ID |

### Return type

[**\Swagger\Client\Model\Absence**](../Model/Absence.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRejectApprovalAbsence**
> \Swagger\Client\Model\Absence patchRejectApprovalAbsence($id)

Reject an approval request

Reject approval request for absence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Absence ID |

### Return type

[**\Swagger\Client\Model\Absence**](../Model/Absence.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRequestApprovalAbsence**
> \Swagger\Client\Model\Absence patchRequestApprovalAbsence($id)

Request an approval

Request approval for absence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Absence ID |

### Return type

[**\Swagger\Client\Model\Absence**](../Model/Absence.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

