<?php


class SignupController
{

    public function __construct(
        private string $uid,
        private string $pwd,
        private string $pwdRepeat,
        private string $email
    ) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    private function emptyInput()
    {
        if (
            empty($this->uid) ||
            empty($this->pwd) ||
            empty($this->pwdRepeat) ||
            empty($this->email)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid()
    {

        $result = !preg_match("/^[a-zA-Z0-9]*$/", $this->uid) ? false : true;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }


        return $result;
    }

    private function invalidEmail()
    {

        $result = !filter_var($this->email, FILTER_VALIDATE_EMAIL) ? false : true;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {

        $result = $this->pwd !== $this->pwdRepeat ? false : true;

        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
