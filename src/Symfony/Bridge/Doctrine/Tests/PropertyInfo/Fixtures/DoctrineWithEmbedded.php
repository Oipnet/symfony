<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Embedded;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity
 *
 * @author Udaltsov Valentin <udaltsov.valentin@gmail.com>
 */
#[Entity]
class DoctrineWithEmbedded
{
    /**
     * @Id
     * @Column(type="smallint")
     */
    #[Id, Column(type: 'smallint')]
    public $id;

    /**
     * @Embedded(class="DoctrineEmbeddable")
     */
    #[Embedded(class: DoctrineEmbeddable::class)]
    protected $embedded;
}
