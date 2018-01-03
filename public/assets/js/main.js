$(function () {
    $('.select_limit').change(function () {
        var limit = $(this).val();
        var currentLocation = window.location;
        var curPage = $('#curPage').val();
        var str_local = currentLocation.pathname + '?limit=' + limit;
        if (curPage > 1) {
            str_local += '&page=' + curPage;
        }
        window.location.href = str_local;
    });
    $('.menu-bar').click(function () {
        if ($('.slide_menu').attr('style') == 'top: 0px;') {
            $('body').removeAttr('style');
            $('.slide_menu').animate({'top': '-110vh'});
            $('#icon_bar').removeClass('icon-close');
            $('#icon_bar').addClass('fa-bars');
        } else {
            $('body').attr('style', 'height:100vh;overflow: hidden');
            $('.slide_menu').animate({'top': '0px'});
            $('#icon_bar').removeClass('fa-bars');
            $('#icon_bar').addClass('icon-close');
        }
    });
    $('.menu-select').change(function () {
        location.href = $(this).val();
    });
    $('input:required').change(function () {
        if ($(this).val() != '') {
            $(this).addClass('inputed');
        } else {
            $(this).removeClass('inputed');
        }
    });
    $('.list-image img').click(function () {
        $('.main-image img').attr('src', $(this).attr('src'));
        if (!$(this).hasClass('active')) {
            $('.list-image img').removeClass('active');
            $(this).addClass('active');
        }
    });
    $('input[type=radio]').click(function () {
        if ($('#optionsRadios11').is(':checked')) {
            $('.toggle-item').show();
            $('.specia').addClass('cheked');
        } else {
            $('.toggle-item').hide();
            $('.specia').removeClass('cheked');
        }
    });
    $('.ta-h-auto').keydown(autosize);
    $('.ta-h-auto').each(function (e) {
        $(this).height($(this)[0].scrollHeight);
    });
    $('input:required').each(function(e){
        if ($(this).val() != '') {
            $(this).addClass('inputed');
        }
    })
});

function autosize() {
    var el = this;
    setTimeout(function () {
        el.style.cssText = 'height:auto; padding:0';
        // for box-sizing other than "content-box" use:
        // el.style.cssText = '-moz-box-sizing:content-box';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    }, 0);
}

function numberFormat(n){
    var re = '\\d(?=(\\d{3})+$)';
    return parseFloat(n).toFixed(0).replace(new RegExp(re, 'g'), '$&,');
}
$('select[name=page_limit]').change(function () {
    $url = $('#url').val();
    window.location.href = $url+'?page=1&limit='+$('select[name=page_limit]').val();
});
$('select[name=page_limit_footer]').change(function () {
    $url = $('#url').val();
    window.location.href = $url+'?page=1&limit='+$('select[name=page_limit_footer]').val();
});

$(document).ready(function () {
    $('.search_zip_code').click(function () {
        var zip_code = $('input[name=zip_code]').val();
        $('.alert-zip-code').addClass('hidden');
        if(zip_code == ''){
            $('.zip-code-blank').removeClass('hidden');
            return;
        }
        else {
            $('.zip-code-blank').addClass('hidden');
        }
        if (!zip_code.match(/[0-9]/) ) {
            $('.zip-code-fail').removeClass('hidden');
            return;
        }
        else{
            $('.zip-code-fail').addClass('hidden');
        }
        var endpoint = 'https://madefor.github.io/postal-code-api/api/v1';
        var code1 = zip_code.replace(/^([0-9]{3}).*/, "$1");
        var code2 = zip_code.replace(/.*([0-9]{4})$/, "$1");
        var url = endpoint + '/' + code1 +'/' + code2 + '.json';
        $.ajax({url: url,
            success: function(result){
                var data_temp = JSON.stringify(result.data[0]);
                var data = JSON.parse(data_temp);
                var address = data.ja.address1+data.ja.address2
                $('input[name=city_country]').val(address);
                $('select[name=prefectures]').val(data.prefcode);
            },
            statusCode: {
                404: function() {
                    $('.alert-zip-code').removeClass('hidden');
                }
            }
        });
    });

});
function sortData(item_id){
    var obj_cond = $('#'+item_id);
    if(obj_cond.val() == 'desc'){
        obj_cond.val('asc');
    }else{
        obj_cond.val('desc');
    }
    obj_cond.prop('disabled',false).parents('form').submit();
}
function checkInput(obj){
    if(typeof obj  == 'undefined'){
        return false;
    }
    var str_value = obj.value;
    var maxlength = obj.maxLength;
    if(str_value.length > maxlength){
        obj.value = $(obj).val().slice(0,maxlength);
    }
}

