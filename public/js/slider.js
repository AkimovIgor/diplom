/* Slider begin */
let titles = [
    'Школьная линейка',
    'Поздравление ветеранов на 9 мая',
    'Олимпиада по английскому языку',
    'Мероприятие первого мая',
    'Победители олимпиады "Физкульура - путь к здоровью"',
];
let prev = document.querySelector('.prev'),
    next = document.querySelector('.next'),
    start = document.querySelector('.slider .start'),
    play = document.querySelector('.slider .start .play'),
    pause = document.querySelector('.slider .start .pause'),
    sl = document.querySelector('.slider-line'),
    info = document.querySelector('.info'),
    dots = document.querySelectorAll('.slider-dots_item'),
    slider = document.querySelector('.slider').clientWidth,
    imgWidth = slider,
    pos = 0,
    timer;
// start.style.left = (slider/2) - start.clientWidth/2 + 'px';
start.onclick = startSlideshow;
next.onclick = nSlide;
prev.onclick = pSlide;
window.onload = changeSize;
//window.ondeviceorientation = changeSize;
//window.ondevicelight = changeSize;
//window.onresize = changeSize;
let arr = Array.from(dots);
let index = 0;
function autoSlider(){
	if(play.classList.contains('show')) return;
	timer = setInterval(nSlide, 6000);
};
autoSlider(); // Автопролистывание слайдов
// функция кнопки Начать/Приостановить слайдшоу
function startSlideshow(){
	if(play.classList.contains('show')) {
		play.classList.remove('show');
		pause.classList.add('show');
		autoSlider();
	}
	else{
		pause.classList.remove('show');
		play.classList.add('show');
		clearInterval(timer);
	}
};
// Управление точками под слайдером
for(var i = 0; i < arr.length; i++){
	dots[i].onclick = function(){
		if(arr.indexOf(event.target) == index) return;
		index = arr.indexOf(event.target);
		pos = -imgWidth * index;
		parameters(index);
	};
};
// Следующий слайд
function nSlide(){
	pos = pos - imgWidth;
	if(pos < -imgWidth * (arr.length - 1)) pos = 0;
	(index == arr.length - 1) ? index = 0 : index++;
	parameters(index);
};
// Предыдущий слайд
function pSlide(){
	pos = pos + imgWidth;
	if(pos > 0) pos = -imgWidth * (arr.length - 1);
	(index == 0) ? index = arr.length - 1 : index--;
	parameters(index);
};
// Основной функционал слайдера
function parameters(n) {
	clearInterval(timer);
  //sl.style.left = pos + 'px';
  sl.style.transform = 'translate3d(' + pos + 'px, 0, 0)';
  sl.style.transition = 'all .8s ease';
	info.innerHTML = titles[index];
	for(let i = 0; i < dots.length; i++) dots[i].classList.remove('active-slide');
	dots[n].classList.add('active-slide');
	autoSlider();
};
// Ихменение размера картинок под устройство
function changeSize(){
	var items = document.querySelectorAll('.slider_item');
	for(var i = 0; i < items.length; i++)
		items[i].style.width = imgWidth + 'px';
};

/* Slider end */