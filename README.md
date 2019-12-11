# polishnipvalidation
Polish Tax Identification Number - NIP(Numer Identyfikacji Podatkowej) Validator for Laravel 5.
You can install the package via composer:

	composer require falkosik/polishnipvalidator

If you are using Laravel 5.5, the service provider will automatically be discovered.

On earlier versions, you need to do that manually. You must add the Service Provider to the providers array in config/app.php:

	Falkosik\Polishnipvalidator\PolishNipValidatorRulesServiceProvider::class,

To translate messages you must create file:

	validation.php
	
in your project 

	resources/lang/pl or /en 
	
directory.
