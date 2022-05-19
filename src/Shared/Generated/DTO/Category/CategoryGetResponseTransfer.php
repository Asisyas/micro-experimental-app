<?php
declare(strict_types=1);

namespace App\Shared\Generated\DTO\Category;

use Micro\Library\DTO\Object\AbstractDto;

/**
 * Autogenerated data transfer object.
 *
 */
class CategoryGetResponseTransfer extends AbstractDto
{
    /**
    * @var CategoryTransfer    */
    protected CategoryTransfer $category;

    /**
    * @var integer    */
    protected integer $flag;


    /**
     * @return CategoryTransfer
     */
    public function getCategory(): CategoryTransfer
    {
        return $this->category;
    }

    /**
     * @param CategoryTransfer $category
     *
     * @return self
     */
    public function setCategory(CategoryTransfer $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFlag(): integer
    {
        return $this->flag;
    }

    /**
     * @param integer $flag
     *
     * @return self
     */
    public function setFlag(integer $flag): self
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * @returns array
     */
    public function toArray(): array
    {
        return [
            'category'       => ($this->category instanceof AbstractDto ? $this->category->toArray() : $this->category),
            'flag'       => ($this->flag instanceof AbstractDto ? $this->flag->toArray() : $this->flag),
        ];
    }

    /**
    * {@inheritdoc}
    */
    protected function attributesMetadata(): array
    {
        return [
            'category' => [
                'is_collection'     =>   false ,
                'type'              => 'CategoryTransfer',
                'actionName'        => 'Category',
                'required'          => true,
                'dto'               => 'App\Shared\Generated\DTO\Category\CategoryTransfer' ,
            ],

            'flag' => [
                'is_collection'     =>   false ,
                'type'              => 'integer',
                'actionName'        => 'Flag',
                'required'          => true,
                'dto'               =>  false ,
            ],

        ];
    }
}

