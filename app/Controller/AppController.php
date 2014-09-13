<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('DebugKit.Toolbar', 'Session');
	/*public $helpers = array(
		'Form' => array(
			'className' => 'BootstrapForm'
		)
	);*/
	public $helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);
	/*public $components = array(
		'Auth' => array(
			'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				)
			)
		), 'DebugKit.Toolbar', 'Session'
	);*/

	function beforeFilter(){
		parent::beforeFilter();

		App::import('Lib','DocumentsHelper');
		App::import('Lib','IdHelper');
		App::import('Lib','Strings');
		App::import('Lib','AnnexesHelper');
		App::import('Lib','LogsHelper');
		App::import('Lib','Mailing');
		App::import('Lib','MenuHelper');
		App::import('Lib','UsersHelper');
		App::import('Lib','PrivilegesHelper');

		// Careful gentelmen, that block should be the last
		if ($this->params['controller'] != 'login'){
			if (isset($exeptions[$this->params['controller']]))
				if (in_array($this->params['action'], $exeptions[$this->params['controller']])) 
					return;
			if (!$this->Session->check('User.id'))
				$this->redirect('/login/index');
		}
	}

	public function logout(){
		$this->Session->destroy();
		$this->redirect('/login');
	}
}
