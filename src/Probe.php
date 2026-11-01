<?php

declare(strict_types=1);

namespace TosMedia\GateProbe;

/**
 * Minimale Logik, damit PHPStan und Codex im Probe-Repository etwas zu prüfen haben.
 * G6-3b: erster Pull Request der Entwickler-App; reine Kommentarzeile ohne fachliche Wirkung.
 */
final class Probe
{
    /**
     * @param list<int> $werte
     */
    public static function summe(array $werte): int
    {
        $summe = 0;
        foreach ($werte as $wert) {
            $summe += $wert;
        }

        return $summe;
    }
}
