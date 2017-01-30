<?php namespace Modules\Pageextension\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

use Modules\Media\Support\Traits\MediaRelation;

class PageExtension extends Model
{
	use MediaRelation;
    use Translatable;


    protected $table = 'pageextension__pageextensions';
    public $translatedAttributes = [];
    protected $fillable = ['page_id','page_cover'];
}
