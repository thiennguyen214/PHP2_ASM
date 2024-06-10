<?php

namespace Hey\Pro\Commons;

use eftec\bladeone\BladeOne;

class Controller
{


    protected function asset($view)
    {
        $templatePath = __DIR__ . '/../assets/';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);

        echo $blade->run($view);
    }
    protected function renderViewClient($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Client';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);

        echo $blade->run($view, $data);
    }

    protected function renderViewAdmin($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Admin';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);

        echo $blade->run($view, $data);
    }
    public function session($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }


}