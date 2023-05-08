# Developer App

## Operations

You can use `developerApp()` method which takes one parameter `$dev_email`
(Developer email) and returns an instance of `DeveloperAppService` class.
which gives you access to all developer app operations.

```php
use \Lordjoo\Apigee\Facades\Apigee;
$service = Apigee::developerApp($dev_email);
```

### List all Developer Apps

```php
use \Lordjoo\Apigee\Facades\Apigee;
$apps = Apigee::developerApp($dev_email)->get();
```
Returns an collection of [DeveloperApp](#properties) objects.

### Create a Developer App

Using the `create` method, you can create an API Product.
the `create` method accepts one parameter `$data`
which is an array of the API Product properties [APIProductRequest](https://apidocs.apigee.com/docs/api-products/1/types/APIProductRequest)


```php
use \Lordjoo\Apigee\Facades\Apigee;
$app = Apigee::developerApp($dev_email)->create($data);
```



## Entity

### Properties

| Property | Type                                      | Description |
| -------- |-------------------------------------------| ----------- |
| name | string                                    | The name of the app. |
| status | string                                    | The status of the app. |
| appFamily | string                                    | The app family. |
| scopes | array                                     | The scopes associated with the app. |
| callbackUrl | string                                    | The callback URL. |
| createdBy | string                                    | The user who created the app. |
| createdAt | [Carbon](https://carbon.nesbot.com/docs/) | The date and time the app was created. |
| lastModifiedBy | string                                    | The user who last modified the app. |
| lastModifiedAt | [Carbon](https://carbon.nesbot.com/docs/) | The date and time the app was last modified. |
| developerId | string                                    | The developer ID. |
| attributes  | [Attribute[]](attribute.html)             | Attributes of the API Product |
| credentials | [Credential[]](app-key.html)              | Credentials of the app. |

### Methods

#### approve()
Change the status of the app to `approved`.
```php
$app->approve();
```

#### revoke()
Change the status of the app to `revoked`.
```php
$app->revoke();
```

