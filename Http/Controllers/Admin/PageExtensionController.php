<?php namespace Modules\Pageextension\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Pageextension\Entities\PageExtension;
use Modules\Pageextension\Repositories\PageExtensionRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PageExtensionController extends AdminBaseController
{
    /**
     * @var PageExtensionRepository
     */
    private $pageextension;

    public function __construct(PageExtensionRepository $pageextension)
    {
        parent::__construct();

        $this->pageextension = $pageextension;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$pageextensions = $this->pageextension->all();

        return view('pageextension::admin.pageextensions.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pageextension::admin.pageextensions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->pageextension->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('pageextension::pageextensions.title.pageextensions')]));

        return redirect()->route('admin.pageextension.pageextension.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  PageExtension $pageextension
     * @return Response
     */
    public function edit(PageExtension $pageextension)
    {
        return view('pageextension::admin.pageextensions.edit', compact('pageextension'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PageExtension $pageextension
     * @param  Request $request
     * @return Response
     */
    public function update(PageExtension $pageextension, Request $request)
    {
        $this->pageextension->update($pageextension, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('pageextension::pageextensions.title.pageextensions')]));

        return redirect()->route('admin.pageextension.pageextension.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PageExtension $pageextension
     * @return Response
     */
    public function destroy(PageExtension $pageextension)
    {
        $this->pageextension->destroy($pageextension);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('pageextension::pageextensions.title.pageextensions')]));

        return redirect()->route('admin.pageextension.pageextension.index');
    }
}
