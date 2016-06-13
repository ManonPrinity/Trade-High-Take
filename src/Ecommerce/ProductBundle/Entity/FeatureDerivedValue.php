<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feature
 */
class FeatureDerivedValue
{
    /**
     * @var int
     */
    private $id;
    private $productDerived;
    private $featureValue;
    private $featureName;


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
     * Set productDerived
     *
     * @param \Ecommerce\ProductBundle\Entity\ProductDerived $productDerived
     * @return Feature
     */
    public function setProductDerived(\Ecommerce\ProductBundle\Entity\ProductDerived $productDerived = null)
    {
        $this->productDerived = $productDerived;

        return $this;
    }

    /**
     * Get productDerived
     *
     * @return \Ecommerce\ProductBundle\Entity\ProductDerived
     */
    public function getProductDerived()
    {
        return $this->productDerived;
    }

    /**
     * Set featureValue
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureValue $featureValue
     * @return Feature
     */
    public function setFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValue = null)
    {
        $this->featureValue = $featureValue;

        return $this;
    }

    /**
     * Get featureValue
     *
     * @return \Ecommerce\ProductBundle\Entity\FeatureValue
     */
    public function getFeatureValue()
    {
        return $this->featureValue;
    }
}
