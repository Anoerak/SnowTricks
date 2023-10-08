<?php

namespace Symfony\Config\StofDoctrineExtensions;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ClassConfig 
{
    private $translatable;
    private $timestampable;
    private $blameable;
    private $sluggable;
    private $tree;
    private $loggable;
    private $sortable;
    private $softdeleteable;
    private $uploadable;
    private $referenceIntegrity;
    private $_usedProperties = [];

    /**
     * @default 'Gedmo\\Translatable\\TranslatableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function translatable($value): static
    {
        $this->_usedProperties['translatable'] = true;
        $this->translatable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Timestampable\\TimestampableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timestampable($value): static
    {
        $this->_usedProperties['timestampable'] = true;
        $this->timestampable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Blameable\\BlameableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blameable($value): static
    {
        $this->_usedProperties['blameable'] = true;
        $this->blameable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Sluggable\\SluggableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sluggable($value): static
    {
        $this->_usedProperties['sluggable'] = true;
        $this->sluggable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Tree\\TreeListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tree($value): static
    {
        $this->_usedProperties['tree'] = true;
        $this->tree = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Loggable\\LoggableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loggable($value): static
    {
        $this->_usedProperties['loggable'] = true;
        $this->loggable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Sortable\\SortableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortable($value): static
    {
        $this->_usedProperties['sortable'] = true;
        $this->sortable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\SoftDeleteable\\SoftDeleteableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function softdeleteable($value): static
    {
        $this->_usedProperties['softdeleteable'] = true;
        $this->softdeleteable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\Uploadable\\UploadableListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadable($value): static
    {
        $this->_usedProperties['uploadable'] = true;
        $this->uploadable = $value;

        return $this;
    }

    /**
     * @default 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function referenceIntegrity($value): static
    {
        $this->_usedProperties['referenceIntegrity'] = true;
        $this->referenceIntegrity = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('translatable', $value)) {
            $this->_usedProperties['translatable'] = true;
            $this->translatable = $value['translatable'];
            unset($value['translatable']);
        }

        if (array_key_exists('timestampable', $value)) {
            $this->_usedProperties['timestampable'] = true;
            $this->timestampable = $value['timestampable'];
            unset($value['timestampable']);
        }

        if (array_key_exists('blameable', $value)) {
            $this->_usedProperties['blameable'] = true;
            $this->blameable = $value['blameable'];
            unset($value['blameable']);
        }

        if (array_key_exists('sluggable', $value)) {
            $this->_usedProperties['sluggable'] = true;
            $this->sluggable = $value['sluggable'];
            unset($value['sluggable']);
        }

        if (array_key_exists('tree', $value)) {
            $this->_usedProperties['tree'] = true;
            $this->tree = $value['tree'];
            unset($value['tree']);
        }

        if (array_key_exists('loggable', $value)) {
            $this->_usedProperties['loggable'] = true;
            $this->loggable = $value['loggable'];
            unset($value['loggable']);
        }

        if (array_key_exists('sortable', $value)) {
            $this->_usedProperties['sortable'] = true;
            $this->sortable = $value['sortable'];
            unset($value['sortable']);
        }

        if (array_key_exists('softdeleteable', $value)) {
            $this->_usedProperties['softdeleteable'] = true;
            $this->softdeleteable = $value['softdeleteable'];
            unset($value['softdeleteable']);
        }

        if (array_key_exists('uploadable', $value)) {
            $this->_usedProperties['uploadable'] = true;
            $this->uploadable = $value['uploadable'];
            unset($value['uploadable']);
        }

        if (array_key_exists('reference_integrity', $value)) {
            $this->_usedProperties['referenceIntegrity'] = true;
            $this->referenceIntegrity = $value['reference_integrity'];
            unset($value['reference_integrity']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['translatable'])) {
            $output['translatable'] = $this->translatable;
        }
        if (isset($this->_usedProperties['timestampable'])) {
            $output['timestampable'] = $this->timestampable;
        }
        if (isset($this->_usedProperties['blameable'])) {
            $output['blameable'] = $this->blameable;
        }
        if (isset($this->_usedProperties['sluggable'])) {
            $output['sluggable'] = $this->sluggable;
        }
        if (isset($this->_usedProperties['tree'])) {
            $output['tree'] = $this->tree;
        }
        if (isset($this->_usedProperties['loggable'])) {
            $output['loggable'] = $this->loggable;
        }
        if (isset($this->_usedProperties['sortable'])) {
            $output['sortable'] = $this->sortable;
        }
        if (isset($this->_usedProperties['softdeleteable'])) {
            $output['softdeleteable'] = $this->softdeleteable;
        }
        if (isset($this->_usedProperties['uploadable'])) {
            $output['uploadable'] = $this->uploadable;
        }
        if (isset($this->_usedProperties['referenceIntegrity'])) {
            $output['reference_integrity'] = $this->referenceIntegrity;
        }

        return $output;
    }

}
