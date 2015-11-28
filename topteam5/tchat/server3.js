var app = require('express')();
var fs = require('fs');

var httpServer = require('http').createServer(function(req, res){
	fs.readFile("tchat.html", 'utf-8', function(err, data){
		res.writeHead(200, {'Content-Type': 'text/html'});
        res.write(data);
        res.end();
	});
});
var io = require('socket.io')(httpServer);

var messages = [];
var history = 6;

io.on('connection', function(socket){
	console.log('a user connected');

	for(var k = 0; k < messages.length; k++)
	{
		socket.emit('chat message', messages[k]);
	}

	socket.on('disconnect', function(){
		console.log('user disconnected');
	});

	socket.on('chat message', function(msg){
		console.log('message :' + msg);
		io.emit('chat message', msg);
		var date = new Date();
		msg.date = date.getHours() + ':' +  date.getMinutes();
		messages.push(msg);
		if (messages.length > history)
		{
			messages.shift();
		}
	});


});

httpServer.listen(3000);