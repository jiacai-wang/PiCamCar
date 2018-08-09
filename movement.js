	var xml;
	function ToggleLight()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./ToggleLight.php",false);
		xml.send();
		var result=xml.responseText;
		var btn=document.getElementById("light");
		if(result=="0") btn.innerHTML="开灯";
		else btn.innerHTML="关灯";
	}
	function Forward()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./f.php",false);
		xml.send();
	}
	function Backward()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./b.php",false);
		xml.send();
	}
	function Straight()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./s.php",false);
		xml.send();
	}
	function Left()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./l.php",false);
		xml.send();
	}
	function Right()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./r.php",false);
		xml.send();
	}
	function LeftLeft()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./ll.php",false);
		xml.send();
	}
	function RightRight()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./rr.php",false);
		xml.send();
	}
	function CamMiddle()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./camm.php",false);
		xml.send();
	}
	function CamLeft()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./caml.php",false);
		xml.send();
	}
	function CamRight()
	{
		xml=new XMLHttpRequest();
		xml.open("GET","./camr.php",false);
		xml.send();
	}
