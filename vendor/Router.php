<?php


class Router {
    static public function init() {
	$action= filter_input(INPUT_GET, 'action');
	
	if($action===null){
	    $action='index';
	}
	switch ($action){
	    case 'index':
		$view=new View('index');
		$people=new People();
		$people->all();
		$view->people=$people->all();
		$view->render();
                break;
	   
	    case 'save':
		
                    $first= filter_input(INPUT_POST, 'first');
                    $second= filter_input(INPUT_POST, 'second');
                    $email= filter_input(INPUT_POST, 'email');
                    $people=new People();
                    $people->add($first, $second, $email);
				
		break;
	     case 'delete':
		
		$id= filter_input(INPUT_POST, 'id');
		$people=new People();
		$people->delete($id);
		
		break;
            case 'edit':
               
                $view=new View('edit');
		$view->render();

                break;
            case 'edittodb':
                    $id= filter_input(INPUT_POST, 'id');
                    $first= filter_input(INPUT_POST, 'first');
                    $second= filter_input(INPUT_POST, 'second');
                    $email= filter_input(INPUT_POST, 'email');
                    $people=new People();
                    $people->edit($id,$first,$second,$email);
                break;
            
	} 
    }
	static public function redirect() {
	    header('Location:'.$_SERVER['PHP_SELF'].'?action=index');
	}

}
