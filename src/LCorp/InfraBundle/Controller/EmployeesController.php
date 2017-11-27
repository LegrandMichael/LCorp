<?php 

namespace LCorp\InfraBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployeesController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('LCorpInfraBundle:Employees:index.html.twig');
        return new Response($content);
    }
}