<?php


/* style.css
в стили, для блока, что будет появляться

.s_tooltip {
     margin-top: 10px;
     padding: 10px 20px;
     position: absolute;
     display: none;
     text-align: left;
     color: #5f6771;
     border: 1px solid #b6bbc1;
     border-radius: 6px;
     background: #ffffff;
     box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.2);
     z-index: 1;
}
*/


/*
в скрипты jscript.js

$('.tool_type').on('mouseover', function (eventObject) {
        $(eventObject.currentTarget).find('.s_tooltip').css('display', 'block');
       $(eventObject.currentTarget).find('.s_tooltip').css('opacity', 0.87);
   });
   $('.tool_type').on('mouseout', function (eventObject) {
       $(eventObject.currentTarget).find('.s_tooltip').css('display', 'none');
   });

*/

/*
класс для блока родителя, при наведении на который, будет появляться всплывашка tool_type

класс для элемента, который должен быть в родителе (либо подключен в родителя), чтобы всплывать s_tooltip

*/


