<?php

namespace Wzrd\Cms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Wzrd\Cms\Model\Api\CmsServiceInterface;
use Wzrd\Cms\Model\Api\ViewBuilderInterface;

class ViewProcessorController extends Controller
{

    public function __construct(
        public CmsServiceInterface $cmsService,
        public ViewBuilderInterface $viewBuilder,
    ) {
    }

    public function render(): View
    {
        return view('WzrdCms::WzrdCms.viewProcessor');
    }
}
