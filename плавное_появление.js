function cycleText(i)
{
    var arSlogan = ['Без скидок клиентам', 'Без изменения сайта', 'Без рекламы'];

    if(!i || i >= arSlogan.length)
        i = 0;

    $('.text_hide').text( arSlogan[i] ).fadeIn(1500).fadeOut(1500, function() {
        cycleText(++i);
    });
}

cycleText();
