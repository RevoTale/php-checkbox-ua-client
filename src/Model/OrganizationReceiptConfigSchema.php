<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class OrganizationReceiptConfigSchema extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $textGlobalHeader;
    /**
     * @var string
     */
    protected $textGlobalFooter;
    /**
     * @var string
     */
    protected $htmlTitle;
    /**
     * @var string
     */
    protected $emailSubject;
    /**
     * @var string
     */
    protected $htmlGlobalHeader;
    /**
     * @var string
     */
    protected $htmlGlobalFooter;
    /**
     * @var string
     */
    protected $htmlBodyStyle;
    /**
     * @var string
     */
    protected $htmlReceiptStyle;
    /**
     * @var string
     */
    protected $htmlRulerStyle;
    /**
     * @var string
     */
    protected $htmlLightBlockStyle;
    /**
     * @var ShortOrganizationModel
     */
    protected $organization;

    public function getTextGlobalHeader(): string
    {
        return $this->textGlobalHeader;
    }

    public function setTextGlobalHeader(string $textGlobalHeader): self
    {
        $this->initialized['textGlobalHeader'] = true;
        $this->textGlobalHeader = $textGlobalHeader;

        return $this;
    }

    public function getTextGlobalFooter(): string
    {
        return $this->textGlobalFooter;
    }

    public function setTextGlobalFooter(string $textGlobalFooter): self
    {
        $this->initialized['textGlobalFooter'] = true;
        $this->textGlobalFooter = $textGlobalFooter;

        return $this;
    }

    public function getHtmlTitle(): string
    {
        return $this->htmlTitle;
    }

    public function setHtmlTitle(string $htmlTitle): self
    {
        $this->initialized['htmlTitle'] = true;
        $this->htmlTitle = $htmlTitle;

        return $this;
    }

    public function getEmailSubject(): string
    {
        return $this->emailSubject;
    }

    public function setEmailSubject(string $emailSubject): self
    {
        $this->initialized['emailSubject'] = true;
        $this->emailSubject = $emailSubject;

        return $this;
    }

    public function getHtmlGlobalHeader(): string
    {
        return $this->htmlGlobalHeader;
    }

    public function setHtmlGlobalHeader(string $htmlGlobalHeader): self
    {
        $this->initialized['htmlGlobalHeader'] = true;
        $this->htmlGlobalHeader = $htmlGlobalHeader;

        return $this;
    }

    public function getHtmlGlobalFooter(): string
    {
        return $this->htmlGlobalFooter;
    }

    public function setHtmlGlobalFooter(string $htmlGlobalFooter): self
    {
        $this->initialized['htmlGlobalFooter'] = true;
        $this->htmlGlobalFooter = $htmlGlobalFooter;

        return $this;
    }

    public function getHtmlBodyStyle(): string
    {
        return $this->htmlBodyStyle;
    }

    public function setHtmlBodyStyle(string $htmlBodyStyle): self
    {
        $this->initialized['htmlBodyStyle'] = true;
        $this->htmlBodyStyle = $htmlBodyStyle;

        return $this;
    }

    public function getHtmlReceiptStyle(): string
    {
        return $this->htmlReceiptStyle;
    }

    public function setHtmlReceiptStyle(string $htmlReceiptStyle): self
    {
        $this->initialized['htmlReceiptStyle'] = true;
        $this->htmlReceiptStyle = $htmlReceiptStyle;

        return $this;
    }

    public function getHtmlRulerStyle(): string
    {
        return $this->htmlRulerStyle;
    }

    public function setHtmlRulerStyle(string $htmlRulerStyle): self
    {
        $this->initialized['htmlRulerStyle'] = true;
        $this->htmlRulerStyle = $htmlRulerStyle;

        return $this;
    }

    public function getHtmlLightBlockStyle(): string
    {
        return $this->htmlLightBlockStyle;
    }

    public function setHtmlLightBlockStyle(string $htmlLightBlockStyle): self
    {
        $this->initialized['htmlLightBlockStyle'] = true;
        $this->htmlLightBlockStyle = $htmlLightBlockStyle;

        return $this;
    }

    public function getOrganization(): ShortOrganizationModel
    {
        return $this->organization;
    }

    public function setOrganization(ShortOrganizationModel $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
