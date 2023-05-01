# API Proxy

## Entity Properties

| Property | Type | Description |
|------------------------|-------| --- |
| name                   | string | Name of the API Proxy |
 | metaData               | array | Meta data of the API Proxy |

### MetaData Array Structure

| Property | Type | Description |
|------------------------|--| --- |
| lastModifiedBy         | string | Email address of developer that last modified the API proxy. |
| lastModifiedAt         | int | Time when the API proxy was last modified in milliseconds since epoch. |
| createdAt              | int | Time when the API proxy was created in milliseconds since epoch. |
| createdBy              | string | Email address of developer that created the API proxy. | 

## Operations
### List all API Proxies

```php
use \Lordjoo\Apigee\Facades\Apigee;
$apis = Apigee::apiProxy()->get();
```

```$apis``` is a Laravel Collection of ApiProxy objects.
