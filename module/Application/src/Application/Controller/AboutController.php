<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class AboutController extends AbstractActionController
{
    public function indexAction() {
    	return new ViewModel();
    }

    public function learnmoreAction() {
	
	$services = array (
            'Filming',
            'Production',
            'Motion Graphics',
            'Color Correction'
            );

        $data = array(
            'services' => $services,
            );

        return new JsonModel($data);
    }


}






























