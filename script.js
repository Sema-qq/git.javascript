//вернуться на текущую страницу
window.location.reload();

//если в битриксе на одном шаблоне несколько сайтов, и нужен разный вывод виджетов лидбека

var code;
if(window.location.hostname == "urlsite"){
  code = 'code1';
}
else if(window.location.hostname == "urlsite2"){
  code = 'code2';
}
var _emv = _emv || [];
  _emv['campaign'] = code;
  (function() {
    var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
    em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
  })();
//если надо получить после слеша, до слеша значение
window.location.pathname.split('/')[1]


//не даем ничего ввводить в текстовое поле, нужно для валидации датапикеров через required
$(document).ready(function() {
  $('.selector').on('input',function() {
    $(this).val('');
  });
});

//удалить всё что не в тегах после элемента
$(document).ready(function(){
    $("h2.carttitle").each(function () {
        this.nextSibling.parentNode.removeChild(this.nextSibling);
    });
});

//обрезать строку как на пхп
function splitString(stringToSplit, separator) {
    var arrayOfStrings = stringToSplit.split(separator);
    return arrayOfStrings[1];
}

//формирование url
 var url = window.location.protocol + '//'
        + window.location.host
        + window.location.pathname;
