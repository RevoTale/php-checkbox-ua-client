<?php

namespace Vendor\Library\Generated\CheckboxUA\Endpoint;

class UpdateTransactionApiV1TransactionsTransactionIdPatch extends \Vendor\Library\Generated\CheckboxUA\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\CheckboxUA\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\CheckboxUA\Runtime\Client\EndpointTrait;
    protected $transaction_id;

    /**
     * Даний метод підписання даних більше не підтримується,.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     */
    public function __construct(string $transactionId, \Vendor\Library\Generated\CheckboxUA\Model\UpdateTransactionPayload $requestBody, array $headerParameters = [])
    {
        $this->transaction_id = $transactionId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{transaction_id}'], [$this->transaction_id], '/api/v1/transactions/{transaction_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\CheckboxUA\Model\UpdateTransactionPayload) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Client-Name', 'X-Client-Version', 'X-Access-Key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Client-Name', ['string']);
        $optionsResolver->addAllowedTypes('X-Client-Version', ['string']);
        $optionsResolver->addAllowedTypes('X-Access-Key', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Vendor\Library\Generated\CheckboxUA\Model\TransactionModel
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UpdateTransactionApiV1TransactionsTransactionIdPatchUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\TransactionModel', 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Vendor\Library\Generated\CheckboxUA\Exception\UpdateTransactionApiV1TransactionsTransactionIdPatchUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
