<?php
namespace Ecommerce\ProductBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Ecommerce\ProductBundle\Entity\Category;


use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Entity\CategoryRepository")
 * @ORM\Table(name="categories")
 * @UniqueEntity(fields="name", message="Name is already in use")
 */
class Category
{
    /*
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToMany(targetEntity="Ecommerce/ProductBundle/Product", mappedBy="categories", cascade={"persist, remove"})
    * @ORM\JoinTable(name="product_category")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="cascade", nullable=false)
    */
    private $products;

    /**
    * @ORM\OneToMany(targetEntity="Media", mappedBy="category", cascade={"persist", "remove"})
    * @ORM\JoinTable(name="medias")
    * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="cascade", nullable=false)
    */
    private $medias;

    /**
     * @ORM\Column(name="idParent", type="integer", length=11)
     */
    private $idParent;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
       /**
     * @var \DateTime
     */
    private $createdAt;
    private $featureNames;


    public function __construct() {
        $this->createdAt = new \Datetime();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set idParent
     *
     * @param integer $idParent
     * @return Category
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

    /**
     * Set name
     *
     * @param string $name
     * @return Category
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


    public function setMedias($medias)
    {
        $this->medias = $medias;

        return $this;
    }

    /**
     * Get medias
     *
     * @return string
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Add products
     *
     * @param \Ecommerce\ProductBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\Ecommerce\ProductBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Ecommerce\ProductBundle\Entity\Product $products
     */
    public function removeProduct(\Ecommerce\ProductBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
    public function __toString() {
        return strval($this->getId());
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Category
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
     * Add medias
     *
     * @param \Ecommerce\ProductBundle\Entity\Media $medias
     * @return Category
     */
    public function addMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {
        $this->medias[] = $medias;

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
}
