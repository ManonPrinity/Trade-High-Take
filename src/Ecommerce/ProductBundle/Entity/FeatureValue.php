<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureValue
 */
class FeatureValue
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $value;

    private $featureName;
    private $featureDerivedValues;
    private $productDerived;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return FeatureValue
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set featureName
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureName $featureName
     * @return FeatureValue
     */
    public function setFeatureName(\Ecommerce\ProductBundle\Entity\FeatureName $featureName = null)
    {
        $this->featureName = $featureName;
    
        return $this;
    }

    /**
     * Get featureName
     *
     * @return \Ecommerce\ProductBundle\Entity\FeatureName 
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }
}
