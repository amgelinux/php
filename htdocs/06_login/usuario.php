  <?php
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $clave;
        private $email;

        /**
         * @return string
         */
		public function getId(){
			return $this->id;
		}

        /**
         * @return string
         */
        public function getEmail()
        {
            return $this->email;
        }


        /**
         * @return string
         */
		public function getNombre(){
			return $this->nombre;
		}

        /**
         * @return string
         */
        public function getClave(){
            return $this->clave;
        }


        /**
         * @param $id
         * @return void
         */
        public function setId($id){
            $this->id = $id;
        }

        /**
         * @param string $email
         * @return void
         */
        public function setEmail($email): void
        {
            $this->email = $email;
        }
        /**
         * @param string $nombre
         * @return void
         */
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

        /**
         * @param string $clave
         * @return string
         */
		public function setClave($clave){
			$this->clave = $clave;
		}
	}
?>