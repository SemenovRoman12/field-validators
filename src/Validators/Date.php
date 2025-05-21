<?php
namespace Pynhaxd\Validation\Validators;
use DateTimeImmutable;
use Pynhaxd\Validation\Interfaces\BaseInterface;
/**
 * Формат YYYY-MM-DD, дата не должна быть в будущем.
 */
class Date implements BaseInterface
{
    public function fails($value): bool
    {
        if (!\is_string($value)) {
            return true;
        }

        $dt = DateTimeImmutable::createFromFormat('Y-m-d', $value);

        return !$dt
            || $dt->format('Y-m-d') !== $value
            || $dt > new DateTimeImmutable('today');
    }

    public function message(): string
    {
        return 'Введите дату в формате ГГГГ-ММ-ДД, не позже сегодняшней';
    }
}
