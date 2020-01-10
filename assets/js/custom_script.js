xhttp = new XMLHttpRequest();

function initializeTable(tableName, lengthChange=true, info=true)
{
	$(document).ready(function(){
		$("#" + tableName).DataTable({
			aLengthMenu: [
		        [5, 10],
		        [5, 10]
		    ],
		    iDisplayLength: 5,
		    lengthChange: lengthChange,
		    info: info
		});
	});
}

// Select & Deselect button onclick trigger for manage_subjects.php
function initializeToggleButton()
{
	buttons = $(".selectDeselectToggle");
	subjectsAssigned = $("select[name='subjectsAssigned[]'")[0];
	subjectsAssigned.childNodes[1].selected = true;
	for(btnIndex=0; btnIndex<buttons.length; btnIndex++)
	{
		btn = buttons[btnIndex];
		btn.setAttribute("state", "select")
		btn.option = document.createElement("option");
		btn.option.setAttribute("value", btn.getAttribute("value"));
		btn.option.innerText = btn.getAttribute("value");
		btn.option.selected = true;
		btn.onclick = function()
		{
			if(this.getAttribute("state") == "select")
			{
				subjectsAssigned.appendChild(this.option);
				this.setAttribute("state", "deselect");
				this.setAttribute("class", "btn btn-danger btn-sm mb-3 selectDeselectToggle");
				this.innerHTML = "<i class=\"fa fa-times\"></i><span>Deselect</span>";
			}else if(this.getAttribute("state") == "deselect")
			{
				subjectsAssigned.removeChild(this.option);
				this.setAttribute("state", "select");
				this.setAttribute("class", "btn btn-primary btn-sm pl-3 pr-3 mb-3 selectDeselectToggle");
				this.innerHTML = "<i class=\"fa fa-thumbtack\"></i><span>Select</span>";
			}
		};
	}
}

function selectBindOnChange(elementName, callback)
{
	$("select[name='"+elementName+"']")[0].onchange=function(event)
		{
			callback(event.target.options[event.target.selectedIndex]);
		};
}

function sendGETRequest(url, callback)
{
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
		{
			callback(this.responseText);
		}
	}
	xhttp.open("GET", url, true);
	xhttp.send();
}