if (typeof _show_modal_timer === "undefined") {
    _show_modal_timer = 3000;
}
var agree = 0;
 $('#agree').change(function () {
     if (agree == 1) {
         $('#submitOne').removeClass('btn3').addClass('btn2');
         agree = 0;
     } else {
         $('#submitOne').removeClass('btn2').addClass('btn3')
         agree = 1;
     }
 });

var loans = 0;
var count_touch = 0;
var scroll_sizeX = 0;
var scroll_sizeY = 0;
var ahctpac = 0;
var isMobile2 = 0;
var count_errors = 0;
var time_to_come_now = new Date();

if (typeof isMobile2 === "undefined") {
    var isMobile2 = false;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile2 = true;
    else isMobile2 = false;
}

if(isMobile2)
{
    document.querySelector('body').addEventListener('touchstart', function(){
        count_touch++;
    });
    document.body.addEventListener('touchmove', function(evt){
        scroll_sizeX += parseInt(evt.changedTouches[0].pageX);
        scroll_sizeY += parseInt(evt.changedTouches[0].pageY);
    });
}
else
{
    window.onscroll = function() {
        scroll_sizeY += window.pageYOffset || document.documentElement.scrollTop;
    }
    document.querySelector('body').addEventListener('click', function(){
        count_touch++;
    });
}

