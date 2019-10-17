/* Sidebar begin */

let sidebar = document.querySelector('.sidebar');
let sidebar_btn = document.querySelector('.sidebar_btn');
let btn_box = document.querySelector('.btn_box');
let body = document.querySelector('body');

btn_box.onclick = () => {
    if(!sidebar.classList.contains('open')){
        sidebar.classList.add('open');
        sidebar_btn.classList.add('close');
        btn_box.style.backgroundColor = '#dcdcdc';
        //body.style.overflowY = 'hidden';
    }
    else{
        sidebar.classList.remove('open');
        sidebar_btn.classList.remove('close');
        btn_box.style.backgroundColor = '#222';
        //body.style.overflowY = 'scroll';
    }
};

/* Sidebar end */


let nav = document.querySelector('nav');
let nav_block = document.querySelector('.nav-sticky');

window.onscroll = function(){
  if(window.scrollY > 152){
    nav.classList.add('fixed');
    nav_block.classList.add('sticky');
  } 
  else if(window.scrollY < 152){
    nav.classList.remove('fixed');
    nav_block.classList.remove('sticky');
  } 
}

/* SEARCH */

var posts = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
    wildcard: '%QUERY',
    url: path + '/search/typeahead?query=%QUERY'
  }
});

posts.initialize();

$("#typeahead").typeahead({
  // hint: false,
  highlight: true
}, {
  name: 'posts',
  display: 'title',
  limit: 4,
  source: posts
});

$('#typeahead').bind('typeahead:select', function(ev, suggestion){
  console.log(suggestion);
  window.location = path + '/search/?s=' + encodeURIComponent(suggestion.title);
});


$('.nav a').each(function(){
  var loc = window.location.protocol + '//' +  window.location.host + window.location.pathname;
  console.log(loc);
  var link = this.href;
  if(loc == link){
      $(this).addClass('nav-active');
      $(this).closest('.drop li a').addClass('nav-active-drop');
      $(this).closest('.drop').prev('a').addClass('nav-active-drop');
      
      $(this).closest('.drop').prev('a').addClass('nav-active-drop').closest('.drop').prev('a').addClass('nav-active');
  }
});

//-------------- TO TOP ---------------------//

$(document).ready(function(){ 
  if ($(this).scrollTop() > 40) {
    $('.totop').fadeIn();
  } 
  $(window).scroll(function () {
      if ($(this).scrollTop() > 40) {
          $('.totop').fadeIn();
      } else {
          $('.totop').fadeOut();
      }
  });
  $('.totop').click(function () {
      $('body,html').animate({
          scrollTop: 0
      }, 800);
      return false;
  });
});

//---------------- ACCORDION ----------------------//

$('.sidebar .nav').find('.accordion').click(function(){
  $(this).next().stop().slideToggle('slow');
}).next().stop().hide();