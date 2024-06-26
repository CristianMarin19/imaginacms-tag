<?php

namespace Modules\Tag\Repositories;

use Modules\Tag\Contracts\TaggableInterface;

interface TagManager
{
    /**
     * Returns all the registered namespaces.
     *
     * @return array
     */
    public function getNamespaces();

    /**
     * Registers an entity namespace.
     *
     * @return void
     */
    public function registerNamespace(TaggableInterface $entity);
}
