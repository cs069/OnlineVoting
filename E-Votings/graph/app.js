$(document).ready(function(){
	$.ajax({
		url: "http://localhost/kashi/E-Votings/graph/bar.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push("" + data[i].shortPartyName);
				score.push(data[i].poll);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Candidate Poll',
						backgroundColor: 'rgb(0,255,127)',
						borderColor: 'rgba(0,255,0)',
						hoverBackgroundColor: 'rgb(220,20,60)',
						hoverBorderColor: 'rgba(200, 400, 200, 6)',
						data: score
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
