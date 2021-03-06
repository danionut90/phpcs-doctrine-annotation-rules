<?php declare(strict_types = 1);

namespace DoctrineAnnotationCodingStandard\Types;

use DoctrineAnnotationCodingStandard\ImportClassMap;

class ArrayType implements Type, QualifyableObjectType
{
    use QualifyViaItemTypeDelegationTrait;

    /**
     * @var Type
     */
    private $itemType;

    public function __construct(Type $itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * @return Type
     */
    public function getItemType(): Type
    {
        return $this->itemType;
    }

    /**
     * @param string|null $namespace
     * @param ImportClassMap $imports
     * @return string
     */
    public function toString(string $namespace = null, ImportClassMap $imports): string
    {
        if ($this->itemType instanceof MixedType) {
            return 'array';
        } else {
            return \sprintf('%s[]', $this->itemType->toString($namespace, $imports));
        }
    }

    /**
     * @param Type $other
     * @return bool
     */
    public function isEqual(Type $other): bool
    {
        return $other instanceof self &&
            $this->itemType->isEqual($other->itemType);
    }
}
