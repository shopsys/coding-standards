<?php

namespace ShopSys\CodingStandards\Sniff;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

/**
 * Inspired by
 * @see https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/blob/master/WordPress/Sniffs/VIP/SuperGlobalInputUsageSniff.php
 */
final class ForbiddenSuperGlobalSniff implements Sniff
{
    /**
     * @var string[]
     */
    private $superglobalVariables = ['$_COOKIE', '$_GET', '$_FILES', '$_POST', '$_REQUEST', '$_SERVER'];

    /**
     * @return int[]
     */
    public function register()
    {
        return [T_VARIABLE];
    }

    /**
     * @param int $position
     */
    public function process(File $file, $position)
    {
        $tokens = $file->getTokens();
        $currentToken = $tokens[$position];

        if (! in_array($currentToken['content'], $this->superglobalVariables, true ) ) {
            return;
        }

        $file->addError(
            sprintf('Super global %s is forbidden', $currentToken['content']),
            $position,
            self::class
        );
    }
}