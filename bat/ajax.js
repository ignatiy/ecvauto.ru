$(document).ready(function() { // вся магия после загрузки страницы
	$("#ajaxform").submit(function(){ // перехватываем все при событии отправки
		var form = $(this); // запишем форму, чтобы потом не было проблем с this
		var error = false; // предварительно ошибок нет
		form.find('input').each( function(){ // пробежим по каждому полю в форме
			if ($(this).val() == '') { // если находим пустое
				alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
				error = true; // ошибка
			}
		});
		if (!error) { // если ошибки нет
			var data = form.serialize(); // подготавливаем данные
			$.ajax({ // инициализируем ajax запрос
			   type: 'POST', // отправляем в POST формате, можно GET
			   url: '/bat/mail.php', // путь до обработчика, у нас он лежит в той же папке
			   dataType: 'json', // ответ ждем в json формате
			   data: data, // данные для отправки
		       beforeSend: function(data) { // событие до отправки
		            form.find('button[type="submit"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
		          },
		       success: function(data){ // событие после удачного обращения к серверу и получения ответа
		       		if (data['error']) { // если обработчик вернул ошибку
		       			alert(data['error']); // покажем её текст
		       		} else { // если все прошло ок
		       			alert('Письмо отвравлено!'); // пишем что все ок
		       		}
		         },

		       complete: function(data) { // событие после любого исхода
		            form.find('button[type="submit"]').prop('disabled', false); // в любом случае включим кнопку обратно
		         }
		                  
			     });
		}
		return false; // вырубаем стандартную отправку формы
	});
});