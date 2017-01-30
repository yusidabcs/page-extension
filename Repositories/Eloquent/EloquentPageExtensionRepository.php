<?php namespace Modules\Pageextension\Repositories\Eloquent;

use Modules\Pageextension\Repositories\PageExtensionRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

use Modules\Pageextension\Events\PageExtensionWasCreated;
use Modules\Pageextension\Events\PageExtensionWasUpdated;
use Modules\Pageextension\Events\PageExtensionWasDeleted;

class EloquentPageExtensionRepository extends EloquentBaseRepository implements PageExtensionRepository
{

	public function findForPage($pageId){

		return $this->model->wherePageId($pageId->id)->first();
	}

	public function create($data)
    {
        $page = $this->model->create($data);
        event(new PageExtensionWasCreated($page, $data));
        return $page;
    }

    public function update($model, $data)
    {
        $model->update($data);

        event(new PageExtensionWasUpdated($model->id, $data));

        return $model;
    }

    public function destroy($model)
    {
        event(new PageExtensionWasDeleted($model->id, get_class($model)));

        return $model->delete();
    }
}
