<?php
class Items
{

	private $itemsTable;
	public $id;
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
			INSERT INTO ".$this->itemsTable. "(`id`, `lecture`, `question`, `option1`, `option2`, `option3`, `answear`)
			VALUES(?,?,?,?,?,?,?)");
		if($stmt){

		$this->id = htmlspecialchars(strip_tags($this->id));
		$this->lecture = htmlspecialchars(strip_tags($this->lecture));
		$this->question = htmlspecialchars(strip_tags($this->question));
		$this->option1 = htmlspecialchars(strip_tags($this->option1));
		$this->option2 = htmlspecialchars(strip_tags($this->option2));
		$this->option3 = htmlspecialchars(strip_tags($this->option3));
		$this->answear = htmlspecialchars(strip_tags($this->answear));

		$stmt->bind_param("sssssss", $this->id, $this->lecture, $this->question, $this->option1, $this->option2, $this->option3, $this->answear);
		
		if($stmt->execute())
			return true;
		}
		else {
			$error = $this->conn->errno . ' ' . $this->conn->error;
			echo $error;
		}
	 
		return false;		 
	}

	function update() {

		if ($this->id) {

		$stmt = $this->conn->prepare("
					UPDATE " .$this->itemsTable. " SET lecture = ?, question = ?, option1 = ?, option2 = ?, option3 = ?, answear = ?
					 WHERE id = ?");

		if($stmt) {

		$this->id = htmlspecialchars(strip_tags($this->id));
		$this->lecture = htmlspecialchars(strip_tags($this->lecture));
		$this->question = htmlspecialchars(strip_tags($this->question));
		$this->option1 = htmlspecialchars(strip_tags($this->option1));
		$this->option2 = htmlspecialchars(strip_tags($this->option2));
		$this->option3 = htmlspecialchars(strip_tags($this->option3));
		$this->answear = htmlspecialchars(strip_tags($this->answear));

		$stmt->bind_param("sssssss", $this->lecture, $this->question, $this->option1, $this->option2, $this->option3, $this->answear, $this->id);
		
		if($stmt->execute()) {
		  return true;
		}
	}
	else {
		$error = $this->conn->errno . ' ' . $this->conn->error;
		echo $error;
	}

		return false;
	}
  }

  // Delete Post
  function delete() {

	if ($this->id) {

		$stmt = $this->conn->prepare("
					DELETE FROM " .$this->itemsTable. " WHERE id = ?");

		if($stmt) {

		$this->id = htmlspecialchars(strip_tags($this->id));

		$stmt->bind_param('i', $this->id);

		if($stmt->execute()) {
		  return true;
		}
	}
	else {
		$error = $this->conn->errno . ' ' . $this->conn->error;
		echo $error;
	}
		return false;
  }
}
}

