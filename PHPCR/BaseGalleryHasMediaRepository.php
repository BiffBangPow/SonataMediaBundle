<?php

namespace Sonata\MediaBundle\PHPCR;

use Doctrine\ODM\PHPCR\DocumentRepository;
use Doctrine\ODM\PHPCR\Id\RepositoryIdInterface;

class BaseGalleryHasMediaRepository extends DocumentRepository implements RepositoryIdInterface
{
    /**
     * @param mixed $document
     * @param mixed $parent
     *
     * @return string
     */
    public function generateId($document, $parent = null)
    {
        return '/cms/gallery-has-media/'.uniqid();
    }
}
