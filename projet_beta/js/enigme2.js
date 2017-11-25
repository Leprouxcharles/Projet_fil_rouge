$('.bravo').hide();
$('#victoire').hide();

var posd;
				var posr;
		$(function(){
				$('.drag').draggable({
						containment : '#limitation',
						snap : '.mag',
				});
		});
		$(function(){
				$('.decor').draggable({
						containment : '#limitation',
				});
		});

		$( ".drag" ).mouseup(function() {
				console.log('Position ok');
				p1 = $('.p1').position();
				r1 = $('.r1').position();
				console.log(p1.top,"piece1 top");
				console.log(r1.top,"receveur1 top");
				console.log(p1.left,"piece1 left");
				console.log(r1.left,"receveur1 left");
				p2 = $('.p2').position();
				r2 = $('.r2').position();
				console.log(p2.top,"piece2 top");
				console.log(r2.top,"receveur2 top");
				console.log(p2.left,"piece2 left");
				console.log(r2.left,"receveur2 left");
				p3 = $('.p3').position();
				r3 = $('.r3').position();
				console.log(p3.top,"piece3 top");
				console.log(r3.top,"receveur3 top");
				console.log(p3.left,"piece3 left");
				console.log(r3.left,"receveur3 left")
				p4 = $('.p4').position();
				r4 = $('.r4').position();
				console.log(p4.top,"piece4 top");
				console.log(r4.top,"receveur4 top");
				console.log(p4.left,"piece4 left");
				console.log(r4.left,"receveur4 left");

				if  (r1.top == p1.top && r1.left == p1.left && r2.top == p2.top && (r2.left+1) == p2.left && (r3.top+1) == p3.top
				&& r3.left == p3.left && (r4.top+1) == p4.top && (r4.left+1) == p4.left)  {
						$("#mont").attr('class', 'p6');
						console.log();
						console.log("bravo");
						$('.r1').hide();
						$('.r2').hide();
						$('.r3').hide();
						$('.r4').hide();
						$('.bravo').show();
						$('.gagne').click();
		};
	});
