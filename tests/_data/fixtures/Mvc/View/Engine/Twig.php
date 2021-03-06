<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Fixtures\Mvc\View\Engine;

use Phalcon\DiInterface;
use Phalcon\Mvc\View\Engine;
use Phalcon\Mvc\View\EngineInterface;
use Phalcon\Mvc\ViewBaseInterface;
use Twig_Environment;
use Twig_Loader_Filesystem;

class Twig extends Engine implements EngineInterface
{
    protected $twig;

    /**
     * Twig constructor.
     */
    public function __construct(ViewBaseInterface $view, DiInterface $dependencyInjector = null)
    {
        $this->twig = new Twig_Environment(
            new Twig_Loader_Filesystem(
                $view->getViewsDir()
            )
        );

        parent::__construct($view, $dependencyInjector);
    }

    /**
     * Renders a view using the template engine
     */
    public function render(string $path, $params, bool $mustClean = false)
    {
        if (!isset($params['content'])) {
            $params['content'] = $this->view->getContent();
        }

        if (!isset($params['view'])) {
            $params['view'] = $this->view;
        }

        $relativePath = str_replace(
            $this->view->getViewsDir(),
            '',
            $path
        );

        $content = $this->twig->render($relativePath, $params);

        if ($mustClean) {
            $this->view->setContent($content);
        } else {
            echo $content;
        }
    }
}
