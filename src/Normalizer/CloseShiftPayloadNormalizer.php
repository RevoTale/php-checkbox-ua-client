<?php

namespace Vendor\Library\Generated\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;
use function is_array;

class CloseShiftPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CloseShiftPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CloseShiftPayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\CloseShiftPayload();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('skip_client_name_check', $data)) {
            $object->setSkipClientNameCheck($data['skip_client_name_check']);
            unset($data['skip_client_name_check']);
        }
        if (array_key_exists('report', $data)) {
            $object->setReport($this->denormalizer->denormalize($data['report'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CloseShiftPayloadReport', 'json', $context));
            unset($data['report']);
        }
        if (array_key_exists('fiscal_code', $data)) {
            $object->setFiscalCode($data['fiscal_code']);
            unset($data['fiscal_code']);
        }
        if (array_key_exists('fiscal_date', $data)) {
            $object->setFiscalDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['fiscal_date']));
            unset($data['fiscal_date']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('skipClientNameCheck') && null !== $object->getSkipClientNameCheck()) {
            $data['skip_client_name_check'] = $object->getSkipClientNameCheck();
        }
        if ($object->isInitialized('report') && null !== $object->getReport()) {
            $data['report'] = $this->normalizer->normalize($object->getReport(), 'json', $context);
        }
        if ($object->isInitialized('fiscalCode') && null !== $object->getFiscalCode()) {
            $data['fiscal_code'] = $object->getFiscalCode();
        }
        if ($object->isInitialized('fiscalDate') && null !== $object->getFiscalDate()) {
            $data['fiscal_date'] = $object->getFiscalDate()->format('Y-m-d\\TH:i:s.uP');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\CloseShiftPayload' => false];
    }
}
