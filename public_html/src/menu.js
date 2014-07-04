$(document).ready(function() {
	if ($('.pop_ctrl').length === 0) {
		$('nav').append('<div class="pop_ctrl"><i class="fa fa-bars"></i></div>\
			<ul id="demo_ul">\
				<li class="demo_li"><a href="http://www.servicentro.cl/"><div><i class="fa fa-home"></i></div><div>inicio</div></a></li>\
				<li class="demo_li"><a href="http://www.servicentro.cl/quienes-somos/"><div><i class="fa fa-question"></i></div><div>conócenos</div></a></li>\
				<li class="demo_li"><a href="http://www.servicentro.cl/media/"><div><i class="fa fa-music"></i></div><div>música</div></a></li>\
				<li class="demo_li"><a href="http://www.servicentro.cl/lyrics/"><div><i class="fa fa-book"></i></div><div>letras</div></a></li>\
				<li class="demo_li"><a href="https://www.facebook.com/Servicentrocl" target="blank"><div><i class="fa fa-facebook"></i></div><div>facebook</div></a></li>\
				<li class="demo_li"><a href="https://www.youtube.com/channel/UCzh_MtK7xNV14i4THYnUYIQ" target="blank"><div><i class="fa fa-youtube"></i></div><div>youtube</div></a></li>\
				<li class="demo_li"><a href="https://twitter.com/Servicentro_cl"target="blank"><div><i class="fa fa-twitter"></i></div><div>twitter</div></a></li>\
				<li class="demo_li"><div><i class="fa fa-ticket"></i></div><div>tours</div></li>\
				<li class="demo_li"><a href="http://www.servicentro.cl/contacto/"><div><i class="fa fa-envelope"></i></div><div>contáctanos</div></a></li>\
			</ul>');

	}
});