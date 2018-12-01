<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListDisplayController extends Controller
{

    /**
     * @Route("/todolistdisplay", name="to_do_list_display")
     */
    public function toDoListDisplay() {

        return $this->render('to-do-list-display.html.twig');
    }

}
