const	needed = 120;
var	timeleft;
var	daysleft;
var date = new Date().toISOString().split("T")[0];
date = date.split('-')[2];
// input_variables
var	dones = 80;
var maxdays = 23;
//result_variables
var perday;

function	gettimeleft(done)
{
	if (done > needed)
		console.log("Congrats You already finished the required logtime");
	else
		timeleft = needed - done;
}

function	getdaysleft(maxday)
{
	if(date > maxday)
		console.log("The max date has already passed !");
	daysleft = maxday - date;
}

function	printdaysleft()
{
	getdaysleft(maxdays);
	if (daysleft == null)
	{
		console.log("no value was set for daysleft\n");
		return;
	}
	if (daysleft == 1)
		console.log("You Have " + daysleft +" day to finish your logtime.\n");
	else if (daysleft == 0 || daysleft > 1)
		console.log("You Have " + daysleft +" days to finish your logtime.\n")
	else
		console.log("Error");
}

function	printhoursleft()
{
	gettimeleft(dones);
	if (timeleft == null)
	{
		console.log("no value was set for timeleft");
		return;
	}
	if(timeleft == 1)
		console.log("You need " + timeleft + " hour to finish your logtime.\n");
	else if(timeleft > 1)
		console.log("You need " + timeleft + " hours to finish your logtime.\n");
	else
		console.log("Error");
}

function	neddedperday()
{
	gettimeleft(dones);
	getdaysleft(maxdays);

	perday = timeleft / daysleft;
	if (perday == null)
	{
		console.log("Error");
		return ;
	}
	if (perday > 24)
	{
		console.log("Sorry , But seems that you can't the required logtime of this month");
		return;
	}
	console.log("You need to log " + perday + " hour(s) in " + daysleft + " day(s)");
}

neddedperday();
