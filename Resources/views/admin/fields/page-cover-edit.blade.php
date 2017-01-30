<div class="box-body">

@include('media::admin.fields.file-link', [
    'entityClass' => 'Modules\\\\Pageextension\\\\Entities\\\\PageExtension',
    'entityId' => $pageExtension->id,
    'zone' => 'page_cover'
])

</div>