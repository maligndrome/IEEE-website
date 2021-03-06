<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="The official website of IEEE NITK Student Branch">
<meta name="keywords" content="IEEE,NITK,society,club,KREC,Mangalore,Surathkal,NIT">
<meta name="author" content="Yuvraj Singh Bawa">
<title>IEEE NITK- Members</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/style.css">
<style>
a:hover
{
	cursor:pointer;
}
#member_modal.modal.fade .modal-dialog {
	bottom:25%;
    -webkit-transform: scale(0.3)  translate(0,350px);
    -moz-transform: scale(0.3)  translate(0,350px);
    -ms-transform: scale(0.3)  translate(0,350px);
    transform: scale(0.3)  translate(0,350px);
	transform-origin:0% 50%;
    opacity: 0;
    -webkit-transition: all ease-in-out 0.4s;
    -moz-transition: all ease-in-out 0.4s;
	-ms-transition: all ease-in-out 0.4s;
    transition: all ease-in-out 0.4s;
	border-radius:0px !important;
	width:340px !important;
	height:340px !important;
}
#member_modal
{
	    -webkit-transition: all ease-in-out 0.4s;
    -moz-transition: all ease-in-out 0.4s;
	-ms-transition: all ease-in-out 0.4s;
    transition: all ease-in-out 0.4s;
}

#member_modal.modal.fade .modal-dialog >modal-body
{
	
	background-color:#000;
}

#member_modal.modal.fade.in .modal-dialog {
    -webkit-transform: scale(1)  translate(0,100px);
    -moz-transform: scale(1)  translate(0,100px);
    -ms-transform: scale(1)  translate(0,100px);
    transform: scale(1)  translate(0,100px);
    opacity: 1;
}


</style>
</head>

<body>
<?php include 'navbar.php'; ?>
<div class="container" style="padding-top:100px;">
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">

<font style="font-family:Cambria; color:#18539b; font-size:30px;"><b>Team</b></font>
<hr>
<h3> Faculty advisors</h3><hr /><br />
<div class="row text-center">
<div class="col-lg-2 col-lg-offset-1">
<img src="images/members/sumam_david.jpg" class="img-responsive img-circle" style="max-height:150px; margin: 0 auto;"/><br />
<b>Dr. Sumam David</b><br>
<i>Branch advisor</i><br>
<a href="http://sumam.nitk.ac.in/">Web page</a>
</div>

<div class="col-lg-2">
<img src="images/members/annappa.jpg" class="img-responsive img-circle"  style="max-height:150px; margin: 0 auto;"/><br />
<b>Dr. Annappa</b><br>
<i>Computer Society faculty advisor</i><br>
<a href="http://cse.nitk.ac.in/faculty/annappa">Web page</a>
</div>

<div class="col-lg-2">
<img src="images/members/msbhat.png" class="img-responsive img-circle"  style="max-height:150px; margin: 0 auto;"/><br />
<b>Dr. M. S. Bhat</b><br>
<i>CAS faculty advisor</i><br>
<a href="http://ece.nitk.ac.in/faculty/m-shankaranarayana-bhat">Web page</a>
</div>

<div class="col-lg-2">
<img src="images/members/rkini.jpg" class="img-responsive img-circle"  style="max-height:150px; margin: 0 auto;"/><br />
<b>Dr. Ramesh Kini</b><br>
<i>RAS faculty advisor</i><br>
<a href="http://ece.nitk.ac.in/faculty/ramesh-kini-m">Web page</a>
</div>

<div class="col-lg-2">
<img src="images/members/deepu.jpg" class="img-responsive img-circle"  style="max-height:150px; margin: 0 auto;"/><br />
<b>Dr. Deepu Vijayasenan</b><br>
<i>SPS faculty advisor</i><br>
<a href="http://ece.nitk.ac.in/faculty/deepu-vijayasenan">Web page</a>
</div>

</div>

