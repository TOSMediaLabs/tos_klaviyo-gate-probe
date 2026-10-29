<?php

declare(strict_types=1);

namespace Probe;

/**
 * Künstliche Beispielklasse für den Review-Test. Keine Fachlogik.
 */
final class Probe
{
    public static function summe(int ...$werte): int
    {
        return array_sum($werte);
    }
}
