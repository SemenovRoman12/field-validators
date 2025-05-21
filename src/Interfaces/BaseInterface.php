<?php
namespace Pynhaxd\Validation\Interfaces;

/**
 * Базовый контракт для правил.
 */
interface BaseInterface
{
    /**
     * Возвращает true, если значение НЕ прошло проверку.
     */
    public function fails(mixed $value): bool;

    /**
     * Сообщение об ошибке (на русском).
     */
    public function message(): string;
}
