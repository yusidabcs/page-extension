<?php namespace Modules\Pageextension\Entities;

use Illuminate\Database\Eloquent\Model;

class PageExtensionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'pageextension__pageextension_translations';
}
