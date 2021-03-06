<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Entity\ProductRepository")
 * @UniqueEntity(fields="name", message="Name is already in use")
 * @ORM\Table(name="products")
 */
class Product
{
    /**
    * @ORM\ManyToMany(targetEntity="Ecommerce\ProductBundle\Entity\Category", inversedBy="products", cascade={"persist"})
    * @ORM\JoinTable(name="product_category")
    * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="cascade", nullable=false)
    */
    private $categories;

    /**
    * @ORM\OneToMany(targetEntity="Ecommerce\ProductBundle\Entity\ProductDerived", mappedBy="product", cascade={"persist"})
    * @ORM\JoinTable(name="products_derived")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="cascade", nullable=false)
    */
    private $productsDerived;

     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $summary;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \Datetime();

        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productsDerived = new \Doctrine\Common\Collections\ArrayCollection();


    }

    public function addProductsDerived(ProductDerived $productDerived = null)
    {
        $this->productsDerived[] = $productDerived;

        return $this;
    }

    public function removeProductsDerived(ProductDerived $productDerived)
    {
       $this->productsDerived ->removeElement($productDerived);
   }

   public function getProductsDerived()
   {
    return $this->productsDerived;


   }

   public function addCategory(Category $category = null)
   {
    $this->categories[] = $category;

    return $this;
}

public function removeCategory(Category $category)
{
    $this->categories->removeElement($category);
}
public function setCategories(Category $category)
{
    $this->categories = $category;
}
public function getCategories()
{
    return $this->categories;
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
     * Set name
     *
     * @param string $name
     * @return Products
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
     * Set description
     *
     * @param string $description
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Products
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Products
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
       public function __toString() {
        return strval($this->getId());
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Product
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
}
