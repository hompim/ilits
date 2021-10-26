<?php

namespace Database\Seeders;

use App\Models\Absen;
use App\Models\Biaya;
use App\Models\Forda;
use App\Models\User;
use App\Models\Rekening;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FordaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nama,'daerah','nama_pj','id_line_pj','hp_pj',['nama_rek','nama_bank','no_rek'],['biaya','keterangan_biaya'],tgl_sesi,start_sesi,end_sesi
        $forda = [
            //Untuk tutor jangan pakai data forda asli, pakai data dummy di bawah ini
            // ['Dummy Forda','Surabaya','Roma','roma','0812345784',[['Roma','BCA','498347593']],[[10000,'Harga Normal]],'2021-02-21','08:00','11:30']

            //Data asli
            ["Patriot ITS", "Bekasi", "Bony Albert dan Hilmy Dzaky", "bonyalbert (Bony Albert) dan hilmyedopr (Hilmy Dzaky Edo)", "082112105217 (Bony Albert) dan 081514297505 (Hilmy Dzaky Edo)", [[" Bony Albert Vancius", "BRI", "021101052729502"], ["AHMAD RAMADHANI", "GOPAY", "081213012624"], ["AHMAD RAMDHANI", "OVO", "081213012624"]], [[15000, "Harga Normal"]], '2021-02-21', '08:00', '11:30'],
            ["Formabaya ITS", "Blitar", "Aldila Desla", "aldiladesla", "087757100138", [["Aldila Desla", "BRI", "617101024300530"], ["Aldila Desla", "OVO", "087757100138"]], [[10000, "Harga Normal"]], '2021-02-28', '08:00', '11:30'],
            ["Ikatan Mahasiswa Jakarta ITS", "DKI Jakarta", "Adam Satria dan Belinda Safa Azzahra", "adamsatriaadidarma dan safaazzahra", "Adam : 087780707079, Belinda : 081295335662", [["Eka Kartini", "BRI", "086901011353505", ["Eka Kartini", "OVO & DANA", "089637035731"]]], [["10000", "Harga Normal"]], '2021-02-20', '13:00', '16:30'],
            ["Ikatan Mahasiswa Jombang ITS", "Jombang", "Heni Agustina", "henia15", "089507635309", [["Maitsa Adzro Fania", "BRI", "365601027280538"], ["Aprilia R Samudera", "BNI", "0844034825"], ["Annida Haqq", "OVO", "085746222989"]], [[10000, "Harga Normal"]], '2021-02-27', '13:00', '16:30'],
            ["IM KALBARS", "Kalimantan Barat", "Alifia Dewi Haryani", "alifiahryn", "0895338897094", [["Muhammad Rizky Sanjaya", "Bank Mandiri", "1460012709387"], ["Muhammad Rizky Sanjaya", "OVO/GOPAY", "0895600001792"]], [[10000, "Harga Normal"]], '2021-02-28', '08:00', '11:30'],
            ["IMPLISIT", "Lombok", "I Gusti Agung Jaya Hiswara", "agung.hiswara", "081916017557", [["Annisa Kamilia Fitri Kadir", "BNI", "1044060427"], ["Annisa Kamilia Fitri Kadir", "DANA", "081936744772"]], [[15000, "Harga Normal"]], '2021-02-21', '08:00', '11:30'],
            ["Argabayu", "Nganjuk", "Vibrasyan Krisna Hartono", "vibrasyan_", "085851266606", [["Salsabila khoirunnisa", "BRI", "375401031142536"]], [[0, "Free HTM"]], '2021-02-27', '08:00', '11:30'],
            ["Forsmawi", "Ngawi", "Rewin Ilham Bagus Wicaksono", "rewinilham", "081559671271", [["Rewin Ilham Bagus W", "BRI", "005701053066509"], ["Rewin Ilham Bagus W", "OVO/GOPAY", "081559671271"]], [[10000, "Harga Normal"]], '2021-02-28', '08:00', '11:30'],
            ["Forda Jangkar", "Pasuruan", "Thoriq Akbar Maulana", "thoriqakbarm", "085853439679", [["Firdha Chaylia Ayu Rachmandika", "BNI", "0300792313"], ["Nailatul Fadhilah Hafshah", "OVO", "085850716083"]], [[13000, "Harga Normal"]], '2021-02-21', '13:00', '16:30'],
            ["Wengker ITS", "Ponorogo", "Beni Putra Kurniawan", "benipk_", "087839798526", [["Anggita", "Mandiri", "1400018432857"], ["Anggita", "BRI", "3843 01 001990 50 4"], ["Dini Nirmala Nilamsari", "Gopay", "O81337378562"]], [[10000, "Harga Normal"]], '2021-02-27', '08:00', '11:30'],
            ["IMAGARA", "Salatiga", "RIZAL", "rizalomblokh", "085879748698", [["Mentari Fitria S", "BNI", "0793173242"], ["Reyhan Qomara", "Gopay", "082137433885"]], [[5000, "Harga Normal"]], '2021-02-20', '13:00', '16:30'],
            ["Atlas", "Semarang", "akmal edo", "akmaldeo", "087838416910", [["Adhel", "Mandiri", "1360018780772"], ["-", "OVO/Gopay", "089637089040"]], [[5000, "Harga Normal"]], '2021-02-27', '08:00', '11:30'],
            ["Kanda ITS", "Sulawesi Selatan", "Rama Ganaya", "ramaganaya", "082293479653", [["Jasmine Rizkimukti", "BNI", "1603200215"], ["RISKI NOFIANTI LATUU", "Mandiri", "1400019114603"], ["A ALFIANA SETIA PRABAKTI", "BCA", "7990397427"], ["A ALFIANA SETIA PRABAKTI", "BRI", "021101051207507"], ["Rama Ganaya", "OVO", "082293479653"], ["Riski Nofianti LaTuu", "Linkaja", "082271203283"]], [[15000, "Presale 1 (1-7 Februari)"], [20000, "Harga Normal"]], '2021-02-28', '08:00', '11:30'],
            ["Kawanua", "Sulawesi Utara", "Arini Evita Rumampar , Farhan Fadlurrahman Sutrisno", "arinirumampar , farhansutrisno", "089529283253 , 082124332760", [], [], '2021-02-28', '08:00', '11:30'],
            ["IMAMI Surabaya", "Sumatera Barat", "Muhammad Rafif", "rafifmuhammad606", "085263244134", [["Yuniar Chairani Putri", "BNI", "0852316651"], ["Yuniar Chairani Putri", "OVO", "081378944883"]], [[10000, "Harga Normal"]], '2021-02-28', '13:00', '16:30'],
            ["BENEFITS", "Tangerang", "Valerie Anargya Gayatri / Athaya Gusti Adisha", "@056alups (Valeria Anargya Gayatri)", "085813845583 (Athaya Gusti Adisha)", [["Jonathan Edrick", "BCA", "8015466452"], ["Jonathan Edrick", "DANA/OVO/GOPAY", "082113187240"]], [[10000, "Harga Normal"]], '2021-02-27', '08:00', '11:30'],
            ["Zenitron", "Tuban", "Muhammad Nur Alfian Syarif", "alfiansyrff", "088803246293", [["Muhammad Nur Alfian Syarif", "BRI", "010901072242507"], ["Novanty Shinta Nastiti", "OVO", "081519626693"]], [[10000, "Harga Normal"]], '2021-02-21', '13:00', '16:30'],
            ["ITS Probolinggo", "Probolinggo", "Bazighoh Fattatin dan Shafira Taniar", "zhig.aa (zhiga) dan shafff13 (shafira)", "082335982156 (zhiga) dan 087750838274 (shafira)", [["Herfina Lailatul R.", "BNI", "0961567986"], ["Trinita Laras", "OVO", "082140875432"]], [[10000, "Harga Normal"]], '2021-02-20', '08:00', '11:30'],
            ["IKARSID", "Sidoarjo", "Adit", "pradaditya", "085604102207", [["Geza Aura Pramestika", "BRI", "008601138708500"], ["Geza Aura", "OVO", "0895338223144"], ["Geza Aura", "GOPAY", "0895338223144"], ["Nabila Aulia Rizky", "Linkaja", "081331754807"]], [[10000, "Harga Normal"]], '2021-02-27', '13:00', '16:30'],
            ["IMAGESITS", "Gresik", "Dwinanda Bagoes Ansori", "dwinandabagoes", "082132237230", [["Elza Zainun Nisa", "Bank Mandiri", "1780002425755"], ["Erna Suryanti", "DANA", "085895988590"], ["Aiss", "Gopay", "085895988590"], ["Aisyah Qurota A'yun", "OVO", "085895988590"]], [[5000, "Harga Normal"]], '2021-02-27', '13:00', '16:30'],
            ["Surabaya", "Surabaya", "Daniel Hermawan", "fpgys2018", "082112864924", [["Rilo Adi", "BCA", "2310263969"], ["Amelia Rizky Avrilia Putri Wiyono", "Bank Mandiri", "1450013493248"], ["Oryza", "OVO", "081333708150"], ["Oryza", "Gopay", "082195790800"]], [[15000, "Harga Normal"]], '2021-02-20', '08:00', '11:30'],
            ["LAROS ITS", "Banyuwangi", "Zulfa Syaifana Muslih", "543kbpsh", "081226115835", [["Ayunda Iga Indraswari", "Bank Mandiri", "1430019880341"], ["Ayunda Iga", "OVO", "082338768680"]], [[10000, "Presale 1"], [15000, "Presale 2"]], '2021-02-21', '13:00', '16:30'],
            ["FORBBITS", "Bojonegoro", "Sophie Alivia Syaharani", "sophiealivias", "085796451168", [["Rafi Mubarak", "BRI", "812301003850533"], ["Nur Aida Febrianti", "BNI", "0615517646"], ["Rafi Mubarak", "DANA", "085212489351"]], [[20000, "Presale 1"], [25000, "Presale 2"]], '2021-02-21', '08:00', '11:30'],
            ["Atlantis", "Tulungagung", "Muhammad Dimas Fikri Alvian", "markname", "082231090281", [["-", "Bank Mandiri", "1710005177269"], ["-", "OVO", "082228303042"]], [[10000, "Presale"], ["12000", "Harga Normal"]], '2021-02-21', '08:00', '11:30'],
            ["Saburai Community (SACOM)", "Lampung", "Shandy Satria Sambudi", "shandysatria_87", "085379167837", [["-", "Gopay", "-"], ["-", "OVO", "-"], ["-", "DANA", "-"], ["-", "ShopeePay", "-"]], [[10000, "Harga Normal"]], '2021-02-28', '13:00', '16:30'],
            ["Sahitya", "Jogjakarta", "Chika Ananda", "chikananda30", "085645973827", [["Chika Ananda", "BCA", "4560990672"], ["Chika Ananda", "GOPAY", "085645973827"], ["Chika Ananda", "OVO", "081318496516"]], [[15000, "Pembelian 1 tiket"], [12000, "Pembelian 3 tiket"], [10000, "Pembelian lebih dari 5 tiket"]], '2021-02-20', '08:00', '11:30'],
            ["KEMASS", "Situbondo", "Muhammad Hero P. A.", "mheropermana", "081234461819", [["Nur Indria Y.", "BNI", "0537815301"], ["Farah Roihana", "BRI", "009001066550509"], ["Azriel Dimas F.", "BCA", "1210590630"], ["Muhammad Hero", "Bank Mandiri", "1430017448422"], ["Nada Shakirah", "GOPAY", "085704731399"]], [[10000, "Presale 1 (Buy 4 get 1)"], [15000, "Presale 2 (Buy 4 get 1)"]], '2021-02-20', '13:00', '16:30'],
            ["RIAU IRITS BTR", "Riau", "Billy A. M.", "bilibong25", "085264302812", [["Sekar Puspita Sari", "Bank Mandiri", "1080017887366"], ["-", "OVO", "081266569273"], ["-", "DANA", "082370213099"]], [[10000, "Harga Normal"]], '2021-02-27', '13:00', '16:30'],
            ["Ikamadiri", "Kediri", "Tiara Dyah", "tiaradyaa_", "085736873122", [["Tiara", "Bank Mandiri", "1710005805422"], ["Sharif", "OVO", "089653748571"]], [[10000, "Presale 1"], [15000, "Presale 2"]], '2021-02-28', '13:00', '16:30'],
            ["ITS Bontang", "Bontang", "Alfian Nur", "Alfiannurrfy", "085151444000", [["Hanniya Geremina", "Bank Mandiri", "1480016458120"], ["Hanniya Geremina", "GOPAY", "081253546964"]], [[10000, "Harga Normal"]], '2021-02-27', '08:00', '11:30'],
            ["FORAB", "Bengkulu", "Fitrah Arie Ramadhan", "Fitrah_ramadhan15", "089627934528", [["-", "-", "1400018432592"]], [[10000, "Harga Normal"]], '2021-02-27', '08:00', '11:30', '2021-02-27', '13:00', '16:30']
        ];
        $x = 1;
        foreach ($forda as $data) {
            $forda = Forda::create([
                'daerah' => $data[1],
                'nama_pj' => $data[2],
                'id_line_pj' => $data[3],
                'hp_pj' => $data[4]
            ]);

            // foreach ($data[5] as $rek) {
            //     Rekening::create([
            //         'forda_id' => $forda->id,
            //         'nama_rek' => $rek[0],
            //         'nama_bank' => $rek[1],
            //         'no_rek' => $rek[2]
            //     ]);
            // }

            // foreach ($data[6] as $biaya) {
            //     Biaya::create(['forda_id' => $forda->id, 'biaya' => $biaya[0], 'keterangan' => $biaya[1]]);
            // }

            // $sesi = strtotime($data[8]) < strtotime('12:00') ? 'pagi' : 'siang';
            // Absen::create([
            //     'forda_id' => $forda->id,
            //     'fordas' => $data[0],
            //     'sesi' => $sesi,
            //     'date' => $data[7],
            //     'start_time' => $data[8],
            //     'end_time' => $data[9]
            // ]);

            User::create([
                'name' => $data[0],
                'email_verified_at' => Carbon::now(),
                'email' => 'forda' . $x . '@forda',
                'password' => Hash::make('passwordasdefg'),
                'user_type' => 'App\Models\Forda',
                'user_id' => $forda->id
            ]);
            $x++;
        }


        //admin user
        User::create([
            'name' => 'admin',
            'email_verified_at' => Carbon::now(),
            'email' => 'admin@admin',
            'password' => Hash::make('12345'),
            'user_type' => '-',
            'user_id' => '0'
        ]);
    }
}
