<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListFormController extends Controller
{

    /**
     * @Route("/todolistform", name="to_do_list")
     */
    public function toDoListForm() {

        return $this->render('to-do-list-form.html.twig');
    }

}
