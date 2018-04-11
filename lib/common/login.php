<?php
/**
*@return Headerの情報を返す
*/
class HeaderInfo
{
	//USERのログイン情報
	private $user_info;
	
	function __construct()
	{
		session_start();
		$this->user_info = $_SESSION['user_info'];
	}

	/**
	 *@return ヘッダに出力するHTML 
	 */
	public function getHeaderInfo(){
		$me = $this->user_info;
		$html = "";
		switch (empty($me)) {
			case true:
				//ログインしていない
				$html = "<a href='login/index.php' class='flex-child'>ログイン</a>";
				$html .= "<a href='up_user/index.php' class='flex-child'>会員登録</a>";
				break;
			case true:
				//ログインしている
				$html = "<a href='logout/index.php' class='flex-child'>ログアウト</a>";
				break;
			
			default:
				# code...
				break;
		}

		echo $html;
	}

}
?>