<div id="id01"></div>
</div>
<div class="col-lg-1">
</div>
</div><!--row-->
<div class="row">
<div class="col-lg-12 text-center" style="padding-top:20px;">
<hr>
&copy;IEEE NITK, 2015 | <a href="nitk.ac.in">Visit NITK</a>
</div>
</div><!--container-->
<div id="member_modal" class="modal fade" role="dialogue">
	<div class="modal-dialog">
	<div class="modal-content" style="border-radius:0px;background-color:rgba(255,255,255,0.95);">
      
      <div class="modal-body" id="member-details">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function checkmob()
{
	var checknum=document.getElementById("mobileno").value;
	var reg_no = /^\d{10}$/;  
  if((checknum.match(reg_no)) )
  {
	   return true;
	}
	
	{
	document.getElementById("mobileno").value="";	
	alert('Please enter your 10 digit mobile number!');
	return true;
	}
}
</script>
<script src="js/main.js"></script>
<script>
var xmlhttp = new XMLHttpRequest();
var url = "IEEE-member-details.json";
var _array;
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        myFunction(myArr);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
	_array=arr;
    var out = "<h3>Core</h3><hr /><b>";
    var i;
	for(i = 0; i < arr.core.length; i++) {
        out += "<a onClick=\"member_modal_trigger('"+arr.core[i].id+"','core')\">"+arr.core[i].name+"</a>&nbsp;&nbsp;";
    }
	out += "</b><br /><h3>Executive members</h3><hr /><b>";
	for(i = 0; i < arr.members.length; i++) {
        out += "<a onClick=\"member_modal_trigger('"+arr.members[i].id+"','members')\">"+arr.members[i].name+"</a>&nbsp;&nbsp;";
    }
    document.getElementById("id01").innerHTML = out+"</b>";
}

function member_modal_trigger(x,y)
{
	var _details;
	var _img='';
	var xmlhttp2 = new XMLHttpRequest();
	xmlhttp2.onreadystatechange = function() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        var temp_img = xmlhttp2.responseText;
		if(temp_img!='')
			_img = '<img src="' + temp_img + '" class="img-responsive img-circle" style="margin-left:auto; margin-right:auto;"/>';
		else
		    _img = '';
		if(y=='members')
	for(i = 0; i < _array.members.length; i++)
	{
		if(_array.members[i].id==x)
		{
        _details = _img+"<h1>" + _array.members[i].name + "</h1><b>Interests</b><br />" + _array.members[i].interests + "<br />";
		var links= '<font style="font-size:25px">'+(_array.members[i].email?'<a href="' + _array.members[i].email + '"><i class="fa fa-envelope"></i></a>&nbsp;':'')+(_array.members[i].github?'<a href="' + _array.members[i].github + '"><i class="fa fa-github"></i></a>&nbsp;':'')+(_array.members[i].linkedin?'<a href="' + _array.members[i].linkedin + '"><i class="fa fa-linkedin-square"></i></a>':'')+'</font>';
		if(links)
		_details+=links;
		break;
		}
		else
		continue;
    }
	else if(y=='core')
	for(i = 0; i < _array.core.length; i++)
	{
		if(_array.core[i].id==x)
		{
        _details = _img + "<h1>" + _array.core[i].name + "</h1><h3>"+ _array.core[i].position + "</h3> <b>Interests</b><br />" + _array.core[i].interests + "<br />";
		var links= '<font style="font-size:25px">'+(_array.core[i].email?'<a href="' + _array.core[i].email + '"><i class="fa fa-envelope"></i></a>&nbsp;':'')+(_array.core[i].github?'<a href="' + _array.core[i].github + '"><i class="fa fa-github"></i></a>&nbsp;':'')+(_array.core[i].linkedin?'<a href="' + _array.core[i].linkedin + '"><i class="fa fa-linkedin-square"></i></a>':'')+'</font>';
		if(links)
		_details+=links;
		break;
		}
		else
		continue;
    }
	document.getElementById('member-details').innerHTML = _details;
	$('#member_modal').modal('show');
    }
}
xmlhttp2.open("GET","getimage.php?q="+x, true);
xmlhttp2.send();
	
}
</script>
</body>
</html>
