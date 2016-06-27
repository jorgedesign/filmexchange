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
use Application\Database\VideosTable;
use Application\Model\Video;

class GalleryController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function detailsAction()
    {
       $request = $this->getRequest();

        $id = $request->getQuery('id');

       
        $data = array();

        $data['id'] = $id;
        $videosTable = new VideosTable('root', 'root', 'videos');
        $videos = $videosTable->getAllVideos();

        foreach ($videos as $video) {
            $videoModel = new Video();
            $videoModel ->setId($video['id']);
            $videoModel ->setName($video['title']);
            $videoModel ->setUrl($video['URL']);
            $videoModel ->setDescription($video['description']);
            $videoModel ->setPoster($video['poster']);

            $store = [
            	'id'=>$videoModel->getId(),
                'title'=>$videoModel->getName(),
                "url"=>$videoModel->getUrl(),
                "description"=>$videoModel->getDescription(),
                "poster"=>$videoModel->getPoster(),

            ];

            $data['videos'][] = $store;
            //var_dump($video['title']);
        }

        
        

        return new ViewModel($data);
    }

}

































