<div id="left_h">
<center>
                         <?php
$page = (isset($_GET['file']))? $_GET['file'] : "main";
switch ($page) {
case 'proses berkas mahasiswa': include "halaman/yudisium.php"; break;
case 'cek berkas mahasiswa': include "halaman/yudisium0.php"; break;
case 'berkas mahasiswa': include "halaman/yudisium0_sebelum.php"; break;
case 'proses status mahasiswa sudah': include "halaman/ubah_kelulusan3.php"; break;
case 'proses status mahasiswa belum': include "halaman/ubah_kelulusan3_1.php"; break;
case 'lihat status mahasiswa': include "halaman/ubah_kelulusan2.php"; break;
case 'status mahasiswa': include "halaman/ubah_kelulusan.php"; break;
case 'proses transkip': include "halaman/input_matkul_transkip.php"; break;
case 'proses mahasiswa transkip': include "halaman/cek_KHS.php"; break;
case 'cek mahasiswa transkip': include "halaman/lihat_mhs_krs2.php"; break;
case 'hapus mahasiswa transkip': include "halaman/hapus_transkrip3.php"; break;
case 'lihat mahasiswa transkip': include "halaman/lihat_detail_matkul_tran.php"; break;
case 'cek hasil lihat mahasiswa transkip': include "halaman/lihat_transkip_admin.php"; break;
case 'hasil lihat mahasiswa transkip': include "halaman/lihat_transkip_mhs.php"; break;
case 'mahasiswa transkip': include "halaman/pilih_lihat_transkip_admin.php"; break;
case 'hasil lihat mahasiswa krs': include "halaman/lihat_mhs_krs.php"; break;
case 'lihat mahasiswa krs': include "halaman/mahasiswa_krs.php"; break;
case 'lihat terakhir pin': include "halaman/tabel_mahasiswa_lihat_pin.php"; break;
case 'tampil tahun masuk mahasiswa': include "halaman/mahasiswa_tampil_all.php"; break;
case 'tahun masuk mahasiswa': include "halaman/mahasiswa_all.php"; break;
case 'lihat data mahasiswa': include "halaman/mahasiswa_tampil_smt.php"; break;
case 'data mahasiswa': include "halaman/tabel_mhs_smt.php"; break;
case 'menu pin krs mhs': include "halaman/data_mhspin.php"; break;
case 'menu pin krs': include "halaman/buat_pin.php"; break;
case 'pilih nilai download': include "halaman/pilih_nilai.php"; break;
case 'download krs mhs': include "halaman/pilih_nilai_kurikulum.php"; break;
case 'password khs mhs': include "halaman/lihat_paswr_khs.php"; break;
case 'password krs mhs': include "halaman/lihat_paswr_krs.php"; break;
case 'proses nilai lokal input': include "halaman/ubah_nilai3.php"; break;
case 'proses nilai nasional input': include "halaman/ubah_nilai4.php"; break;
case 'proses nilai uap input': include "halaman/ubah_nilai2.php"; break;
case 'nilai uap input': include "halaman/inputnilai2.php"; break;
case 'cetak nilai khs': include "halaman/cetak_khs1.php"; break;
case 'hasil cetak nilai khs': include "halaman/cetak_khs2.php"; break;
case 'cek hasil cetak nilai khs': include "halaman/lihat_khs.php"; break;
case 'hasil input nilai khs': include "halaman/tampil_dosen.php"; break;
case 'input nilai khs': include "halaman/input_dosen.php"; break;
case 'proses nilai khs': include "halaman/sebelum_tampil_nilai.php"; break;
case 'lihat mahasiswa': include "halaman/mahasiswa.php"; break;
case 'hasil lihat mahasiswa': include "halaman/mahasiswa_tampil.php"; break;
case 'set pembimbing': include "halaman/pemb_akademik.php"; break;
case 'atur pembimbing': include "halaman/pemb_akademik2.php"; break;
case 'hasil input nilai uts dosen': include "halaman/tampil_uts_dosen.php"; break;
case 'input nilai uts dosen': include "halaman/input_uts_dosen.php"; break;
case 'atur pembimbing edit': include "halaman/pemb_akademik_edit.php"; break;
case 'atur pembimbing hapus': include "halaman/pemb_akademik_hapus.php"; break;
case 'atur pembimbing tambah': include "halaman/pemb_akademik_input.php"; break;
case 'atur akademik tahun': include "halaman/tahun_akademik.php"; break;
case 'atur akademik tahun edit': include "halaman/tahun_edit.php"; break;
case 'atur akademik tahun hapus': include "halaman/tahun_hapus.php"; break;
case 'atur akademik tahun tambah': include "halaman/tahun_tambah.php"; break;
case 'atur kode tahun': include "halaman/tahun.php"; break;
case 'atur kode tahun edit': include "halaman/tahunedit.php"; break;
case 'atur kode tahun hapus': include "halaman/tahunhapus.php"; break;
case 'atur kode tahun tambah': include "halaman/tahuntambah.php"; break;
case 'set atur matkul': include "halaman/matkul_tampil.php"; break;
case 'pilih atur matkul': include "halaman/matkul.php"; break;
case 'atur kurikulum': include "halaman/kurikulum.php"; break;
case 'atur kurikulum edit': include "halaman/kurikulum_edit.php"; break;
case 'atur kurikulum hapus': include "halaman/kurikulum_hapus.php"; break;
case 'atur kurikulum tambah': include "halaman/kurikulum_tambah.php"; break;
case 'atur matkul': include "halaman/matkul_tampil2.php"; break;
case 'atur matkul edit': include "halaman/matkul_edit.php"; break;
case 'atur matkul hapus': include "halaman/hapus_matkul.php"; break;
case 'atur matkul tambah': include "halaman/input_matkul.php"; break;
case 'atur kelas': include "halaman/kelas_tampil.php"; break;
case 'atur kelas edit': include "halaman/kelas_edit.php"; break;
case 'atur kelas hapus': include "halaman/kelas_hapus.php"; break;
case 'atur kelas tambah': include "halaman/kelas_tambah.php"; break;
case 'atur semester': include "halaman/semester_seting.php"; break;
case 'atur semester edit': include "halaman/semester_seting_edit.php"; break;
case 'atur semester hapus': include "halaman/semester_seting_hapus.php"; break;
case 'atur semester tambah': include "halaman/semester_seting_tambah.php"; break;
case 'pilih data login dosen': include "halaman/pilih_userM.php"; break;
case 'atur nilai': include "halaman/setting_nilai.php"; break;
case 'atur nilai edit': include "halaman/setting_nilai_edit.php"; break;
case 'atur nilai hapus': include "halaman/setting_nilai_hapus.php"; break;
case 'atur nilai tambah': include "halaman/setting_nilai_tambah.php"; break;
case 'lihat krs cetak': include "halaman/cetak_krs3.php"; break;
case 'cek krs input': include "halaman/cek_krs.php"; break;
case 'cek hapus krs': include "halaman/hapus_krs.php"; break;
case 'lihat nilai khs': include "halaman/lihat_khs_mhs.php"; break;
case 'lihat pin khs': include "halaman/lihat_pin_mhs.php"; break;
case 'cetak nilai uts': include "halaman/cetak_uts1.php"; break;
case 'hasil cetak nilai uts': include "halaman/cetak_uts2.php"; break;
case 'cek hasil cetak nilai uts': include "halaman/lihat_uts.php"; break;
case 'hasil input nilai uts': include "halaman/tampil_uts.php"; break;
case 'input nilai uts': include "halaman/input_uts.php"; break;
case 'proses nilai uts': include "halaman/sebelum_tampil_nilai_uts.php"; break;
	case 'main' :
	default : include 'home.php';	

}
?>
 </center>                       	
                      </div>