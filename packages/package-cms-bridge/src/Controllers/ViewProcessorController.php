<?php

namespace Wzrd\CmsBridge\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Wzrd\CmsBridge\Services\Api\CmsServiceInterface;
use Wzrd\CmsBridge\ViewProcessing\Api\ViewBuilderInterface;

class ViewProcessorController extends Controller
{

    public function __construct(
        public CmsServiceInterface $cmsService,
        public ViewBuilderInterface $viewBuilder,
    ) {
    }

    public function render(string $slug = null): View
    {
        $content = $this->cmsService->getContentBySlug($slug ?? "/");

        echo var_dump($content);
        die;

        return $this->viewBuilder->build($content);
    }
}
