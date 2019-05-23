<?php 
require 'utm_mark.php';

// if ($this->uri->segment(1) == 'pixell' || getDomain() == 'ru-zaimo.ru' || getDomain() == 'sumas.ru' | getDomain() == 'dengos.ru') {
//   $this->load->model('analytics/forms_model', 'analytics');
//   $json = $this->analytics->popup10secGetJson2();
// }
// else if ($this->uri->segment(1) == 'offerwall')
// {
//   $this->load->model('analytics/forms_model', 'analytics');
//   $json = $this->analytics->popup10secGetJson3();
// }
// else
// {
//   $this->load->model('analytics/forms_model', 'analytics');
//   $json = $this->analytics->popup10secGetJson();
// }

// $text = $json[0]["text"];
// $img = trim($json[0]["header"]);
// $url = setUtm($json[0]["url"],'Popup');

$text = 'Вам одобрено 10 000 &#8372; <br> после заявки';

$img = 'safezaim';
$url = 'https://t.z24.tech/click?pid=29&offer_id=65&sub1=Popup';

if ($this->uri->segment(1) == 'offerwall' || getDomain() == 'vamos.su' || getDomain() == 'zamos.su') {
  $text = 'Вам одобрено 10 000 &#8372;<br>после заявки';
//  $img = 'checkmoney';
//  $url = 'https://gl.guruleads.ru/click/40/75?sub1=Popup';
$img = 'visame';
$url = 'https://track.leadbrothers.co/sensor/5ccfedf78a5da55786a735ad?s1=Popup';
  
}
?>
<div class="notificate-wrapper pulse2"><table class="table table-hover table-responsive">
  <thead>
     <tr> 
       <td class="popup08"  style="text-align: center;"><i class="fa fa-remove close-btn close_spec"></i><span><?=$text?></span></td> 
    </tr>
  </thead>
  <tbody>
    <tr class="popup08">
      <td class="text-center"  ><a id="notificate_url" class="text-center" rel="noopener" href="<?=$url?>" target="_blank"><img class="notice-image img-fluid" id="change_img" style="max-width: 300px;" src="https://zaimomir.su/templates/common/img/offers/<?=$img?>.png" alt="<?=$img?>.png"></a></td> 
    </tr>
    <tr class="popup08">
      <td class="text-center">
        <a id="notificate_url2" href="<?=$url?>" rel="noopener" target="_blank"><div><input type="button" class="btn_popup" value="Оставить заявку"></div></a>
        </td>
    </tr>
  </tbody>
</table>
</div>
<script>
var _show_modal_timer = 3000;
</script>
