<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mms\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RatchetController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout('layout/mms-layout');
        return new ViewModel(
        	array(
        		'heading' => 'Ratchet Dashboard',
        		'subHeading' => 'Under Construction'
        	)
		);     
    }

}