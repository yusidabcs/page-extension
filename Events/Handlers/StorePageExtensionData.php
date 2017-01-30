<?php namespace Modules\Pageextension\Events\Handlers;

use Modules\Pageextension\Repositories\PageExtensionRepository;
use Modules\Pageextenstion\Entities\PageExtenstion;
use Modules\Page\Events\PageWasCreated;

class StorePageExtensionData
{
   

   	private $pageExtensionRepository;

   	public function __construct(PageExtensionRepository $pageExtensionRepository)
   	{
   		$this->pageExtensionRepository = $pageExtensionRepository;
   	}

   	public function handle($event){

   		if(get_class($event)  === PageWasCreated::class)
   		{
   			$data = $event->data;
   			$data['page_id'] = $event->pageId;

   			return $this->pageExtensionRepository->create($data);
   		}
   	}
}
