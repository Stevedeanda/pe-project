
console.log('yo, check this out...');

const playlists = [];
var count = 1;


function print(note = "") {
	console.log(`----${note}`)
	console.log('Playlist: ', playlists);
}

function add(song, artist, genre) {
	const playlist = {
		number: count++,
		song: song,
		artist: artist,
		genre: genre,
	};
	playlists.push(playlist);
	print(`Added ${song} by ${artist}`);
}

function remove(index) {
	print(`Deleted ${playlists[index].song} by ${playlists[index].artist}`);
	playlists.splice(index, 1);
}

function favorite(index) {
	playlists[index].favorite = true;
	print(`${playlists[index].song} by ${playlists[index].artist} was added to Favorite`);
}


add("One More Time", "Daft Punk", "EDM");
add("Propaganda", "DJ Snake", "EDM");
add("Go DJ", "Lil Wayne", "Hip-Hop");
add("God's Plan", "Drake", "Hip-Hop");
add("Everything Now", "Arcade Fire", "Rock");
add("Master Of Puppets", "Metallica", "Rock");
add("El Apagón", "Bad Bunny", "Reggaeton");
add("Fix You", "Coldplay", "Indie");
add("Barbara Streisand", "Duck Sauce", "EDM");

remove(4);

favorite(3);

add("Worst Behavior", "Drake", "Hip-Hop");

favorite(6);

favorite(2);


