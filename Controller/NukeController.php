<?php

namespace Ob\CacheNukeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\HttpFoundation\Response;

class NukeController extends Controller
{
    public function indexAction()
    {
        $kernel = $this->get('kernel');
        $app = new Application($kernel);
        $app->setAutoExit(false);

        $input = new StringInput('cache:clear --env=prod');
        $output = new NullOutput();

        $app->run($input, $output);

        return new Response("Cache Nuked!");
    }
}
