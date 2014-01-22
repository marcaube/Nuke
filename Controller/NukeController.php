<?php

namespace Ob\CacheNukeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\HttpFoundation\Response;

class NukeController extends Controller
{
    public function indexAction()
    {
        $command = new CacheClearCommand();
        $command->setContainer($this->container);

        $input = new ArrayInput(array());
        $output = new NullOutput();

        // The @ is kinda bad, but there always was a "Warning: ini_set(): A session is active."
        // Which caused the response to be a 500.
        @$command->run($input, $output);

        return new Response("Cache Nuked!");
    }
}