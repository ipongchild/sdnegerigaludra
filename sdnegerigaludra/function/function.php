
<?PHP
// <!-- title-->
$titlesekolah1 = "SD Negeri Galudra - Sukaresmi";
$titlesekolah = "Sekolah Dasar Negeri Galudra";

// <!-- web-->
$tentang_aplikasi1 = "Website sekolah dibuat dengan tujuan memudahkan guru, siswa, dan orang tua serta stakeholder mencari informasi seputar sekolah.
Selain itu fungsi utama website ini sebagai saranan sosialisasi kegiatan dan aktivitas sekolah berbasis digital.";
$tentang_aplikasi2 = "Di era saat ini segala sesuatu berbasis digital, maka kami mencoba terbuka terhadap perkembangan tersebut dengan harapan memiliki kebermanfaatan didalamnya.
Salah satunya menjadi wadah dalam melakukan pelayanan dibidang pendidikan, guna Peningkatan Mutu Pendidikan.";

// <!-- nama sekolah-->
$sekolah = "SDN GALUDRA";

//<!-- Membuat Variabel Visi Misi-->
        //<!-- VISI -->
        $visi = "Terwujudnya penyelenggaraan pendidikan yang sehat, unggul dan berkarakter serta profesional dan agamis.";

        //<!-- MISI -->
        $misi1 = "Menjadikan lingkungan dan pengelolaan sekolah yang sehat.";
        $misi2 = "Meningkatkan pendidikan dan pengetahuan peserta didik dalam sain dan teknologi sesuai dengan perkembangan dan kemajuan jaman.";
        $misi3 = "Merarapkan pendidikan karakter; pembiasaan Sopan Santun, Ramah dan Someah.";
        $misi4 = "Melaksanakan kepemimpinan yang profesional.";
        $misi5 = "Mengaktualisasikan nilai-nilai agama keimanan dan ketakwaan kepada Allah SWT..";

        //<!-- FILOSOFI -->
        $filosofi_sekolah = "Menjadikan sekolah sebagai rumah kedua bagi peserta didik dan guru Sekolahku Sorgaku";

        //<!-- TUJUAN SEKOLAH -->
        $tujuan1 = "Menciptakan iklim pendidikan yang sehat sehingga seluruh warga sekolah merasa nyaman dan betah disekolah.";
        $tujuan2 = "Unggul dalam prestasi akademik dan non akademik sehingga para lulusan siap menyongsong kehidupan mendatang dengan kemajuan teknologi dan berbagai macam rintangannya.";
        $tujuan3 = "Menerapkan pendidikan karakter prilaku ramah dan someah serta mengaktualisasikan nilai-nilai budaya islam sehingga penyelenggaraan pendidikan menjadi berkah di Ridhoi Allah SWT.";
