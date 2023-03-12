<?php

declare(strict_types=1);

namespace winwin\mapper\attribute;

#[\Attribute(\Attribute::TARGET_METHOD)]
class MappingTarget
{
    public function __construct(public readonly string $value)
    {
    }

}