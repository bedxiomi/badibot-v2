<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="style.css">
    <title>Badibot</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">badibot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hai, ada yang? </p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="text-pesan" type="text" placeholder="Ketikkan sesuatu disini..." required>
                <button id="send-btn">Kirim</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
    $(document).ready(function() {
        //jika tombol kirim di klik
        $("#send-btn").on("click", function() {
            //mengambil inputan pesan
            $pesan = $("#text-pesan").val();

            //tampung pesan ke variabel smg
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $pesan +
                '</p></div> </div>';
            //masukkan ke form chat
            $(".form").append($msg);
            //kosongkan input teks
            $("#text-pesan").val('');



            //menambahkan ajax
            $.ajax({
                url: 'pesan.php',
                type: 'POST',
                data: 'isi_pesan=' + $pesan,
                success: function(result) {
                    //jika sukses, tampung ke var balasan
                    $balas =
                        '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' +
                        result + '</p></div></div>';

                    //masukkan ke dalam form chat
                    $(".form").append($balas);

                    //buat form otomatis scroll ke bawah
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });


        });

    })
    </script>
</body>

</html>