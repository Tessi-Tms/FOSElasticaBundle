<?php
namespace FOS\ElasticaBundle\Tests\Mocks;

class ObjectPersisterPOPO
{
    public $id   = 123;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return 'popoName';
    }
}