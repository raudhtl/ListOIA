<?php
if(sizeof($argv)==1){
	echo "params can't be empty\n";
	echo "php ci.php <function>\n";
	new Help("help");
	return;
}
switch ($argv[1]){
	case "modules":
		new ModulesCreate($argv);
		return;
	default:
		new Help("help");
}

class ModulesCreate{
	private $module;
	private $folders;
	private $style;
	private $base_file;
	private $base_dir;
	private $modules_dir;
	public function __construct($cmd){
		$this->module = "";
		$this->folders = "";
		$this->style = false;
		if(isset($cmd[2])){
			$this->module = ucfirst($cmd[2]);
		}else{
			new Help("modules");
			return;
		}
		if(isset($cmd[3])){
			if (is_numeric($cmd[3])){
				if($cmd[3]<=3){
					$this->style = $cmd[3];
				}else{
					new Help("modules");
				}
			}else{
				$this->folders = array();
				for ($i = 3; $i < sizeof($cmd); $i++) {
					array_push($this->folders, $cmd[$i]);
				}
			}
		}
		$this->MakeModules();
	}
	public function getAll(){
		print_r($this->module);
		print_r($this->folders);
		print_r($this->style);
	}
	public function MakeModules(){
		$this->base_file=get_included_files();
		$this->base_dir = dirname($this->base_file[0]);
		$this->modules_dir="$this->base_dir/application/modules/";
		if (is_dir($this->modules_dir)) {
			if(!is_writable($this->modules_dir)){
				echo $this->base_dir ." is not writable please check folder access before\n";
				return;
			}
		}else{
			mkdir($this->modules_dir, 0777, true);
			echo "create $this->modules_dir\n";
		}
		if(!is_writable($this->modules_dir)){
			echo $this->modules_dir . " is not writable please check folder access before\n";
			return;
		}
		if (!is_dir($this->modules_dir.$this->module)) {
			mkdir($this->modules_dir.$this->module, 0777, true);
			echo "create $this->modules_dir $this->module\n";
			new IndexForbidden($this->modules_dir.$this->module);
		}else{
			echo "cant create module , " . $this->module . " exist\n";
			return;
		}
		if($this->style!=false){
			switch ($this->style){
				case 1:
					mkdir($this->modules_dir.$this->module."/controllers", 0777, true);
					mkdir($this->modules_dir.$this->module."/ajax", 0777, true);
					mkdir($this->modules_dir.$this->module."/views", 0777, true);
					$this->make_default_file(array("controllers","ajax","views"));
				break;
				case 2:
					mkdir($this->modules_dir.$this->module."/controllers", 0777, true);
					mkdir($this->modules_dir.$this->module."/ajax", 0777, true);
					mkdir($this->modules_dir.$this->module."/views", 0777, true);
					mkdir($this->modules_dir.$this->module."/models", 0777, true);
					$this->make_default_file(array("controllers","ajax","views","models"));
					break;
				case 3:
					mkdir($this->modules_dir.$this->module."/controllers", 0777, true);
					$this->make_default_file(array("controllers"));
					break;
			}
		}else{
			if(!is_string($this->folders)){
				foreach($this->folders as &$folder){
					mkdir($this->modules_dir.$this->module."/$folder", 0777, true);
				}
			}
		}
	}
	private function make_default_file($params=null){
		foreach ($params as $param){
			switch ($param){
				case "controllers":
					$handle = fopen($this->modules_dir.$this->module."/$param/$this->module.php", 'w') or die('Cannot open file:  ' . $param);
					fwrite($handle, "<?php\n");
					fwrite($handle,'defined(\'BASEPATH\') OR exit(\'No direct script access allowed\');'."\n");
					fwrite($handle, "class $this->module extends CI_Controller {\n");
					fwrite($handle, "\tfunction __construct() {\n");
					fwrite($handle, "\t\tparent::__construct();\n");
					fwrite($handle, "\t\t".'$this->_public_view= $this->config->item(\'public_view\');'."\n");
					if(is_numeric($this->style)){
						if($this->style==2){
							fwrite($handle, "\t\t".'$this->load->model(\''.$this->module."_Model".'\');'."\n");
						}
					}
					fwrite($handle, "\t}\n");
					fwrite($handle, "\tpublic function index(){\n");
					fwrite($handle, "\t\t".'$this->load->view(\''.lcfirst($this->module).'\');'."\n");
					fwrite($handle, "\t}\n");
					fwrite($handle, "}\n?>\n");
					fclose($handle);
					new IndexForbidden($this->modules_dir.$this->module."/controllers/");
					break;
				case "views":
					$handle = fopen($this->modules_dir.$this->module."/$param/".lcfirst($this->module).".php", 'w') or die('Cannot open file:  ' . $param);
					fwrite($handle, '<script type="text/javascript">'."\n".'<?'.'php'."\n".' include "'."$this->modules_dir$this->module/ajax/".lcfirst($this->module).".js\";\n"."?>\n</script>");
					fclose($handle);
					new IndexForbidden($this->modules_dir.$this->module."/views/");
					break;
				case "ajax":
					$handle = fopen($this->modules_dir.$this->module."/$param/".lcfirst($this->module).".js", 'w') or die('Cannot open file:  ' . $param);
					fwrite($handle, "");
					fclose($handle);
					new IndexForbidden($this->modules_dir.$this->module."/ajax/");
					break;
				case "models":
					$handle = fopen($this->modules_dir.$this->module."/$param/$this->module"."_Model.php", 'w') or die('Cannot open file:  ' . $param);
					fwrite($handle, "<?php\n");
					fwrite($handle, "class $this->module"."_Model extends CI_Model{\n\tfunction __construct(){\n\t\tparent::__construct();\n\t\t}\n\t}\n");
					fwrite($handle, "?>\n");
					fclose($handle);
					new IndexForbidden($this->modules_dir.$this->module."/models/");
					break;
			}
		}
	}
}
class Help{
	public function __construct($var=null){
		if(strcmp($var,"modules")==0) {
			$this->show_modules();
			return;
    }
    $this->show_modules();
	}
	public function show_modules(){
		echo " | Modules \n";
		echo " \tphp ci.php modules module_name  >>>  php module home\n";
		echo " \tphp ci.php modules module_name folder_name folder_n  >>>  php module home controller ajax\n";
		echo " \tphp ci.php modules module_name style_module  >>>  php module home 1\n";
		echo " \t\t style module 1 : controllers ajax views\n";
		echo " \t\t style module 2 : controllers ajax views models\n";
		echo " \t\t style module 3 : controllers\n";
		echo " \t\t style will generate all default class for you\n";
	}
}
class IndexForbidden{
	private $path;
	private $html="<!DOCTYPE html>\n<html>\n<head>\n<title>403 Forbidden</title>\n</head>\n<body>\n<p>Directory access is forbidden.</p>\n</body>\n</html>\n";
	public function __construct($var=null){
		if(strlen($var)==0){
			return;
		}
		$handle = fopen($var."/index.html", 'w') or die('Cannot open file:  ' . $var);
		fwrite($handle, $this->html);
		fclose($handle);
	}
}
