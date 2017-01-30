<?php namespace Modules\Pageextension\Repositories\Cache;

use Modules\Pageextension\Repositories\PageExtensionRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePageExtensionDecorator extends BaseCacheDecorator implements PageExtensionRepository
{
    public function __construct(PageExtensionRepository $pageextension)
    {
        parent::__construct();
        $this->entityName = 'pageextension.pageextensions';
        $this->repository = $pageextension;
    }

    public function findForPage($pageId){

    	return $this->repository->findForPage($pageId);
    }
}
