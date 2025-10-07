<?php

require_once "Model.php";

class User extends Model
{
    private $id, $full_name, $email, $password, $phone, $role;

    public function login($email, $password)
    {
        $user = "SELECT users.id, 
                full_name, email, phone,
                password,
                role_name as role
                FROM users
                JOIN user_role
                ON user_role.user_id=users.id
                JOIN roles
                ON user_role.role_id=roles.id
                WHERE users.email='$email'";
        $connect = $this->connect();
        $query = $connect->query($user);

        $data = $query->fetchAll(PDO::FETCH_CLASS, 'User');
        session_start();

        if (count($data) == 0) {
            $_SESSION['email'] = $email;
            $_SESSION['ERROR'] = "Email not registered!";
            return header('Location: /auth');
        }

        if (!password_verify($password, $data[0]->password)) {
            $_SESSION['ERROR'] = "Wrong password!";
            $_SESSION['email'] = $email;
            return header('Location: /auth');
        }

        $_SESSION["is_login"] = true;
        $_SESSION["id"] = $data[0]->id;
        $_SESSION["full_name"] = $data[0]->full_name;
        $_SESSION["email"] = $data[0]->email;
        $_SESSION["role"] = $data[0]->role;
        $_SESSION["phone"] = $data[0]->phone;

        return header('Location: /dashboard');
    }

    public function register(
        $password,
        $full_name,
        $phone,
        $email
    ) {
        try {
            $hashed_password = password_hash("$password", PASSWORD_DEFAULT);
            $query = $this->connect();
            $data = "INSERT INTO users(full_name, email, password, phone) VALUES('$full_name', '$email', '$hashed_password', '$phone')";

            $query->exec($data);
            session_start();
            $_SESSION['success'] = "Register Success!";

            header('Location: /register');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
