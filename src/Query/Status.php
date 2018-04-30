<?php
declare(strict_types=1);

namespace Istyle\KsqlClient\Query;

use Fig\Http\Message\RequestMethodInterface;
use Psr\Http\Message\ResponseInterface;
use Istyle\KsqlClient\Mapper\AbstractMapper;
use Istyle\KsqlClient\Mapper\StatusMapper;

/**
 * Class Status
 */
final class Status implements QueryInterface
{
    /**
     * {@inheritdoc}
     */
    public function httpMethod(): string
    {
        return RequestMethodInterface::METHOD_GET;
    }

    /**
     * {@inheritdoc}
     */
    public function uri(): string
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [];
    }

    /**
     * @param ResponseInterface $response
     *
     * @return AbstractMapper
     */
    public function queryResult(ResponseInterface $response): AbstractMapper
    {
        return new StatusMapper($response);
    }
}
