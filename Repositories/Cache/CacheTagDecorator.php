<?php

namespace Modules\Tag\Repositories\Cache;

use Illuminate\Database\Eloquent\Collection;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;
use Modules\Tag\Repositories\TagRepository;

class CacheTagDecorator extends BaseCacheDecorator implements TagRepository
{
  public function __construct(TagRepository $tag)
  {
    parent::__construct();
    $this->entityName = 'tag.tags';
    $this->repository = $tag;
  }

  /**
   * Get all the tags in the given namespace
   */
  public function allForNamespace($namespace)
  {
    return $this->remember(function () use ($namespace) {
      return $this->repository->allForNamespace($namespace);
    });
  }

  public function getItemsBy($params)
  {
    return $this->remember(function () use ($params) {
      return $this->repository->getItemsBy($params);
    });
  }
}
