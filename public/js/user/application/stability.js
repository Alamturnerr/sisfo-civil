// Aplikasi Stabilitas
$(document).ready(function () {
	let q, h1, h2, h3, c1, al1, fi1, c2, al2, al1sat, alw, alcon, fi2, al2_, ka1, ka2, hc, cal1, psmpa1, pa1, dist1, ma1;
	let psmpa2, pa2, dist2, ma2, psmpa3, pa3, dist3, ma3, psmpa4, pa4, dist4, ma4, psmpa5, pa5, dist5, ma5, psmpa6;
	let pa6, dist6, ma6, psmpa7, pa7, dist7, ma7, psmpa8, pa8, dist8, ma8, psmpa9, pa9, dist9, ma9, psmpa10, pa10, dist10, ma10, totalpa, totalma, kp1, hp1, hp2;
	let psmpp1, plpp1, jkopp1, mmpp1, psmpp2, plpp2, jkopp2, mmpp2, totalpp, totalmp, x1, x2, x3, x4, x5, x6, x7, x8, y1, y2, y3, y4, y5, y6, z1;
	let vol1, w1, jkokd1, mmkd1, vol2, w2, jkokd2, mmkd2, vol3, w3, jkokd3, mmkd3, vol4, w4, jkokd4, mmkd4, vol5, w5, jkokd5, mmkd5, vol6, w6, jkokd6, mmkd6, vol7, w7, jkokd7, mmkd7, totalw, totalmw;
	// Rumus Mencari Stabilitas Dinding Penahan Tanah
	$('.btn-application-1').click(function () {
		// Mendapatkan Nilai Value
		q = parseFloat($('#q').val());					// Nilai q
		h1 = parseFloat($('#h1').val());			    // Nilai h1
		h2 = parseFloat($('#h2').val());			    // Nilai h2
		h3 = parseFloat($('#h3').val());			    // Nilai h3
		c1 = parseFloat($('#c1').val());			    // Nilai C1
		al1 = parseFloat($('#al1').val());				// Nilai ɣ1
		fi1 = parseFloat($('#fi1').val());				// Nilai ϕ1
		c2 = parseFloat($('#c2').val());		    	// Nilai C2
		al2 = parseFloat($('#al2').val());				// Nilai ɣ2
		al1sat = parseFloat($('#alsat').val());			// Nilai ɣ sat
		alw = parseFloat($('#alw').val());				// Nilai ɣw
		alcon = parseFloat($('#alcon').val());			// Nilai ɣ Beton
		fi2 = parseFloat($('#fi2').val());				// Nilai ϕ2
		al2_ = parseFloat($('#al2_').val());	    	// Nilai ɣ2' = ɣ sat -ɣw
		// End Mendapatkan Nilai Value

		// Mencari Ka1
		ka1 = Math.tan((45 - fi1 / 2) * Math.PI / 180) ** 2;
		// End Ka1

		// Mencari Ka2
		ka2 = Math.tan((45 - fi2 / 2) * Math.PI / 180) ** 2;
		// End Ka2

		// Mencari Hc
		hc = (2 * c1) / (al1 * Math.sqrt(ka1));
		// End Mencari Hc

		// Menghitung h1-hc
		cal1 = h1 - hc;
		// End Menghitung h1-hc

		// Perhitungan Tabel Tekanan Tanah Aktif
		//Baris 1
		psmpa1 = ka1 * q;
		pa1 = psmpa1 * h1;
		dist1 = (h1 / 2) + (h2) + (h3);
		ma1 = pa1 * dist1;

		// Baris 2
		psmpa2 = (ka1 * al1 * h1) - (2 * c1 * Math.sqrt(ka1));
		pa2 = psmpa2 * 1 / 2 * cal1;
		dist2 = (cal1 / 3) + (h2) + (h3);
		ma2 = pa2 * dist2;

		// Baris 3
		psmpa3 = ka2 * q;
		pa3 = psmpa3 * h2;
		dist3 = (h2 / 2) + (h3);
		ma3 = pa3 * dist3;

		// Baris 4
		psmpa4 = (ka2 * al1 * h1) - (2 * c1 * Math.sqrt(ka2));
		pa4 = psmpa4 * h2;
		dist4 = (h2 / 2) + (h3);
		ma4 = pa4 * dist4;

		// Baris 5
		psmpa5 = ka2 * al2 * h2;
		pa5 = psmpa5 * h2 / 2;
		dist5 = (h2 / 3) + (h3);
		ma5 = pa5 * dist5;

		// Baris 6
		psmpa6 = ka2 * q;
		pa6 = psmpa6 * h3;
		dist6 = h3 / 2;
		ma6 = pa6 * dist6;

		// Baris 7
		psmpa7 = (ka2 * al1 * h1) - (2 * c1 * Math.sqrt(ka2));
		pa7 = psmpa7 * h3;
		dist7 = h3 / 2;
		ma7 = pa7 * dist7;

		// Baris 8
		psmpa8 = (ka2 * al2 * h2);
		pa8 = psmpa8 * h3;
		dist8 = h3 / 2;
		ma8 = pa8 * dist8;

		// Baris 9
		psmpa9 = (ka2 * al2_ * h3);
		pa9 = psmpa9 * h3 / 2;
		dist9 = h3 / 3;
		ma9 = pa9 * dist9;

		// Baris 10
		psmpa10 = (alw * h3);
		pa10 = psmpa10 * h3 / 2;
		dist10 = h3 / 3;
		ma10 = pa10 * dist10;

		// Total
		totalpa = pa1 + pa2 + pa3 + pa4 + pa5 + pa6 + pa7 + pa8 + pa9 + pa10;
		totalma = ma1 + ma2 + ma3 + ma4 + ma5 + ma6 + ma7 + ma8 + ma9 + ma10;
		// End Perhitungan Tabel Tekanan Tanah Aktif

		// Menghitung kp1
		kp1 = Math.tan((45 + fi2 / 2) * Math.PI / 180) ** 2;
		// End Menghitung kp1

		$('#ka1').html(ka1.toFixed(3));
		$('#ka2').html(ka2.toFixed(3));
		$('#h_1').html(`${h1} m`);
		$('#h_2').html(`${h2} m`);
		$('#h_3').html(`${h3} m`);
		$('#hc').html(`${hc.toFixed(3)} m`);
		$('#cal1').html(`${cal1.toFixed(3)} m`);
		$('#kp1').html(kp1.toFixed(3));
		$('#psmpa1').html(`Ka1.q = ${psmpa1.toFixed(3)} `);
		$('#psmpa2').html(`ka1.ɣ1.h1-2.c.√𝑘𝑎1 = ${psmpa2.toFixed(3)} `);
		$('#psmpa3').html(`Ka2.q = ${psmpa3.toFixed(3)} `);
		$('#psmpa4').html(`ka2.ɣ1.h1-2.c.√𝑘𝑎2 = ${psmpa4.toFixed(3)}`);
		$('#psmpa5').html(`Ka2.ɣ2.h2 = ${psmpa5.toFixed(3)}`);
		$('#psmpa6').html(`Ka2.q = ${psmpa6.toFixed(3)} `);
		$('#psmpa7').html(`ka2.ɣ1.h1-2.c.√𝑘𝑎2 = ${psmpa7.toFixed(3)}`);
		$('#psmpa8').html(`Ka2.ɣ2.h2 = ${psmpa8.toFixed(3)}`);
		$('#psmpa9').html(`Ka2.ɣ2'.h3 = ${psmpa9.toFixed(3)}`);
		$('#psmpa10').html(`ɣw.h3 = ${psmpa10.toFixed(3)}`);
		$('#pa1').html(`p.h1 = ${pa1.toFixed(3)} `);
		$('#pa2').html(`p.1/2.(h-hc) = ${pa2.toFixed(3)} `);
		$('#pa3').html(`p.h2 = ${pa3.toFixed(3)} `);
		$('#pa4').html(`p.h2 = ${pa4.toFixed(3)} `);
		$('#pa5').html(`p.h2/2 = ${pa5.toFixed(3)} `);
		$('#pa6').html(`p.h3 = ${pa6.toFixed(3)} `);
		$('#pa7').html(`p.h3 = ${pa7.toFixed(3)} `);
		$('#pa8').html(`p.h3 = ${pa8.toFixed(3)} `);
		$('#pa9').html(`p.h3/2 = ${pa9.toFixed(3)} `);
		$('#pa10').html(`p.h3/2 = ${pa10.toFixed(3)} `);
		$('#totalpa').html(`Σ Pa = ${totalpa.toFixed(3)} `);
		$('#dist1').html(`h1/2 + h2 + h3 = ${dist1.toFixed(3)} `);
		$('#dist2').html(`(h1-hc).1/3 + h2 + h3 = ${dist2.toFixed(3)} `);
		$('#dist3').html(`h2/2 + h3 = ${dist3.toFixed(3)} `);
		$('#dist4').html(`h2/2 + h3 = ${dist4.toFixed(3)} `);
		$('#dist5').html(`h2/3 + h3 = ${dist5.toFixed(3)} `);
		$('#dist6').html(`h3/2 = ${dist6.toFixed(3)} `);
		$('#dist7').html(`h3/2 = ${dist7.toFixed(3)} `);
		$('#dist8').html(`h3/2 = ${dist8.toFixed(3)} `);
		$('#dist9').html(`h3/3 = ${dist9.toFixed(3)} `);
		$('#dist10').html(`h3/3 = ${dist10.toFixed(3)} `);
		$('#ma1').html(ma1.toFixed(3));
		$('#ma2').html(ma2.toFixed(3));
		$('#ma3').html(ma3.toFixed(3));
		$('#ma4').html(ma4.toFixed(3));
		$('#ma5').html(ma5.toFixed(3));
		$('#ma6').html(ma6.toFixed(3));
		$('#ma7').html(ma7.toFixed(3));
		$('#ma8').html(ma8.toFixed(3));
		$('#ma9').html(ma9.toFixed(3));
		$('#ma10').html(ma10.toFixed(3));
		$('#totalma').html(`Σ Ma = ${totalma.toFixed(3)} `);
	})

	// Button 2
	$('.btn-application-2').click(function () {
		// Mendapatkan Nilai Value
		hp1 = parseFloat($('#hp1').val());
		hp2 = parseFloat($('#hp2').val());
		// End Mendapatkan Nilai Value

		// Perhitungan Tabel Tekanan Tanah Pasif
		// Baris 1
		psmpp1 = kp1 * al2_ * hp2;
		plpp1 = psmpp1 * hp2 / 2;
		jkopp1 = hp2 / 3;
		mmpp1 = plpp1 * jkopp1;

		// Baris 2
		psmpp2 = alw * (hp1 + hp2);
		plpp2 = psmpp2 * (hp1 + hp2) / 2;
		jkopp2 = (hp1 + hp2) / 3;
		mmpp2 = plpp2 * jkopp2;

		// Total
		totalpp = plpp1 + plpp2;
		totalmp = mmpp1 + mmpp2;
		// End Perhitungan Tabel Tekanan Tanah Pasif



		$('#psmpp1').html(`kp.ɣ2'.hp2 = ${psmpp1.toFixed(3)} `);
		$('#plpp1').html(`p.hp2/2 = ${plpp1.toFixed(3)} `);
		$('#jkopp1').html(`hp2/3 = ${jkopp1.toFixed(3)} `);
		$('#mmpp1').html(`${mmpp1.toFixed(3)} `);
		$('#psmpp2').html(`ɣw.(hp1+hp2) = ${psmpp2.toFixed(3)} `);
		$('#plpp2').html(`p.(hp1+hp2)/2 = ${plpp2.toFixed(3)} `);
		$('#jkopp2').html(`(hp1+hp2)/3 = ${jkopp2.toFixed(3)} `);
		$('#mmpp2').html(`${mmpp2.toFixed(3)} `);
		$('#totalpp').html(`Σ Pp = ${totalpp.toFixed(3)} `);
		$('#totalmp').html(`Σ Mp = ${totalmp.toFixed(3)} `);
		$('#q_').html(`${q} KN/m<sup>2</sup>`);
		$('#al_1').html(`${al1} KN/m<sup>2</sup>`);
		$('#al_2').html(`${al2} KN/m<sup>2</sup>`);
		$('#al1_sat').html(`${al1sat} KN/m<sup>2</sup>`);
		$('#al_w').html(`${alw} KN/m<sup>2</sup>`);
		$('#albet').html(`${alcon} KN/m<sup>2</sup>`);
		$('#fi_2').html(`${fi2} ⁰`);
		$('#al_2_').html(`${al2_} KN/m<sup>2</sup>`);
	})
	// End button 2

	$('.btn-application-3').click(function () {
		// Mendapatkan Nilai Value
		x1 = parseFloat($('#x1').val());
		x2 = parseFloat($('#x2').val());
		x3 = parseFloat($('#x3').val());
		x4 = parseFloat($('#x4').val());
		x5 = parseFloat($('#x5').val());
		x6 = parseFloat($('#x6').val());
		x7 = parseFloat($('#x7').val());
		x8 = parseFloat($('#x8').val());
		y1 = parseFloat($('#y1').val());
		y2 = parseFloat($('#y2').val());
		y3 = parseFloat($('#y3').val());
		y4 = parseFloat($('#y4').val());
		y5 = parseFloat($('#y5').val());
		y6 = parseFloat($('#y6').val());
		z1 = parseFloat($('#z').val());
		//End Mendapatkan Nilai Value

		//Perhitungan Tabel Tekanan berat dinding penahan dan momen terhadap O
		// Baris 1
		vol1 = x1 * y1 * z1;
		w1 = alcon * vol1;
		jkokd1 = (1 / 2 * x1) + x2 + x7;
		mmkd1 = w1 * jkokd1;

		// Baris 2
		vol2 = x2 * y2 / 2 * z1;
		w2 = alcon * vol2;
		jkokd2 = (2 / 3 * x2) + x7;
		mmkd2 = w2 * jkokd2;

		// Baris 3
		vol3 = x3 * y3 * z1;
		w3 = alcon * vol3;
		jkokd3 = 1 / 2 * x3;
		mmkd3 = w3 * jkokd3;

		// Baris 4
		vol4 = x4 * y4 * z1;
		w4 = al2_ * vol4;
		jkokd4 = (1 / 2 * x4) + x3 - x4;
		mmkd4 = w4 * jkokd4;

		// Baris 5
		vol5 = x5 * y5 * z1;
		w5 = al2 * vol5;
		jkokd5 = (1 / 2 * x4) + x3 - x4;
		mmkd5 = w5 * jkokd5;

		// Baris 6
		vol6 = x6 * y6 * z1;
		w6 = al1 * vol6;
		jkokd6 = (1 / 2 * x4) + x3 - x4;
		mmkd6 = w6 * jkokd6;

		// Baris 7
		vol7 = x4;
		w7 = q * vol7;
		jkokd7 = (1 / 2 * x4) + x3 - x4;
		mmkd7 = w7 * jkokd7;

		// Total
		totalw = w1 + w2 + w3 + w4 + w5 + w6 + w7;
		totalmw = mmkd1 + mmkd2 + mmkd3 + mmkd4 + mmkd5 + mmkd6 + mmkd7;
		//End Perhitungan Tabel Tekanan berat dinding penahan dan momen terhadap O

		//Stabilitas terhadap penggulingan
		fgl = (totalmw + totalmp) / (totalma);
		//End Stabilitas terhadap penggulingan

		$('#vol1').html(`x1 . y1 . z  = ${vol1.toFixed(3)} `);
		$('#alafon1').html(`ɣ beton = ${alcon.toFixed(3)} `);
		$('#jkokd1').html(`(1/2.x1)+x2+x7 = ${jkokd1.toFixed(3)} `);
		$('#w1').html(w1.toFixed(3));
		$('#mmkd1').html(mmkd1.toFixed(3));
		$('#vol2').html(`x2 . y2/2 . z = ${vol2.toFixed(3)} `);
		$('#alafon2').html(`ɣ beton = ${alcon.toFixed(3)} `);
		$('#jkokd2').html(`(2/3.x2)+x7 =  ${jkokd2.toFixed(3)} `);
		$('#w2').html(w2.toFixed(3));
		$('#mmkd2').html(mmkd2.toFixed(3));
		$('#vol3').html(`x3 . y3 . z = ${vol3.toFixed(3)} `);
		$('#alafon3').html(`ɣ beton = ${alcon.toFixed(3)} `);
		$('#jkokd3').html(`1/2.x3 =  ${jkokd3.toFixed(3)} `);
		$('#w3').html(w3.toFixed(3));
		$('#mmkd3').html(mmkd3.toFixed(3));
		$('#vol4').html(`x4 . y4 . z = ${vol4.toFixed(3)} `);
		$('#alafon4').html(`ɣ2' = ɣ sat -ɣw = ${al2_.toFixed(3)} `);
		$('#jkokd4').html(`(1/2.x4)+x3-x4 =  ${jkokd4.toFixed(3)} `);
		$('#w4').html(w4.toFixed(3));
		$('#mmkd4').html(mmkd4.toFixed(3));
		$('#vol5').html(`x5 . y5 . z = ${vol5.toFixed(3)} `);
		$('#alafon5').html(`ɣ2 = ${al2.toFixed(3)} `);
		$('#jkokd5').html(`(1/2.x4)+x3-x4 = ${jkokd5.toFixed(3)} `);
		$('#w5').html(w5.toFixed(3));
		$('#mmkd5').html(mmkd5.toFixed(3));
		$('#vol6').html(`x6 . y6 . z = ${vol6.toFixed(3)} `);
		$('#alafon6').html(`ɣ1 = ${al1.toFixed(3)} `);
		$('#jkokd6').html(`(1/2.x4)+x3-x4 = ${jkokd6.toFixed(3)} `);
		$('#w6').html(w6.toFixed(3));
		$('#mmkd6').html(mmkd6.toFixed(3));
		$('#vol7').html(`u/ q pakai x4 = ${vol7.toFixed(3)} `);
		$('#alafon7').html(`nilai q = ${q.toFixed(3)} `);
		$('#jkokd7').html(`(1/2.x4)+x3-x4 = ${jkokd7.toFixed(3)} `);
		$('#w7').html(w7.toFixed(3));
		$('#mmkd7').html(mmkd7.toFixed(3));
		$('#totalw').html(`Σ W = ${totalw.toFixed(3)} `);
		$('#totalmw').html(`Σ Mw = ${totalmw.toFixed(3)} `);
		$('#sigmw').html(`Σ Mw = ${totalmw.toFixed(3)} kNm `);
		$('#sigma').html(`Σ Ma = ${totalma.toFixed(3)} kNm `);
		$('#sigmp').html(`Σ Mp = ${totalmp.toFixed(3)} kNm `);
		if (fgl > 1.5) {
			$('#fgl').html(`FgI	${fgl.toFixed(3)} > 1.5  <br><br> <span class="text-success lead font-weight-bold">Aman</span>`)
		}
		else {
			$('#fgl').html(`FgI	${fgl.toFixed(3)} > 1.5  <br><br> <span class="text-danger lead font-weight-bold">Bahaya</span>`)
		}
	})
	// End Rumus Mencari Stabilitas Dinding Penahan Tanah

	// Event klik
	$('.btn-application-1').click(function () {
		if(isNaN(q) || isNaN(h1) || isNaN(h2) || isNaN(h3) || isNaN(c1) || isNaN(al1) || isNaN(fi1) || isNaN(c2) || isNaN(al2) || isNaN(al1sat) || isNaN(alw) || isNaN(alcon) || isNaN(fi2) || isNaN(al2_)){
			alert("Input nilai tidak boleh kosong");
		} else {
			$('.show-aplication-1').removeClass('display-application-none')
		}
	})

	$('.btn-application-2').click(function () {
		if(isNaN(hp1) || isNaN(hp2)){
			alert("Inputan nilai tidak boleh kosong");
		} else {
			$('.show-aplication-2').removeClass('display-application-none')
		}
	})

	$('.btn-application-3').click(function () {
		if(isNaN(x1) || isNaN(x2) || isNaN(x3) || isNaN(x4) || isNaN(x5) || isNaN(x6) || isNaN(x7) || isNaN(x8) || isNaN(y1) || isNaN(y2) || isNaN(y3) || isNaN(y4) || isNaN(y5) || isNaN(y6) || isNaN(z1)){
			alert("Inputan nilai tidak boleh kosong");
		} else {
			$('.show-aplication-3').removeClass('display-application-none')
		}
	})
	// End Event klik
})
// End Aplikasi Stabilitas