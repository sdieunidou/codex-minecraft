<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

/**
 * Class PluginRuntimeProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginRuntimeProblem extends PluginProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "The plugin '" . $this->getPluginName() . "' has a problem while running.";
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not pass event \w+ to (\w+) .*/',
            '/Task \S+ for (\w+) \S+ generated an exception/'
        ];
    }
}