<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\ShiftWithCashierAndCashRegister;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class ShiftWithCashierAndCashRegisterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ShiftWithCashierAndCashRegister' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\ShiftWithCashierAndCashRegister' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ShiftWithCashierAndCashRegister();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
            unset($data['serial']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (array_key_exists('z_report', $data)) {
            $object->setZReport($this->denormalizer->denormalize($data['z_report'], 'RevoTale\\CheckboxUA\\Model\\ReportModel', 'json', $context));
            unset($data['z_report']);
        }
        if (array_key_exists('opened_at', $data)) {
            $object->setOpenedAt(null === $data['opened_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['opened_at']));
            unset($data['opened_at']);
        }
        if (array_key_exists('closed_at', $data)) {
            $object->setClosedAt(null === $data['closed_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['closed_at']));
            unset($data['closed_at']);
        }
        if (array_key_exists('initial_transaction', $data)) {
            $object->setInitialTransaction($this->denormalizer->denormalize($data['initial_transaction'], 'RevoTale\\CheckboxUA\\Model\\ShortTransaction', 'json', $context));
            unset($data['initial_transaction']);
        }
        if (array_key_exists('closing_transaction', $data)) {
            $object->setClosingTransaction($this->denormalizer->denormalize($data['closing_transaction'], 'RevoTale\\CheckboxUA\\Model\\ShortTransaction', 'json', $context));
            unset($data['closing_transaction']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('balance', $data)) {
            $object->setBalance($this->denormalizer->denormalize($data['balance'], 'RevoTale\\CheckboxUA\\Model\\BalanceModel', 'json', $context));
            unset($data['balance']);
        }
        if (array_key_exists('taxes', $data)) {
            $values = [];
            foreach ($data['taxes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'RevoTale\\CheckboxUA\\Model\\ShiftTaxModel', 'json', $context);
            }
            $object->setTaxes($values);
            unset($data['taxes']);
        }
        if (array_key_exists('emergency_close', $data)) {
            $object->setEmergencyClose($data['emergency_close']);
            unset($data['emergency_close']);
        }
        if (array_key_exists('emergency_close_details', $data)) {
            $object->setEmergencyCloseDetails($data['emergency_close_details']);
            unset($data['emergency_close_details']);
        }
        if (array_key_exists('cash_register', $data)) {
            $object->setCashRegister($this->denormalizer->denormalize($data['cash_register'], 'RevoTale\\CheckboxUA\\Model\\CashRegisterModel', 'json', $context));
            unset($data['cash_register']);
        }
        if (array_key_exists('cashier', $data)) {
            $object->setCashier($this->denormalizer->denormalize($data['cashier'], 'RevoTale\\CheckboxUA\\Model\\CashierModel', 'json', $context));
            unset($data['cashier']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['id'] = $object->getId();
        $data['serial'] = $object->getSerial();
        $data['status'] = $object->getStatus();
        if ($object->isInitialized('zReport') && null !== $object->getZReport()) {
            $data['z_report'] = $this->normalizer->normalize($object->getZReport(), 'json', $context);
        }
        if ($object->isInitialized('openedAt') && null !== $object->getOpenedAt()) {
            $data['opened_at'] = $object->getOpenedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('closedAt') && null !== $object->getClosedAt()) {
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('initialTransaction') && null !== $object->getInitialTransaction()) {
            $data['initial_transaction'] = $this->normalizer->normalize($object->getInitialTransaction(), 'json', $context);
        }
        if ($object->isInitialized('closingTransaction') && null !== $object->getClosingTransaction()) {
            $data['closing_transaction'] = $this->normalizer->normalize($object->getClosingTransaction(), 'json', $context);
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('balance') && null !== $object->getBalance()) {
            $data['balance'] = $this->normalizer->normalize($object->getBalance(), 'json', $context);
        }
        $values = [];
        foreach ($object->getTaxes() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['taxes'] = $values;
        if ($object->isInitialized('emergencyClose') && null !== $object->getEmergencyClose()) {
            $data['emergency_close'] = $object->getEmergencyClose();
        }
        if ($object->isInitialized('emergencyCloseDetails') && null !== $object->getEmergencyCloseDetails()) {
            $data['emergency_close_details'] = $object->getEmergencyCloseDetails();
        }
        $data['cash_register'] = $this->normalizer->normalize($object->getCashRegister(), 'json', $context);
        $data['cashier'] = $this->normalizer->normalize($object->getCashier(), 'json', $context);
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['RevoTale\\CheckboxUA\\Model\\ShiftWithCashierAndCashRegister' => false];
    }
}
