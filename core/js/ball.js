var colors = [
	"white",
	"red",
	"orange",
	"yellow",
	"lightgreen",
	"green",
	"blue",
	"lightblue",
	"purple",
	"salmon"
]

function Ball(x, y, number)
{
	this.position =	{
		'x': x,
		'y': y
	};

	this.number = number;
	this.radius = document.getElementById("radius").value;

	this.color = colors[number];

	//console.log(this.number + ": " + this.color);

	this.Draw = function()
	{
		c.beginPath();
		c.arc(this.position.x, this.position.y, this.radius, 0, Math.PI * 2, false);
		c.fillStyle = this.color;
		c.fill();
		c.strokeStyle = "#FFF;"
		c.lineWidth = 2;
		c.stroke();
	}
}