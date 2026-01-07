<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
    <style>
      /* Styling untuk bagian ekstrakurikuler */
      #ekstrakurikuler {
        max-width: 1000px;
        margin: auto;
        padding: 60px;
        text-align: center;
        background: #faf2dc;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #2C3E50;
      }

      /* Grid Layout */
      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        justify-content: center;
        padding: 20px;
      }

      /* Kartu ekstrakurikuler */
      .card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      }

      .card img {
        width: 100px;
        height: auto;
        object-fit: contain;
        margin-bottom: 10px;
      }

      .card p {
        font-size: 16px;
        color: #333;
        margin-top: 5px;
      }

      /* Responsive untuk layar kecil */
      @media (max-width: 768px) {
        #ekstrakurikuler {
          padding: 15px;
        }
        .grid {
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
        .card {
          padding: 15px;
        }
      }
    </style>
</head>
<body>
    <section id="ekstrakurikuler">
        <div class="title">Ekstrakurikuler</div>
        <div class="grid">
            <div class="card">
                <img src="upload/basketball_12094154.png" alt="Basket">
                <p>Basket</p>
                <p>Jadwal : Rabu <br> Tempat: Lap. Basket</p>
            </div>
            <div class="card">
                <img src="upload/soccer_15767870.png" alt="Futsal">
                <p>Futsal</p>
                <p>Jadwal : Sabtu <br> Tempat : Lap. Basket</p>
            </div>
            <div class="card">
                <img src="upload/badminton_11089293.png" alt="Badminton">
                <p>Badminton</p>
                <p>Jadwal : Sabtu <br> Tempat : Aula 1 Bintaraloka</p>
            </div>
            <div class="card">
                <img src="upload/volleyball_3060704.png" alt="Voli">
                <p>Voli</p>
                <p>Jadwal : Kamis<br> Tempat : Lap. Voli</p>
            </div>
            <div class="card">
                <img src="upload/table-tennis_1099779.png" alt="Tenis Meja">
                <p>Tenis Meja</p>
                <p>Jadwal : Senin<br> Tempat : Aula 1 Bintaraloka</p>
            </div>
            <div class="card">
                <img src="upload/fight_4020293.png" alt="Karate">
                <p>Karate</p>
                <p>Jadwal : Kamis<br> Tempat : Aula 1 Bintaraloka</p>
            </div>
            <div class="card">
                <img src="upload/jurnalistik.png" alt="Jurnalistik">
                <p>Jurnalistik</p>
                <p>Jadwal : Selasa<br> Tempat : Kelas 9.8</p>
            </div>
            <div class="card">
                <img src="upload/queen_1626914.png" alt="Catur">
                <p>Catur</p>
                <p>Jadwal : Rabu<br> Tempat : Kelas 9.4</p>
            </div>
            <div class="card">
                <img src="upload/drums_4280815.png" alt="Band/Musik">
                <p>Band/Musik</p>
                <p>Jadwal : Selasa<br> Tempat : Ruang Band SMP 3</p>
            </div>
        </div>
    </section>
</body>
</html>
