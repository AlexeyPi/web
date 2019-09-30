<?php


class View {
    protected $template;
    protected $page;
    public function __construct($page,$template=TEMPLATE_DEFAULT) {
	$this->template=$template;
	$this->page=$page;
    }
    public function render() {
	include_once 'views'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$this->template.'.php';
    }
}
