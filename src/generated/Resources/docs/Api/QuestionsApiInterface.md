# OpenAPI\Server\Api\QuestionsApiInterface

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestion**](QuestionsApiInterface.md#createQuestion) | **POST** /questions | 
[**deleteQuestion**](QuestionsApiInterface.md#deleteQuestion) | **DELETE** /questions/{id} | 
[**getQuestion**](QuestionsApiInterface.md#getQuestion) | **GET** /questions/{id} | 
[**getQuestions**](QuestionsApiInterface.md#getQuestions) | **GET** /questions | 
[**getRandomQuestion**](QuestionsApiInterface.md#getRandomQuestion) | **GET** /questions/random | 
[**updateQuestion**](QuestionsApiInterface.md#updateQuestion) | **PUT** /questions/{id} | 


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.questions:
        class: Acme\MyBundle\Api\QuestionsApi
        tags:
            - { name: "open_api_server.api", api: "questions" }
    # ...
```

## **createQuestion**
> OpenAPI\Server\Model\Question createQuestion($questionRequest)



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/QuestionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\QuestionsApiInterface;

class QuestionsApi implements QuestionsApiInterface
{

    // ...

    /**
     * Implementation of QuestionsApiInterface#createQuestion
     */
    public function createQuestion(QuestionRequest $questionRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionRequest** | [**OpenAPI\Server\Model\QuestionRequest**](../Model/QuestionRequest.md)| Create a new question |

### Return type

[**OpenAPI\Server\Model\Question**](../Model/Question.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteQuestion**
> deleteQuestion($id)



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/QuestionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\QuestionsApiInterface;

class QuestionsApi implements QuestionsApiInterface
{

    // ...

    /**
     * Implementation of QuestionsApiInterface#deleteQuestion
     */
    public function deleteQuestion($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getQuestion**
> OpenAPI\Server\Model\Question getQuestion($id)



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/QuestionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\QuestionsApiInterface;

class QuestionsApi implements QuestionsApiInterface
{

    // ...

    /**
     * Implementation of QuestionsApiInterface#getQuestion
     */
    public function getQuestion($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**OpenAPI\Server\Model\Question**](../Model/Question.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getQuestions**
> OpenAPI\Server\Model\Question getQuestions()



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/QuestionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\QuestionsApiInterface;

class QuestionsApi implements QuestionsApiInterface
{

    // ...

    /**
     * Implementation of QuestionsApiInterface#getQuestions
     */
    public function getQuestions()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Question**](../Model/Question.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRandomQuestion**
> OpenAPI\Server\Model\Question getRandomQuestion()



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/QuestionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\QuestionsApiInterface;

class QuestionsApi implements QuestionsApiInterface
{

    // ...

    /**
     * Implementation of QuestionsApiInterface#getRandomQuestion
     */
    public function getRandomQuestion()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Question**](../Model/Question.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateQuestion**
> OpenAPI\Server\Model\Question updateQuestion($id, $questionRequest)



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/QuestionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\QuestionsApiInterface;

class QuestionsApi implements QuestionsApiInterface
{

    // ...

    /**
     * Implementation of QuestionsApiInterface#updateQuestion
     */
    public function updateQuestion($id, QuestionRequest $questionRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **questionRequest** | [**OpenAPI\Server\Model\QuestionRequest**](../Model/QuestionRequest.md)| Update an existing question |

### Return type

[**OpenAPI\Server\Model\Question**](../Model/Question.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

