var score = 100;
$('.score').text(score)

function scorIng(event) {
  score--;
  $('.score').text(score)
}
