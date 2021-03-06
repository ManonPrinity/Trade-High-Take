<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Entity\ProductDerivedRepository")
 * @UniqueEntity(fields="name_derived", message="Name is already in use")
 * @ORM\Table(name="products_derived")
 */
class ProductDerived
{

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameDerived;

      /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\ProductBundle\Entity\Product", inversedBy="productsDerived", cascade={"persist", 'remove'})
    * @ORM\JoinTable(name="products_derived")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="cascade")
    */
    private $product;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var int
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
    * @ORM\OneToMany(targetEntity="Media", mappedBy="productDerived", cascade={"persist, remove"})
    */
    private $medias;

    private $featureDerivedValues;
    private $featureValues;


    public function __construct()
    {
        $this->createdAt = new \Datetime();
                $this->updatedAt = new \Datetime();

        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();

    }



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
     * Set nameDerived
     *
     * @param string $nameDerived
     * @return ProductDerived
     */
    public function setNameDerived($nameDerived)
    {
        $this->nameDerived = $nameDerived;

        return $this;
    }

    /**
     * Get nameDerived
     *
     * @return string
     */
    public function getNameDerived()
    {
        return $this->nameDerived;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return ProductDerived
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return ProductDerived
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return ProductDerived
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProductDerived
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return ProductDerived
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Add medias
     *
     * @param \Ecommerce\ProductBundle\Entity\Media $medias
     * @return ProductDerived
     */
    public function addMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {
        $this->medias[] = $medias;

        return $this;
    }

    public function setMedias($medias)
    {
        $this->medias = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \Ecommerce\ProductBundle\Entity\Media $medias
     */
    public function removeMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Add featureDerivedValues
     *
     * @param \Ecommerce\ProductBundle\Entity\Feature $featureDerivedValues
     * @return ProductDerived
     */
    public function addFeatureDerivedValue(\Ecommerce\ProductBundle\Entity\Feature $featureDerivedValues)
    {
        $this->featureDerivedValues[] = $featureDerivedValues;

        return $this;
    }

    /**
     * Remove featureDerivedValues
     *
     * @param \Ecommerce\ProductBundle\Entity\Feature $featureDerivedValues
     */
    public function removeFeatureDerivedValue(\Ecommerce\ProductBundle\Entity\Feature $featureDerivedValues)
    {
        $this->featureDerivedValues->removeElement($featureDerivedValues);
    }

    /**
     * Get featureDerivedValues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatureDerivedValues()
    {
        return $this->featureDerivedValues;
    }

    /**
     * Set product
     *
     * @param \Ecommerce\ProductBundle\Entity\Product $product
     * @return ProductDerived
     */
    public function setProduct(\Ecommerce\ProductBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Ecommerce\ProductBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
