<?php
class Items
{

	private $itemsTable = "questions";
	public $id;
	public $question;
	public $answear;
	private $conn;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	function read()
	{
		if ($this->id) {
			$stmt = $this->conn->prepare("SELECT * FROM " . $this->itemsTable . " WHERE id = ?");
			$stmt->bind_param("i", $this->id);
		} else {
			$stmt = $this->conn->prepare("SELECT * FROM " . $this->itemsTable);
		}
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
	}

	function create(){
		
		$stmt = $this->conn->prepare("
			INSERT INTO questions (`id`, `question`, `answear`)
			VALUES(?,?,?)");
		
		$this->id = htmlspecialchars(strip_tags($this->id));
		$this->question = htmlspecialchars(strip_tags($this->question));
		$this->answear = htmlspecialchars(strip_tags($this->answear));
		
		
		$stmt->bind_param("iss", $this->id, $this->question, $this->answear);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
}
