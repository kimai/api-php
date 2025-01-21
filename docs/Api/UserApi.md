# Swagger\Client\UserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteApiToken**](UserApi.md#deletedeleteapitoken) | **DELETE** /api/users/api-token/{id} | Delete an API token for the current user
[**getGetUser**](UserApi.md#getgetuser) | **GET** /api/users/{id} | Return one user entity
[**getGetUsers**](UserApi.md#getgetusers) | **GET** /api/users | Returns the collection of users (which are visible to the user)
[**getMeUser**](UserApi.md#getmeuser) | **GET** /api/users/me | Return the current user entity
[**patchPatchUser**](UserApi.md#patchpatchuser) | **PATCH** /api/users/{id} | Update an existing user
[**postPostUser**](UserApi.md#postpostuser) | **POST** /api/users | Creates a new user

# **deleteDeleteApiToken**
> deleteDeleteApiToken($id)

Delete an API token for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The API token ID to remove

try {
    $apiInstance->deleteDeleteApiToken($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteDeleteApiToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The API token ID to remove |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetUser**
> \Swagger\Client\Model\UserEntity getGetUser($id)

Return one user entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | User ID to fetch

try {
    $result = $apiInstance->getGetUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID to fetch |

### Return type

[**\Swagger\Client\Model\UserEntity**](../Model/UserEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetUsers**
> \Swagger\Client\Model\UserCollection[] getGetUsers($visible, $order_by, $order, $term, $full)

Returns the collection of users (which are visible to the user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$visible = "1"; // string | Visibility status to filter users: 1=visible, 2=hidden, 3=all
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: id, username, alias, email (default: username)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$term = "term_example"; // string | Free search term
$full = "full_example"; // string | Allows to fetch full objects including subresources. Allowed values: 0|1|false|true (default: false)

try {
    $result = $apiInstance->getGetUsers($visible, $order_by, $order, $term, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **visible** | **string**| Visibility status to filter users: 1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;all | [optional] [default to 1]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: id, username, alias, email (default: username) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **term** | **string**| Free search term | [optional]
 **full** | **string**| Allows to fetch full objects including subresources. Allowed values: 0|1|false|true (default: false) | [optional]

### Return type

[**\Swagger\Client\Model\UserCollection[]**](../Model/UserCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeUser**
> \Swagger\Client\Model\UserEntity getMeUser()

Return the current user entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMeUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserEntity**](../Model/UserEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchUser**
> \Swagger\Client\Model\UserEntity patchPatchUser($body, $id)

Update an existing user

Update an existing user, you can pass all or just a subset of all attributes (passing roles will replace all existing ones)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserEditForm(); // \Swagger\Client\Model\UserEditForm | 
$id = "id_example"; // string | User ID to update

try {
    $result = $apiInstance->patchPatchUser($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->patchPatchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserEditForm**](../Model/UserEditForm.md)|  |
 **id** | **string**| User ID to update |

### Return type

[**\Swagger\Client\Model\UserEntity**](../Model/UserEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostUser**
> postPostUser($body)

Creates a new user

Creates a new user and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserCreateForm(); // \Swagger\Client\Model\UserCreateForm | 

try {
    $apiInstance->postPostUser($body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postPostUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserCreateForm**](../Model/UserCreateForm.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

