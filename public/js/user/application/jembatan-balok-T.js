// Aplikasi Jembatan Balok-T
$(document).ready(function () {
    let L, B1, B2, ltj, s, b, h, bd, hd, ts, ta, th, ha, nd, sd;
    let K, fc, EcM, ups, G, alph, Uld, Ukd, fyld, fykd, wc, w1c, wa, ww;
    let KMS, Wd, Qd, GTebal, PBeban, GBeban, QMS, VMS, MMS, KMA, LATebal, AHTebal, LABeban, AHBeban, QMA, VMA, MMA;
    let KTD, q, p, DLA, QTDl, PTDl, VTD, MTD, KTT, T, PTT, at, bt, VTT, MTT, VTTD, MTTD;
    let KTB, nirger, HTB, TTB1, QTDr, PTDr, TTB2, TTBT, y, M, VTB, MTB;
    let KEW, Cw, Vw, TEW, hew, x, QEW, VEW, MEW;
    let deltaT, k, delta, FET, e, Mt, VET, MET;
    let Kh, C, S, Tq, Wt, I, g, Ecq, Kp, wilayah, n, F, Kv1, Kv, TEQ, QEQ, VEQ, MEQ;
    let MSB, MAB, TTDB, TBB, EWB, ETB, EQB, MSKM, MAKM, TTDKM, TBKM, EWKM, ETKM, EQKM, MSKV, MAKV, TTDKV, TBKV, EWKV, ETKV, EQKV, MU1, MU2, MU3, Mu, VU1, VU2, VU3, Vu;
    let beta1, dt, fi, Lt, tsa, tst, beff, Es, fct, fyt, bb, ht, st, rb, Rmax, d, Mn, Rn, r, rmin, As, D, As1, na, Asj, td, ds, nt, X, Ast, angkaN;
    let tet, cc2, ts2, a2, c2, s2, Mnn, fiM;
    let fi2, Vc, fivc, Vs, Vsmax, Av, Sv, rsh, Ash, Dv, nsh, angkaD, Vs1;
    let dtt, dlb, Aslb, Ig, fr, nee, nas, c, Icr, yt, Mcr, MDL, Ie, dMS, dMA, dTD, dTB, dEW, dET, dEQ, dmaks, LK1, LK2, LK3;
    let bd2, hd2, ss2, plbn, bdt, bdbn, qms2, lat2, labn2, aht2, ahbn2, qms3, vma2, mma2, t4, dla4, ptt4, vtt4, mtt4, bsfb, bsvu, bsmu, bmfb, bmvu, bmmu, btfb, btvu, btmu, sumvu, summu;
    let d15, beta15, phi15, dmtr15, nn15, pb15, rmax15, dd15, mn15, rn15, ra15, ramin15, hslas, hslas2, n15, hsltot, b15, beta16, nn16, dd16, vc16, anakvc16, vcc16, vccc16, vsmax16, av16, s16, sekang3;
    // Rumus Jembatan Balok-T
    $('.btn-application-1').click(function () {

        // Mendapatkan Nilai Value Data Struktur Atas
        L = parseFloat($('#L').val());				// Nilai L
        B1 = parseFloat($('#B1').val());			    // Nilai B1
        B2 = parseFloat($('#B2').val());			    // Nilai B2
        s = parseFloat($('#s').val());			    // Nilai s
        b = parseFloat($('#b').val());			    // Nilai b
        h = parseFloat($('#h').val());			// Nilai h
        bd = parseFloat($('#bd').val());			// Nilai bd
        hd = parseFloat($('#hd').val());		    	// Nilai hd
        ts = parseFloat($('#ts').val());			// Nilai ts
        ta = parseFloat($('#ta').val());		// Nilai ta
        th = parseFloat($('#th').val());			// Nilai th
        ha = parseFloat($('#ha').val());		// Nilai ha
        nd = parseFloat($('#nd').val());			// Nilai nd
        // End Mendapatkan Nilai Value Data Struktur Atas

        // Mencari ltj
        ltj = B1 + 2 * B2;

        // End ltj

        // Mencari sd
        sd = L / nd;
        // End sd
    })

    $('.btn-application-2').click(function () {
        // Mendapatkan Nilai Value Bahan Struktur
        K = parseFloat($('#K').val());	    	// Nilai K
        ups = parseFloat($('#ups').val());	    	// Nilai ups
        alph = parseFloat($('#alph').val());	    	// Nilai alph
        Uld = parseFloat($('#Uld').val());	    	// Nilai Uld
        Ukd = parseFloat($('#Ukd').val());	    	// Nilai Ukd
        wc = parseFloat($('#wc').val());	    	// Nilai wc
        w1c = parseFloat($('#w1c').val());	    	// Nilai w1c
        wa = parseFloat($('#wa').val());	    	// Nilai wa
        ww = parseFloat($('#ww').val());	    	// Nilai ww
        // End Mendapatkan Nilai Value Bahan Struktur

        // Perhitungan Mutu Beton
        // Mencari Mutu Beton (fc)
        fc = 0.83 * K / 10;

        // Mencari Mutu Beton (Ec)
        EcM = 4700 * Math.sqrt(fc);

        // Mencari Mutu Beton (G)
        G = EcM / (2 * (1 + ups));
        // End Perhitungan Mutu Beton

        // Perhitungan Mutu Baja
        // Mencari Mutu Baja (Untuk baja tulangan dengan Ø > 12 mm)
        fyld = Uld * 10;

        // Mencari Mutu Baja (Untuk baja tulangan dengan Ø ≤ 12 mm)
        fykd = Ukd * 10;
        // End Perhitungan Mutu Baja
    })

    $('.btn-application-3').click(function () {
        // Mendapatkan Nilai Value
        // Beban Analisis Beban
        KMS = parseFloat($('#KMS').val());	    	// Nilai KMS
        KMA = parseFloat($('#KMA').val());	    	// Nilai KMA
        // End Analisis Beban
        //End Mendapatkan Nilai Value

        // Mencari Berat satu balok diafragma
        Wd = bd * (hd - ts) * s * wc;

        // Mencari Beban diafragma pada Girder
        Qd = nd * Wd / L;

        // Tabel
        // Mencari Girder Tebal (Tabel)
        GTebal = h - ts;

        // Mencari Plat Lantai Beban (Tabel)
        PBeban = s * ts * wc;

        // Mencari Girder Beban (Tabel)
        GBeban = b * GTebal * wc;
        //End Tabel

        // Mencari QMS
        QMS = PBeban + GBeban + Qd;

        // Mencari VMS
        VMS = (1 / 2) * QMS * L;

        // Mencari MMS
        MMS = (1 / 8) * QMS * (L * L);

        // Beban Mati Tambahan
        //Tabel
        // Nilai Mutlak 
        LATebal = 0.10;
        AHTebal = 0.05;

        // Mencari Lapisan Atas Beban 
        LABeban = s * LATebal * wa;

        // Mencari Air Hujan Beban 
        AHBeban = s * AHTebal * ww;
        //End Tabel

        // Mencari QMA 
        QMA = LABeban + AHBeban;

        // Mencari VMA
        VMA = (1 / 2) * QMA * L;

        // Mencari MMA
        MMA = (1 / 8) * QMA * (L * L);
    })

    $('.btn-application-4').click(function () {
        // Mendapatkan Nilai Value
        // Beban Lalu Lintas
        KTD = parseFloat($('#KTD').val());	    	// Nilai KMS
        KTT = parseFloat($('#KTT').val());	    	// Nilai KMA
        // End Beban Lalu Lintas
        //End Mendapatkan Nilai Value

        // Nilai Mutlak q
        if (L <= 30) {
            q = 8.00;
        }
        else if (L > 30) {
            q = 8.00 * (0.5 + (15 / L));
        }

        // Nilai Mutlak p
        p = 44.00;

        // Nilai Mutlak DLA
        if (L <= 50) {
            DLA = 0.40;
        }
        else if (L >= 90) {
            DLA = 0.30;
        }
        else {
            DLA = 0.40 - 0.0025 * (L - 50);
        }

        // Mencari QTD
        QTDl = q * s;

        // Mencari PTD
        PTDl = (1 + DLA) * p * s;

        // Mencari VTD
        VTD = (1 / 2) * (QTDl * L + PTDl);

        // Mencari MTD
        MTD = (1 / 8) * QTDl * (L * L) + (1 / 4) * PTDl * L;

        //Nilai Mutlak T
        T = 100;

        // Mencari PTT
        PTT = (1 + DLA) * T;

        //Nilai Mutlak T
        at = 5.00;
        bt = 5.00;

        // Mencari VTT
        VTT = ((9 / 8) * L - (1 / 4) * at + bt) / L * PTT;

        // Mencari MTT
        MTT = VTT * L / 2 - PTT * bt;

        //MENDARI hASIL AKHIR
        if (VTT > VTD) {
            VTTD = VTT
        } else {
            VTTD = VTD
        }

        if (MTT > MTD) {
            MTTD = MTT
        } else {
            MTTD = MTD
        }
    })

    $('.btn-application-5').click(function () {
        // Gaya Rem

        // Mendapatkan Nilai Value
        KTB = parseFloat($('#KTB').val());	        // Nilai KTB
        nirger = parseFloat($('#nirger').val());    // Nilai nirger
        //End Mendapatkan Nilai Value

        // Nilai Mutlak HTB
        if (L <= 80) {
            HTB = 250;
        }
        else if (L >= 180) {
            HTB = 500;
        }
        else {
            HTB = 250 + 2.5 * (L - 80);
        }

        // Mencari TTB
        TTB1 = HTB / nirger;

        // Mencari QTD
        QTDr = q * s;

        // Mencari PTD
        PTDr = p * s;

        // Mencari TTB = 5 % beban lajur "D" tanpa faktor beban dinamis
        TTB2 = 0.05 * (QTDr * L + PTDr);

        // Kesimpulan TTB
        if (TTB1 > TTB2) {
            TTBT = TTB1;
        } else {
            TTBT = TTB2;
        }

        //Mencari y
        y = 1.80 + ta + h / 2;

        // Mencari M
        M = TTBT * y;

        // Mencari VTB
        VTB = M / L;

        // Mencari MTB
        MTB = (1 / 2) * M;

        //digunakan sekang
        sekang3 = 200;

        // End Gaya Rem
    })

    $('.btn-application-6').click(function () {
        // Beban Angin

        // Mendapatkan Nilai Value
        KEW = parseFloat($('#KEW').val());	        // Nilai KTB
        Cw = parseFloat($('#Cw').val());    // Nilai nirger
        Vw = parseFloat($('#Vw').val());
        //End Mendapatkan Nilai Value

        // Mencari TEW
        TEW = 0.0012 * Cw * (Vw * Vw);

        // Nilai Mutlak
        hew = 2.00;
        x = 1.75;

        // Mencari QEW
        QEW = (1 / 2) * hew / x * TEW;

        // Mencari VEW
        VEW = (1 / 2) * QEW * L;

        // Mencari MEW
        MEW = (1 / 8) * QEW * (L * L);
        // End Gaya Rem
    })

    $('.btn-application-7').click(function () {
        // Pengaruh Temperature

        // Mendapatkan Nilai Value
        deltaT = parseFloat($('#deltaT').val());
        //End Mendapatkan Nilai Value

        // Mencari delta
        delta = alph * deltaT * L;

        // Nilai Mutlak
        k = 15000;

        // Mencari FET
        FET = k * delta;

        // Mencari e
        e = h / 2;

        // Mencari Mt
        Mt = FET * e;

        // Mencari VEW
        VET = Mt / L;

        // Mencari MEW
        MET = Mt;
        // End Gaya Rem
    })

    $('.btn-application-8').click(function () {
        // Beban Gempa

        // Mendapatkan Nilai Value
        C = parseFloat($('#C').val());
        //End Mendapatkan Nilai Value

        // Mencari Wt
        Wt = (QMS + QMA) * L;

        // Nilai Mutlak
        g = 9.81;
        n = 1;
        wilayah = 3;

        // Mencari I
        I = (1 / 12) * b * (h * h * h);

        // Mencari Ec
        Ecq = EcM * 1000;

        // Mencari Kp
        Kp = 48 * Ecq * I / (L * L * L);

        // Mencari T
        Tq = 2 * Math.PI * Math.sqrt(Wt / (g * Kp));

        // Mencari F
        F = 1.25 - 0.025 * n;

        // Mencari S
        S = 1.0 * F;

        // Mencari Kh
        Kh = C * S;

        // Mencari Kv
        Kv1 = (50 / 100) * Kh;
        if (Kv1 > 0.10) {
            Kv = Kv1;
        } else {
            Kv = 0.10;
        }

        // Mencari TEQ
        TEQ = Kv * Wt;

        // Mencari QEQ
        QEQ = TEQ / L;

        // Mencari VEQ
        VEQ = (1 / 2) * QEQ * L;

        // Mencari MEQ
        MEQ = (1 / 8) * QEQ * (L * L);
        // End Gaya Rem
    })

    $('.btn-application-9').click(function () {
        // Kombinasi Beban Ultimate

        // Nilai Mutlak
        MSB = 1.3;
        MAB = 2;
        TTDB = 2;
        TBB = 2;
        EWB = 1.2;
        ETB = 1.2;
        EQB = 1;

        // Mencari Momen Ultimate
        MSKM = MSB * MMS;
        MAKM = MAB * MMA;
        TTDKM = TTDB * MTTD;
        TBKM = TBB * MTB;
        EWKM = EWB * MEW;
        ETKM = ETB * MET;
        EQKM = EQB * MEQ;

        // Mencari Gaya Geser Ultimate
        MSKV = MSB * VMS;
        MAKV = MAB * VMA;
        TTDKV = TTDB * VTTD;
        TBKV = TBB * VTB;
        EWKV = EWB * VEW;
        ETKV = ETB * VET;
        EQKV = EQB * VEQ;

        // Mencari Kombinasi-kombinasi M
        MU1 = MSKM + MAKM + TTDKM + TBKM + EWKM;
        MU2 = MSKM + MAKM + TTDKM + TBKM + ETKM;
        MU3 = MSKM + MAKM + TTDKM + EQKM;

        // Mencari Kombinasi-kombinasi V
        VU1 = MSKV + MAKV + TTDKV + TBKV + EWKV;
        VU2 = MSKV + MAKV + TTDKV + TBKV + ETKV;
        VU3 = MSKV + MAKV + TTDKV + EQKV;

        // Mencari Mu
        Mu = Math.max(MU1, MU2, MU3);

        // Mencari Vu
        Vu = Math.max(VU1, VU2, VU3);

        $('#MSB').html(MSB.toFixed(2));
        $('#MAB').html(MAB.toFixed(2));
        $('#MAB').html(MAB.toFixed(2));
        $('#TTDB').html(TTDB.toFixed(2));
        $('#TBB').html(TBB.toFixed(2));
        $('#EWB').html(EWB.toFixed(2));
        $('#ETB').html(ETB.toFixed(2));
        $('#EQB').html(EQB.toFixed(2));
        $('#MSKM').html(MSKM.toFixed(2));
        $('#MAKM').html(MAKM.toFixed(2));
        $('#TTDKM').html(TTDKM.toFixed(2));
        $('#TBKM').html(TBKM.toFixed(2));
        $('#EWKM').html(EWKM.toFixed(2));
        $('#ETKM').html(ETKM.toFixed(2));
        $('#EQKM').html(EQKM.toFixed(2));
        $('#MSKV').html(MSKV.toFixed(2));
        $('#MAKV').html(MAKV.toFixed(2));
        $('#TTDKV').html(TTDKV.toFixed(2));
        $('#TBKV').html(TBKV.toFixed(2));
        $('#EWKV').html(EWKV.toFixed(2));
        $('#ETKV').html(ETKV.toFixed(2));
        $('#EQKV').html(EQKV.toFixed(2));
        $('#MU1').html(MU1.toFixed(2));
        $('#MU2').html(MU2.toFixed(2));
        $('#MU3').html(MU3.toFixed(2));
        $('#VU1').html(VU1.toFixed(2));
        $('#VU2').html(VU2.toFixed(2));
        $('#VU3').html(VU3.toFixed(2));
        $('#Mu').html(Mu.toFixed(2));
        $('#Vu').html(Vu.toFixed(2));

        $('#_MSB').html(MSB.toFixed(2));
        $('#_MAB').html(MAB.toFixed(2));
        $('#_MAB').html(MAB.toFixed(2));
        $('#_TTDB').html(TTDB.toFixed(2));
        $('#_TBB').html(TBB.toFixed(2));
        $('#_EWB').html(EWB.toFixed(2));
        $('#_ETB').html(ETB.toFixed(2));
        $('#_EQB').html(EQB.toFixed(2));
        $('#_MSB2').html(MSB.toFixed(2));
        $('#_MAB2').html(MAB.toFixed(2));
        $('#_TTDB2').html(TTDB.toFixed(2));
        $('#_TBB2').html(TBB.toFixed(2));
        $('#_EWB2').html(EWB.toFixed(2));
        $('#_ETB2').html(ETB.toFixed(2));
        $('#_EQB2').html(EQB.toFixed(2));
        $('#_MMS').html(MMS.toFixed(2));
        $('#_MMA').html(MMA.toFixed(2));
        $('#_MTTD').html(MTTD.toFixed(2));
        $('#_MTB').html(MTB.toFixed(2));
        $('#_MEW').html(MEW.toFixed(2));
        $('#_MET').html(MET.toFixed(2));
        $('#_MEQ').html(MEQ.toFixed(2));
        $('#_VMS').html(VMS.toFixed(2));
        $('#_VMA').html(VMA.toFixed(2));
        $('#_VTTD').html(VTTD.toFixed(2));
        $('#_VTB').html(VTB.toFixed(2));
        $('#_VEW').html(VEW.toFixed(2));
        $('#_VET').html(VET.toFixed(2));
        $('#_VEQ').html(VEQ.toFixed(2));
        $('#_MSKM').html(MSKM.toFixed(2));
        $('#_MAKM').html(MAKM.toFixed(2));
        $('#_TTDKM').html(TTDKM.toFixed(2));
        $('#_TBKM').html(TBKM.toFixed(2));
        $('#_MSKV').html(MSKV.toFixed(2));
        $('#_MAKV').html(MAKV.toFixed(2));
        $('#_TTDKV').html(TTDKV.toFixed(2));
        $('#_TBKV').html(TBKV.toFixed(2));
        $('#_MSKM2').html(MSKM.toFixed(2));
        $('#_MAKM2').html(MAKM.toFixed(2));
        $('#_TTDKM2').html(TTDKM.toFixed(2));
        $('#_MSKV2').html(MSKV.toFixed(2));
        $('#_MAKV2').html(MAKV.toFixed(2));
        $('#_TTDKV2').html(TTDKV.toFixed(2));
        // End Gaya Rem
    })

    $('.btn-application-10').click(function () {
        // Kombinasi Beban Ultimate

        // Mendapatkan Nilai Value
        dt = parseFloat($('#dt').val());
        beta1 = parseFloat($('#beta1').val());
        fi = parseFloat($('#fi').val());
        D = parseFloat($('#D').val());
        td = parseFloat($('#td').val());
        ds = parseFloat($('#ds').val());
        nt = parseFloat($('#nt').val());
        angkaN = parseFloat($('#angkaN').val());
        //End Mendapatkan Nilai Value

        // Mencari Fc'
        fct = 0.83 * K / 10;

        // Mencari Fc'
        fyt = Uld * 10;

        // Mencari Fc'
        tst = ts * 1000;

        // Mencari Fc'
        bb = b * 1000;

        // Mencari Fc'
        ht = h * 1000;

        // Mencari Fc'
        Lt = sd * 1000;

        // Mencari Fc'
        st = s * 1000;

        // Mencari Fc'
        tsa = 12 * tst;

        // Mencari Fc'
        beff = Math.min(Lt, st, tsa);

        // Nilai Mutlak
        Es = 200000;

        // Mencari rb
        rb = beta1 * 0.85 * fct / fyt * 600 / (600 + fyt);

        // Mencari Fc'
        Rmax = 0.75 * rb * fyt * (1 - (1 / 2) * 0.75 * rb * fyt / (0.85 * fct));

        // 
        d = ht - dt;

        // 
        Mn = Mu / fi;

        //
        Rn = Mn * (10 * 10 * 10 * 10 * 10 * 10) / (beff * (d * d));

        //
        r = 0.85 * (fct / fyt) * (1 - (Math.sqrt(1 - 2 * Rn / (0.85 * fct))));

        //
        rmin = 1.4 / fyt;

        //
        As = r * beff * d;

        //
        As1 = Math.PI * (1 / 4) * Math.pow(D, 2);

        //
        na = As / As1;

        //
        Asj = As1 * angkaN; //rumus asj

        //
        X = (bb - nt * D - 2 * td - 2 * ds) / (nt - 1);

        //
        Ast = 0.3 * Asj;

    })

    $('.btn-application-11').click(function () {
        // Kombinasi Beban Ultimate

        //Tinggi efektif T-Girder 10.2
        tet = ht - dt;

        //Gaya internal tekan beton pada sayap
        cc2 = 0.85 * fct * beff * tst;

        //Gaya internal tarik baja tulangan
        ts2 = Asj * fyt;

        //
        a2 = Asj * fyt / (0.85 * fct * beff);

        //jarak garis netral
        c2 = a2 / beta1;

        //Regangan pada baja tulangan tarik
        s2 = 0.003 * (tet - c2) / c2;

        Mnn = Asj * fyt * (d - a2 / 2) * Math.pow(10, -6);

        fiM = fi * Mnn;

        //Bagian kontrol kapasitas momen ultimate
        $('#tst2').html(` ${tst.toFixed(1)} mm `);
        $('#beff2').html(` ${beff.toFixed(1)} mm `);
        $('#bb2').html(` ${bb.toFixed(1)} mm `);
        $('#ht2').html(` ${ht.toFixed(1)} mm `);
        $('#dt2').html(` ${dt.toFixed(1)} mm `);
        $('#tet').html(` ${tet.toFixed(1)} mm `);
        $('#Asj2').html(` ${Asj.toFixed(1)} mm2 `);
        $('#fct2').html(` ${fct.toFixed(1)} Mpa `);
        $('#fyt2').html(` ${fyt.toFixed(1)} Mpa `);
        $('#cc2').html(` ${cc2.toFixed(1)} N `);
        $('#ts2').html(` ${ts2.toFixed(1)} N `);
        $('#a2').html(` ${a2.toFixed(2)} mm `);
        $('#c2').html(` ${c2.toFixed(2)} mm `);
        $('#s2').html(s2.toFixed(3));
        $('#Mnn').html(` ${Mnn.toFixed(1)} kNm `);
        $('#fiM').html(` ${fiM.toFixed(1)} kNm `);
        $('#_Mu1').html(Mu.toFixed(2));
        if (cc2 > ts2) {
            $('#cssts').html(`  ${cc2.toFixed(1)} > ${ts2.toFixed(1)} Garis netral di dalam sayap <span class="text-danger">OK</span>`);
        }
        if (s2 < 0.03) {
            $('#_SS').html(`	${s2.toFixed(2)} < 0.03  <span class="text-success">OK</span>`);
        } else {
            $('#_SS').html(`	${s2.toFixed(2)} > 0.03  <span class="text-danger">CEK</span>`);
        }
        if (fiM > Mu) {
            $('#FIM').html(`	${fiM.toFixed(2)} > Mu  <span class="text-success">OK</span>`);
        } else {
            $('#FIM').html(`	${fiM.toFixed(2)} < Mu <span class="text-danger">CEK</span>`);
        }

        // End 
    })

    $('.btn-application-12').click(function () {
        // Kombinasi Beban Ultimate

        // Mendapatkan Nilai Value
        fi2 = parseFloat($('#fi2').val());
        angkaD = parseFloat($('#angkaD').val());
        Dv = parseFloat($('#Dv').val());

        //Tinggi ef
        Vc = (Math.sqrt(fct)) / 6 * bb * d * Math.pow(10, -3);

        //Gaya internal tekan beton pada sayap
        fivc = fi2 * Vc;

        Vs1 = Vu - fivc;
        Vs = Vs1 / fi2;

        Vsmax = (2 / 3) * Math.sqrt(fct) * (bb * d) * Math.pow(10, -3);

        Av = (Math.PI / 4) * Math.pow(Dv, 2) * angkaD;

        Sv = Av * fyt * d / (Vs * 1000);

        //Nilai Mutlak
        rsh = 0.001;

        Ash = rsh * bb * d;

        nsh = Ash / (Math.PI / 4 * Math.pow(Dv, 2));
        // End 
    })

    $('.btn-application-13').click(function () {
        // Kombinasi Beban Ultimate

        //Tinggi ef
        dtt = dt / 1000;

        dlb = h - dtt;

        Aslb = Asj / 1000000;

        Ig = (1 / 12) * b * Math.pow(h, 3);

        fr = 0.7 * Math.sqrt(fct) * Math.pow(10, 3);

        nee = Es / EcM;

        nas = nee * Aslb;

        c = nas / b;

        Icr = (1 / 3) * b * Math.pow(c, 3) + nas * ((dlb - c) * (dlb - c));

        yt = h / 2;

        Mcr = fr * Ig / yt;

        MDL = MMS + MMA + MTTD + MTB;

        Ie = Math.pow((Mcr / MDL), 3) * Ig + ((1 - Math.pow((Mcr / MDL), 3)) * Icr);

        dMS = ((5 / 384) * QMS * Math.pow(L, 4)) / (EcM * Ie * 1000);

        dMA = ((5 / 384) * QMA * Math.pow(L, 4)) / (EcM * Ie * 1000);

        dTD = ((1 / 48 * PTDl * Math.pow(L, 3)) / (EcM * Ie * 1000)) + ((5 / 384 * QTDl * Math.pow(L, 4)) / (EcM * Ie * 1000));

        dTB = (0.0642 * MTB * (L * L)) / (EcM * Ie * 1000);

        dEW = (5 / 384 * QEW * Math.pow(L, 4)) / (EcM * Ie * 1000);

        dET = (0.0642 * MET * (L * L)) / (EcM * Ie * 1000);

        dEQ = (5 / 384 * QEQ * Math.pow(L, 4)) / (EcM * Ie * 1000);

        dmaks = L / 240;

        LK1 = dMS + dMA + dTD + dTB + dEW;
        LK2 = dMS + dMA + dTD + dTB + dET;
        LK3 = dMS + dMA + dTD + dEQ;

        //Bagian kontrol kapasitas momen ultimate
        $('#dtt').html(` ${dtt.toFixed(2)} m `);
        $('#dlb').html(` ${dlb.toFixed(2)} m `);
        $('#Aslb').html(` ${Aslb.toFixed(3)} m<sup>2</sup> `);
        $('#Ig').html(` ${Ig.toFixed(3)} m<sup>4</sup> `);
        $('#fr').html(` ${fr.toFixed(3)} kPa `);
        $('#nee').html(nee.toFixed(2));
        $('#nas').html(` ${nas.toFixed(3)} m<sup>2</sup> `);
        $('#c').html(` ${c.toFixed(3)} m `);
        $('#Icr').html(` ${Icr.toFixed(4)} m<sup>4</sup>  `);
        $('#yt').html(` ${yt.toFixed(2)} m `);
        $('#Mcr').html(` ${Mcr.toFixed(3)} Nmm `);
        $('#MDL').html(MDL.toFixed(2));
        $('#Ie').html(` ${Ie.toFixed(4)} m<sup>4</sup> `);
        $('#dMS').html(` ${dMS.toFixed(6)} m `);
        $('#dMA').html(` ${dMA.toFixed(6)} m `);
        $('#dTD').html(` ${dTD.toFixed(6)} m `);
        $('#dTB').html(` ${dTB.toFixed(6)} m `);
        $('#dEW').html(` ${dEW.toFixed(6)} m `);
        $('#dET').html(` ${dET.toFixed(6)} m `);
        $('#dEQ').html(` ${dEQ.toFixed(6)} m `);
        $('#dmaks').html(` ${dmaks.toFixed(4)} m `);
        $('#LK1').html(LK1.toFixed(4));
        $('#LK2').html(LK2.toFixed(4));
        $('#LK3').html(LK3.toFixed(4));
        if (LK1 < dmaks) {
            $('#LK11').html(`	< ${dmaks.toFixed(3)}   <span class="text-success">OK</span>`);
        } else {
            $('#LK11').html(`	< ${dmaks.toFixed(3)}   <span class="text-danger">CEK</span>`);
        }
        if (LK2 < dmaks) {
            $('#LK22').html(`	< ${dmaks.toFixed(3)}   <span class="text-success">OK</span>`);
        } else {
            $('#LK22').html(`	< ${dmaks.toFixed(3)}   <span class="text-danger">CEK</span>`);
        }
        if (LK3 < dmaks) {
            $('#LK33').html(`	< ${dmaks.toFixed(3)}   <span class="text-success">OK</span>`);
        } else {
            $('#LK33').html(`	< ${dmaks.toFixed(3)}   <span class="text-danger">CEK</span>`);
        }

        $('#MMSLB').html(MMS.toFixed(2));
        $('#MMALB').html(MMA.toFixed(2));
        $('#MTTDLB').html(MTTD.toFixed(2));
        $('#MTBLB').html(MTB.toFixed(2));
        $('#QMSLB').html(QMS.toFixed(2));
        $('#QMALB').html(QMA.toFixed(2));
        $('#QTDLB').html(QTDl.toFixed(2));
        $('#PTDLB').html(PTDl.toFixed(2));
        $('#QTBLB').html(MTB.toFixed(2));
        $('#QEWLB').html(QEW.toFixed(2));
        $('#QETLB').html(MET.toFixed(2));
        $('#QEQLB').html(QEQ.toFixed(2));
        $('#_dMS').html(dMS.toFixed(6));
        $('#_dMA').html(dMA.toFixed(6));
        $('#_dTD').html(dTD.toFixed(6));
        $('#_dTB').html(dTB.toFixed(6));
        $('#_dET').html(dET.toFixed(6));
        $('#_dEW').html(dEW.toFixed(6));
        $('#_dEQ').html(dEQ.toFixed(6));

        $('#_fct2').html(` ${fct.toFixed(1)} MPa `);
        $('#_fyt2').html(` ${fyt.toFixed(1)} MPa `);
        $('#_d').html(` ${d.toFixed(1)} MPa `);
        $('#_EcM2').html(` ${EcM.toFixed(2)} MPa `);
        $('#_Es').html(` ${Es.toFixed(1)} MPa `);
        $('#_h22').html(` ${h.toFixed(1)} m `);
        $('#_b22').html(` ${b.toFixed(1)} m `);
        $('#_L9').html(` ${L.toFixed(1)} m `);
        $('#dMS1').html(dMS.toFixed(6));
        $('#dMA1').html(dMA.toFixed(6));
        $('#dTD1').html(dTD.toFixed(6));
        $('#dTB1').html(dTB.toFixed(6));
        $('#dMS2').html(dMS.toFixed(6));
        $('#dMA2').html(dMA.toFixed(6));
        $('#dTD2').html(dTD.toFixed(6));

        // End 
    })

    //BALOK DIAFRAGMA
    $('.btn-application-14').click(function () {
        // Mendapatkan Nilai beban pada balok diafragma
        bd2 = parseFloat($('#bd2').val());
        hd2 = parseFloat($('#hd2').val());
        ss2 = parseFloat($('#ss2').val());
        t4 = parseFloat($('#t4').val());
        dla4 = parseFloat($('#dla4').val());

        //nilai mutlak
        lat2 = 0.10;
        aht2 = 0.05;
        bsfb = 1.30;
        bmfb = 2.00;
        btfb = 2.00;

        //menghitung berat sendiri tabel beban plat lantai
        plbn = ts * wc * ss2;
        //
        bdt = hd2 - ts;
        //menghitung berat sendiri tabel beban balok diaf
        bdbn = bd2 * bdt * wc;
        //
        qms2 = plbn + bdbn;
        //Gaya geser dan momen akibat berat sendiri : vms
        vms2 = (1 / 2) * qms2 * ss2;
        //Gaya geser dan momen akibat berat sendiri :mms
        mms2 = (1 / 12) * qms2 * (ss2 * ss2);
        //
        labn2 = ss2 * lat2 * wa;
        //
        ahbn2 = ss2 * aht2 * ww;
        //
        qms3 = labn2 + ahbn2;
        //
        vma2 = (1 / 2) * qms3 * ss2;
        //
        mma2 = (1 / 12) * qms3 * (ss2 * ss2);
        //
        ptt4 = (1 + dla4) * t4;
        //
        vtt4 = (1 / 2) * ptt4;
        //
        mtt4 = (1 / 8) * ptt4 * ss2;
        //\
        bsvu = bsfb * vms2;
        //
        bsmu = bsfb * mms2;
        //
        bmvu = bmfb * vma2;
        //
        bmmu = bmfb * mma2;
        //
        btvu = btfb * vtt4;
        //
        btmu = btfb * mtt4;
        //
        sumvu = bsvu + bmvu + btvu;
        //
        summu = bsmu + bmmu + btmu;
    })
    // End BALOK DIAFRAGMA

    //PEMBESIAN BALOK DIAFRAGMA
    $('.btn-application-15').click(function () {
        // Mendapatkan Nilai beban pada balok diafragma
        d15 = parseFloat($('#d15').val());
        beta15 = parseFloat($('#beta15').val());
        phi15 = parseFloat($('#phi15').val());
        dmtr15 = parseFloat($('#dmtr15').val());
        nn15 = parseFloat($('#nn15').val());
        //yg tulang geser
        beta16 = parseFloat($('#beta16').val());
        nn16 = parseFloat($('#nn16').val());
        dd16 = parseFloat($('#dd16').val());

        //menghitung 
        //
        ec15 = 4700 * Math.sqrt(fct);
        //
        es15 = 2 * Math.pow(10, 5);
        //
        b15 = bd2 * 1000;
        //
        h15 = hd2 * 1000;
        //pb
        pb15 = beta15 * 0.85 * fct / fyt * 600 / (600 + fyt);
        //rmax
        rmax15 = 0.75 * pb15 * fyt * (1 - 0.5 * 0.75 * pb15 * fyt / (0.85 * fct));

        //dd2
        dd15 = h15 - d15;
        //
        mn15 = summu / phi15;
        //
        rn15 = mn15 * Math.pow(10, 6) / (b15 * dd15 * dd15);
        //
        ra15 = 0.85 * fct / fyt * (1 - Math.sqrt((1 - 2 * rn15 / (0.85 * fct))));
        //
        ramin15 = 1.4 / fyt;
        //
        hslas = b15 * dd15 * ra15;
        //
        hslas2 = 0.25 * Math.PI * (dmtr15 * dmtr15);
        //
        n15 = hslas / hslas2;
        //
        hsltot = hslas2 * nn15;

        //tulang geser
        vc16 = (Math.sqrt(fct)) / 6 * b15 * dd15 * (Math.pow(10, -3));
        //
        anakvc16 = beta16 * vc16;
        //
        vcc16 = sumvu - anakvc16;
        //
        vccc16 = vcc16 / beta16;
        //
        vsmax16 = 2 / 3 * (Math.sqrt(fct)) * b15 * dd15 * (Math.pow(10, -3));
        //
        av16 = (Math.PI / 4) * (dd16 * dd16) * nn16;
        //
        s16 = av16 * fyt * dd15 / (vccc16 * 1000);

    })
    //END PEMBESIAN BALOK DIAFRAGMA
    // End Rumus Menghitung Jembatan Balok-T

    // Event klik
    $('.btn-application-1').click(function () {
        if (isNaN(L) || isNaN(B1) || isNaN(B2) || isNaN(s) || isNaN(b) || isNaN(h) || isNaN(bd) || isNaN(hd) || isNaN(ts) || isNaN(ta) || isNaN(th) || isNaN(ha) || isNaN(nd)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-1').removeClass('display-application-none')
            $('#ltj').html(` ${ltj.toFixed(2)} m `);
            $('#sd').html(` ${sd.toFixed(2)} m `);
        }
    })

    $('.btn-application-2').click(function () {
        if (isNaN(K) || isNaN(ups) || isNaN(alph) || isNaN(Uld) || isNaN(Ukd) || isNaN(wc) || isNaN(w1c) || isNaN(wa) || isNaN(ww)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-2').removeClass('display-application-none')
            $('#fc').html(` ${fc.toFixed(2)} MPa `);
            $('#EcM').html(` ${EcM.toFixed(2)} MPa `);
            $('#G').html(` ${G.toFixed(2)} MPa `);
            $('#fyld').html(` ${fyld.toFixed(2)} MPa `);
            $('#fykd').html(` ${fykd.toFixed(2)} MPa `);
        }
    })

    $('.btn-application-3').click(function () {
        if (isNaN(KMS) || isNaN(KMA)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-3').removeClass('display-application-none')
            $('#Wd').html(` ${Wd.toFixed(2)} kN `);
            $('#Qd').html(` ${Qd.toFixed(2)} kN/m `);
            $('#GTebal').html(GTebal.toFixed(2));
            $('#PBeban').html(PBeban.toFixed(2));
            $('#GBeban').html(GBeban.toFixed(2));
            $('#QMS').html(QMS.toFixed(2));
            $('#VMS').html(` ${VMS.toFixed(3)} kN `);
            $('#MMS').html(` ${MMS.toFixed(3)} kNm `);
            $('#LATebal').html(LATebal.toFixed(2));
            $('#AHTebal').html(AHTebal.toFixed(2));
            $('#LABeban').html(LABeban.toFixed(2));
            $('#AHBeban').html(AHBeban.toFixed(2));
            $('#QMA').html(QMA.toFixed(2));
            $('#VMA').html(` ${VMA.toFixed(3)} kN `);
            $('#MMA').html(` ${MMA.toFixed(3)} kNm `);
            $('#_L').html(L.toFixed(2));
            $('#_nd').html(nd.toFixed(2));
            $('#_s').html(s.toFixed(2));
            $('#_ts').html(ts.toFixed(2));
            $('#_wc').html(wc.toFixed(2));
            $('#_wc2').html(wc.toFixed(2));
            $('#_b').html(b.toFixed(2));
            $('#_Qd').html(Qd.toFixed(2));
            $('#_L2').html(L.toFixed(2));
            $('#_s2').html(s.toFixed(2));
            $('#_s3').html(s.toFixed(2));
            $('#_wa').html(wa.toFixed(2));
            $('#_ww').html(ww.toFixed(2));
        }
    })

    $('.btn-application-4').click(function () {
        if (isNaN(KTD) || isNaN(KTT)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-4').removeClass('display-application-none')
            $('#q').html(` ${q.toFixed(2)} kPa `);
            $('#p').html(` ${p.toFixed(2)} kN/m `);
            $('#DLA').html(DLA.toFixed(2));
            $('#QTDl').html(` ${QTDl.toFixed(2)} kN/m `);
            $('#PTDl').html(` ${PTDl.toFixed(2)} kN `);
            $('#VTD').html(` ${VTD.toFixed(3)} kN `);
            $('#MTD').html(` ${MTD.toFixed(3)} kNm `);
            $('#T').html(` ${T.toFixed(2)} kN `);
            $('#PTT').html(` ${PTT.toFixed(3)} kN `);
            $('#at').html(` ${at.toFixed(2)} m `);
            $('#bt').html(` ${bt.toFixed(2)} m `);
            $('#VTT').html(` ${VTT.toFixed(3)} kN `);
            $('#MTT').html(` ${MTT.toFixed(3)} kNm `);
            if (VTTD == VTT) {
                $('#VTTD').html(` (V<sub>TT</sub>) = ${VTTD.toFixed(3)} kN `);
            } else {
                $('#VTTD').html(` (V<sub>TD</sub>) = ${VTTD.toFixed(3)} kN `);
            }
            if (MTTD == MTT) {
                $('#MTTD').html(` (M<sub>TT</sub>) = ${MTTD.toFixed(3)} kN `);
            } else {
                $('#MTTD').html(` (M<sub>TD</sub>) = ${MTTD.toFixed(3)} kN `);
            }
            $('#_L3').html(L.toFixed(2));
            $('#_L4').html(L.toFixed(2));
            $('#_s4').html(s.toFixed(2));
            $('#_DLA').html(DLA.toFixed(2));
        }
    })

    $('.btn-application-5').click(function () {
        if (isNaN(KTB) || isNaN(nirger)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-5').removeClass('display-application-none')
            $('#HTB').html(` ${HTB.toFixed(2)} kN `);
            $('#TTB1').html(` ${TTB1.toFixed(2)} kN `);
            $('#QTDr').html(` ${QTDr.toFixed(3)} kN/m `);
            $('#PTDr').html(` ${PTDr.toFixed(3)} kN `);
            $('#TTB2').html(` ${TTB2.toFixed(2)} kN `);
            $('#TTBT').html(` ${TTBT.toFixed(2)} kN `);
            $('#y').html(` ${y.toFixed(3)} m `);
            $('#M').html(` ${M.toFixed(3)} kNm `);
            $('#VTB').html(` ${VTB.toFixed(3)} kN `);
            $('#MTB').html(` ${MTB.toFixed(3)} kNm `);
            $('#_L5').html(L.toFixed(2));
            $('#_s5').html(s.toFixed(2));
            $('#_TTB1').html(TTB1.toFixed(2));
        }
    })

    $('.btn-application-6').click(function () {
        if (isNaN(KEW) || isNaN(Cw) || isNaN(Vw)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-6').removeClass('display-application-none')
            $('#TEW').html(` ${TEW.toFixed(2)} kN/m<sup>2</sup> `);
            $('#hew').html(` ${hew.toFixed(2)} m `);
            $('#x').html(` ${x.toFixed(3)} m `);
            $('#QEW').html(` ${QEW.toFixed(3)} kN/m `);
            $('#VEW').html(` ${VEW.toFixed(3)} kN `);
            $('#MEW').html(` ${MEW.toFixed(3)} kNm `);
            $('#_L6').html(L.toFixed(2));
        }
    })

    $('.btn-application-7').click(function () {
        if (isNaN(deltaT)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-7').removeClass('display-application-none')
            $('#delta').html(` ${delta.toFixed(4)} m `);
            $('#FET').html(` ${FET.toFixed(2)} kN `);
            $('#k').html(` ${k.toFixed(0)} kN/m `);
            $('#e').html(` ${e.toFixed(3)} m `);
            $('#Mt').html(` ${Mt.toFixed(3)} kNm `);
            $('#VET').html(` ${VET.toFixed(3)} kN `);
            $('#MET').html(` ${MET.toFixed(3)} kNm `);
            $('#_L7').html(L.toFixed(2));
            $('#_alph').html(alph.toFixed(5));
            $('#_h').html(h.toFixed(2));
        }
    })

    $('.btn-application-8').click(function () {
        if (isNaN(C)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-8').removeClass('display-application-none');
            $('#Wt').html(` ${Wt.toFixed(2)} kN `);
            $('#I').html(` ${I.toFixed(2)} m<sup>4</sup> `);
            $('#Ecq').html(` ${Ecq.toFixed(2)} kPa `);
            $('#Kp').html(` ${Kp.toFixed(2)} kN/m `);
            $('#Tq').html(` ${Tq.toFixed(4)} detik `);
            $('#wilayah').html(wilayah.toFixed(2));
            $('#n').html(n.toFixed(0));
            $('#F').html(F.toFixed(3));
            $('#S').html(S.toFixed(3));
            $('#Kh').html(Kh.toFixed(3));
            $('#Kv1').html(Kv1.toFixed(3));
            $('#Kv').html(Kv.toFixed(3));
            $('#TEQ').html(` ${TEQ.toFixed(3)} kN `);
            $('#QEQ').html(` ${QEQ.toFixed(3)} kN/m `);
            $('#VEQ').html(` ${VEQ.toFixed(3)} kN `);
            $('#MEQ').html(` ${MEQ.toFixed(3)} kNm `);
            $('#_QMS').html(QMS.toFixed(2));
            $('#_QMA').html(QMA.toFixed(2));
            $('#_L8').html(L.toFixed(2));
            $('#_b2').html(b.toFixed(2));
            $('#_h2').html(h.toFixed(2));
            $('#_EcM').html(EcM.toFixed(2));
        }
    })

    $('.btn-application-9').click(function () {
        $('.show-application-9').removeClass('display-application-none')
    })

    $('.btn-application-10').click(function () {
        if (isNaN(dt) || isNaN(beta1) || isNaN(fi) || isNaN(D) || isNaN(td) || isNaN(ds) || isNaN(nt) || isNaN(angkaN)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-10').removeClass('display-application-none');
            $('#_Mu').html(` ${Mu.toFixed(2)} kNm `);
            $('#fct').html(` ${fct.toFixed(1)} Mpa `);
            $('#fyt').html(` ${fyt.toFixed(1)} Mpa `);
            $('#tst').html(` ${tst.toFixed(1)} mm `);
            $('#bb').html(` ${bb.toFixed(1)} mm `);
            $('#ht').html(` ${ht.toFixed(1)} mm `);
            $('#Lt').html(` ${Lt.toFixed(1)} mm `);
            $('#st').html(` ${st.toFixed(1)} mm `);
            $('#tsa').html(` ${tsa.toFixed(1)} mm `);
            $('#beff').html(` ${beff.toFixed(1)} mm `);
            $('#Es').html(` ${Es.toFixed(1)} Mpa `);
            $('#rb').html(rb.toFixed(3));
            $('#Rmax').html(Rmax.toFixed(3));
            $('#d').html(` ${d.toFixed(1)} mm `);
            $('#Mn').html(` ${Mn.toFixed(3)} kNm `);
            $('#Rn').html(Rn.toFixed(3));
            if (Rn < Rmax) {
                $('#_R').html(`	${Rn.toFixed(1)} < ${Rmax.toFixed(1)}  <span class="text-success">OK</span>`);
            } else {
                $('#_R').html(`	${Rn.toFixed(1)} > ${Rmax.toFixed(1)}  <span class="text-danger">CEK</span>`);
            }
            $('#r').html(r.toFixed(4));
            $('#rmin').html(rmin.toFixed(3));
            $('#As').html(` ${As.toFixed(1)} mm<sup>2</sup> `);
            $('#As1').html(` ${As1.toFixed(1)} mm<sup>2</sup> `);
            $('#na').html(na.toFixed(2));
            $('#Asj').html(` ${Asj.toFixed(1)} mm<sup>2</sup> `);
            $('#X').html(` ${X.toFixed(1)} mm `);
            $('#Ast').html(` ${Ast.toFixed(1)} mm<sup>2</sup> `);
            if (X > 35) {
                $('#_X').html(`	${X.toFixed(1)} > 35 mm <span class="text-success">OK</span>`);
            }
            else {
                $('#_X').html(` ${X.toFixed(3)} > 35   <span class="text-danger">CEK</span>`);
            }
            $('#_D').html(D.toFixed(2));
            $('#_D2').html(D.toFixed(2));
        }
    })

    $('.btn-application-11').click(function () {
        $('.show-application-11').removeClass('display-application-none')
    })

    $('.btn-application-12').click(function () {
        if (isNaN(fi2) || isNaN(angkaD) || isNaN(Dv)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-12').removeClass('display-application-none');
            $('#Vc').html(` ${Vc.toFixed(3)} kN `);
            $('#fivc').html(` ${fivc.toFixed(3)} kN `);
            $('#Vs1').html(` ${Vs1.toFixed(3)} kN `);
            $('#Vs').html(` ${Vs.toFixed(3)} kN `);
            $('#Vsmax').html(` ${Vsmax.toFixed(3)} kN `);
            if (Vs < Vsmax) {
                $('#_VV').html(`	Vsmax > ${Vs.toFixed(1)}   <span class="text-success">OK</span>`);
            } else {
                $('#_VV').html(`	Vsmax < ${Vs.toFixed(1)}   <span class="text-danger">CEK</span>`);
            }
            $('#Av').html(` ${Av.toFixed(3)} mm<sup>2</sup> `);
            $('#Sv').html(` ${Sv.toFixed(3)} mm `);
            $('#rsh').html(rsh.toFixed(3));
            $('#Ash').html(` ${Ash.toFixed(3)} mm<sup>2</sup> `);
            $('#nsh').html(nsh.toFixed(2));
            $('#_nsh').html(nsh.toFixed(0));

            $('#_Vu').html(Vu.toFixed(2));
            $('#_fct').html(fct.toFixed(1));
            $('#_fyt').html(fyt.toFixed(1));
            $('#_bb').html(bb.toFixed(1));
            $('#_d').html(d.toFixed(1));
            $('#_Dv').html(Dv.toFixed(0));
            $('#_Dv2').html(Dv.toFixed(0));
            $('#_Dv3').html(Dv.toFixed(0));
            $('#_angkaD').html(angkaD.toFixed(0));
        }
    })

    $('.btn-application-13').click(function () {
        $('.show-application-13').removeClass('display-application-none')
    })

    $('.btn-application-14').click(function () {
        if (isNaN(bd2) || isNaN(hd2) || isNaN(ss2) || isNaN(t4) || isNaN(dla4)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-14').removeClass('display-application-none');
            $('#ts3').html(ts.toFixed(2));
            $('#pll').html(ss2.toFixed(2));
            $('#plt').html(ts.toFixed(2));
            $('#plbt').html(wc.toFixed(2));
            $('#plbn').html(plbn.toFixed(2));
            $('#bdl').html(bd2.toFixed(2));
            $('#bdt').html(bdt.toFixed(2));
            $('#bdbt').html(wc.toFixed(2));
            $('#bdbn').html(bdbn.toFixed(2));
            $('#qms2').html(qms2.toFixed(2));
            $('#vms2').html(` ${vms2.toFixed(2)} kN `)
            $('#mms2').html(` ${mms2.toFixed(2)} kNm `)

            $('#lal2').html(ss2.toFixed(2));
            $('#lat2').html(lat2.toFixed(2));
            $('#labt2').html(wa.toFixed(2));
            $('#labn2').html(labn2.toFixed(2));
            $('#ahl2').html(ss2.toFixed(2));
            $('#aht2').html(aht2.toFixed(2));
            $('#ahbt2').html(ww.toFixed(2));
            $('#ahbn2').html(ahbn2.toFixed(2));
            $('#qms3').html(qms3.toFixed(2));
            $('#vma2').html(` ${vma2.toFixed(2)} kN `);
            $('#mma2').html(` ${mma2.toFixed(2)} kNm `);

            $('#ptt4').html(` ${ptt4.toFixed(2)} kN `);
            $('#vtt4').html(` ${vtt4.toFixed(2)} kN `);
            $('#mtt4').html(` ${mtt4.toFixed(2)} kNm `);

            $('#bsfb').html(bsfb.toFixed(2)); //berat sendiri
            $('#bsv').html(vms2.toFixed(2));
            $('#bsm').html(mms2.toFixed(2));
            $('#bsvu').html(bsvu.toFixed(3));
            $('#bsmu').html(bsmu.toFixed(3));
            $('#bmfb').html(bmfb.toFixed(2)); //beban mati
            $('#bmv').html(vma2.toFixed(2));
            $('#bmm').html(mma2.toFixed(2));
            $('#bmvu').html(bmvu.toFixed(3));
            $('#bmmu').html(bmmu.toFixed(3));
            $('#btfb').html(btfb.toFixed(2)); //beban truk
            $('#btv').html(vtt4.toFixed(2));
            $('#btm').html(mtt4.toFixed(2));
            $('#btvu').html(btvu.toFixed(3));
            $('#btmu').html(btmu.toFixed(3));

            $('#sumvu').html(sumvu.toFixed(3));
            $('#summu').html(summu.toFixed(3));
            $('#sumvu2').html(` ${sumvu.toFixed(3)} kNm `);
            $('#summu2').html(` ${summu.toFixed(3)} kN `);
        }
    })

    $('.btn-application-15').click(function () {
        if (isNaN(d15) || isNaN(beta15) || isNaN(phi15) || isNaN(dmtr15) || isNaN(nn15) || isNaN(beta16) || isNaN(nn16) || isNaN(dd16)) {
            alert("Input nilai tidak boleh kosong");
        } else {
            $('.show-application-15').removeClass('display-application-none');
            $('#mu15').html(` ${summu.toFixed(3)} kNm `);
            $('#fc15').html(` ${fct.toFixed(3)} MPa `);
            $('#fy15').html(` ${fyt.toFixed(3)} MPa `);
            $('#ec15').html(` ${ec15.toFixed(3)} MPa `);
            $('#es15').html(` ${es15.toFixed(3)} MPa `);
            $('#b15').html(` ${b15.toFixed(3)} mm `);
            $('#h15').html(` ${h15.toFixed(3)} mm `);

            $('#pb15').html(pb15.toFixed(3));
            $('#rmax15').html(rmax15.toFixed(3));
            $('#dd15').html(` ${dd15.toFixed(3)} mm `);
            $('#mn15').html(` ${mn15.toFixed(3)} kNm `);
            $('#rn15').html(` ${rn15.toFixed(3)} `);
            if (rn15 < rmax15) {
                $('#hsl15').html(` ${rn15.toFixed(1)} < ${rmax15.toFixed(1)} <span class="text-success">OK</span>`);
            }
            else {
                $('#hsl15').html(` ${rn15.toFixed(1)} > ${rmax15.toFixed(1)} <span class="text-danger">CEK</span>`);
            }
            $('#ra15').html(ra15.toFixed(4));
            $('#ramin15').html(ramin15.toFixed(3));
            $('#hslas').html(hslas.toFixed(3));
            $('#hslas2').html(hslas2.toFixed(3));
            $('#n15').html(n15.toFixed(3));
            $('#hsltot').html(hsltot.toFixed(3));
            $('#_dmtr15').html(dmtr15.toFixed(0));

            //tulang geser
            $('#vu16').html(` ${sumvu.toFixed(3)} kN `); // nilai sama
            $('#fc16').html(` ${fct.toFixed(3)} MPa `); //nilai sama kaya fc
            $('#fy16').html(` ${fyt.toFixed(3)} MPa `); //nilai sama
            $('#b16').html(` ${b15.toFixed(3)} mm `); // sama nilainya
            $('#d16').html(` ${dd15.toFixed(3)} mm `);
            $('#vc16').html(` ${vc16.toFixed(3)} kN `);
            $('#anakvc16').html(` ${anakvc16.toFixed(3)} kN `);
            $('#vcc16').html(` ${vcc16.toFixed(3)} kN `);
            $('#vccc16').html(` ${vccc16.toFixed(3)} kN `);
            $('#vsmax16').html(` ${vsmax16.toFixed(3)} kN `);
            if (vccc16 < vsmax16) {
                $('#hsl16').html(` ${vccc16.toFixed(1)} < ${vsmax16.toFixed(1)} <span class="text-success">OK</span>`);
            }
            else {
                $('#hsl16').html(` ${vccc16.toFixed(1)} > ${vsmax16.toFixed(1)} <span class="text-danger">CEK</span>`);
            }
            $('#av16').html(` ${av16.toFixed(3)} mm<sup>2</sup> `);
            $('#s16').html(` ${s16.toFixed(3)} mm `);

            $('#sekang1').html(nn16.toFixed(0));
            $('#sekang2').html(dd16.toFixed(0));
            $('#sekang3').html(sekang3.toFixed(0));
        }
    })
    // End Event klik
})
// End Aplikasi Jembatan Balok-T