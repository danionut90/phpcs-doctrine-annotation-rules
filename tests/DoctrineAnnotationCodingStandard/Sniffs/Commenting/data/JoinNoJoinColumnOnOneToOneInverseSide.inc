<?php

namespace Foo\Bar;

use Doctrine\ORM\Mapping as ORM;

class JoinNoJoinColumnOnOneToOneInverseSide
{
    /**
     * @ORM\OneToOne(targetEntity="Address", mappedBy="whatever")
     * @var Address
     */
    private $foo;
}
