<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'File' ) ){
	class File{

		public static $instance;

		public $type = [ 'navigation', 'product', 'comment', 'product-category', 'site', 'site-single' ];

		protected $current_site_id = false;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function set_current_site_id( $id ){
			$this->current_site_id = $id;
		}

		public function get_path( $type ){
			if( $this->current_site_id ){
				$type .= "-{$this->current_site_id}";
			}
			return WC_Booster_Path . "demo-importer/data/{$type}.json";
		}

		public function save( $data, $type ){
			$path = $this->get_path( $type );
			if( is_array( $data ) ){
				file_put_contents( $path, print_r( json_encode( $data ), true ) );
			}
		}

		public function get( $type ){
			
			$path = $this->get_path( $type );
			$data = [];

			if( file_exists( $path ) ){
				$data = file_get_contents( $path );
				try{
					$data = json_decode( $data, true );
				}catch( Exception $e ){
					$data = [];
				}
			}

			return $data;
		}

		public function clean_up(){
			foreach( $this->type as $type ){
				
				if( 'site' == $type ){
					continue;
				}

				if( 'site-single' == $type ){
					
					$sites = $this->get( 'site' );

					foreach( $sites as $site ){
						$this->set_current_site_id( $site[ 'id' ] );
						$this->unlink( $type );
					}

					$this->set_current_site_id( false );
					
				}else{
					$this->unlink( $type );
				}
			}
		}

		public function unlink( $type ){
			$path = $this->get_path( $type );
			if( file_exists( $path ) ){
				unlink( $path );
			}
		}
	}
}