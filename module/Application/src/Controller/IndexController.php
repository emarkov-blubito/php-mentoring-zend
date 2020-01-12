<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Zend\Db\Adapter\Adapter;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Application\Entity\Categories;

class IndexController extends AbstractActionController
{

	private $db;

    //public function __construct(Adapter $db)
    public function __construct(EntityManager $db)
    {
        $this->db = $db;
    }

    public function indexAction()
    {
    	//$results = $this->db->query('select * from categories')->execute();
        // return new ViewModel([
        // 	'test'	=> $results->current()['name']
        // ]);


		$repo = $this->db->getRepository('Application\Entity\Categories');
		$test = $repo->find(1);


        return new ViewModel([
        	'test'	=> $test->getName()
        ]);
    }
}
