<?php

namespace Application\Model;

	class Video {
		private $id;

		private $name;

		private $description;

		private $url;

		private $poster;

		public function getId() {
			return $this->id;
		}

		public function getName() {
			return $this->name;
		}
		public function getUrl() {
			return $this->url;
		}
		public function getDescription() {
			return $this->description;
		}

		public function getPoster() {
			return $this->poster;
		}


		public function setId($name) {
			$this->name = $name;
		}

		public function setName($name) {
			$this->name = $name;
		}
		public function setDescription($name) {
			$this->description = $name;
		}
		public function setUrl($name) {
			$this->url = $name;
		}
		public function setPoster($name) {
			$this->poster = $name;
		}
	}


	


?>