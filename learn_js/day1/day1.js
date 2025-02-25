let number = Math.floor(Math.random() * 11);

let user_input = prompt("I have a number in my mind ,Can You Guess it ?\n");
if (typeof number === "number")
{
    if (user_input == number)
    {
        console.log("Congrats ! You Made it\n")
        return;
    }
    else if (user_input != number)
    {
        console.log("good luck Next time .\n");
        return;
    }
}
else
{
	console.log("number should bee betweeen 0 and 10\n");
	return;
}
