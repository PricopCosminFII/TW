<?php
class Items
{

	private $itemsTable;
	public $lecture;
	public $question;
	public $option1;
	public $option2;
	public $option3;
    public $answear;
	private $conn;

	public function __construct($db,$name)
	{
		$this->conn = $db;
		$this->itemsTable=$name;
	}

	function read()
	{
	
		$stmt = $this->conn->prepare("SELECT * FROM " . $this->itemsTable);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
	}

	function create(){
		
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->itemsTable. "(`lecture`, `question`, `option1`,`option2`,`option3`,`answear`)
			VALUES(?,?,?,?,?,?)");
		
		$this->lecture = htmlspecialchars(strip_tags($this->lecture));
		$this->question = htmlspecialchars(strip_tags($this->question));
		$this->option1 = htmlspecialchars(strip_tags($this->option1));
		$this->option2 = htmlspecialchars(strip_tags($this->option2));
		$this->option3 = htmlspecialchars(strip_tags($this->option3));
		$this->answear = htmlspecialchars(strip_tags($this->answear));
		
		
		$stmt->bind_param("ssssss", $this->lecture, $this->question,$this->option1,$this->option2,$this->option3, $this->answear);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
}
