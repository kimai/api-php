# Kimai API

JSON API for the Kimai time-tracking software: [API documentation](https://www.kimai.org/documentation/rest-api.html)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.7 (for Kimai 2.0.x)

## Requirements

- Kimai 2.0.x
- PHP 7.4 and later
- Curl extension
- JSON extension
- mbstring extension

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

$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_USERNAME');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = "123"; // string | Project ID to filter activities
$projects = []; // string[] | List of project IDs to filter activities, e.g.: projects[]=1&projects[]=2
$visible = "1"; // string | Visibility status to filter activities: 1=visible, 2=hidden, 3=all
$globals = "1"; // string | Use if you want to fetch only global activities. Allowed values: true (default: false)
$order_by = "name"; // string | The field by which results will be ordered. Allowed values: id, name, project (default: name)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$term = "term_example"; // string | Free search term

try {
    $result = $apiInstance->getGetActivities($project, $projects, $visible, $globals, $order_by, $order, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

