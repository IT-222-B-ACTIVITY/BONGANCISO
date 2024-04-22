<?php

class CelciusConverter {
    public function convert($value, $fromU, $toU) {
        switch ($fromU) {
            case 'celsius':
                switch ($toU) {
                    case 'fahrenheit':
                        return ($value * 9/5) + 32;
                    case 'kelvin':
                        return $value + 273.15;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            case 'fahrenheit':
                switch ($toU) {
                    case 'celsius':
                        return ($value - 32) * 5/9;
                    case 'kelvin':
                        return ($value + 459.67) * 5/9;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            case 'kelvin':
                switch ($toU) {
                    case 'celsius':
                        return $value - 273.15;
                    case 'fahrenheit':
                        return ($value * 9/5) - 459.67;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            default:
                return "Unsupported conversion: $fromU to $toU";
        }
    }
}

$converter = new CelciusConverter();


$input_value = (40 - 32) * 5 / 9;

$result = $converter->convert($input_value, 'celsius', 'fahrenheit');
echo "Result: $result";

?>
