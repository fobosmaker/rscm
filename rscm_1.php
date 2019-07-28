<script>
	//soal no 1.
	highlight("Rumah Sakit Umum Pusat Nasional Dr. Cipto Mangunkusumo (disingkat RSUPN Dr. Cipto Mangunkusumo atau RSCM) adalah sebuah rumah sakit pemerintah yang terletak di Jakarta Pusat, Indonesia. Selain menjadi RS pemerintah RSCM juga berfungsi sebagai RS pendidikan, salah satunya adalah Fakultas Kedokteran Universitas Indonesia. Nama rumah sakit ini diambil dari nama Dr. Tjipto Mangoenkoesoemo, seorang tokoh perjuangan Indonesia pada masa kolonial.");
	function highlight(string){
  		document.write(string.replace(/cipto|rscm/gi,'<mark>$&</mark>'));
	}

	//soal no 3.
	function delay(ms) {
	  return new Promise(resolve => setTimeout(resolve, ms));
	}

	async function delayHasil() {
	  for (let i = 0; i < 4; i++) {
	  	await delay(1000);
	  	console.log(`Hasil #${i}`);
	  }
	}

	//delayHasil();

	//soal no 2.
	function hitungLembar(total){
		var data = [
			[100000,0],
			[50000,0],
			[20000,0],
			[5000,0],
			[2000,0],
			[200,0],
			[100,0],
		];

		for(var i = 0; i < data.length; i++){
			while(total >= data[i][0]){
				total -= data[i][0];
				data[i][1]+=1;
			}
			if(data[i][1] > 0){
				console.log("Pecahan "+data[i][0]+" sebanyak "+ data[i][1]+" lembar");
			}
		}
	}

	//hitungLembar(60000);
	
	//coba tambah komen di file untuk melihat pengaruh perbedaan
</script>
