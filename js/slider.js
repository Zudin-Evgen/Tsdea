(function(){
	var container = document.querySelector('.slider');
	var slides = container.querySelector('.slides');
	var slide;
	var slideWidth;
	var intervalId;
	var leftArrow = container.querySelector('.arrow-left');
	var rightArrow = container.querySelector('.arrow-right');
	var slider = {
		imgPosition: 'center', /* Расположение фотографии. 
		Принимает значения:
		'center'(отобразить по центру), 'left'(смещение влево),'right'(смещение вправо) */
		duration: 1000, // Скорость анимации в милисекундах
		speed: 4000, // Интервал(через какое время пролистается слайдер в милисекундах)
		//ВАЖНО!Скорость анимации должна быть меньше на 1000 милисекунд чем скорость интервала
		step: 0,
		counter: 0,
		images: ['20_nezalejnist.jpg', 'header6.jpg', 'konstitution.jpg', 'minjust.jpg'],	
		createSlides: function(){
			for(var n = 0; n < 2; n++){
				for(var i = 0; i<this.images.length; i++){
					slide = document.createElement('div');
					slides.appendChild(slide);
					slide.className = 'slide';
					slide.style.background = "url('img/" + slider.images[i] + "') " + slider.imgPosition + " no-repeat"; 
					slide.style.backgroundSize = 'cover';					
				}
			}
			slide = slides.querySelectorAll('.slide');
			slideWidth = slides.querySelector('.slide').offsetWidth;
			//Создаем точку просмотра(второй ряд)
			container.addEventListener('mouseover', function(){
				clearInterval(intervalId);
			});
			container.addEventListener('mouseout', function(){ 
				slider.start();
			});
			leftArrow.addEventListener('click', slider.turnLeft);
	        rightArrow.addEventListener('click', slider.turnRight);
		},
		turnLeft: function(){
			slider.step-=slideWidth;			
			slider.counter++;
			slides.style.transition = 'margin-left '+slider.duration+'ms';
			slides.style.marginLeft = slider.step+'px';
			if(slider.counter === slider.images.length) {
				setTimeout(function(){
					slides.style.transition = 'margin-left 0ms';
					slides.style.marginLeft = '0';
					slider.step = 0;
					slider.counter = 0;
				},slider.duration);
			}
			console.log(slider.counter);
		},
		turnRight: function(){
			console.log('turned right');
			slider.step+=slideWidth;			
			slider.counter--;
			slides.style.transition = 'margin-left '+slider.duration+'ms';
			slides.style.marginLeft = slider.step+'px';
			if(slider.counter === slider.images.length) {
				setTimeout(function(){
					slides.style.transition = 'margin-left 0ms';
					slides.style.marginLeft = '0';
					slider.step = 0;
					slider.counter = 0;
				},slider.duration);
			}
			console.log(slider.counter);
		},
		start: function(){
			intervalId = setInterval(function(){
				slider.turnLeft();
			},this.speed);
		},
	};

	slider.createSlides();
	slider.start();
})();
