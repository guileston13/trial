$('#employee').click(function() {
	$('#login-member').fadeOut('slow');
	$('#back-2').fadeOut('slow');

	setTimeout(function() {
		$('#login-employee')
			.fadeIn('slow')
			.removeClass('d-none');
		$('#front-1').removeClass('d-none');
		$('#back-1')
			.slideDown('slow')
			.removeClass('d-none');
	}, 1000);
});

$('#import').click(function() {
	console.log('123');
	var loader = $('#loader');

	loader.show();

	setTimeout(function() {
		loader.hide();
	}, 3000);
});

// document.getElementById('import').addEventListener('click', function() {
// 	var loader = document.getElementById('loader');
// 	console.log('123');
// 	loader.style.display = 'block';

// 	setTimeout(function() {
// 		loader.style.display = 'none';
// 	}, 3000);
// });

// $('#printTag').click(function() {
// 	$('#printTable').show();

// 	setTimeout(function() {
// 		$('#printTable').hide();
// 	}, 3000);
// 	console.log('working');
// });

function printTag(tagid) {
	var hashid = '#' + tagid;
	var tagname = $(hashid)
		.prop('tagName')
		.toLowerCase();
	var attributes = '';
	var attrs = document.getElementById(tagid).attributes;
	$.each(attrs, function(i, elem) {
		attributes += ' ' + elem.name + " ='" + elem.value + "' ";
	});
	var divToPrint = $(hashid).html();
	var head = '<html><head>' + $('head').html() + '</head>';
	var allcontent =
		head +
		"<body  onload='window.print()' >" +
		'<' +
		tagname +
		attributes +
		'>' +
		divToPrint +
		'</' +
		tagname +
		'>' +
		'</body></html>';
	var newWin = window.open('', 'Print-Window');
	newWin.document.open();
	newWin.document.write(allcontent);
	newWin.document.close();
	// setTimeout(function(){newWin.close();},10);
}

function printdiv(printpage) {
	var headstr = '<html><head><title></title></head><body>';
	var footstr = '<body>';
	var newstr = document.all.item(printpage).innerHTML;
	var oldstr = document.body.innerHTML;
	document.body.innerHTML = headstr + newstr + footstr;
	window.print();

	document.body.innerHTML = oldstr;
	return false;
}

// function myFunction() {
// 	var x = document.getElementById('cut-off');
// 	if (x.style.display === 'block') {
// 		x.style.display = 'none';
// 	} else {
// 		x.style.display = 'block';
// 	}
// }

// Show edit
$('#btn-edit1').click(function() {
	if ($('td').hasClass('d-none')) {
		$('td').removeClass('d-none');
		$('#btn-edit2').removeClass('d-none');
		$(this).addClass('d-none');
	}

	// var cut = $('#cut-off');
	// if (cut.hasClass('d-none')) {
	// 	cut.removeClass('d-none');
	// }
});

// Hide edit
$('#btn-edit2').click(function() {
	$(this).addClass('d-none');
	$('#btn-edit1').removeClass('d-none');
	$('table[id^="table"]')
		.find('tr td:nth-child(11)')
		.each(function() {
			console.log(this);
			$(this).addClass('d-none');
		});
	// if ($('td').hasClass('block')) {
	// 	$('td').addClass('d-none');
	// 	$('#btn-edit1').removeClass('d-none');
	// 	$(this).addClass('d-none');
	// }
});

$('#edit2').click(function() {
	$('#table')
		.find('tr td:nth-child(11)')
		.each(function() {
			if ($(this).hasClass('d-none')) {
				$(this).removeClass('d-none');
			} else if ($('#edit2').hasClass('btn-warning')) {
				$(this).addClass('d-none');
			}
		});
});
