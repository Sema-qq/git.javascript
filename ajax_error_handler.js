
    // параметры ajax'а
            success: function (data) {
                var message = data.result == 0
                    ? 'Задание на обзвон успешно создано'
                    : 'Произошла ошибка при создании обзвона: ' + errorMessage(data.message);
                alert(message);
            },
            error: function (xhr) {
                alert('Произошла ошибка: ' + xhr.responseText);
            }
    
    
    /**
     * Возвращает сообщение об ошибке валидации
     * @param messages
     * @returns {string}
     */
    function errorMessage(messages) {
        var string = '';
        for (var prop in messages) {
            var array = messages[prop];
            for (var i = 0; i < array.length; i++) {
                string += array[i] + '. ';
            }
        }
        return string;
    }
