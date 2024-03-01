<?php

namespace Wzrd\CmsBridge\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Wzrd\CmsBridge\ViewProcessing\Api\CmsServiceInterface;
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
        $blocks = $this->cmsService->getPageBlocks($slug ?? "home");

        // controlar si existe el block sino 404

        return $this->viewBuilder->build($blocks);
    }
}
