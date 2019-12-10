<?php
namespace Falkosik\Polishnipvalidator;

use Illuminate\Contracts\Validation\Rule;


class NipNumberRule implements Rule
{
    public function passes($attribute, $value)
    {
        $value = preg_replace('/[^0-9]+/', '', $value);
 
	if (strlen($value) !== 10) {
		return false;
	}
 
	$arrSteps = array(6, 5, 7, 2, 3, 4, 5, 6, 7);
	$intSum = 0;
 
	for ($i = 0; $i < 9; $i++) {
		$intSum += $arrSteps[$i] * $value[$i];
	}
 
	$int = $intSum % 11;
	$intControlNr = $int === 10 ? 0 : $int;
 
	if ($intControlNr == $value[9]) {
		return true;
	}
 
	return false;
    }

    public function message()
    {
        return trans('validation.nip') != 'validation.nip'
            ? trans('validation.nip')
            : trans('polishnipvalidator::validation.nip');
    }
}
