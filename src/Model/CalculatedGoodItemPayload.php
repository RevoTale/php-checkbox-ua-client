<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CalculatedGoodItemPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var CalculatedGoodDetailsPayload
     */
    protected $good;
    /**
     * @var string
     */
    protected $goodId;
    /**
     * @var int
     */
    protected $sum;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var bool
     */
    protected $isReturn = false;
    /**
     * @var bool
     */
    protected $isWinningsPayout;
    /**
     * @var CalculatedGoodTaxPayload[]
     */
    protected $taxes;
    /**
     * @var CalculatedDiscountPayload[]
     */
    protected $discounts;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getGood(): CalculatedGoodDetailsPayload
    {
        return $this->good;
    }

    public function setGood(CalculatedGoodDetailsPayload $good): self
    {
        $this->initialized['good'] = true;
        $this->good = $good;

        return $this;
    }

    public function getGoodId(): ?string
    {
        return $this->goodId;
    }

    public function setGoodId(?string $goodId): self
    {
        $this->initialized['goodId'] = true;
        $this->goodId = $goodId;

        return $this;
    }

    public function getSum(): int
    {
        return $this->sum;
    }

    public function setSum(int $sum): self
    {
        $this->initialized['sum'] = true;
        $this->sum = $sum;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getIsReturn(): bool
    {
        return $this->isReturn;
    }

    public function setIsReturn(bool $isReturn): self
    {
        $this->initialized['isReturn'] = true;
        $this->isReturn = $isReturn;

        return $this;
    }

    public function getIsWinningsPayout(): bool
    {
        return $this->isWinningsPayout;
    }

    public function setIsWinningsPayout(bool $isWinningsPayout): self
    {
        $this->initialized['isWinningsPayout'] = true;
        $this->isWinningsPayout = $isWinningsPayout;

        return $this;
    }

    /**
     * @return CalculatedGoodTaxPayload[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param CalculatedGoodTaxPayload[] $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * @return CalculatedDiscountPayload[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @param CalculatedDiscountPayload[] $discounts
     */
    public function setDiscounts(array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }
}
