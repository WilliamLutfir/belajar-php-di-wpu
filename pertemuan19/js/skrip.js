wadah.appendChild(pagination);
// Tambahkan event ketika katakunci ditulis
						 // keypress = event ketika tombol keyboard ditekan
						 // keyup = event ketika jari dilepas dari tombol  keyboard
katakunci.addEventListener("keyup",()=>{
	// buat objek ajax
	let xhr=new XMLHttpRequest();
	// cek kesiapan ajax
	xhr.onreadystatechange=()=>{
		if((xhr.readyState===4)&&(xhr.status===200)){
			wadah.innerHTML=xhr.responseText;}}
	xhr.open("GET","ajax/mhs.php?katakunci="+katakunci.value+"&ajax=",true);
	xhr.send();
});