# Company

## Operations

### List all companies
Using the `get()` method you can get a collection of all companies in the organization.

```php
\Lordjoo\Apigee\Facades\Apigee::company()->get();
```

### Get a company by name
Using the `find()` method you can get a company by name.

```php
\Lordjoo\Apigee\Facades\Apigee::company()->find($name);
```

### Create a company
Using the `create()` method you can create a company,   
the `create()` method accepts one parameter `$data`
where `$data` is an array of the company properties [CompanyRequest](https://apidocs.apigee.com/docs/companies/1/types/CompanyRequest)

```php
\Lordjoo\Apigee\Facades\Apigee::company()->create($data);
```

### Update a company
Using the `update()` method you can update a company,   
the `update()` method accepts two parameters `$name` and `$data`
where `$name` is the name of the company you want to update
and `$data` is an array of the company properties [CompanyRequest](https://apidocs.apigee.com/docs/companies/1/types/CompanyRequest)

```php
\Lordjoo\Apigee\Facades\Apigee::company()->update($name, $data);
```

::: warning Note
To add new values or update existing values, submit the new or updated portion of the company profile along with the rest of the existing company profile, even if no values are changing.

To delete attributes from a company profile, submit the entire profile without the attributes that you want to delete.
:::

### Delete a company
Using the `delete()` method you can delete a company by it's name.

```php
\Lordjoo\Apigee\Facades\Apigee::company()->delete($name);
```

### Change the status of a company
Using the `updateStatus()` method you can change the status of a company by it's name.     
the `updateStatus()` method accepts two parameters `$name` and `$status`
where `$name` is the name of the company you want to update
and `$status` is the new status of the company. e.g. active, inactive.

```php
\Lordjoo\Apigee\Facades\Apigee::company()->updateStatus($name, $status);
```


## Entity

### Properties

| Property | Type       | Description |
| -------- |------------| ----------- |
| name | string     | The name of the company. |
| displayName | string     | The display name of the company. |
| organization | string     | The organization of the company. |
| status | string     | The status of the company. e.g. active, inactive. |
| createdAt | [Carbon](https://carbon.nesbot.com/docs/) | The date and time the company was created. |
| lastModifiedAt | [Carbon](https://carbon.nesbot.com/docs/)     | The date and time the company was last modified. |
| lastModifiedBy | Carbon     | The user who last modified the company. |
| createdBy | string     | The user who created the company. |

### Methods
A list of quick actions you can perform on the company entity without the need to use the operations bellow. 

#### deactivate()
change the status of the company to inactive.

#### activate()
change the status of the company to active.

#### update(array $data)
update the company properties.
```php
$company->update($data);
```

#### delete()
delete the company.

