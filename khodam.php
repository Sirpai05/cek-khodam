<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khodam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: rgba(74, 34, 12, 0.9);
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            min-height: 100vh;
            margin: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .card {
            background-color: rgba(147, 148, 171, 0.25);
            padding: 20px;
            border: 1px solid #FFA500;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            position: relative;
        }

        h1,
        p {
            color: #FFA500;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #FFA500;
            border-radius: 200px;
            text-align: center;
            width: 80%;
            margin-bottom: 20px;
            background-color: transparent;
            color: #f1f1f1;
        }

        button {
            background-color: #439c8f;
            color: #ffffff;
            padding: 10px 25px;
            font-size: 16px;
            border: none;
            border-radius: 200px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }

        button:hover {
            background-color: #4e4aa7;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        #result {
            display: block; 
            margin-top: 20px;
            color: #FFA500;
        }

        .loading-spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid #FFA500;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -20px;
            margin-left: -20px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media screen (max-width: 768px) {
            
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Cek Khodam</h1>
        <p>Masukkan nama untuk mengetahui khodam</p>

        <form method="POST" action="">
        <input type="text" name="nameInput" placeholder="Ketik nama kamu di sini" value="<?php echo isset($_POST['nameInput']) ? htmlspecialchars($_POST['nameInput']) : ''; ?>">
            <button type="submit">Cek Khodam</button>
        </form>

        <div id="loading" class="loading-spinner" style="display: none;"></div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nameInput'])) {
            $khodams = [
                ["name" => "jigong busuk", "meaning" => "Kamu bau dan suka meludah seperti Llama, karena kamu mewariskan Air liur besar padamu."],
                ["name" => "jigong busuk", "meaning" => "Kamu bau dan suka meludah seperti Llama, karena kamu mewariskan Air liur besar padamu."],
                ["name" => "Llama busuk", "meaning" => "Kamu bau dan suka meludah seperti Llama, karena kamu mewariskan Air liur besar padamu."],
                ["name" => "Harimau Putih", "meaning" => "Kamu kuat dan berani seperti harimau, karena pendahulumu mewariskan kekuatan besar padamu."],
    ["name" => "Lampu Tertidur", "meaning" => "Terlihat ngantuk tapi selalu memberikan cahaya yang hangat"],
    ["name" => "Panda Ompong", "meaning" => "Kamu menggemaskan dan selalu berhasil membuat orang tersenyum dengan keanehanmu."],
    ["name" => "Bebek Karet", "meaning" => "Kamu selalu tenang dan ceria, mampu menghadapi gelombang masalah dengan senyum."],
    ["name" => "Ninja Turtle", "meaning" => "Kamu lincah dan tangguh, siap melindungi yang lemah dengan kekuatan tempurmu."],
    ["name" => "Kucing Kulkas", "meaning" => "Kamu misterius dan selalu ada di tempat-tempat yang tak terduga."],
    ["name" => "Sabun Wangi", "meaning" => "Kamu selalu membawa keharuman dan kesegaran di mana pun kamu berada."],
    ["name" => "Semut Kecil", "meaning" => "Kamu pekerja keras dan selalu bisa diandalkan dalam situasi apa pun."],
    ["name" => "Anjing Pelacak", "meaning" => "Kamu setia dan penuh dedikasi, selalu menemukan jalan menuju tujuanmu."],
    ["name" => "Bunga Matahari", "meaning" => "Kamu selalu menghadirkan kebahagiaan dan kehangatan bagi orang di sekitarmu."],
    ["name" => "Kupu-Kupu Malam", "meaning" => "Kamu penuh misteri dan pesona, selalu menarik perhatian di saat yang tidak terduga."],
    ["name" => "Gajah Besar", "meaning" => "Kamu bijaksana dan memiliki ingatan yang kuat, selalu dihormati oleh orang lain."],
    ["name" => "Bintang Laut", "meaning" => "Kamu indah dan unik, selalu berhasil menemukan tempatmu di dunia."],
    ["name" => "Serigala Penyendiri", "meaning" => "Kamu mandiri dan kuat, lebih suka menjalani jalan hidupmu sendiri."],
    ["name" => "Kuda Hitam", "meaning" => "Kamu selalu mengejutkan orang dengan kemampuan tersembunyimu."],
    ["name" => "Ikan Terbang", "meaning" => "Kamu fleksibel dan penuh kejutan, mampu beradaptasi dengan cepat."],
    ["name" => "Burung Hantu Bijak", "meaning" => "Kamu penuh pengetahuan dan kebijaksanaan, selalu menjadi tempat bertanya orang lain."],
    ["name" => "Kelinci Cepat", "meaning" => "Kamu lincah dan cepat dalam mengambil keputusan, selalu berada di depan."],
    ["name" => "Bintang Kejora", "meaning" => "Kamu menjadi penunjuk arah dan inspirasi bagi banyak orang."],
    ["name" => "Pohon Kokoh", "meaning" => "Kamu selalu menjadi tempat bersandar dan memberikan ketenangan bagi orang di sekitarmu."],
    ["name" => "Ombak Tenang", "meaning" => "Kamu membawa ketenangan dan damai di mana pun kamu berada."],
    ["name" => "Angin Sejuk", "meaning" => "Kamu selalu memberikan kesegaran dan semangat baru bagi orang-orang di sekitarmu."],
    ["name" => "Singa Perkasa", "meaning" => "Kamu penuh keberanian dan kekuatan, selalu memimpin dengan percaya diri."],
    ["name" => "Elang Tajam", "meaning" => "Kamu memiliki visi yang tajam dan selalu fokus pada tujuanmu."],
    ["name" => "Kupu-Kupu Indah", "meaning" => "Kamu membawa keindahan dan kebahagiaan di setiap langkahmu."],
    ["name" => "Gajah Lembut", "meaning" => "Kamu besar namun penuh kelembutan dan perhatian kepada sesama."],
    ["name" => "Batu Karang", "meaning" => "Kamu kokoh dan stabil, selalu menjadi pondasi bagi orang-orang di sekitarmu."],
    ["name" => "Burung Merak", "meaning" => "Kamu penuh warna dan karisma, selalu menjadi pusat perhatian."],
    ["name" => "Kucing Manis", "meaning" => "Kamu penuh kasih sayang dan selalu membuat orang merasa diterima."],
    ["name" => "Ikan Lumba-Lumba", "meaning" => "Kamu cerdas dan selalu membawa keceriaan di setiap kesempatan."],
    ["name" => "Angsa Putih", "meaning" => "Kamu elegan dan anggun, selalu tampil dengan keindahan alami."],
    ["name" => "Kelelawar Malam", "meaning" => "Kamu penuh misteri dan selalu mengeksplorasi hal-hal baru di kegelapan malam."],
    ["name" => "Tupai Ceria", "meaning" => "Kamu aktif dan penuh semangat, selalu mencari petualangan baru."],
    ["name" => "Kuda Nil", "meaning" => "Kamu besar dan kuat, namun memiliki hati yang lembut dan penuh kasih."],
    ["name" => "Singa Laut", "meaning" => "Kamu tangguh dan berani, selalu menghadapi tantangan dengan kepala tegak."],
    ["name" => "Kelinci Manis", "meaning" => "Kamu lembut dan penuh kasih sayang, selalu membawa kedamaian."],
    ["name" => "Bintang Berkilau", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Rindang", "meaning" => "Kamu memberikan keteduhan dan kenyamanan bagi semua orang."],
    ["name" => "Ombak Deras", "meaning" => "Kamu penuh energi dan selalu membawa perubahan positif."],
    ["name" => "Angin Kencang", "meaning" => "Kamu penuh semangat dan selalu mendorong orang lain untuk bergerak maju."],
    ["name" => "Singa Muda", "meaning" => "Kamu penuh potensi dan selalu bersemangat untuk mengejar mimpimu."],
    ["name" => "Elang Perkasa", "meaning" => "Kamu memiliki kekuatan dan ketangguhan yang luar biasa, selalu melindungi yang lemah."],
    ["name" => "Kupu-Kupu Ceria", "meaning" => "Kamu membawa kebahagiaan dan keceriaan di mana pun kamu berada."],
    ["name" => "Gajah Bijak", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Teguh", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Cendrawasih", "meaning" => "Kamu penuh keindahan dan selalu menarik perhatian dengan pesonamu."],
    ["name" => "Kucing Licin", "meaning" => "Kamu lincah dan selalu bisa menghindari masalah dengan kecerdikanmu."],
    ["name" => "Ikan Pari", "meaning" => "Kamu tenang dan penuh misteri, selalu menarik perhatian di mana pun kamu berada."],
    ["name" => "Angsa Elegan", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Hitam", "meaning" => "Kamu penuh misteri dan selalu siap menjelajahi kegelapan malam."],
    ["name" => "Tupai Lincah", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Kuat", "meaning" => "Kamu penuh kekuatan dan selalu mampu menghadapi tantangan yang ada."],
    ["name" => "Singa Pemberani", "meaning" => "Kamu penuh keberanian dan selalu siap melindungi yang lemah."],
    ["name" => "Kelinci Lincah", "meaning" => "Kamu lincah dan selalu penuh semangat dalam menjalani hidup."],
    ["name" => "Bintang Terang", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Tangguh", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Kecil", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Lembut", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Raja", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan kebijaksanaan."],
    ["name" => "Elang Gagah", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Penuh Warna", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Kuat", "meaning" => "Kamu penuh kekuatan dan selalu dihormati oleh orang lain."],
    ["name" => "Batu Kukuh", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Cantik", "meaning" => "Kamu penuh keindahan dan selalu menarik perhatian dengan pesonamu."],
    ["name" => "Kucing Imut", "meaning" => "Kamu menggemaskan dan selalu membuat orang tersenyum dengan tingkah lakumu."],
    ["name" => "Ikan Tropis", "meaning" => "Kamu penuh warna dan selalu membawa keceriaan di mana pun kamu berada."],
    ["name" => "Angsa Putih Bersih", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Misterius", "meaning" => "Kamu penuh misteri dan selalu menarik perhatian di kegelapan malam."],
    ["name" => "Tupai Pemberani", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Andal", "meaning" => "Kamu penuh kekuatan dan selalu bisa diandalkan dalam situasi apapun."],
    ["name" => "Singa Pemimpin", "meaning" => "Kamu penuh keberanian dan selalu siap melindungi yang lemah."],
    ["name" => "Kelinci Berani", "meaning" => "Kamu penuh semangat dan selalu menghadapi hidup dengan penuh keberanian."],
    ["name" => "Bintang Bersinar", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Kuat", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Damai", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Segar", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Tangguh", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan keberanian."],
    ["name" => "Elang Perkasa", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Cerah", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Mulia", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Tahan Banting", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Pengelana", "meaning" => "Kamu penuh petualangan dan selalu mencari pengalaman baru."],
    ["name" => "Kucing Petualang", "meaning" => "Kamu lincah dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Ikan Tenang", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angsa Hitam", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Cerdas", "meaning" => "Kamu penuh misteri dan selalu menarik perhatian di kegelapan malam."],
    ["name" => "Tupai Rajin", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Gesit", "meaning" => "Kamu penuh kekuatan dan selalu bisa diandalkan dalam situasi apapun."],
    ["name" => "Singa Bijak", "meaning" => "Kamu penuh kebijaksanaan dan selalu memimpin dengan bijaksana."],
    ["name" => "Kelinci Pintar", "meaning" => "Kamu penuh semangat dan selalu menghadapi hidup dengan penuh kecerdasan."],
    ["name" => "Bintang Pagi", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Sejuk", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Tenang", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Dingin", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Pemburu", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan keberanian."],
    ["name" => "Elang Terbang Tinggi", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Penuh Harapan", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Setia", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Teguh", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Lincah", "meaning" => "Kamu penuh petualangan dan selalu mencari pengalaman baru."],
    ["name" => "Kucing Cerdik", "meaning" => "Kamu lincah dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Ikan Kecil", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angsa Anggun", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Cepat", "meaning" => "Kamu penuh misteri dan selalu menarik perhatian di kegelapan malam."],
    ["name" => "Tupai Pintar", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Cepat", "meaning" => "Kamu penuh kekuatan dan selalu bisa diandalkan dalam situasi apapun."],
    ["name" => "Singa Pemimpin", "meaning" => "Kamu penuh keberanian dan selalu memimpin dengan bijaksana."],
    ["name" => "Kelinci Cerdas", "meaning" => "Kamu penuh semangat dan selalu menghadapi hidup dengan penuh kecerdasan."],
    ["name" => "Bintang Bening", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Rindang", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Damai", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Sejuk", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Besar", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan keberanian."],
    ["name" => "Elang Perkasa", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Berani", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Agung", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Kuat", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Pintar", "meaning" => "Kamu penuh petualangan dan selalu mencari pengalaman baru."],
    ["name" => "Kucing Bijak", "meaning" => "Kamu lincah dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Ikan Perenang", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angsa Penuh Pesona", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Tangguh", "meaning" => "Kamu penuh misteri dan selalu menarik perhatian di kegelapan malam."],
    ["name" => "Tupai Energik", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Andal", "meaning" => "Kamu penuh kekuatan dan selalu bisa diandalkan dalam situasi apapun."],
    ["name" => "Singa Raja Hutan", "meaning" => "Kamu penuh keberanian dan selalu memimpin dengan bijaksana."],
    ["name" => "Kelinci Lembut", "meaning" => "Kamu penuh semangat dan selalu menghadapi hidup dengan penuh kelembutan."],
    ["name" => "Bintang Terang Benderang", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Teguh", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Tenang", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Kencang", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Hebat", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan keberanian."],
    ["name" => "Elang Berani", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Lincah", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Muda", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Teguh", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Penjelajah", "meaning" => "Kamu penuh petualangan dan selalu mencari pengalaman baru."],
    ["name" => "Kucing Pemberani", "meaning" => "Kamu lincah dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Ikan Bermain", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angsa Pemimpin", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Bijaksana", "meaning" => "Kamu penuh misteri dan selalu menarik perhatian di kegelapan malam."],
    ["name" => "Tupai Lincah", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Tangguh", "meaning" => "Kamu penuh kekuatan dan selalu bisa diandalkan dalam situasi apapun."],
    ["name" => "Singa Pemimpin", "meaning" => "Kamu penuh keberanian dan selalu memimpin dengan bijaksana."],
    ["name" => "Kelinci Manis", "meaning" => "Kamu penuh semangat dan selalu menghadapi hidup dengan penuh kelembutan."],
    ["name" => "Bintang Berkilau", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Kuat", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Tenang", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Penuh Semangat", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Perkasa", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan keberanian."],
    ["name" => "Elang Berjaya", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Cerah", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Hebat", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Kuat", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Pintar", "meaning" => "Kamu penuh petualangan dan selalu mencari pengalaman baru."],
    ["name" => "Kucing Lincah", "meaning" => "Kamu lincah dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Ikan Berani", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angsa Cantik", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."],
    ["name" => "Kelelawar Cepat", "meaning" => "Kamu penuh misteri dan selalu menarik perhatian di kegelapan malam."],
    ["name" => "Tupai Pemberani", "meaning" => "Kamu penuh semangat dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Kuda Perkasa", "meaning" => "Kamu penuh kekuatan dan selalu bisa diandalkan dalam situasi apapun."],
    ["name" => "Singa Berani", "meaning" => "Kamu penuh keberanian dan selalu memimpin dengan bijaksana."],
    ["name" => "Kelinci Cerdas", "meaning" => "Kamu penuh semangat dan selalu menghadapi hidup dengan penuh kecerdasan."],
    ["name" => "Bintang Terang", "meaning" => "Kamu selalu bersinar terang dan menjadi inspirasi bagi banyak orang."],
    ["name" => "Pohon Teguh", "meaning" => "Kamu kuat dan selalu memberikan keteduhan bagi orang di sekitarmu."],
    ["name" => "Ombak Damai", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angin Lembut", "meaning" => "Kamu selalu memberikan kesegaran dan kenyamanan bagi orang di sekitarmu."],
    ["name" => "Singa Pemimpin", "meaning" => "Kamu penuh kekuatan dan selalu memimpin dengan keberanian."],
    ["name" => "Elang Kuat", "meaning" => "Kamu penuh karisma dan selalu menarik perhatian dengan keberanianmu."],
    ["name" => "Kupu-Kupu Indah", "meaning" => "Kamu membawa keceriaan dan keindahan di mana pun kamu berada."],
    ["name" => "Gajah Penuh Kekuatan", "meaning" => "Kamu penuh kebijaksanaan dan selalu memberikan nasihat yang berguna."],
    ["name" => "Batu Kukuh", "meaning" => "Kamu kokoh dan selalu berdiri teguh di tengah badai."],
    ["name" => "Burung Pemimpin", "meaning" => "Kamu penuh petualangan dan selalu mencari pengalaman baru."],
    ["name" => "Kucing Tangguh", "meaning" => "Kamu lincah dan selalu mencari petualangan baru di setiap kesempatan."],
    ["name" => "Ikan Petualang", "meaning" => "Kamu tenang dan selalu membawa kedamaian di mana pun kamu berada."],
    ["name" => "Angsa Lembut", "meaning" => "Kamu penuh keanggunan dan selalu tampil dengan penuh percaya diri."]
            ];
            $khodam = $khodams[array_rand($khodams)];
            echo "<div id='result'>";
            echo "<h2>Khodam: {$khodam['name']}</h2>";
            echo "<p>{$khodam['meaning']}</p>";
            echo "</div>";
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "error";
        }
        ?>

       
    </div>

   
</body>

</html>