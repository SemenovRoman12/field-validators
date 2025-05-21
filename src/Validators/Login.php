<?php
namespace Pynhaxd\Validation\Validators;

use Pynhaxd\Validation\Interfaces\BaseInterface;

/**
 * Латиница, цифры, . _ - ; длина 4-32.
 */
class Login implements BaseInterface
{
    public function fails($value): bool
    {
        return !\is_string($value)
            || !preg_match('/^[a-z0-9._-]{4,32}$/i', $value);
    }

    public function message(): string
    {
        return 'Логин может содержать латиницу, цифры, . _ - и быть длиной 4-32 символа';
    }
}
