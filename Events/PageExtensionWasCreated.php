<?php namespace Modules\Pageextension\Events;

use Modules\Media\Contracts\StoringMedia;

class PageExtensionWasCreated implements StoringMedia
{
   

   	/**
     * @var array
     */
    public $data;
    /**
     * @var int
     */
    public $gallery;

    public function __construct($post, array $data)
    {
        $this->data = $data;
        $this->post = $post;
    }

    public function getEntity()
    {
        return $this->post;
    }
    /**
     * Return the ALL data sent
     * @return array
     */
    public function getSubmissionData()
    {
        return $this->data;
    }
}
