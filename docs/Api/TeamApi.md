# Swagger\Client\TeamApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteTeam**](TeamApi.md#deletedeleteteam) | **DELETE** /api/teams/{id} | Delete a team
[**deleteDeleteTeamActivity**](TeamApi.md#deletedeleteteamactivity) | **DELETE** /api/teams/{id}/activities/{activityId} | Revokes access for an activity from a team
[**deleteDeleteTeamCustomer**](TeamApi.md#deletedeleteteamcustomer) | **DELETE** /api/teams/{id}/customers/{customerId} | Revokes access for a customer from a team
[**deleteDeleteTeamMember**](TeamApi.md#deletedeleteteammember) | **DELETE** /api/teams/{id}/members/{userId} | Removes a member from the team
[**deleteDeleteTeamProject**](TeamApi.md#deletedeleteteamproject) | **DELETE** /api/teams/{id}/projects/{projectId} | Revokes access for a project from a team
[**getGetTeam**](TeamApi.md#getgetteam) | **GET** /api/teams/{id} | Returns one team
[**getGetTeams**](TeamApi.md#getgetteams) | **GET** /api/teams | Fetch all existing teams (which are visible to the user)
[**patchPatchTeam**](TeamApi.md#patchpatchteam) | **PATCH** /api/teams/{id} | Update an existing team
[**postPostTeam**](TeamApi.md#postpostteam) | **POST** /api/teams | Creates a new team
[**postPostTeamActivity**](TeamApi.md#postpostteamactivity) | **POST** /api/teams/{id}/activities/{activityId} | Grant the team access to an activity
[**postPostTeamCustomer**](TeamApi.md#postpostteamcustomer) | **POST** /api/teams/{id}/customers/{customerId} | Grant the team access to a customer
[**postPostTeamMember**](TeamApi.md#postpostteammember) | **POST** /api/teams/{id}/members/{userId} | Add a new member to a team
[**postPostTeamProject**](TeamApi.md#postpostteamproject) | **POST** /api/teams/{id}/projects/{projectId} | Grant the team access to a project

# **deleteDeleteTeam**
> deleteDeleteTeam($id)

Delete a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Team ID to delete

try {
    $apiInstance->deleteDeleteTeam($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteDeleteTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteTeamActivity**
> \Swagger\Client\Model\Team deleteDeleteTeamActivity($id, $activity_id)

Revokes access for an activity from a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team whose permission will be revoked
$activity_id = "activity_id_example"; // string | The activity to remove (Activity ID)

try {
    $result = $apiInstance->deleteDeleteTeamActivity($id, $activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteDeleteTeamActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team whose permission will be revoked |
 **activity_id** | **string**| The activity to remove (Activity ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteTeamCustomer**
> \Swagger\Client\Model\Team deleteDeleteTeamCustomer($id, $customer_id)

Revokes access for a customer from a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team whose permission will be revoked
$customer_id = "customer_id_example"; // string | The customer to remove (Customer ID)

try {
    $result = $apiInstance->deleteDeleteTeamCustomer($id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteDeleteTeamCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team whose permission will be revoked |
 **customer_id** | **string**| The customer to remove (Customer ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteTeamMember**
> \Swagger\Client\Model\Team deleteDeleteTeamMember($id, $user_id)

Removes a member from the team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team from which the member will be removed
$user_id = "user_id_example"; // string | The team member to remove (User ID)

try {
    $result = $apiInstance->deleteDeleteTeamMember($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteDeleteTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team from which the member will be removed |
 **user_id** | **string**| The team member to remove (User ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteTeamProject**
> \Swagger\Client\Model\Team deleteDeleteTeamProject($id, $project_id)

Revokes access for a project from a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team whose permission will be revoked
$project_id = "project_id_example"; // string | The project to remove (Project ID)

try {
    $result = $apiInstance->deleteDeleteTeamProject($id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteDeleteTeamProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team whose permission will be revoked |
 **project_id** | **string**| The project to remove (Project ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTeam**
> \Swagger\Client\Model\Team getGetTeam($id)

Returns one team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getGetTeam($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getGetTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTeams**
> \Swagger\Client\Model\TeamCollection[] getGetTeams()

Fetch all existing teams (which are visible to the user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGetTeams();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getGetTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TeamCollection[]**](../Model/TeamCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchTeam**
> \Swagger\Client\Model\Team patchPatchTeam($body, $id)

Update an existing team

Update an existing team, you can pass all or just a subset of all attributes (passing members will replace all existing ones)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TeamEditForm(); // \Swagger\Client\Model\TeamEditForm | 
$id = "id_example"; // string | Team ID to update

try {
    $result = $apiInstance->patchPatchTeam($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->patchPatchTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TeamEditForm**](../Model/TeamEditForm.md)|  |
 **id** | **string**| Team ID to update |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTeam**
> \Swagger\Client\Model\Team postPostTeam($body)

Creates a new team

Creates a new team and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TeamEditForm(); // \Swagger\Client\Model\TeamEditForm | 

try {
    $result = $apiInstance->postPostTeam($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postPostTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TeamEditForm**](../Model/TeamEditForm.md)|  |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTeamActivity**
> \Swagger\Client\Model\Team postPostTeamActivity($id, $activity_id)

Grant the team access to an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team that is granted access
$activity_id = "activity_id_example"; // string | The activity to grant acecess to (Activity ID)

try {
    $result = $apiInstance->postPostTeamActivity($id, $activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postPostTeamActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team that is granted access |
 **activity_id** | **string**| The activity to grant acecess to (Activity ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTeamCustomer**
> \Swagger\Client\Model\Team postPostTeamCustomer($id, $customer_id)

Grant the team access to a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team that is granted access
$customer_id = "customer_id_example"; // string | The customer to grant acecess to (Customer ID)

try {
    $result = $apiInstance->postPostTeamCustomer($id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postPostTeamCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team that is granted access |
 **customer_id** | **string**| The customer to grant acecess to (Customer ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTeamMember**
> \Swagger\Client\Model\Team postPostTeamMember($id, $user_id)

Add a new member to a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team which will receive the new member
$user_id = "user_id_example"; // string | The team member to add (User ID)

try {
    $result = $apiInstance->postPostTeamMember($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postPostTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team which will receive the new member |
 **user_id** | **string**| The team member to add (User ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTeamProject**
> \Swagger\Client\Model\Team postPostTeamProject($id, $project_id)

Grant the team access to a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The team that is granted access
$project_id = "project_id_example"; // string | The project to grant acecess to (Project ID)

try {
    $result = $apiInstance->postPostTeamProject($id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postPostTeamProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The team that is granted access |
 **project_id** | **string**| The project to grant acecess to (Project ID) |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

