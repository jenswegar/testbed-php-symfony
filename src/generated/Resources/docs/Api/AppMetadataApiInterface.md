# OpenAPI\Server\Api\AppMetadataApiInterface

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appMetadata**](AppMetadataApiInterface.md#appMetadata) | **GET** / | 


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.appMetadata:
        class: Acme\MyBundle\Api\AppMetadataApi
        tags:
            - { name: "open_api_server.api", api: "appMetadata" }
    # ...
```

## **appMetadata**
> OpenAPI\Server\Model\AppMetadata appMetadata()



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AppMetadataApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AppMetadataApiInterface;

class AppMetadataApi implements AppMetadataApiInterface
{

    // ...

    /**
     * Implementation of AppMetadataApiInterface#appMetadata
     */
    public function appMetadata()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\AppMetadata**](../Model/AppMetadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

