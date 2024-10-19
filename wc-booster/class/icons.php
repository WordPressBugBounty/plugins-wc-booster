<?php 
if( !class_exists( 'WC_Booster_Icons' ) ){
	class WC_Booster_Icons{

		public static $instance;

		public static function get_instance() {
		    if ( ! self::$instance ) {
		        self::$instance = new self();
		    }
		    return self::$instance;
		}

		public function get_close_icon(){
			ob_start();
			?>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve" width="16px" height="16px" class=""><g><g>
				<g>
					<path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z" data-original="#000000" class="active-path"/>
				</g>
				</g></g> 
			</svg>
			<?php
			return ob_get_clean();
		}

		public function update_icon(){
			?>
			<svg height="15px" viewBox="0 0 512 512" width="15px" xmlns="http://www.w3.org/2000/svg"><path d="m61.496094 279.609375c-.988282-8.234375-1.496094-16.414063-1.496094-23.609375 0-107.402344 88.597656-196 196-196 50.097656 0 97 20.199219 131.5 51.699219l-17.300781 17.601562c-3.898438 3.898438-5.398438 9.597657-3.898438 15 1.800781 5.097657 6 9 11.398438 10.199219 3.019531.605469 102.214843 32.570312 95.898437 31.300781 8.035156 2.675781 19.917969-5.894531 17.703125-17.699219-.609375-3.023437-22.570312-113.214843-21.300781-106.902343-1.199219-5.398438-5.101562-9.898438-10.5-11.398438-5.097656-1.5-10.800781 0-14.699219 3.898438l-14.699219 14.398437c-45.300781-42.296875-107.503906-68.097656-174.101562-68.097656-140.699219 0-256 115.300781-256 256v.597656c0 8.457032.386719 14.992188.835938 19.992188.597656 6.625 5.480468 12.050781 12.003906 13.359375l30.816406 6.160156c10.03125 2.007813 19.050781-6.402344 17.839844-16.5zm0 0"/><path d="m499.25 222.027344-30.90625-6.296875c-10.042969-2.046875-19.125 6.371093-17.890625 16.515625 1.070313 8.753906 1.546875 17.265625 1.546875 23.753906 0 107.398438-88.597656 196-196 196-50.097656 0-97-20.199219-131.5-52l17.300781-17.300781c3.898438-3.898438 5.398438-9.597657 3.898438-15-1.800781-5.101563-6-9-11.398438-10.199219-3.019531-.609375-102.214843-32.570312-95.898437-31.300781-5.101563-.898438-10.203125.601562-13.5 4.199219-3.601563 3.300781-5.101563 8.699218-4.203125 13.5.609375 3.019531 22.574219 112.210937 21.304687 105.898437 1.195313 5.402344 5.097656 9.902344 10.496094 11.398437 6.261719 1.570313 11.488281-.328124 14.699219-3.898437l14.402343-14.398437c45.296876 42.300781 107.5 69.101562 174.398438 69.101562 140.699219 0 256-115.300781 256-256v-.902344c0-6.648437-.242188-13.175781-.796875-19.664062-.570313-6.628906-5.433594-12.074219-11.953125-13.40625zm0 0"/></svg>
			<?php
		}

		public function get_cart_icon(){
			ob_start();
			?>
			<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -31 512.00033 512" width="20px"><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0"/><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0"/><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0"/></svg> 
			<?php
			return ob_get_clean();
		}

		public function get_empty_cart_icon(){
			ob_start();
			?>
			<svg height="20px" viewBox="-19 -53 604.00045 604" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="m404.644531 385.148438c-30.800781 0-55.773437 24.964843-55.773437 55.765624 0 30.808594 24.964844 55.777344 55.765625 55.777344 30.808593 0 55.773437-24.96875 55.773437-55.769531-.027344-30.792969-24.980468-55.742187-55.765625-55.773437zm0 86.570312c-17.015625 0-30.800781-13.789062-30.800781-30.796875 0-17.011719 13.785156-30.800781 30.792969-30.800781 17.015625-.007813 30.800781 13.789062 30.800781 30.792968-.019531 17.003907-13.792969 30.777344-30.792969 30.804688zm0 0"/><path d="m553.757812 76.375h-443.070312l-7.792969-31.703125c-6.730469-27.65625-31.558593-47.078125-60.015625-46.960937h-30.394531c-6.894531 0-12.484375 5.589843-12.484375 12.488281 0 6.894531 5.589844 12.484375 12.484375 12.484375h30.394531c16.933594-.136719 31.742188 11.394531 35.765625 27.847656l60.625 247.582031c6.765625 27.601563 31.613281 46.9375 60.027344 46.71875h259.328125c28.8125.230469 53.886719-19.648437 60.238281-47.746093l47.070313-205.738282c.851562-3.65625-.035156-7.5-2.40625-10.417968-2.386719-2.933594-5.984375-4.613282-9.769532-4.554688zm-59.234374 215.222656c-3.804688 16.707032-18.761719 28.484375-35.898438 28.261719h-259.328125c-16.910156.183594-31.726563-11.296875-35.765625-27.71875l-46.734375-190.792969h421.292969zm0 0"/><path d="m235.75 385.148438c-30.800781 0-55.773438 24.964843-55.773438 55.765624 0 30.808594 24.96875 55.777344 55.769532 55.777344 30.804687 0 55.773437-24.96875 55.773437-55.769531-.027343-30.792969-24.980469-55.742187-55.769531-55.773437zm0 86.570312c-17.011719 0-30.800781-13.789062-30.800781-30.796875 0-17.011719 13.789062-30.800781 30.796875-30.800781 17.011718-.007813 30.800781 13.789062 30.800781 30.792968-.019531 17.003907-13.796875 30.777344-30.796875 30.804688zm0 0"/></svg>
			<?php
			return ob_get_clean();
		}
	}
}