<?php
namespace Pynhaxd\Validation\Validators;

use Pynhaxd\Validation\Interfaces\BaseInterface;

/**
 * Разрешены русские буквы (включая Ё ё) и пробелы.
 */
class Name implements BaseInterface
{
    public function fails($value): bool
    {
        return !\is_string($value)
            || !preg_match('/^[А-ЯЁа-яё\s]+$/u', $value);
    }

    public function message(): string
    {
        return 'Разрешены только русские буквы и пробелы';
    }
}
