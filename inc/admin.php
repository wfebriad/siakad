<div id="left_h">
                         <?php
$page = (isset($_GET['file']))? $_GET['file'] : "main";
switch ($page) {

case 'pin baru': include "wpadmin/pinbaru.php"; break;
case 'proses pin baru': include "wpadmin/baruproses.php"; break;
case 'proses menu pin krs': include "wpadmin/mbuat_pin_saja.php"; break;
case 'proses buat pin': include "wpadmin/pbuatpin.php"; break;
case 'proses transkip': include "wpadmin/input_matkul_transkip.php"; break;
case 'proses mahasiswa transkip': include "wpadmin/cek_KHS.php"; break;
case 'pilihtranskip': include "wpadmin/transkip.php"; break;
case 'cek mahasiswa transkip': include "wpadmin/lihat_mhs_krs2.php"; break;
case 'lihat mahasiswa transkip': include "wpadmin/lihat_detail_matkul_tran.php"; break;
case 'pilih mahasiswa transkip': include "wpadmin/pilih_detail_tran.php"; break;
case 'cek hasil lihat mahasiswa transkip': include "wpadmin/lihat_transkip_admin.php"; break;
case 'hasil lihat mahasiswa transkip': include "wpadmin/lihat_transkip_mhs.php"; break;
case 'proses halaman lihat': include "wpadmin/proses_lihat.php"; break;
case 'transkrip d3 gizi': include "wpadmin/trand3gizi.php"; break;
case 'transkrip d4 gizi': include "wpadmin/trand4gizi.php"; break;
case 'transkrip d3 kebidanan': include "wpadmin/trand3bidan.php"; break;
case 'transkrip d4 kebidanan': include "wpadmin/trand4bidan.php"; break;
case 'transkrip d3 keperawatan': include "wpadmin/trand3perawat.php"; break;
case 'transkrip d4 keperawatan': include "wpadmin/trand4perawat.php"; break;
case 'mahasiswa transkip': include "wpadmin/pilih_lihat_transkip_admin.php"; break;
case 'hasil lihat mahasiswa krs': include "wpadmin/lihat_mhs_krs.php"; break;
case 'lihat mahasiswa krs': include "wpadmin/mahasiswa_krs.php"; break;
case 'pilih mahasiswa krs': include "wpadmin/pilih_mhs_krs.php"; break;
case 'hasil lihat tanggal khs': include "wpadmin/form_ttd.php"; break;
case 'tambah tanggal khs': include "wpadmin/tambah_ttd.php"; break;
case 'lihat tanggal khs': include "wpadmin/edit_ttd.php"; break;
case 'lihat nama surat': include "wpadmin/edit_nmttd.php"; break;
    case 'hasil pilih penandatangan': include "wpadmin/nama_ttd.php"; break;
    case 'penandatangan surat': include "wpadmin/pilih_ttd.php"; break;
	case 'ttd surat': include "wpadmin/pilih_ttd_tgl.php"; break;
	case 'prodi tanggal khs': include "wpadmin/prodi_ttd.php"; break;
    case 'lihat bendahara ubah': include "wpadmin/bendahara2.php"; break;
case 'lihat bendahara': include "wpadmin/bendahara.php"; break;
case 'lihat terakhir pin': include "wpadmin/tabel_mahasiswa_lihat_pin.php"; break;
case 'tampil tahun masuk mahasiswa': include "wpadmin/mahasiswa_tampil_all.php"; break;
case 'tahun masuk mahasiswa': include "wpadmin/mahasiswa_all.php"; break;
case 'pilih masuk mahasiswa': include "wpadmin/pilih_rekap_mhs.php"; break;
case 'lihat data mahasiswa': include "wpadmin/mahasiswa_tampil_smt.php"; break;
case 'data mahasiswa': include "wpadmin/tabel_mhs_smt.php"; break;
case 'pilih prodi data mahasiswa': include "wpadmin/pilih_tabel_mhs_smt.php"; break;
case 'menu pin krs mhs': include "wpadmin/data_mhspin.php"; break;
case 'menu pin krs': include "wpadmin/buat_pin.php"; break;
case 'pilih nilai download': include "wpadmin/pilih_nilai.php"; break;
case 'download krs mhs': include "wpadmin/pilih_nilai_kurikulum.php"; break;
case 'password khs mhs': include "wpadmin/lihat_paswr_khs.php"; break;
case 'password krs mhs': include "wpadmin/lihat_paswr_krs.php"; break;
case 'proses nilai lokal input': include "wpadmin/ubah_nilai3.php"; break;
case 'proses nilai nasional input': include "wpadmin/ubah_nilai4.php"; break;
case 'proses nilai uap input': include "wpadmin/ubah_nilai2.php"; break;
case 'nilai uap input': include "wpadmin/inputnilai2.php"; break;
case 'cetak nilai khs': include "wpadmin/cetak_khs1.php"; break;
case 'hasil cetak nilai khs': include "wpadmin/cetak_khs2.php"; break;
case 'cek hasil cetak nilai khs': include "wpadmin/lihat_khs.php"; break;
case 'hasil input nilai khs': include "wpadmin/tampil_nilai.php"; break;
case 'input nilai khs': include "wpadmin/input_nilai.php"; break;
case 'proses nilai khs': include "wpadmin/sebelum_tampil_nilai.php"; break;
case 'lihat mahasiswa': include "wpadmin/mahasiswa.php"; break;
case 'hasil lihat mahasiswa': include "wpadmin/mahasiswa_tampil.php"; break;
case 'set pembimbing': include "wpadmin/pemb_akademik.php"; break;
case 'atur pembimbing': include "wpadmin/pemb_akademik2.php"; break;
case 'atur pembimbing edit': include "wpadmin/pemb_akademik_edit.php"; break;
case 'atur pembimbing hapus': include "wpadmin/pemb_akademik_hapus.php"; break;
case 'atur pembimbing tambah': include "wpadmin/pemb_akademik_input.php"; break;
case 'atur akademik tahun': include "wpadmin/tahun_akademik.php"; break;
case 'atur akademik tahun edit': include "wpadmin/tahun_edit.php"; break;
case 'atur akademik tahun hapus': include "wpadmin/tahun_hapus.php"; break;
case 'atur akademik tahun tambah': include "wpadmin/tahun_tambah.php"; break;
case 'atur kode tahun': include "wpadmin/tahun.php"; break;
case 'atur kode tahun edit': include "wpadmin/tahunedit.php"; break;
case 'atur kode tahun hapus': include "wpadmin/tahunhapus.php"; break;
case 'atur kode tahun tambah': include "wpadmin/tahuntambah.php"; break;
case 'set atur matkul': include "wpadmin/matkul_tampil.php"; break;
case 'pilih atur matkul': include "wpadmin/matkul.php"; break;
case 'atur kurikulum': include "wpadmin/kurikulum.php"; break;
case 'atur kurikulum edit': include "wpadmin/kurikulum_edit.php"; break;
case 'atur kurikulum hapus': include "wpadmin/kurikulum_hapus.php"; break;
case 'atur kurikulum tambah': include "wpadmin/kurikulum_tambah.php"; break;
case 'atur matkul': include "wpadmin/matkul_tampil2.php"; break;
case 'atur matkul edit': include "wpadmin/matkul_edit.php"; break;
case 'atur matkul hapus': include "wpadmin/hapus_matkul.php"; break;
case 'atur matkul tambah': include "wpadmin/input_matkul.php"; break;
case 'atur kelas': include "wpadmin/kelas_tampil.php"; break;
case 'atur kelas edit': include "wpadmin/kelas_edit.php"; break;
case 'atur kelas hapus': include "wpadmin/kelas_hapus.php"; break;
case 'atur kelas tambah': include "wpadmin/kelas_tambah.php"; break;
case 'atur semester': include "wpadmin/semester_seting.php"; break;
case 'atur semester edit': include "wpadmin/semester_seting_edit.php"; break;
case 'atur semester hapus': include "wpadmin/semester_seting_hapus.php"; break;
case 'atur semester tambah': include "wpadmin/semester_seting_tambah.php"; break;
case 'atur jurusan': include "wpadmin/prodi.php"; break;
case 'atur jurusan edit': include "wpadmin/prodi_edit.php"; break;
case 'atur jurusan hapus': include "wpadmin/prodi_hapus.php"; break;
case 'atur jurusan tambah': include "wpadmin/prodi_tambah.php"; break;
case 'atur akademik': include "wpadmin/jenjang.php"; break;
case 'atur akademik edit': include "wpadmin/jenjang_edit.php"; break;
case 'atur akademik hapus': include "wpadmin/jenjang_hapus.php"; break;
case 'atur akademik tambah': include "wpadmin/jenjang_tambah.php"; break;
case 'pilih data login dosen': include "wpadmin/pilih_userM.php"; break;
case 'akademik dosen': include "wpadmin/akademik_userM.php"; break;
case 'pilih data kurikulum dosen': include "wpadmin/pilih_kur_userM.php"; break;
case 'atur sistem': include "wpadmin/usernya.php"; break;
case 'atur sistem edit': include "wpadmin/usernya_edit.php"; break;
case 'atur sistem hapus': include "wpadmin/usernya_hapus.php"; break;
case 'atur sistem tambah': include "wpadmin/usernya_tambah.php"; break;
case 'atur nilai': include "wpadmin/setting_nilai.php"; break;
case 'atur nilai edit': include "wpadmin/setting_nilai_edit.php"; break;
case 'atur nilai hapus': include "wpadmin/setting_nilai_hapus.php"; break;
case 'atur nilai tambah': include "wpadmin/setting_nilai_tambah.php"; break;
case 'data login dosen': include "wpadmin/usernyaM.php"; break;
case 'data login dosen edit': include "wpadmin/usernyaM_edit.php"; break;
case 'data login dosen hapus': include "wpadmin/usernyaM_hapus.php"; break;
case 'data login dosen tambah': include "wpadmin/usernyaM_tambah.php"; break;
case 'lihat krs cetak': include "halaman/cetak_krs3.php"; break;
case 'cek krs input': include "halaman/cek_krs.php"; break;
case 'cek hapus krs': include "halaman/hapus_krs.php"; break;
case 'lihat nilai khs': include "halaman/lihat_khs_mhs.php"; break;
case 'lihat pin khs': include "halaman/lihat_pin_mhs.php"; break;
	case 'main' :
	default : include 'inc/index.php';	

}
?>                    	
                      </div>