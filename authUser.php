<?php 
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();

echo "User : ".$user;

if (isset($user)) {
  echo sprintf('Welcome, %s! (<a href="%s">sign out</a>)',
               $user->getNickname(),
               UserService::createLogoutUrl('/'));
  echo "<hr>".htmlspecialchars("Login URL : ".UserService::createLogoutUrl('/')); 
  
} else {
  echo sprintf('<a href="%s">Sign in or register</a>',
               UserService::createLoginUrl('/'));
  echo "<hr>".htmlspecialchars("Logout URL : ".UserService::createLoginUrl('/'));
}
?>