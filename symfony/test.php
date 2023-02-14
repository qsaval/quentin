php bin/console make:controller test
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}

{% extends 'base.html.twig' %}

{% block title %}Hello TestController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href="{{ '/home/frc/velvet_record/src/Controller/TestController.php'|file_link(0) }}">src/Controller/TestController.php</a></code></li>
        <li>Your template at <code><a href="{{ '/home/frc/velvet_record/templates/test/index.html.twig'|file_link(0) }}">templates/test/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
