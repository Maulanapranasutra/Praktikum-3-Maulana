<?php
session_start();
error_reporting(0);
        $user = array(
                        "user" => "demo",
                        "pass"=>"demo"
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        //Membuat Session
        $_SESSION["username"] = $_POST['username'];
        echo "Anda Berhasil Login $_POST[username] , Silahkan Logout disini <a href='logout.php'>Klik Logout</a>";
    }
    else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}
else {
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" name="submit" value="submit">
    </form>
<?php } ?>
