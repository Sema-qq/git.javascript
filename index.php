<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#done").click(function () {
                var fail = false;
                var name = $("#name").val ();
                var cat = form.cat.value;
                if (name.length < 3) fail = "Вы ввели слишком короткое название!";
                else if (cat == "") fail = "Вы не выбрали кузов!";
                else if ($("input:checkbox:checked").prop("checked"))
                    var dop = $.map( $(":checkbox:checked"), function(el){ return $(el).val(); });
                else fail = "Вы не выбрали доп. оборудование!";
                if (fail != false)  alert(fail);
                else {
                    $.ajax ({
                        url: '/ajax/connect.php',
                        type: 'POST',
                        cache: false,
                        data: {'name': name, 'cat': cat, 'dop': dop},
                        dataType: 'html',
                        success: function () {
                            alert("Данные переданы на обработку!");
                            $('#myform')[0].reset();
                        }
                    }); }
            });
        });
    </script>
</head>
<body>
<form name="form" method="post" action="connect.php" id="myform">
    <br /><br />
    <label for="name"><b>Введите марку автомобиля:</b></label><br />
    <input type="text" placeholder="Введите марку автомобиля" id="name" name="name"/><br /><br />
    <label><b>Выберите кузов:</b></label><br />
    <label for="cat1">Седан</label><input type="radio" name="cat" id="cat1" value="Седан"/>
    <label for="cat2">Хэтчбэк</label><input type="radio" name="cat" id="cat2" value="Хэтчбэк"/>
    <label for="cat3">Универсал</label><input type="radio" name="cat" id="cat3" value="Универсал"/>
    <label for="cat4">Купе</label><input type="radio" name="cat" id="cat4" value="Купе"/>
    <br /><br />
    <label><b>Выберите дополнительное оборудование:</b></label><br />
    <label for="dop1">Защита</label><input type="checkbox" id="dop1" class="dop" value="Защита"/>
    <label for="dop2">Тонировка</label><input type="checkbox" id="dop2" class="dop" value="Тонировка"/>
    <label for="dop3">Коврики</label><input type="checkbox" id="dop3" class="dop" value="Коврики"/>
    <label for="dop4">Сигнализация</label><input type="checkbox" id="dop4" class="dop" value="Сигнализация"/>
    <label for="dop5">Фаркоп</label><input type="checkbox" id="dop5" class="dop" value="Фаркоп"/>
    <label for="dop6">Ксенон</label><input type="checkbox" id="dop6" class="dop" value="Ксенон"/>
    <br /><br />
    <div id="display"></div>
    <input type="button" method="post" value="Купить" name="done" id="done"/>
</form>
<!--перебирать элементы и записывать в них что то -->
<script type="text/javascript">
	$(document).ready(function(){
		var href = $('.side_menu_wrap ul li a').attr('href')+'#page-content';
		$('.side_menu_wrap ul li a').each(function(){
			$(this).attr('href')+href;
		});
	});
</script>


</body>
</html>
