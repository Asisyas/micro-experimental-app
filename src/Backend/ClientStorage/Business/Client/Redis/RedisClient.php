<?php

namespace App\Backend\ClientStorage\Business\Client\Redis;

use App\Backend\ClientStorage\Business\Client\ClientInterface;
use App\Shared\Generated\DTO\ClientStorage\DeleteTransfer;
use App\Shared\Generated\DTO\ClientStorage\PostTransfer;
use App\Shared\Generated\DTO\ClientStorage\PutTransfer;

class RedisClient implements ClientInterface
{
    public function __construct(private readonly \Redis $redis)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function put(PutTransfer $putTransfer): void
    {
        $this->redis->set(
            $this->createKey(
                $putTransfer->getUuid(),
                $putTransfer->getIndex()
            ),
            $this->createDataToJson($putTransfer->getData())
        );
    }

    /**
     * {@inheritDoc}
     */
    public function post(PostTransfer $postTransfer): void
    {
        $this->redis->set(
            $this->createKey(
                $postTransfer->getUuid(),
                $postTransfer->getIndex()
            ),
            $this->createDataToJson( $postTransfer->getData())
        );
    }

    /**
     * {@inheritDoc}
     */
    public function delete(DeleteTransfer $deleteTransfer): void
    {
        $this->redis->del(
            $this->createKey(
                $deleteTransfer->getUuid(),
                $deleteTransfer->getIndex()
            )
        );
    }

    /**
     * @param array $source
     * @return string
     */
    protected function createDataToJson(array $source): string
    {
        return json_encode($source, JSON_PRETTY_PRINT);
    }

    /**
     * @param string $uuid
     * @param string $indexName
     *
     * @return string
     */
    protected function createKey(string $uuid, string $indexName): string
    {
        return $indexName . '_' . $uuid;
    }
}