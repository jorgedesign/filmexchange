<?php 

namespace Application\Database;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

class VideosTable {
	private $adapter;
	private $sql;

	public function __construct($username, $password, $database) {
		$this->adapter = new Adapter(array(
			'driver'	=> 'Pdo_Mysql',
			'hostname'	=> '162.245.147.132',
			'port'		=> '3306',
			'username'	=> 'jorgedgo',
			'password'	=> 'j.ford251182',
			'database'	=> 'jorgedgo_videos'
			));

		//id, title, video, paragraph
		//select from id - where('id=#');

		$this->sql = new Sql($this->adapter);
	}

	public function getAllVideos() {
		$select = $this->sql->select()->from('videos');
		$query = $this->sql->buildSqlString($select);
		return $this->adapter->query($query)->execute();
	}
}






 ?>