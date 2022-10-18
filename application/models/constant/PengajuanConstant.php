<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PengajuanConstant extends CI_Model {
	function get_tahun_anggaran() {
		for ($i = 2022; $i <= $this->TimeConstant->get_current_year(); $i++) { 
			$data[$i] = $i;
		}

		return $data;
	}

	function perubahan_ke() {
		return array(
			'1' => 'Pergeseran-1' ,
			'2' => 'Pergeseran-2' ,
			'3' => 'Pergeseran-3' ,
			'4' => 'Pergeseran-4' ,
			'5' => 'PAK' 
		);
	}

	function sumber_dana() {
		return array(
			'1' => '[DANA UMUM] - DANA UMUM ', 
			'2' => '[DANA UMUM] - PENDAPATAN ASLI DAERAH (PAD)',  
			'3' => '[DANA UMUM] - Pendapatan Pajak Daerah',  
			'4' => '[DANA UMUM] - Pajak Kendaraan Bermotor (PKB) ', 
			'5' => '[DANA UMUM] - Bea Balik Nama Kendaraan Bermotor (BBNKB)', 
			'6' => '[DANA UMUM] - Pajak Bahan Bakar Kendaraan Bermotor ', 
			'7' => '[DANA UMUM] - Pajak Air Permukaan', 
			'8' => '[DANA UMUM] - Pajak Hotel ', 
			'9' => '[DANA UMUM] - Pajak Restoran ', 
			'10' => '[DANA UMUM] - Pajak Hiburan ', 
			'11' => '[DANA UMUM] - Pajak Reklame ', 
			'12' => '[DANA UMUM] - Pajak Penerangan Jalan ', 
			'13' => '[DANA UMUM] - Pajak Parkir ', 
			'14' => '[DANA UMUM] - Pajak Air  Tanah ', 
			'15' => '[DANA UMUM] - Pajak Sarang Burung Walet ', 
			'16' => '[DANA UMUM] - Pajak Mineral Bukan Logam dan Batuan', 
			'17' => '[DANA UMUM] - Pajak Bumi dan Bangunan Pedesaan dan Perkotaan', 
			'18' => '[DANA UMUM] - Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB)', 
			'19' => '[DANA UMUM] - Pendapatan Retribusi Daerah - LRA', 
			'20' => '[DANA UMUM] - Retribusi Jasa Umum', 
			'21' => '[DANA UMUM] - Retribusi Jasa Usaha', 
			'22' => '[DANA UMUM] - Retribusi Perizinan Tertentu', 
			'23' => '[DANA UMUM] - Pendapatan Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', 
			'24' => '[DANA UMUM] - Bagian Laba yang Dibagikan kepada Pemda (Deviden) atas Penyertaan Modal pada Perusahaan Milik Pemerintah/BUMN ', 
			'25' => '[DANA UMUM] - Bagian Laba yang Dibagikan kepada Pemda (Deviden)  atas Penyertaan Modal pada Perusahaan Milik Daerah/BUMD ', 
			'26' => '[DANA UMUM] - Bagian Laba yang dibagikan kepada Pemda (Deviden) atas Penyertaan Modal pada Perusahaan Milik Swasta ', 
			'27' => '[DANA UMUM] - Lain-lain PAD Yang Sah', 
			'28' => '[DANA UMUM] - Hasil Penjualan BMD Yang Tidak Dipisahkan', 
			'29' => '[DANA UMUM] - Hasil Pemanfaatan BMD yang Tidak Dipisahkan', 
			'30' => '[DANA UMUM] - Hasil Kerjasama Daerah', 
			'31' => '[DANA UMUM] - Jasa Giro', 
			'32' => '[DANA UMUM] - Hasil Pengelolaan Dana Bergulir', 
			'33' => '[DANA UMUM] - Pendapatan Bunga', 
			'34' => '[DANA UMUM] - Penerimaan atas Tuntutan Ganti Kerugian Keuangan Daerah', 
			'35' => '[DANA UMUM] - Penerimaan Komisi, Potongan, atau Bentuk Lain', 
			'36' => '[DANA UMUM] - Penerimaan Keuntungan dari Selisih Nilai Tukar Rupiah terhadap Mata Uang Asing', 
			'37' => '[DANA UMUM] - Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan', 
			'38' => '[DANA UMUM] - Pendapatan Denda Pajak Daerah', 
			'39' => '[DANA UMUM] - Pendapatan Denda Retribusi Daerah', 
			'40' => '[DANA UMUM] - Pendapatan Hasil Eksekusi atas Jaminan', 
			'41' => '[DANA UMUM] - Pendapatan dari Pengembalian', 
			'42' => '[DANA UMUM] - Pendapatan dari BLUD',  
			'43' => '[DANA UMUM] - Pendapatan Denda Pemanfaatan BMD yang tidak Dipisahkan', 
			'44' => '[DANA UMUM] - PENDAPATAN TRANSFER ', 
			'45' => '[DANA UMUM] - Pendapatan Transfer Pemerintah Pusat ', 
			'46' => '[DANA UMUM] - Dana Perimbangan ', 
			'47' => '[DANA UMUM] - Dana Transfer Umum - Dana Bagi Hasil',  
			'48' => '[DANA UMUM] - Dana Transfer Umum-Dana Alokasi Umum',  
			'49' => '[DANA UMUM] - Pendapatan Transfer Antar Daerah', 
			'50' => '[DANA UMUM] - Pendapatan Bagi Hasil',  
			'51' => '[DANA UMUM] - Bantuan Keuangan ',  
			'52' => '[DANA UMUM] - LAIN-LAIN PENDAPATAN DAERAH YANG SAH', 
			'53' => '[DANA UMUM] - Pendapatan Hibah', 
			'54' => '[DANA UMUM] - Pendapatan Hibah dari Pemerintah Pusat ', 
			'55' => '[DANA UMUM] - Pendapatan Hibah dari Pemerintah Pusat ',  
			'56' => '[DANA UMUM] - Pendapatan Hibah dari Pemerintah Daerah Lainnya ',  
			'57' => '[DANA UMUM] - Pendapatan Hibah dari Badan/Lembaga/Organisasi dalam Negeri/Luar Negeri ',  
			'58' => '[DANA UMUM] - Pendapatan Hibah dari kelompok Masyarakat/Perorangan Dalam Negeri',  
			'59' => '[DANA KHUSUS] - PENDAPATAN ASLI DAERAH', 
			'60' => '[DANA KHUSUS] - Pajak', 
			'61' => '[DANA KHUSUS] - Pajak Kendaraan Bermotor', 
			'62' => '[DANA KHUSUS] - Pajak Kendaraan Bermotor untuk Pembangunan dan/atau Pemeliharaan Jalan Serta Peningkatan Moda dan Sarana Transportasi Umum', 
			'63' => '[DANA KHUSUS] - Pajak Rokok',  
			'64' => '[DANA KHUSUS] - Pajak Rokok - Pelayanan Kesehatan', 
			'65' => '[DANA KHUSUS] - Pajak Rokok - Pembayaran Iuran JKN ', 
			'66' => '[DANA KHUSUS] - Pajak Rokok - Penegakan Disiplin', 
			'67' => '[DANA KHUSUS] - Pajak Penerangan Jalan', 
			'68' => '[DANA KHUSUS] - Pajak Penerangan Jalan - Penyediaan Penerangan Jalan ', 
			'69' => '[DANA KHUSUS] - Retribusi', 
			'70' => '[DANA KHUSUS] - Retribusi Jasa Umum', 
			'71' => '[DANA KHUSUS] - Retribusi Pelayanan Kesehatan  yang merupakan Hasil klaim kepada BPJS', 
			'72' => '[DANA KHUSUS] - Retribusi Perizinan Tertentu', 
			'73' => '[DANA KHUSUS] - Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing ', 
			'74' => '[DANA KHUSUS] - Retribusi Pengendalian Lalu Lintas ', 
			'75' => '[DANA KHUSUS] - PENDAPATAN TRANSFER ', 
			'76' => '[DANA KHUSUS] - Pendapatan Transfer Pemerintah Pusat ', 
			'77' => '[DANA KHUSUS] - Dana Perimbangan ', 
			'78' => '[DANA KHUSUS] - Dana Transfer Umum - Dana Bagi Hasil', 
			'79' => '[DANA KHUSUS] - DBH CHT',  
			'80' => '[DANA KHUSUS] - DBH SDA Kehutanan - DR',  
			'81' => '[DANA KHUSUS] - Dana Transfer Umum - Dana Alokasi Umum', 
			'82' => '[DANA KHUSUS] - DAU Tambahan untuk Dukungan Pendanaan Kelurahan', 
			'83' => '[DANA KHUSUS] - Dana Transfer Khusus - Dana Alokasi Khusus Fisik',  
			'84' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - SD',  
			'85' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - SMP',  
			'86' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - SMA',  
			'87' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - SDLB/SMPLB/SMALB',  
			'88' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - SKB',  
			'89' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - Perpustakaan Daerah',  
			'90' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Reguler - Olahraga',  
			'91' => '[DANA KHUSUS] - DAK Fisik - Bidang Air Minum - Reguler',  
			'92' => '[DANA KHUSUS] - DAK Fisik - Bidang Sanitasi - Reguler',  
			'93' => '[DANA KHUSUS] - DAK Fisik - Bidang Perumahan dan Permukiman - Reguler ',  
			'94' => '[DANA KHUSUS] - DAK Fisik - Bidang Jalan- Reguler ',  
			'95' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Reguler - Pelayanan Kesehatan Dasar',  
			'96' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Reguler - Pelayanan Kesehatan Rujukan',  
			'97' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Reguler - Pelayanan Kefarmasian dan Perbekalan Kesehatan',  
			'98' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Reguler - KB',  
			'99' => '[DANA KHUSUS] - DAK Fisik - Bidang Pertanian - Reguler',  
			'100' => '[DANA KHUSUS] - DAK Fisik - Bidang Kelautan dan Perikanan - Reguler',  
			'101' => '[DANA KHUSUS] - DAK Fisik - Bidang Pariwisata - Reguler',  
			'102' => '[DANA KHUSUS] - DAK Fisik - Bidang Industri Kecil dan Menengah - Reguler',  
			'103' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Penugasan - SMK',  
			'104' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Penugasan - Peningkatan Pelayanan Rujukan',  
			'105' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Penugasan - Penurunan Stunting',  
			'106' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Penugasan - Pengendalian Penyakit',  
			'107' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Penugasan - BAPELKES',  
			'108' => '[DANA KHUSUS] - DAK Fisik - Bidang Air Minum - Penugasan',  
			'109' => '[DANA KHUSUS] - DAK Fisik - Bidang Pariwisata - Penugasan',  
			'110' => '[DANA KHUSUS] - DAK Fisik - Bidang Sanitasi - Penugasan ',  
			'111' => '[DANA KHUSUS] - DAK Fisik - Bidang Jalan - Penugasan',  
			'112' => '[DANA KHUSUS] - DAK Fisik - Bidang Pasar - Penugasan',  
			'113' => '[DANA KHUSUS] - DAK Fisik - Bidang Irigasi - Penugasan',  
			'114' => '[DANA KHUSUS] - DAK Fisik - Bidang Lingkungan Hidup dan Kehutanan - Penugasan - Lingkungan Hidup',  
			'115' => '[DANA KHUSUS] - DAK Fisik - Bidang Lingkungan Hidup dan Kehutanan - Penugasan - Kehutanan',  
			'116' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Afirmasi - Penguatan Puskesmas - DTPK',  
			'117' => '[DANA KHUSUS] - DAK Fisik - Bidang Kesehatan - Afirmasi - Penguatan Pembangunan Rumah Sakit Pratama',  
			'118' => '[DANA KHUSUS] - DAK Fisik - Bidang Perumahan dan Permukiman - Afirmasi',  
			'119' => '[DANA KHUSUS] - DAK Fisik - Bidang Air Minum - Afirmasi',  
			'120' => '[DANA KHUSUS] - DAK Fisik - Bidang Sanitasi - Afirmasi',  
			'121' => '[DANA KHUSUS] - DAK Fisik - Bidang Transportasi - Afirmasi',  
			'122' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Afirmasi - SD',  
			'123' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Afirmasi - SMP',  
			'124' => '[DANA KHUSUS] - DAK Fisik - Bidang Pendidikan - Afirmasi - SMA',  
			'125' => '[DANA KHUSUS] - Dana Transfer Khusus - Dana Alokasi Khusus Non Fisik',  
			'126' => '[DANA KHUSUS] - DAK Non Fisik - BOS Reguler',  
			'127' => '[DANA KHUSUS] - DAK Non  Fisik - BOS Afirmasi',  
			'128' => '[DANA KHUSUS] - DAK Non Fisik - BOS Kinerja',  
			'129' => '[DANA KHUSUS] - DAK Non Fisik - BOP PAUD',  
			'130' => '[DANA KHUSUS] - DAK Non Fisik - BOP Pendidikan Kesetaraan',  
			'131' => '[DANA KHUSUS] - DAK Non Fisik - TPG PNSD',  
			'132' => '[DANA KHUSUS] - DAK Non Fisik - Tamsil Guru PNSD',  
			'133' => '[DANA KHUSUS] - DAK Non Fisik - TKG PNSD',  
			'134' => '[DANA KHUSUS] - DAK Non Fisik - BOP Museum dan Taman Budaya - Museum',  
			'135' => '[DANA KHUSUS] - DAK Non Fisik - BOP Museum dan Taman Budaya - Taman Budaya',  
			'136' => '[DANA KHUSUS] - DAK Non Fisik - BOKKB - BOK ',  
			'137' => '[DANA KHUSUS] - DAK Non Fisik - BOKKB - Akreditasi RS',  
			'138' => '[DANA KHUSUS] - DAK Non Fisik - BOKKB - Akreditasi Puskesmas',  
			'139' => '[DANA KHUSUS] - DAK Non Fisik - BOKKB - Akreditasi Labkesda',  
			'140' => '[DANA KHUSUS] - DAK Non Fisik - BOKKB - Jaminan Persalinan',  
			'141' => '[DANA KHUSUS] - DAK Non Fisik - BOKKB - BOKB',  
			'142' => '[DANA KHUSUS] - DAK Non Fisik - PK2UKM',  
			'143' => '[DANA KHUSUS] - DAK Non Fisik - Dana Yanminduk',  
			'144' => '[DANA KHUSUS] - DAK Non Fisik - Dana Yanpar',  
			'145' => '[DANA KHUSUS] - DAK Non Fisik - Dana BLPS',  
			'146' => '[DANA KHUSUS] - Dana Insentif Daerah', 
			'147' => '[DANA KHUSUS] - Dana Insentif Daerah', 
			'148' => '[DANA KHUSUS] - Dana Insentif Daerah',  
			'149' => '[DANA KHUSUS] - Dana Otonomi Khusus', 
			'150' => '[DANA KHUSUS] - Dana Otonomi Khusus', 
			'151' => '[DANA KHUSUS] - Dana Otonomi Khusus - Provinsi Papua', 
			'152' => '[DANA KHUSUS] - Dana Otonomi Khusus - Provinsi Papua Barat', 
			'153' => '[DANA KHUSUS] - Dana Otonomi Khusus - Provinsi Aceh', 
			'154' => '[DANA KHUSUS] - Dana Tambahan Infrastruktur dalam rangka Otonomi Khusus Provinsi Papua', 
			'155' => '[DANA KHUSUS] - Dana Tambahan Infrastruktur dalam rangka Otonomi Khusus  Provinsi Papua Barat', 
			'156' => '[DANA KHUSUS] - Dana Keistimewaan', 
			'157' => '[DANA KHUSUS] - Dana Keistimewaan', 
			'158' => '[DANA KHUSUS] - Dana Keistimewaan DIY', 
			'159' => '[DANA KHUSUS] - Dana Desa', 
			'160' => '[DANA KHUSUS] - Dana Desa', 
			'161' => '[DANA KHUSUS] - Dana Desa',  
			'162' => '[DANA KHUSUS] - Pendapatan Transfer Antar Daerah', 
			'163' => '[DANA KHUSUS] - Pendapatan Bagi Hasil **)', 
			'164' => '[DANA KHUSUS] - Pendapatan Bagi Hasil Pajak', 
			'165' => '[DANA KHUSUS] - Pendapatan Bagi Hasil Pajak Kendaraan Bermotor untuk Pembangunan dan/atau Pemeliharaan Jalan Serta Peningkatan Moda dan Sarana Transportasi Umum',  
			'166' => '[DANA KHUSUS] - Pendapatan Bagi Hasil Pajak Rokok - Pelayanan Kesehatan',  
			'167' => '[DANA KHUSUS] - Pendapatan Bagi Hasil Pajak Rokok - Pembayaran Iuran JKN ',  
			'168' => '[DANA KHUSUS] - Pendapatan Bagi Hasil Pajak Rokok - Penegakan Disiplin',  
			'169' => '[DANA KHUSUS] - Bantuan Keuangan ', 
			'170' => '[DANA KHUSUS] - Bantuan Keuangan ', 
			'171' => '[DANA KHUSUS] - Bantuan Keuangan Khusus dari Pemerintah Daerah Provinsi',  
			'172' => '[DANA KHUSUS] - Bantuan Keuangan Khusus dari Pemerintah Daerah Kabupaten/Kota', 
			'173' => '[DANA KHUSUS] - LAIN-LAIN PENDAPATAN DAERAH YANG SAH', 
			'174' => '[DANA KHUSUS] - Dana Darurat', 
			'175' => '[DANA KHUSUS] - Dana Darurat', 
			'176' => '[DANA KHUSUS] - Dana Darurat', 
			'177' => '[DANA KHUSUS] - Dana Darurat'
		);
	}

	function status_pengajuan() {
		return array(
			'0' => 'Belum Dibahas' ,
			'1' => 'Disetujui' ,
			'2' => 'Ditunda' ,
			'3' => 'Ditolak' 
		);
	}

	function warna_status_pengajuan() {
		return array(
			'0' => 'bg-secondary' ,
			'1' => 'bg-info' ,
			'2' => 'bg-warning' ,
			'3' => 'bg-danger' 
		);
	}
}

?>