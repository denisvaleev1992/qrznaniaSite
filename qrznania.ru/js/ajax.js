
	function call() {
		var msg   = $('#formx').serialize();
			$.ajax({
				// Метод передачи
				type: 'POST',
				 // Файл которому передаем запрос и получаем ответ
				url: 'https://qrznania.ru/get.php',
				 // Кеширование
				cache: false,
				 // Верямя ожидания ответа, в мили секундах 1000 мс = 1 сек
				timeout:5000,
				data: msg,
				// Функция сработает при успешном получении данных
				success: function(data) {
					// Отображаем данные в форме
					if (data.error==0) {
						$('#elem').html('');
						let div1 = document.createElement('div');
	 					div1.className = "entry-img";
	 					div1.style.backgroundImage = "url('images/"+data.img+"')"; 
	 					let div2 = document.createElement('div');
						div2.className = "entry-desc";
						div2.innerHTML = "<h3>"+data.title+"</h3>"+data.text;
						var elem = document.getElementById("elem");
	 					elem.append(div1);
	 					elem.append(div2);
	 					$('title').text(data.title);
					} else if (data.error==1) {
						$('#myModal').modal('show');
					} else if (data.error==2) {
						$('#myModal3').modal('show');
					}	
				},
				 // Тип данных
				dataType:"json",
				 // Функция сработает в случае ошибки
				error:  function(data){
						$('#myModal2').modal('show');
					}
				});
			} 

