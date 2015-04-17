<?php
class User extends \Jenssegers\Mongodb\Model implements \Illuminate\Auth\UserInterface, \Illuminate\Auth\Reminders\RemindableInterface {
    protected $collection="users";
    protected $hidden = array('password');
    public function posts()
    {
        return $this->hasMany('Post','user_id');
    }
    public static function getUserById($user_id)
    {
        $user = User::where('_id',$user_id)->first();
        return $user;
    }
    public static function addFieldToUser($user_id,$field)
    {
        $success = User::where('_id',$user_id)->update(array($field));
        return $success;
    }
    /*
     * check valid email, user
     */
    public static function check_Email($email)
    {
        $success = User::where('email',$email)->first();
        if($success!=null) return true;
        return false;
    }

    public static function check_Username($username)
    {
        $success = User::where('username',$username)->first();
        if($success!=null) return true;
        return false;
    }

    /**
     * Login to user
     */
    public static function check_login($user_input,$password)
    {
        //$result = User::where('username',$user_input)->where('password',$password)->first();	
        $data = array('email'=>$user_input,'password'=>$password);
        $result=Auth::attempt($data);
        if(!$result)
        {
            return false;
        }
        else{
            //          //Luu session
            Session::put('user_id',$result['_id']);
            Session::put('user_name',$result['username']);
            return $result;
        }
    }

    /**
     * check logged
     */

    public static function check_logged($username){
        if(Session::has('user_name')){
            if(Session::get('user_name')==$username){
                return true;
            }
            else return false;
        }
        else return false;
    }

    public static function logout(){
        Session::flush();
    }
    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        // TODO: Implement getReminderEmail() method.
        return $this->email;
    }
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
        return $this->password;
    }
    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
        return $this->remember_token;

    }
    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
        $this->remember_token = $value;
    }
    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.

        return "remember_token";
    }
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

}
