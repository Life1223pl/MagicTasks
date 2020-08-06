<?php

declare(strict_types=1);

namespace NumberApp;

interface NumberFormatter
{
    public function formatToString(Number $number): string;
}