function addDate(numberOfYears)
{
    var startDate = new Date();
    var returnDate = new Date(
        startDate.getFullYear()-numberOfYears,
        startDate.getMonth(),
        startDate.getDate(),
        startDate.getHours(),
        startDate.getMinutes(),
        startDate.getSeconds()
    );
    return returnDate;
};
function addDate2(numberOfDays,numberOfMonth,numberOfYears)
{
    var startDate = new Date();
    var returnDate = new Date(
                            numberOfYears,
                            numberOfMonth-1,
                            numberOfDays,
                            startDate.getHours(),
                            startDate.getMinutes(),
                            startDate.getSeconds());
    return returnDate;
};
function CheckTime()
{
    var today = addDate2($('#birthdate').val().split('/')[0],$('#birthdate').val().split('/')[1],$('#birthdate').val().split('/')[2]).getTime();
    var from = addDate(18).getTime();
    var to = addDate(70).getTime();
    var withinRange = today <= from && today >= to;

    if(withinRange)
    {
        $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','none');
        $('#birthdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
        $('#birthdate').removeClass('er');
        $('#birthdate').parent().removeClass('ex-error').addClass('ex-success');
        $('#birthdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 
        
        return true;
    }
    else
    {
        $('#birthdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
        $('#birthdate').addClass('er');
        $('#birthdate').parent().removeClass('ex-success').addClass('ex-error');
        $('#birthdate').attr('placeholder',"Возраст должен быть от 18 до 70 лет");
        $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','inline-block');
        $('#birthdate').parent($('#birthdate')).find('.help-block2').text("Возраст должен быть от 18 до 70 лет");
        return false;
    }
}
function isInArray(value, array) {
    return array.indexOf(value) > -1;
}
function CheckTime2()
{
    var today = addDate2($('#passportdate').val().split('/')[0],$('#passportdate').val().split('/')[1],$('#passportdate').val().split('/')[2]).getTime();
    var from = addDate(0).getTime();
    var to = addDate(100).getTime();
    var withinRange = today <= from && today >= to;

    if(withinRange)
    {
        $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','none');
        $('#passportdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
        $('#passportdate').removeClass('er');
        $('#passportdate').parent().removeClass('ex-error').addClass('ex-success');
        $('#passportdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        var birth = $('#passportdate').val().split('/');
        $('select#passport_dd').append($("<option></option>").attr("value", birth[0]).text(birth[0]));
        $("select#passport_dd").val(birth[0]);
        $('select#passport_mm').append($("<option></option>").attr("value", birth[1]).text(birth[1]));
        $("select#passport_mm").val(birth[1]);
        $('select#passport_yyyy').append($("<option></option>").attr("value", birth[2]).text(birth[2]));
        $("select#passport_yyyy").val(birth[2]);
        return true;
    }
    else
    {
        $('#passportdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
        $('#passportdate').addClass('er');
        $('#passportdate').parent().removeClass('ex-success').addClass('ex-error');
        $('#passportdate').attr('placeholder',"Возраст должен быть от 18 до 100 лет");
        $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','inline-block');
        $('#passportdate').parent($('#passportdate')).find('.help-block2').text("Возраст должен быть от 18 до 100 лет");
        return false;
    }
}

if (document.querySelector("#agree") != null && document.querySelector("#marketing") != null) {
    document.querySelector("#agree").addEventListener('click', function () {
        if (document.querySelector('#agree').checked && document.querySelector('#marketing').checked) {
            if (document.querySelector('#next1') != null)
                document.querySelector('#next1').style.visibility = 'visible';
            else if (document.querySelector('#next1f') != null)
                document.querySelector('#next1f').style.visibility = 'visible';
        } else {
            if (document.querySelector('#next1') != null)
                document.querySelector('#next1').style.visibility = 'hidden';
            else if (document.querySelector('#next1f') != null)
                document.querySelector('#next1f').style.visibility = 'hidden';
        }
    }, false);

    document.querySelector("#marketing").addEventListener('click', function () {
        if (document.querySelector('#agree').checked && document.querySelector('#marketing').checked) {
            if (document.querySelector('#next1') != null)
                document.querySelector('#next1').style.visibility = 'visible';
            else if (document.querySelector('#next1f') != null)
                document.querySelector('#next1f').style.visibility = 'visible';
            else if (document.querySelector('#next1ff') != null)
                document.querySelector('#next1ff').style.visibility = 'visible';
        } else {
            if (document.querySelector('#next1') != null)
                document.querySelector('#next1').style.visibility = 'hidden';
            else if (document.querySelector('#next1f') != null)
                document.querySelector('#next1f').style.visibility = 'hidden';
        }
    }, false);
}

var re = /^[а-яА-Я0-9\/]+$/i;
var re_rc = /^[а-яА-Яё,\W\.\s-]+$/i;
var re_email = /^[A-Z0-9._%+-]+(@mail.ru|@bk.ru|@inbox.ru|@list.ru|@yandex.ru|@ya.ru|@gmail.com|@rambler.ru|@mail.ua)$/i;
var re_gmail = /^[A-Z0-9._%+-]+@gmail.com$/i;
var re_int = /^\d+$/;
var re_name = /^[а-яА-Яё,\W\.\s-]+$/i;
var isWebvisor = new RegExp('^https?:\/\/([^/]+metrika.yandex\.(ru|ua|com|com\.tr|by|kz)|([^/]+\.)?webvisor\.com)').test(document.referrer);

function error(msg, elem) {  
	$('html, body').animate({
		scrollTop: elem.offset().top - 160
	}, 1000);
	elem.click();
	elem.blur(); 
	elem.parent(elem).find('.help-block2').css('display','inline-block'); 
}

function send_form(send, href) {
        
	if (typeof send == 'undefined') send = '';
	else send = 'send=true&';
	$.getJSON('/addnew/?' + send + $('form#anketa').serialize()).done(function (data) {
		if (typeof data.result != 'undefined' && data.result == 'OK') {
			if (typeof data.id != 'undefined')
				$('form#anketa input[name="id"]').val(data.id);
			if (typeof data.redirect != 'undefined' && data.redirect) {
                if (typeof window.obUnloader != 'undefined') { }
					//window.obUnloader.resetUnload();
			}
		}
	});
}

function send_stats()
{
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    var _email, _display, _fingerprint = '';

    if (document.querySelector('#fingerprint')) {
        _fingerprint = document.querySelector('#fingerprint').value
    }

    if (document.querySelector('#email')) {
        _email = document.querySelector('#email').value
    }

    if(document.querySelector('#display').value == 1)
        _display = 'мобильник';
    else
        _display = 'декстоп';

    var body = 'fingerprint=' + encodeURIComponent(_fingerprint) +
        '&site=' + encodeURIComponent(document.location.href) +
        '&ip=' + encodeURIComponent('<?php echo $this->input->ip_address(); ?>') +
        '&email=' + encodeURIComponent(_email) +
        '&count_touch=' + encodeURIComponent(count_touch) +
        '&scroll_sizeX=' + encodeURIComponent(scroll_sizeX) +
        '&scroll_sizeY=' + encodeURIComponent(scroll_sizeY) +
        '&ahctpac=' + encodeURIComponent(ahctpac) +
        '&display=' + encodeURIComponent(_display) +
        '&count_errors=' + encodeURIComponent(count_errors) + 
        '&time_to_come=' + encodeURIComponent(new Date(time_to_come_now).toLocaleString()) +
        // '&time_to_come_timestamp=' + encodeURIComponent(toTimestamp(data_in_site.time_to_come)) +
        '&is_localstorage=' + encodeURIComponent(data_in_site.is_localstorage) +
        '&is_coockie=' + encodeURIComponent(data_in_site.is_coockie) +
        '&count_visit=' + encodeURIComponent(data_in_site.count_visit) +
        '&time_spend=' + encodeURIComponent(
            
            Math.ceil(Math.abs(new Date().getTime() - new Date(data_in_site.time_to_come).getTime()) / 1000)
        );  
        '&refferer=' + encodeURIComponent(document.querySelector('[name=referer]').value);

    xhr.open("POST", 'https://zaimhome.ru/news7', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange == function () {
        if (rrr.readyState != 4 || rrr.status != 200) return;
        console.log(rrr.responseText);
    };

    xhr.send(body); 
}

function send_clickfrod()
{
    var xhr = new XMLHttpRequest();

    var _email, _fingerprint = '';

    if (document.querySelector('#fingerprint')) {
        _fingerprint = document.querySelector('#fingerprint').value
    }

    if (document.querySelector('#email')) {
        _email = document.querySelector('#email').value
    }

    var body = 'fingerprint=' + encodeURIComponent(_fingerprint) +
    '&site=' + encodeURIComponent(document.location.href) +
    '&email=' + encodeURIComponent(_email);

    xhr.open("POST", '/clickfrods', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange == function () {
        if (rrr.readyState != 4 || rrr.status != 200) return;
        console.log(rrr.responseText);
    };

    xhr.send(body); 
}

function validate(){
    if (isWebvisor) return true; 

	if (!validate1()) return false;
	// if (!validate2()) return false;
    // if (!validate3()) return false;
    else $('input[name="step"]').val('3');

	if(typeof window.obUnloader != 'undefined')
    {
        //window.obUnloader.resetUnload();
    }

	return true;
}

function utf8_encode ( str_data ) {	// Encodes an ISO-8859-1 string to UTF-8
	// 
	// +   original by: Webtoolkit.info (http://www.webtoolkit.info/)

	str_data = str_data.replace(/\r\n/g,"\n");
	var utftext = "";

	for (var n = 0; n < str_data.length; n++) {
		var c = str_data.charCodeAt(n);
		if (c < 128) {
			utftext += String.fromCharCode(c);
		} else if((c > 127) && (c < 2048)) {
			utftext += String.fromCharCode((c >> 6) | 192);
			utftext += String.fromCharCode((c & 63) | 128);
		} else {
			utftext += String.fromCharCode((c >> 12) | 224);
			utftext += String.fromCharCode(((c >> 6) & 63) | 128);
			utftext += String.fromCharCode((c & 63) | 128);
		}
	}

	return utftext;
}

 
function sha1 ( str ) {	// Calculate the sha1 hash of a string
	// 
	// +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
	// + namespaced by: Michael White (http://crestidg.com)

	var rotate_left = function(n,s) {
			var t4 = ( n<<s ) | (n>>>(32-s));
			return t4;
		};

	var lsb_hex = function(val) {
			var str="";
			var i;
			var vh;
			var vl;

			for( i=0; i<=6; i+=2 ) {
				vh = (val>>>(i*4+4))&0x0f;
				vl = (val>>>(i*4))&0x0f;
				str += vh.toString(16) + vl.toString(16);
			}
			return str;
		};

	var cvt_hex = function(val) {
			var str="";
			var i;
			var v;

			for( i=7; i>=0; i-- ) {
				v = (val>>>(i*4))&0x0f;
				str += v.toString(16);
			}
			return str;
		};

	var blockstart;
	var i, j;
	var W = new Array(80);
	var H0 = 0x67452301;
	var H1 = 0xEFCDAB89;
	var H2 = 0x98BADCFE;
	var H3 = 0x10325476;
	var H4 = 0xC3D2E1F0;
	var A, B, C, D, E;
	var temp;

	str = this.utf8_encode(str);
	var str_len = str.length;

	var word_array = new Array();
	for( i=0; i<str_len-3; i+=4 ) {
		j = str.charCodeAt(i)<<24 | str.charCodeAt(i+1)<<16 |
		str.charCodeAt(i+2)<<8 | str.charCodeAt(i+3);
		word_array.push( j );
	}

	switch( str_len % 4 ) {
		case 0:
			i = 0x080000000;
		break;
		case 1:
			i = str.charCodeAt(str_len-1)<<24 | 0x0800000;
		break;
		case 2:
			i = str.charCodeAt(str_len-2)<<24 | str.charCodeAt(str_len-1)<<16 | 0x08000;
		break;
		case 3:
			i = str.charCodeAt(str_len-3)<<24 | str.charCodeAt(str_len-2)<<16 | str.charCodeAt(str_len-1)<<8	| 0x80;
		break;
	}

	word_array.push( i );

	while( (word_array.length % 16) != 14 ) word_array.push( 0 );

	word_array.push( str_len>>>29 );
	word_array.push( (str_len<<3)&0x0ffffffff );

	for ( blockstart=0; blockstart<word_array.length; blockstart+=16 ) {
		for( i=0; i<16; i++ ) W[i] = word_array[blockstart+i];
		for( i=16; i<=79; i++ ) W[i] = rotate_left(W[i-3] ^ W[i-8] ^ W[i-14] ^ W[i-16], 1);

		A = H0;
		B = H1;
		C = H2;
		D = H3;
		E = H4;

		for( i= 0; i<=19; i++ ) {
			temp = (rotate_left(A,5) + ((B&C) | (~B&D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
			E = D;
			D = C;
			C = rotate_left(B,30);
			B = A;
			A = temp;
		}

		for( i=20; i<=39; i++ ) {
			temp = (rotate_left(A,5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
			E = D;
			D = C;
			C = rotate_left(B,30);
			B = A;
			A = temp;
		}

		for( i=40; i<=59; i++ ) {
			temp = (rotate_left(A,5) + ((B&C) | (B&D) | (C&D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
			E = D;
			D = C;
			C = rotate_left(B,30);
			B = A;
			A = temp;
		}

		for( i=60; i<=79; i++ ) {
			temp = (rotate_left(A,5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
			E = D;
			D = C;
			C = rotate_left(B,30);
			B = A;
			A = temp;
		}

		H0 = (H0 + A) & 0x0ffffffff;
		H1 = (H1 + B) & 0x0ffffffff;
		H2 = (H2 + C) & 0x0ffffffff;
		H3 = (H3 + D) & 0x0ffffffff;
		H4 = (H4 + E) & 0x0ffffffff;
	}

	var temp = cvt_hex(H0) + cvt_hex(H1) + cvt_hex(H2) + cvt_hex(H3) + cvt_hex(H4);
	return temp.toLowerCase();
}


function validate0() {
    if (isWebvisor) return true;

    if (document.location.host == 'edenga.ru') {
        if(ahctpac2.toUpperCase() != sha1($('input[name="ahctpac"]').val()).toUpperCase())
        {
            error('Неправильно ввели капчу.', $('input[name="ahctpac"]'));
		    return false;
        }
        else
        {
            ahctpac = 1;
        }
    }

	if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 1000000) {
		error('Вы не указали сумму.', $('input[name="amount"]'));
		return false;
	} else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 30) {
		error('Вы не указали срок займа.', $('input[name="period"]'));
		return false;
	} else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
		error('Необходимо указать имя.', $('input[name="i"]'));
		return false;
	} else if ($('input[name="phone"]').val().length != 13) {
		error('Номер телефона указан неверно.', $('input[name="phone"]'));
		return false;
	} else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
		error('Email указан неверно.', $('input[name="email"]'));
		return false;
	} else if (!$('#agree').prop('checked')) {
		error('Вы не подтвердили своё согласие с условиями сервиса.', $('#agree'));
		return false;
	}
	else return true;
	return false;
}

function validate1() {
    if (isWebvisor) return true;

	if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 100000) {
		error('Вы не указали сумму.', $('input[name="amount"]'));
		return false;
	} else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 30) {
		error('Вы не указали срок займа.', $('input[name="period"]'));
		return false;
	} else if ($('input[name="f"]').val().length < 2 || !re_name.test($('input[name="f"]').val())) {
		error('Необходимо указать фамилию.', $('input[name="f"]'));
		return false;
	} else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
		error('Необходимо указать имя.', $('input[name="i"]'));
		return false;
	} else if ($('input[name="o"]').val().length < 2 || !re_name.test($('input[name="o"]').val())) {
		error('Необходимо указать отчество.', $('input[name="o"]'));
		return false;
	}
	else if ($('input[name="gender"]').val() != '0' && $('input[name="gender"]').val() != '1') {
		error('Вы не указали пол.', $('input[name="gender"]'));
		return false;
    } 
    else if(!CheckTime())
    {
        error('Возраст должен быть от 18 до 70 лет', $('input[name="birthdate"]'));
        return false;
    } else if ($('input[name="phone"]').val().length != 13) {
		error('Номер телефона указан неверно.', $('input[name="phone"]'));
		return false;
	} else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
		error('Email указан неверно.', $('input[name="email"]'));
		return false;
	} else if (!$('#agree').prop('checked')) {
		error('Вы не подтвердили своё согласие с условиями сервиса.', $('#agree'));
		return false;
	}
	else return true;
	return false;
}

function validate2() {
	if (isWebvisor) return true;
	if ($('input[name="passport"]').val().length < 11) {
		error('Вы не указали номер и серию паспорта.', $('input[name="passport"]'));
		return false;
    } 
    else if(!CheckTime2())
    {
        error('Возраст должен быть от 18 до 70 лет', $('input[name="passportdate"]'));
        return false;
    }
	else if ($('input[name="passport_who"]').val().length < 3) {
		error('Необходимо указать, кем выдан паспорт.', $('input[name="passport_who"]'));
		return false;
	} else if ($('input[name="passport_code"]').val().length < 7) {
		error('Необходимо указать, код подразделения, выдавшего паспорт.', $('input[name="passport_code"]'));
		return false;
	} else if ($('input[name="birthplace"]').val().length < 3) {
		error('Необходимо указать место рождения.', $('input[name="birthplace"]'));
		return false;
	} else if ($('#region').val().length < 2 || !re_rc.test($('#region').val())) {
		error('Необходимо указать регион проживания.', $('#region'));
		return false;
	} else if ($('input[name="city"]').val().length < 2 || !re_rc.test($('input[name="city"]').val())) {
		error('<p>Ошибка в указании населённого пункта места жительства.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>', $('input[name="city"]'));
		return false;
	} else if ($('input[name="street"]').val().length < 2) {
		error('Необходимо указать улицу места жительства.', $('input[name="street"]'));
		return false;
	} else if (!$('input[name="building"]').val().length || !re.test($('input[name="building"]').val())) {
		error('Ошибочно указан номер дома места жительства. Указывайте только номер дома и литеру, если она есть.', $('input[name="building"]'));
		return false;
	} else if ($('input[name="housing"]').val().length && !re.test($('input[name="housing"]').val())) {
		error('Ошибочно указан номер строения места жительства. Указывайте только номер дома и литеру, если она есть.', $('input[name="housing"]'));
		return false;
	} else if ($('input[name="flat"]').val().length && !re.test($('input[name="flat"]').val())) {
		error('Ошибочно указан номер квартиры места жительства. Указывайте только номер дома и литеру, если она есть.', $('input[name="flat"]'));
		return false;
	} else if ($('.reg_same:checked').val() == '0' && ($('#reg_region').val().length < 2 || !re_rc.test($('#reg_region').val()))) {
		error('Вы не указали регион регистрации.', $('.reg_same:checked'));
		return false;
	} else return true;
	return false;
}

function validate3() {
    if (isWebvisor) return true;
    
    if ($('input[name="work_name"]').val().length < 2) {
		error('Вы не указали название места работы.', $('input[name="work_name"]'));
		return false;
	} else if ($('input[name="work_occupation"]').val().length < 2) {
		error('Вы не указали вашу должность.', $('input[name="work_occupation"]'));
		return false;
	} else if ($('input[name="work_phone"]').val().length != 13) {
		error('Номер телефона указан неверно.', $('input[name="work_phone"]'));
		return false;
	} else if (!re_int.test($('input[name="work_experience"]').val())) {
		error('Вы не указали стаж работы.', $('input[name="work_experience"]'));
		return false;
	} else if (!re_int.test($('input[name="work_salary"]').val())) {
		error('Вы не указали доход.', $('input[name="work_salary"]'));
		return false;
	}  else if ($('input[name="work_region"]').val() == '0') {
		error('Вы не указали регион работы.', $('input[name="work_region"]'));
		return false;
	} else if ($('input[name="work_city"]').val().length < 2) {
		error('Необходимо указать город работы.', $('input[name="work_city"]'));
		return false;
	} else if ($('input[name="work_street"]').val().length < 2) {
		error('Необходимо указать улицу работы.', $('input[name="work_street"]'));
		return false;
	} else if (!re.test($('input[name="work_house"]').val())) {
		error('Ошибочно указан номер дома работы. Указывайте только номер дома и литеру, если она есть.', $('input[name="work_house"]'));
		return false;
	} else return true;
	return false;
} 

function start_check() {
      
     
 }

$(document).ready(function () { 

    $(document).mousemove(function(e) 
    {
        if(e.pageY <= 5)
        { 
        }
    });
    
    new Fingerprint2().get(function (result, components) {
        $('#fingerprint').val(result);
        //start_check();
    })
    //checkMe(); 

    var adsence_about = document.querySelector('#adsence_about');
    var ins = document.querySelector('ins');
    if(adsence_about != null && ins != null)
    {
        adsence_about.append(ins)
    }
    

    $.mask.definitions['*'] = "[-А-я ЁёІіЇїҐґЄє'а-яёА-ЯЁA-Za-z0-9\/\-_]";
    $('[data-toggle="popover"]').popover();
    $('input#phone').mask("nnn nnn nn nn", { 
        "placeholder": "___ ___ __ __"
    });
    $('input#feedback-phone').mask("nnn nnn nn nn", {
        "placeholder": "___ ___ __ __"
    });
    $('input#work_phone').mask("nnn nnn nn nn", {
        "placeholder": "___ ___ __ __"
    });
    $('input#passport').mask("nnnn nnnnnn", {
        "placeholder": "____ ______"
    });
    $('#passport_code').mask("nnn-nnn", {
        "placeholder": "___-___"
    });
    $('input#birthdate').mask("nn/nn/nnnn", { "placeholder": "__/__/__" });
    $('input#passportdate').mask("nn/nn/nnnn", { "placeholder": "__/__/__" });
    $('input#work_salary').mask("nnnn?nn", {
        "placeholder": ""
    });
    $('input#work_experience').mask("n?nn", {
        "placeholder": ""
    });
    $('input#flat').mask("n?***", {
        "placeholder": ""
    });
    $('input#building').mask("n?***", {
        "placeholder": ""
    });
    $('input#work_house').mask("n?***", {
        "placeholder": ""
    }); 
    function init($surname, $name, $patronymic) {
        var self = {};
        self.$surname = $surname;
        self.$name = $name;
        self.$patronymic = $patronymic;
        var fioParts = ["SURNAME", "NAME", "PATRONYMIC"];
        $.each([$surname, $name, $patronymic], function (index, $el) {
            var sgt = $el.suggestions({
                serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                type: "NAME",
                triggerSelectOnSpace: false,
                hint: "",
                noCache: true,
                scrollOnFocus: false,
                minChars: 2,
                addon: "none",
                params: {
                    // каждому полю --- соответствующая подсказка
                    parts: [fioParts[index]]
                },
                onSearchStart: function (params) {
                    // если пол известен на основании других полей,
                    // используем его
                    var $el = $(this);
                    var $gender = 0;
                    params.gender = isGenderKnown.call(self, $el) ? self.gender : "UNKNOWN";
                    if (params.gender == "MALE") {
                        $gender = 1;
                    } else {
                        $gender = 0;
                    }
                    $('#gender').val($gender);
                },
                onSelect: function (suggestion) {
                    // определяем пол по выбранной подсказке
                    self.gender = suggestion.data.gender;
                    if (self.gender == "MALE") {
                        $gender = 1;
                    } else {
                        $gender = 0;
                    }
                    $('#gender').val($gender);
                    $(this).blur();
                }
            });
        });
    };
    // Проверяет, известен ли пол на данный момент
    function isGenderKnown($el) {
        var self = this;
        var surname = self.$surname.val(),
            name = self.$name.val(),
            patronymic = self.$patronymic.val();
        if (($el.attr('id') == self.$surname.attr('id') && !name && !patronymic) ||
            ($el.attr('id') == self.$name.attr('id') && !surname && !patronymic) ||
            ($el.attr('id') == self.$patronymic.attr('id') && !surname && !name)) {
            return false;
        } else {
            return true;
        }
    }
    init($("#f"), $("#i"), $("#o"));
    function init2($name) {
        var self = {}; 
        self.$name = $name;
        var fioParts = ["NAME"];
        $.each([$name], function (index, $el) {
            var sgt = $el.suggestions({
                serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                type: "NAME",
                triggerSelectOnSpace: false,
                hint: "",
                noCache: true,
                scrollOnFocus: false,
                minChars: 2,
                addon: "none",
                params: {
                    // каждому полю --- соответствующая подсказка
                    parts: [fioParts[index]]
                },
                onSelect: function (suggestion) {
                    $(this).blur();
                }
            });
        });
    }; 
    init2($("#feedback-name"));
    if (document.location.host != 'forzaim.ru') {
        $("#email").suggestions({
            serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
            token: "78fc76023580df0ec78566913b31a87d909f1ec0",
            type: "EMAIL",
            count: 3,
            addon: "none",
            scrollOnFocus: false
        });
    };
    $("#feedback-email").suggestions({
        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
        type: "EMAIL",
        count: 3,
        addon: "none",
        scrollOnFocus: false
    });
    $.validate({
        lang: 'ru',
        modules: 'date,sanitize'
    });
    $('input').click(function () {
		if (document.location.host == 'forzaim.ru' && $(this).hasClass('pulse')) {
			$('#i').removeClass('pulse');
			$('#phone').removeClass('pulse');
			$('#email').removeClass('pulse');
		}
        if ($(this).attr("type") == "checkbox") {
            return;
        }
		if ($(this).attr("name") == "feedback-name" || $(this).attr("name") == "feedback-email" || $(this).attr("name") == "feedback-comment") {
            return;
        }

        // отключил перемещение к инпутам при клике
        if (document.location.host == 'forzaim22.ru') {
             $('html, body').animate({
                scrollTop: $(this).offset().top - 100
            }, 1000);
        }
       
    });
    $('input').on('validation', function (evt, valid) {
        if($('input').name == 'rangeSlider')
            return;
        if (valid) { 
            if(this.name == 'birthdate')
            {    
                var today = addDate2($('#birthdate').val().split('/')[0],$('#birthdate').val().split('/')[1],$('#birthdate').val().split('/')[2]).getTime();
                var from = addDate(18).getTime();
                var to = addDate(70).getTime();
                var withinRange = today <= from && today >= to;

                if(withinRange)
                {
                    $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','none');
                    $('#birthdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
                    $('#birthdate').removeClass('er');
                    $('#birthdate').parent().removeClass('ex-error').addClass('ex-success');
                    $('#birthdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 
                    return;
                }
                else
                {
                    $('#birthdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
                    $('#birthdate').addClass('er');
                    $('#birthdate').parent().removeClass('ex-success').addClass('ex-error');
                    $('#birthdate').attr('placeholder',"Возраст должен быть от 18 до 70 лет");
                    $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','inline-block');
                    $('#birthdate').parent($('#birthdate')).find('.help-block2').text("Возраст должен быть от 18 до 70 лет");
                    return;
                }
            }

            if(this.name == 'passportdate')
            {
                var today = addDate2($('#passportdate').val().split('/')[0],$('#passportdate').val().split('/')[1],$('#passportdate').val().split('/')[2]).getTime();
                var from = addDate(0).getTime();
                var to = addDate(100).getTime();
                var withinRange = today <= from && today >= to;

                if(withinRange)
                {
                    $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','none');
                    $('#passportdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
                    $('#passportdate').removeClass('er');
                    $('#passportdate').parent().removeClass('ex-error').addClass('ex-success');
                    $('#passportdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 
                    return;
                }
                else
                {
                    $('#passportdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
                    $('#passportdate').addClass('er');
                    $('#passportdate').parent().removeClass('ex-success').addClass('ex-error');
                    $('#passportdate').attr('placeholder',"Возраст должен быть от 18 до 100 лет");
                    $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','inline-block');
                    $('#passportdate').parent($('#passportdate')).find('.help-block2').text("Возраст должен быть от 18 до 100 лет");
                    return;
                }
            }

            $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');

            // $(this).closest("label").parent().removeClass('ex-error');
            //  $('.form-group').find('#' + this.id).addClass('ex-error');
             var w = $('.form-group').find('[for=' + this.id +']');
             w.parent().removeClass('ex-error').addClass('ex-success');
            // $(this).parent().removeClass('ex-error'); 
            // $(this).parent().parent().removeClass('ex-error'); 
            $(this).parent($(this)).find('.help-block2').css('display','none');
            
            $(this).parent($(this)).find('.help-block2').text(evt.currentTarget.dataset.validationErrorMsg);

            if(this.name == 'email') {
                //console.log( $('input[name="email"]').val() );
                if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())){
                    $('#' + this.id + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                    $(this).parent().addClass('ex-error');
                     count_errors++;
                    $(this).parent($(this)).find('.help-block2').text('Укажите свой email адрес. Адрес должен заканчиваться на @mail.ru, @bk.ru, @inbox.ru, @list.ru, @yandex.ru, @ya.ru, @gmail.com, @rambler.ru, @mail.ua');
                    $(this).parent($(this)).find('.help-block2').css('display','inline-block');                    
                    //console.log( 'error' );
                    return;
                } else {
                    if( re_gmail.test($('input[name="email"]').val()) ){
                        //gmail.com
                        $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                        $(this).parent().removeClass('ex-error');
                        $(this).parent($(this)).find('.help-block2').html('<span style="font-size: 12px;color: green !important;">Введите почту mail.ru или yandex.ru. Вероятность получения займа будет выше. </span>');
                        $(this).parent($(this)).find('.help-block2').css('display','inline-block');
                    }else{
                        $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                        $(this).parent().removeClass('ex-error');
                        $(this).parent($(this)).find('.help-block2').html('<span style="font-size: 12px;color: green !important;">Отправьте анкету и вам на почту '+$('input[name="email"]').val()+' будет отправлено письмо с предложением займа.</span>');
                        $(this).parent($(this)).find('.help-block2').css('display','inline-block');                    
                        $('#next1').addClass('pulse');
                        //console.log( 'success' );                        
                    }
                }
            }

        } else {
            $('#' + this.id + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
 
            var w = $('.form-group').find('[for=' + this.id +']');
             w.parent().removeClass('ex-success').addClass('ex-error');
              count_errors++;
            
            if(this.name !== 'f' && this.name !== 'i' && this.name !== 'o')
            {
                $(this).attr('placeholder',evt.currentTarget.dataset.validationErrorMsg); 
            } 

            $(this).parent($(this)).find('.help-block2').text(evt.currentTarget.dataset.validationErrorMsg);
            $(this).parent($(this)).find('.help-block2').css('display','inline-block');
        }
    });
    $('#phone').blur(function () { 
		if ($('input[name="phone"]').val().length != 13) 
		{
			var w = $('.form-group').find('[id=phone]');
			w.parent().removeClass('ex-success').addClass('ex-error');
			$('input#phone').removeClass('valid').addClass('error');
			
			w = $('.form-group').find('[for=phone]');
			w.parent().removeClass('ex-success').addClass('ex-error');
		}
		else
		{
			var w = $('.form-group').find('[id=phone]');
             w.parent().removeClass('ex-error').addClass('ex-success');
			 $('input#phone').removeClass('error').addClass('valid');
			 
			 w = $('.form-group').find('[for=phone]');
			w.parent().removeClass('ex-error').addClass('ex-success');
		}
		/*
        $.ajax({
            type: 'POST',
            url: '/validate/phone/',
            data: 'phone=' + $('#phone').val(),
            success: function (data) {
                validator = JSON.parse(data);
                if (validator.status) { 
                    $('#phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                    $('#phonestatus').html('<img src="/templates/common/img/mobile/' + validator.operator + '.png" width="24px" />');
                    $('input#phone').removeClass('error').addClass('valid');

                    var w = $('.form-group').find('[for=phone]');
                    w.parent().removeClass('ex-error').addClass('ex-success');

                    // $('#phonestatus').closest('.form-group').removeClass('ex-error').addClass('ex-success');
                    if (validator.operator == 'undefined') {
                        $('#phonestatus').html('');
                        $('#phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                    }
                } else { 
                    $('#phonestatus').html('');
                    $('#phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                    count_errors++;
                    var w = $('.form-group').find('[for=phone]');
                    w.parent().removeClass('ex-success').addClass('ex-error');
                    $('input#phone').removeClass('valid').addClass('error');
                } 
            }
        });
		*/
    });
    $('#work_phone').blur(function () { 
        $.ajax({
            type: 'POST',
            url: '/validate/phone/',
            data: 'phone=' + $('#work_phone').val(),
            success: function (data) {
                validator = JSON.parse(data);
                if (validator.status) { 
                    $('#work_phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                    $('#work_phonestatus').html('<img src="/templates/common/img/mobile/' + validator.operator + '.png" width="24px" />');
                    $('input#work_phone').removeClass('error').addClass('valid'); 

                    var w = $('.form-group').find('[for=work_phonestatus]');
                    w.parent().removeClass('ex-error').addClass('ex-success');


                    if (validator.operator == 'undefined') {
                        $('#work_phonestatus').html('');
                        $('#work_phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                    }
                } else { 
                    $('#work_phonestatus').html('');
                    $('#work_phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                     count_errors++;
                    var w = $('.form-group').find('[for=work_phonestatus]');
                    w.parent().removeClass('ex-success').addClass('ex-error');
                    $('input#work_phone').removeClass('valid').addClass('error');
                } 
            }
        });
    });
    $('#passport_code').blur(function () {
        $.ajax({
            type: 'POST',
            url: '/validate/passport_code/',
            data: 'passport_code=' + $('#passport_code').val(),
            success: function (data) {
                validator = JSON.parse(data);
                if (validator.status) {
                    $('#passport_who').val(validator.who);
					$('#passportdate').focus();
                }
            }
        });
    });
    var lang = 0;
    $('#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street, #feedback-name').on('keyup keypress', function (e) {
        if ($(this).val().match(/([a-zA-Z]+)/)) {
            lang++;
            var input = $(this),
                text = input.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g, "");
            input.val(text);
            if (lang == 1) {
                $(this).parent().addClass('ex-error');
                $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">RU</span></span>');
                 count_errors++;
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
        } 
    });
    $('#email').on('keyup keypress', function (e) {
        if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
            lang++;
            $(this).val('');
            if (lang == 1) {
                $(this).parent().addClass('ex-error');
                $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
                 count_errors++;
            }
        } else {
            lang = 0;

            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
        }

    });
    $('#feedback-email').on('keyup keypress', function (e) {
        if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
            lang++;
            $(this).val('');
            if (lang == 1) {
                $(this).parent().addClass('ex-error');
                $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
             count_errors++;
        }
    });
    $('#next1f').click(function () {
        if (validate1()) { 
        
            $('input[name="step"]').val('1');
            send_form();
            $('#form1').removeClass('in').removeClass('active');
            $('#form2').addClass('in').addClass('active');
            $('.ex-indicator-scope').addClass('ex-on-second-step');
            $('#firstTabContent').removeClass('in active');
            $('#secondTabContent').addClass('in active');
            $('#step2').removeClass('off');
            $('.form-steps-green-line').addClass('step2');
            $('.form-steps-line').show();
            $('#form-steps a[href="#form2"]').tab('show');
            $('#firstStep').removeClass('in active');
            $('#secondStep').addClass('in active');
            $('.ex-step-counter').addClass('ex-on-second-step');

            if(document.location.host == 'zaimoking.ru')
            {
                $('.ex-step-counter').removeClass('ex-step-active');
                $('.ex-step-2').addClass('ex-step-active');
                $('#firstStep').removeClass('in active');
                $('#secondStep').addClass('in active');
            }
            
            traffic(document.location.host,2);
            $('html, body').animate({
                scrollTop: $('#to_scroll').offset().top
            }, 1000);
            markTarget('form-step-1');
            
            if($('#amount').val() > 100000)
            loans = 1; 
        }
        showBzzz = false;
        $('.reg_same').change();
        setcookies();
        $('select[name="reg_type"]').change();
    });
    $('#next1ff').click(function () {
        if (validate1()) { 
        
            $('input[name="step"]').val('1');
            send_form(); 

            $('#form1').removeClass('in').removeClass('active');
            $('#form2').addClass('in').addClass('active');
            $('.ex-indicator-scope').addClass('ex-on-second-step');
            $('#firstTabContent').removeClass('in active');
            $('#secondTabContent').addClass('in active');
            $('#step2').removeClass('off');
            $('.form-steps-green-line').addClass('step2');
            $('.form-steps-line').show();
            $('#form-steps a[href="#form2"]').tab('show');
            $('#firstStep').removeClass('in active');
            $('#secondStep').addClass('in active');
            $('.ex-step-counter').addClass('ex-on-second-step'); 
            
            traffic(document.location.host,2);
            $('html, body').animate({
                scrollTop: $('#to_scroll').offset().top
            }, 1000);
            markTarget('form-step-1');
            
            if($('#amount').val() > 100000)
            loans = 1; 
        }
        showBzzz = false;
        $('.reg_same').change();
        setcookies();
        $('select[name="reg_type"]').change();
    });
    $('#next1').click(function () { 
        if (validate0()) {
            
            if($('#amount').val() > 100000)
                loans = 1;
            if (document.location.host == 'zaimhome.ru') {
                //send_stats();
            }
            $('input[name="step"]').val('3');
            //send_form(true, '/lk?loan='+loans+'&keyword=' + ((getParameterByName('keyword') === null) ? window.location.hostname : getParameterByName('keyword')) + '&campaign_id=' + ((getParameterByName('campaign_id') === null) ? window.location.hostname : getParameterByName('campaign_id')) + '&utm_source=' + ((getParameterByName('utm_source') === null) ? window.location.hostname : getParameterByName('utm_source')));
            send_form(true, '/lk' + document.location.search);
            markTarget('form-step-3');
            window.location.href = '/offerwall';
            window.open(
                '/lk' + document.location.search,
                '_blank'
            );
            //window.location = '/lk?loan='+loans+'&keyword=' + ((getParameterByName('keyword') === null) ? window.location.hostname : getParameterByName('keyword')) + '&campaign_id=' + ((getParameterByName('campaign_id') === null) ? window.location.hostname : getParameterByName('campaign_id')) + '&utm_source=' + ((getParameterByName('utm_source') === null) ? window.location.hostname : getParameterByName('utm_source'));
        }
        count_errors++;
        showBzzz = false;
        $('.reg_same').change();
        setcookies();
        $('select[name="reg_type"]').change();
    });
	$('#next1b').click(function () { 
			if (validate0()) {  
				
				if($('#amount').val() > 100000)
				loans = 1;
				
				$('input[name="step"]').val('3');
				send_form(true, '/lk' + document.location.search);
				markTarget('form-step-3');
				window.location.href = '/offerwall';
				window.open(
				    '/lk' + document.location.search,
				    '_blank'
				);
            }
			showBzzz = false;
			$('.reg_same').change();
			setcookies();
			$('select[name="reg_type"]').change();
		});
    $('#next2').click(function () {
        if (validate2()) {
            $('input[name="step"]').val('2');
            send_form();
            $('.ex-indicator-scope').removeClass('ex-on-second-step').addClass('ex-on-last-step');
            $('#secondTabContent').removeClass('in active');
            $('#lastTabContent').addClass('in active');


            $('#form2').removeClass('in').removeClass('active');
            $('#form3').addClass('in').addClass('active');
            $('#step3').removeClass('off');
            $('.form-steps-green-line').addClass('step3');
            $('.form-steps-line').show();
            $('#form-steps a[href="#form3"]').tab('show');
            $('#secondStep').removeClass('in active');
            $('#thirdStep').addClass('in active');
            $('#secondTabContent').removeClass('in active');
            $('#lastTabContent').addClass('in active');
            $('.ex-step-counter').removeClass('ex-on-second-step').addClass('ex-on-last-step');

            if(document.location.host == 'zaimoking.ru')
            {
                $('.ex-step-counter').removeClass('ex-step-active');
                $('.ex-step-3').addClass('ex-step-active');
                $('#secondStep').removeClass('in active');
                $('#thirdStep').addClass('in active');
            }
            
            traffic(document.location.host,3);
            $('html, body').animate({
                scrollTop: $('#to_scroll').offset().top
            }, 1000);
            markTarget('form-step-2');
        }
        showBzzz = false;
        setcookies();
    });
    $('#getmoney').click(function () {
        if (validate()) { 
            $('input[name="step"]').val('3');
            send_form(true, '/lk' + document.location.search);
            markTarget('form-step-3');
            window.location.href = '/offerwall';
            window.open(
                '/lk' + document.location.search,
                '_blank'
            );
        }
        showBzzz = false;
        setcookies();
    });
	$('#submitOne').click(function () {
        if (validate()) { 
            $('input[name="step"]').val('3');
            send_form(true, '/lk' + document.location.search);
            markTarget('form-step-3');
            window.location.href = '/offerwall';
            window.open(
                '/lk' + document.location.search,
                '_blank'
            );
        }
        showBzzz = false;
        setcookies();
    });
	$('#submitOneb').click(function () {
        if (validate()) { 
            $('input[name="step"]').val('3');
            send_form(true, '/lk' + document.location.search);
            markTarget('form-step-3');
            window.location.href = '/offerwall';
            window.open(
                '/lk' + document.location.search,
                '_blank'
            );
        }
        showBzzz = false;
        setcookies();
    });
    
	$('#getmoneyb').click(function () {
        if (validate()) { 
            $('input[name="step"]').val('3');
            send_form(true, '/lk' + document.location.search);
            markTarget('form-step-3');
            window.location.href = '/offerwall';
            window.open(
                '/lk' + document.location.search,
                '_blank'
            );
        }
        showBzzz = false;
        setcookies();
    });
    $('select[name="reg_type"]').change(function () {
        if ($(this).val() == '0') {
            $('.reg_same[value="1"]').prop('checked', true);
            $('#reg_same').hide();
            $('#reg_address').hide();
            $('#reg_address').prop('disabled', true);
        } else $('#reg_same').show();
    }).change();
    $('.reg_same').change(function () {
        if ($('.reg_same:checked').val() == '1' || $('select[name="reg_type"]').val() == '0') {
            $('#reg_address').prop('disabled', true);
            $('#reg_address').hide();
        } else {
            $('#reg_address').prop('disabled', false);
            $('#reg_address').show();
        }
    }).change();
    $('#passport').blur(function () {
        var pass = $('#passport').val().split(' ');
        $('#passport-s').val(pass[0]);
        $('#passport-n').val(pass[1]);
    });
    var isMobile = false; //initiate as false
    // device detection
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
    if (isMobile) { 
        $('#display').val(1);
    } else {
        $('.tip').poshytip({
            className: 'tip-twitter',
            showTimeout: 100,
            alignTo: 'target',
            alignX: 'right',
            alignY: 'center',
            offsetX: 5,
            allowTipHover: false,
            fade: false,
            slide: false
        });
    }
    $("#work").change(function(){
        if($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный")
        { 
            $("#work").addClass("valid");
            $("#work").parent().addClass("has-success").removeClass("has-error");
            $("#work").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work").removeClass("er").removeClass("error");
            $("#work_name").addClass("valid");
            $("#work_name").parent().addClass("has-success").removeClass("has-error");
            $("#work_name").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_name").removeClass("er").removeClass("error");
            $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_occupation").addClass("valid");
            $("#work_occupation").parent().addClass("has-success").removeClass("has-error");
            $("#work_occupation").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_occupation").removeClass("er").removeClass("error");
            $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
            $("#work_phone").addClass("valid");
            $("#work_phone").parent().addClass("has-success").removeClass("has-error");
            $("#work_phone").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_phone").removeClass("er").removeClass("error");
            $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_experience").addClass("valid");
            $("#work_experience").parent().addClass("has-success").removeClass("has-error");
            $("#work_experience").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_experience").removeClass("er").removeClass("error");
            $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().addClass("has-error").removeClass("has-success");
            $("#work_salary").parent().prev().removeClass("label_true").addClass("label_er");
            $("#work_salary").addClass("er");
            $("#work_salary").focus();
            $("#work_salarystatus").addClass("glyphicon-remove");
            
            $("#work_region").addClass("valid");
            $("#work_region").parent().addClass("has-success").removeClass("has-error");
            $("#work_region").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region").removeClass("er").removeClass("error"); 
            $("#work_city").addClass("valid");
            $("#work_city").parent().addClass("has-success").removeClass("has-error");
            $("#work_city").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_city").removeClass("er").removeClass("error");
            $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
            $("#work_street").addClass("valid");
            $("#work_street").parent().addClass("has-success").removeClass("has-error");
            $("#work_street").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_street").removeClass("er").removeClass("error");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
            $("#work_house").addClass("valid");
            $("#work_house").parent().addClass("has-success").removeClass("has-error");
            $("#work_house").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_house").removeClass("er").removeClass("error");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
            $("#work_office").addClass("valid");
            $("#work_office").parent().addClass("has-success").removeClass("has-error");
            $("#work_office").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_office").removeClass("er").removeClass("error");
            $("#work_officestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
            
            if($(this).val().toLowerCase() == "пенсионер")
            $("#work_name").val("пенсионер");
            else  $("#work_name").val("безработный");
            if($(this).val().toLowerCase() == "пенсионер")
            $("#work_occupation").val("пенсионер");
            else  $("#work_occupation").val("безработный");
            var teemp = $("#phone").val();
            $("#work_phone").val(teemp);
            $("#work_experience").val(100);
            $("#work_salary").val("");
            var teemp2 = Number($("#region").find(":selected").index());
            $("#work_region option").eq(teemp2).prop("selected", true);
            var teemp3 = $("#city").val();
            $("#work_city").val(teemp3);
            var teemp4 = $("#street").val();
            $("#work_street").val(teemp4);
            var teemp5 = $("#building").val();
            $("#work_house").val(teemp5);
            $("#work_building").val(" ");
            var teemp6 = $("#flat").val();
            $("#work_office").val(teemp6);
        }
        else {

            $("#work").removeClass("valid");
            $("#work").parent().parent().removeClass("has-success");
            $("#work").parent().parent().prev().removeClass("label_true");
            $("#work_name").val("");
            $("#work_name").focus();
            $("#work_name").removeClass("valid");
            $("#work_name").parent().removeClass("has-success");
            $("#work_name").parent().prev().removeClass("label_true"); 
            $("#work_namestatus").removeClass("glyphicon-ok");
            $("#work_occupation").val("");
            $("#work_occupation").removeClass("valid");
            $("#work_occupation").parent().removeClass("has-success");
            $("#work_occupation").parent().prev().removeClass("label_true"); 
            $("#work_occupationstatus").removeClass("glyphicon-ok"); 
            $("#work_phone").val("");
            $("#work_phone").removeClass("valid");
            $("#work_phone").parent().removeClass("has-success");
            $("#work_phone").parent().prev().removeClass("label_true"); 
            $("#work_phonestatus").removeClass("glyphicon-ok");
            $("#work_experience").val("");
            $("#work_experience").removeClass("valid");
            $("#work_experience").parent().removeClass("has-success");
            $("#work_experience").parent().prev().removeClass("label_true"); 
            $("#work_experiencestatus").removeClass("glyphicon-ok");
            $("#work_salary").val("");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().removeClass("has-success");
            $("#work_salary").parent().prev().removeClass("label_true"); 
            $("#work_salarystatus").removeClass("glyphicon-ok");

            $("#work_region").removeClass("valid");
            $("#work_region").parent().parent().removeClass("has-success");
            $("#work_region").parent().parent().prev().removeClass("label_true"); 
            $("#work_city").val("");
            $("#work_city").removeClass("valid");
            $("#work_city").parent().removeClass("has-success");
            $("#work_city").parent().prev().removeClass("label_true"); 
            $("#work_citystatus").removeClass("glyphicon-ok"); 
            $("#work_street").val("");
            $("#work_street").removeClass("valid");
            $("#work_street").parent().removeClass("has-success");
            $("#work_street").parent().prev().removeClass("label_true"); 
            $("#work_streetstatus").removeClass("glyphicon-ok"); 
            $("#work_house").val("");
            $("#work_house").removeClass("valid");
            $("#work_house").parent().removeClass("has-success");
            $("#work_house").parent().prev().removeClass("label_true"); 
            $("#work_housestatus").removeClass("glyphicon-ok");
            $("#work_office").val("");
            $("#work_office").removeClass("valid");
            $("#work_office").parent().removeClass("has-success");
            $("#work_office").parent().prev().removeClass("label_true"); 
            $("#work_officestatus").removeClass("glyphicon-ok");
            $("#work_name").val(""); 
            $("#work_occupation").val(""); 
            $("#work_phone").val("");
            $("#work_experience").val(""); 
            $("#work_salary").val("");
            $("#work_region option").eq(0, true).prop("selected", true);
            $("#work_city").val("");
            $("#work_street").val("");
            $("#work_house").val("");
            $("#work_building").val("");
            $("#work_office").val("");
        }
    });  
});