<?php 
require 'templates/common/new2/js/get_display_size.js';
require 'templates/common/new2/js/jquery-1.11.3.min.js';
require 'templates/common/new2/js/bootstrap.min.js';
require 'templates/common/new2/js/detect.min.js';
require 'templates/common/new2/js/get_parameter.js'; 
require 'templates/common/new2/js/ion.rangeSlider.min.js';
require 'templates/common/new2/js/jquery.maskedinput.1.4.2.min.js';
require 'templates/common/new2/js/jquery.poshytip.min.js';
require 'templates/common/new2/js/jquery.form-validator.js';
require 'templates/common/new2/js/jquery.suggestions.min.js';
require 'templates/common/new2/js/coockie.js';
require 'templates/common/new2/js/traffic.js';
require 'templates/common/new2/js/modal.js';
require 'templates/common/new2/js/owl.carousel.min.js';
require 'templates/common/new2/js/settings_form.js';
require 'templates/common/new2/js/backtotop.js';
require 'templates/common/new2/js/fingerprintjs2.js';
if ($this->uri->segment(1) != 'form') {
    require 'templates/common/new2/js/popup_modal.js';
    // popup
    // if ($setting_array['is_mobile'] != 'мобила') {
    //     require 'templates/common/new2/js/TweenMax.min.js';
    //     require 'templates/common/new2/js/modal_polygon.js';
    // } else require 'templates/common/new2/js/modal_mobile.js';
}
if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') {
    require 'templates/common/new2/js/for_index.js';
    //require 'templates/dengibystra/assets/js/index.js';
}?>