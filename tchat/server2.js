var http = require('http');
var md5 = require('MD5');
var users= {};
var messages = [];
var history = 6;

httpServer = http.createServer(function(req, res){
	console.log('Un utilisateur a affiché la page');
});
    
var io = require('socket.io').listen(httpServer);

io.sockets.on('connection', function(socket){
	var me = false;
	console.log('Nouveau utilisateur');

	for(var k in users)
	{
		socket.emit('newusr', users[k]);
	}

	for(var k in messages)
	{
		socket.emit('newmsg', messages[k]);
	}

	socket.on('login', function(users){
		me = user;
		me.id = user.mail.replace('@','-').replace('.','-');
		me.avatar = 'https://gravatar.com/avatar/' + md5(user.mail) + '?s=50';
		socket.emit('logged');
		user[me.id] = me;
		io.socket.emit('newusr', me);
	});

	socket.on('disconnect', function(){
		if (!me)
		{
			return false;
		}
		delete users[me.id];
		io.sockets.emit('disusr', me);
	});

	socket.on('newmsg', function(message){
		message.user = me;
		date = new Date();
		message.h = date.getHours();
		message.m = date.getMinutes();
		message.push(message);
		if (mesages.length > history){
		message.shift();
	}
		io.sockets.emit('newmsg', message);
	});
});

httpServer.listen(14144);
