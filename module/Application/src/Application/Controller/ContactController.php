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
use Zend\Validator\EmailAddress;

class ContactController extends AbstractActionController
{
    public function indexAction()
    {	$request = $this->getRequest();

        $email = $request->getPost('email');

        $validator = new EmailAddress();

        if($request->isPost() && $validator->isValid($email)) {
            $data['message'] = '<h3>Thank you for your message. <br/><br/> We will get back to you within 24 hours. :)</h3>';
            // $data['email'] = $email;
        }
         else if ($request->isPost() && !$validator->isValid($email)) {
            $data['message'] = '<h3 style="color:red;">Invalid Email Address!</h3>';
            $data['email'] = $email;
        }
         else {
            $data['message'] = '';
        }
        return new ViewModel($data);
    }
}

































