# API Product

## Entity Properties

| Property | Type        | Description             |
|------------------------|-------------|-------------------------|
| name                   | string      | Name of the API Product |
| displayName            | string      | Display name of the API Product |
| description            | string      | Description of the API Product |
| approvalType           | string      | Approval type of the API Product |
| attributes             | Attribute[] | Attributes of the API Product |
| proxies                | string[]    | Proxies of the API Product |
| environments           | string[]    | Environments of the API Product |
| apiResources           | string[]    | API Resources of the API Product |
| quota                  | Quota       | Quota of the API Product |
| quotaInterval          | string      | Quota interval of the API Product |
| quotaTimeUnit          | string      | Quota time unit of the API Product |
| scopes                 | string[]    | Scopes of the API Product |

### Attribute Entity

| Property | Type   | Description             |
|------------------------|--------|-------------------------|
| name                   | string | Name of the Attribute |
| value                  | string | Value of the Attribute |


## Operations

### List all API Products

Using the `get` method, you can get all API Products in your organization.
```php
$products = \Lordjoo\Apigee\Facades\Apigee::apiProduct()->get();
```
the `get` method will return a Collection of [ApiProduct](#apiproduct-entity) entities.

### Get an API Product

Using the `find` method, you can get an API Product by it's name.

```php
$product = \Lordjoo\Apigee\Facades\Apigee::apiProduct()->find($name);
```

### Create an API Product

Using the `create` method, you can create an API Product. 
the `create` method accepts one parameter `$data` 
which is an array of the API Product properties [APIProductRequest](https://apidocs.apigee.com/docs/api-products/1/types/APIProductRequest)

```php
$product = \Lordjoo\Apigee\Facades\Apigee::apiProduct()->create($data);
```

If the API Product is created successfully, the method will return an instance of [ApiProduct](#apiproduct-entity) entity.

### Update an API Product

Using the `update` method, you can update an API Product,
the update method accepts two parameters `$name` and `$data` 
where `$name` is the name of the API Product you want to update and `$data` is an array of the API Product properties [APIProductRequest](https://apidocs.apigee.com/docs/api-products/1/types/APIProductRequest)

```php
$product = \Lordjoo\Apigee\Facades\Apigee::apiProduct()->update($name, $data);
```

If the API Product is updated successfully, the method will return an instance of [ApiProduct](#apiproduct-entity) entity.

::: warning Note
The `update` method will replace the existing API Product with the new one based on the array of properties you passed, 
So if you want tp update let's say the attributes of the API Product,
you have to pass the existing attributes along with the new ones.
:::

### Delete an API Product

Using the `delete` method, you can delete an API Product by it's name.

```php
\Lordjoo\Apigee\Facades\Apigee::apiProduct()->delete($name);
```
