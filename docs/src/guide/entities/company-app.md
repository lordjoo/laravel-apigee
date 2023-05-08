# Company App

## Operations


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
| companyName | string                                    | The company name. |
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



