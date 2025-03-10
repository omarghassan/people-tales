<?php 
require_once 'controllers/Controller.php';

class NoFoundController extends Controller {
    public function notFound(){
        $this->render("public.pages.404");
    }}