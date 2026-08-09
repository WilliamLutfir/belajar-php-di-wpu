wadah.appendChild(pagination);
// Tambahkan event ketika katakunci ditulis
						 // keypress = event ketika tombol keyboard ditekan
						 // keyup = event ketika jari dilepas dari tombol  keyboard
// katakunci.addEventListener("keyup",()=>{
	// buat objek ajax
	// let xhr=new XMLHttpRequest();
	// cek kesiapan ajax
	// xhr.onreadystatechange=()=>{
		// if((xhr.readyState===4)&&(xhr.status===200)){
			// wadah.innerHTML=xhr.responseText;}}
	// xhr.open("GET","ajax/mhs.php?katakunci="+katakunci.value+"&ajax=",true);
	// xhr.send();
// });

// tanda $/jQuery digunakan utk memanggil jquery
// menjlnkn event ketika document sudah ready
$(document).ready(function(){
	// hilangkan tombol cari
	$("#cari").hide();
	// event ketika keyword ditulis                
	$("#katakunci").on("keyup",function(){
		// munculkan icon loading
		$(".spinner-border").show();
		         // fungsi load memiliki keterbatasan yaitu hanya dpt digunkn utk request method GET
		// $("#wadah").load("ajax/mhs.php?katakunci="+($('#katakunci').val())+"&ajax=");
		                                                                       // parameter data sama perannya seperti xhr.responseText
		$.get("ajax/mahasiswa.php?katakunci="+($('#katakunci').val())+"&ajax=",function(data){
			$("#wadah").html(data);
			$(".spinner-border").hide();
		});
	});
});