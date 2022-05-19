<?php
declare(strict_types=1);

namespace App\Shared\Generated\DTO\DataSource;

use Micro\Library\DTO\Object\AbstractDto;

/**
 * Autogenerated data transfer object.
 *
 */
class DataSourceTransfer extends AbstractDto
{
    /**
    * @var string    */
    protected string $uuid;

    /**
    * @var string    */
    protected string $name;

    /**
    * @var string    */
    protected string $type;


    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @returns array
     */
    public function toArray(): array
    {
        return [
            'uuid'       => ($this->uuid instanceof AbstractDto ? $this->uuid->toArray() : $this->uuid),
            'name'       => ($this->name instanceof AbstractDto ? $this->name->toArray() : $this->name),
            'type'       => ($this->type instanceof AbstractDto ? $this->type->toArray() : $this->type),
        ];
    }

    /**
    * {@inheritdoc}
    */
    protected function attributesMetadata(): array
    {
        return [
            'uuid' => [
                'is_collection'     =>   false ,
                'type'              => 'string',
                'actionName'        => 'Uuid',
                'required'          => true,
                'dto'               =>  false ,
            ],

            'name' => [
                'is_collection'     =>   false ,
                'type'              => 'string',
                'actionName'        => 'Name',
                'required'          => true,
                'dto'               =>  false ,
            ],

            'type' => [
                'is_collection'     =>   false ,
                'type'              => 'string',
                'actionName'        => 'Type',
                'required'          => true,
                'dto'               =>  false ,
            ],

        ];
    }
}
