<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Shared\Generated\DTO\Category;

use DateTimeInterface;

final class CategoryDeleteTransfer extends \Micro\Library\DTO\Object\AbstractDto
{
    protected string $uuid;

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    protected static function attributesMetadata(): array
    {
        return array (
          'uuid' =>
          array (
            'type' =>
            array (
              0 => 'string',
            ),
            'required' => true,
            'actionName' => 'uuid',
          ),
        );
    }
}
