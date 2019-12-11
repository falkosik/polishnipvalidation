# polishnipvalidation
Polish Tax Identification Number - NIP(Numer Identyfikacji Podatkowej) Validator for Laravel 5.
You can install the package via composer:

	composer require falkosik/polishnipvalidator
	
# Setup
If you are using Laravel 5.5, the service provider will automatically be discovered.

On earlier versions, you need to do that manually. You must add the Service Provider to the providers array in config/app.php:

	Falkosik\Polishnipvalidator\PolishNipValidatorRulesServiceProvider::class,

To translate messages you must create file:

	validation.php
	
in your project 

	resources/lang/pl or /en 
	
directory.

# Usage
You have 1 new Validator rule:

- `nip`  - Checks if number is valid NIP number


# Code Authors
A special thanks to authors of [phpedia.pl](http://phpedia.pl/wiki/Walidacja_numeru_NIP), an original NIP validator creators that this package is based on.

# Packagist
View this package on Packagist.org: [falkosik/polishnipvalidator](https://packagist.org/packages/falkosik/polishnipvalidator)
