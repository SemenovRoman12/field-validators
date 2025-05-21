<?php
namespace Pynhaxd\Validation\Validators;

use Pynhaxd\Validation\Interfaces\BaseInterface;

/**
 * ≥ 8 символов, заглавные + строчные буквы и хотя бы одна цифра.
 */
class Password implements BaseInterface
{
    public function fails($value): bool
    {
        return !\is_string($value)
            || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $value);
    }

    public function message(): string
    {
        return 'Пароль должен быть не короче 8 символов и содержать цифры и буквы разного регистра';
    }
}
