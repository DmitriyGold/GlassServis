var text = $('.text1').text(),
    textArr = text.split('');

$('.text1').html('');

$.each(textArr, function(i, v){
  if(v == ' '){$('.text1').append('<span class="space"></span>');}
  $('.text1').append('<span>'+v+'</span>');
})