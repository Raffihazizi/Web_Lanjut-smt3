@extends('layouts.mainlayout')

@section('title','Profile Admin')

@section('content')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-c7oVVMEckIo1BPvUK1xbZt45H4mWWLxj6gQb9bMOyN8V0bKGdKDDZteXtWnEmPDG" crossorigin="anonymous">

    <div class="profile-container">
        <div class="profile-table-container">
            <table class="profile-table">
                <tr>
                    <td rowspan="5" class="profile-picture">
                        <img src="images/cover/rapi.jpg"  alt="Profile Picture" class="profile-image">
                        <td colspan="2" class="profile-name">Raffi Hazizi</td>
                    </td>
                </tr>
                <tr>
                    <td class="profile-label">Email:</td>
                    <td class="profile-info">Rafihazizi@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile-label">Kelas:</td>
                    <td class="profile-info">TEKKOM 2B</td>
                </tr>
                <tr>
                    <td class="profile-label">Kampus:</td>
                    <td class="profile-info">Politeknik Negeri Padang</td>
                </tr>
            </table>
        </div>

        <div class="profile-table-container">
            <p class="profile-description">
                Izin Bapak Dosen<br>
                Allhamdullilah saya telah menyelesaikan Project Laravel Mata Kuliah Web Lanjut
                dengan waktu pengerjaan 20 Hari.Semoga dengan Project ini saya mendapatkan nilai yang memuaskan aamiin<br>
                Terimakasih
            </p>
        </div>
    </div>

</body>
</html>

@endsection
