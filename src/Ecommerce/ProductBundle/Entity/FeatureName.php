<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureName
 */
class FeatureName
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $featureValues;
    private $categories;

    private $id_parent;
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
     * Set name
     *
     * @param string $name
     * @return FeatureName
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->featureValues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add featureValues
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureValue $featureValues
     * @return FeatureName
     */
    public function addFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValues)
    {
        $this->featureValues[] = $featureValues;

        return $this;
    }

    /**
     * Remove featureValues
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureValue $featureValues
     */
    public function removeFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValues)
    {
        $this->featureValues->removeElement($featureValues);
    }

    /**
     * Get featureValues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatureValues()
    {
        return $this->featureValues;
    }

    /**
     * Set productDerived
     *
     * @param \Ecommerce\ProductBundle\Entity\ProductDerived $productDerived
     * @return FeatureName
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
     * @var integer
     */
    private $idParent;


    /**
     * Set idParent
     *
     * @param integer $idParent
     * @return FeatureName
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return integer
     */
    public function getIdParent()
    {
        return $this->idParent;
    }
}