// membuat variabel sambutan
        $sambutan1 = "Assalamu’alaikum Wr.Wb.";

        $sambutan2 = "Puji syukur tak henti-hentinya kita panjatkan kehadirat Allah SWT, atas rahmat dan karunia-Nya Pembangunan Web dapat diselesaikan dengan baik. 
        Web ini merupakan salah satu media informasi warga SD Negeri Galudra sehingga masing masing keluarga besar SD Negeri Galudra bisa memberikan informasi dengan status masing masing.";

        $sambutan3 = "Guna menghasilkan Pendidikan yang bermutu sesuai dengan Visi dan Misi SD Negeri Galudra di samping upaya-upaya yang dilakukan seperti peningkatan kualitas guru, 
        begitu pun sarana prasarana, SD Negeri Galudra juga senantiasa berupaya memberikan yang terbaik bagi peserta didik, 
        salah satunya adalah memberikan rujukan informasi tentang pelayanan akademik yang dilakukan di SD Negeri Galudra dalam bentuk Situs resmi Web SD Negeri Galudra.";

        $sambutan4 = "SD Negeri Galudra ini dibangun dengan sebuah pandangan bahwa SD Negeri Galudra sebagai bagian integral, memiliki hak, 
        kewajiban dan tanggung jawab yang sama dalam mengembangkan mutu pendidikan walaupun dengan status dan fungsi yang berbeda. 
        Disamping berkewajiban mentaati tata tertib dan kode etik serta menjaga citra dan nama baik almamater, peserta didik pun berhak memperoleh pendidikan dan bimbingan dalam suasana yang baik dan kondusif.";

        $sambutan5= "Guna mewujudkan  tujuan tersebut, peserta didik perlu mengetahui sedini mungkin berbagai hal yang berhubungan dengan proses belajar mengajar, 
        peraturan serta kebijakan-kebijakan yang diberlakukan di SMAN 1 Sukaresdmi Dengan pengetahuan ini, 
        peserta didik diharapkan memiliki gambaran yang komprehensif tentang tugas dan kewajibannya.";

        $sambutan6 = "Demikianlah, fungsi dari Web ini adalah untuk memberikan informasi yang memadai tentang semua yang terkait penyelenggaraan kegiatan di SD Negeri Galudra Akhirnya, 
        semoga dengan resminya SD Negeri Galudra dilaunching akan mempermudah dalam memandu pemahaman terhadap hal-hal penting yang berkaitan dengan kegiatan akademik sehingga 
        dapat membantu terciptanya pelaksanaan akademik yang kondusif guna memenuhi standar mutu akademik yang kita harapkan. Aamiinn..";

        $sambutan7 = "Billahi taufik wal hidayah.";

        $sambutan8 = "Wassalamu’alaikum Wr.Wb.";



        $ks = "Ahmad Badri Sama, S.Pd.,MM.";
        $nip = "NIP. 196109161986032007";

//tahun ajaran
$tapel = "Tahun Ajaran 2020/2021";


// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "db_sdngaludra2021");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

//ambil nama kepala sekolah
$ks = "Ahmad Badri Sama, S.Pd.,MM.";


//ambil data dari tiap elemen dalam form
function tambah ($data){
    global $db;
    $Nama = htmlspecialchars($data["Nama"]);
    $jk = htmlspecialchars($data["JK"]);
    $tm_lahir = htmlspecialchars($data["TempatLahir"]);
    $tg_lahir = htmlspecialchars($data["TanggalLahir"]);
    $hp = htmlspecialchars($data["Handphone"]);
    $email = htmlspecialchars($data["E-Mail"]);
    $photo = htmlspecialchars($data["Photo"]);

    
    $query = "INSERT INTO Identitas_gtk
                VALUES
                ('', '$Nama', '$jk', '$tm_lahir', '$tg_lahir', '$hp', '$email', '$photo');
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


//hapus data dari tiap elemen dalam form
function hapus ($id){
    global $db;
    mysqli_query($db, "DELETE FROM Identitas_gtk WHERE id = $id");
    return mysqli_affected_rows($db);
}


function ubah ($data){
    global $db;
    $id = $data["id"];
    $Nama = htmlspecialchars($data["Nama"]);
    $jk = htmlspecialchars($data["JK"]);
    $tm_lahir = htmlspecialchars($data["TempatLahir"]);
    $tg_lahir = htmlspecialchars($data["TanggalLahir"]);
    $hp = htmlspecialchars($data["Handphone"]);
    $email = htmlspecialchars($data["E-Mail"]);
    $photo = htmlspecialchars($data["Photo"]);

    
    $query = "UPDATE Identitas_gtk SET
                Nama = '$Nama', 
                JK = '$jk', 
                TempatLahir = '$tm_lahir', 
                TanggalLahir = '$tg_lahir', 
                Handphone  = '$hp', 
                E-Mail = '$email', 
                Photo = '$photo'
                WHERE id = $id
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// function registrasi
function registrasi($data) {
        global $db;
        
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($db, $data["password"]);
        $password2 = mysqli_real_escape_string($db, $data["password2"]);
        
        // cek username sudah ada atau belum
        $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
        
        if( mysqli_fetch_assoc($result) ) {
                echo "<script>
                        alert('username sudah terdaftar!')
                </script>";
        return false;
        }

        // cek konfirmasi password
        if( $password !== $password2) {
                echo "<script>
                        alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
        
        }
        
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        mysqli_query($db, "INSERT INTO user VALUES('', '$username', $password)");
        return mysqli_affected_rows($db);

}


?>








