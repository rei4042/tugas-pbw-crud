use App\Database\UserDAO;
use App\Models\User;

$userDao = new UserDAO();
$user = $userDao->get($id);

$email = $user->getEmail();
$name = $user->getName();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'] ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user->getPassword();
    $name = $_POST['name'];

    $userDao->update(new User($id, $email, $password, $name, null));
    header("Location: /users");
}
?>
<h2>Edit user</h2>
<a href="/users">Back to List</a><br><br>
<form method="POST">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?= $email ?>" required><br><br>
    <label for="password">New Password (optional):</label><br>
    <input type="password" id="password" name="password"><br><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?= $name ?>" required><br><br>
    <button type="submit">Save</button>
</form>