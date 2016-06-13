<?php

namespace Ecommerce\ProductBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Ecommerce\ProductBundle\Entity\Category;
use Ecommerce\ProductBundle\Entity\Media;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Entity\MediaRepository")
 * @UniqueEntity(fields="path", message="Path is already in use")
 * @ORM\Table(name="medias")
 */
class Media
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

     /**
      * @Assert\File(maxSize="10000000")
      */
     public $files;


    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="ProductDerived", inversedBy="medias", cascade={"persist"})
     * @ORM\JoinColumn(name="product_derived_id", referencedColumnName="id", onDelete="cascade", nullable=false)
     */
    private $productDerived;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="medias", cascade={"persist"})
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="cascade")
     */
    private $category;

    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \Datetime();

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
     * Set filename
     *
     * @param string $filename
     * @return Media
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set productDerived
     *
     * @param integer $productDerived
     * @return Media
     */
    public function setProductDerived($productDerived)
    {
        $this->productDerived = $productDerived;

        return $this;
    }

    /**
     * Get productDerivedId
     *
     * @return integer
     */
    public function getProductDerived()
    {
        return $this->productDerivedId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Media
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
     * Set path
     *
     * @param string $path
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return Media
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function getAbsolutePath()
    {
        return null === $this->path
        ? null
        : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
        ? null
        : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {

        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {

        return 'uploads/';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        $this->file->move($this->getUploadRootDir(), $this->path);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }



    public function save($file) {

            $mime = $file->getClientMimeType();
            $filename = $file->getClientOriginalName();
            $path = md5(uniqid()).'.'.$file->guessExtension();

            if($file->move($this->getUploadRootDir(), $path)) {
                $this->setType($mime);
                $this->setFilename($filename);
                $this->setPath($path);
            }
            return $this;
    }

    public function __toString() {
        return strval($this->getId());
    }

}
