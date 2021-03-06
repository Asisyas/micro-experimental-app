<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Shared\Generated\DTO\User;

use DateTimeInterface;

final class UserCreateTransfer extends \Micro\Library\DTO\Object\AbstractDto
{
    protected string $username;
    protected array $roles;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    protected static function attributesMetadata(): array
    {
        return array (
          'username' =>
          array (
            'type' =>
            array (
              0 => 'string',
            ),
            'required' => true,
            'actionName' => 'username',
          ),
          'roles' =>
          array (
            'type' =>
            array (
              0 => 'array',
            ),
            'required' => true,
            'actionName' => 'roles',
          ),
        );
    }
}
