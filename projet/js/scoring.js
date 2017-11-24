//Score Enigme 1 :
var score = 100;
$('.score').text(score)

function ScorIng(event) {
  score--;
  $('.score').text(score);
  $('.scoreInput').val(score)
}

//Score Enigme 2 :
var score2 = 100;
$('.score2').text(score2)

function ScorIng2(event) {
  score2--;
  $('.score2').text(score2)
  $('.scoreInput2').val(score2);
}

//Score Enigme 3 :
var score3 = 100;
$('.score3').text(score3)

function ScorIng3(event) {
  score3--;
  $('.score3').text(score3);
  $('.scoreInput3').val(score3);
}
//
// var scoreTotal = score + score2 + score3;
// console.log(scoreTotal);
