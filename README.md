
# About
Checkbox.ua have OpenAPI specification (https://api.checkbox.in.ua/api/openapi.json) 
that is incorrectly described in many places.
For example, lack of nullable union types and different datetime format for the semantically same type of field. 
That causes generated client libraries to throw unexpected error.

Initial library code was generated by [JanePHP](https://github.com/janephp/janephp) (Thanks, for a great project!)

That code was modified manually, nullables was added and a specific date format used for different fields.

General logic is still handled by [JanePHP runtime](https://github.com/janephp/janephp) 

## Installation
```bash
composer install revotale/checkbox-ua
```

## Usage
Example with [signing in cashier with pin code and licence key](https://api.checkbox.in.ua/api/docs#/Касир/sign_in_cashier_api_v1_cashier_signin_post).

```php
<?php
declare(strict_types=1)

$client = Client::create();
$payload = new CashierSignInPinCode();
$payload->setPinCode($pinCode);
$client->signInCashierApiV1CashierSigninPost()
```
