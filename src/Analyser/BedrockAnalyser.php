<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockAuthenticationWhitelistProblem;

/**
 * Class BedrockAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class BedrockAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(BedrockVersionInformation::class);
        $this->addPossibleInsightClass(BedrockAuthenticationWhitelistProblem::class);
    }
}