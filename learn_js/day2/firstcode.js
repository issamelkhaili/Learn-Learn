let	todos = ["study Js", "Learn Arrays"];
let	done = [];
let doneindex;
const	MAX_TODOS = 5;
let	user = {
	name : "Issam",
	completed : 0
};

function	addtodo(task)
{
	if(todos.length >= MAX_TODOS)
	{
		console.log("the list if full please remove something");
		return;
	}
	todos.push(task);
	console.log("Task Added !");
}

function	removetodo(task)
{
	if(todos.lenght <= 0 || todos.indexOf(task) == -1)
	{
		console.log("No Task Found !");
		return;
	}
	todos.splice(todos.indexOf(task), 1);
	console.log("Task Removed !");
}

function	donetodo(task)
{
	if(todos.lenght <= 0 || todos.indexOf(task) == -1)
	{
		console.log("No Task Found , Please Try again later !\n");
		return;
	}
	todos.splice(todos.indexOf(task), 1);
	user.completed++;
	done.push(task);
	console.log("Task "+task+" is completed\n");
}

let	user_input = prompt("choose 1 for add 2 for done and 3 to remove a task\n");
if (user_input == 1)
{
	let user_add =prompt("enter the task you wanna add\n");
	addtodo(user_add);
}
else if (user_input == 2)
{
	let user_remove = prompt("enter the task you wanna remove\n");
	removetodo(user_remove);
}
else if (user_input == 3)
{
	let user_finish = prompt("enter the task you wanna set as finished\n");
	donetodo (user_finish);
}
else
{
	console.log("invalid input\n");
}
console.log ("Your TodoList is " + todos);
