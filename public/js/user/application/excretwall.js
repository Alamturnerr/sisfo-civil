// Aplikasi EXCretwall
$(document).ready(function () {
    let l, f, s, y3, y6, del, bet, als, sis, cu, alcon, tet, ka, ha, pa, kp, hp, pp;
    let alc, ec, fc, fy, x1, x2, x3, x4, x6, y2, x7, x8, y1, x5, y4, y5;

    // Rumus mencari hasil perhitungan EXCretwall
    $('.btn-application-1').click(function () {
        // Mendapatkan Nilai dari Value
        y1 = parseFloat($('#y1').val());
        y2 = parseFloat($('#y2').val());
        y3 = parseFloat($('#y3').val());
        y4 = parseFloat($('#y3').val());
        y5 = parseFloat($('#y3').val());
        y6 = parseFloat($('#y6').val());
        x1 = parseFloat($('#x4').val());
        x2 = parseFloat($('#x4').val());
        x3 = parseFloat($('#x4').val());
        x4 = parseFloat($('#x4').val());
        x5 = parseFloat($('#x4').val());
        x6 = parseFloat($('#x4').val());
        x7 = parseFloat($('#x4').val());
        x8 = parseFloat($('#x4').val());
        del = parseFloat($('#del').val());
        bet = parseFloat($('#bet').val());
        als = parseFloat($('#als').val());
        sis = parseFloat($('#sis').val());
        cu = parseFloat($('#cu').val());
        alcon = parseFloat($('#alcon').val());
        // End Mendapatkan nilai dari value

        // Mencari nilai Tet
        x4y3 = x4/y3;
        tet = 90 - (Math.atan(x4y3) * 180 / Math.PI);
        // End Tet

        // Mencari nilai Ka
        ka = (Math.sin(180 / Math.PI *(tet-alcon))) ** 2 / (Math.sin(tet * (180 / Math.PI)) * Math.sin(tet-del * (180 / Math.PI)) * (1+(Math.sin(alcon+del * (180 / Math.PI)) * Math.sin(alcon-bet * (180 / Math.PI)) / Math.sin(tet-del * (180 / Math.PI)) / Math.sin(tet-bet * (180 / Math.PI)))) ** 0.5) ** 2 ;
        // End Ka  

        // Mencari nilai Ha
        ha = y3+y2+y1;
        // End Ha

        // Mencari nila Pa
        pa = 0.5 * ka * Math.gamma * ha ** 2 - 2 * cu * Math.sqrt(ka) * ha+2 * cu **2/Math.gamma;
        // End Pa

        // Mencari nila Kp
        kp = (1 + Math.sin(180 / Math.PI *(alcon))) / (1 - Math.sin(180 / Math.PI *(alcon)));
        // End kp

        // Mencari nilai Hp
        hp = y6+y2+y1;
        // End Hp

        // Mencari nilai Pp
        pp = 0,5 * kp * Math.gamma * hp ** 2+2 * cu * Math.sqrt(kp) * hp;
        // End Pp
    })
    
    $('.btn-application-1').click(function () {
		if(isNaN(y1) || isNaN(y2) || isNaN(y3) || isNaN(y6) || isNaN(x4) || isNaN(del) || isNaN(bet) || isNaN(als) || isNaN(sis) || isNaN(cu) || isNaN(alcon)){
			alert("Input nilai tidak boleh kosong");
		} else {
			$('.show-aplication-1').removeClass('display-application-none')
            $('#tet').html(`${tet} deg`);
            $('#ka').html(`${ka.toFixed(2)} m`);
            $('#ha').html(`${ha} m`);
            $('#pa').html(`${pa} kN`);
            $('#kp').html(`${kp} `);
            $('#hp').html(`${hp} m`);
            $('#pp').html(`${pp} kN`);
		}
	})
})