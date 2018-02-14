            фиксированная кнопка
            <?= Html::submitButton('Сохранить', [
                'class' => 'btn btn-success',
                'style' => 'position: fixed; left: 150px; top: 8px; z-index: 1100;',
                'onClick' => '$(".wrap").showLoading({"hPos": "right", "vPos": "top", "overlayZIndex": "-1000", "css":{position: "fixed",top: "50%", left: "45%",}});',
            ]); ?>
