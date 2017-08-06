<?php declare(strict_types = 1);

namespace DoctrineAnnotationCodingStandard\Types;

class MixedType implements Type
{
    /**
     * @param string|null $namespace
     * @param string[] $imports
     * @return string
     */
    public function toString(string $namespace = null, array $imports): string
    {
        return 'mixed';
    }
}
