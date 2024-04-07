<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <br><span id="nama-error" style="color: red;"></span>

        <label for="email"><br>Email:</label>
        <input type="text" id="email" name="email">
        <br><span id="email-error" style="color: red;"></span>

        <label for="password"><br>Password:</label>
        <input type="text" id="password" name="password">
        <br><span id="password-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>
    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if(nama === ""){
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else{
                    $("#nama-error").text("");
                }
                if(email === ""){
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else{
                    $("#email-error").text("");
                }
                if(password === ""){
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if(password.length < 8){
                    $("#password-error").text("Password harus memiliki minimal 8 karakter.");
                    valid = false;
                } else{
                    $("#password-error").text("");
                }
                if(valid){
                    (!event.preventDefault());
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: {
                            nama:nama,
                            email:email,
                            password:password
                        },
                        success: function (response) {
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>