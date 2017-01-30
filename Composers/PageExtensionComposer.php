<?php namespace Modules\Pageextension\Composers;

use Modules\Pageextension\Repositories\PageExtensionRepository;
use Illuminate\Contracts\View\View;
use Modules\Media\Repositories\FileRepository;

class PageExtensionComposer 
{

	private $pageExtensionRepository;
	private $file;
	public function __construct(PageExtensionRepository $pageExtensionRepository,FileRepository $file)

	{
		$this->pageExtensionRepository = $pageExtensionRepository;
		$this->file = $file;
	}

	public function compose(View $view)
	{
		$pageExtension = $this->pageExtensionRepository->findForPage(request()->route('page'));
		$page_cover = $this->file->findFileByZoneForEntity('page_cover', $pageExtension);
		
		$view->with('pageExtension',$pageExtension)
			->with('page_cover',$page_cover);
	}
}