<?php
	//include 'dbConfig.php';
	class FileUploader{
		
		//Member variables
		private static $target_directory = "uploads/";
		private static $size_limit = 50000; //size in bytes
		private $upload0k= false;
		private $file_original_name;
		private $fileType;
		private $file_size;
		private $final_file_name;

		
		//getters and setters
		public function setOriginalName ($name){
			$this-> file_original_name=$name;
		}
		public function getOriginalName(){
			return $this->file_original_name;
		}
		public function setFileType ($type){
			$this->file_type=$type;
		}
		public function getFileType(){
			return $this->file_type;
		}
		public function setFileSize($size){
			$this->$file_size=$size;
		}
		public function getFileSize(){
			return $this->file_size;
		}
		public function setFinalFileName($final_name){
			$this->final_file_name=$final_name;
		}
		public function getFinalFileName(){
			return $this->final_file_name;
		}
		
		//methods
		public function uploadFile(){
			/*
			if(isset($_POST["submit"])){
				
				if ($name="") {
					exit('Empty File');
				}
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
	
			$file= $_FILES['file'];
			$fileName = $_FILES['file']['name'];
			$fileTmp = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$filesError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
    
			$fileExt = explode('.',$_FILES['file']['name']);
			$fileActualExt = strtolower(end($fileExt));
			$allowed = array('jpg','jpeg');
			if(in_array($fileActualExt,$allowed)){
				if($_FILES['file']['error'] ===  0){
					if($_FILES['file']['size'] < 1000000){            
						$fileNameNew = "profile".$id.".".$fileActualExt;
						$fileDestination = 'uploads/'.$fileNameNew;
						move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
						$sql = "UPDATE profileimg SET status = 0 WHERE userid ='$id';";
						$result = mysqli_query($conn, $sql);
						header("Location: index.php?uploadsucess");
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "You have an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }

}
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
			}
		}*/
		
		$fname=$_FILES["fileToUpload"]["name"];
		$filetype=$_FILES["fileToUpload"]["type"];
		$fsize=$_FILES["fileToUpload"]["size"];
		$fTempLoc=$_FILES["fileToUpload"]["tmp_name"];
		$fStore="uploads/" .$fname;
		
		move_uploaded_file($fTempLoc, $fStore);
		return $fTempLoc;
	}
		/*
		public function fileAlreadyExists(){
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
					$uploadOk = 0;
			}
		}
		public function saveFilePathTo(){
			 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		public function moveFile(){
		}
		public function fileTypeIsCorrect(){
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
				echo "Sorry, only JPG, JPEG";
				$uploadOk = 0;
			}
		}
		public function fileSizeIsCorrect(){
			if ($_FILES["fileToUpload"]["size"] > 50000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
		}
		public function fileWasSelected(){
		}
		*/
	}
	?>
		