function processFile(fileList) {
	userFile = fileList[0];
	file = new FileReader();
	file.onload = function() {
		createNapojak(file.result);
		console.log('File open');
	};
	file.readAsText(userFile);
}

function createNapojak(data) { 
	var warea = $('div.workarea');
	var lines = data.split("\n");
	var i = Math.round(lines.length / 2);
	while (lines[i].split("\t")[1]) {
		i++;
	}
	var range = [{ start: 0, end: (i-1)}, {start: i, end: (lines.length-1)}]; 
	for (var i=0; i < range.length; i++) {
		warea.append('<table id ="tab' + i + '"/>');
		$('#tab' + i ).addClass('napojovyListek').append('<tbody/>');
		listItems($('#tab' + i + ' tbody'), lines.slice(range[i].start, range[i].end));
	}
	output = warea.html();
	warea.append('<div class="output"></div>');
	$('.output').text(output);
	console.log('File processed');
}

function listItems(area, lines) {
	for (i=0;i<lines.length;i++) {
		cur = lines[i].split("\t");
		if (cur[1]) {
			area.append('<tr><td>' + cur[0] + '</td><td class="cena">' + cur[1] + '</td></tr>');
			if (cur[2]) {
				area.append('<tr><td colspan="2" class="dleNabidky">' + cur[2] + '</td></tr>');
			}
		}
		else
		{
			area.append('<th>' + cur[0] + '</th>');
		}			
	}
}