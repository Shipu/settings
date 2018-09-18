# Setting
Persistent settings in Laravel

### Features

* Settings

## Installation

Setting is a Laravel package so you can install it via Composer. Run this command in your terminal from your project directory:

```sh
composer require shipu/settings
```
Now run this command in your terminal to publish this package resources:

```
php artisan vendor:publish --provider="Shipu\Settings\Providers\SettingsServiceProvider"
```
If you run `vendor:publish` then you have add below code in your settings model 
```php
protected $table = 'site_settings'; // you can change your database table name.
public $timestamps = false;
``` 

## Use Traits
Use `GeTraits` traits in your model.

## API List
- [all](https://github.com/shipu/settings#all)
- [set](https://github.com/shipu/settings#set)
- [get](https://github.com/shipu/settings#get)
- [has](https://github.com/shipu/settings#has)
- [forget](https://github.com/shipu/settings#current)

### all

For getting all settings value paired by key you can use `all` method.

```php
YourSettingModel::all(); // return collection
```

### set

For set value you can use `set` method.

```php
YourSettingModel::set('key', 'value'); // return null
```
Multiple data store by key
```php
YourSettingModel::set(['key1' => 'value', 'key2' => ['subkey2' => 'value-of-subkey2'] ]); // return null
```

### get

For get value you can use `get` method.

```php
YourSettingModel::get('key'); // return collection or string or null
```
Fallback Support:
```php
YourSettingModel::get('key2.subkey2'); // return collection or string or null
```
You can also getting all setting value
```php
YourSettingModel::get(); // return collection
```

### has 
For checking key exists or not you can use `has` method.

```php
YourSettingModel::has('key'); // return bool
```
Multiple key Forget:
```php
YourSettingModel::has(['key1', 'key2']); // return collection
```

### forget

For delete key you can use `forget` method.

```php
YourSettingModel::forget('key'); // return integer 0 or 1
```
Multiple key Forget:
```php
YourSettingModel::forget(['key1', 'key2']); // return interger - how many key successfully delete.
```
