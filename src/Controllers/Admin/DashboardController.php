<?php
namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}