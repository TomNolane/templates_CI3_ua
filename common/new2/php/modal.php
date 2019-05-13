<?php 
function getDomain2()
  {
    $CI =& get_instance();
    return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
  }
$text = 'Вам одобрено 10 000 &#8372; <br> после заявки';

$img = 'safezaim';
$url = 'https://t.z24.tech/click?pid=29&offer_id=65&sub1=Popup';

if ($this->uri->segment(1) == 'offerwall' || getDomain2() == 'vamos.su' || getDomain2() == 'zamos.su') {
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
function checkOffer (_boolean)
{
  var _temp_checkOffer = 0;
  for (var i = 0; i < Object.keys(arr_offers).length; i++)
  {
      if(arr_offers[Object.keys(arr_offers)[i]].count == _offers_count)
      {
        _offers_url = arr_offers[Object.keys(arr_offers)[i]].url;
        _offers_img = arr_offers[Object.keys(arr_offers)[i]].src;

        document.querySelector('#change_img').src = _offers_img;
        document.querySelector('#notificate_url').href = _offers_url;
        document.querySelector('#notificate_url2').href = _offers_url;
        
        if(_boolean)
          setcookie2(arr_offers[Object.keys(arr_offers)[i]].name,++arr_offers[Object.keys(arr_offers)[i]].count);
        
        break;
      }
      else
      {
        _temp_checkOffer++;
      }
  }

  if(_temp_checkOffer == 3)
  {
    _offers_count += 1; 
    checkOffer(_boolean);
  }
}
</script>
