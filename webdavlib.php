<?php
class WebDAV
{
  private $user;
  private $password;
  private $base_url;
 
  public function __construct($base_url, $user, $password)
  {
    $this->user = $user;
    $this->password = $password;
    $this->base_url = $base_url;
  }
  
  public function createFolder($folder)
  {
    $construct_url = '-u ' . $this->user . ':' . $this->password . ' "'.$this->base_url;
    $request='curl -X MKCOL ' . $construct_url . $folder.'"';
    echo $request;
	  exec($request);
  }

}

?>
