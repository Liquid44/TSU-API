<?php
class TSU {
  private $_uapi;
  private $_creq;
  private $_uusr;
 
  public function __construct(
    $uapi = 'https://mobile.tsu.co/api/v1/'
  ) {
      $this->_uapi = $uapi;
      $this->_creq = curl_init();
      curl_setopt($this->_creq, CURLOPT_RETURNTRANSFER, 1);
  }
 
  public function login(
    $login,
    $password,
    $device_id = 0
  ) {
      unset($this->_ussr);
      $params = array(
        'login' => $login,
        'password' => $password,
        'device_id' => $device_id
       );
      curl_setopt($this->_creq, CURLOPT_URL, $this->_uapi.'user/login');
      curl_setopt($this->_creq,CURLOPT_POST, sizeof($params));
      curl_setopt($this->_creq,CURLOPT_POSTFIELDS, $params);
      $this->_ussr = json_decode($req=curl_exec($this->_creq));
      if (!@$this->_ussr->error == true) {
        $this->_ussr = $this->_ussr->data;
        return true;
      } else {
        return $this->_ussr->message;
      }
  }

  public function getUserID($ussr=false) {
    return isset($ussr->id) ? $ussr->id : $this->_ussr->id;
  }

  public function getUserName($ussr=false) {
    return isset($ussr->username) ? $ussr->username : $this->_ussr->username;
  }

  public function getUserEmail($ussr=false) {
    return isset($ussr->email) ? $ussr->email : $this->_ussr->email;
  }

  public function getUserToken($ussr=false) {
    return isset($ussr->auth_token) ? $ussr->auth_token : $this->_ussr->auth_token;
  }

  public function getUserFullName($ussr=false) {
    return isset($ussr->full_name) ? $ussr->full_name : $this->_ussr->full_name;
  }

  public function getUserProfilePicture($ussr=false) {
    return isset($ussr->profile_picture_url) ? $ussr->profile_picture_url : $this->_ussr->profile_picture_url;
  }

  public function getUserCoverPicture($ussr=false) {
    return isset($ussr->cover_picture_url) ? $ussr->cover_picture_url : $this->_ussr->cover_picture_url;
  }

  public function isUserFriend($ussr=false) {
    return isset($ussr->is_friend) ? $ussr->is_friend : $this->_ussr->is_friend;
  }

  public function getUserFriendStatus($ussr=false) {
    return isset($ussr->friendship_status) ? $ussr->friendship_status : $this->_ussr->friendship_status;
  }

  public function isUserFollowing($ussr=false) {
    return isset($ussr->is_following) ? $ussr->is_following : $this->_ussr->is_following;
  }

  public function getUserFriendCount($ussr=false) {
      return isset($ussr->friend_count) ? $ussr->friend_count : $this->_ussr->friend_count;
  }

  public function getUserFollowerCount($ussr=false) {
      return isset($ussr->follower_count) ? $ussr->follower_count : $this->_ussr->follower_count;
  }

  public function getUserFollowingCount($ussr=false) {
      return isset($ussr->following_count) ? $ussr->following_count : $this->_ussr->following_count;
  }

  public function getUserGender($ussr=false) {
      return isset($ussr->gender) ? $ussr->gender : $this->_ussr->gender;
  }

  public function getUserBirthday($ussr=false) {
      return isset($ussr->birthday) ? $ussr->birthday : $this->_ussr->birthday;  
  }

  public function isUserBirthdayPrivate($ussr=false) {
      return isset($ussr->is_birthday_private) ? $ussr->is_birthday_private : $this->_ussr->is_birthday_private;
  }

  public function isUserVerified($ussr=false) {
      return isset($ussr->verified_status) ? $ussr->verified_status : $this->_ussr->verified_status;
  }

  public function getUserRequestStatus($ussr=false) {
      return isset($ussr->accept_friend_request) ? $ussr->accept_friend_request : $this->_ussr->accept_friend_request;
  }

  public function getUserWallStatus($ussr=false) {
      return isset($ussr->is_wall_private) ? $ussr->is_wall_private : $this->_ussr->is_wall_private;
  }

  public function getUserRole($ussr=false) {
      return isset($ussr->role) ? $ussr->role : $this->_ussr->role;
  }

  public function getUserTelephone($ussr=false) {
      return isset($ussr->phone_number) ? $ussr->phone_number : $this->_ussr->phone_number;
  }

  public function logout() {
      unset($this->_ussr);
      curl_setopt($this->_creq, CURLOPT_URL, $this->_uapi.'user/signout');
      curl_exec($this->_creq);
  }
 
  public function __destruct() {
    curl_close($this->_creq);
  }
}
?>