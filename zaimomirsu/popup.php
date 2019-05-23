<!-- popup08 -->
<?php 
$text = 'Вам одобрено 10 000 <i class="fas fa-hryvnia"></i> <br> после заявки';
$img = 'safezaim';
$url = 'https://t.z24.tech/click?pid=29&offer_id=65&sub1=Popup';
if ($this->uri->segment(1) == 'offerwall' || getDomain() == 'vamos.su' || getDomain() == 'zamos.su') {
    $text = 'Вам одобрено 10 000 &#8372;<br>после заявки';
    $img = 'visame';
    $url = 'https://track.leadbrothers.co/sensor/5ccfedf78a5da55786a735ad?s1=Popup';
}
?>
<div class="notificate-wrapper pulse2"><table class="table table-hover table-responsive">
    <thead>
         <tr> 
             <td class="popup08"  style="text-align: center;"><i class="fas fa-times close-btn close_spec"></i><span><?=$text?></span></td> 
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
    $('.notificate-wrapper .close-btn').click(function(){
        $('.notificate-wrapper').hide()
    })
</script>
<!-- /popup08 -->