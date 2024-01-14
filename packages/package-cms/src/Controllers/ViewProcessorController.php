<?php
 
namespace Wzrd\Cms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
 
class ViewProcessorController extends Controller
{
    public function render(): View
    {
        return view('WzrdCms::WzrdCms.viewProcessor');
    }
}