
	function calculateZakat() {
			var gold = document.getElementById("gold").value;
			var silver = document.getElementById("silver").value;
			var savings = document.getElementById("savings").value;
			var debt = document.getElementById("debt").value;

			var totalWealth = (gold * 325.81) + (silver * 4.93) + savings - debt;

			if (totalWealth >= 3420) {
				var zakat = (totalWealth * 0.025).toFixed(2);
				document.getElementById("zakat").value = zakat;
			} else {
				document.getElementById("zakat").value = 0;
			}
		}