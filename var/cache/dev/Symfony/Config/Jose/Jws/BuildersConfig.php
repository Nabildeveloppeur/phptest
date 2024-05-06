<?php

namespace Symfony\Config\Jose\Jws;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BuildersConfig 
{
    private $isPublic;
    private $signatureAlgorithms;
    private $tags;
    private $_usedProperties = [];

    /**
     * If true, the service will be public, else private.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function isPublic($value): static
    {
        $this->_usedProperties['isPublic'] = true;
        $this->isPublic = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function signatureAlgorithms(string $name, mixed $value): static
    {
        $this->_usedProperties['signatureAlgorithms'] = true;
        $this->signatureAlgorithms[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function tags(string $name, mixed $value): static
    {
        $this->_usedProperties['tags'] = true;
        $this->tags[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('is_public', $value)) {
            $this->_usedProperties['isPublic'] = true;
            $this->isPublic = $value['is_public'];
            unset($value['is_public']);
        }

        if (array_key_exists('signature_algorithms', $value)) {
            $this->_usedProperties['signatureAlgorithms'] = true;
            $this->signatureAlgorithms = $value['signature_algorithms'];
            unset($value['signature_algorithms']);
        }

        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $value['tags'];
            unset($value['tags']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['isPublic'])) {
            $output['is_public'] = $this->isPublic;
        }
        if (isset($this->_usedProperties['signatureAlgorithms'])) {
            $output['signature_algorithms'] = $this->signatureAlgorithms;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }

        return $output;
    }

}
