<?php
App::uses('AppController', 'Controller');
/**
 * Home Controller
 *
 * @property Home $Home
 * @property PaginatorComponent $Paginator
 */
class HomeController extends AppController {
	var $uses = array ('Project','Category');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index');
  }

  public function index() {
   $conditions = array('catery.is_active' =>1);
   $category = $this->Category->find('all',array(
		'conditions'=>$conditions,
		'recursive'=>1,
		'fields'=> array('Category.id','Category.name')
	));
	$this->set('categories',$categories);
	//$categories = $this->Category->findByName('Food');
	//echo '<pre>'.print_r($categories,true).'</pre>';
//die();
  }

  public function admin_index(){
   $this->set('foo','bar');
}
