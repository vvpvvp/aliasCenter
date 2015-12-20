<?php
	class Page{
		var $pageNo = 1;
		var $pageCount;
		var $pageSize = 10;
		var $pagename;
		
		function getPageNum() {
			return (floor($this->pageCount/$this->pageSize)+($this->pageCount%$this->pageSize==0?0:1));
		}
		
		function getBegin() {
			return ($this->pageNo-1)*$this->pageSize;
		}
		
		function toString(){
			$returnString ="";
			$returnString = $returnString.($this->pageNo>1?"<a href='".$this->pagename."pageNo=".($this->pageNo-1)."'>上一页</a>":"").
			("&nbsp;&nbsp;第".$this->pageNo."页/共".$this->getPageNum()."页&nbsp;&nbsp;共&nbsp;".$this->pageCount."&nbsp;个&nbsp;&nbsp;").
			(($this->pageCount>$this->pageNo*$this->pageSize)?"<a href='".$this->pagename."pageNo=".($this->pageNo+1) ."'>下一页</a>&nbsp;&nbsp;":"");
			
			$returnString = $returnString."<select onchange='window.location=this.value'>";
			for($i=1;$i<=$this->getPageNum();$i++){
				$returnString = $returnString."<option ".($this->pageNo==$i?"selected":"")." value='".$this->pagename."pageNo=".$i."'>".$i."</option>";
			}
			$returnString = $returnString."</select>&nbsp;&nbsp;";
			return $returnString;
			
		}
	}
?>