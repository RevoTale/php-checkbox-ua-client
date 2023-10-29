<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class IntegrationInfoResponseSchema extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $url;
    /**
     * @var DateTime
     */
    protected $lastErrorDate;
    /**
     * @var string
     */
    protected $lastErrorMessage;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $key;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getLastErrorDate(): DateTime
    {
        return $this->lastErrorDate;
    }

    public function setLastErrorDate(DateTime $lastErrorDate): self
    {
        $this->initialized['lastErrorDate'] = true;
        $this->lastErrorDate = $lastErrorDate;

        return $this;
    }

    public function getLastErrorMessage(): string
    {
        return $this->lastErrorMessage;
    }

    public function setLastErrorMessage(string $lastErrorMessage): self
    {
        $this->initialized['lastErrorMessage'] = true;
        $this->lastErrorMessage = $lastErrorMessage;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }
}
