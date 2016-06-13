<?php
namespace Ecommerce\ProductBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\ProductBundle\Entity\Media;

class LoadMedia extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

      $media = new Media();
      $media->setPath('0c864919fb88a906b561b6a5005a47d7.png');
      $media->setFilename('cat1');
      $media->setType('image/png');
      $media->setCategory($this->getReference('category'));

      $manager->persist($media);

      $media2 = new media;
      $media2->setPath('0c864919fb88a906b561b6a5005a47d7.png');
      $media2->setFilename('cat2');
      $media2->setType('image/png');
      $media2->setCategory($this->getReference('category2'));



      $manager->persist($media2);

      $media3 = new media;
      $media3->setPath('0c864919fb88a906b561b6a5005a47d7.png');
      $media3->setFilename('cat3');
      $media3->setType('image/png');
      $media3->setCategory($this->getReference('category3'));



      $manager->persist($media3);
      $manager->flush();

      $media4 = new media;
      $media4->setPath('0c864919fb88a906b561b6a5005a47d7.png');
      $media4->setFilename('cat4');
      $media4->setType('image/png');
      $media4->setCategory($this->getReference('category4'));

      $manager->persist($media4);

      $media5 = new media;
      $media5->setPath('0c864919fb88a906b561b6a5005a47d7.png');
      $media5->setFilename('cat5');
      $media5->setType('image/png');
      $media5->setCategory($this->getReference('category5'));

      $manager->persist($media5);

    $manager->flush();
  }
   public function getOrder() {
    return 2;
  }
}